<?php
$_id=$_GET["id"];
require 'subjectclass.php';
$obj=new subject();
$result=$obj->subdelete($_id);
if($result===TRUE)
{
    header('location:subjectdisplay.php');
}
else
{
    echo "not succesfully";
}

?>