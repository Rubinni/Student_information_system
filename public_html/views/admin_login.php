<?php
	 require '../../resources/config.php';
	 require '../../resources/server.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>

	<?php require '../../resources/includes/links.php'; ?>
	<link rel="stylesheet" href="../css/style.css">

</head>
	<body>

		<section class="container-fluid bg_admin">
			<section class="row justify-content-center">
				<section class="col-12 col-sm-6 col-md-3">
					<form class="form-container_admin">
						<div class="form-group">
							<label for="InputId">Enter Your Name</label>
							<input type="email" class="form-control" id="student_id" aria-describedby="id" placeholder="Enter Your Name">
							
						</div>
						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" class="form-control" id="student_password" placeholder="Password">
						</div>
						
						<div>
							<a href="student_login.php"  class=""> Student </a>
						</div>
						<button type="submit" class="btn btn-primary  btn-block">Submit</button>
					</form>
				</section>
			</section>
		</section>

	</body>
</html>
