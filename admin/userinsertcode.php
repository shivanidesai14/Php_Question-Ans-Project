<?php
if(isset($_POST["btninsert"]))
{

$random_alpha=md5(rand());
$token=substr($random_alpha,0,6);
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_mno=$_POST["txtmno"];
$_type=$_POST["txttype"];
$target_dir="../images/";
$_targetfile=$target_dir.basename($_FILES["txtimg"]["name"]);
if(move_uploaded_file($_FILES["txtimg"]["tmp_name"],$_targetfile))
{
require 'userdb.php';
$obj=new user();
$result=$obj->userinsert($_email,$_name,$_pass,$_mno,$_type,$_targetfile,$token);
if($result===TRUE)
{
    header('location:userdisplay.php');
}
else
{
    
    echo "not succesfully";
}
}

}


?>