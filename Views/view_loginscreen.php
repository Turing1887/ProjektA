<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kingsburg</title>
        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="../css/login.css"> 
    </head>
    <body>
    <div class="headline">
        <h1>Kingsburg</h1>
    </div>
    <section class="login-form">
        <form action="../Formulare/form_eval_loginscreen.php" method="post">  
            <h2>Please enter username and password</h2>
            <?php include("../Gruppen_de/loginmask.php"); ?>
            <button type="submit" class="login-submit" value="Login">Login</button>
        </form>
        <a href="view_register.php">No Account? Sign up here</a>
     </section>   
        
        <?php include("../Gruppen_de/footer.php"); ?>
    </body>
</html>
