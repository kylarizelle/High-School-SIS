<?php
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['id'])) {

    Require'crud/pup.php';
    $admin ="SELECT * FROM studlist order by ave desc";
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
            <h1>student's Average Ranking</h1>
            <hr>

<div class="table">
<table id="table_id" class="display table table-striped table-bordered">
    <thead>
        <tr>
            <th>Rank</th>
            <th>Student's Name</th>
            <th>Average</th>
            
        </tr>
    </thead>
    <tbody>

        <?php 


        $rank = 0;
        $last_score = false;
        $rows = 0;
        while($rown = mysqli_fetch_array($run)) {
            $rows++;
            if($last_score != $rown['ave']) {
                $last_score = $rown['ave'];
                $rank = $rows;
            }
            ?> 
            <tr>
            <td><?php echo $rank; ?></td>
            <td><?php echo $rown['firstname_'];?>&nbsp; <?php echo $rown['mi_'];?>. <?php echo $rown['lastname_']; ?></td>
            <td><?php echo $rown['ave'];?></td>
            
        </tr>
            
            <?php
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
