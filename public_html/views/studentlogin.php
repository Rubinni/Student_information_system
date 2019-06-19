<?php
	 require '../../resources/config.php';
	 require '../../resources/server.php';

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>

	<?php require '../../resources/includes/links.php'; ?>
	<link rel="stylesheet" href="../css/style.css">

</head>
	<body>

		<section class="container-fluid bg_student">
			<section class="row justify-content-center">
				<section class="col-12 col-sm-6 col-md-3">
					<form class="form-container">
						<div class="form-group">
							<label for="InputId">Enter Your Id</label>
							<input type="email" class="form-control" id="student_id" aria-describedby="id" placeholder="Enter ID">
							<small id="idHelp" class="form-text text-muted">We'll never share your <b>ID</b> with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="InputPassword1">Password</label>
							<input type="password" class="form-control" id="student_password" placeholder="Password">
						</div>
						<div class="form-group form-check">
							<input type="checkbox" class="form-check-input" id="remember_me">
							<label class="form-check-label" for="remeber_me">Remember me</label>
						</div>
						<div>
							<a href="admin_login.php"  class=""> Admin </a>
						</div>
						<button type="submit" class="btn btn-primary  btn-block">Submit</button>
					</form>
				</section>
			</section>
		</section>

	</body>
</html>
