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

$sql = "INSERT INTO `users`(`id`,`username`, `firstname`, `lastname`, `password`) VALUES ('1','ahmad123','ahmad','gholami','ahm@ad13')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 