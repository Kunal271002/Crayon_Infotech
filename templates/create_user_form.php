<!-- templates/create_user_form.php -->
<form name="userForm" action="../public/create_user.php" onsubmit="return validateForm()" method="post">
    <label>Name :</label><br>
    <input type="text" name="name"><br><br>
    <label> Email: </label><br>
    <input type="text" name="email"><br><br>
    <label> Mobile : </label><br>
    <input type="text" name="mobile"><br><br>
    <label> Gender : </label><br>
    <input type="text" name="gender"><br><br>
    <input type="submit" value="Submit">
</form>