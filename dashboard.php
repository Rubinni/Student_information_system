<?php
session_start();
if(isset($_SESSION['username'])){
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin dashboard</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../css/Footer-with-social-icons.css">
</head>
<body>

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
	  <b>ADMAS UNIVERSITY</b>
	  	
	  </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li ><a href="dashboard.php"> <span class="glyphicon glyphicon glyphicon-home" aria-hidden="true"></span  >   Home</a></li>
		<li><a href="public_html/views/uploading_news.php"><span class="glyphicon glyphicon glyphicon-open" aria-hidden="true"></span  >   News Upload</a></li>
		<li><a href="Acal/index.php"><span class="glyphicon glyphicon glyphicon glyphicon glyphicon-calendar" aria-hidden="true"></span  >   Calendar</a></li>
		<li><a href="public_html/views/Aaboutus.php"><span class="glyphicon glyphicon glyphicon glyphicon-earphone" aria-hidden="true"></span  >   About Us</a></li>
		<li><a href="logout.php"><span class="glyphicon glyphicon glyphicon glyphicon glyphicon-log-out" aria-hidden="true"></span  >   Log out</a></li>
      </ul>

	</div><!-- /.navbar-collapse -->
</div>
	</div>
</nav>



	<div style="height:100px;"></div>

	<h1 style="text-align: center;"><b>Admas University</b></h1>

	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Student Information System</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Create Account</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>ID</th>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Age</th>
				<th>User Name</th>
				<th>Date</th>
				<th>Department</th>
				<th>Sex</th>
				<th>Password</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
			//calling a connection from conn.php
				include('con.php');
				
				$query=mysqli_query($conn,"select * from `student_account`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['stud_id']; ?></td>
						<td><?php echo $row['stud_fname']; ?></td>
						<td><?php echo $row['stud_lname']; ?></td>
						<td><?php echo $row['stud_age']; ?></td>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['stud_dep']; ?></td>
						<td><?php echo $row['sex']; ?></td>
						<td><?php echo $row['stud_pass']; ?></td>
						<td>
							<a href="#edit<?php echo $row['stud_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>  
							<a href="#del<?php echo $row['stud_id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>

</body>
<?php
}else{
	header("location:logout.php");
}
?>
</html>