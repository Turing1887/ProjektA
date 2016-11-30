<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kingsburgdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// set parameters and execute
$usernamePlayer = $_POST["username"];
$usernamePlayer = mysql_real_escape_string($usernamePlayer);
$passwordPlayer = $_POST["password"];
$passwordPlayer = mysql_real_escape_string($passwordPlayer);


// $query = "SELECT username FROM accountdata";

$query = "SELECT username,password FROM accountdata WHERE username = '$usernamePlayer' AND password = '$passwordPlayer'";

    if ($result = mysqli_query($conn, $query)) {
        /* fetch associative array */
        while ($row = mysqli_fetch_assoc($result)) {
			if($row['username'] == $usernamePlayer and $row['password'] == $passwordPlayer){
				header("Location: ../Views/view_spielmodi.php");
			}
        }
		echo "Password or username wrong";

        /* free result set */
        mysqli_free_result($result);
    }

$conn->close();



?>
