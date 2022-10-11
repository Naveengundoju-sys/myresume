<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myresume";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$name=$_POST["uname"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$sql = "INSERT INTO myresume (Name,Email,phone)
VALUES ('$name', '$email', '$phone')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>