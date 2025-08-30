<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "guest";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$name=$_POST['name']??'';
$number=$_POST['number']??'';
$email=$_POST['email']??'';
$message=$_POST['message']??'';

$sql = "INSERT INTO `list-guest` (`name`,`number`, `email`,`message`)
VALUES ('$name', '$number', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

header("Location: list-guest.php");
exit();

?>