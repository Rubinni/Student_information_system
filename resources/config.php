<?php
//creating connection with database
$con = mysqli_connect('localhost', 'root' , 'root', 'student_information_system');
//starting session
session_start();
/*for the student*/
if(isset($_POST['studentid'])){
    //declaring a variable from the input field
    $id=mysqli_real_escape_string($con,$_POST['studentid']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    if($id!="" && $password!=""){
        $sql= "SELECT * FROM student_account WHERE stud_id='".$id."' and stud_pass='".$password."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    }
    $count = mysqli_num_rows($result);
    $_SESSION['login_id']=$id;
    if($count==1){ 
            header("Location: ../public_html/views/student_see_news.php");  
    }else
    {
        echo "invalid password or id ";
    }
}    
/*for the admin*/
if(isset($_POST['username'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    if($username!="" && $password!=""){
        $sql= "SELECT * FROM admin_account WHERE username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    }
    $count = mysqli_num_rows($result);
    
    if($count==1){
        //creating session 
        $_SESSION['username']=$username;
        header("Location: ../dashboard.php");
    }else
    {
        echo "invalid password or username ";
     }
}
 
