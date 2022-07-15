
<?php


$con=mysqli_connect("localhost", "root", "", "poblacion");
// add announcement
if (isset($_POST['announcement'])) {
	if (!empty($_POST['lastname_']) && !empty($_POST['firstname_']) && !empty($_POST['title_']) && !empty($_POST['announcement_'])) {
		
			$lastname_ = $_POST['lastname_'];
			$firstname_ = $_POST['firstname_'];
			$title_ = $_POST['title_'];
			$announcement_ = $_POST['announcement_'];
			

			$query = "INSERT INTO announcement (lastname_, firstname_, title_, announcement_) VALUES('$lastname_', '$firstname_', '$title_', '$announcement_')";

			$run = mysqli_query($con,$query) or die(mysqli_error($con));

			if ($run) {
				header("location: announcement_teacher.php?success= the data is successfully added");
			}
			else{
				
				header("location: add_announcement.php?error=something went wrong");
			}
	} else {
		
		header("location: add_announcement.php?error= All field is required! try again");
		exit();
	}
}



// delete admin
if (!empty($_GET['id_'])) {
 	$id_ = $_GET['id_'];
 	$del_query = "DELETE FROM announcement WHERE id_ = '$id_'";
 	$result = mysqli_query($con, $del_query);
 	if ($result) {
 		header ("location: announcement_teacher.php?success=Data is successfully deleted    ");
 	}
 }
?>