<?php
$_id=$_GET["id"];
require 'qadb.php';
$obj=new queans();
$result=$obj->quedelete($_id);
if($result===TRUE)
{
    header('location:questiondisplay.php');
}
else
{
    echo "not succesfully";
}

?>