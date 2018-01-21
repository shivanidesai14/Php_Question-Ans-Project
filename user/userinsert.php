<?php
session_start();
?>

<?php
$random_alpha=md5(rand());
$token=substr($random_alpha,0,6);
$_mail=$_POST["txtmail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_veri="yes";
$_SESSION["mail"]=$_mail;
$_SESSION["pass"]=$_pass;
$_SESSION["token"]=$token;
$target_dir="../images/";
$target_file=$target_dir.basename($_FILES["txtimge"]["name"]); //name is must as we require name of file
//echo $target_file;
if(move_uploaded_file($_FILES["txtimge"]["tmp_name"],$target_file))
{
require 'classdemo.php';
$obj=new database();
$result=$obj->insertuser($_mail,$_name,$_pass,"user",$target_file,$_veri,$token);
}
if($result===true)
{
    header('location:menu.php');
  
}
else
{
 echo $result;
  echo "Not inserted";
}


?>