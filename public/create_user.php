<?php
// public/create_user.php
include ('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    // Server-side validation
    if (empty($name) || empty($email) || empty($mobile) || empty($gender)) {
        echo "All fields are required.";
        exit;
    }

    // Check if mobile is unique
    $sql = "SELECT * FROM users WHERE mobile='$mobile'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Mobile number already exists.";
        exit;
    }

    $sql = "INSERT INTO users (name, email, mobile, gender) VALUES ('$name', '$email', '$mobile', '$gender')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
