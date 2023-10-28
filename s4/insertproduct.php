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

$sql = "INSERT INTO `product`(`id`, `name`, `price`, `expiration date`, `amount`) VALUES ('1','milk','25','2025-12-17','200')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 