<?php
session_start();
?>
 <!DOCTYPE html>
<html>
<head>
   
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Grade Report</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="assets/css1/bootstrap.min.css">
<link rel="stylesheet" href="assets/css1/font-awesome.min.css">
<link rel="stylesheet" href="assets/css1/font.css">
<link rel="stylesheet" href="assets/css1/animate.css">
<link rel="stylesheet" href="assets/css1/structure.css">

    <script src="main.js"></script>

    <style type="text/css">
      .container{
        text-align: center;
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

  <form id="ff"  action="grade_report.php" autocomplete="on" method="POST"> 

      <div class="container">

          <div style="height:100px;"></div>

            <h1>Admas University</h1>
              <h3>Semester Grade Report</h3>


  
           

             <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">Student ID</span>
              <input type="number" class="form-group form-control" name="studentid" placeholder="Student ID" aria-describedby="basic-addon1">
            </div>

        <div class="input-group">
          <span class="input-group-addon" id="basic-addon1">Password</span>
          <input type="password" class="form-control"  name="password" placeholder="Password" aria-describedby="basic-addon1">
        </div>
             <p style="margin-top: 20px;">     
                <button type="submit" class="btn btn-primary btn-lg reg" name="submit">Check Grade</button>
            </p>
    </form>
  

                        
 
                        



 <?php      
    $con = mysqli_connect('localhost', 'root' , '', 'student_information_system');
    if(isset($_SESSION['login_id'])){
    if(isset($_POST['studentid'])){
        $id=mysqli_real_escape_string($con,$_POST['studentid']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        if($id!="" && $password!=""){
            $sql= "SELECT * FROM student_account WHERE stud_id ='".$id."' and stud_pass='".$password."'";
            $result = mysqli_query($con,$sql);
            $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        }
        $count = mysqli_num_rows($result);
        if($count==1){
            
            //place where the table is going to be displ ayed
            $ss="SELECT * FROM grade_report WHERE ID='".$id."'";
            $res= mysqli_query($con,$ss);
            
        echo"<table class='table' width='600' border='1' cellpadding='1' cellspacing='1'>
        <tr>
       
        <th>course</th>
        <th>credit hour</th>
        <th>grade</th>
        </tr>";
        while($grade_report=mysqli_fetch_assoc($res)){
         
     echo "<tr>";
     echo "<td>".$grade_report['course']."</td>";
     echo "<td>".$grade_report['credit hour']."</td>";
     echo "<td>".$grade_report['grade']."</td>";
     echo "</tr";
     echo "</table>";
     }     
 
       //a place where gpa is diplayed
        $s="SELECT * FROM total_andprevious_grade_point WHERE ID='".$id."'";
       $ress= mysqli_query($con,$s); 
       while($total_andprevious_grade_point=mysqli_fetch_assoc($ress)){
 
         echo "<div class='container'>";
         echo "<div class='row'>";
           echo "<div class='col-md-6'>";
          echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['previous_total']."</span>";
             echo "Previous Total </li>";
          echo "</ul>";
 
          echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['semester_total']."</span>";
             echo "Semester Total </li>";
          echo "</ul>";
 
           echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['grand_total']."</span>";
             echo "Grand Total </li>";
          echo "</ul>";
 
          echo "</div>";  //end of first half
 
           echo "<div class='col-md-6'>";
 
           echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['date']."</span>";
             echo "Acadamic Year  </li>";
          echo "</ul>";
 
 
           echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['semester']."</span>";
             echo "Semester  </li>";
          echo "</ul>";
 
           echo "<ul class='list-group'>";
             echo "<li class='list-group-item'>";
               echo "<span class='badge'> ".$total_andprevious_grade_point['attendance_year']."</span>";
             echo "Attendance Year  </li>";
          echo "</ul>";
          
           echo "</div>";
          echo "</div>";  
         echo "</div>";  
 
       } 
     }
     else{
      echo "either id or password is incorrect";
   }
     
   }
     
        }
        else{
          header("location:../../logout.php");
        }
        ?>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>