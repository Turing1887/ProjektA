<?php
$gamemode = $_POST["gamemode"];

switch($gamemode){
    case "local":
        header("Location: ../Views/view_spieleranzahl.php");
        break;
    case "singleplayer":
        header("Location: ../Views/php_code.php");
        break;
    case "lan":
        header("Location: ../Views/php_code.php");
        break;
    case "online":
        header("Location: ../Views/view_lobby.php");
        break;
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
