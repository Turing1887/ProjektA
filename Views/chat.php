<?php
	$return = $_POST;
    $function = $return["function"];
	printf($function);
    
    $log = array();
<<<<<<< HEAD
	// $return = $_POST;
=======

>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
    
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
        		 
<<<<<<< HEAD
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
			$message = $_POST['message'];
			//$message = htmlentities(strip_tags($_POST['message']));
			$nickname = $_POST['nickname'];
			//$nickname = htmlentities(strip_tags($_POST['nickname']));
          	$chatlog = fopen("chat-log.txt", "a", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          	fwrite($chatlog,$nickname . ":" . $message . PHP_EOL);
=======
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
			$return["json"] = json_encode($return);
			echo json_encode($return);					   	  
             break;
    	 
    	 case('send'):
			$message = $return['message'];
			//$message = htmlentities(strip_tags($_POST['message']));
			$nickname = $return['nickname'];
			
			//$nickname = htmlentities(strip_tags($_POST['nickname']));
          	$chatlog = fopen("chat-log.txt", "a", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
          	fwrite($chatlog , $nickname . ":" . $message . PHP_EOL);
		 	$return["json"] = json_encode($return);
			echo json_encode($return);		
>>>>>>> 398f9f6e464f6968241e4a6ad1834814f65cedc5
        	break;
    	
    }
    
    echo json_encode($log);

?>




