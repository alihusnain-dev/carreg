<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "carreg";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Variables from form submission
$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$gender = $_POST['gender'];
$username = $_POST['username'];
$password = $_POST['password'];
// $confirmpassword = $_POST['confirmpassword'];
// $confirm = $_POST['confirm'];
// Example of inserting data into a table (assuming you have a 'users' table)
$sql = "INSERT INTO signup (name, email,mobile, gender, username,  password)
        VALUES ('$name', '$email', '$mobile', '$gender', '$username', 'password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>