<?php
	include('conn.php');
	$stud_id=$_GET['stud_id'];
	mysqli_query($conn,"delete from student_account where stud_id='$stud_id'");
	header('location:dashboard.php');

?>