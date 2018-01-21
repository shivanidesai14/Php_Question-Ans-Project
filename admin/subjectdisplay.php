<!DOCTYPE html>
<head>
    <script src="../js/jquery-3.2.1.min.js"></script>
 <link rel="stylesheet" href="../css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php

include 'navbar.php';

?>

<?php 
require 'subjectclass.php';
$obj=new subject();
$result=$obj->getAllsubject();

?>
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>All Subjects</h1>
</div>
<div class="container">
<form action="subjectdeleteall.php" method="post">
<table class="table table-bordered">
<thead>
<th>SELECT</th>
<th>NAME</th>
<th> ACTION </th?
</thead>
<?php
while($row=$result->fetch_assoc())
{
    echo '<tr>';
    echo '<td><input type="checkbox" name="chk[]" value="'.$row["subject_id"].'"></td>';
    echo '<td>'. $row["subject_name"] .'</td>';
   
    echo '<td><a href="subjectdelete.php?id='.$row["subject_id"].'"><span class="glyphicon glyphicon-trash"></span></a>
      &nbsp&nbsp&nbsp<a href="subjectupdate.php?id='.$row["subject_id"].'"><span class="glyphicon glyphicon-pencil"></span></a></td>';
     
    echo '</tr>';
}
?>
</table>
<center><a class="btn btn-info btn-lg" href="subinsert.php" role="button">Insert</a>
<input type="submit" name="btnall" class="btn btn-danger btn-lg"value="Delete All"></center>
</div>
</form>
</body>
</html>