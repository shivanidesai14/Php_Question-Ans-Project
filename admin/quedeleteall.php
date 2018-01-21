<?php

$x=implode(",",$_POST["chk"]);
require 'qadb.php';
$obj=new queans();
$result=$obj->quedeleteall($x);
header('location:questiondisplay.php');
?>