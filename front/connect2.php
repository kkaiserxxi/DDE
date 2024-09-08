<?php

$FullName = $_POST['FullName'];
$email = $_POST['email'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost', 'MSI', 'msi12', 'deepdiveexpo');

if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO contactus (FullName, email, message) VALUES (?, ?, ?)");
    
    // Check if prepare() failed
    if ($stmt === false) {
        die('Prepare() failed: ' . $conn->error);
    }
    
    // Bind the parameters (assuming all are strings here)
    $stmt->bind_param('sss', $FullName, $email, $message);
    
    // Execute the statement
    if ($stmt->execute() === false) {
        die('Execute() failed: ' . $stmt->error);
    }
    
    echo "Thank you for contactus";
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>
