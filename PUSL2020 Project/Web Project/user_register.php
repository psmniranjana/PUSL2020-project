<?php

// Database configuration
$servername = "localhost";   // database server name (e.g. localhost)
$username = "root";          // database user name
$password = "";              // database password
$dbname = "cmc";             // database name

// Create a new MySQLi object
$mysqli = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_errno) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Retrieve the values submitted from the form
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$role = $_POST["role"];

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Prepare the SQL statement to check if username already exists
$stmt = $mysqli->prepare("SELECT * FROM users WHERE username = ?");

// Bind the parameter to the statement
$stmt->bind_param("s", $username);

// Execute the statement
$stmt->execute();

// Store the result
$result = $stmt->get_result();

// Check if a row was returned
if ($result->num_rows > 0) {
    // Username already exists, display an error message to the user
    echo "Error: Username already exists.";
    exit;
}

// Close the statement
$stmt->close();

// Prepare the SQL statement to insert the new record
$stmt = $mysqli->prepare("INSERT INTO users (username, password, role, email) VALUES (?, ?, ?, ?)");

// Bind the parameters to the statement
$stmt->bind_param("ssss", $username, $hashed_password, $role, $email);

// Execute the statement
if ($stmt->execute()) {
    echo "Registration successful.";
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$mysqli->close();

?>
