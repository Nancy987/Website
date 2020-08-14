<?php echo'<!DOCTYPE html>
<html lang="en">
    <head>
        <title>AAYE --> Sign-Up</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/owl.carousel.min.css">
        <link rel="stylesheet" href="css/owl.theme.default.min.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/aos.css">
        <link rel="stylesheet" href="css/ionicons.min.css">
        <link rel="stylesheet" href="css/flaticon.css">
        <link rel="stylesheet" href="css/icomoon.css">
        <link rel="stylesheet" href="css/style.css">
        <style>
        sup
        {
          font-size: 20px;
          color: red;
        }
        #ins
        {
            font-size: 15px;
        }
        #star
        { 
            font-size: 20px;
            color: red;
        }
        </style>		
    </head>
    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">'; ?>
        <?php 
        include '_navbar.php';
		echo'
        <section class="ftco-counter img ftco-section ftco-no-pt ftco-no-pb">
            <div class="container">
                <div class="row d-flex">
                    <div class="col-md-6 col-lg-5 d-flex">
                        <div class="img d-flex align-self-stretch align-items-center" style="background-image:url(images/bg_04.png); height:1050px; margin-top:120px;"></div>
                    </div>
                    <div class="col-md-6 col-lg-7 pl-lg-5 py-md-5">
                        <div class="py-md-5">`
                            <div class="row justify-content-start pb-3">
                                <div class="col-md-12 heading-section ftco-animate p-4 p-lg-5">
                                    <form action="_handleSignup.php" name="search" method="POST" enctype="multipart/form-data">    
                                        <div class="form-header my-4">
                                            <h2>Sign Up</h2>
                                            <p class="text-dark" id="ins">( Field marked with <span id="star">*</span> are mandatory to fill. )</p>
                                        </div>';?>
                                        <?php
		                                if(isset($_GET["message"]))
                                        {
											$msg=$_GET["message"];
											echo $msg;
										}
										?>
									
									    <?php
										echo'
										<div class="form-group">
                                            <span class="form-label">Name<sup class="sup_color">*</sup></span>
                                            <input class="form-control" type="text" id="username" name="username" placeholder="Enter Your Name" required> 
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Gender<sup class="sup_color">*</sup></span>
                                            <select class="form-control" id="user_gender" name="user_gender" required>
                                                <option label="&nbsp;" selected hidden></option>
                                                <option>Female</option>
                                                <option>Male</option>
                                                <option>Other</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Age<sup class="sup_color">*</sup></span>
                                            <input class="form-control" type="text" id="user_age" name="user_age" placeholder="Enter your Age" required>
                                        </div>
                                        <div class="form-group">
                                          <span class="form-label">Address<sup class="sup_color">*</sup></span>
                                          <textarea cols="30" rows="7" id="user_address" name="user_address" class="form-control" placeholder="Enter Your Address" required></textarea>
                                       </div>
                                        <div class="form-group">
                                            <span class="form-label">Area<sup class="sup_color">*</sup></span>
                                            <select class="form-control" id="user_area" name="user_area" required>
                                                <option value="" label="&nbsp;" selected hidden></option>
                                                <option>Rampura</option>
                                                <option>Pitampura</option>
                                                <option>Saraswati Vihar</option>
                                                <option>Rohini</option>
                                                <option>Maujpur</option>
                                                <option>Azadpur</option>
                                                <option>Kashmere Gate</option>
                                                <option>Laxmi Nagar</option>
                                                <option>Uttam Nagar</option>
                                                <option>Kirti Nagar</option>
                                            </select>
                                            <span class="select-arrow"></span>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Date Of Birth</span>
                                            <input class="form-control" id="dob" name="dob" type="date">
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Phone<sup class="sup_color">*</sup></span>
                                            <input class="form-control" type="tel" id="phone" name="phone" pattern="[0-9]{10}" placeholder="Enter your 10 digit Mobile number" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Password<sup class="sup_color">*</sup></span>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter your Password" required>
                                        </div>
                                        <div class="form-group">
                                            <span class="form-label">Confirm Password<sup class="sup_color">*</sup></span>
                                            <input class="form-control" type="password" id="c_password" name="c_password" placeholder="Confirm Password" required>
                                        </div>
                                        <div class="row pb-4">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <span class="form-label">Upload Your Photo</span>        
                                                <input class="form-control" type="file" id="user_photo_name" name="user_photo_name" accept="images/*">
                                            </div>
                                          </div>
                                       </div>
                                        <div class="form-group">
                                            <input type="submit" value="Sign Up" name="signup" class="btn btn-secondary py-3 px-4">
                                            <span class="form-label mx-2">Already a User?
                                                <a href="login.php" class="btn btn-secondary mx-2 py-3 px-4">Log In</a>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>';?>
      
<?php
   include '_footer.php';
   echo '<script src="js/jquery.min.js"></script>
         <script src="js/jquery-migrate-3.0.1.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.min.js"></script>
         <script src="js/jquery.easing.1.3.js"></script>
         <script src="js/jquery.waypoints.min.js"></script>
         <script src="js/jquery.stellar.min.js"></script>
         <script src="js/owl.carousel.min.js"></script>
         <script src="js/jquery.magnific-popup.min.js"></script>
         <script src="js/aos.js"></script>
         <script src="js/jquery.animateNumber.min.js"></script>
         <script src="js/scrollax.min.js"></script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
         <script src="js/google-map.js"></script>
         <script src="js/main.js"></script>
    </body>
 </html>';?>
