<?php
// now for LOGIN PAGE Code

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "project";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables from form submission
$username = $_POST['username'];
$password = $_POST['password'];

// Query to check if user exists with given email and password
$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Login successful
    echo "Login successful!";
    // Redirect to a welcome page or dashboard
    header("Location: welcome.php");
} else {
    // Login failed
    echo "Login failed. Invalid email or password.";
}

$conn->close();
?>