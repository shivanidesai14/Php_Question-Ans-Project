<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>Ask Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
 <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:darkred; font-weight: bold; font-size:200%; margin-top:8px;">Ask Me</a>
    </div>
    <ul class="nav navbar-nav">
      
      <li><a href="index.php"><h4><span class="glyphicon glyphicon-list-alt"> Read </h4></span></a></li>
      </li>
      <li><a href="#"><h4><span class="glyphicon glyphicon-bell"> Notification</h4></span></a></li>
      <li class="active"><a href="#"><h4 style="color:red;"><span class="glyphicon glyphicon-earphone"> Contact </h4></span></a></li>
       
    </ul>
   <ul class="nav navbar-nav navbar-right" style="margin-top:8px;" >
   <li>
   <?php 
   $_email=$_SESSION["mail"];
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->userget($_email);
    $row=$result->fetch_assoc();
    $_img=$row["user_img"];
    $_name=$row["user_name"];
   echo '<img src="'. $_img .'" class="img-circle" width="50" height="50">';
    ?> <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
           <li><a href="viewprofile.php">View Profile</a></li>
            <li><a href="profileupdate.php">Update Profile</a></li>
              <li><a href="changepassword.php">Change Password</a></li>
               <li><a href="pastq.php">Past Questions</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </li>
    </ul>
   
  </div>
  
</nav><br><br><br><br><br>

	<div class="col-md-3">
    <ul class="list-group">
  <li class="list-group-item">
    <span class="badge">14</span>
    C
  </li>
  
  <li class="list-group-item">
    <span class="badge">14</span>
    C++
  </li>
  
  <li class="list-group-item">
    <span class="badge">14</span>
    PHP
  </li>
  
  <li class="list-group-item">
    <span class="badge">14</span>
    JAVA
  </li>
  
  <li class="list-group-item">
    <span class="badge">14</span>
    DRAFTS
  </li>
</ul>
    </div>
	 <div class="container">  
	<div class="col-md-9">
    
<div class="page-header">
  <h1>Contact Us</h1>
</div>
<!-- Header End====================================================================== -->
<?php
 $_email=$_SESSION["mail"];
?>
	
	<form action="review.php" method="post" enctype="multipart/form-data">
         <div class="form-group">
   
    <input type="text" class="form-control" name="txtname" placeholder="Enter Name">
  </div>
		   <div class="form-group">
           
              <input type="text" name="txtemail" placeholder="email" value="<?php echo $_email; ?>"  class="form-control"/>
           
          </div>
		    <div class="form-group">
   
    <input type="text" class="form-control" name="txtsubject" placeholder="Enter Subject">
  </div>
           <div class="form-group"> 
  <textarea class="form-control" name="txtreview" rows="5" placeholder="Your View.." id="comment"></textarea>
</div>

            <input class="btn btn-large btn-danger" type="submit" name="btnsubmit" value="Send Messages"></button>

        </fieldset>
      </form>
		</div>
	</div>
</div>
</div>
</body>
</html>