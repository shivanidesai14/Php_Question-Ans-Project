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
  <h1>Answer Details</h1>

</div>
<?php
$_aid=$_GET["id"];
//require 'qadb.php';
//$obj=new queans();
//$result=$obj->ansdetail($_aid);
$conn=new mysqli("localhost","root","","pro_question");
$sql="select q.*,u.*,a.* from question_tbl q,user_tbl u,answer_tbl a where q.question_id=a.fk_question_id and a.fk_email_id=u.pk_email_id and a.ans_id='". $_aid ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
      echo '<div class="container">';
      echo '<table class="table">';
  echo '<tr>';


echo '<td><h2>Anser By:- </h2></td>';
echo '<td><h2>'.$row["pk_email_id"].'</h2><br>';
echo '</tr>';

echo '<tr>';

echo '<td><h1>Question:- </h1></td>';
echo '<td><h1>'. $row["question_desc"] .'</h1><br>';

echo '</tr>';

echo '<tr>';
echo '<td><h2>Answer    :-</h2></td> ';
echo '<td><h2>'. $row["ans_desc"] .'</h2><br>';
echo '</tr>';
echo '<h2>Date:- '. $row["ans_date"] .'</h2><br>';
echo '</table>';  
      echo '</div>';
    }  
?>

</body>
</html>