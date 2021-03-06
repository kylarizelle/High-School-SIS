<?php

if (isset($_SESSION["uid"])) {
	header("location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MNHS-Pob</title>
	<link rel="shortcut icon"  href="photos/logo.png">
	<link rel="stylesheet" type="text/css" href="css/ui_reg.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<style>
	.registration {
		margin-top: -30px;
	}
</style>
	<section class="background">
	<header>
<div class="wait overlay">
	<div class="loader"></div>
</div>
	<img src="photos/logo.png">
	<h1>Mariveles National High School-Poblacion</h1>
</header>

		<div class="register">
			<?php 
				include "credential.php";
				include "crud/pup.php";

				if(isset($_SESSION['error'])){
					?>
					<p style="color:red; "><?php echo $_SESSION['error']; ?></p>
					<?php				
				}
				unset($_SESSION['error']);
				?>
			<form id="signup_form" method="post">
				<div class="mb-3">
  					<label for="formGroupExampleInput" class="form-label">First Name</label>
 					<input type="text" class="form-control" id="firstname_" placeholder="First Name" name="firstname_" required>
				</div>
				<div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Last Name</label>
  					<input type="text" class="form-control" id="lastname_" placeholder="Last Name"  name="lastname_" required>
				</div>
				<div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Middle Initial</label>
  					<input type="text" class="form-control" id="mi_" placeholder="Middle Initial"  name="mi_" required>
				</div>
				<!-- <label for="formGroupExampleInput2" class="form-label">Position:</label> -->
				<!-- <select class="form-select" aria-label="Default select example" id="positionname"  name="positionname" required>
						<option>Select Position</option>
  						<option value="Faculty">Faculty</option>
 						<option value="Student">Student</option>
				</select> -->
				<div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Username:</label>
  					<input type="text" class="form-control" id="username" placeholder="Username"  name="username" required>
				</div>
				<!-- <div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Email</label>
  					<input type="text" class="form-control" id="email_" placeholder="Email Address"  name="email_" required>
				</div> -->
				<div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Password</label>
  					<input type="password" class="form-control" id="password_" placeholder="Password"  name="password_" required>
				</div>
				<div class="mb-3">
  					<label for="formGroupExampleInput2" class="form-label">Confirm Password</label>
  					<input type="password" class="form-control" id="cpassword" placeholder="Confirm Password"  name="cpassword" required>
				</div>
				<button type="submit" class="btn btn-light" style="margin-left:355px;" >Register</button>
				<a href="index.php"><p class="registration">Already have an account? Log-in </p></a>
			</form>
		</div>
	</section>


</body>
</html>