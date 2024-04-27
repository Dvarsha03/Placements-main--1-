<?php session_start();

include 'connect.php';
 
if(isset($_POST['login']))
{

$username=$_POST['sid'];
$password=$_POST['password'];

 $query= " select * from  `students` where sid= '$username' and spw='$password'";
//  $query2= " select * from  `teacher` where tid= '$username' and password='$password'";
//  $query3= " select * from  `coach` where coid= '$username' and password='$password'";
//  $username=mysqli_real_escape_string($con,$username);
//  $password=mysqli_real_escape_string($con,$password);

 $result=mysqli_query($con,$query) or die(mysqli_error);
//  $result1=mysqli_query($con,$query2) or die(mysqli_error);
//  $result2=mysqli_query($con,$query3) or die(mysqli_error);

 $details=mysqli_fetch_assoc($result);
//  $details1=mysqli_fetch_assoc($result1);
//  $details2=mysqli_fetch_assoc($result2);
//$_sid=$details['sid'];

 
 $counter=mysqli_num_rows($result);
//  $counter1=mysqli_num_rows($result1);
//  $counter2=mysqli_num_rows($result2);

 
 
 if($counter!=0)
 {
     
    $_SESSION['sid']=$details['sid'];
    $_SESSION['uid']=$details['uid'];
    $_SESSION['sname']=$details['sname'];
   //  $_SESSION['spw']=$details['spw'];
   //  $_SESSION['CID']=$details['CID'];
   //  $_SESSION['DOB']=$details['dob'];
   //  $_SESSION['ADDRESS']=$details['ADDRESS'];   
    
   //  $queryrank="SELECT @r:=@r+1 as Rank,sid FROM exam_totals JOIN (SELECT @r:=0 from DUAL) as sub ORDER BY TOTAL DESC";
    
    echo" <script>document.location='student-dashboard.php'</script>";
    //  echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";
 }
//  elseif($counter1!=0)
//  {
     
//     $_SESSION['TID']=$details1['TID'];
//     $_SESSION['Teacher_Name']=$details1['Teacher_Name'];
//     $_SESSION['DOB']=$details1['DOB'];
//     $_SESSION['DOJ']=$details1['DOJ'];
//     $tid=$_SESSION['TID'];
//     $q="select cid from class where tid='$tid'";
//     $r=mysqli_query($con,$q) or die(mysqli_error());
//     $r=mysqli_fetch_assoc($r);
//     $_SESSION['CID']=$r['cid'];
//      echo" <script>document.location='teacher-dashboard.php'</script>";
//  }
//  elseif($counter2!=0)
//  {
      
//     $_SESSION['coid']=$details2['coid'];
//     $_SESSION['name']=$details2['name'];
//     $_SESSION['DOB']=$details2['DOB'];

//    //  $score=" select sum(marks) as score from '$class_id' where std_id='$std_id'";
   
    
//     echo" <script>document.location='cct-dashboard.php'</script>";
//  }
//  else{
      echo "<script type='text/javascript'>alert('Inavalid Username or Password')</script>";

 }


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Student Login</title>

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
  <img class="img-fluid" src="assets/img/student.png" alt=""> 
</div> 
<div class="login-right"> 
 <div class="login-right-wrap">
<h1>Student Login</h1>
<p class="account-subtitle">Access to your dashboard</p>

<form action="" method="post">
<div class="form-group">
<input class="form-control" type="text" name="sid" placeholder="user name">
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