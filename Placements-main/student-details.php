<?php session_start();
    include 'connect.php';
    
        if(empty($_SESSION['sid'])){
            header('location:index.php');
        
         }
         else{

        
     $_SESSION['sid'];
     $_SESSION['uid'];
     $_SESSION['sname'];
    // $_SESSION['DOB'];
    // $_SESSION['ADDRESS'];
     
    }


?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Preskool - Student Details</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

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
<h6><?php  echo $_SESSION['sname'] ?></h6>
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


<div class="sidebar" id="sidebar">
<div class="sidebar-inner slimscroll">
<div id="sidebar-menu" class="sidebar-menu">
<ul>
<li class="menu-title">
<span>Main Menu</span>
</li>
<li class="submenu active">
<a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="student-dashboard.php" class="active">Student Dashboard</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-user-graduate"></i> <span> Student </span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="student-details.php">Student View</a></li>
</ul>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="student-teachers.php">Teacher's List</a></li>
<li><a href="teacher-details.php">Class Teacher </a></li>
</ul>
</li>
</li>
<li class="submenu">
<a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
<ul>
<li><a href="student-subjects.php">Subject's List</a></li>
</ul>
</li>
<li class="menu-title">
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
<li class="menu-title">

</div>
</div>
</div>

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Student Details</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="students.html">Student</a></li>
<li class="breadcrumb-item active">Student Details</li>
</ul>
</div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-12">
<div class="about-info">
<h4>About Me</h4>
<div class="media mt-3 d-flex">
<img src="assets/img/user.jpg" class="me-3 flex-shrink-0" alt="...">
<div class="media-body flex-grow-1">
<ul>
<li>
<span class="title-span">Full Name : </span>
<span class="info-span"><?php echo $_SESSION['sname'];?></span>
</li>
<li>
<span class="title-span"> University : </span>
<span class="info-span"><?php echo $_SESSION['uid'];?></span>
</li>
<li>
<span class="title-span">Email : </span>
<span class="info-span"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385c59514b41785f55595154165b5755"><?php echo $_SESSION['EMAIL'];?></a></span>
</li>
<li>
<span class="title-span">Gender : </span>
<span class="info-span"><?php echo $_SESSION['GENDER']; ?></span>
</li>
</ul>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<!-- <p>Hello I am Daisy Parks. Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry.</p> -->
</div>
</div>
<div class="row follow-sec">
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2850</h3>
<p>SKILLS</p>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2050</h3>
<p>CGPA%</p>
</div>
</div>
<div class="col-md-4 mb-3">
<div class="blue-box">
<h3>2950</h3>
<p>overall RANK</p>
</div>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<h5>Permanent Address</h5>
<p><?php echo $_SESSION['ADDRESS'] ;?></p>
</div>
</div>
<div class="row mt-2">
<div class="col-md-12">
<h5>Present Address</h5>
<p><?php echo $_SESSION['ADDRESS'] ;?></p>
</div>
</div>
</div>
</div>
</div>
<!-- <div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">
<h4>Skills</h4>
<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry, simply dummy text of the printing and typesetting industry</p>
<ul>
<li>
<label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
</div>
</li>
<li>
<label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100" style="width: 69%"></div>
</div>
</li>
<li>
<label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 86%"></div>
</div>
</li>
<li>
<label>Lorem Ipsum is simply</label>
<div class="progress">
<div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%"></div>
</div>
</li>
</ul>
<div class="row mt-3">
<div class="col-md-12">
<h5>Education</h5>
<p class="mt-3">Secondary Schooling at xyz school of secondary education, Mumbai.</p>
<p>Higher Secondary Schooling at xyz school of higher secondary education, Mumbai.</p>
<p>Bachelor of Science at Abc College of Art and Science, Chennai.</p>
<p>Master of Science at Cdm College of Engineering and Technology, Pune.</p>
</div>
</div>
<div class="row mt-3">
<div class="col-md-12">
<h5>Certificates</h5>
<p class="mt-3">1st Prise in Running Competition.</p>
<p>Lorem Ipsum is simply dummy text.</p>
<p>Won overall star student in higher secondary education.</p>
<p>Lorem Ipsum is simply dummy text.</p>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="row mt-2">
<div class="col-md-12">
<div class="skill-info">
<h4>Settings</h4>
<form>
<div class="row mt-3">
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Username</label>
<input type="text" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>Current Password</label>
<input type="password" class="form-control">
</div>
</div>
<div class="col-12 col-sm-6">
<div class="form-group">
<label>New Password</label>
<input type="password" class="form-control">
</div>
</div>
<div class="col-12">
<button type="submit" name="submit"class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div> -->

<!-- <footer>
<p>Copyright © 2020 Dreamguys.</p>
</footer> -->

</div>

</div>


<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>