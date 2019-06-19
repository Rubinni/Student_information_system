<?php
	include('conn.php');
	
	$stud_id=$_POST['stud_id'];
	$stud_fname=$_POST['stud_fname'];
	$stud_lname=$_POST['stud_lname'];
	$stud_age=$_POST['stud_age'];
	$username=$_POST['username'];
	$date=$_POST['date'];
	$stud_dep=$_POST['stud_dep'];
	$sex=$_POST['sex'];
	$stud_pass=$_POST['stud_pass'];
	
	
	mysqli_query($conn,"insert into student_account (stud_id, stud_fname, stud_lname, stud_age, username, date, stud_dep, sex, stud_pass) 
	values ('$stud_id', '$stud_fname', '$stud_lname', '$stud_age', '$username', '$date', '$stud_dep' , '$sex', '$stud_pass')");
	header('location:dashboard.php');

?>