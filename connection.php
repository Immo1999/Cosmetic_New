<?php
$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$msg = $_POST["msg"];

// Database connection
$con = mysqli_connect("localhost", "root", "", "adit");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO contact (name, email, phone, msg) VALUES ('$name', '$email', '$phone', '$msg')";
if (mysqli_query($con, $sql)) {
    echo "Thank you for your message. We will get back to you soon.";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
?>
