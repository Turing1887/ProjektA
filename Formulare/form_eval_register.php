<?php
$new_user;
$password;
$cookie_name = $new_user;

  if($_POST["password"] != $_POST["password-repeat"]){
    echo "<h3>Passwords don't match</h3>";
  }
  else{
    $username = $_POST["username"];
    $password = $_POST["password"];
    $new_user = $username . "|" . $password;

    $userfile = fopen('user-file.txt','a') or die ("unable to open file");
    fwrite($userfile,$new_user);
    //fwrite($userfile,$password . "\n");
    fclose($userfile);

    header('Location: ../HTML/view_loginscreen.html');
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
