<!-- templates/header.php -->
<!DOCTYPE html>
<html>

<head>
    <title>CRUD</title>
    <script>
        function validateForm() {
            var name = document.forms["userForm"]["name"].value;
            var email = document.forms["userForm"]["email"].value;
            var mobile = document.forms["userForm"]["mobile"].value;
            var gender = document.forms["userForm"]["gender"].value;

            if (name == "" || email == "" || mobile == "" || gender == "") {
                alert("All fields must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>

<body>
    <h1>Welcome Caryon Infotech</h1>
    <a href="../public/index.php">Home</a> | <a href="../templates/create_user_form.php">Create User</a> | <a href="../templates/add_experience_form.php">Add Experience</a>
    <hr>
</body>
</html>