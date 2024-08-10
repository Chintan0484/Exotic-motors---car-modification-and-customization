<?php
session_start();
include 'get_in_touch.php';
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
      
      <!-- banner section start --> 
      <div class="banner_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div id="banner_slider" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Repair <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">You'll find the best car Repair at our place at the best affordable prices just for you!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="services.php">Read More</a></div>
                                 <div class="contact_bt active"><a href="contact.php">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Services <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">You'll find the best car Services at our place at the best affordable prices just for you!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="services.php">Read More</a></div>
                                 <div class="contact_bt active"><a href="contact.php">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="banner_taital_main">
                              <h1 class="banner_taital">Car Parts <br><span style="color: #fe5b29;">For You</span></h1>
                              <p class="banner_text">You'll find the best car parts at our place at the best affordable prices just for you!</p>
                              <div class="btn_main">
                                 <div class="contact_bt"><a href="services.php">Read More</a></div>
                                 <div class="contact_bt active"><a href="contact.php">Contact Us</a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#banner_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                     </a>
                     <a class="carousel-control-next" href="#banner_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                     </a>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="banner_img"><img src="images/banner-img.png"></div>
               </div>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- about section start -->
      <div class="about_section layout_padding">
         <div class="container">
            <div class="about_section_2">
               <div class="row">
                  <div class="col-md-6"> 
                     <div class="image_iman"><img src="images/about-img.png" class="about_img"></div>
                  </div>
                  <div class="col-md-6"> 
                     <div class="about_taital_box">
                        <h1 class="about_taital">About <span style="color: #fe5b29;">Us</span></h1>
                        <p class="about_text">Welcome to Exotic Motors, where passion meets precision. At Exotic Motors, we are dedicated to providing our customers with the highest quality automotive services and an exceptional selection of luxury vehicles. Established with a commitment to excellence, our team of experienced professionals works tirelessly to ensure your vehicle receives the utmost care and attention. </p>
                        <div class="readmore_btn"><a href="about.php">Read More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- about section end -->
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
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                     </a>
                  </div>
                  <div class="col-sm-6">
                     <a href="car_modification.php">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;"><img src="images/icon_2.png"></div>
                        <h4 class="safety_text">CAR CUSTOMIZATION</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
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
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                     </a>
                  </div>
                  <div class="col-sm-6">
                     <a href="#Accessories">
                        <div class="icon_1" style="width: 100px;height: 100px;object-fit: cover;display: block;"><img src="images/icon_4.png"></div>
                        <h4 class="safety_text">ACCESSORIES</h4>
                        <p class="ipsum_text">variations of passages of Lorem Ipsum available, but the majority have </p>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- client section start -->
      <div class="client_section layout_padding">
         <div class="container">
            <div id="custom_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img1.png"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img2.png"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img1.png"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img2.png"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-12">
                           <h1 class="client_taital">What Says Customers</h1>
                        </div>
                     </div>
                     <div class="client_section_2">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img1.png"></div>
                                 <h3 class="moark_text">Hannery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                           <div class="col-md-6">
                              <div class="client_taital_box">
                                 <div class="client_img"><img src="images/client-img2.png"></div>
                                 <h3 class="moark_text">Channery</h3>
                                 <p class="client_text">It is a long established fact that a reader will be distracted by the readable content of a page</p>
                              </div>
                              <div class="quick_icon"><img src="images/quick-icon.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#custom_slider" role="button" data-slide="prev">
               <i class="fa fa-angle-left"></i>
               </a>
               <a class="carousel-control-next" href="#custom_slider" role="button" data-slide="next">
               <i class="fa fa-angle-right"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- client section end -->
      <!-- contact section start -->
      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Get In Touch</h1>
               </div>
            </div>
         </div>
         <div class="container">
            <div class="contact_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="mail_section_1">
                        <form action="" method="POST">
                           <input type="text" class="mail_text" placeholder="Name" name="name" required>
                           <input type="email" class="mail_text" placeholder="Email" name="email" required>
                           <input type="text" class="mail_text" placeholder="Phone Number" name="phone" required>
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="message" required></textarea>
                           <div class="send_bt"><input type="submit" value="Send"></div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- contact section end -->
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