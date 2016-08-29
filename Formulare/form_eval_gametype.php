<?php
$gamemode = $_POST["gamemode"];

switch($gamemode){
    case "local":
        header("Location: ../HTML/view_spieleranzahl.html");
        break;
    case "singleplayer":
        header("Location: ../HTML/view_gameBoard.html");
        break;
    case "lan":
        header("Location: ../HTML/view_gameboard.html");
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
