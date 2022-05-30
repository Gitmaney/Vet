<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "veterinary";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE Patients (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
petname VARCHAR(30) NOT NULL,
animaltype VARCHAR(30) NOT NULL,
email VARCHAR(50),
contact_no INT(30) NOT NULL,
reason VARCHAR(30) NOT NULL,
appointment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
  echo "Table Patients created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>