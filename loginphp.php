	<?php
  if(session_id() == '' || !isset($_SESSION)){session_start();}
                include('config.php');
                  $email = $_POST['email'];
                  $password = $_POST['password'];
                  $phoneno=0 ;
                  
                  $email = stripcslashes($email);
                  $password = stripcslashes($password);
                   $query_1 = mysqli_query($conn,"SELECT * from user where email='$email' AND password='$password'");
                   $query_2 = mysqli_query($conn,"SELECT * from seller where email='$email' AND password='$password'");
                  // $query_3 = mysqli_query($conn,"SELECT * from seller WHERE email='$email' and companyname!='' limit 1");
                  $row_1 = $query_1->fetch_assoc();
                  $row_2 = $query_2->fetch_assoc();                  
                  if($_POST['abc']=='User')
                  {
                  	if ($query_1->num_rows==1) 
                  	{
                  		$_SESSION["id"] = $row_1['id'];
                    	$_SESSION['type'] = "user";
                    	$_SESSION['loguser']="yes";
                    	$_SESSION['email']=$row_1['email'];
                      header("location:index.php");
                    	//header("refresh:0.5s; url=index.php");
                  	}
                  	else
                  	{
                    	echo '<div class="alert message-danger">Wrong Email or Password</div>';
                  	}
                  }
                  else if($_POST['abc']=='Seller')
                  {
                    if ($query_2->num_rows==1) 
                    {
                  		$_SESSION["id"] = $row_2['id'];
                  		$_SESSION["email"]=$row_2['email'];
                  		$_SESSION['logsel']="yes";
                    	$_SESSION['type'] = "seller";
                    	if($row_2==true)
                    	{
                    		$_SESSION["success"]="x";
                    		$_SESSION["category"]=$row_2['category'];
                       
                    		echo '<script>location.href="dashboard/index.php"</script>';
                    	}
                  	}
                  	else
                  	{
                    	echo '<div class="alert message-danger">Wrong Email or Password</div>';
                  	}
            }?>
            
            