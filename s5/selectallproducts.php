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

$sql = "SELECT * FROM product";

$result = $dbc -> query( $sql );
$table = $result -> fetch_all( MYSQL_ASSOC );


$conn->close();
?> 