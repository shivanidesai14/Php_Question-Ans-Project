<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="../js/jquery-3.2.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php

include 'navbar.php';
?>

<div class="jumbotron text-center">
  <div class="container">
    <h1>User Insert</h1>
  </div>
</div>
    <form action="userinsertcode.php" method="post" enctype="multipart/form-Data" class="container">
       <div class="form-group container">
              <label for="usrname">Email id</label>
              <input type="text" class="form-control" name="txtemail" id="usrname" placeholder="Enter Email id">
   </div>
  <div class="form-group container" >
   <label for="username">Name</label>
    <input type="text" class="form-control" name="txtname" id="psw" placeholder="Enter name">
  </div>

   <div class="form-group container" >
   <label for="username">Password</label>
    <input type="password" class="form-control" name="txtpass" id="psw" placeholder="Enter Password">
  </div>

   <div class="form-group container" >
   <label for="username">Mobile No</label>
    <input type="number" class="form-control" name="txtmno" id="psw" placeholder="Enter Mobile No">
  </div>
   
   <div class="form-group container" >
   <label for="username">User Type</label>
    <input type="text" class="form-control" name="txttype" id="psw" placeholder="Enter User Type">
  </div>

  <div class="form-group container" >
    <input type="file" name="txtimg">
  </div>


  <div class="form-group container">
   
<center><input type="submit" class="btn btn-success btn-lg"  name="btninsert" value="Insert"></center>
</div>
    </form>
  
</body>
</html>