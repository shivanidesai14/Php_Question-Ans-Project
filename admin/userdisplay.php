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
require 'userdb.php';
$obj=new user();
$result=$obj->usergetdata();
?>

<div class="jumbotron text-center" class="btn btn-primary">
<h1>Users</h1>
</div>
<div class="container">
<form method="post" action="userdeleteall.php">
<table class="table table-bordered">
<thead>
<th>Action</th>
<th>Name</th>
<th>Image</th>
<th>Type</th>
<th>Action</th>
<th>View More</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        
           echo '<tr>';
            echo '<td><input type="checkbox" name="chk[]" value="'.$row["pk_email_id"].'"></td>';
            echo '<td>'. $row["user_name"]  .'</td>';
            echo '<td><img src="'. $row["user_img"] .'" style="height:200px;width:200px;" class="img-responsive"></td>';
             echo '<td>'. $row["user_type"]  .'</td>';
             echo '<td><a href="userdelete.php?id='. $row["pk_email_id"].'"><span  class="glyphicon glyphicon-trash"></span></td>';
             echo '<td><a href="admindetail.php?id='.  $row["pk_email_id"] .'"><span  class="glyphicon glyphicon-plus-sign"></span></td>';
            echo '</tr>';
    
    }
}
?>
</table>
<center><a class="btn btn-info btn-lg" href="userinsert.php" role="button">Insert</a>
<input type="submit" name="btnall" class="btn btn-danger btn-lg" value="Delete All"></center>
</div>
</form>

</body>
</html>