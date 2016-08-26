<?php
$new_user;
$password;

  if($_POST["password"] != $_POST["password-repeat"]){
    echo "<h3>Passwords don't match</h3>";
  }
  else{
    $new_user = $_POST["username"];
    $password = $_POST["password"];
  }


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
