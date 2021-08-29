<?php
                   ob_start();
                  include('config.php');
                   $flag=1;
                    if($_POST['abc']=='seller')
                    {
                    $name=$_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $sql="SELECT * from seller where email='$email'";
                      $res=mysqli_query($conn,$sql);
                      if (mysqli_num_rows($res)>0) 
                      {
                        $flag=0;
                        $row = mysqli_fetch_assoc($res);
                        if($email==$row['email'])
                        {
                            echo "<div class='alert message-danger'>Email already Exists</div>";    
                        }
                      }
                    if($flag==1)
                    {
                       $query1 = mysqli_query($conn,"INSERT into seller (`name`,`email`,`password`)values('$name','$email','$password')");
                           echo("<script>window.location = 'index.php';</script>");
                    }
                    }
                  elseif ($_POST['abc']=='user') 
                  {
                    $name=$_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $sql="SELECT * from user where email='$email'";
                      $res=mysqli_query($conn,$sql);
                      if (mysqli_num_rows($res) > 0) 
                      {
                      $row = mysqli_fetch_assoc($res);
                      if($email==$row['email'])
                      {
                          echo "<div class='alert message-danger'>Email already Exists</div>";    
                      }
                      }
                       $query2 = mysqli_query($conn,"INSERT into user (`email`,`password`,`name`)values('".$email."','".$password."','".$name."')");
                       echo("<script>window.location = 'index.php';</script>");
                    } 
                ob_flush();
                    ?>