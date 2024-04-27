<?php session_start();
  
    
    include 'connect.php';
   
    if(empty($_SESSION['uid1'])){
        header('location:index.php');
    }
    else{

      

     $_SESSION['uid1'];
    $_SESSION['uname']  ;
   
   
    $query=" select branch,count(sid) as total from students group by branch";
    $result=mysqli_query($con,$query) or die(mysqli_error);

     foreach($result as $data)
     {
        $y[] = $data['branch'];
        $x[]=$data['total'];
    }

//     $qu="select e.sid from exam_totals e,student s where e.sid=s.sid and s.cid='$ci' order by e.total desc";
//     $re=mysqli_query($con,$qu);
//     $var=0;
//     foreach($re as $data)
//     {
//         $var=$var+1;
//         if($data['sid']==$sid)
//         {
//             $rank=$var;
//             break;
//         }
//     }

//     $que="select c.sid from ccapoints c,student s where c.sid=s.sid and s.cid='$ci' order by total desc";
//     $res=mysqli_query($con,$que);
//     $var=0;
//     foreach($res as $data)
//     {
//         $var=$var+1;
//         if($data['sid']==$sid)
//         {
//             $rank2=$var;
//             break;
//         }
//     }
    
//     $ques="select c.sid from spoints c,student s where c.sid=s.sid and s.cid='$ci' order by total desc";
//     $ress=mysqli_query($con,$ques);
//     $var=0;
//     foreach($ress as $data)
//     {
//         $var=$var+1;
//         if($data['sid']==$sid)
//         {
//             $rank3=$var;
//             break;
//         }
//     }

//     $quer="SELECT e.sid,(e.TOTAL+a.TOTAL+c.TOTAL+s.TOTAL) as TOT
//     FROM exam_totals e,academic_points a,ccapoints c, spoints s,student t 
//     WHERE e.sid=a.sid and a.sid=c.sid and c.sid=s.SID and s.sid=t.sid and t.cid='$ci'
//     ORDER BY TOT DESC";
//     $resu=mysqli_query($con,$quer);
//     $var=0;
//     foreach($resu as $data)
//     {
//         $var=$var+1;
//         if($data['sid']==$sid)
//         {
//             $rank4=$var;
//             break;
//         }
//     }
//     $zz="select total from academic_points where sid='$sid'";
//     $zzz=mysqli_query($con,$zz);
//     $zzz=mysqli_fetch_assoc($zzz);
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title>Dashboard</title>

<link rel="shortcut icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&display=swap">

<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">

<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

<link rel="stylesheet" href="assets/plugins/simple-calendar/simple-calendar.css">

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
<div class="page-wrapper" id="pagewrapper">
<div class="content container-fluid">

<div class="page-header">
<div class="row">
<div class="col-sm-12">
<h3 class="page-title">Welcome <?php echo $_SESSION['uname'];?>!</h3>
<ul class="breadcrumb">
<li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
<li class="breadcrumb-item active">University Dashboard</li>
</ul>
</div>
</div>
</div>

<!-- <div class="row">
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-nine w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center"> -->
<!-- <div class="db-icon"> -->
<!-- <i class="fas fa-book-open"></i> -->
<!-- </div> -->
<!-- <div class="db-info">
<h3><?php echo $rank;?></h3>
<h6>Academic Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-six w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-file-alt"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank2;?></h3>
<h6>CCA Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-ten w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-clipboard-list"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank3;?></h3>
<h6>Sports Rank</h6>
</div>
</div>
</div>
</div>
</div>
<div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-ten w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<!-- <div class="db-icon">
<i class="fas fa-clipboard-list"></i>
</div> 
<div class="db-info">
<h3><?php echo $rank4;?></h3>
<h6>Overall Rank</h6>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="col-auto  ">
<a href="#" class="btn btn-outline-primary me-2"><i class="fas fa-download"></i> ReportCard</a>
</div> -->
<!-- <div class="col-xl-3 col-sm-6 col-12 d-flex">
<div class="card bg-eleven w-100">
<div class="card-body">
<div class="db-widgets d-flex justify-content-between align-items-center">
<div class="db-icon">
<i class="fas fa-clipboard-check"></i>
</div>
<div class="db-info">
<h3>15/20</h3>
<h6>Test Passed</h6>
</div>
</div>
</div>
</div>
</div> -->

</div>


<!-- <div class="row">
<div class="col-12 col-lg-12 col-xl-9">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Attendence</h5>
</div>
<div class="col-6">
<span class="float-end view-link"><a href="#">View All Courses</a></span>
</div>
</div>
</div>
<div class="dash-circle">
<div class="row">
<div class="col-12 col-lg-6 col-xl-6 dash-widget3">
<div class="card-body dash-widget1">
<div class="circle-bar circle-bar2">
<div class="circle-graph2" data-percent="20">
<b>20%</b>
</div>
<h6>Lesson Learned</h6>
<h4>10 <span>/ 50</span></h4>
</div>
<div class="dash-details">
<h4>Facilisi etiam</h4>
<ul>
<li><i class="fas fa-clock"></i> 2.30pm - 3.30pm</li>
<li><i class="fas fa-book-open"></i> 5 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 5 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
<div class="col-6 col-lg6 col-xl-8 dash-widget2">
<div class="card-body">
<div class="circle-bar circle-bar3">
<div class="circle-graph3" data-percent="50">
<b>50%</b>
</div>
<h6>Attendence</h6>
<h4>25 <span>/ 50</span></h4>

</div>
 <div class="dash-details">
<h4>Augue mauris</h4>
<ul>
<li><i class="fas fa-clock"></i> 3.30pm - 4.30pm</li>
<li><i class="fas fa-book-open"></i> 6 Lessons</li>
<li><i class="fas fa-hourglass-end"></i> 60 Minutes</li>
<li><i class="fas fa-clipboard-check"></i> 6 Asignment</li>
</ul>
<div class="dash-btn">
<button type="submit" class="btn btn-info btn-border">Skip</button>
<button type="submit" class="btn btn-info">Continue</button>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- <script>
    $.get('checkupdate.php?lastupdate='+$("#lastUpdate").val(),function(data){
   if(data == '1'){
    refreshData();
   }
 });
    </script> -->
    <!-- <script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#pagewrapper').load('studentdashboard.php').fadeIn("slow");
}, 1000); // refresh every 1000 milliseconds
</script> -->
<div class="row">
<div class="col-12 col-lg-12 col-xl-8 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-6">
<h5 class="card-title">Students List</h5>
</div>
<div class="col-6">
<ul class="list-inline-group text-end mb-0 ps-0">
<li class="list-inline-item">
 <div class="form-group mb-0 amount-spent-select"> 
 <select class="form-control form-control-sm form-select">  
 <!-- <option>Skills</option>
    <?php

   $query="select skill_name from skills";
   $result=mysqli_query($con,$query);
  // $details=mysqli_fetch_assoc($result);

   if($result){
    while($row=mysqli_fetch_assoc($result)){
        $skill=$row['skill_name'];
        echo '
       
        
        <option>'.$skill.'</option>
       ';
    }
    }
