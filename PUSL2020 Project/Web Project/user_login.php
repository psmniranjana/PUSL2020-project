<?php

// get the submitted form data
$username = $_POST['username'];
//$email = $_POST['email'];
$password = $_POST['password'];

// sanitize the data to prevent SQL injection
$username = htmlspecialchars($username);
//$email = filter_var($email, FILTER_SANITIZE_EMAIL);
$password = password_hash($password, PASSWORD_DEFAULT);

// Create a new MySQLi object
$mysqli = new mysqli("localhost", "root", "", "cmc");

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve the values submitted from the form
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

// Prepare the SQL statement
$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ? AND password = ? AND role = ?");

// Bind the parameters to the statement
$stmt->bind_param("sss", $username, $password, $role);

// Execute the statement
$stmt->execute();

// Fetch the result
$result = $stmt->get_result();

// Check if the user data exists in the database
if ($result->num_rows == 1) {
    // Fetch the user data
    $user = $result->fetch_assoc();

    // Start a new session
    session_start();

    // Store the user data in the session
    $_SESSION["username"] = $user["username"];
    $_SESSION["role"] = $user["role"];

    // Redirect to another PHP page based on the user role
    if ($user["role"] == "admin") {
        header("Location: Admin.php");
    } else if ($user["role"] == "gtf_member") {
        header("Location: repoterPage.php");
    } else if ($user["role"] == "collecting") {
        header("Location: Collecting_Details.php");
    } 
    else if ($user["role"] == "green_capt") {
        header("Location: Report_Approvel.php");
    } 
        else {
        echo "Unknown user role.";
    }
} else {
    echo "Invalid username or password.";
}


// Close the statement and connection
$stmt->close();
$mysqli->close();
?>
