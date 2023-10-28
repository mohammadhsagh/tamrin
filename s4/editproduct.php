<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "usermessage";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `product` SET `id`='5',`name`='yogurt',`price`='5',`expiration date`='2025-9-9',`amount`='120' WHERE 1";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 