<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "5c_peduzzi_cinema";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>