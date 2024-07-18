<?php
// public/update_experience.php
include_once '../config/db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $user_id = $_POST['user_id'];
    $company = $_POST['company'];
    $years = $_POST['years'];
    $months = $_POST['months'];

    // Server-side validation
    if (empty($user_id) || empty($company) || empty($years) || empty($months)) {
        echo "All fields are required.";
        exit;
    }

    $sql = "UPDATE experience SET user_id='$user_id', company='$company', years='$years', months='$months' WHERE id=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "Experience updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
