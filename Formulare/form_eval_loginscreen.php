<?php

	//$found = false;
	$file = fopen('user-file.txt','r');
	$username = $_POST['username'];
	$password = $_POST['password'];
	$file_array = file('user-file.txt');
	$array_length = count($file_array);
	$success = false;


	foreach ($file_array as $user) {
		$user_details = explode('|', $user);
		if ($user_details[0] == $username && $user_details[1] == $password) {
        $success = true;
        break;
    }
	}
	if($success == true){
		header("Location: ../HTML/view_spieleranzahl.html");
	}
	else{
		echo "err";
	}

/*
	while(!$found){
		$line = fgets($file);
		if($line == $username){
			$nextline = fgets($file);
			if($nextline == $password){
				fclose($file);
				$found = true;
				header('Location: ../HTML/PlayerCountScreen.html');
			}
			else if(feof($file)){
				fclose($file);
				echo "<p>Password is wrong</p>";
				$found = true;
			}
		}
		else if(feof($file)){
			fclose($file);
			echo "<p>Username is wrong</p>";
			$found = true;
		}
	}


	if($_POST["username"] =="admin"){
		if($_POST["password"]=="password"){
			header("Location: ../HTML/PlayerCountScreen.html");
		}
		else{
			echo 'Username or Password invalid';

		}

	}*/


?>



<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Err</title>
    </head>
    <body>

    </body>
</html>
