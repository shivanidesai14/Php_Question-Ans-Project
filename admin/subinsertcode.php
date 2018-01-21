<?php
$_name=$_POST["txtname"];
require 'subjectclass.php';
$obj=new subject();
$result=$obj->subinsert($_name);
if($result===TRUE)
{
    header('location:subjectdisplay.php');
}
else
{
    echo "not succesfully";
}

?>