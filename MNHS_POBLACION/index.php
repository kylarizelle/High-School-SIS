<?php

// if (isset($_SESSION["adminID"])) {
// 	header("location:admin.php");
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>MNHS-Pob</title>
	<link rel="shortcut icon"  href="photos/logo.png">
	<link rel="stylesheet" type="text/css" href="css/ui_ligin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
	<!-- captcha -->
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.0/jquery.min.js"></script>
	<script type="text/javascript">
    // var auto_refresh = setInterval(
    // function ()
    // {
    // $('#countdown').load('count.php');
    // }, 1000); // refresh every 1000 milliseconds
</script>
</head>
<style>
    .bttn {
        width: 80%;
    }
    .register h1 {
        color: black;
    }
</style>
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
	<h1>Mariveles National High-School Poblacion</h1>
</header>

<div class="register">
<center>
<h1>WELCOME</h1>
<a href="index2.php"><button type="button" class="btn btn-danger btn-lg bttn">Student</button></a>
<br>
<br>
<a href="index3.php"><button type="button" class="btn btn-primary btn-lg bttn">Teacher</button></a>
</center>
		</div>
	</section>


</body>
</html>