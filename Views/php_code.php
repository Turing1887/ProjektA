<?php
session_start();

$msg_array = file("chat-log.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$_SESSION['messages'] = $msg_array;



function roll_the_dice(){
  $rand[0] = mt_rand(1,6);
  $rand[1] = mt_rand(1,6);
  $rand[2] = mt_rand(1,6);

  echo "<p>$rand[0]</p>";
  echo "<p>$rand[1]</p>";
  echo "<p>$rand[2]</p>";

}

function validateMessage(){
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $message = $_REQUEST['msg-window'];
    $chatlog = fopen("chat-log.txt", "a", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    fwrite($chatlog,$message . PHP_EOL);
  }
}

if(isset($_POST['msg-send'])){
  validateMessage();
}

?>
