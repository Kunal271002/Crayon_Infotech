<?php
// public/delete_experience.php
include_once '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete experience
    $sql = "DELETE FROM experience WHERE user_id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Experience deleted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
