<?php 

//connect to db
session_start();
error_reporting(0);
$Id=$_SESSION ['Id'];

//echo $Id;
$idf=$_GET['idf'];
// echo //$_SESSION['id_p']
// $idf
// ;
  
?>
<?php 
require 'db.php';
$host='localhost';
$username='root';
$password='';

$db='aqsa';
//connect to db
//session_start();

$Id=$_SESSION ['Id'];
//echo $Id;
$con=new mysqli($host,$username,$password,$db);
$user_check_query="SELECT * from users where Id='$Id' ";
$result=mysqli_query($con,$user_check_query);
$user=mysqli_fetch_assoc($result);
//  if($user){

//     //  if ($user['Id']===$Id) {
//     //     // $_SESSION['Id']= $user['Id'];
//     //      //header('location:index.html');
//     //      echo $user['Id'];
//     //      echo '<img src='.$user['picture'].'width="15%" height="15%">';
        
//     //  }
//  }
//  else{
// echo "no";
//  }

//

  

if (isset($_POST['post'])) {

$d=mktime(11, 14, 54, 8, 12, 2019);

$textarea=$_POST['textarea'];
$Create_at=date("Y-m-d h:i:sa", time());
$User_Id=$user['Id'];
 //echo $_FILES["picture"]["tmp_name"]; 
$picture=addslashes('file_get_contents($_FILES["picture"]["tmp_name"])') ;
$filename=$_FILES["picture"]["name"];
$temp=$_FILES["picture"]["tmp_name"];
$folder="img/".$filename;
echo "<img src=".$folder.">";

//echo "<br>".$filename."<br>".$temp."<br>".$folder;
//move_uploaded_file($temp,$folder);
//echo $User_Id;

$sql2 ='insert into posts ( text, picturePost, Create_at, User_id) values(" '.$textarea.' "," '.$folder.' "," '.$Create_at.' "," '.$User_Id.' ");';

if($con->query($sql2)){
  //  echo 'row inserted';
   
//header('location:select.php');
    }
else{
    //echo 'not inserted..try again';
}




}
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap 5 css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--style-->
    <link rel="stylesheet" href="css/style.css">
    <title>Social Media</title>
</head>
<body>

<!--start nav bar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand brand">Social Media</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText" style="flex-grow: 0;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="logout.php?Id=<?php echo $_SESSION['Id'];?>">
    LOGOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link asignUp" href="Profile.php">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link asign" href="pjp.php">HOME</a>
          </li>
        </ul>
      <!--if login-->
        <!-- <div class="flexPostForm">
            <div class="imgPostForm imgHead" >
                <img src="img/man.jpg" alt="">
            </div>
            <div class="namePostCard">
                <p class="name">Omar Khaled</p>
            </div>   
        </div>  -->
    </div>
    </div>
</nav>
<!--end nav bar-->

<!--start content-->
<div class="container">
    <div class="postForm">
       <div class="flexPostForm">
        <div class="imgPostForm">

                     <?php  echo "<img src=".$user['picture'].">"; ?>

        
        </div>
        
        <input data-bs-toggle="modal" data-bs-target="#exampleModal" class="form-control" type="text" placeholder="Type Your Post Here" aria-label=".form-control-lg example">
        <!-- Modal -->
        
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Post</h5>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <!-- textarea -->
                    <textarea name="textarea"placeholder=" Type your post here..." required="required" class="form-control txtPostModal" id="exampleFormControlTextarea1" rows="3">
                    
                    </textarea>
                    <!-- file -->
                    <input name="picture" class="form-control" type="file" id="formFile">
                </div>

                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button  name="post" type="submit" class="btn btn-primary">Post</button>
                </div>
            </div>
            </div>
            </form>
        </div>
       </div>     
    </div>

    <?php 
    
    
    
require 'db.php';
//$sql='select * from users';
// $sql="select * from posts join users on users.Id=posts.User_id ";
 //$sql="select * from posts";

 //$sql="select * from comments join users on users.Id=comments.User_id join posts on posts.Post_Id=comments.Post_id";
 //$sql="select * from posts join users on users.Id=posts.User_id";
 $sql="select * from posts join users on users.Id=posts.User_id where Post_id=$idf";

$result=$con->query($sql);

