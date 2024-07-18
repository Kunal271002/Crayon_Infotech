<?php
// templates/update_experience_form.php
include_once '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM experience WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    }
}
?>

<form name="experienceForm" action="update_experience.php?id=<?php echo $id; ?>" method="post">
    User ID: <input type="text" name="user_id" value="<?php echo $row['user_id']; ?>"><br>
    Company: <input type="text" name="company" value="<?php echo $row['company']; ?>"><br>
    Years: <input type="text" name="years" value="<?php echo $row['years']; ?>"><br>
    Months: <input type="text" name="months" value="<?php echo $row['months']; ?>"><br>
    <input type="submit" value="Update">
</form>
