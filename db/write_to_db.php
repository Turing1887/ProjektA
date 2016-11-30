<?php 

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS kingsburgDB";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
} 
mysqli_set_charset($conn,"utf8");
$conn->close();

include_once "create_table.php";


?>