if($result->num_rows >0)
// print_r($result->fetch_assoc());
// print_r($result->fetch_assoc());
while($row=$result->fetch_assoc()){
//picture '<img src="data:image/png;base64 ,'.base64_encode($row['picture']).'">'
//echo '<img src='.$row['picture'].'width="15%" height="15%">';


//echo $row['text'];
    
     

   
    
 
  // echo $row['name'];
//picture '<img src="data:image/png;base64 ,'.base64_encode($row['picture']).'">'
//echo '<img src='.$row['picture'].'width="15%" height="15%">';
// echo '<tr><td>'.$row['Post_Id'].'</td><td>'.$row['text'].'</td><td>'.$row['User_id'].'</td><td>'.'<img src='.$row['picturePost'].'width="15%" height="15%">'.'</td></tr>';
// echo '</table>';
    ?>

    <div class="postCard">
        <div class="postForm">
            <div class="flexPostForm">
                <div class="imgPostForm">
                <?php    echo  '<img src='.$row['picture'].'  alt="...">';     ?>
           
                </div>
                <div class="namePostCard">
                    <p class="name"><?php echo $row['name']; ?></p>
                    <div class="divTime">
                        <i class="fa-solid fa-clock"></i>
                        <p><?php echo $row['Create_at']; ?></p>
                    </div>
                </div>   
            </div>
            <div class="imgPost">
               
            <?php    echo  '<img src='.$row['picturePost'].' class="img-fluid rounded" alt="...">';     ?>
            
            </div>
            <div class="divNumComments">
                <i class="fa-solid fa-comment pNumComments"></i>
                <?php  
                
                $po=$row['Post_Id'];
                $sql9="select * from comments join users on users.Id=comments.User_id join posts on posts.Post_Id=comments.Post_id where comments.Post_id=$po";
$result9=$con->query($sql9);

//if($result2->num_rows >0)
// print_r($result->fetch_assoc());
// print_r($result->fetch_assoc());
$numcom=0;
while($row9=$result9->fetch_assoc()){
//if($row['Post_Id']==$row9['Post_Id']){
   //echo '<p class="pNumComments">'.$row9['Post_Id'].' Comments</p>';
           
$numcom++;

//}
}
          echo  '<p class="pNumComments">'. $numcom.' Comments</p>';   
          

                ?>
            </div>
            <form action="" method="post">
            <div>
                <div class="flexPostForm">
                    <div class="imgPostForm">  <?php 
$sql5="select * from users where id='$Id'";
$result5=$con->query($sql5);

if($result5->num_rows >0)
 
if($row5=$result5->fetch_assoc()){
   
?>

                        
                    <?php    echo  '<img src='.$row5['picture'].'  alt="...">';   }  ?>
           
                    </div>
                    <input class="form-control" name="TextComment" type="text" required="required" placeholder="Type your comment" aria-label=".form-control-lg example">
                     <button  name="comt" type="submit" >Comment</button>
                     
                
                </div>
            </div></form>
            
<?php

  //{
    
    //$d=mktime(11, 14, 54, 8, 12, 2019);
//     $Create_at3=date("Y-m-d h:i:sa", time());
//     $comment=$_POST['Comment'];
//      $Post_id= $row['Post_Id'];
//     $User_id= $row2['Id'];
    

// $sql ='insert into comments ( text, Create_at, User_id, Post_id) values(" '.$comment.' "," '.$Create_at3.' "," '.$User_id.' "," '.$Post_id.' ");';

// if($con->query($sql)){
//     echo 'row inserted';
// header('location:select.php');
//     }
// else{
//     echo 'not inserted..try again';
// }



//  }



$sql2="select * from comments join users on users.Id=comments.User_id join posts on posts.Post_Id=comments.Post_id";
$result2=$con->query($sql2);

//if($result2->num_rows >0)
// print_r($result->fetch_assoc());
// print_r($result->fetch_assoc());
while($row2=$result2->fetch_assoc()){
if($row2['Post_Id']==$row['Post_Id']){
    //session_start();
    // Storing session data
    //$_SESSION["Post_Id"] = $row['Post_Id'];
    //$_SESSION["User_id"] = $row['User_id'];
 //echo $row['Post_Id'];

?>

            <hr class="hr">
            <div class="comment">
                <div class="flexPostForm">
                    <div class="imgPostForm">
                        <!-- <img src="img/man.jpg" alt=""> -->
                        <?php    echo  '<img src='.$row2['picture'].'  alt="...">';     ?>
           
                    </div>

                    <div class="boxComment">
                        <!-- <p class="name"><?php echo $row2['name']; ?></p> -->
                    
                        <p class="nameBoxComment"><?php echo $row2['name']; ?></p>
                        <p class="contentBoxComment"><?php echo $row2['text_comment']; ?></p>
                        <div class="divTime">
                            <i class="fa-solid fa-clock"></i>
                            <!-- Created_at_comment -->
                            <p><?php echo $row2['Created_at_comment']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <?php  
}
        //include 'db.php';
        //
       

          
        
        
        ?>
    


            </div>
    <!--  -->
<!--end content-->
<?php  
}
if (isset($_POST['comt'])){

    //echo
  //  session_start();
     $Post=$row['Post_Id'];
   //  if($Post=$row2['Post_Id']){
     //$User=$row['User_id'];
     $User=$Id;
  $text=$_POST['TextComment'];
  $Create_at2=date("Y-m-d h:i:sa", time());
  
  
  //echo $Post."<br>".$User."<br>".$text."<br>".$Create_at2."<br>";
  $sql3 ='insert into comments ( text_comment, Created_at_comment, User_id,Post_id) values(" '.$text.' "," '.$Create_at2.' ","  '.$User.' "," '.$Post.' ");';

  if($con->query($sql3)){
     // echo 'row inserted';
     
  //header('location:indexPost.php');
      }
  else{
    //  echo 'not inserted..try again';
  }
  ////////

 }

}

?>
<!--Bootstrap 5 js-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>




