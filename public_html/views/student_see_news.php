<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Student_see_news</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css1/bootstrap.min.css">
<link rel="stylesheet" href="assets/css1/font-awesome.min.css">
<link rel="stylesheet" href="assets/css1/font.css">
<link rel="stylesheet" href="assets/css1/animate.css">
<link rel="stylesheet" href="assets/css1/structure.css">

<script src="main.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
        #sticky {
        width:100%;
        height:44px;
        padding-top:40px;
        background:black;
        color:white;
        
        font-size:16px;
        text-align:center;
        position: absolute; /*Here's what sticks it*/
        margin-bottom:0;          /*to the bottom of the body/page*/
        left:0;  
        top: 1000%;          /*and to the left of the body/page.*/
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

<div style="height:100px;"></div>

<div id="preloader">
  <div id="status">&nbsp;</div>
</div>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<section id="contentbody">
  <div class="container">
    <div class="row">
      <div class=" col-sm-12 col-md-6 col-lg-12">
        <div class="row">
          <div class="leftbar_content">
            <h2>ADMAS UNIVERSITY NEWS PAGE</h2>
            <?php
            
            if(isset($_SESSION['login_id'])){
            $db = mysqli_connect('localhost', 'root' , '', 'student_information_system');
            $sql="SELECT * FROM news";
            $result=mysqli_query($db,$sql);
            while($row=mysqli_fetch_array($result)){
            echo"<div class='single_stuff wow fadeInDown'>";
              echo"<div class='single_stuff_img'>"; echo "<img class='img-responsive img-rounded' id='img' src='images/".$row['image']."'>"; echo"</div>";
              echo"<div class='single_stuff_article'>";
                echo"<div class='single_sarticle_inner'> Technology";
                 echo" <div class='stuff_article_inner'> <span class='stuff_date'>Nov <strong>17</strong></span>";
                    echo"<h2>Admas university</h2>";
                    echo "<p>".$row['text']."</p>";         echo" </div>";
                echo"</div>";
              echo"</div>";
            echo"</div>";
          }
          }else{
            header("location:../../logout.php");
          }
            ?>
            
          </div>
        </div>
      </div>
      </div>  
    </div>
  </div>
</section>
<div class="content">
</div>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="footer_inner">
          <p class="pull-left">Copyright &copy; 2019 ADMAS UNIVERSITY</p>
          <p class="pull-right">Developed student</p>
        </div>
      </div>
    </div>
  </div>
</footer>
<script src="assets/js/jquery.min.js"></script> 
<script src="assets/js/bootstrap.min.js"></script> 
<script src="assets/js/wow.min.js"></script> 
<script src="assets/js/custom.js"></script>


</body>
</html>