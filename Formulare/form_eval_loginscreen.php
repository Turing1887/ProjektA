<?php 

	if($_POST["username"] =="admin"){
		if($_POST["password"]=="password"){
			
			
			header("Location: PlayerCountScreen.html");
			
		}
		else{
			echo 'Username or Password invalid';
			
		}
		
	}
	

?>



<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title></title>
    </head>
    <body>
	
    </body>
</html>