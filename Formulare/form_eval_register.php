<?php
// $new_user;
// $password;
// $cookie_name = $new_user;

//   if($_POST["password"] != $_POST["password-repeat"]){
//     echo "<h3>Passwords don't match</h3>";
//   }
//   else{
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     $new_user = $username . "|" . $password;

//     $userfile = fopen('user-file.txt','a') or die ("unable to open file");
//     fwrite($userfile,$new_user . PHP_EOL);
//     //fwrite($userfile,$password . "\n");
//     fclose($userfile);

//     header('Location: ../Views/view_loginscreen.php');
//   }




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingsburgdb";
// set parameters and execute
$usernamePlayer = $_POST["username"];
$passwordPlayer = $_POST["password"];
$passwordRepeat = $_POST["password-repeat"];
if($passwordPlayer == $passwordRepeat){
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO accountdata (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $usernamePlayer, $passwordPlayer);



    $stmt->execute();

    // echo "New records created successfully";

    $stmt->close();
    $conn->close();
    header('Location: ../Views/view_loginscreen.php');
}
else{
    echo "Passwords don't match";
}
?>
