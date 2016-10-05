<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kingsburg</title>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
    </head>
    <body>
      <?php include("../Gruppen_de/ingame_menu.php"); ?>
      <h1>Click on the Game to start</h1>
      <img src="kingsburg.jpg" alt="Kingsburg" style="height: 600px;width: 800px;"><br> <!--Cover des Spiels als Startbutton -->
      <a href="view_spielmodi.php"><button id="startButton">New Game</button></a><br>
      <input id="loadButton" type="button" value="Load Game"><!--Laden des Spielstands-->
      <?php include("../Gruppen_de/footer.php"); ?>
    </body>
</html>
