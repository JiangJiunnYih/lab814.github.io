<?php
// Check if the form was submitted using POST method
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your hardcoded username and password
    $staticUsername = "lab814";
    $staticPassword = "waterlab814";

    $submittedUsername = $_POST["username"];
    $submittedPassword = $_POST["password"];

    // Check if the submitted username and password match the hardcoded values
    if ($submittedUsername === $staticUsername && $submittedPassword === $staticPassword) {
        // Start a session and set session variables
        session_start();
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $submittedUsername;

        // Redirect to the welcome page (reservation.html)
        header("Location: reservation.html");
        exit();
    } else {
        // Login failed, redirect back to the login page with an error message
        header("Location: index.html?login_error=true");
        exit();
    }
}
?>
