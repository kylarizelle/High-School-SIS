<?php 
session_start();
include 'crud/pup.php';
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
    $sql = "SELECT * FROM account WHERE adminID =".$_SESSION['id'];
		$result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
		$_SESSION['positionname'] = $row['positionname'];
		$_SESSION['id'] = $row['adminID'];
		$_SESSION['lastname_'] = $row['lastname_'];
		$_SESSION['firstname_'] = $row['firstname_'];
		$_SESSION['mi_'] = $row['mi_'];
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon"  href="photos/logo.png">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MNHS-Pob</title>
    </head>
    <style>
        .admin {
            position: fixed;
            margin-top: 120px;
        }
        .name {
            position: fixed;
            margin-left:400px;
        }
        .update {
            margin-left:750px;
            position:fixed;
            margin-top:400px;
        }
        .update-set {
            width: 500px;
        }
    </style>
    <body>
<div class="admin">
    <center>
        <img src="photos/student.png" class="img-fluid" alt="..." width="40%" style="margin-left:250px;"></a>
    <h3 style="margin-left: 140px; margin-top:30px;"><?php echo $_SESSION['positionname']; ?></h3>
    <br>
    </center>
    <div class="name">
        <b><p>Name:</b>&nbsp;
        <?php echo $_SESSION['firstname_'] ?> <?php echo $_SESSION['mi_'] ?> <?php echo $_SESSION['lastname_'] ?></p>
        <b><p>username:</b>&nbsp;&nbsp;<?php echo $_SESSION['username'] ?></p>

    </div>
</div>
<div class="update">
    <br>
    <br>
    <a href="change_password_stud.php?adminID=<?php echo $_SESSION['id'] ?>"><button type="button" class="btn btn-success">Change Password</button></a>
    <br>
    <br>
    <a href="logout.php"><button type="button" class="btn btn-danger">Log-out</button></a>
</div>

    <?php 

					include 'nav_accre.php';
	 ?> 
        </body>
        </html>
    <?php
} else {
	header("location: index.php");
}
?>