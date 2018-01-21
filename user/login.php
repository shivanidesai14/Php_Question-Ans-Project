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
        <form class="login-form" action="loginuser.php" method="post">
            <input type="text" placeholder="username" name="txtmail" />
            <input type="password" placeholder="password" name="txtpass" />
            <button type="submit"  name="btnsubmit">Login</button>
            <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
            <p class="message">Forget <a href="forgetpass.php">Password???</a></p>
        </form>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>