<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css"
        integrity="sha512-qCU+PlI3qOyoSf2Qv5+MbrE4FpjUX4OT4WJ9YzbHlVKpEzNSxEapPwmmFyDl6jgU6Q+UcZJ0a9vGr47/WlLq3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Registration Form</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2 {
            color: #343a40;
            text-align: center;
            margin-top: 50px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid #ced4da;
            border-radius: 5px;
            box-shadow: 0px 0px 10px #ced4da;
        }

        label {
            display: block;
            margin-bottom: 10px;
            color: #343a40;
        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        select {
            width: 90%;
            padding: 10px;
            border: 1px solid #ced4da;
            border-radius: 5px;
            margin-bottom: 20px;
            font-size: 16px;
            color: #495057;
            background-color: #fff;
            background-image: none;
        }

        input[type="submit"] {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
            padding: 10px 16px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }
    </style>
</head>

<body>
    <h2>Registration Form</h2>
    <?php if (isset($_POST["error"])) { ?>
        <div class="alert alert-danger">
            <?php echo $_POST["error"];


            if ($result->num_rows > 0) {
                // Username already exists, redirect back to the registration form with an error message
                header("Location: registration_form.php?error=Username already exists.");
                exit;
            }

    }

    ?>


    </div>

    <form action="user_register.php" method="post">
        <div class="form-group">
            <label>Email:</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group">
            <label>Username:</label>
            <input type="text" class="form-control" name="username" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" class="form-control" name="password" id="password" required
                pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                oninvalid="setCustomValidity('Password must contain at least one digit, one lowercase letter, one uppercase letter, and be at least 8 characters long')"
                oninput="setCustomValidity('')">
            <small class="form-text text-muted">Password must contain at least one digit, one lowercase letter, one
                uppercase letter, and be at least 8 characters long</small>
        </div>

        <div class="form-group">
            <label>Role:</label>
            <select class="form-control" name="role">

                <option value="gtf_member">GTF Member</option>

            </select>
        </div>
        <input type="submit" class="btn btn-primary" value="Register">
    </form>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var passwordField = document.getElementById("password");
            var passwordRequirements = passwordField.nextElementSibling;
            passwordField.addEventListener("input", function () {
                passwordRequirements.style.display = this.checkValidity() ? "none" : "block";
            });
        });
    </script>