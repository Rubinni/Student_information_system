<?php
	include('conn.php');
	
	$stud_id=$_GET['stud_id'];
	
	// $stud_id=$_POST['stud_id'];
	$stud_fname=$_POST['stud_fname'];
	$stud_lname=$_POST['stud_lname'];
	$stud_age=$_POST['stud_age'];
	$username=$_POST['username'];
	$date=$_POST['date'];
	$stud_dep=$_POST['stud_dep'];
	$sex=$_POST['sex'];
	$stud_pass=$_POST['stud_pass'];
	
	mysqli_query($conn,"update student_account set  stud_fname='$stud_fname', stud_lname='$stud_lname', stud_age='$stud_age', username='$username', date='$date', stud_dep='$stud_dep' , sex='$sex', stud_pass='$stud_pass'where stud_id='$stud_id'");
	header('location:dashboard.php');

?>