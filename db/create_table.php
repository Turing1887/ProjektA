<?php

$servername = "localhost";
$username = "root";
$password = "";


$conn = new mysqli($servername,$username,$password, 'kingsburgdb');

//Create Table
$sql = "CREATE TABLE IF NOT EXISTS accountdata(
    username VARCHAR(30) NOT NULL PRIMARY KEY ,
    password VARCHAR(30) NOT NULL,
    regtime TIMESTAMP
)";

if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
} 

$conn->close();

?>