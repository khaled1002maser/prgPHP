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
    <title>Register Now</title>
</head>
<body>
<main class="form-signin">
<a href="pjp.php">
              <h1 class="brand">Social Media</h1>
            </a>
          <h1 class="h3 mb-3 fw-normal">Register Now</h1>
    <form action="insert.php" method="post" enctype="multipart/form-data">
        <table >
            <tr><td>UserName</td><td><input type="text" name="name" class="form-control" id="floatingInput" placeholder="name" required="required"></tr>
            <div class="form-floating">
            <tr><td>Password</td><td><input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password" required="required"></td></tr>
            
            </div>
            <tr><td>Email</td><td><input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required="required"></td></tr>
            
            <tr><td>Picture</td><td><input type="file" name="picture" class="form-control" id="floatingMobile" placeholder="Picture" required="required"></td></tr>
            
            <tr><td>Mobile</td><td><input type="tel" name="mobile" class="form-control" id="floatingInput" placeholder="mobile" required="required"></td></tr>
            <tr><td colspan="2"><input type="submit" class="w-100 btn btn-lg btnLogin" value="Insert"></td></tr>
            
            
        </table>
       
    </form>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>






