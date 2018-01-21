<?php
session_start();
?>
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

     
    
<div class="jumbotron text-center" class="btn btn-primary">
<h1>Insert Questions</h1>
</div>

<div class="container">  
	<div class="col-md-12">
<form action="questioninsert.php" method="post" enctype="multipart/form-Data">
 <div class="form-group">
   
    <input type="text" class="form-control" name="txttitle" placeholder="Enter Title">
  </div>
  <div class="form-group"> 
  <textarea class="form-control" name="txtdesc" rows="5" placeholder="Enter Desc" id="comment"></textarea>
</div>

  <div class="form-group">
    <input type="file" name="txtimg">
  </div>

<div class="form-group">
    <select  name="drp" class="form-control">
     <option >Select Your SUbject</option>
  <option value="C">C</option>
  <option value="C++">C++</option>
  <option value="Java">Java</option>
  <option value="Php">Php</option>
</select>
</div>


<center><input type="submit" class="btn btn-danger btn-lg" name="btnsubmit" value="Ask"></center>
</form>
</body>
    </html>
