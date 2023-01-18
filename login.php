<?php
// Start the session
session_start();

// Define an array of valid users
$valid_users = array(
    "admin" => "admin",
    "user1" => "pass1",
    "user2" => "pass2"
);

// Check if the form has been submitted
if(isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the submitted credentials match a valid user
    if(isset($valid_users[$username]) && $valid_users[$username] == $password) {
        // Correct login
        $_SESSION['logged_in'] = true;
        header("Location: admin.html");
    } else {
        // Incorrect login
        echo "Incorrect username or password.";
    }
}
?>