<?php
session_start();
if (!isset($_SESSION['booking_success']) || !$_SESSION['booking_success']) {
    header('Location: index.php');
    exit();
}
unset($_SESSION['booking_success']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Exotic Motors</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
            background-color: #f9f9f9;
        }
        main {
            flex: 1 0 auto;
        }
        .container {
            text-align: center;
            padding: 50px 20px;
        }
        .thank-you-icon {
            font-size: 100px;
            color: #26a69a;
        }
        .thank-you-message {
            font-size: 24px;
            font-weight: 600;
            color: #333;
        }
        .thank-you-description {
            font-size: 18px;
            color: #666;
        }
        .btn-home {
            margin-top: 30px;
            padding: 10px 20px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper teal">
                <a href="#" class="brand-logo center">Exotic Motors</a>
            </div>
        </nav>
    </header>
    <main>
        <div class="container">
            <i class="material-icons thank-you-icon">check_circle</i>
            <div class="thank-you-message">Thank You for Your Booking!</div>
            <div class="thank-you-description">We have received your car modification and customization request.</div>
            <div class="thank-you-description">A confirmation email has been sent to your email address.</div>
            <a href="index.php" class="btn waves-effect waves-light teal btn-home">Go to Home</a>
        </div>
    </main>
    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Exotic Motors</h5>
                    <p class="grey-text text-lighten-4">We are dedicated to providing the best car modification and customization services.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Quick Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="index.php">Home</a></li>
                        <li><a class="grey-text text-lighten-3" href="services.php">Services</a></li>
                        <li><a class="grey-text text-lighten-3" href="about.php">About</a></li>
                        <li><a class="grey-text text-lighten-3" href="contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                © 2023 Exotic Motors All rights reserved.
            </div>
        </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
