
<!DOCTYPE html>

 <html lang="en">
     <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Kingsburg</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/spielmodi.css">
     </head>
     <body>
       <?php include("../Gruppen_de/ingame_menu.php"); ?>
         <form action="../Formulare/form_eval_gametype.php" method="post">
            <ul>
              <h3>Please choose a game mode</h3>
              <li><input type="radio" name="gamemode" value="local">Local</li>
              <li><input type="radio" name="gamemode" value="singleplayer">Singleplayer</li>
              <li><input type="radio" name="gamemode" value="lan">LAN</li>
              <li><input type="radio" name="gamemode" value="online">Online</li>
              <li><input type="submit" value="submit"></li>
            </ul>
          <details>
              <ul>
                  <li>Local: Play on one PC</li>
                  <li>Singleplayer: Play an Arcade game alone</li>
                  <li>LAN: Play on several PCs in your network</li>
                  <li>Online: Search for games to join or host your own</li>
              </ul>
          </details>
        </form>
        <?php include("../Gruppen_de/footer.php"); ?>
     </body>
 </html>
