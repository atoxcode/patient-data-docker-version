<?php
$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
echo $conn->connection_status;
?>