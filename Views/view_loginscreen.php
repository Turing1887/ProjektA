<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kingsburg</title>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
    </head>
    <body>
        <form action="../Formulare/form_eval_loginscreen.php" method="post">
            <fieldset>
              <legend>Please enter username and password</legend>
              <?php include("../Gruppen_de/loginmask.php"); ?>
              <input type="submit" value="submit"><br><!--Submit/Verarbeitung der Eingaben-->
            </fieldset>
          <details>Type in 'admin' as username and 'password' as password for now</details>
        </form>
        <a href="view_register.php">No Account? Sign up here</a>
    </body>
</html>
