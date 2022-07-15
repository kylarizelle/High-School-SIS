<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    Require'crud/pup.php';
    $admin ="SELECT * FROM studlist";
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
<body>

<section class="body">
        <section class="index">
            <h1>Enrolled Student</h1>
            <hr>

<div class="table">
<table id="table_id" class="display table table-striped table-bordered">
    <thead>
        <tr>
            <th>Student Name</th>
            <th>Math</th>
            <th>English</th>
            <th>Filipino</th>
            <th>Science</th>
            <th>History</th>
            <th>Mapeh</th>
            <th>Values</th>
            <th>TLE</th>
            <th>Average</th>
            <th>add/edit grade</th>
        </tr>
    </thead>
    <tbody>

        <?php 
                if (!empty($admintbl)) {
                    While($row = mysqli_fetch_assoc($run)) {
                        $row['ave'] = ($row['english_'] + $row['math_'] + $row['filipino_']
                        + $row['science_'] + $row['history_'] + $row['mapeh_'] + $row['values_']
                        + $row['tle_'])/8;
                        // $ave = $row['ave'];
                        // $sql = "UPDATE studlist SET ave = '$ave'";
                        // $sqlquery = mysqli_query($con, $sql);
                        ?>
                            <tr>
                                    <?php $row['studID']; ?>
                                    <td><?php echo $row['lastname_']; ?>, &nbsp; <?php echo $row['firstname_']; ?> &nbsp; <?php echo $row['mi_']; ?>.</td>
                                    <td><?php echo $row['math_']; ?></td>
                                    <td><?php echo $row['english_']; ?></td>
                                    <td><?php echo $row['filipino_']; ?></td>
                                    <td><?php echo $row['science_']; ?></td>
                                    <td><?php echo $row['history_']; ?></td>
                                    <td><?php echo $row['mapeh_']; ?></td>
                                    <td><?php echo $row['values_']; ?></td>
                                    <td><?php echo $row['tle_']; ?></td>
                                    <td><?php echo $row['ave']; ?></td>
                                    <td><a href="editgrades.php?studID=<?php echo $row['studID']; ?>">add/edit</a></td>

                            </tr>

            <?php   }
                }
                ?>
    </tbody>
</table>
</div>
</section>
</section>

<?php include 'nav_faculty.php'; ?> 


<script type="text/javascript">
$(document).ready( function () {
    $('#table_id').DataTable();
} );
window.$ = window.jquery = require('./node_modules/jquery');
window.dt = require('./node_modules/datatables.net')();
window.$('#table_id').DataTable();

</script>
</body>
</html>
<?php
} else {
	header("location: index.php");
}
?>
