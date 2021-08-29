<?php
ob_start();
session_start();
include('config.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

                        $category=$_POST['category'];
                          $subcategory=$_POST['subcategory'];
                          $keyword=$_POST['keyword'];
                          $city=$_POST['city'];

}

    function writeEmail($email,$text2) {

    $address=$email;
 // Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);


    try {
        //Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
        $mail->isMail();                                            // Send using SMTP
        $mail->Host       = 'localhost';                    // Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = 'info@marketing90sec.com';                     // SMTP username
        $mail->Password   = 'Z8EbftRARKMy74#cT3*vuo23';                               // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('info@marketing90sec.com','Search Results');
        $mail->addAddress($email);     // Add a recipient
        $mail->addAddress($email);               // Name is optional
        $mail->addReplyTo('info@marketing90sec.com','info');

        // Content
        $mail->isHTML(false);                                  // Set email format to HTML
        $mail->Subject = 'Search Results';
        $mail->Body    = "Your Search Results are:\n\n".$text2;
        //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        //echo 'Message has been sent';
    } catch (Exception $e) {

    }
    }


if(isset($_SESSION['type']))
{
     $text="";
     $data="";
      $sql2="SELECT * FROM seller WHERE live_status='1' AND city LIKE '%$city%'AND subcategory LIKE '%$subcategory%' AND category LIKE '%$category%' ORDER BY PRICE";
	    $result2=mysqli_query($conn,$sql2);
	    $i=1;
	    $text_business="This user Viewed Your Business \nName: ".$_SESSION['name']."\nEmail: ".$_SESSION['email']."\nMob :".$_SESSION['mobile'];
      date_default_timezone_set('Asia/Kolkata');
      $s1=time();
      $s2=date("d-F-Y",$s1);
      $s3=date("h:i:s",$s1);
		while($row = mysqli_fetch_array($result2))
		{
		    $text.=$i.". ".$row['title']." ( ". $row['email'].", ". $row['mobile']." )\n";
        $data.=$i.". ".$row['title']." \t";
		    $i+=1;
		    writeEmail($row['email'],$text_business);
        $sql = "INSERT INTO `seller_lead`(`seller`,`user_viewed`,`email`,`mobile`,`date`,`time`) VALUES ('".$row['title']."','".$_SESSION['name']."','".$_SESSION['email']."','".$_SESSION['mobile']."','".$s2."','".$s3."')";
    		$result=mysqli_query($conn,$sql);
		}

        $sql1 = "INSERT INTO `user_lead`(`user`,`city`,`category`,`title`,`email`,`mobile`,`date`,`time`) VALUES ('".$_SESSION['name']."','".$_SESSION['search_city']."','".$_SESSION['search_category']."','".$data."','".$_SESSION['email']."','".$_SESSION['mobile']."','".$s2."','".$s3."')";
        $result=mysqli_query($conn,$sql1);
        $mobile = $_SESSION['mobile'];


        $mobile1='91'.$mobile;
         $message=$text;

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


    		$url = 'http://bhashsms.com/api/sendmsg.php?user=krishnaku&pass=123456&sender=KRISHN&phone='.$mobile.'&text='.$text.'&priority=ndnd&stype=normal';
    		$array = get_headers($url);

    		$string = $array[0];
    		if(strpos($string,"200")) {
    		} else {
    				/*echo '<script type="text/javascript">
				window.onload = function ()
				{ alert("text'.$mobile.'"); }
				</script>';*/
    		}

    	    writeEmail($_SESSION['email'],$text);

                       echo("<script>window.location = 'sr.php';</script>");

}
?>
