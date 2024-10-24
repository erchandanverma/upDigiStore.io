<?php
// Include the database connection file
include 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    try {
        // Prepare an SQL statement to insert data
        $stmt = $conn->prepare("INSERT INTO contact_form (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
        
        // Bind parameters
        $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
        
        // Execute the statement
        $stmt->execute();

        // Return success status
        echo json_encode(["status" => "success"]);
        
        $stmt->close();
    } catch (Exception $e) {
        // Return error status
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }

    // Close the connection
    $conn->close();
}
?>
