<?php 
$gamemode = $_POST["gamemode"];

switch($gamemode){
    case "local":
        header("Location: ../HTML/PlayerCountScreen.html");
        break;
    case "singleplayer":
        header("Location: ../HTML/GameBoard.html");
        break;
    case "lan":
        header("Location: ../HTML/GameBoard.html");
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