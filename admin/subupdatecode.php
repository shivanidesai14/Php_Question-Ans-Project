<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
 {

 $_subid=$_POST["subid"];
$_subname=$_POST["subname"];
require 'subjectclass.php';
$obj1=new subject();
$result1=$obj1->subupdate($_subid,$_subname);
   
    if($result1===TRUE)
    {

        header('location:subjectdisplay.php');

    }
    else
    {
       
         echo " not succesfully";


        }



 }


?>