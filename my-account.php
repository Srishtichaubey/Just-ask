<?php session_start(); ?>

<?php include('config.php') ?>
<style>
.slick-slide
{
    display: none;
    float: left;
    height: 10% !important;
    min-height: 1px;
}
</style>   <!--====== Breadcrumb Part Start ======-->



    <!--====== Breadcrumb Part Ends ======-->

    <!--====== My Account Part Start ======-->

    <section class="my-account-area pt-10">
        <div class="container-fluid custom-container">
            <div class="row">
                
               
                        <div class="tab-pane fade" id="pills-address" role="tabpanel" aria-labelledby="pills-address-tab">
                            <div class="my-account-address account-wrapper">
                                <h4 class="account-title">Add New Address</h4>
                              <!---address tabs start here-->
                                        <div class="login-box-body">      
                                                <div class="form-group has-feedback">
                                                    <form method='post' action ="updatephp.php" autocomplete="off">
                                                    <p>Phone Number</p>
                                                    <input type='number'  class="form-control" name='phone' id='mobile-num' placeholder ='Enter Your Phone Number' required>
                                                    <div id='remob'style="display:none;">
                                                    <p id ='reom' style='color:red'></p>
                                                    </div>
                                                    <div id='monotp' style="display:none;">
                                                    <p style='color:red'>Enter OTP</p>
                                                    <input type='number'  class="form-control"  id='mobile-num1' onkeyup='otpnum(this.value)' required>
                                                    <div >
                                                    <p style='color:red'></p>
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
                                                    <br>
                                                    <input type='submit' class="main-btn main-btn-2" name='submit1' value='submit'>
                                                    </form>
                                                </div>
                                       
                                        </div>
                                       
                                
                                    </div>
                                <!---address tabs ends here-->
                        </div>
                      
                      </div>
                </div>
           
    </section>


<script>
$(document).ready(function(){
  $("#mobile-num").on("keyup", function(){
        var mobNum = $(this).val();
        var filter = /^\d*(?:\.\d{1,2})?$/;

          if (filter.test(mobNum)) {
            if(mobNum.length==10){
                document.getElementById("monotp").style.display='block';
             
       
      
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
</script>

</body>

</html>
