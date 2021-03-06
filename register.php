<?php require_once("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form action="register_core.php" method="POST" class="register-form" id="register-form">
                        <?php
                        if(isset($_GET["please"])){
                             echo "<div class='alert alert-danger'><strong>Error...! </strong> Please Fill in the blanks</div>";
                        }
                        ?>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required name="full_Name" id="name" placeholder="Enter Your Full Name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" required name="userName" id="name" placeholder="User Name"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" required name="email_addr" id="email" placeholder="Enter Your Email"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" required name="pwd" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" required name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" required class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" required name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>