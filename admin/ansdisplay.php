<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<body>
<?php
include 'navbar.php';
?>
<?php
require 'qadb.php';
$obj=new queans();
$result=$obj->ansgetdata();
?>

<div class="jumbotron text-center" class="btn btn-primary">
<h2>Ansers of Questions</h2>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Answer No.</th>
<th>Answer Description</th>
<th>Date</th>
<th>Action</th>
<th>View More</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
           echo '<tr>';
            echo '<td>'. $row["ans_id"]  .'</td>';
            echo '<td>'. $row["ans_desc"] .'</td>';
            echo '<td>'. $row["ans_date"] .'</td>';
             echo '<td><a href="ansdelete.php?id='. $row["ans_id"].'"><span  class="glyphicon glyphicon-trash"></span></td>';
             echo '<td><a href="ansdetail.php?id='.  $row["ans_id"] .'"><span  class="glyphicon glyphicon-plus-sign"></span></td>';
            echo '</tr>';
        }
    
}
?>
</table>


</body>
</html>