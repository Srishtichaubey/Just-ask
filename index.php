
<?php
include('config.php');
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="own.css">
   
    <title>:: Just Ask | Best place to find your needs ::</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css" />
  <!-- CSS for view -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
   
    <!--Loader-->
    <div class="vfx-loader">
      <div class="loader-wrapper">
        <div class="loader-content">
          <div class="loader-dot dot-1"></div>
          <div class="loader-dot dot-2"></div>
          <div class="loader-dot dot-3"></div>
          <div class="loader-dot dot-4"></div>
          <div class="loader-dot dot-5"></div>
          <div class="loader-dot dot-6"></div>
          <div class="loader-dot dot-7"></div>
          <div class="loader-dot dot-8"></div>
          <div class="loader-dot dot-center"></div>
        </div>
      </div>
    </div>
    <!-- Loader end -->

    <!-- Wrapper -->
    <div id="wrapper" class="mm-page mm-slideout"><!-- Header Container -->
      <header id="header-container" class="fullwidth">
        <!-- Header -->
        <div id="header">
          <div class="container">
            <div class="left-side">
              <div id="logo">
                <a href="index.php"><img src="logo.jpg" alt="" /></a>
              </div>
              <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                <!-- <span class="hamburger-inner"></span>-->
                  </span>
                </button>
              </div>
              <!-- Main Navigation -->
              <nav id="navigation" class="style-1">
                <ul id="responsive">
                  <li>
                    <a class="current" href="#">Home</a>
                  </li>
                  <li>
                    <a href="#">Login</a>
                    <ul>
                      <li>
                        <a href="userlogin.php">User login</a>
                      </li>
                      <li>
                            <a href="Sellerlogin.php"
                              >Seller login</a
                            >
                          </li>
            <li>
                            <a href="adminlogin.php"
                              >Admin login</a
                            >
                          </li>
                    </ul>
                  </li>
           <li>
                    <a href="signup.php">Signup</a>
                    <ul>
                      <li>
                        <a href="#">As seller</a>
                      </li>
                      
                       <li>
             <a href="agency-list.html">As User</a>
           </li>
                     
                    </ul>
                  </li>
                  <li>
                    <a href="#">Your Profile</a>
                    <ul>
                      <li><a href="my-profile.html">View Profile</a></li>
            <li>
                        <a href="change-password.html">Change Password</a>
                      </li>
           
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
			 
			   </div>
        <!---End main nav!----->           
		<div class="sign">
           <?php
            if(isset($_SESSION['email'])){
             ?>
                   <div class="right-side">
                        <div class="header-widget">
                          <a
                            href="logout.php"
                            class="log-in-button sign-in"
                            ><i class="icon-line-awesome-user"></i>
                            <span>Logout</span></a
                          >                         
                        </div>
                      </div>
                <?php
                  } 
                    else
                    {
                ?>
				
                      <div class="right-side" >
                        <div class="header-widget">
                          <a
                            href="#utf-signin-dialog-block"
                            class="popup-with-zoom-anim log-in-button sign-in"
                            ><i class="icon-line-awesome-user"></i>
                            <span>Sign In</span></a
                          >                         
                        </div>
                      </div>
                  <?php
                  }?>
       
        
		</div></div>
		 </div>
        <div id="header" class="cloned unsticky">
          <div class="container">
            <div class="left-side">
              <div id="logo">
                <a href="index.php"><img src="images/logo.png" alt="" /></a>
              </div>
              <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button>
              </div>
               <nav id="navigation" class="style-1">
                <ul id="responsive">
                  <li>
                    <a class="current" href="#" ><font style="size:23px;">Home</font></a>
                  </li>
                  <li>
                    <a href="#">Login</a>
                    <ul>
                      <li>
                        <a href="userlogin.php">User login</a>
                      </li>
                      <li>
                            <a href="Sellerlogin.php"
                              >Seller login</a
                            >
                          </li>
            <li>
                            <a href="adminlogin.php"
                              >Admin login</a
                            >
                          </li>
                    </ul>
                  </li>
           <li>
                    <a href="signup.php">Signup</a>
                    <ul>
                      <li>
                        <a href="#">As seller</a>
                      </li>
                      
                       <li>
             <a href="agency-list.html">As User</a>
           </li>
                     
                    </ul>
                  </li>
                  <li>
                    <a href="#">Your Profile</a>
                    <ul>
                      <li><a href="my-profile.html">View Profile</a></li>
            <li>
                        <a href="change-password.html">Change Password</a>
                      </li>
           
                    </ul>
                  </li>
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav>
              <div class="clearfix"></div>
            </div>
         
          </div>
        </div>
      </header>  </div>

              </div>
              </div> </div>
         <div
        class="parallax"
        data-background="background2.jpg"
        data-color="#36383e"
        data-color-opacity="0.5"
        data-img-width="2500"
        data-img-height="1600"
        style="
          background-image: url('background2.jpg');
          background-attachment: fixed;
          background-size: 1196.88px 766px;
          background-position: 50% -38.3664px;
        "
      >
        <div
          class="parallax-overlay"
          style="background-color: rgb(54, 56, 62); opacity: 0.72"
        ></div>
        <div class="utf-parallax-content-area">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="utf-main-search-container-area">
                  <div class="utf-banner-headline-text-part">
                    <h2>
                      Best Place To Buy
                      <span class="typed-words">Goods</span
                      ><span class="typed-cursor typed-cursor--blink">|</span>
                    </h2>
                    <span
                      >From the seller all over the country.</span
                    >
                  </div>
                 <form action="sr.php" method = "post" enctype="multipart/form-data">
        
                    <div class="utf-search-type-block-area">
                      <div class="search-type">
                      
                      </div>
                    </div>
                    <div class="utf-main-search-box-area">
                      <div class="row with-forms">
                        <div class="col-md-2 col-sm-12">
                          <input
                            type="text"
                            placeholder="Enter Keyword..."
                            value=""
                            name="keyword"
                          />
                        </div>
                        <div class="col-md-2 col-sm-6">
                          <select
                            data-placeholder="Select Category"
                            title="Select Category"
                            name="category"
                          >
                            <option>Select Category</option>
                           
		                    							<?php 
			                     						 $sql = mysqli_query($conn, "SELECT distinct category from data_item");
			                     						 while($row = mysqli_fetch_array($sql))
			                     						 {
			                     						 echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
			                      							}
	                   									 ?>
                          </select>
                        </div>
						   <div class="col-md-2 col-sm-6">
                          <select
                            data-placeholder="Select Sub-Category"
                            title="Select Sub-Category"
                            name="subcategory"
                          >
                            <option>Select Sub-Category</option>
		                    							<?php 
			                     						 $sql = mysqli_query($conn, "SELECT distinct sub_category from data_item");
			                     						 while($row = mysqli_fetch_array($sql))
			                     						 {
			                     						 echo '<option value="'.$row['sub_category'].'">'.$row['sub_category'].'</option>';
			                      							}
	                   									 ?>
                          </select>
                        </div>
                        <div class="col-md-2 col-sm-6">
                          <select
                            data-placeholder="Select City"
                            title="Select City"
                            name="city"
                          >
                            <option>Select City</option>
                            <?php 
	                     							 $sql = mysqli_query($conn, "SELECT distinct city from region");
	                      							while($row = mysqli_fetch_array($sql))
	                      							{
	                      							echo '<option value="'.$row['city'].'">'.$row['city'].'</option>';
	                      							}
	                    								?>
                          </select>
						  
                        </div>
                        <div class="col-md-2 col-sm-6" >
						 <select
                            data-placeholder="Select Area"
                            title="Select Area"
							float="left"
                          >
                            <option>Select Area</option>
                               <?php 
	                     							 $sql = mysqli_query($conn, "SELECT distinct area from region");
	                      							while($row = mysqli_fetch_array($sql))
	                      							{
	                      							echo '<option value="'.$row['area'].'">'.$row['area'].'</option>';
	                      							}
	                    								?>
                          </select>
						  </div>
						     <div class="col-md-2 col-sm-6" >
                          <button class="button utf-search-btn-item" style="float:right">
                            <i class="fa fa-search"></i> Search
                          </button>
                        </div>
						</div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
    <!-- Sign In Popup -->
    <div
      id="utf-signin-dialog-block"
      class="zoom-anim-dialog mfp-hide dialog-with-tabs"
    >
      <div class="utf-signin-form-part">
        <ul class="utf-popup-tabs-nav-item">
          <li class="active"><a href="#login">Log In</a></li>
          <li><a href="#register">Register</a></li>
        </ul>
        <div class="utf-popup-container-part-tabs">
          <!-- Login -->
          <div
            class="utf-popup-tab-content-item"
            id="login"
            style="display: inline-block"
          >
            <div class="utf-welcome-text-item">
              <h3>Welcome Back! Sign in to Continue</h3>
              <span
                >Don't Have an Account?
                <a href="#" class="register-tab">Sign Up!</a></span
              >
            </div>
            <form method="post" id="login-form" action="loginphp.php" enctype="multipart/form-data">
              <div class="utf-no-border">
                <input
                  type="text"
                  name="email"
                  id="emailaddress"
                  placeholder="Email Address"
                  required=""
                />
              </div>
              <div class="utf-no-border">
                <input
                  type="password"
                  name="password"
                  id="password"
                  placeholder="Password"
                  required=""
                />
              </div>
              <div class="row">
                <div class="col-md-2">
                              <input type="radio" name="abc" value="User" onclick="hidereg()" style="height:30px; width:30px; float:left;">
                </div>
                <div class="col-md-2"><label >User</label>
                              </div>
                  <div class="col-md-2">
                            <input type="radio" name="abc" value="Seller" onclick="hidereg()" style="height:30px; width:30px; padding-right:20px;  float:left;"checked>
                            </div>  <div class="col-md-2"><label >Seller</label>
                            </div>
              </div><hr>
              <div class="checkbox margin-top-0">
                <input type="checkbox" id="two-step" />
                <label for="two-step"
                  ><span class="checkbox-icon"></span> Remember Me</label
                >
              </div>
              <a href="forgot_password.html" class="forgot-password"
                >Forgot Password?</a
              >
              <button
              class="button full-width utf-button-sliding-icon ripple-effect"
              type="submit"
              form="login-form"
            >
              Log In <i class="icon-feather-chevrons-right"></i>
            </button>
            </form>
            
            <div class="utf-social-login-separator-item"><span>or</span></div>
            <div class="utf-social-login-buttons-block">
              <button class="facebook-login ripple-effect">
                <i class="icon-brand-facebook-f"></i> Facebook
              </button>
              <button class="google-login ripple-effect">
                <i class="icon-brand-google-plus-g"></i> Google+
              </button>
              <button class="twitter-login ripple-effect">
                <i class="icon-brand-twitter"></i> Twitter
              </button>
            </div>
          </div>

          <!-- Register -->
          <div
            class="utf-popup-tab-content-item"
            id="register"
            style="display: none"
          >
            <div class="utf-welcome-text-item">
              <h3>Create your Account!</h3>
            </div>
            <form method="post" id="utf-register-account-form" action="registerphp.php">
              <div class="utf-no-border">
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Name"
                  required
                />
              </div>
              <div class="utf-no-border">
                <input
                  type="text"
                  name="email"
                  id="emailaddress-register"
                  placeholder="Email Address"
                  required
                />
              </div>
			  <div class="utf-no-border">
                <input
                  type="password"
                  name="password-register"
                  id="password-register"
                  placeholder="Password"
                  required
                />
              </div>
                    
     <div class="row">
                <div class="col-md-2">
                              <input type="radio" name="abc" value="User" onclick="hidereg()" style="height:30px; width:30px; float:left;">
                </div>
                <div class="col-md-2"><label >User</label>
                              </div>
                  <div class="col-md-2">
                            <input type="radio" name="abc" value="Seller" onclick="hidereg()" style="height:30px; width:30px; padding-right:20px;  float:left;"checked>
                            </div>  <div class="col-md-2"><label >Seller</label>
                            </div>
              </div><hr>

              <div class="checkbox margin-top-0 col-md-12" style="float: left;">
                <input type="checkbox" id="two-step0" />
                <label for="two-step0"
                  ><span class="checkbox-icon"></span> By Registering You
                  Confirm That You Accept
                  <a href="#">Terms &amp; Conditions</a> and
                  <a href="#">Privacy Policy</a></label
                >
              </div>
            </form>
            <button
              class="margin-top-10 button full-width utf-button-sliding-icon ripple-effect"
              type="submit"
              form="utf-register-account-form"
            >
              Register <i class="icon-feather-chevrons-right"></i>
            </button>
            <div class="utf-social-login-separator-item"><span>or</span></div>
            <div class="utf-social-login-buttons-block">
              <button class="facebook-login ripple-effect">
                <i class="icon-brand-facebook-f"></i> Facebook
              </button>
              <button class="google-login ripple-effect">
                <i class="icon-brand-google-plus-g"></i> Google+
              </button>
              <button class="twitter-login ripple-effect">
                <i class="icon-brand-twitter"></i> Twitter
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sign In Popup / End -->
 <!-- Footer -->
      <div id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12 col-xs-12">
              <a href="index.html"
                ><img class="footer-logo" src="logo.jpg" alt="logo"
              /></a>
              <p>
                Lorem Ipsum is simply dummy text of printing and type setting
                industry. Lorem Ipsum been industry standard dummy text ever
                since, when unknown printer took a galley type scrambled.
              </p>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>Useful Links</h4>
              <ul class="utf-footer-links-item">
                <li><a href="index.html">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Properties</a></li>
                <li><a href="#">Contact us</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>My Account</h4>
              <ul class="utf-footer-links-item">
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">My Profile</a></li>
                <li><a href="#">My orders</a></li>
                <li><a href="#">My Listing</a></li>
                <li><a href="#">Favorites</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>Resources</h4>
              <ul class="utf-footer-links-item">
                <li><a href="#">Support</a></li>
                <li><a href="#">How It Work</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Term &amp; Condition</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6">
              <h4>Pages</h4>
              <ul class="utf-footer-links-item">
                <li><a href="#">Our Partners</a></li>
                <li><a href="#">How It Work</a></li>
                <li><a href="#">FAQ Page</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Term &amp; Condition</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="copyrights">
                Copyright © 2020 All Rights Reserved.
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="backtotop" style="display: none"><a href="#"></a></div>
    </div>
    <!-- Scripts -->
    <script src="scripts/jquery-3.3.1.min.js"></script>
    <script src="scripts/chosen.min.js"></script>
    <script src="scripts/magnific-popup.min.js"></script>
    <script src="scripts/owl.carousel.min.js"></script>
    <script src="scripts/rangeSlider.js"></script>
    <script src="scripts/sticky-kit.min.js"></script>
    <script src="scripts/slick.min.js"></script>
    <script src="scripts/masonry.min.js"></script>
    <script src="scripts/mmenu.min.js"></script>
    <script src="scripts/tooltips.min.js"></script>
    <script src="scripts/typed.js"></script>
    <script src="scripts/custom_jquery.js"></script>

    <script>
      var typed = new Typed(".typed-words", {
        strings: [
          " Services",
          " Products",
          " Offers",
        ],
        typeSpeed: 80,
        backSpeed: 80,
        backDelay: 4000,
        startDelay: 1000,
        loop: true,
        showCursor: true,
      });
    </script>
    <style type="text/css" data-typed-js-css="true">
      .typed-cursor {
        opacity: 1;
      }
      .typed-cursor.typed-cursor--blink {
        animation: typedjsBlink 0.7s infinite;
        -webkit-animation: typedjsBlink 0.7s infinite;
        animation: typedjsBlink 0.7s infinite;
      }
      @keyframes typedjsBlink {
        50% {
          opacity: 0;
        }
      }
      @-webkit-keyframes typedjsBlink {
        0% {
          opacity: 1;
        }
        50% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }
    </style>
    <div id="mm-blocker" class="mm-slideout"></div>
  </body>
  <div id="tiptip_holder" style="max-width: 200px">
    <div id="tiptip_arrow"><div id="tiptip_arrow_inner"></div></div>
    <div id="tiptip_content"></div>
  </div>
</html>
