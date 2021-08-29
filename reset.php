<?php 
session_start();
  if(empty($_GET['email']) || empty($_GET['id']) || empty($_GET['type']) || empty($_GET['time']))
  {
  	session_unset();
  	session_destroy();
    header("Location:404error.php");
    die();
}
$email=$_GET['email'];
$id=base64_decode($_GET['id']);
$timer=$_GET['time'];
$type=base64_decode($_GET['type']);
date_default_timezone_set("Asia/Kolkata"); 
	$d = new DateTime(date('His'));
	$time = $d->format("His"); 
	
if(($time - $timer) > 3000)
{
     echo 'Link expired';
}
else{
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manufacturer World | Grow Your Business Here</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<style type="text/css">
	

.form-box {
  max-width: 500px;
  margin: auto;
  padding: 50px;
  background: #ffffff;
  border: 10px solid #f2f2f2;
}

h1, p {
  text-align: center;
}

input, textarea {
  width: 100%;
}
</style>
<body><br><br><br>
    <div class="row">
<div class="form-box ">
  <h1>Update Password</h1>
  <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
      <label for="name">Email</label>
      <input class="form-control"  type="email" name="email" value="<?php echo $email;?>"readonly>
    </div>
    <div class="form-group">
      <label for="name">New password</label>
      <input class="form-control"  type="password" name="password"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required >
    </div>
    <div class="form-group">
      <label for="name">Retype Password</label>
      <input class="form-control"  type="password" name="repwd"required >
    </div>
    <input class="btn btn-primary" type="submit" value="Submit" name="update" />
    <?php 
 	include('config.php');
 	if(isset($_POST['update']))
 	{
    $password=$_POST['password'];
    $repwd=$_POST['repwd'];
    if($password==$repwd)
    {
      if($type=='user')
      {
      $sql=mysqli_query($conn,"UPDATE user set password='$password' where email='$email'");
      if($sql==true)
      {
        echo '<script>location.href="loginsignup.php"</script>';
      }
      }
      else if($type=='seller')
      {
        $sql=mysqli_query($conn,"UPDATE seller set password='$password' where email='$email'");
      if($sql==true)
      {
        echo '<script>location.href="loginsignup.php"</script>';
      }
      }
    }
    else
    {
      echo 'Password does not match';
    }
    unset($_GET['email']);
    unset($_GET['id']);unset($_GET['type']);
    session_unset();
    session_destroy();
  }
 ?>

  </form>
</div>
</div>
</body>
</html>
<?php
}
?>
 