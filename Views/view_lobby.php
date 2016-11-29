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
        <form action="../Formulare/form_eval_playercount.php" method="post" name="onlineform">
        <fieldset>
          <legend>Please choose a game</legend>
          <textarea readonly style="resize: none;"></textarea>
          <input type="submit" id="playerCount" name=host value=Host>
          <input type="submit" name=Join value=Join>
       </fieldset>
       </form>
       <?php include("../Gruppen_de/footer.php"); ?>
    </body>
</html>
