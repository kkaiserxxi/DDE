<?php

$FullName = $_POST['FullName'];
$email = $_POST['email'];
$booking_date = $_POST['booking_date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];
$Additional_Requests = $_POST['Additional_Requests'];

// Database connection
$conn = new mysqli('localhost', 'MSI', 'msi12', 'deepdiveexpo');

if($conn->connect_error){
    die('Connection Failed: ' . $conn->connect_error);
} else {
    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO booking (FullName, email, booking_date, start_time, end_time, Additional_Requests) VALUES (?, ?, ?, ?, ?, ?)");
    
    // Check if prepare() failed
    if ($stmt === false) {
        die('Prepare() failed: ' . $conn->error);
    }
    
    // Bind the parameters (assuming all are strings here)
    $stmt->bind_param('ssssss', $FullName, $email, $booking_date, $start_time, $end_time, $Additional_Requests);
    
    // Execute the statement
    if ($stmt->execute() === false) {
        die('Execute() failed: ' . $stmt->error);
    }
    
    echo "Booking successfully";
    
    // Close the statement and connection
    $stmt->close();
    $conn->close();
}

?>
