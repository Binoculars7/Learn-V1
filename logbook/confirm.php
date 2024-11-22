<?php
session_start();

// Check if session exists
if (!isset($_SESSION['user'])) {
    header("Location: signup.php");
    exit();
}

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Signup</title>
</head>
<body>
    <h1>Signup Confirmation</h1>
    <p><strong>Username:</strong> <?php echo htmlspecialchars($user['username']); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($user['email']); ?></p>
    <p><strong>Password:</strong> <?php echo htmlspecialchars($user['password']); ?></p>

    <a href="signup.php">Go Back</a>
</body>
</html>
