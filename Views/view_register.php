<?php 
include_once "../db/write_to_db.php";




?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Kingsburg</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/login.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
  </head>
  <body>
    <section class="login-form">
    <form action="../Formulare/form_eval_register.php" method="post">
      
        <h3>Register</h3>
        <?php include '../Gruppen_de/loginmask.php'; ?>
        <input type="password" name="password-repeat" placeholder="Repeat Password" class="textfield" required>
     
        <button type="submit" class="login-submit">Register</button>
    </form>
    </section>
    <?php include("../Gruppen_de/footer.php"); ?>
  </body>
</html>
