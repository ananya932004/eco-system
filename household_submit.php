<?php
session_start(); // Start the session
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $service = $_POST['service']; // Ensure this matches the form field name
    $pickup_time = $_POST['pickup_time'];
    $waste_amount = $_POST['waste_amount'];

    // Insert data into the database
    $sql = "INSERT INTO household (name, address, phone, service, pickup_time, waste_amount) 
            VALUES ('$name', '$address', '$phone', '$service', '$pickup_time', '$waste_amount')";

    if ($conn->query($sql) === TRUE) {
        // Set a success message in the session
        $_SESSION['success_message'] = "Household data submitted successfully!";
    } else {
        // Set an error message in the session
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect back to the form page
    header("Location: household.php");
    exit;
}

$conn->close();
?>