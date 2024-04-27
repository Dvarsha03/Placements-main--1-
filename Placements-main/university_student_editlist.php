<?php session_start();


include'connect.php';
if(empty($_SESSION['uid']))
{
    header('location:index.php');
}
else{

    $uid= $_SESSION['uid'];

    $std=" select sid,uid,sname,uname,branch,cgpa,mobile,email,gender,grad_year,degree from students where uid='$uid'";
    $result=mysqli_query($con,$std) or die(mysqli_error);
    $counter=mysqli_num_rows($result);
    
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

<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="main-wrapper">

<div class="header">

<div class="header-left">
<!--<a href="index.html" class="logo">
<img src="assets/img/logo.png" alt="Logo">
</a>-->
<a href="index.html" class="logo logo-small">
<img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
</a>
</div>

<a href="javascript:void(0);" id="toggle_btn">
<i class="fas fa-align-left"></i>
</a>

<!--<div class="top-nav-search">
<form>
    <input type="text" class="form-control" placeholder="Search here">
<button class="btn" type="submit"><i class="fas fa-search"></i></button>
</form>
</div>-->


<a class="mobile_btn" id="mobile_btn">
<i class="fas fa-bars"></i>
</a>


<ul class="nav user-menu">


<li class="nav-item dropdown has-arrow">
<a href="#" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
<span class="user-img"><img class="rounded-circle" src="assets/img/profiles/profile.png" width="31"></span>
</a>
<div class="dropdown-menu">
<div class="user-header">
<div class="avatar avatar-sm">
<img src="assets/img/profiles/profile.png" alt="User Image" class="avatar-img rounded-circle">
</div>
<div class="user-text">
<h6><?php echo $_SESSION['Teacher_Name'];?></h6>
<p class="text-muted mb-0">teacher</p>
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
</div>
</div>
</div>


<div class="page-wrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title">Students</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="teacher-dashboard.php">Dashboard</a></li>
<li class="breadcrumb-item active">Students</li>
</ul>
</div>
<div class="col-auto text-end float-end ms-auto">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> Download</a>
<a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a>
</div>
</div>
</div>

<div class="row">
<div class="col-sm-12">
<div class="card card-table">
<div class="card-body">
<div class="table-responsive">
<table class="table table-hover table-center mb-0 datatable">
<thead>
<tr>
<th>STUDENT ID</th>
<th>UNIVERSITY ID</th>
<th>STUDENT NAME</th>
<th>UNIVERSITY NAME</th>
<th>BRANCH</th>
<th>CGPA</th>
<th>MOBILE</th>
<th>EMAIL</th>
<th>GENDER</th>
<th>PASSING YEAR</th>
<th>DEGREE</th>
<!-- <th class="text-end">Action</th> -->
</tr>
</thead>
<tbody>
<?php
foreach ($result as $data) 
{
       $sid=$data['sid'];
       $uid=$data['uid'];
       $sname=$data['sname'];
       $uname=$data['uname'];
       $branch=$data['branch'];
       $cgpa=$data['cgpa'];
       $mobile=$data['mobile'];
       $email=$data['email'];
       $gender=$data['gender'];
       $grad_year=$data['grad_year'];
       $degree=$data['degree'];
    echo
    '<tr>
<td>
<a href="university_student_edit.php?data='.$sid.'">'.$sid.'</a>
</td>
<td>
'.$uid.'

</td>
<td>'.$sname.'</td>
<td>'.$uname.'</td>
<td>'.$branch.'</td>
<td>'.$cgpa.'</td>
<td>'.$mobile.'</td>
<td>'.$email.'</td>
<td>'.$gender.'</td>
<td>'.$grad_year.'</td>
<td>'.$degree.'</td>
<td class="text-end">';
}
?>

</div>

</div>


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<script src="assets/plugins/datatables/datatables.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>