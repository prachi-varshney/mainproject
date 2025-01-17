<?php
// Configuration
$db_host = 'localhost';
$db_username = 'your_username';
$db_password = 'your_password';
$db_name = 'your_database';

// Connect to database
$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if user exists
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

// Execute query
$result = $conn->query($query);

// Check if user exists
if ($result->num_rows > 0) {
    // User exists, start session
    session_start();
    $_SESSION['username'] = $username;
    header('Location: dashboard.php');
    exit;
} else {
    // User does not exist, display error message
    echo "Invalid username or password";
}

// Close connection
$conn->close();
?>
