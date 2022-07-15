			
<?php 
session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
	Require 'crud/pup.php';
			
	?>	

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon"  href="photos/logo.png">
<link rel="stylesheet" type="text/css" href="css/access.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css"> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
<title>MNHS-Pob</title>
</head>
<style>
    .index .name {
        font-size: 25px;
    }
    .index .subjects {
        font-size: 20px;
        margin-top: 60px;
        text-decoration: underline;
    }
    .index ul {
        margin-top: 130px;
        margin-left: 30px;
    }
    .index .table {
        width: 400px;
        margin-left: 500px;
        margin-top: -30px;
    }
    .index button{
        margin-left:50px;
    }
</style>
<body>
<section class="body">
    <section class="index">
            <h1>Enrollment</h1>
            <hr>
            <h1 class="name">
            Name: 
            <?php echo $_SESSION['lastname_'];?>, 
            <?php echo $_SESSION['firstname_'];?>
            <?php echo $_SESSION['mi_'];?>
            </h1>
            <h1 class="subjects">Subjects</h1>

            <ul>
                <li>Math</li>
                <li>English</li>
                <li>Filipino</li>
                <li>Science</li>
                <li>History</li>
                <li>TLE</li>
                <li>Values</li>
                <li>MAPEH</li>
            </ul>
<?php
            if(isset($_SESSION['error'])){
?>
				<p style="color:red; "><?php echo $_SESSION['error']; ?></p>
<?php				
				}
				unset($_SESSION['error']);
			?>

            <a href="enrollnow.php?adminID=<?php echo $_SESSION['id']; ?>"><button type="button" class="btn btn-outline-info">Enroll Now</button></a>


            

<table class="table">
  <thead>
    <tr>
      <th scope="col">Time</th>
      <th scope="col">Subject</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>8:00-9:00</td>
      <td>Math</td>
    </tr>
    <tr>
      <td>9:00-10:00</td>
      <td>English</td>
    </tr>
    <tr>
      <td>9:00-9:30</td>
      <td>recess</td>
    </tr>
    <tr>
      <td>9:30-10:30</td>
      <td>Science</td>
    </tr>
    <tr>
      <td>10:30-11:30</td>
      <td>History</td>
    </tr>
    <tr>
      <td>11:30-12:30</td>
      <td>Filipino</td>
    </tr>
    <tr>
      <td>12:30-1:30</td>
      <td>TLE</td>
    </tr>
    <tr>
      <td>2:30-3:00</td>
      <td>Recess</td>
    </tr>
    <tr>
      <td>3:00-4:00</td>
      <td>Values</td>
    </tr>
    <tr>
      <td>4:00-5:00</td>
      <td>MAPeH</td>
    </tr>
  </tbody>
</table>
		</section>
		</section>
		
		<?php 
				
					include 'nav_accre.php';
	 ?> 



</body>
</html>
<?php } else {
	header("location: index.php");
}
?>