
<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
include 'crud/pup.php';

if (isset($_GET['studID']) && $_GET['studID']!="") {
	$studID = $_GET['studID'];
	$studID_query = "SELECT * FROM studlist WHERE studID= '$studID'";
	$studID_result =mysqli_query($con, $studID_query);
    $studID_data = mysqli_fetch_row($studID_result);
	$lastname_ = $studID_data[1];
	$firstname_ = $studID_data[2];
    $mi_ = $studID_data[3];
	$math_ = $studID_data[4];
    $english_ = $studID_data[5];
	$filipino_ = $studID_data[6];
    $history_ = $studID_data[7];
	$science_ = $studID_data[8];
    $values_ = $studID_data[9];
	$mapeh_ = $studID_data[10];
    $tle_ = $studID_data[11];
    $ave = $studID_data[12];
	$studID = $studID_data[0];
}
else {
	$lastname_ = "";
	$firstname_ = "";
    $mi_ = "";
	$math_ = "";
    $english_ = "";
	$filipino_ = "";
    $history_ = "";
	$science_ = "";
    $values_ = "";
	$mapeh_ = "";
    $tle_ = "";
    $ave = "";
	$studID = "";
}

if (isset($_POST['saved'])) {
	
		
    $math_ = $_POST['math_'];
    $english_ = $_POST['english_'];
    $filipino_ = $_POST['filipino_'];
    $science_ = $_POST['science_'];
    $history_ = $_POST['history_'];
    $mapeh_ = $_POST['mapeh_'];
    $values_ = $_POST['values_'];
    $tle_ = $_POST['tle_'];
    $studID = $_POST['studID'];


    if (!empty($studID)) {

            $ave = ($math_ + $english_ + $filipino_ + $science_ + $history_ + $mapeh_ + $values_ + $tle_)/8;
            $editquery = "UPDATE studlist SET math_ = '$math_', english_ = '$english_', 
            filipino_ = '$filipino_', science_ = '$science_', history_ = '$history_', mapeh_ = '$mapeh_', 
            values_ = '$values_', tle_ = '$tle_', ave = '$ave' WHERE studID = '$studID' ";

            $updateresult = mysqli_query($con, $editquery);

            if ($updateresult) {
                header("location: grades.php?success= the grades are successfully encoded");
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
                top: 80px;
            }
            .grade-a {
                position:absolute;
                    top: 150px;
                    width: 400px;
            }
            .grade-b {
                position:absolute;
                    top: 150px;
                    left: 500px;
                    width: 400px;
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
                <div class="name">
                    <label for="">Name:</label>
                    <input class="form-control" type="text" value="<?php echo $lastname_;?>, &nbsp; <?php echo $firstname_;?> &nbsp;  " aria-label="Disabled input example" disabled readonly>
                </div>
                <h1>Grades</h1>
                <div class="grade-a">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Math</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="math_" value="<?php echo $math_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">English</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="English" name="english_" value="<?php echo $english_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Filipino</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="filipino_" value="<?php echo $filipino_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Science</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="science_" value="<?php echo $science_; ?>">
                </div>
                </div>
                <div class="grade-b">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">History</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="history_" value="<?php echo $history_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">MAPeH</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="mapeh_" value="<?php echo $mapeh_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Values</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="values_" value="<?php echo $values_; ?>">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">TLE</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Math" name="tle_" value="<?php echo $tle_; ?>">
                </div>
                </div>
                <input type="hidden" name="studID" value="<?php echo $studID; ?>">
                <button  class="btn btn-success save" name="saved">Submit</button>
                <a href="grades.php"><button type="button" class="btn btn-danger back">Back</button></a>
                </form>
            </section>
                
<?php
include 'nav_faculty.php';
} else {
	header("location: index.php");
} ?>