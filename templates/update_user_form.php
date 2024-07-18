<?php
// templates/update_user_form.php
include_once '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
    }
}
?>

<form name="userForm" action="update_user.php?id=<?php echo $id; ?>" onsubmit="return validateForm()" method="post">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $row['email']; ?>"><br>
    Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $row['gender']; ?>"><br>
    <input type="submit" value="Update">
</form>
