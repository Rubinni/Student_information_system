<?php
session_start();
if(isset($_SESSION['login_id'])){
?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Semester Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    

<link rel="stylesheet" href="assets/css1/bootstrap.min.css">
<link rel="stylesheet" href="assets/css1/font-awesome.min.css">
<link rel="stylesheet" href="assets/css1/font.css">
<link rel="stylesheet" href="assets/css1/animate.css">
<link rel="stylesheet" href="assets/css1/structure.css">

    <style type="text/css">
        .center{
            text-align: center;    
        }
        .semesterRenew{
            text-align:center;
        }
        .reg{
            margin-top: 20px;
        }  
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
	 <b>ADMAS UNIVERSITY</b>	
	  </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="student_see_news.php"> <span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span  >  Home</a></li>
        <li><a href="semester_renew.php"> <span class="glyphicon glyphicon glyphicon glyphicon-registration-mark" aria-hidden="true"></span  >  Semester Renew</a></li>
    <li><a href="grade_report.php"> <span class="glyphicon glyphicon glyphicon-stats" aria-hidden="true"></span  >  Grade</a></li>
    <li><a href="../../Scal/index.php"> <span class="glyphicon glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span  >  Calendar</a></li>
    <li><a href="aboutus.php"> <span class="glyphicon glyphicon glyphicon glyphicon-earphone" aria-hidden="true"></span  >  About Us</a></li>
    <li><a href="../../logout.php"> <span class="glyphicon glyphicon glyphicon glyphicon glyphicon-log-out" aria-hidden="true"></span  >  Log out</a></li>
      </ul>
	</div><!-- /.navbar-collapse -->
</div>
	</div>
</nav>

<div class="semesterRenew">
<div style="height:30px;"></div>
            <h1>Admas University </h1>
                <h3>Semester Course Registration</h3>            
    </div>
<div class="container center">
    <div class="wrap1">
    <form action="semester_renew.php" method="POST">
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">ID</span>
          <input type="number" class="form-control" name="student_id" placeholder="Student ID" aria-describedby="basic-addon1" required="required">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Date</span>
          <input type="date" class="form-control"  required="required" name="date" placeholder="Date" aria-describedby="basic-addon1">
        </div>
         <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Semester</span>
          <input type="number" class="form-control"  required="required" name="semester" placeholder="Semester" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Section</span>
          <input type="text" class="form-control"  required="required" name="section" placeholder="Section" aria-describedby="basic-addon1">
        </div>
        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Fs Number</span>
          <input type="number" class="form-control"  required="required" name="fs_number" placeholder="Fs Number" aria-describedby="basic-addon1">
        </div>
        <button type="submit" class="btn btn-primary btn-lg reg" name="submit">register</button>
        <br>
    </form>
    </div>
</div>
<?php

$con=mysqli_connect('localhost','root','','student_information_system');
 

//course to be displayed
$course_val="SELECT coursename,coursecode,credithour FROM course";
$course_res=mysqli_query($con,$course_val);
echo "<div class='container wrap '>";
echo"<table class='table table-bordered table-striped'>
<tr>
<th>Course Name</th>
<th>Course code</th>
<th>Credit Hour</th>
</tr>";
while($c_row=mysqli_fetch_assoc($course_res)){
echo "<tr>";
echo "<td>".$c_row['coursename']."</td>";
echo "<td>".$c_row['coursecode']."</td>";
echo "<td>".$c_row['credithour']."</td>";
echo "</tr";
echo "</table>";
echo "</div>";
}
if(isset($_POST['submit'])){
$student_id=$_POST['student_id'];
$date=$_POST['date'];
$semester=$_POST['semester'];
$section=$_POST['section'];
$check_duplicate_id="SELECT ID from semester_renew WHERE ID='$student_id'";
$result=mysqli_query($con,$check_duplicate_id);
$count=mysqli_num_rows($result);
if($count>0){
    echo"<h1>ID is already in the database please enter the correct ID</h1>";
    return false;
}
$sql="INSERT INTO semester_renew(ID, date, semester, section) VALUES('$student_id','$date','$semester','$section')";
mysqli_query($con,$sql);
$fs_number=$_POST['fs_number'];
$confirm="SELECT fs_number from pay where fs_number='$fs_number'";
$con_res=mysqli_query($con,$confirm);
//$con_count=mysqli_num_rows($con_res);
if($con_res==$fs_number){
    $sq="UPDATE semester_renew SET validity='renewed' WHERE ID='$student_id'";
    mysqli_query($con,$sq);
}else{
    $sql="UPDATE semester_renew SET validity='not_renewed' WHERE ID='$student_id'";
    mysqli_query($con,$sql);
}
}

?>  

</body>
<?php
}else{
    header("location :../../logout.php");
  }
?>
</html>