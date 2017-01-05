<?php
	$return = $_POST;
  $function = $return["function"];

  $log = array();

  switch($function) {

  	 case('getState'):
      	 if(file_exists('chat-log.txt')){
             $lines = file('chat-log.txt');
      	 }
           $log['state'] = count($lines);
      	 break;

  	 case('update'):
      	$state = $_POST['state'];
      	if(file_exists('chat-log.txt')){
      	   $lines = file('chat-log.txt');
      	 }
      	 $count =  count($lines);
      	 if($state == $count){
      		 $log['state'] = $state;
      		 $log['text'] = false;
				  }
				else{
					$text= array();
					$log['state'] = $state + count($lines) - $state;
					foreach ($lines as $line_num => $line)
					{
						if($line_num >= $state){
						$text[] =  $line = str_replace("\n", "", $line);
						}

					}
					$log['text'] = $text;
				}

        break;

  	 case('send'):
			$message = $return['message'];
			$nickname = $return['nickname'];
	  	$chatlog = fopen("chat-log.txt", "a", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
	  	fwrite($chatlog , $nickname . ":" . $message . PHP_EOL);

	  	break;

  }
  echo json_encode($log);

?>
