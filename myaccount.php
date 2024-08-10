<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
include 'db.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id='$user_id'";
$result = $conn->query($sql);
$user = $result->fetch_assoc();
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

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
        
        <style>
            body {
                background-color: #f9f9f9;
            }
            .container {
                margin-top: 50px;
            }
            .profile {
                text-align: center;
            }
            .profile-img {
                border-radius: 50%;
                width: 150px;
                height: 150px;
            }
            .card {
                padding: 20px;
                border-radius: 8px;
            }
            .btn-primary {
                background-color: #26a69a;
            }
            .btn-secondary {
                background-color: #ff5252;
            }
        </style>

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
        <br><br><br>
        <div class="container">
            <div class="card z-depth-3">
                <div class="profile">
                    <img src="https://source.unsplash.com/random/200x200" alt="Profile Picture" class="profile-img">
                    <h4 class="teal-text">My Account</h4>
                    <p><strong>Username:</strong> <?php echo $user['username']; ?></p>
                    <p><strong>Email:</strong> <?php echo $user['email']; ?></p>
                    <div class="row">
                        <div class="col s12 m6">
                            <a href="editprofile.php" class="waves-effect waves-light btn btn-primary">
                                <i class="material-icons left">edit</i>Edit Profile
                            </a>
                        </div>
                        <div class="col s12 m6">
                            <a href="cart.php" class="waves-effect waves-light btn btn-primary">
                                <i class="material-icons left">shopping_cart</i>Cart
                            </a>
                        </div>
                    </div>
                    <form action="logout.php" method="POST">
                        <button type="submit" class="waves-effect waves-light btn btn-secondary">
                            <i class="material-icons left">exit_to_app</i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

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
                            <form action="subscribe.php" method="POST">
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
