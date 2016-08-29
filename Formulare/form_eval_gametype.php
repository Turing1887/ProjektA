<?php
$gamemode = $_POST["gamemode"];

switch($gamemode){
    case "local":
        header("Location: ../Gruppen_de/view_spieleranzahl.html");
        break;
    case "singleplayer":
        header("Location: ../Gruppen_de/view_gameBoard.html");
        break;
    case "lan":
        header("Location: ../Gruppen_de/view_gameboard.html");
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
