<?php

$x=implode(",",$_POST["chk"]);
require 'catdb.php';
$obj=new catdatabase();
$result=$obj->catdeleteall($x);
header('location:catdisplay.php');
?>