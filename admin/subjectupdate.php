<!DOCTYPE html>
<html>
<head>
<script src="../js/jquery-3.2.1.min.js"></script>

<link rel="stylesheet" href="../css/bootstrap.min.css">

<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php
include 'navbar.php';
?>
<?php
$_sid=$_GET["id"];
require 'subjectclass.php';
$obj=new subject();
$result=$obj->selectsubject($_sid);
$row=$result->fetch_assoc();
$_subid=$row["subject_id"];
$_subname=$row["subject_name"];
?>
<form method="post" action="subupdatecode.php">
<div class="jumbotron text-center">
  <div class="container">
    <h1>Subject Updation</h1>
  </div>
</div>
<div class="form-group container">
              <label for="usrname">Subject ID</label>
              <input type="text" class="form-control" name="subid" value=<?php echo $_subid; ?>>
</div>
 <div class="form-group container">
              <label for="usrname">Subject Name</label>
              <input type="text" name="subname" class="form-control" value=<?php echo $_subname; ?>>
</div>
<center><input type="submit" class="btn btn-success btn-lg"  name="btnsubmit" value="Submit"></center>


</form>

</body>
</html>