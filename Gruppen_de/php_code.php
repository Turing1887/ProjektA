<?php
session_start();

$msg_array = file("chat-log.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$_SESSION['messages'] = $msg_array;

include ('view_gameboard.html');


function roll_the_dice(){
  $rand1 = mt_rand(1,6);
  $rand2 = mt_rand(1,6);
  $rand3 = mt_rand(1,6);

  echo "<section><p>$rand1</p>";
  echo "<p>$rand2</p>";
  echo "<p>$rand3</p></section>";

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
