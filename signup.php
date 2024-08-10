<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

session_start();
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $step = $_POST['step'];
    if ($step == '1') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $otp = rand(100000, 999999);
        $_SESSION['otp'] = $otp;
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;

        $mail = new PHPMailer(true);
        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'exoticmotor2000@gmail.com';
            $mail->Password = 'hreksojscntyrnus';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            $mail->setFrom('exoticmotor2000@gmail.com', 'Exotic Motors');
            $mail->addAddress($email);

            $mail->isHTML(true);
            $mail->Subject = 'Your OTP Code';
            $mail->Body    = 'Your OTP code is ' . $otp;

            $mail->send();
            header('Location: signup.php?step=2');
        } catch (Exception $e) {
            echo "Failed to send OTP. Mailer Error: {$mail->ErrorInfo}";
        }
    } elseif ($step == '2') {
        $entered_otp = $_POST['otp'];
        if ($entered_otp == $_SESSION['otp']) {
            $username = $_SESSION['username'];
            $email = $_SESSION['email'];
            $password = $_SESSION['password'];

            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            if ($conn->query($sql) === TRUE) {
                unset($_SESSION['otp'], $_SESSION['username'], $_SESSION['email'], $_SESSION['password']);
                header('Location: login.php');
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo "Invalid OTP.";
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>Exotic Motors</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- font css -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    </head>
    <body>
        <!-- header section start -->
        <div class="header_section">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand"href="index.php"><img src="images/logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="myaccount.php">My Account</a>
                        </li>
                        <?php else: ?>
                        <li class="nav-item">
                            <a class="nav-link" href="signup.php">Signup</a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                    </form>
                </div>
                </nav>
            </div>
        </div>
        <!-- header section end -->
        
        <!-- Signup section start -->
        <div class="contact_section layout_padding">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h1 class="contact_taital">Signup</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="contact_section_2">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mail_section_1">
                                <?php if (!isset($_GET['step']) || $_GET['step'] == '1'): ?>
                                <form method="POST" action="">
                                    <input type="hidden" name="step" value="1">
                                    <div class="form-group">
                                        <input type="text" id="username" name="username" class="mail_text" placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="mail_text" placeholder="Email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" id="password" name="password" class="mail_text" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <div class="send_bt">
                                            <button type="submit" style="width: 100%; text-align: center;font-size: 16px;color: #fefefd;background-color: #fe2929;padding: 12px;margin-top: 20px;display: block;border-radius: 5px; text-transform: uppercase; font-weight: bold;">
                                                Signup
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <?php elseif ($_GET['step'] == '2'): ?>
                                <form method="POST" action="">
                                    <input type="hidden" name="step" value="2">
                                    <div class="form-group">
                                        <input type="text" id="otp" name="otp" class="mail_text" placeholder="Enter OTP" required>
                                    </div>
                                    <div class="send_bt">
                                        <button type="submit" style="width: 100%; text-align: center;font-size: 16px;color: #fefefd;background-color: #fe2929;padding: 12px;margin-top: 20px;display: block;border-radius: 5px; text-transform: uppercase; font-weight: bold;">
                                            Verify OTP
                                        </button>
                                    </div>
                                </form>
                                <?php endif; ?>
                            </div>
                            <div class="send_bt"><a href="login.php">Login</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- signup section end -->
        <!-- footer section start -->
        <div class="footer_section layout_padding">
            <div class="container">
                <div class="row">
                <div class="col-md-12">
                    <div class="footeer_logo"><img src="images/logo.png"></div>
                </div>
                </div>
                <div class="footer_section_2">
                <div class="row">
                    <div class="col">
                        <h4 class="footer_taital">Subscribe Now</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p>
                        <form action="" method="POST">
                            <div class="form-group">
                                <textarea class="update_mail" placeholder="Enter Your Email" rows="1" id="email" name="email" required></textarea>
                                <div class="subscribe_bt"><input type="submit" value="Subscribe"></div>
                            </div>
                        </form>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Information</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Helpful Links</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Invesments</h4>
                        <p class="lorem_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col">
                        <h4 class="footer_taital">Contact Us</h4>
                        <div class="location_text"><a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_15">Location</span></a></div>
                        <div class="location_text"><a href="#"><i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_15">(+71) 8522369417</span></a></div>
                        <div class="location_text"><a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_15">exoticmotor2000@gmail.com</span></a></div>
                        <div class="social_icon">
                            <ul>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
            <div class="container">
                <div class="row">
                <div class="col-sm-12">
                    <p class="copyright_text">2023 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a></p>
                </div>
                </div>
            </div>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
</body>
</html>
