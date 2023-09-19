<?php
// Simulated user data (replace with actual authentication logic)
$validUsername = "your_username";
$validPassword = "your_password";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $validUsername && $enteredPassword === $validPassword) {
        // Authentication successful, redirect to the user's dashboard
        header("Location: dashboard.php");
        exit();
    } else {
        $errorMessage = "Invalid username or password. Please try again.";
    }
}
?>