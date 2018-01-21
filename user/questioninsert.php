<?php
session_start();
if(isset($_POST["btnsubmit"]))
{
$_title=$_POST["txttitle"];
$_desc=$_POST["txtdesc"];
$_date=date("d/m/y");
$_email=$_SESSION["mail"];
$_drp=$_POST["drp"];
$_targetfile="../images".basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$_targetfile))
{
require 'questionclass.php';
$obj=new question();
$result=$obj->queinsert($_title,$_desc,$_targetfile,$_date,$_email,$_drp);
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