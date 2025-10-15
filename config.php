<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = ""; // Default XAMPP/WAMP password is empty
$dbname = "Student_Management_System";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$mysqli) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set charset to avoid encoding issues
mysqli_set_charset($mysqli, "utf8");
?>