<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html"); // Redirect to login if not logged in
    exit;
}

// Redirect to button2.html after successful login
header("Location: button2.html");
exit;
?>