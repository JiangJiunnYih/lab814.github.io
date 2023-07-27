<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your hardcoded username and password
    $staticUsername = "lab814";
    $staticPassword = "waterlab814";

    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

    if ($submittedUsername === $staticUsername && $submittedPassword === $staticPassword) {
        // Login successful, redirect to the welcome page
        header("Location: reservation.html");
        exit();
    } else {
        // Login failed, redirect back to the login page with an error message (optional)
        header("Location: index.html?login_error=true");
        exit();
    }
}
?>
