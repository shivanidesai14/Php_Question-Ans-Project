<?php

$x=implode(",",$_POST["chk"]);
require 'subjectclass.php';
$obj=new subject();
$result=$obj->subjectdeleteall($x);
header('location:subjectdisplay.php');
?>