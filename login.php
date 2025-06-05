<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Login</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Flat lay login form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->

    <link href="//fonts.googleapis.com/css2?family=Nunito:wght@300;400;600&display=swap" rel="stylesheet">

    <!--/Style-CSS -->
    <link rel="stylesheet" href="css/s4.css" type="text/css" media="all" />
    <!--//Style-CSS -->

    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>

</head>

<body>
    <!-- form section start -->
    <section class="w3l-workinghny-form">
        <!-- /form -->
        <div class="workinghny-form-grid">
            <div class="wrapper">
                <div class="logo">
                    <h1><a class="brand-logo" href="index.html">Swadeshy™</a></h1>
                    <!-- if logo is image enable this   
                        <a class="brand-logo" href="#index.html">
                            <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                        </a> -->
                </div>
                <div class="workinghny-block-grid">
                    <div class="form-right-inf">
                        <h2> </h2>
                        <!--<div class="social-media">
                            <a href="#facebook" class="fb"><span class="fab fa-facebook" aria-hidden="true"></span> Login with facebok</a>
                            <a href="#twitter" class="tw"><span class="fab fa-twitter" aria-hidden="true"></span> Login with twitter</a>
                        </div>-->
                        <div class="login-form-content">
                            <h2>Login with email</h2>
                            <form  class="signin-form" method="post">
                                <div class="one-frm">
                                    <input type="text" name="username" placeholder="Email" required="" autofocus>
                                </div>
                                <div class="one-frm">
                                    <input type="password" name="password" placeholder="Password" required="">
                                </div>
                                <!--<label class="check-remaind">
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                    <p class="remember">Remember Me</p>

                                </label>-->
                                <button class="btn btn-style mt-3" name="login">Login </button>
                                <p class="already">Don't have an account? <a href="signup.php">Sign up</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //form -->
    </section>
    <!-- //form section start -->
</body>

</html>

<?php
include('config.php');
if (isset($_POST['login'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from login where username='$username' and password='$password'";
    $result=mysqli_query($connect,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    $count=mysqli_num_rows($result);
    if ($count==1) {
        header("Location:index.php");
    }
    else{
        echo '<script>
               window.location.href="login.php";
               alert("Login Failed. Invalid username or password!!")
               </script>';
    }
}
?>