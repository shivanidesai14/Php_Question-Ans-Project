<?php
$_id=$_GET["id"];
require 'userdb.php';
$obj=new user();
$result=$obj->userdelete($_id);
if($result===TRUE)
{
    header('location:admindisplay.php');
}
else
{
    echo "not succesfully";
}

?>