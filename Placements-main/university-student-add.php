<?php session_start();
 include 'connect.php';

 
 if(empty($_SESSION['uid1']))
 {
     header('location:index.php');
 }
 $uid=$_SESSION['uid1'];
 
 $uname=$_SESSION['uname'];
 
 
 if(isset($_POST['submit'])){
    $sid=$_POST['sid'];
 
    $sname=$_POST['sname'];
    $branch=$_POST['branch'];
    $cgpa=$_POST['cgpa'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];
    $gard_year=$_POST['grad_year'];
    $degree=$_POST['degree'];
    $password=$_POST['spw'];
    $query2="insert into students values($sid, $uid,$sname,$uname,$branch,$cgpa,$mobile,$email,$gender,$grad_year,$degree,$password) ";
    $result=mysqli_query($con,$query2) or die(mysqli_error);
 
    if($result)
    {
        echo "<script type='text/javascript'>alert('Data Inserted Successfully')</script>";
        echo" <script>document.location='university_student_editlist.php'</script>";
    }
}
 



?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Students</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<!-- <img src="assets/img/logo.png" alt="Logo"> -->
</a>
<a href="index.html" class="logo logo-small">
<!-- <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30"> -->
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>



<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">




<li class="nav-item dropdown has-arrow" >
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle"  src="assets/img/profiles/profile.png" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/profile.png" assalt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?php  echo $_SESSION['rname'] ?></h6>
<p class="text-muted mb-0">Student</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<a class="dropdown-item" href="inbox.html">Inbox</a>
<a class="dropdown-item" href="logout.php">Logout</a>
</div>
</li>

</ul>

</div>


<div class="main-wrapper">

<div class="header">

<div class="header-left">
<a href="index.html" class="logo">
<!-- <img src="assets/img/logo.png" alt="Logo"> -->
</a>
<a href="index.html" class="logo logo-small">
<!-- <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30"> -->
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>



<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">




<li class="nav-item dropdown has-arrow" >
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle"  src="assets/img/profiles/profile.png" width="31" alt="Ryan Taylor"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/profile.png" assalt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?php  echo $_SESSION['rname'] ?></h6>
<p class="text-muted mb-0">Recuiter</p>
</div>
</div>
<a class="dropdown-item" href="profile.html">My Profile</a>
<!-- <a class="dropdown-item" href="inbox.html">Inbox</a> -->
<a class="dropdown-item" href="logout.php">Logout</a>
</div>
</li>

</ul>

</div>


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu active">
<a href="#"><i class="fas fa-users"></i> <span> Dashboard</span></a>
<!-- <ul>
<li><a href="student-dashboard.php" class="active">Recuiter Dashboard</a></li>
</ul> -->
</li>
<li class="submenu">
<a href="#"><i class="fas fa-university"></i> <span> University </span><span class="menu-arrow"></span></a>
 <ul>
<li><a href="university-student-add.php">Add Student</a></li>
<li><a href="university_student_editlist.php">Edit Student</a></li>
</ul>
</li> 
<!-- <li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Students</span> </a>
 <ul>
<li><a href="student-teachers.php">Teacher's List</a></li>
<li><a href="teacher-details.php">Class Teacher </a></li>
</ul> 
</li>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Add Skill</span> </a>
</li> -->
<!-- <li class="menu-title">
<span>Management</span>
</li>
<li>
<a href="exam-results.php"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
</li>
<li>
<li>
<a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>attendence</span></a>
</li>
<li>
<li class="menu-title">
<span>Co-circular activities</span>
</li>
<li>
<a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
</li>
<li class="menu-title"> -->

</div>
</div>
</div>

<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Add Student</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Add Student</li>
</ul>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card">
<div class="card-body">
<form mehod="POST">
<div class="row">
<div class="col-12">
<h5 class="form-title"><span>Student Information</h5>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>STUDENT ID</label>
<input type="text" name="sid" class="form-control">
</div>
</div>
<!-- <div class="col-12 col-sm-6">
<div class="form-group">
<label>UNIVERSITY ID</label>
<input type="text" name="uid" class="form-control">
</div>
</div> -->
<div class="col-12 col-sm-6">
<div class="form-group">
<label>STUDENT NAME</label>
<div>
<input type="text" name="sname" class="form-control">
</div>
</div>
</div>
<!-- <div class="col-12 col-sm-6">
<div class="form-group">
<label>UNIVERSITY NAME</label>
<input type="text" name="uname" class="form-control">
</div>
</div> -->
<div class="col-12 col-sm-6">
<div class="form-group">
<label>BRANCH</label>
<input type="text" name="branch" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>CGPA</label>
<input type="text" name="cgpa"  class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>MOBILE</label>
<input type="text" name="mobile" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>EMAIL</label>
<input type="email" name="email"class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>GENDER</label>
<select name="gender"  class="form-control select">
<option>Select Gender</option>
<option>FEMALE</option>
<option>MALE</option>
</select>
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>PASSING YEAR</label>
<input type="text" name="grad_year" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>DEGREE</label>
<input type="text" name="degree" class="form-control">
</div>
</div>

<div class="col-12 col-sm-6">
<div class="form-group">
<label>PASS WORD</label>
<input type="password" name="spw" class="form-control">
</div>
</div>
<!-- <div class="col-12 col-sm-6">
<div class="form-group">
<label>Address</label>
<textarea class="form-control"></textarea>
</div>
</div> -->
<div class="col-12">
<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/select2/js/select2.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>