<?php if(session_id() == '' || !isset($_SESSION)){session_start();}
include('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="own.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <title>:: Just Ask | Best place to find your needs ::</title>

    <!--  Favicon -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- CSS -->
    <link rel="stylesheet" href="css/stylesheet.css" />
  <!-- CSS for view -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800&amp;display=swap"
      rel="stylesheet"
    />
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
              <!-- Main Navigation
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
        -->
         </div>
        <!---End main nav!----->           
    <div class="sign">
           <?php
            if(isset($_SESSION['email'])){
             ?>
                   <div class="right-side">
                        <div class="header-widget">
                          <a
                            href="userpro.php"
                            class="log-in-button sign-in"
                            ><i class="icon-line-awesome-user"></i>
                            <span>Profile</span></a
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
                            <option value="">Select Category</option>
                            
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
                            <option value="">Select Sub-Category</option>
                            
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
                            <option value="">Select City</option>
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
                            <option value="">Select Area</option>
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
                              <input type="radio" name="abc" value="user" onclick="hidereg()" style="height:30px; width:30px; float:left;">
                </div>
                <div class="col-md-2"><label >User</label>
                              </div>
                  <div class="col-md-2">
                            <input type="radio" name="abc" value="seller" onclick="hidereg()" style="height:30px; width:30px; padding-right:20px;  float:left;"checked>
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
            <form method="post" id="utf-register-account-form" action="check_otp.php" enctype="multipart/form-data">
              <div class="utf-no-border">  
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Name"
                  required
                />
              </div>
               <div class="form-group">
                        <input type="text" class="form-control" name="mobile" id='mobile-num'  onkeyup='otpnum(this.value)' placeholder="Mobile Number" maxlength="10"  required>
                        <div id='remob' style="display:none;">
                            <p id='reom' style='color:red'></p>
                        </div><div id ="otp2"></div>

                        <div id='monotp' style="display:none;">
                            <input type="number" class="form-control" id='mobotp'  onchange='otpM(this.value)' name="otp2"  placeholder="Mobile OTP" maxlength="4">
                            <div>
                                <p id='mptp' style='color:red'></p>
                            </div>
                        </div> 
                        
                        <input type='email' class="form-control" name='email' id='email-r'  onkeyup='otpnum1(this.value)' placeholder='Enter Your Email' required>
                        <div id='remob1' style="display:none;">
                            <p id='reom1' style='color:red'></p>
                        </div><div id ="otp1"></div>
                        
                        <div id='emailotp' style="display:none">
                            <input type='number' class="form-control" id='mailotp'  onchange='otpM1(this.value)' name="otp1" placeholder="Email OTP" maxlength="4">
                            <div>
                                <p id='emailtp' style='color:red'></p>
                            </div>
                        </div>
                         
                       </div>
        <div class="utf-no-border">
                <input
                  type="password"
                  name="password"
                  id="password-register"
                  placeholder="Password"
                  required
                />
              </div>
                    
     <div class="row">
                <div class="col-md-2">
                              <input type="radio" name="abc" value="User" onclick="hidereg()" style="height:30px; width:30px; float:left;"checked>
                </div>
                <div class="col-md-2"><label >User</label>
                              </div>
                  <div class="col-md-2">
                            <input type="radio" name="abc" value="Seller" onclick="hidereg()" style="height:30px; width:30px; padding-right:20px;  float:left;">
                            </div>  <div class="col-md-2"><label >Seller</label>
                            </div>
              </div><hr>
 <div class="row">
                <div class="col-md-2">
                              <input type="radio" name="xyz" value="Paid" style="height:30px; width:40px; float:left;">
                </div>
                <div class="col-md-2"><label >Paid</label>
                              </div>
                  <div class="col-md-2">
                            <input type="radio" name="xyz" value="Unpaid" style="height:30px; width:30px; padding-right:10px;  float:left;"checked>
                            </div>  <div class="col-md-2"><label >Unpaid</label>
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
           
          </div>
        </div>
      </div>
    </div>
    <!-- Sign In Popup / End -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<!-- Banner -->
      <div
        class="parallax"
        data-background="background2.jpg"
        data-color="#36383e"
        data-color-opacity="0.4"
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
      </div>

      <!-- Content -->
      <section
        class="fullwidth"
        data-background-color="#ffffff"
        style="background: rgb(255, 255, 255)"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>Most Featured Properties</span> Featured Properties
                </h3>
                <div class="utf-headline-display-inner-item">
                  Most Featured Properties
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>
            <div class="col-md-12">
              <div
                class="owl-carousel owl-theme"
                style="opacity: 1; display: block"
              >
                <div class="owl-wrapper-outer">
                  <div
                    class="owl-wrapper"
                    style="
                      width: 3750px;
                      left: 0px;
                      display: block;
                      transition: all 1000ms ease 0s;
                      transform: translate3d(0px, 0px, 0px);
                    "
                  >
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 2070px;
                                    left: 0px;
                                    display: block;
                                    transition: all 800ms ease 0s;
                                    transform: translate3d(-345px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 345px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 345px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 345px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls">
                                <div class="owl-pagination">
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page active">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$18,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-2.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-02.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$15,000/mo</span>
                              <h4>
                                <a href="single-property-page-2.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-03.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$22,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 1380px;
                                    left: 0px;
                                    display: block;
                                    transition: all 1000ms ease 0s;
                                    transform: translate3d(0px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 345px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 345px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                  <div class="owl-page active">
                                    <span></span>
                                  </div>
                                  <div class="owl-page">
                                    <span></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$25,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-05.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$14,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-controls clickable">
                  <div class="owl-pagination">
                    <div class="owl-page active"><span></span></div>
                    <div class="owl-page"><span></span></div>
                  </div>
                  <div class="owl-buttons">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- </div> -->
      </section>

      <section
        class="fullwidth"
        data-background-color="#fbfbfb"
        style="background: rgb(251, 251, 251)"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>Most Popular Sale Properties</span> For Sale Properties
                </h3>
                <div class="utf-headline-display-inner-item">
                  Most Popular Sale Properties
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
              <div
                class="owl-carousel owl-theme"
                style="opacity: 1; display: block"
              >
                <div class="owl-wrapper-outer">
                  <div
                    class="owl-wrapper"
                    style="
                      width: 3750px;
                      left: 0px;
                      display: block;
                      transition: all 1000ms ease 0s;
                      transform: translate3d(0px, 0px, 0px);
                    "
                  >
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 4182px;
                                    left: 0px;
                                    display: block;
                                    transition: all 800ms ease 0s;
                                    transform: translate3d(-697px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page active">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$22,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-2.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-02.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$18,000/mo</span>
                              <h4>
                                <a href="single-property-page-2.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-03.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$25,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 2788px;
                                    left: 0px;
                                    display: block;
                                    transition: all 800ms ease 0s;
                                    transform: translate3d(-697px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page active">
                                    <span class=""></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$16,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-05.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$14,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-controls clickable">
                  <div class="owl-pagination">
                    <div class="owl-page active"><span class=""></span></div>
                    <div class="owl-page"><span class=""></span></div>
                  </div>
                  <div class="owl-buttons">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section
        class="fullwidth"
        data-background-color="#ffffff"
        style="background: rgb(255, 255, 255)"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>Most Popular Rent Properties</span> For Rent Properties
                </h3>
                <div class="utf-headline-display-inner-item">
                  Most Popular Rent Properties
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>

            <!-- Carousel -->
            <div class="col-md-12">
              <div
                class="owl-carousel owl-theme"
                style="opacity: 1; display: block"
              >
                <div class="owl-wrapper-outer">
                  <div
                    class="owl-wrapper"
                    style="
                      width: 3750px;
                      left: 0px;
                      display: block;
                      transition: all 1000ms ease 0s;
                      transform: translate3d(0px, 0px, 0px);
                    "
                  >
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 4182px;
                                    left: 0px;
                                    display: block;
                                    transition: all 1000ms ease 0s;
                                    transform: translate3d(0px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-01.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                  <div class="owl-page active">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$22,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-2.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                            </div>
                            <img src="images/listing-02.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$19,000/mo</span>
                              <h4>
                                <a href="single-property-page-2.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="featured">Featured</span>
                              <span class="for-rent">For Rent</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-03.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$13,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                            </div>
                            <div
                              class="utf-listing-carousel-item owl-carousel owl-theme"
                              style="opacity: 1; display: block"
                            >
                              <div class="owl-wrapper-outer">
                                <div
                                  class="owl-wrapper"
                                  style="
                                    width: 2788px;
                                    left: 0px;
                                    display: block;
                                    transition: all 1000ms ease 0s;
                                    transform: translate3d(0px, 0px, 0px);
                                  "
                                >
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                  <div class="owl-item" style="width: 697px">
                                    <div>
                                      <img src="images/listing-04.jpg" alt="" />
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="owl-controls clickable">
                                <div class="owl-pagination">
                                  <div class="owl-page active">
                                    <span class=""></span>
                                  </div>
                                  <div class="owl-page">
                                    <span class=""></span>
                                  </div>
                                </div>
                                <div class="owl-buttons">
                                  <div class="owl-prev"></div>
                                  <div class="owl-next"></div>
                                </div>
                              </div>
                            </div>
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$12,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="icon-line-awesome-arrows"></i> Sq
                                Ft<span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="owl-item" style="width: 395px">
                      <div class="utf-carousel-item-area">
                        <div class="utf-listing-item">
                          <a
                            href="single-property-page-1.html"
                            class="utf-smt-listing-img-container"
                          >
                            <div class="utf-listing-badges-item">
                              <span class="for-sale">For Sale</span>
                            </div>
                            <div class="utf-listing-img-content-item">
                              <img
                                class="utf-user-picture"
                                src="images/user_1.jpg"
                                alt="user_1"
                              />
                              <span
                                class="like-icon with-tip"
                                data-tip-content="Bookmark"
                                ><div class="tip-content">Bookmark</div></span
                              >
                              <span
                                class="compare-button with-tip"
                                data-tip-content="Add to Compare"
                                ><div class="tip-content">
                                  Add to Compare
                                </div></span
                              >
                              <span
                                class="video-button with-tip"
                                data-tip-content="Video"
                                ><div class="tip-content">Video</div></span
                              >
                            </div>
                            <img src="images/listing-05.jpg" alt="" />
                          </a>
                          <div class="utf-listing-content">
                            <div class="utf-listing-title">
                              <span class="utf-listing-price">$22,000/mo</span>
                              <h4>
                                <a href="single-property-page-1.html"
                                  >Renovated Luxury Apartment</a
                                >
                              </h4>
                              <span class="utf-listing-address"
                                ><i
                                  class="icon-material-outline-location-on"
                                ></i>
                                2021 San Pedro, Los Angeles 90015</span
                              >
                            </div>
                            <ul class="utf-listing-features">
                              <li>
                                <i class="fa fa-bed"></i> Beds<span>3</span>
                              </li>
                              <li>
                                <i class="icon-feather-codepen"></i> Baths<span
                                  >2</span
                                >
                              </li>
                              <li>
                                <i class="fa fa-car"></i> Garages<span>2</span>
                              </li>
                              <li>
                                <i class="fa fa-arrows-alt"></i> Sq Ft
                                <span>1530</span>
                              </li>
                            </ul>
                            <div class="utf-listing-user-info">
                              <a href="agents-profile.html"
                                ><i class="icon-line-awesome-user"></i> John
                                Williams</a
                              >
                              <span>1 Days Ago</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="owl-controls clickable">
                  <div class="owl-pagination">
                    <div class="owl-page active"><span class=""></span></div>
                    <div class="owl-page"><span class=""></span></div>
                  </div>
                  <div class="owl-buttons">
                    <div class="owl-prev"></div>
                    <div class="owl-next"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Photo Section -->
      <div class="utf-photo-section-block">
        <div class="utf-photo-text-content white-font">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-md-12 col-sm-12">
                <h2>Download Browse Hundreds of Properti</h2>
                <p>
                  Lorem Ipsum is simply dummy text of printing and type setting
                  industry. Lorem Ipsum been industry standard dummy text ever
                  since, when an unknown printer took a galley of type and
                  scrambled it to make a type specimen book. It has survived not
                  only five centuries, but also the leap into electronic type
                  setting, remaining essentially unchanged. It was popularised.
                </p>
                <ul class="utf-download-text">
                  <li>
                    <a href="#" class="tooltip top">
                      <i class="icon-line-awesome-windows"></i>
                      <span>Windows</span>
                      <p>Available Now</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="tooltip top">
                      <i class="icon-line-awesome-apple"></i>
                      <span>App Store</span>
                      <p>Available Now</p>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="tooltip top">
                      <i class="icon-line-awesome-android"></i>
                      <span>Google Play</span>
                      <p>Get in On</p>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="download-img">
                  <img src="images/mockup3.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Photo Section / End -->

      <!-- Fullwidth Section -->
      <section
        class="fullwidth"
        data-background-color="#fbfbfb"
        style="background: rgb(251, 251, 251)"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>What are you looking for?</span> Properties In Most
                  Popular Places
                </h3>
                <div class="utf-headline-display-inner-item">
                  What are you looking for?
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container">
                  <i class="icon-line-awesome-building"></i>
                </div>
                <h3>Modern Villa</h3>
                <p>
                  Lorem Ipsum is simply dummy text the printing and type setting
                  industry Lorem Ipsum has been industry.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container">
                  <i class="icon-line-awesome-institution"></i>
                </div>
                <h3>Family House</h3>
                <p>
                  Lorem Ipsum is simply dummy text the printing and type setting
                  industry Lorem Ipsum has been industry.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container">
                  <i class="icon-material-outline-location-city"></i>
                </div>
                <h3>Town House</h3>
                <p>
                  Lorem Ipsum is simply dummy text the printing and type setting
                  industry Lorem Ipsum has been industry.
                </p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="utf-icon-box-item-area">
                <div class="icon-container">
                  <i class="icon-material-outline-business"></i>
                </div>
                <h3>Apartment</h3>
                <p>
                  Lorem Ipsum is simply dummy text the printing and type setting
                  industry Lorem Ipsum has been industry.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Start Section Callout -->
      <div class="jbm-section-callout">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-md-6 col-sm-6 col-xs-12 callout-bg-1 callout-section-left pos-relative"
            >
              <div class="callout-bg"></div>
              <div class="jbm-callout-in jbm-callout-in-padding pull-right">
                <div class="jbm-section-title margin-top-80 margin-bottom-80">
                  <h2>Find Your Browse Add Property</h2>
                  <span class="section-tit-line"></span>
                  <p>
                    Lorem Ipsum is simply dummy text of printing and type
                    setting industry. Lorem Ipsum been industry standard dummy
                    text ever since, when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has
                    survived not only five centuries.
                  </p>
                  <a href="add-new-property.html" class="button margin-top-10"
                    >Add New Property</a
                  >
                </div>
              </div>
            </div>
            <div
              class="col-md-6 col-sm-6 col-xs-12 callout-bg-2 callout-section-right pos-relative"
            >
              <div class="callout-bg"></div>
              <div class="jbm-callout-in jbm-callout-in-padding pull-left">
                <div class="jbm-section-title margin-bottom-80 margin-top-80">
                  <h2>Find Your Browse Properti</h2>
                  <span class="section-tit-line"></span>
                  <p>
                    Lorem Ipsum is simply dummy text of printing and type
                    setting industry. Lorem Ipsum been industry standard dummy
                    text ever since, when an unknown printer took a galley of
                    type and scrambled it to make a type specimen book. It has
                    survived not only five centuries.
                  </p>
                  <a
                    href="listings-list-with-sidebar.html"
                    class="button margin-top-10"
                    >Browse Properti</a
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Section Callout -->

      <section
        class="fullwidth"
        data-background-color="#ffffff"
        style="background: rgb(255, 255, 255)"
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>Most Popular Places</span> Most Popular Properties
                  Places
                </h3>
                <div class="utf-headline-display-inner-item">
                  Most Popular Places
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-01.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Afghanistan</h4>
                  <span>14 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-02.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Australia</h4>
                  <span>24 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-md-5 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-03.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Bangladesh</h4>
                  <span>12 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-md-5 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-04.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Miami</h4>
                  <span>9 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-md-4 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-05.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Belize</h4>
                  <span>14 Properties</span>
                </div>
              </a>
            </div>
            <div class="col-md-3 col-sm-6">
              <a href="listings-list-with-sidebar.html" class="img-box">
                <img src="images/popular-location-06.jpg" alt="" />
                <div class="utf-cat-img-box-content visible">
                  <h4>Cambodia</h4>
                  <span>24 Properties</span>
                </div>
              </a>
            </div>
          </div>
          <div class="utf-centered-button margin-top-10">
            <a href="all-categorie.html" class="button">View All Categories</a>
          </div>
        </div>
      </section>

      <!-- Fullwidth Section -->
      <section
        class="fullwidth"
        data-background-color="linear-gradient(to bottom,rgba(0,0,0,0.03) 0%,rgba(255,255,255,0))"
        style="
          background: linear-gradient(
            rgba(0, 0, 0, 0.03) 0%,
            rgba(255, 255, 255, 0)
          );
        "
      >
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                class="utf-section-headline-item centered margin-bottom-30 margin-top-0"
              >
                <h3 class="headline">
                  <span>Our Blog &amp; Articles</span> Latest Blog Post
                </h3>
                <div class="utf-headline-display-inner-item">
                  Our Blog &amp; Articles
                </div>
                <p class="utf-slogan-text">
                  Lorem Ipsum is simply dummy text printing and type setting
                  industry Lorem Ipsum been industry standard dummy text ever
                  since when unknown printer took a galley.
                </p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img">
                  <img src="images/blog-post-01.jpg" alt="" />
                </a>
                <div class="utf-post-content-area">
                  <h3>
                    <a href="blog_detail_right_sidebar.html"
                      >What It Really Takes to Make $100k Before You Turn 30</a
                    >
                  </h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2020</li>
                  </ul>
                  <p>
                    Lorem Ipsum is simply dummy text of printing industry Lorem
                    Ipsum been industry standard dummy text since book.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img">
                  <img src="images/blog-post-02.jpg" alt="" />
                </a>
                <div class="utf-post-content-area">
                  <h3>
                    <a href="blog_detail_right_sidebar.html"
                      >The Best Canadian Merchant Account Providers.</a
                    >
                  </h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2020</li>
                  </ul>
                  <p>
                    Lorem Ipsum is simply dummy text of printing industry Lorem
                    Ipsum been industry standard dummy text since book.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="blog-post">
                <a href="blog_detail_right_sidebar.html" class="post-img">
                  <img src="images/blog-post-03.jpg" alt="" />
                </a>
                <div class="utf-post-content-area">
                  <h3>
                    <a href="blog_detail_right_sidebar.html"
                      >Hey Job Seeker, It 19s Time To Get Up And Get Hired.</a
                    >
                  </h3>
                  <ul class="utf-blog-item-post-list">
                    <li>By, John Williams</li>
                    <li>20 Jan, 2020</li>
                  </ul>
                  <p>
                    Lorem Ipsum is simply dummy text of printing industry Lorem
                    Ipsum been industry standard dummy text since book.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    <script>
    //function to post mobile number
    function myfunmob(datavalue){
          $.ajax({

            url:'mobileotp.php',
            type:'POST',
            data:{datapost:datavalue},

            
            success:function(result){
                $('#otp2').html(result);
            }

        });
    } 
    //function to post email
        function myfunmail(datavalue){
          $.ajax({

            url:'emailotp.php',
            type:'POST',
            data:{datapost:datavalue},

            success:function(result){
                $('#otp1').html(result);
            }

        });
    }
      
    //function to post mobile otp
    function myfunotp(datavalue){
          $.ajax({

            url:'checkmobotp.php',
            type:'POST',
            data:{datapost:datavalue},

            
            success:function(result){
                $('#mptp').html(result);
            }

        });
    }
    //function to post email otp
        function myfunmotp(datavalue){
          $.ajax({

            url:'checkmailotp.php',
            type:'POST',
            data:{datapost:datavalue},

            success:function(result){
                $('#emailtp').html(result);
            }

        });
    }
    //mobile otp genration
        $(document).ready(function() {
            $("#mobile-num").on("keyup", function() {
                var mobNum = $(this).val();
                var filter = /^\d*(?:\.\d{1,2})?$/;

                if (filter.test(mobNum)) {
                    if (mobNum.length == 10) {
                        document.getElementById("monotp").style.display = 'block';
                      myfunmob(mobNum);
                    
                    } else {
                        document.getElementById("remob").style.display = 'block';
                        document.getElementById("reom").innerHTML = 'Please put 10  digit mobile number';
                        return false;
                    }
                } else {
                    document.getElementById("remob").style.display = 'block';
                    document.getElementById("reom").innerHTML = 'Not a valid number';
                    return false;
                }
            });
            
        });
   
           //email otp generation
            $("#email-r").on("keyup", function() {
                var mobNum = $(this).val();
                var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{3,4})+$/;

                if (filter.test(mobNum)) {
                    document.getElementById("emailotp").style.display = 'block';
                     myfunmail(mobNum);
                    document.getElementById("remob1").style.display = 'none';
                } else {
                    document.getElementById("remob1").style.display = 'block';
                    document.getElementById("reom1").innerHTML = 'Not a valid Email';
                    return false;
                }
            });
             //mobile otp confirmation
            $("#mobotp").on("change", function() {
                var otp2 = $(this).val();
                var filter = /^\d*(?:\.\d{1,2})?$/;
                if (filter.test(otp2)) {
                    if (otp2.length == 4) {
                        myfunotp(otp2);
                    } else {
                        document.getElementById("mptp").innerHTML = 'Please put 4 digit OTP';
                        return false;
                    }
                } 
                else {
                    document.getElementById("mptp").innerHTML = 'Not a valid OTP';
                    return false;
                }
            });
    //email otp confirmation
            $("#mailotp").on("change", function() {
                var otp1 = $(this).val();
                 var filter = /^\d*(?:\.\d{1,2})?$/;
                 if (filter.test(otp1)) {
                    if (otp1.length == 4) {
                        myfunmotp(otp1);
                    } else {
                        document.getElementById("emailtp").innerHTML = 'Please put 4 digit OTP';
                        return false;
                    }
                } 
                else {
                    document.getElementById("emailtp").innerHTML = 'Not a valid OTP';
                    return false;
                }
            });
    </script>
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

  <?php
  ob_flush();
  ?>
</html>
