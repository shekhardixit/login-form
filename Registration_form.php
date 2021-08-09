<html>

<head>
	<title>Registration Form</title>
	<?php include 'css/registration_css.php' ?>
	<?php include 'links/links.php' ?>
</head>

<body>

	<?php
	include 'conn.php';
	if (isset($_POST['submit'])) {
		$Name = $_POST['username'];
		$Email = $_POST['email'];
		$DOB = $_POST['birthday'];
		$Mobile = $_POST['mobile'];
		$Password = $_POST['password'];
		$CPassword = $_POST['cpassword'];
		$q = " INSERT INTO `registration`(`Name`, `Email`, `DOB`, `Mobile`, `Password`, `CPassword`) VALUES ('$Name','$Email','$DOB','$Mobile','$Password','$CPassword')";

		$query = mysqli_query($con, $q);
		// both password encryption:
		//$pass = password_hash($password, PASSWORD_BCRYPT);
		//$cpass = password_hash($cpassword, PASSWORD_BCRYPT);
	}
	?>


	<section class="reg-section">
		<div class="container headings text-center pt-5">
			<h1 class="text-center font-weight-bold" style="color:#0d3b4c">Sign Up</h1>
		</div>
		<div class="container">
			<div class="row mt-5 pt-4">
				<div class="centerdiv col-lg-4 col-md-6 col-10 offset-lg-4 offset-md-3 offset-1">
					<h3 class="text-capitalize mb-2" style="text-align:center">Register here:</h3>
					<form action="#" method="POST">

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" name="username" class="form-control" placeholder="Enter Full Name" id="username" required autocomplete="off" required>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-envelope"></i></span>
							</div>
							<input type="email" name="email" class="form-control" placeholder="Enter Email" id="email" required autocomplete="off" required>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-birthday-cake"></i></span>
							</div>
							<input type="date" name="birthday" class="form-control" placeholder="Date of Birth" id="birthday" required autocomplete="off" required>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-mobile"></i></span>
							</div>
							<input type="number" name="mobile" class="form-control" placeholder="Enter Mobile Number" id="mobile" required autocomplete="off" required>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Create Password" id="pas" required autocomplete="off" required>
						</div>

						<div class="form-group input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fa fa-lock"></i></span>
							</div>
							<input type="password" name="cpassword" class="form-control" placeholder="Confirm Password" id="pas" required autocomplete="off" required>
						</div>

						<div class="d-flex justify-content-center form-button">
							<button type="submit" name="submit" class="btn btn-primary btn-block">Create Account</button>
						</div>
						<p style="color:#0d3b4c">Already have account?<a href="login.html" style="text-decoration:none;font-family:'Play',sans-serif;color:white;">&nbsp;Log In</a></p>
					</form>
				</div>
			</div>
		</div>
	</section>
</body>

</html>