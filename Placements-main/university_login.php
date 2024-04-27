<?php session_start();

include 'connect.php';
 
if(isset($_POST['login']))
{

$username=$_POST['uid'];
$password=$_POST['password'];

 $query= " select uid  from  universities where uid= '$username' and upw='$password' ";

 $result=mysqli_query($con,$query) or die(mysqli_error($con));


 $details=mysqli_fetch_assoc($result);


 
 //$counter=mysqli_num_rows($result);

 
 
 if($result)
 {
     
    $_SESSION['uid1']=$details['uid'];

    echo" <script>document.location='university-dashboard.php'</script>";
   
 }

 else{
      echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";

 }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Login</title>

<!-- <link rel="shortcut icon" href="assets/img/favicon.png"> -->

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper login-body">
<div class="login-wrapper">
<div class="container">
<div class="loginbox">
 <div class="login-left"> 
  <img class="img-fluid" src="assets/img/university.png" alt=""> 
</div> 
<div class="login-right"> 
 <div class="login-right-wrap">
<h1>University Login</h1>
<p class="account-subtitle">Access to our dashboard</p>

<form action="" method="post">
<div class="form-group">
<input class="form-control" type="text" name="uid" placeholder="user name">
</div>
<div class="form-group">
<input class="form-control" type="password" name="password" placeholder="Password">
</div>
<div class="form-group">
<button class="btn btn-primary btn-block" name="login" type="submit">Login</button>
</div>
</form>

<!-- <div class="text-center forgotpass"><a href="forgot-password.html">Forgot Password?</a></div> -->
<!-- <div class="login-or">
<span class="or-line"></span>
<span class="span-or">or</span>
</div>

<div class="social-login">
<span>Login with</span>
<a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
</div> -->

<!-- <div class="text-center dont-have">Don’t have an account? <a href="register.html">Register</a></div> -->
</div>
</div>
</div>
</div>
</div>
</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>