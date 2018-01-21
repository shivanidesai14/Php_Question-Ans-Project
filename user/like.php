<?php
session_start();
$_id=$_GET["id"];
$_mail=$_SESSION["mail"];
$cnn=mysqli_connect("localhost","root","","pro_question");
$sql="select * from like_tbl where fk_question_id='". $_id ."'";
$result=$cnn->query($sql);
$row=$result->fetch_assoc();
$cnt=$row["like_cnt"];
if($cnt==0)
{
$sql="insert into like_table values('". NULL ."','". $_id ."','". $_mail ."','". $cnt ."')";
$result=$cnn->query($sql);
echo $sql;
if($result==TRUE)
{
    $cnt=$cnt+1;
    header('location:index.php');
}
}
else
{
 $cnt++;
 $sql="update like_tbl set like_cnt=cnt+1 where question_id='". $_id ."'";
 $result=$cnn->query($sql);
if($result==TRUE)
{
    
    header('location:index.php');
}
}
?>