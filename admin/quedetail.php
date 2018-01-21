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
$_qid=$_GET["id"];
$conn=new mysqli("localhost","root","","pro_question");
$sql="select q.*,u.* from question_tbl q,user_tbl u where q.fk_email_id=u.pk_email_id and q.question_id='". $_qid ."'";
$result=$conn->query($sql);

  while($row=$result->fetch_assoc())
  {
      echo '<div class="container">';
      echo '<table class="table">';
  echo '<tr>';


echo '<td><h2>Asked By:- </h2></td>';
echo '<td><h2>'.$row["pk_email_id"].'</h2><br>';
echo '</tr>';

echo '<tr>';

echo '<td><h1>Question No:- </h1></td>';
echo '<td><h1>'. $row["question_id"] .'</h1><br>';

echo '</tr>';




echo '<tr>';

echo '<td><h1>Question:- </h1></td>';
echo '<td><h1>'. $row["question_desc"] .'</h1><br>';

echo '</tr>';

echo '<tr>';

$sql1="select q.*,a.* from question_tbl q,answer_tbl a where q.question_id=a.fk_question_id and  q.question_id='". $_qid ."' ";
$res=$conn->query($sql1);
while($ro=$res->fetch_assoc())
{
echo '<td><h1>Answers:- </h1></td>';
echo '<td><h1>'. $ro["ans_desc"] .'</h1><br>';

echo '</tr>';
}

echo '<h2>Date:- '. $row["question_date"] .'</h2><br>';
echo '</table>';  
      echo '</div>';
    }  
?>

</body>
</html>