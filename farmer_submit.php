<?php
session_start(); // Start the session
include 'db.php'; // Include the database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $phone = $_POST['phone']; // Ensure this matches the form field name
    $address = $_POST['address'];
    $manure_required = $_POST['manure_required'];
    $pickup_time = $_POST['pickup_time'];

    // Insert data into the database
    $sql = "INSERT INTO farmer (name, phone, address, manure_required, pickup_time) 
            VALUES ('$name', '$phone', '$address', '$manure_required', '$pickup_time')";

    if ($conn->query($sql) === TRUE) {
        // Set a success message in the session
        $_SESSION['success_message'] = "Farmer data submitted successfully!";
    } else {
        // Set an error message in the session
        $_SESSION['error_message'] = "Error: " . $sql . "<br>" . $conn->error;
    }

    // Redirect back to the form page
    header("Location: farmer.php");
    exit;
}

$conn->close();
?>