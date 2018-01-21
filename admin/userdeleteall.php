<?php

$x=implode(",",$_POST["chk"]);
require 'userdb.php';
$obj=new user();
$result=$obj->userdeleteall($x);
header('location:userdisplay.php');
?>