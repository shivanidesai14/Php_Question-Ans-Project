<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<script>
function stext() {
    var x = document.getElementById("div1");
    x.style.color = '#F5B7B1';
}
function htext() {
        var x = document.getElementById("div1");
        x.style.color = 'white';
       
    }
</script>
<style>

input[type=text], input[type=password],input[type=textarea] 
{
  height:45px;
	  border: 1px solid #ccc;
	box-sizing:border-box;
}
</style>
</head>
  <title>Ask Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
 <script src="ckeditor/ckeditor.js"></script>
</head>
<body style="background-color:#E6E6FA;">
 <nav class="navbar navbar-fixed-top navbar-inverse" style="height:80px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:#F5B7B1   ; font-weight: bold; font-size:250%; margin-top:5px;"><span class="glyphicon glyphicon-question-sign">AskMe</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
    <ul class="nav navbar-nav">
      
      <li ><a href="index.php"><h4 style="font-size:25px;"><span class="glyphicon glyphicon-list-alt" id="div1" onmouseover="stext();" onmouseout="htext();"> Read</h4></span></a></li>
      </li>
      <li><a href="#"><h4 style="font-size:25px;"><span class="glyphicon glyphicon-bell"> Notification</h4></span></a></li>
      <li><a href="contact.php"><h4 style="font-size:25px;"><span class="glyphicon glyphicon-earphone"> Contact </h4></span></a></li>
       
    </ul>
   <ul class="nav navbar-nav navbar-right">

   <li><a href="question.php"><button class="btn btn-danger btn-lg"  type="submit" onclick="question.php" style="margin-top:6px;">Ask Question</button></a></li>
   <li>
   <?php 
   $_img="";
   $_email=$_SESSION["mail"];
    require 'classdemo.php';
    $obj=new database();
    $result=$obj->userget($_email);
    $row=$result->fetch_assoc();
    $_img=$row["user_img"];
    $_name=$row["user_name"];
   
    ?> <li class="dropdown" >
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
        <span class="caret"></span><?php  echo '<img src="'. $_img .'" class="img-circle" width="65" height="60">';?></a>
        <ul class="dropdown-menu">
         <li><a href="profileupdate.php">Update Profile</a></li>
          <li><a href="viewprofile.php">View Profile</a></li>
          <li><a href="pastq.php">Past Questions</a></li>
          <li><a href="changepassword.php">Change Password</a></li>
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </li>
    </li>
    </ul>
   
  </div>
  
</nav>

<div class="row">
<br>
<br>

</div>
<?php
$clan=0;
$cc=0;
$jav=0;
$ph=0;

//require 'classdemo.php';
 $obj=new database();
 $result=$obj->getquestions();

    while($row=$result->fetch_assoc())
   {
     if($row["fk_subject_id"]==1)
     {
       $clan=$clan+1;
     }
     elseif($row["fk_subject_id"]==2)
     {
       $cc=$cc+1;
     }
     elseif($row["fk_subject_id"]==3)
     {
       $jav=$jav+1;
     }
     else
     {
       $ph=$ph+1;
     }
   }


?>
<div class="row">
<br>
<br>
<br>
<br>
</div>

	<div class="col-md-4">
    <ul class="list-group" >
  <li class="list-group-item"  style="width:auto;
padding: 15px;">
    <span class="badge" style="font-size:20px;"><?php echo $clan ?></span>
   <a href="c.php" style="font-size:20px;"> C </a>
  </li>
  
  <li class="list-group-item"  style="width:auto;
padding: 15px;">
    <span class="badge" style="font-size:20px;"><?php echo $cc ?></span>
    <a href="cpp.php" style="font-size:20px;"> C++</a>
  </li>
  
  <li class="list-group-item"  style="width:auto;
padding: 15px;">
    <span class="badge" style="font-size:20px;"><?php echo $ph ?></span>
    <a href="php.php" style="font-size:20px;"> PHP</a>
  </li>
  
  <li class="list-group-item"  style="width:auto;
padding: 15px;">
    <span class="badge" style="font-size:20px;"><?php echo $jav ?></span>
   <a href="java.php" style="font-size:20px;"> JAVA</a>
  </li>
  
  <li class="list-group-item"  style="width:auto;
padding: 15px;">
    <span class="badge" style="font-size:20px;">14</span>
    <a href="drafts.php" style="font-size:20px;">DRAFTS</a>
  </li>
</ul>
    </div>
  <div class="container">  
	<div class="col-md-8">
    
<div class="page-header">
  <h1 style="font-size:40px;"><span class="glyphicon glyphicon-gift"> YourProfile</span></h1><hr style="  border-top: 5px solid black;">

		
			  <ul class="thumbnails">
<?php
$_email=$_SESSION["mail"];
$conn=new mysqli("localhost","root","","pro_question");
    $sql="select * from user_tbl where pk_email_id='". $_email ."'";
    $result=$conn->query($sql);
 

		while($row=$result->fetch_assoc())
		{
  echo '<div class="row">';
 echo '<div class="col-xs-5">';
   echo ' <center><a href="#">';
     echo '<ceter><img src="' . $row["user_img"] . '" class="img-circle" style="height:400px;width:300px;"></center>';
      echo'  </a>';
   echo '</div>';
 echo '<div class="col-xs-7">';
echo '<ul class="list-group">';
echo '<br><br><br>';
echo '<h1 style="font-style: oblique;">Name :- '.$row["user_name"].'</h1><br>';
 echo ' <h1 style="font-style: oblique;">Mob No :- '. $row["user_mob_no"] .'</h1>';
echo '</ul>';
echo '</div>';  

		}
		?>		
			  </ul>
				</div>
</body>
</html>