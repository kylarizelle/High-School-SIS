
<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
include 'crud/pup.php';

if (isset($_GET['id_']) && $_GET['id_']!="") {
	$id_ = $_GET['id_'];
	$studID_query = "SELECT * FROM announcement WHERE id_= '$id_'";
	$studID_result =mysqli_query($con, $studID_query);
    $studID_data = mysqli_fetch_row($studID_result);
    $time_ = $studID_data[1];
	$lastname_ = $studID_data[2];
	$firstname_ = $studID_data[3];
    $title_ = $studID_data[4];
    $announcement_ = $studID_data[5];
    $id_ = $studID_data[0];

}
else {
    $time = "";
	$lastname_ = "";
	$firstname_ = "";
    $title_ = "";
	$announcement_ = "";
    $id_ = "";
}

if (isset($_POST['saved'])) {
	
		
    $title_ = $_POST['title_'];
    $announcement_ = $_POST['announcement_'];
    $id_ = $_POST['id_'];


    if (!empty($id_)) {

            
            $editquery = "UPDATE announcement SET title_ = '$title_', announcement_ = '$announcement_' WHERE id_ = '$id_' ";

            $updateresult = mysqli_query($con, $editquery);

            if ($updateresult) {
                header("location: announcement_teacher.php?success= the announcement eas successfully updated");
            }
            else {
                ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong><?php echo "Something went wrong! try again"; ?></strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
        <?php	}
    }
    else {
        ?>
         <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong><?php echo "Cannot execute query, try again!"; ?></strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
<?php	}

}
?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon"  href="photos/logo.png">
<link rel="stylesheet" type="text/css" href="css/access.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.11.3/js/jquery.dataTables.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
<title>MNHS-Pob</title>
<body>
    <style>
            .index .name {
                position: absolute;
                top:30px;
            }
            .index h1{
                position: absolute;
            }
            .div {
                margin-top: 50px;
            }
            .save {
                position: absolute;
                top: 500px;
                left: 1050px;
            }
            .back {
                position: absolute;
                top: 500px;
                left: 950px;
            }
    </style>
    <div>
            <section class="index">
                <form method="post" enctype="multipart/form-data">
                <div class="div">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">First Name:</label>
                        <input class="form-control" type="text" aria-label="Disabled input example" disabled name="firstname_" value="<?php echo $firstname_?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Last Name:</label>
                        <input class="form-control" type="text" aria-label="Disabled input example" disabled name="lastname_" value="<?php echo $lastname_?>">
                    </div>
                <div class="div">
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Title/Agenda:</label>
                        <input type="text" class="form-control" name="title_" value="<?php echo $title_; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Announcement</label>
                        <textarea class="form-control" name="announcement_"><?php echo $announcement_?></textarea>
                    </div>
                </div>
                <input type="hidden" name="id_" value="<?php echo $id_; ?>">
                <button  class="btn btn-success save" name="saved">Success</button>
                <a href="grades.php"><button type="button" class="btn btn-danger back">Danger</button></a>
                </form>
            </section>
                
<?php
include 'nav_faculty.php';
} else {
	header("location: index.php");
} ?>