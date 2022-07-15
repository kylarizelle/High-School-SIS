
<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {
include 'crud/pup.php';

    if (isset($_GET['adminID']) && $_GET['adminID']!="") {
        $adminID = $_GET['adminID'];
        $adminID_query = "SELECT * FROM account WHERE adminID= '$adminID'";
        $adminID_result =mysqli_query($con, $adminID_query);
        $adminID_data = mysqli_num_rows($adminID_result);

        if(!empty($adminID_data)) {
            $row = mysqli_fetch_assoc($adminID_result);

                $lastname = $row['lastname_'];
                $firstname = $row['firstname_'];
                $mi = $row['mi_'];
                
                $sql = "SELECT * FROM studlist WHERE lastname_ = '$lastname' and firstname_ = '$firstname' LIMIT 1" ;
                $check_query = mysqli_query($con,$sql);
                $count_email = mysqli_num_rows($check_query);
            if($count_email > 0){
                    $_SESSION['error'] = "You are already enrolled";
                    header("location: enrollment.php");
                    exit();
            } else {
                $grant = "INSERT INTO studlist(lastname_, firstname_, mi_) VALUES('$lastname', '$firstname', '$mi')";
                $run = mysqli_query($con, $grant);

                if ($run) {
                    header("location: enrollment.php?success= The access request was granted");
                    exit();
                }
            }
        }
    }

} else {
	header("location: index.php");
} ?>