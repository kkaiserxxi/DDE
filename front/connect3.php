<?php
// Check if the form has been submitted via POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Sanitize and retrieve form data
    $name = htmlspecialchars($_POST['FullName']);
    $email = htmlspecialchars($_POST['email']);
    $booking_date = htmlspecialchars($_POST['booking_date']);
    $start_time = htmlspecialchars($_POST['start_time']);
    $end_time = htmlspecialchars($_POST['end_time']);
    $requests = htmlspecialchars($_POST['Additional_Requests']);

    // Example billing logic (set a fixed billing amount)
    $billingAmount = 100;

    // Database connection
    $conn = new mysqli('localhost', 'MSI', 'msi12', 'deepdiveexpo');

    // Check if the connection is successful
    if($conn->connect_error){
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO booking_vr2 (FullName, email, booking_date, start_time, end_time, Additional_Requests) VALUES (?, ?, ?, ?, ?, ?)");

        // Check if prepare() failed
        if ($stmt === false) {
            die('Prepare() failed: ' . $conn->error);
        }

        // Bind the parameters (strings assumed for all)
        $stmt->bind_param('ssssss', $name, $email, $booking_date, $start_time, $end_time, $requests);

        // Execute the statement
        if ($stmt->execute() === false) {
            die('Execute() failed: ' . $stmt->error);
        } else {
            // Now, after successful insertion, display the booking confirmation
            echo "
            <html>
            <head>
                <title>Booking Confirmation</title>
                <link rel='stylesheet' href='bill.css'>
            </head>
            <body>
                <div class='confirmation-container'>
                    <h2>Booking Confirmed</h2>
                    <p>Thank you, <strong>$name</strong>, for booking the VR Experience.</p>
                    <p><strong>Preferred Dive Date:</strong> $booking_date</p>
                    <p><strong>Start Time:</strong> $start_time</p>
                    <p><strong>End Time:</strong> $end_time</p>
                    <p><strong>Additional Requests:</strong> $requests</p>
                    
                    <h3>Billing Details</h3>
                    <p>Your total amount due is <strong>$$billingAmount</strong>.</p>
                    <p>Please bring this amount and pay in person.</p>
                    
                    <form action='index.php'>
                        <button type='submit'>Return to Main Page</button>
                    </form>
                </div>
            </body>
            </html>
            ";
        }

        // Close the statement and connection
        $stmt->close();
        $conn->close();
    }
}
?>
