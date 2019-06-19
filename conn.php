<?php
 
//MySQLi Procedural
$conn = mysqli_connect("localhost","root","root","student_information_system");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
};
 
?>