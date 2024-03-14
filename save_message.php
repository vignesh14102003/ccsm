<?php
// Database connection
$servername = "localhost"; // or your server name if different
$username = "root"; // MySQL username (default is root)
$password = ""; // MySQL password (default is empty)
$database = "ccsm"; // Name of your MySQL database

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from POST request
$user = $_POST['username'];
$message = $_POST['message'];

// Prepare and bind SQL statement
$stmt = $conn->prepare("INSERT INTO complaints (username, message) VALUES (?, ?)");
$stmt->bind_param("ss", $user, $message);

// Execute the statement
$stmt->execute();

// Close statement and connection
$stmt->close();
$conn->close();
?>
