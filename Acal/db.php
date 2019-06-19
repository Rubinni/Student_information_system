<?php
$conn = mysqli_connect("localhost","root","","student_information_system") ;

if (!$conn)
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>