<?php
// db_connect.php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "updigi";

try {
    // Enable mysqli to throw exceptions
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // If connected successfully, this message will show (optional)
   // echo "Connected successfully";
} 
catch (Exception $e) {
    // Catch any connection errors and display the message
    echo "Connection failed: " . $e->getMessage();
    exit;  // Stop script execution if the connection fails
}
?>
