<?php
include 'db.php';
$name=$_POST['name'];
$password=$_POST['pass'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];

$picture=addslashes('file_get_contents($_FILES["picture"]["tmp_name"])') ;
$filename=$_FILES["picture"]["name"];
$temp=$_FILES["picture"]["tmp_name"];
//print_r ($_FILES["picture"]["tmp_name"]);


$folder="img/".$filename;
//echo "<br>".$filename."<br>".$temp."<br>".$folder;
move_uploaded_file($temp,$folder);


$sql=$con->prepare("select * from users where email=?");
$sql->bind_param("s", $email);
$sql->execute();
$res=$sql->get_result();
if($res->num_rows>0){
 echo 'The email is registered with the site';
}else {
    $sql ='insert into users (name,email,pass,mobile,picture) values(" '.$name.' "," '.$email.' "," '.$password.' "," '.$mobile.' "," '.$folder.' ");';
    
    if($con->query($sql)){
       // echo 'row inserted';
    header('location:login.php');
        }
    else{
        echo 'not inserted..try again';
    }
}





