<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Form</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('images/lib1.jpg');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;


    }

    .btnSubmit{
font-size: 20px;
width: 30%;
    }
    .login-form-3 .btnSubmit {
        font-weight: 600;
        color: #0062cc;
        background-color: #fff;
    }

    .login-form-3 h3 {
        text-align: center;
        color: #fff;
    }
    h3{
        font-size: 40px;
        background-color: black;
        width: 30%;
        margin: auto;
        border-radius: 10px;
        margin-bottom: -40px;
    }

    .login-form-1 h3 {
        text-align: center;
        color: #fff;
    }

    .login-form-3 {
        padding: 5%;
        box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
    }

    a:link,
    a:visited {
        background-color: #f44336;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        border-radius: 10px;
    }

    a:hover,
    a:active {
        background-color: transparent;
    }

    input {
        background-color: #f44336;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
    }
</style>

<body>

    <?php
    $emailmsg = "";
    $pasdmsg = "";
    $msg = "";

    $ademailmsg = "";
    $adpasdmsg = "";


    if (!empty($_REQUEST['ademailmsg'])) {
        $ademailmsg = $_REQUEST['ademailmsg'];
    }

    if (!empty($_REQUEST['adpasdmsg'])) {
        $adpasdmsg = $_REQUEST['adpasdmsg'];
    }

    if (!empty($_REQUEST['emailmsg'])) {
        $emailmsg = $_REQUEST['emailmsg'];
    }

    if (!empty($_REQUEST['pasdmsg'])) {
        $pasdmsg = $_REQUEST['pasdmsg'];
    }

    if (!empty($_REQUEST['msg'])) {
        $msg = $_REQUEST['msg'];
    }

    ?>



    <div class="container login-container">
        <div class="row"></div>
        <div class="row">

            <div class="col-md-10 login-form-3">
                <h3>Admin Login</h3>
                <form action="loginadmin_server_page.php" method="get">
                    <div class="form-group">
                        <input type="text" class="form-control" name="login_email" placeholder="Your Email *" value="" />
                    </div>
                    <Label style="color:red">*<?php echo $ademailmsg ?></label>
                    <div class="form-group">
                        <input type="password" class="form-control" name="login_pasword" placeholder="Your Password *" value="" />
                    </div>
                    <Label style="color:red">*<?php echo $adpasdmsg ?></label>
                    <div class="form-group">
                        <input style="background-color: red; color:white" type="submit" class="btnSubmit" value="Login" />
                    </div>
                    <!-- <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div> -->
                    <div class="container">
                        <a href="Studentlogin.php" target="_blank">Student login</a> <br>

                    </div>

                </form>
            </div>








            <script src="" async defer></script>
</body>

</html>