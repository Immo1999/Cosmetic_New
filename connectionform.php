<?php
// Database configuration
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'adit';

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Form data validation
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$phone = $_POST['phone'];

if (empty($name) || empty($email) || empty($age) || empty($phone)) {
    echo 'Please fill in all fields.';
    exit;
}

// Phone number validation
if (!preg_match('/^[0-9]{10}$/', $phone)) {
    echo 'Invalid phone number. Phone number should be 10 digits long.';
    exit;
}

// Insert the data into the database (example query)
$sql = "INSERT INTO users (name, email, age, phone) VALUES ('$name', '$email', '$age', '$phone')";

if ($conn->query($sql) === TRUE) {
    echo '';
} else {
    echo 'Error: ' . $sql . '<br>' . $conn->error;
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Page with Background Image</title>
    <style>
        body {
            background-image: url("images/aaa.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .button {
            padding: 10px 20px;
            background-color: pink;
            color: white;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-decoration:none;
            border-radius:10px;
            margin-top:350px;
            margin-left:-300px;

        }

    </style>
</head>
<body>
    <div>
<button class="button"><a href="index.html" class="abc"><h2>Go Back</h2></a></button> 
<button type="submit" class="button"><a href="https://www.nykaa.com/"><h2>Buy Now</h2></button>   
    </div>
</body>
</html>
