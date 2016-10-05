<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kingsburg</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
  </head>
  <body>
    
    <form action="../Formulare/form_eval_register.php" method="post">
      <fieldset>
        <legend>Register</legend>
        <?php include '../Gruppen_de/loginmask.php'; ?>
        <label for="password-repeat">Repeat Password: </label><br>
        <input type="password" name="password-repeat" required><br>
        <hr>
        <input type="submit" value="Register">
      </fieldset>
    </form>
    <?php include("../Gruppen_de/footer.php"); ?>
  </body>
</html>
