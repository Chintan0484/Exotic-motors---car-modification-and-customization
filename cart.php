<?php
session_start();
include 'db.php';

if (!isset($_SESSION['user_id'])) {
    die("You need to login to view your cart.");
}

$user_id = $_SESSION['user_id'];

$sql = "SELECT cart.id, products.name, products.price, cart.quantity, (products.price * cart.quantity) AS total
        FROM cart
        JOIN products ON cart.product_id = products.id
        WHERE cart.user_id = $user_id";
$result = mysqli_query($conn, $sql);
$cart_items = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exotic Motors - Cart</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Raleway:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <style>
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            border-radius: 8px;
        }
        table {
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }
        .total {
            margin-top: 20px;
            font-size: 1.5em;
            font-weight: bold;
            text-align: right;
        }
        .btn-small {
            margin-right: 5px;
        }
        .message {
            margin-bottom: 20px;
            padding: 10px;
            background-color: #ffeb3b;
            color: #000;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <!-- Header section start -->
    <div class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Exotic Motors"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="about.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="services.php">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <?php if (isset($_SESSION['user_id'])): ?>
                            <li class="nav-item"><a class="nav-link" href="myaccount.php">My Account</a></li>
                        <?php else: ?>
                            <li class="nav-item"><a class="nav-link" href="signup.php">Signup</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- Header section end -->
    
    <br><br><br>
    <div class="container">
        <div class="card">
            <h4 class="center-align">Your Cart</h4>
            <?php if (isset($_SESSION['message'])): ?>
                <div class="message"><?php echo $_SESSION['message']; ?></div>
                <?php unset($_SESSION['message']); ?>
            <?php endif; ?>

            <table class="highlight responsive-table">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($cart_items as $item): ?>
                        <tr>
                            <td><?php echo $item['name']; ?></td>
                            <td>₹<?php echo $item['price']; ?></td>
                            <td>
                                <form action="update_cart.php" method="POST">
                                    <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                    <input type="number" name="quantity" value="<?php echo $item['quantity']; ?>" min="1" max="10" class="browser-default">
                                    <button type="submit" class="btn-small waves-effect waves-light">Update</button>
                                </form>
                            </td>
                            <td>₹<?php echo $item['total']; ?></td>
                            <td>
                                <form action="remove_from_cart.php" method="POST">
                                    <input type="hidden" name="cart_id" value="<?php echo $item['id']; ?>">
                                    <button type="submit" class="btn-small red darken-1 waves-effect waves-light">Remove</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="total">
                <?php
                $total_sql = "SELECT SUM(products.price * cart.quantity) AS total 
                              FROM cart 
                              JOIN products ON cart.product_id = products.id 
                              WHERE cart.user_id = $user_id";
                $total_result = mysqli_query($conn, $total_sql);
                $total_row = mysqli_fetch_assoc($total_result);
                echo "Total: ₹" . $total_row['total'];
                ?>
            </div>
            <div class="right-align">
                <a href="checkout.php" class="btn-large waves-effect waves-light">Checkout</a>
            </div>
        </div>
    </div>

    <!-- Footer section start -->
    <div class="footer_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer_logo"><img src="images/logo.png" alt="Exotic Motors"></div>
                </div>
            </div>
            <div class="footer_section_2">
                <div class="row">
                    <div class="col s12 m6 l3">
                        <h4 class="footer_title">Subscribe Now</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available,</p>
                        <form action="" method="POST">
                            <div class="input-field">
                                <input type="email" id="email" name="email" class="validate" required>
                                <label for="email">Enter Your Email</label>
                            </div>
                            <div class="subscribe_btn">
                                <button type="submit" class="btn waves-effect waves-light">Subscribe</button>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m6 l3">
                        <h4 class="footer_title">Information</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h4 class="footer_title">Helpful Links</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h4 class="footer_title">Investments</h4>
                        <p class="footer_text">There are many variations of passages of Lorem Ipsum available, but the majority </p>
                    </div>
                    <div class="col s12 m6 l3">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="contact_info">
                            <p><i class="material-icons">location_on</i> Location</p>
                            <p><i class="material-icons">phone</i> (+71) 8522369417</p>
                            <p><i class="material-icons">email</i> exoticmotor2000@gmail.com</p>
                        </div>
                        <div class="social_icons">
                            <a href="#"><i class="material-icons">facebook</i></a>
                            <a href="#"><i class="material-icons">twitter</i></a>
                            <a href="#"><i class="material-icons">linkedin</i></a>
                            <a href="#"><i class="material-icons">instagram</i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer section end -->

    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>
