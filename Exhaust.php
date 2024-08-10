<?php
session_start();
include 'subscribe.php';
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
        <title>Exhaust</title>
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
        
    <!-- gallery section start -->
    <div class="gallery_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="gallery_taital">Exhaust</h1>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/1.png"></div>
                        <h3 class="types_text">Premium Exhaust System</h3>
                        <p class="looking_text">Price: ₹6000</p>
                        <label for="quantity-28">Quantity:</label>
                        <input type="number" id="quantity-28" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="28">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/2.png"></div>
                        <h3 class="types_text">Sport Performance Exhaust</h3>
                        <p class="looking_text">Price: ₹5500</p>
                        <label for="quantity-29">Quantity:</label>
                        <input type="number" id="quantity-29" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="29">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/3.png"></div>
                        <h3 class="types_text">Silent Performance Exhaust</h3>
                        <p class="looking_text">Price: ₹5800</p>
                        <label for="quantity-30">Quantity:</label>
                        <input type="number" id="quantity-30" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="30">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/4.png"></div>
                        <h3 class="types_text">High-Performance Exhaust</h3>
                        <p class="looking_text">Price: ₹6200</p>
                        <label for="quantity-31">Quantity:</label>
                        <input type="number" id="quantity-31" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="31">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/5.png"></div>
                        <h3 class="types_text">Carbon Fiber Exhaust</h3>
                        <p class="looking_text">Price: ₹7000</p>
                        <label for="quantity-32">Quantity:</label>
                        <input type="number" id="quantity-32" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="32">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/6.png"></div>
                        <h3 class="types_text">Stainless Steel Exhaust</h3>
                        <p class="looking_text">Price: ₹5400</p>
                        <label for="quantity-33">Quantity:</label>
                        <input type="number" id="quantity-33" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="33">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery_section_2">
            <div class="row">
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/7.png"></div>
                        <h3 class="types_text">Performance Cat-Back Exhaust</h3>
                        <p class="looking_text">Price: ₹5800</p>
                        <label for="quantity-34">Quantity:</label>
                        <input type="number" id="quantity-34" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="34">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/8.png"></div>
                        <h3 class="types_text">Dual Exhaust System</h3>
                        <p class="looking_text">Price: ₹6300</p>
                        <label for="quantity-35">Quantity:</label>
                        <input type="number" id="quantity-35" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="35">Add to Cart</button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/9.png"></div>
                        <h3 class="types_text">Turbo-Back Exhaust</h3>
                        <p class="looking_text">Price: ₹6500</p>
                        <label for="quantity-36">Quantity:</label>
                        <input type="number" id="quantity-36" name="quantity" value="1" min="1"><br>
                        <button class="add-to-cart" data-product-id="36">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

      <!-- gallery section end -->
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
      
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <script>
      $(document).ready(function(){
            $('.add-to-cart').click(function(){
                var productID = $(this).data('product-id');
                var quantity = $('#quantity-' + productID).val();
                
                $.ajax({
                    url: 'add_to_cart.php',
                    type: 'POST',
                    data: {
                        product_id: productID,
                        quantity: quantity
                    },
                    success: function(response) {
                        alert("item added succesfully to the cart!");
                    },
                    error: function(xhr, status, error) {
                        console.error(xhr);
                    }
                });
            });
        });
   </script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>