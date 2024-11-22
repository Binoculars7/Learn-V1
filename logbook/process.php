<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture form data
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']); 

    // Store data in session
    $_SESSION['user'] = [
        'username' => $username,
        'email' => $email,
        'password' => $password
    ];

    // Redirect to confirmation page
    header("Location: confirm.php");
    exit();
} else {
    // Redirect to signup if accessed directly
    header("Location: signup.php");
    exit();
}
