<?php
session_start();
?>
<?php 
$_email= $_SESSION["mail"];
echo $_email;
$_oldpassword=$_POST["txtold"];
$_newpassword=$_POST["txtnew"];
$_cnewpassword=$_POST["txtcnew"];

if($_newpassword==$_cnewpassword)
{
    require 'classdemo.php';
    $obj=new database;
    $result=$obj->changePassword($_oldpassword,$_newpassword,$_email);
    if($result===TRUE)
    {
        header('location:viewprofile.php');

    }
    else
    {
        echo "Not Successfull";
    }
}
else
{
    echo "Please re-enter password";
}
?>