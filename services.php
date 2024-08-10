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
      <title>Services</title>
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
      
      <!-- choose section start -->
      <div class="choose_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="choose_taital">OUR SERVICES</h1>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-6">
                     <a href="car_modification.php">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;" ><img src="images/icon_1.png"></div>
                        <h4 class="safety_text">CAR MODIFICATION</h4>
                        <p class="ipsum_text">"Alteration of vehicle's appearance or performance for customization and enhancement."</p>
                     </a>
                  </div>
                  <div class="col-sm-6">
                     <a href="car_modification.php">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;"><img src="images/icon_2.png"></div>
                        <h4 class="safety_text">CAR CUSTOMIZATION</h4>
                        <p class="ipsum_text">“Tailoring car features to personal preferences for unique individuality and performance.” </p>
                     </a>
                  </div>
               </div>
            </div>
            <div class="choose_section_2">
               <div class="row">
                  <div class="col-sm-6">
                     <a href="general_service.php">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;"><img src="images/icon_3.png"></div>
                        <h4 class="safety_text">GENERAL SERVICES</h4>
                        <p class="ipsum_text">“Routine maintenance and repairs to ensure optimal car performance and longevity”</p>
                     </a>
                  </div>
                  <div class="col-sm-6">
                     <a href="#Accessories">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;"><img src="images/icon_4.png"></div>
                        <h4 class="safety_text">ACCESSORIES</h4>
                        <p class="ipsum_text">“Supplementary enhancements and features, enhancing functionality, aesthetics, and overall performance for automotive excellence."</p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- gallery section start -->
      <div class="gallery_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="gallery_taital" id="Accessories" >Car Parts</h1>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Alloys/1.png"></div>
                        <h3 class="types_text">Alloys</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Alloys.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/chargings/1.png"></div>
                        <h3 class="types_text">chargings</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="chargings.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Discbrake/4.png"></div>
                        <h3 class="types_text">Discbrake</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Discbrake.php">View More</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Exhaust/1.png"></div>
                        <h3 class="types_text">Exhaust</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Exhaust.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Headlights/5.png"></div>
                        <h3 class="types_text">Headlights</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Headlights.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Interior/10.png"></div>
                        <h3 class="types_text" style="margin-top: 35%; " >Interior</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Interior.php">View More</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Seatcover/7.png"></div>
                        <h3 class="types_text">Seatcover</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Seatcover.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Soundsystem/2.png"></div>
                        <h3 class="types_text">Soundsystem</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Soundsystem.php">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Suspension/1.png"></div>
                        <h3 class="types_text">Suspension</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Suspension.php">View More</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="gallery_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/Tires/1.png"></div>
                        <h3 class="types_text">Tyres</h3>
                          <!-- <p class="looking_text">Start per day $4500</p> -->
                        <div class="read_bt"><a href="Tires.php">View More</a></div>
                     </div>
                  </div>
                  <!-- <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-2.png"></div>
                        <h3 class="types_text">Soundsystem</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">View More</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="gallery_box">
                        <div class="gallery_img"><img src="images/img-3.png"></div>
                        <h3 class="types_text">Suspension</h3>
                          <p class="looking_text">Start per day $4500</p>
                        <div class="read_bt"><a href="#">View More</a></div>
                     </div>
                  </div> -->
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
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>