?> -->
 </select>
<!-- <option>Skills</option>
<option>web development</option>
<option>Android developmenent</option>
<option>web development</option>
<option>Android developmenent</option>
<option>web development</option>
<option>Android developmenent</option> -->

 </div> 
</li>
</ul>
</div>
</div>
</div> 
<div id="chart-body" >
<canvas id="acscore"></canvas>
<!-- <canvas id="ccscore"></canvas> -->
</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    
const ctx = document.getElementById('acscore');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:  <?php echo json_encode($y)?>, 
        datasets: [{
            label: 'TOTAL STUDENTS',
            data: <?php echo json_encode($x)?>,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});


</script>

</div>
</div> 

<div class="col-12 col-lg-12 col-xl-4 d-flex">
<div class="card flex-fill">
<div class="card-header">
<h5 class="card-title">Total Students</h5>
</div>
<div class="card-body">
<div class="col-6 col-lg6 col-xl-8 dash-widget2">
<div class="card-body">
<!-- <div class="circle-bar circle-bar3">
<div class="circle-graph3" data-percent="50"> -->
<!-- <b>50%</b>
</div> -->
<?php
 
?>
<h2>6000</h2>
<h2></h2>

</div>
</div>
</div>

<!-- <div class="teaching-card">
<ul class="activity-feed">
<li class="feed-item">
<div class="feed-date1">Sep 05, 9 am - 10 am (60min)</div>
<span class="feed-text1"><a>Lorem ipsum dolor</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 04, 2 pm - 3 pm (70min)</div>
<span class="feed-text1"><a>Et dolore magna</a></span>
<p>Completed</p>
</li>
<li class="feed-item">
<div class="feed-date1">Sep 02, 1 pm - 2 am (80min)</div>
<span class="feed-text1"><a>Exercitation ullamco</a></span>
<p><span>In Progress</span></p>
</li>
<li class="feed-item">
<div class="feed-date1">Aug 30, 10 am - 12 pm (90min)</div>
<span class="feed-text1"><a>Occaecat cupidatat</a></span>
<p>Completed</p>
</li>
</ul>
</div>
</div>
</div> -->
<!-- </div>
</div>
</div> -->
<!-- <div class="col-12 col-lg-12 col-xl-3 d-flex">
<div class="card flex-fill">
<div class="card-header">
<div class="row align-items-center">
<div class="col-12">
<h5 class="card-title">Calendar</h5>
</div>
</div>
</div>
<div class="card-body">
<div id="calendar-doctor" class="calendar-container"></div>
<div class="calendar-info calendar-info1">
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
<div class="calendar-details">
<p>10 am</p>
<h6 class="calendar-violet d-flex justify-content-between align-items-center">Pharetra et <span>10am - 11am</span></h6>
</div>
<div class="calendar-details">
<p>11 am</p>
<h6 class="calendar-red d-flex justify-content-between align-items-center">Break <span>11am - 11.30am</span></h6>
</div>
<div class="calendar-details">
<p>12 pm</p>
<h6 class="calendar-orange d-flex justify-content-between align-items-center">Massa <span>11.30am - 12.00pm</span></h6>
</div>
<div class="calendar-details">
<p>09 am</p>
<h6 class="calendar-blue d-flex justify-content-between align-items-center">Fermentum <span>09am - 10pm</span></h6>
</div>
</div>
</div>
</div>
</div>
</div>

</div> -->

<!-- 

</div>

</div> -->


<script src="assets/js/jquery-3.6.0.min.js"></script>

<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

 <!-- chart  js plugin -->


<!-- 
<script src="assets/plugins/apexchart/apexcharts.min.js"></script>
<script src="assets/plugins/apexchart/chart-data.js"></script> -->

<script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
<script src="assets/js/calander.js"></script>

<script src="assets/js/circle-progress.min.js"></script>

<script src="assets/js/script.js"></script>
</body>
</html>