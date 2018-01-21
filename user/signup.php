<?php
session_start();
//$conn = mysql_connect("localhost","root","");
//mysql_select_db("phppot_examples",$conn);
if(count($_POST)>0) {
if($_POST["captcha_code"]==$_SESSION["captcha_code"]){
/*$message = "Your message received successfully";
mysql_query("INSERT INTO tblcontact (user_name, user_email,subject,content) VALUES ('" . $_POST['userName']. "', '" . $_POST['userEmail']. "','" . $_POST['subject']. "','" . $_POST['content']. "')");*/
$message="Sign Up Successfully";
}
else{
$message = "Enter Correct Captcha Code";
}
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Ask Me</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="css/style.css">

    


</head>

<body style="background-image:url(main-qimg-dbb33883ce56cfbdd53ed74df55de2fd.jpg)">

    <div class="container">
        <div class="info">
            <h1>Ask Me</h1><span>A Place to Share Knowledge..</a></span>
        </div>
    </div>
    <div class="form">
        <div class="thumbnail"><img src="../images/hat.jpg" /></div>
        <form  method="post" action="userinsert.php" enctype="multipart/form-data">
          <input type="text" placeholder="email address" name="txtmail" />
            <input type="text" placeholder="name" name="txtname" />
            <input type="password" placeholder="password" name="txtpass" />
             <input type="text" placeholder="mobile no" name="txtmob" />
            <input type="file" name="txtimge">
        <input name="captcha_code" type="text" placeholder="Enter captcha code">
        <img src="captcha_code.php" />
            <button>create</button>
            <p class="message">Already registered? <a href="login.php">Sign In</a></p>
        </form>
</div>
 <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>
        </body>

</html>