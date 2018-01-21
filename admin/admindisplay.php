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
<form method="post" action="deletealladmin.php">
<div class="jumbotron text-center" class="btn btn-primary">
<h1>Admin</h1>
</div>
<div class="container">
<table class="table table-bordered">
<thead>
<th>Name</th>
<th>Image</th>
<th>Action</th>
<th>View More</th>
</thead>
<?php
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        if($row["user_type"]==="admin")                                    
        {
           echo '<tr>';
            echo '<td>'. $row["user_name"]  .'</td>';
            echo '<td><img src="'. $row["user_img"] .'" style="height:200px;width:200px;" class="img-responsive"></td>';
             echo '<td><a href="admindelete.php?id='. $row["pk_email_id"].'"><span  class="glyphicon glyphicon-trash"></span></td>';
             echo '<td><a href="admindetail.php?id='.  $row["pk_email_id"] .'"><span  class="glyphicon glyphicon-plus-sign"></span></td>';
            echo '</tr>';
        }
    }
}
?>
</table>
</form>

</body>
</html>