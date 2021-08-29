<?php
    session_start();
    if (!isset($_SESSION['user'])) 
        header('location: index.php');
        
    include('config.php');
    $idm = $_SESSION['user'];

    if(!isset($_GET['username1']))
        echo "<script>history.go(-1)</script>";
    $receiver = $_GET['username1'];
    
    $r = "SELECT * FROM chats WHERE ((`senderId` = '".$_SESSION['user']."' AND `receiverId` = '".$receiver."')
        OR (`senderId` = '".$receiver."' AND `receiverId` = '".$_SESSION['user']."'))";
        $i = mysqli_query($con, $r);
        $n=mysqli_num_rows($i);
        if($n1>0){
         if($row1['message'] >0 ){
         }
        else{
    echo "<script>
alert('You have no messages left');
history.go(-1);
</script>";
            
        }
        }
        else{
          echo "<script>
alert('Wuf Wuf');
history.go(-1);
</script>";
        }
        }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chat</title>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="chat.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
  </head>
   <body>
       <script>
        var url = "chathandler.php",
            start = 0;
        var myId = <?php echo $idm ?>;
        var receiver = <?php echo $receiver ?>;
        load();
            
        $(document).ready(function() {
            $('form').submit(function(e) {
                console.log("Data posted")
                $.post(url, {
                    message: $('#message').val(),
                    action: "Send",
                     sender: myId,
                    receiver: receiver
                   
                });
                location.reload();
                $('#message').val('');
                return false;
            });
        });

        function load() {
            $.post(url, {
                action: "Receive",
                start: start,
                receiver: receiver,
                sender: myId
            }, function(result) {
                if (result.items) {
                    result.items.forEach(item => {
                        start = item.id;
                        $('#messages').append(renderMessage(item));
                    })
                };
                load();
            });
        }

        function renderMessage(item) {
            var sender = item.senderId == myId ? "You" : '<?php echo $ReceiverRow['name']; ;?>';
            var message = item.message;
            if(sender=="You")
            return `<div class="msg" style="margin-left: 87%"   ><p>${sender}</p>${message}</div><br>`;
            else
            return `<div class="msg"  ><p>${sender}</p>${message}</div><br>`;
        }
        </script>
     
<div class="marginlr">
  <div class="row">
    <div class="col-lg-3 col-sm-12">
      <div style="overflow:auto; height:680px;" class="white_bg">
          
          
            <h4 class="inline">Message Inbox</h4> <h5 class="floatr inline "><a class=" white" href="">New</a></h5>
        
  <hr>
   //for sidebar
          <?php 
          $que = "SELECT * from `chats` WHERE senderId ='" . $_SESSION['user_error()'] . "' OR receiverId='" . $_SESSION['user'] . "' order by id DESC ";
$result1 = mysqli_query($con, $que)or die($mysqli_error($con));
$ar=array();
foreach($result1 as $r){
    if($r['receiverId']==$_SESSION['user']){
        $p=$r['senderId'];
        
    }
    elseif($r['senderId']==$_SESSION['user']){
        $p=$r['receiverId'];
    }
    array_push($ar,$p);
   

}
 $rr=array_unique($ar);
foreach($rr as $a){
    $que1 = "SELECT * from `employee` WHERE id ='" . $a . "' ";
$result3 = mysqli_query($con, $que1)or die($mysqli_error($con));
$row4 = mysqli_fetch_array($result3);
if($a!=0){
?>

          <!--for 1st man start-->
          <a href="chat.php?hr=<?php echo $a;?>">
         <div class="padding-20">
        <img class="img" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="user img">
        <div  class="side_content">
         <h5 class="inline white"><?php echo $row4['name'];?></h5><h6 class="inline floatr white">20 Feb</h6><br>
         <?php 
         
         $t=mysqli_num_rows(mysqli_query($con, "SELECT * FROM chats WHERE `receiverId` ='" . $_SESSION['user'] . "' and senderId='$a' and `seen` ='0'"));
         if($t!=0){
         ?>
         <span style="float:right;margin-top:30px;margin-right:-50px;" class="badge"><?php echo $t; ?></span>
         <?php }
         ?>
         <p>...</p>
        </div>
      </div></a> <hr>
      <!--for 1st man end -->
      <?php }
      
      }?>
      
      
      
      </div>
    </div>



<!--  Start Change vala area -->
<div class="col-lg-9 col-sm-12">


  <body style="height:100%; width:100%">
    <div id="header" style="border-bottom: 3px solid grey; top:0px; left:0px; height:100px; right:0px;overflow:hidden;">
        <img src="https://uybor.uz/borless/uybor/img/user-images/user_no_photo_600x600.png" alt="" class="user_profile" >
        <h2 class="white inline"><?php echo $ReceiverRow['name']; ?></h2>
    </div>
    <div id="content" style=" top:100px; bottom:160px; height:500px; left:0px; right:0px; overflow:auto;display: flex;flex-direction: column-reverse;">
        
     <div class="user1" id="messages">
       
     </div><br>
      </div>
    <div id="footer" style=" bottom:100px; height:60px; left:0px; right:0px; overflow:hidden;">
      <form>
<div class="margin-l">
  <input class="btn btn-success" type="submit" value="Send" style="float: right" />
  <div style="overflow: hidden; padding-right: .5em; ">
     <input class="font" placeholder="Type a message" id="message" type="text" style="width: 100%;" />
  </div>
</div>

      </form>
      <?php $que14 = "UPDATE `chats` SET seen=1 WHERE  senderId='" . $_GET['username1'] . "' AND `receiverId` ='" . $_SESSION['user'] . "'  ";
$result34 = mysqli_query($con, $que14)or die($mysqli_error($con));
?>
    </div>
  </body>

</div>



<!--  End of Change vala area -->
  </div>
</div>





<!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>