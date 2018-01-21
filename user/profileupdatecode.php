<?php
$_image=$_GET["img"];
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_pass=$_POST["txtpass"];
$_mob=$_POST["txtmob"];
$_img=basename($_FILES["txtimg"]["name"]);
if($_img=="")
{
    $_img=$_image;
}
else
{   
    unlink($_image);
    move_uploaded_file($_FILES["txtimg"]["tmp_name"],"../images/".$_img);
    $_img="../images/".$_img;
}
$conn=new mysqli("localhost","root","","pro_question");
 $sql="update user_tbl set user_name='". $_name ."',user_pass='". $_pass ."',user_mob_no='". $_mob ."',user_img='". $_img ."' where pk_email_id='". $_email ."'";
 $result=$conn->query($sql);
if($result===TRUE)
{
    header('location:viewprofile.php');
}
else
{
    echo "unsuccesful";
}
?>
