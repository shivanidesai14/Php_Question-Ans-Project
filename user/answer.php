<?php
session_start();
if(isset($_POST["btnsubmit"]))
{
$_desc=$_POST["txtdesc"];
$_id=$_SESSION["id"];
$_date=date("d/m/y");
$_email=$_SESSION["mail"];
$_targetfile="../images".basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$_targetfile))
{
require 'questionclass.php';
$obj=new question();
$result=$obj->ansinsert($_desc,$_targetfile,$_date,$_id,$_email);
if($result===TRUE)
{
    header('location:index.php');
}
else
{
    echo "not succesfully";
}
}
else
{
require 'questionclass.php';
$obj=new question();
$result=$obj->ansinsert($_desc,$_targetfile,$_date,$_id,$_email);
if($result===TRUE)
{
    header('location:index.php');
}
else
{
    echo "not succesfully";
}
}
}
?>