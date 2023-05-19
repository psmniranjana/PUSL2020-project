<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-rgOg2euW8OyjB+bDX5NlV7b5D3I9v5ueaC/57uV7ABIsG+/e/qwYYbYBC6beObJd5b+q9X5v5yz1C5f7VDrJWw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Add custom CSS */
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

        input[type="text"], input[type="password"], select {
            width: 100%;
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

    <div class="container">
        <h2>Login Form</h2>
        <form action="user_login.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select name="role" id="role" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="green_capt">Green Captain</option>
                    <option value="gtf_member">GTF_Member</option>
                    <option value="collecting">Collecting_Member</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Login" class="btn btn-primary">
            </div>
        </form>
    </div>
    <!-- Add Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-TJBNt16ihL1DQO1vH8I+IDMY0Jl+gOy9+Iy8WllTcT93M+/JQ4+51v3sW3oyejt+oJ/dpFM6cGJ6q3N6/mfhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
