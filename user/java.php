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
  <title>Ask Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../js/jquery-3.2.1.min.js"></script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
<script src="../js/bootstrap.min.js"></script>
</head>
<body style="background-color:#E6E6FA;">
 <nav class="navbar navbar-fixed-top navbar-inverse" style="height:80px;">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php" style="color:#F5B7B1   ; font-weight: bold; font-size:250%; margin-top:5px;"><span class="glyphicon glyphicon-question-sign">AskMe</span></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    </div>
    <ul class="nav navbar-nav">
      
      <li class="active"><a href="index.php"><h4 style="font-size:25px;"><span class="glyphicon glyphicon-list-alt" id="div1" onmouseover="stext();" onmouseout="htext();"> Read</h4></span></a></li>
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
        <span class="caret"></span><?php  echo '<img src="'. $_img .'" class="img-circle" width="65" height="50">';?></a>
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
    

  <div>
  <h1><span class="glyphicon glyphicon-star-empty"> JavaQuestions</spna></h1><hr style="  border-top: 5px solid black;">
</div>
<?php
$i=1;
 $obj=new database();
 $result=$obj->getquestions();
  while($row=$result->fetch_assoc())
{
  if($row["fk_subject_id"]==3)
  {
  $obj=new database();
  $id=$row["fk_email_id"];
  $date=$row["question_date"];
  $res=$obj->userget($id);
  $row1=$res->fetch_assoc();
  $obj=new database();
  $q=$row["question_id"];
  $cnt=$obj->selectans($q);
  $_img=$row1["user_img"];
  $_name=$row1["user_name"];
echo '<div class="panel panel-default">';
echo   '<div class="panel-body">';

   // echo '<h3><b>Question'. $i . '</b></h3>';
echo '<h4><img src="'. $_img .'" class="img-circle" width="85" height="85"></img>&nbsp&nbsp<b style="text-align:top;font-size:27px;">'. $_name .'</b><p  style="float:right;font-size:27px;"><span class="glyphicon glyphicon-time  aria-hidden="true">'. $date .'</span></p></h4><br>';    
    echo '<div class="panel panel-heading" style=" background-color:rgb(215,233,213);" font-weight: bold;color:blue;"><a href="questiondetail.php?id='.$row["question_id"].'" style="font-size:20px;">' .  $row["question_desc"] . '</a></div>';
    echo '<h3><a href="ans.php?id='.$row["question_id"].'"><button type="button" class="btn btn-primary btn-md">Answers</button></a> <a href="questiondetail.php?id='.$row["question_id"].'">  <button type="button" class="btn btn-default btn-md">Discuss <span class="badge">'. $cnt .'</span></button></a> <span class="glyphicon glyphicon-thumbs-up btn btn-primary btn-md"> Like</span></a></h3>';
    
echo '</div>';
  echo  '</div>';
  $i=$i+1;
}
}
?>

    </div>
    </body>
    </html>