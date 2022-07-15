<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    Require'crud/pup.php';
    $lastname_ = $_SESSION['lastname_'];
    $firstname_ = $_SESSION['firstname_'];
    $admin ="SELECT * FROM studlist WHERE lastname_ = '$lastname_' and firstname_ = '$firstname_'";
    $run = mysqli_query($con, $admin);
    $admintbl = mysqli_num_rows($run);
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
    .index .table {
        margin-top: -40px;
    }
</style>
<body>

<section class="body">
        <section class="index">
            <h1>Grades</h1>
            <hr>
            <h3><?php echo $_SESSION['lastname_']; ?>, <?php echo $_SESSION['firstname_']; ?> <?php echo $_SESSION['mi_']; ?>.</h3>
<div class="table">
<table id="table_id" class="display table table-striped table-bordered">
    <thead>
        <tr>
            <th>Subjects</th>
            <th>Grades</th>
        </tr>
    </thead>
    <tbody>

        <?php 
                if (!empty($admintbl)) {
                    While($row = mysqli_fetch_assoc($run)) {
                        $row['ave'] = ($row['english_'] + $row['math_'] + $row['filipino_']
                        + $row['science_'] + $row['history_'] + $row['mapeh_'] + $row['values_']
                        + $row['tle_'])/8;
                        ?>
                            <tr>
                                <td>Math</td>
                                <td><?php echo $row['math_'];?></td>
                            </tr>
                            <tr>
                                <td>English</td>
                                <td><?php echo $row['english_'];?></td>
                            </tr>
                            <tr>
                                <td>Filipino</td>
                                <td><?php echo $row['filipino_'];?></td>
                            </tr>
                            <tr>
                                <td>History</td>
                                <td><?php echo $row['history_'];?></td>
                            </tr>
                            <tr>
                                <td>Science</td>
                                <td><?php echo $row['science_'];?></td>
                            </tr>
                            <tr>
                                <td>Values</td>
                                <td><?php echo $row['values_'];?></td>
                            </tr>
                            <tr>
                                <td>MAPeH</td>
                                <td><?php echo $row['mapeh_'];?></td>
                            </tr>
                            <tr>
                                <td>TLE</td>
                                <td><?php echo $row['tle_'];?></td>
                            </tr>
                            <tr>
                                <th>AVERAGE</th>
                                <td><?php echo $row['ave'];?></td>
                            </tr>

            <?php   }
                }
                ?>
    </tbody>
</table>
</div>
</section>
</section>

<?php include 'nav_accre.php'; ?> 



</body>
</html>
<?php
} else {
	header("location: index.php");
}
?>
