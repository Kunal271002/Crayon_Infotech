<!-- templates/create_user_form.php -->
<form name="userForm" action="../public/create_user.php" onsubmit="return validateForm()" method="post">
    Name: <input type="text" name="name"><br>
    Email: <input type="text" name="email"><br>
    Mobile: <input type="text" name="mobile"><br>
    Gender: <input type="text" name="gender"><br>
    <input type="submit" value="Submit">
</form>