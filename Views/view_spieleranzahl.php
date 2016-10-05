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
        <form action="../Formulare/form_eval_playercount.php" method="post">
        <fieldset>
          <legend>Please verify the number of players</legend>
            <input type="number" id="playerCount" min="2" max="5"><!--Anzahl der Spieler eingeben-->
            <input type="submit" value=Submit><!--Werte verarbeiten-->
       </fieldset>
       </form>
       <?php include("../Gruppen_de/footer.php"); ?>
    </body>
</html>
