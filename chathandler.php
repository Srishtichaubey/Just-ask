<?php 
session_start();
    include("config.php");
    $result = array();
    $message = isset($_POST['message']) ? $_POST['message'] : null;
   $sender = $_POST['sender'];
    $receiver = $_POST['receiver'];
    $created = date('Y-m-d H:i:s');
    $action = $_POST['action'];
    
if($action == "Send") {
        if(!empty($message) && !empty($sender)) {
        $sql = "INSERT INTO chats (`message`, `senderId`, `receiverId`, `created`) VALUES 
                                  ('$message', '$sender', '$receiver', '$created')";
            $result['send_status'] = mysqli_query($con, $sql);
        }
    

    if($action == "Receive") {
        $start = $_POST['start'];
        $receiveQuery = "SELECT * FROM chats WHERE ((`senderId` = '".$sender."' AND `receiverId` = '".$receiver."')
        OR (`senderId` = '".$receiver."' AND `receiverId` = '".$sender."'))  AND `id` >'$start' ";
        $items = mysqli_query($con, $receiveQuery);
        while($row = mysqli_fetch_assoc($items)) {
            $result['items'][] = $row;
        }

    }

    header('Access-Control-Allow-Origin: *');
    header("Content-Type: application/json");

    echo json_encode($result);

?>