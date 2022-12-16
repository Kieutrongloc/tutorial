<?php
header('Access-Control-Allow-Origin: *');
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apple_store";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    //echo "id: " . $row["id"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>";
    $users[] = $row;
  }
  echo json_encode($users); die;
} else {
  echo "0 results";
}
$conn->close();
?>