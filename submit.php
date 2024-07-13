<?php
$servername = "localhost"; // or '127.0.0.1' if preferred
$username = "root"; // Assuming your MySQL username is 'root'
$password = ""; // Your MySQL password
$database = "carreg"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Escape user inputs for security
$name = $_POST['name'];
$fatherName = $_POST['fatherName'];
$cnic = $_POST['cnic'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$registrationNum = $_POST['registrationNum'];
$carMake = $_POST['carMake'];
$carModel = $_POST['carModel'];
$carColor = $_POST['carColor'];
$modelYear = $_POST['modelYear'];
$issuedDate = isset($_POST['issuedDate']) ? $conn->real_escape_string($_POST['issuedDate']) : '';
// $issuedDate = $_POST['issuedDate'];
$chassisNum = $_POST['chassisNum'];
$carType = $_POST['carType'];
$gps = $_POST['gps'];
$mileage = $_POST['mileage'];
$insurance = $_POST['insurance'];
$carSeat = $_POST['carSeat'];

// Prepare SQL query
$sql = "INSERT INTO registration (`name`, `fatherName`, `cnic`, `mobile`, `email`, `gender`, `registrationNum`, `carMake`, `carModel`, `carColor`, `modelYear`, `issuedDate`, `chassisNum`, `carType`, `gps`, `mileage`, `insurance`, `carSeat`)
            VALUES ('$name', '$fatherName', '$cnic', '$mobile', '$email', '$gender', '$registrationNum', '$carMake', '$carModel', '$carColor', '$modelYear', '$issuedDate', '$chassisNum', '$carType', '$gps', '$mileage', '$insurance', '$carSeat')";

// $sqli->bind_param("ssiissssssiisssisi", $fullname, $fathername, $cnic, $mobile, $email, $gender, $registrationnumber, $carmake, $carmodel, $carcolor, $modelyear, $issueddate, $chassisnumber, $cartype, $gps, $mileage, $insurance, $carseat);

// Attempt insert query execution
if ($conn->query($sql) === TRUE) {
    echo "";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
