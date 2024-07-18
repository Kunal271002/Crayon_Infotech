<?php
// public/update_user.php
include_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    // Server-side validation
    if (empty($name) || empty($email) || empty($mobile) || empty($gender)) {
        echo "All fields are required.";
        exit;
    }

    // Check if mobile is unique for other users
    $sql = "SELECT * FROM users WHERE mobile='$mobile' AND id!=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Mobile number already exists.";
        exit;
    }

    $sql = "UPDATE users SET name='$name', email='$email', mobile='$mobile', gender='$gender' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
