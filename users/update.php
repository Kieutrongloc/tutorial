<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";
$id = $_REQUEST["id"];
$last_name = $_REQUEST["last_name"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE users SET last_name='$last_name' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

$conn->close();
?>