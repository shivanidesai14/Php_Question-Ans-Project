<?php
$_id=$_GET["id"];
require 'qadb.php';
$obj=new queans();
$result=$obj->ansdelete($_id);
if($result===TRUE)
{
    header('location:ansdisplay.php');
}
else
{
    echo "not succesfully";
}

?>