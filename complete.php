<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}



select {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
select.invalid {
  background-color: #ffdddd;
}



input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>
</head>
<body>
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
          background-size:auto;
          background-position: 50% -38.3664px;
        "
      >

<form id="regForm" method="post" action="updateprofile.php" enctype="multipart/form-data" autocomplete="off">
  <h1>Complete Profile</h1> <div class="form-group has-feedback">
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><b>Personal Information:</b>
	<!--	 <div class="login-box-body">  -->    
                                               
                                                    <form method='post' autocomplete="off">
                                                    <p>Phone Number</p>
                                                    <input type='number'  class="form-control" name='phone' id='mobile-num' placeholder ='Enter Your Phone Number' required>
                                                    <div id='remob'style="display:none;">
                                                    <p id ='reom' style='color:red'></p>
                                                    </div>
                                                    <div id='monotp' style="display:none;">
                                                    <p style='color:red'>Enter OTP</p>
                                                    <input type='number'  class="form-control"  id='mobile-num1' onkeyup='otpnum(this.value)' required>
                                                    <div >
                                                    <p id ='mptp' style='color:red'></p>
                                                    </div>
                                                    </div>
                                                    <p>Email</p>
                                                    <input type='email'  class="form-control" name='email'id='email-r' placeholder='Enter Your Email' required>
                                                    <div id='remob1'style="display:none;">
                                                    <p id ='reom1' style='color:red'></p>
                                                    </div>
                                                    <div id='emailotp' style="display:none">
                                                    <p style='color:red'>Enter OTP</p>
                                                    <input type='number'  class="form-control"  id='rmai-r1' onkeyup='otpnum1(this.value)' required>
                                                    <div >
                                                    <p id ='emailtp' style='color:red'></p>
                                                    </div>   
                                                </div>   
																																		
  <!--  <p><input placeholder="Full Name" oninput="this.className = ''" name="fullname"></p>
    <p><input placeholder="Username" oninput="this.className = ''" name="username"></p>
    <p><input type="email" placeholder="E-mail" oninput="this.className = ''" name="email"></p>
    <p><input type="text" placeholder="Mobile" name="mob"></p>
	<div style="overflow:auto;">
    <div style="float:right;">
 
	  -->
	  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	  
    </div>
  </div>
    </div>
  <div class="tab"><b>Business Profile:</b>
 <select name="category" >
  <p>
          <option>Select Category</option>
                            <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
			                     $sql = mysqli_query($conn, "SELECT category from data_item");
			                     while($row = mysqli_fetch_array($sql))
			                     {
			                     echo '<option value="'.$row['category'].'">'.$row['category'].'</option>';
			                     	}
	                   			 ?>
        </select>
</p>
 <p>
   <select name="sub">
          <option>Sub Category</option>
                            <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
			                     $sql = mysqli_query($conn, "SELECT sub_category from data_item");
			                     while($row = mysqli_fetch_array($sql))
			                     {
			                     echo '<option value="'.$row['sub_category'].'">'.$row['sub_category'].'</option>';
			                     	}
	                   			 ?>
        </select>
</p>

   <p>
		<select name="country">
          <option>Select Country</option>
                             <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
			                     $sql = mysqli_query($conn, "SELECT distinct country from data_item");
			                     while($row = mysqli_fetch_array($sql))
			                     {
			                     echo '<option value="'.$row['country'].'">'.$row['country'].'</option>';
			                     	}
	                   			 ?>
                ?>
        </select>
</p>
 <p>
    <select name="state">
          <option>Select State</option>
                            <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
			                     $sql = mysqli_query($conn, "SELECT distinct state from region");
                            while($row = mysqli_fetch_array($sql))
                             {
                             echo '<option value="'.$row['state'].'">'.$row['state'].'</option>';
                              }
                ?>
    </select>
</p>
<p>
		<select name="city">
          <option>Select City</option>
                             <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
			                     $sql = mysqli_query($conn, "SELECT distinct city from region");
			                     while($row = mysqli_fetch_array($sql))
			                     {
			                     echo '<option value="'.$row['city'].'">'.$row['city'].'</option>';
			                     	}
	                   			 ?>
                ?>
        </select>
</p>
<p>
		<select name="area">
          <option>Select Area</option>
                            <?php
							$conn =  mysqli_connect("localhost","root","","ask");
							if($conn->connect_error) {
								die("Connection Error : ".$conn->connect_error);
							}
							?>
								<?php 
                           $sql = mysqli_query($conn, "SELECT distinct area from region");
                            while($row = mysqli_fetch_array($sql))
                             {
                             echo '<option value="'.$row['area'].'">'.$row['area'].'</option>';
                              }
                ?>
        </select>
		</p>
		
    <p><input type="number" placeholder="Pincode" oninput="this.className = ''" name="pincode"></p>
	
    <p><input type="text" placeholder="Keyword" oninput="this.className = ''" name="keyword"></p>	
	<div style="overflow:auto;">
    <div style="float:right;">
 
	  <button type="button" id="nextBtn" onclick="nextPrev(-1)">Previous</button>
	  <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
	     
    </div>
  </div>
		
  </div>
  <div class="tab"><b>Business Info:</b>
    <p><input placeholder="Business Name" oninput="this.className = ''" name="bname"></p>
    <p><input placeholder="Business Ownwer Name" oninput="this.className = ''" name="bowner"></p>
	<p><input type="number" placeholder="Business Mobile Number" oninput="this.className = ''" name="bmobile"></p>
	  <p><input type="email" placeholder="Business Email ID" oninput="this.className = ''" name="bmail"></p>
<p><input placeholder="Opening Days" oninput="this.className = ''" name="days"></p>
	Opens At<input type="time"  placeholder="Opens At" oninput="this.className = ''" name="open" style="">
	Closes At<input type="time" placeholder="Closes At" oninput="this.className = ''" name="close"><p>
	<div style="overflow:auto;">
    <div style="float:right;">
 
	  <button type="button" id="nextBtn" onclick="nextPrev(-1)">Previous</button>
	 <button class="" type="submit" name="upload">Submit</button>
    </div>
  </div>
  
  </div>
  
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>
</div>
    <!--====== BACK TOP TOP PART ENDS ======-->
<input type="hidden" id='point'>
<input type="hidden" id='emailotps'>
<input type="hidden" id='userid' value="<?php echo $_SESSION['logged'] ?>">
<p id='sdf'></p>

<script>
//for otp button
<script>
$(document).ready(function(){
  $("#mobile-num").on("keyup", function(){
        var mobNum = $(this).val();
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if (filter.test(mobNum)) {
            if(mobNum.length==10){
                document.getElementById("monotp").style.display='block';
                var tempurl='https://gearvioshop.com';
       
      
   var params = "make="+mobNum;
   var url = tempurl+"/otpsend.php";
	jQuery.ajax({
			 type: 'POST',
			 url: url,
			 dataType: 'html',
			 data: params,
			 beforeSend: function() {
					   },
			 complete: function() {
			 },
			 success: function(html) {
                
                document.getElementById("point").value=html.trim();
                document.getElementById("remob").style.display='none';
				  
    }
    })
             } else {
                document.getElementById("remob").style.display='block';
                document.getElementById("reom").innerHTML='Please put 10  digit mobile number'; 
                return false;
              }
            }
            else {
                document.getElementById("remob").style.display='block';
                document.getElementById("reom").innerHTML='Not a valid number'; 
              return false;
           }
        });
        $("#email-r").on("keyup", function(){
        var mobNum = $(this).val();
        var filter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{3,4})+$/;   

          if (filter.test(mobNum)) {
                document.getElementById("emailotp").style.display='block';
                document.getElementById("remob1").style.display='none';
                var tempurl='https://gearvioshop.com';
       
      
       var params = "make="+mobNum;
       var url = tempurl+"/emailsend.php";
        jQuery.ajax({
                 type: 'POST',
                 url: url,
                 dataType: 'html',
                 data: params,
                 beforeSend: function() {
                           },
                 complete: function() {
                 },
                 success: function(html) {
                    
                    document.getElementById("emailotps").value =html.trim();
        }
        })
            
            }
            else {
                document.getElementById("remob1").style.display='block';
                document.getElementById("reom1").innerHTML='Not a valid Email'; 
              return false;           }
        });
    });
    function otpnum1(value){
            if(document.getElementById("emailotps").value!= value){
                document.getElementById("emailtp").innerHTML='Not a valid Email OTP'; 
                }
else {
    document.getElementById("emailtp").innerHTML=''; 
}
        
    }
    function otpnum(value){
            if(document.getElementById("point").value!= value){
                document.getElementById("mptp").innerHTML='Not a valid OTP'; 

} else {
    document.getElementById("mptp").innerHTML=''; 
}
        
    }
</script>

<script>
//for next and previous
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

</body>
</html>



