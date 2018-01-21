<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
<link href="../css/jquery.dataTables_themeroller.css" rel="stylesheet">
<!-- Latest compiled and minified JavaScript -->
<script src="../js/jquery.dataTables.min.js"></script>
<script>
        $(function () {
            $('#dataTable').dataTable({
                "bJQueryUI": true,
                "sPaginationType": "full_numbers"
            });
        });
    </script>
<body>
<?php
include 'navbar.php';
?>
<?php
require 'qadb.php';
$obj=new queans();
$result=$obj->quegetdata();
?>

<div class="jumbotron text-center" class="btn btn-primary">
<h1>Asked Questions</h1>
</div>
<div class="container">
<form action="quedeleteall.php" method="post">
<table class="table table-bordered" id="dataTable">
<thead>
<th>Action</th>
<th>Title</th>
<th>Question</th>

<th>Action</th>
<th>View More</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
           echo '<tr>';
              echo '<td><input type="checkbox" name="chk[]" value="'.$row["question_id"].'"></td>';
            echo '<td>'. $row["question_title"] .'</td>';
            echo '<td>'. $row["question_desc"] .'</td>';
             echo '<td><a href="quedelete.php?id='. $row["question_id"].'"><span  class="glyphicon glyphicon-trash"></span></td>';
             echo '<td><a href="quedetail.php?id='.  $row["question_id"] .'"><span  class="glyphicon glyphicon-plus-sign"></span></td>';
            echo '</tr>';
        }
    
}
?>
</table>
<center><a class="btn btn-info btn-lg" href="question.php" role="button">Insert</a>
<input type="submit" name="btnall" class="btn btn-danger btn-lg"value="Delete All"></center>

</body>
</html>