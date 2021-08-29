<?php

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

if (isset($_POST["submit_otp"]))
{
	if ($_GET["type"]=="m94x"){
		if($_POST["otp"] == $_SESSION['mobile_otp'])
		{
			$sql = "UPDATE `seller_login` SET `mobile_verified` = 1 WHERE id = ".$_SESSION['user_id'];
			$result=mysqli_query($conn,$sql);
       echo '<script type="text/javascript">
  				window.onload = function ()
  				{ alert("Mobile verified !");
          window.location= "dashboard.php"; }
  				</script>';
		}
		else{
			echo '<script type="text/javascript">
				window.onload = function ()
				{ alert("Invalid OTP, Try Again !"); }
				</script>';
		}
	}
	if ($_GET["type"]=="e8v3"){
		if( $_POST["otp"] == $_SESSION['email_otp'])
		{
			$sql = "UPDATE `seller_login` SET `email_verified` = 1 WHERE id = ".$_SESSION['user_id'];
			$result=mysqli_query($conn,$sql);
      echo '<script type="text/javascript">
         window.onload = function ()
         { alert("Email verified !");
         window.location= "dashboard.php"; }
         </script>';

		}
		else{
			echo '<script type="text/javascript">
				window.onload = function ()
				{ alert("Invalid OTP, Try Again !"); }
				</script>';
		}
	}

}
else{
	if ($_GET["type"]=="m94x"){
    $query = "SELECT * FROM seller_login WHERE id = ".$_SESSION['user_id'];
		$result=mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($result);
    $mobile=$row['mobile'];
    $otp=$_SESSION['mobile_otp'];

    $mobile1='91'.$mobile;
     $message="Your otp is:-".$otp;

     $apiKey = urlencode('eIiXR5IoMC8-tSbRVe6OxoFACYhzuQ8JI0nH6EsRKT');
     $numbers = array($mobile1);
     $sender = urlencode('TXTLCL');
     $message = rawurlencode($message);
     $numbers = implode(',', $numbers);
     $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
     $ch = curl_init('https://api.textlocal.in/send/');
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     $response = curl_exec($ch);
     curl_close($ch);
     echo '<script type="text/javascript">
       window.onload = function ()
       { alert("OTP has been send to your Mobile !"); }
       </script>';

	}
	if ($_GET["type"]=="e8v3"){

	        $otp=$_SESSION['email_otp'];
    		$query = "SELECT * FROM seller_login WHERE id = ".$_SESSION['user_id'];
    		$result=mysqli_query($conn,$query);
    		$row = mysqli_fetch_assoc($result);
    		$email = $row["email"];

        $address=$email;

               // Instantiation and passing `true` enables exceptions
                  $mail = new PHPMailer(true);


                  try {
                      //Server settings
                      // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
                      $mail->isMail();                                            // Send using SMTP
                      $mail->Host       = 'localhost';                    // Set the SMTP server to send through
                      // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
                      $mail->Username   = 'admin@speakbazaar.com';                     // SMTP username
                      $mail->Password   = 'Z8EbftRARKMy74#cT3*vuo23';                               // SMTP password
                      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                      $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                      //Recipients
                      $mail->setFrom('admin@speakbazaar.com','OTP');
                      $mail->addAddress($email);     // Add a recipient
                      $mail->addAddress($email);               // Name is optional
                      $mail->addReplyTo('admin@speakbazaar.com','info');

                      // Content
                      $mail->isHTML(false);                                  // Set email format to HTML
                      $mail->Subject = 'OTP';
                      $mail->Body    = "Your OTP is ".$otp;
                      //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                      $mail->send();
                      echo '<script type="text/javascript">
                        window.onload = function ()
                        { alert("OTP has been send to your email !"); }
                        </script>';
                      //echo 'Message has been sent';
                  } catch (Exception $e) {
                   //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                  }

         // Instantiation and passing `true` enables exceptions

	}
}

?>
<?php
if(session_id() == '' || !isset($_SESSION)){session_start();}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <a href="index.html"><img src="logo.jpg" alt="" /></a>
              </div>
              <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
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
			  <!---End main nav!----->
              <div class="clearfix"></div>
            </div>
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
                    else{
                ?>
                      <div class="right-side">
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
          </div>
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
              <div class="clearfix"></div>
            </div>
         
          </div>
        </div>
      </header>  </div>
	<hr>

  <div class="row">
	<div class="col-md-12">
	   <div class="col-md-9 col-sm-6" style="float: right;">
        

                          <?php
                          require ('config.php');
                          $category=$_POST['category'];
                          $subcategory=$_POST['subcategory'];
                          $keyword=$_POST['keyword'];
                          $city=$_POST['city'];
                          $query = "SELECT * FROM seller WHERE category='$category' OR keyword='$keyword' OR subcategory='$subcategory' AND city='$city'";
                          $query_run = mysqli_query($conn,$query);
                          $check=mysqli_num_rows($query_run)>0;
                           if($check)
                           {
                            while($row=mysqli_fetch_array($query_run))
                            {
                              ?>
                          
                    <div class="card" style="height: 400px; width: 300px; float:left; margin-left: 18px; margin-bottom:18px;">
                       <img src="image/<?php echo $row['image'];?>"alt="image" height="200px" width="230px" item-align:"center">
                      <div class="card-body">
                        <h2 class="card-title"><?php echo $row['username'];?> </h2>
                        <p class="card-text"><?php echo $row['category'];?></p>
                        <p class="card-text"><?php echo $row['subcategory'];?></p>
                        <p class="card-text"><?php echo $row['keyword'];?></p>
                        <button class="danger" type="submit" name ="submit">Visit Seller</button>
                      </div>
                    </div>
          
      
                            <?php
                            }
                             }
                             else {
                              echo "No record found";
                             }
                            ?>
                               

    </div> 
	   <!-- Sidebar -->
          <div class="col-sm-3 col-md-3" style="float: left;">
            <div class="sidebar">

              <!-- Widget -->
              <div class="widget utf-sidebar-widget-item">
                <div class="utf-boxed-list-headline-item">
                  <h3>Filtors</h3>
                </div>
                <div class="row with-forms">
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <select
                      data-placeholder="Price"
                      class="utf-chosen-select-single-item"
                    >
                      <option>Price</option>
                      <option>For Sale</option>
                      <option>For Rent</option>
                    </select>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-6">
                    <select
                      data-placeholder="Color"
                      class="utf-chosen-select-single-item"
                    >
                      <option></option>
                      <option>Color</option>
                      <option>Houses</option>
                      <option>Commercial</option>
                      <option>Garages</option>
                      <option>Lots</option>
                    </select>
                  </div>
                </div>
                <!-- Row / End -->

                <!-- Row -->
                <div class="row with-forms">
                  <div class="col-md-6">
                    <select
                      data-placeholder="Brand"
                      class="utf-chosen-select-single-item"
                    >
                      <option label="blank"></option>
                      <option>Brand</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>

                  <div class="col-md-6">
                    <select
                      data-placeholder="filtor1"
                      class="utf-chosen-select-single-item"
                    >
                      <option label="blank"></option>
                      <option>Filtor1</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <!-- Row / End -->

                <!-- Row -->
                <div class="row with-forms">
                  <div class="col-md-12">
                    <select data-placeholder="All States" class="chosen-select">
                      <option>All States</option>
                      <option>Alabama</option>
                      <option>Alaska</option>
                      <option>Arizona</option>
                      <option>Arkansas</option>
                      <option>California</option>
                      <option>Colorado</option>
                      <option>Connecticut</option>
                      <option>Delaware</option>
                      <option>Florida</option>
                      <option>Georgia</option>
                    </select>
                  </div>
                </div>
                <!-- Row / End -->

                <!-- Row -->
                <div class="row with-forms">
                  <div class="col-md-12">
                    <select data-placeholder="All Cities" class="chosen-select">
                      <option>All Cities</option>
                      <option>New York</option>
                      <option>Los Angeles</option>
                      <option>Chicago</option>
                      <option>Brooklyn</option>
                      <option>Queens</option>
                      <option>Houston</option>
                      <option>Manhattan</option>
                    </select>
                  </div>
                </div>
                <!-- Row / End -->
			  <!-- Widget -->
              <div class="widget utf-sidebar-widget-item">
                <div class="agent-widget">
                  <div class="utf-boxed-list-headline-item">
                    <h3>Enquiry form </h3>
                  </div>
                  <input type="text" placeholder="Name" />
                  <input type="text" placeholder="Email" />
                  <input type="text" placeholder="Phone" />
                  <textarea>I'm interest in [ Listing Single ]</textarea>
                  <button class="button fullwidth margin-top-5">
                    Send Message
                  </button>
                </div>
              </div>
              <!-- Widget / End -->


               
                <!-- More Search Options -->
                
              <!-- Widget / End -->
              <!-- Widget -->
              <div class="widget utf-sidebar-widget-item">
                <div class="utf-boxed-list-headline-item">
                  <h3>Category</h3>
                  <div class="utf-sidebar-categorie">
                    <ul>
                      <li><a href="#">Goods</a></li>
                      <li><a href="#">Services</a></li>
                      <li>
                        <a href="#">Grocery</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Widget / End-->
<!-- Widget -->
              <div class="widget utf-sidebar-widget-item">
                <div class="utf-boxed-list-headline-item">
                  <h3>Social Sharing</h3>
                </div>
                <ul class="utf-social-icons rounded" >
                  <li>
                    <a href="#" class="fa fa-facebook" style="padding: 11px; background: #3B5998; color: white;"></a>
                  </li>
                  <li>
                    <a href="#" class="fa fa-twitter" style="padding: 11px; background: #55ACEE; color: white;"></a>
                  </li>
                  <li>
                    <a href="#" class="fa fa-instagram" style="padding: 11px; background: #bb0000; color: white;"></a>
                  </li>
                  <li>
                    <a href="#" class="fa fa-linkedin" style="padding: 11px; background: #007bb5; color: white;"></a>
                  </li>
                  
                </ul>
                <div class="clearfix"></div>
              </div>
              <!-- Widget / End-->
            </div>
          </div>
          <!-- Sidebar / End -->
              </div>
              </div> </div>
        <
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
            <form method="post" id="login-form">
              <div class="utf-no-border">
                <input
                  type="text"
                  name="emailaddress"
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
              <div class="checkbox margin-top-0">
                <input type="checkbox" id="two-step" />
                <label for="two-step"
                  ><span class="checkbox-icon"></span> Remember Me</label
                >
              </div>
              <a href="forgot_password.html" class="forgot-password"
                >Forgot Password?</a
              >
            </form>
            <button
              class="button full-width utf-button-sliding-icon ripple-effect"
              type="submit"
              form="login-form"
            >
              Log In <i class="icon-feather-chevrons-right"></i>
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

          <!-- Register -->
          <div
            class="utf-popup-tab-content-item"
            id="register"
            style="display: none"
          >
            <div class="utf-welcome-text-item">
              <h3>Create your Account!</h3>
            </div>
            <form method="post" id="utf-register-account-form">
              <div class="utf-no-border">
                <input
                  type="text"
                  name="name"
                  id="name"
                  placeholder="Name"
                  required=""
                />
              </div>
              <div class="utf-no-border">
                <input
                  type="text"
                  name="emailaddress-register"
                  id="emailaddress-register"
                  placeholder="Email Address"
                  required=""
                />
              </div>
                <div class="utf-no-border">
                <input
                  type="number"
                  name="OTP"
                  id="OTP"
                  placeholder="OTP"
                  required=""
                />
              </div>
              <div class="utf-no-border">
                <input
                  type="password"
                  name="password-register"
                  id="password-register"
                  placeholder="Password"
                  required=""
                />
              </div>
              <div class="utf-no-border">
                <input
                  type="password"
                  name="password-repeat-register"
                  id="password-repeat-register"
                  placeholder="Repeat Password"
                  required=""
                />
              </div>			  	
			<div class="col-md-12" style="float: left;" >
				
      <div class="radio col-md-6" name="user"style=" float: left;" >
			  	<label>User</label>
          <input type="radio" name="as" value="user">
              </div>
      <div class="radio col-md-6" name="seller" style="float: left;" >		
              <label>Seller</label>  
              <input type="radio" name="as" value="seller"> 
              </div>
			</div><br>
						 


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
