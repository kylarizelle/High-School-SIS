<?php
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
	Require 'crud/pup.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon"  href="photos/PUP LOGO.png">
	<link rel="stylesheet" type="text/css" href="css/nav_ad.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
</head>
<style>
  .navi {
    margin-left: 100px;
  }
  .set {
    margin-left: 500px;
  }
</style>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="photos/logo.png" alt=""> <p>MNHS-POBLACION</p>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav navi">
      <li class="nav-item active">
        <a class="nav-link" href="announcement_teacher.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="notif_stud.php">Request Access</a>
      </li> -->
      <li class="nav-item">
        <a class="nav-link" href="studrank.php">Ranking</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="grades.php">Records</a>
      </li>

	  <li class="nav-item">
        <a class="nav-link" href="#">Messages</a>
      </li>
	  <li class="nav-item set">
        <a class="nav-link" href="settings.php">Profile</a>
      </li>
	  
    </ul>
  </div>
</nav>
</body>

<?php } ?>
