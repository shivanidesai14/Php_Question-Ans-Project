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
<div class="jumbotron text-center" class="btn btn-primary">
  <h1>User Details</h1>

</div>
<?php
$_email=$_GET["id"];
require 'userdb.php';
$obj=new user();
$result=$obj->useradmindetail($_email);
  while($row=$result->fetch_assoc())
  {
  echo '<div class="row">';
 echo '<div class="col-xs-5">';
   echo ' <center><a href="#">';
     echo '<ceter><img src="' . $row["user_img"] . '" class="img-responsive img-circle" style="height:400px;width:300px;"></center>';
      echo'  </a>';
   echo '</div>';
 echo '<div class="col-xs-7">';
echo '<ul class="list-group">';
echo '<h1>Name :- '.$row["user_name"].'</h1><br>';
 echo ' <h1>Mob No. :- '. $row["user_mob_no"] .'</h1><br>';
echo '</ul>';
echo '</div>';  
      
    }  
?>

</body>
</html>