<?php
session_start();
if(isset($_SESSION['username'])){
 $db = mysqli_connect('localhost', 'root','', 'student_information_system');
 $msg="";
 if(isset($_POST['upload'])){
    $target = "images/".basename($_FILES['image']['name']);
    
    $image=$_FILES['image']['name'];
    $text= $_POST['text'];    
    $sql= "INSERT INTO news(image, text) VALUES ('$image','$text')";
    mysqli_query($db,$sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target)){
        $msg="image uploaded successfully";
    }else{
        $msg="there was an error uploading image";
    }
 }
 ?>
 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>News Upload</title>
   
    <style>
    #content{
        width: 50%;
        margin: 20px auto;
        border: 1% solid #cbcbcb;
    }
    form{
        width: 50%;
        margin: 20px auto;
    }
    form.div{
        margin-top: 5px;
    }
    #img_div{
        width: 50%;
        padding: 5px;
        margin: 15px auto;
        border: 1px solid #cbcbcb;

    }
    #img_div:after{
        content:"";
        display: block;
        clear: both;

    }
    img{
        float: left;
        margin: 5px;
        width: 300px;
        height: 140px;
    }
    </style>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <script src="main.js"></script>
  
</head>
<body  style="background-color: #7f8c8d;">
<div class="container-fluid">
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
	  ADMAS UNIVERSITY
	  </a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
        <li ><a href="../../dashboard.php"> <span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span  >   Home</a></li>
        <li><a href="uploading_news.php"><span class="glyphicon glyphicon glyphicon-open" aria-hidden="true"></span  >   News Upload</a></li>
        <li><a href="../../Acal/index.php"><span class="glyphicon glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span  >   Calendar</a></li>
        <li><a href="Aaboutus.php"><span class="glyphicon glyphicon glyphicon glyphicon-earphone" aria-hidden="true"></span  >   About Us</a></li>
        <li><a href="../../logout.php"><span class="glyphicon glyphicon glyphicon glyphicon glyphicon-log-out" aria-hidden="true"></span  >   Log out</a></li>
      </ul>
	</div><!-- /.navbar-collapse -->
</div>
	</div>
</nav>
<div style="height:50px;"></div>
</div>
<?php
    $db = mysqli_connect('localhost', 'root' , '', 'student_information_system');
    $sql="SELECT * FROM news";
    $result=mysqli_query($db,$sql);
    while($row=mysqli_fetch_array($result)){
        
                    echo "<div id ='img_div'>";
                        echo "<img src='images/".$row['image']."'>";
                            echo "<p>".$row['text']."</p>";
        echo"</div>";
    }
?>
        <div id="content">
            <form action="uploading_news.php" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="size" value="1000000">
                    <div class="form-group">
                        <input type="file" class="form-control" name="image">
                    </div>

                    <div class="form-group">
                         
                        <textarea name="text"  class="form-control" rows="3" id="" cols="40"  placeholder="say something about this image"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-default" name="upload" value="upload image">Upload</button>
                    </div>
            </form>
    </div>
   </div> 
  
</body>
<?php
}else{
    header("location:../../logout.php");
}
?>
</html>
