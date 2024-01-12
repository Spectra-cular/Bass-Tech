<?php
//database connection

$servername = "localhost";
$username = "root";
$password = "";
$database_name ="bass";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// storing the form data into the database

$user_name =  $_GET['username'];
$user_password = $_GET['password'];
$user_email = $_GET['email'];


echo $user_name;
echo $user_password;
echo $user_email;

// $data = 
// INSERT INTO 'connection' ('Username', 'Password', 'Email') VALUES ('$username','$password','$email);

// if ($conn->query($data) === TRUE) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $data . "<br>" . $conn->error;
//   }

$sql = "INSERT INTO connection (username, password, email)
VALUES ('$user_name', '$user_password', '$user_email')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
