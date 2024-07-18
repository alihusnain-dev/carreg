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
// $password = $_POST['password'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// $confirmpassword = $_POST['confirmpassword'];
$confirm = $_POST['confirm_password'];

    // Validate inputs (example: ensure all required fields are filled)
    if ($password !== $confirm_password) {
        echo "Passwords do not match.";
    }
    else {
        // Process registration (e.g., insert into database)
        // Dummy example - replace with actual database logic
        echo "Registration successful!";
    }

// Example of inserting data into a table (assuming you have a 'users' table)
$sql = "INSERT INTO signup (name, email,mobile, gender, username,  password, confirm)
        VALUES ('$name', '$email', '$mobile', '$gender', '$username', '$password', '$confirm')";

if ($conn->query($sql) === TRUE) {
    header("Location: index.html");
}
else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header("location: error.html");
}

$conn->close();
?>