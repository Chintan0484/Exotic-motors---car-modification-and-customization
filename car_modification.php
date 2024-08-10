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
      <title>Contact</title>
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
      
<!-- Car service booking form start -->
<div class="contact_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="contact_taital">Car Customization & Modification</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="contact_section_2">
            <div class="row">
                <div class="col-md-12">
                    <div class="mail_section_1">
                        <form action="book_modification.php" method="POST" enctype="multipart/form-data">
                                <!-- Personal Information -->
                                <input type="text" class="mail_text" placeholder="Full Name" name="full_name" required>
                                <input type="email" class="mail_text" placeholder="Email" name="email" required>
                                <input type="text" class="mail_text" placeholder="Phone Number" name="phone_number" required>

                                <!-- Car Information -->
                                <input type="text" class="mail_text" placeholder="Car Make" name="car_make" required>
                                <input type="text" class="mail_text" placeholder="Car Model" name="car_model" required>
                                <input type="text" class="mail_text" placeholder="Year of Manufacture" name="year_of_manufacture" required>
                                <input type="text" class="mail_text" placeholder="License Plate Number" name="license_plate_number" required>

                                <!-- Modification Details -->
                                <input type="text" class="mail_text" placeholder="Desired Car Color" name="desired_car_color" required>
                                <select class="mail_text" name="skin_wrap_options" required>
                                    <option value="">Select Skin Wrap Option</option>
                                    <option value="matte">Matte</option>
                                    <option value="glossy">Glossy</option>
                                    <option value="satin">Satin</option>
                                </select>

                                <label>Additional Modifications (Check all that apply):</label>
                                <div>
                                    <input type="checkbox" name="additional_modifications[]" value="body_kits"> Body Kits
                                    <input type="checkbox" name="additional_modifications[]" value="spoilers"> Spoilers
                                    <input type="checkbox" name="additional_modifications[]" value="alloy_wheels"> Alloy Wheels
                                    <input type="checkbox" name="additional_modifications[]" value="window_tinting"> Window Tinting
                                    <input type="checkbox" name="additional_modifications[]" value="lighting_upgrades"> Lighting Upgrades
                                    <input type="checkbox" name="additional_modifications[]" value="performance_upgrades"> Performance Upgrades
                                    <input type="checkbox" name="additional_modifications[]" value="interior_customization"> Interior Customization
                                </div>

                                <!-- Upload Reference Images -->
                                <label>Upload Current Car Photo:</label>
                                <input type="file" class="mail_text" name="current_car_photo" required>

                                <label>Upload Desired Look Photo (Reference Image):</label>
                                <input type="file" class="mail_text" name="desired_look_photo" required>

                                <!-- Appointment Details -->
                                <input type="text" class="mail_text" placeholder="Preferred Service Date" name="preferred_service_date" required>
                                <input type="text" class="mail_text" placeholder="Preferred Service Time" name="preferred_service_time" required>

                                <textarea class="massage-bt" placeholder="Additional Notes/Requests" rows="5" id="comment" name="additional_notes" required></textarea>

                                <!-- Terms and Conditions -->
                                <label><input type="checkbox" name="terms_conditions" required> I agree to the terms and conditions</label>

                                <div class="send_bt"><input type="submit" value="Submit"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Car service booking form end -->
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