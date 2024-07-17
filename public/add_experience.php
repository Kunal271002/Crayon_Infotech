<?php
// public/add_experience.php
include ('../config/db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_POST['user_id'];
    $company = $_POST['company'];
    $years = $_POST['years'];
    $months = $_POST['months'];

    // Server-side validation
    if (empty($user_id) || empty($company) || empty($years) || empty($months)) {
        echo "All fields are required.";
        exit;
    }

    $sql = "INSERT INTO experience (user_id, company, years, months) VALUES ('$user_id', '$company', '$years', '$months')";

    if ($conn->query($sql) === TRUE) {
        echo "New experience added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>