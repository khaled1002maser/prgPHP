<?php 
require 'db.php';
if (isset($_POST['login'])) {
$email=$_POST['email'];
$pass=$_POST['pass'];
$host='localhost';
$username='root';
$password='';

$db='aqsa';
//connect to db
$con=new mysqli($host,$username,$password,$db);


$sql=$con->prepare("select * from users where email=? and pass=?");
$sql->bind_param("ss", $email,$pass);
$sql->execute();
$res=$sql->get_result();
if($res->num_rows>0){



  $user_check_query="SELECT * from users where email='$email' AND pass='$pass'";
  $result=mysqli_query($con,$user_check_query);
  $user=mysqli_fetch_assoc($result);
  session_start();
  
  if($user){
  
      if ($user['email']==$email && $user['pass']==$pass) {
          $_SESSION['Id']= $user['Id'];
          echo $user['Id'];
          header('location:pjp.php');
          
      
  }

  }else {
          echo "NO";
      } 








}else{

  echo "الايميل غير مسجل";
}





//$query="SELECT * from users where email='$email'";
//     echo $email;
//    // $query=mysqli_query("select * from users where email='$email'");
//     $query=mysql_query("select * from users where email='$email'");
//     $row=mysql_num_rows($query);
//    if($row){
//       echo "kjklj";
//    }
//    else
//    {
//        echo "hghj";
//    }


//$result=$con->query($sql);
//$login=$database->prepare("select * from users where email=:email AND password=:password");
//$login->bindParam("email",$_POST['email']);
//$login->bindParam("password",$_POST['password']);
//$login->execute();
//$result=mysqli_query($db,$query);

// if($row==1){
//    echo "1";
// }else{
//   echo "no";
// }
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
    <title>login</title>
</head>
<body>
    <main class="form-signin">
        <form action="" method="post" enctype="multipart/form-data">
        <a href="">
            <h1 class="brand">Social Media</h1>
        </a>
          <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      
          <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required="required">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required="required">
            <label for="floatingPassword">Password</label>
          </div>
      
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
        
<br>
          
             <a class="linksignup" href="insertuser.php">If you do not have an account, click here</a>
            </div> 

          <button class="w-100 btn btn-lg btnLogin" name="login" type="submit">Login</button>
        </form>

        
    </main>

    <!--Bootstrap 5 js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>



  </body>
  </html> 