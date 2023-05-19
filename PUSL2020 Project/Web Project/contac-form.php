<?php

// Get the form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Create a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmc";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the SQL query to insert the form data
$sql = "INSERT INTO contacts(name, email, message) VALUES ('$name', '$email', '$message')";

// Execute the SQL query
if ($conn->query($sql) === TRUE) {
    echo "Form data inserted successfully!";
} else {
    echo "Error inserting form data: " . $conn->error;
}

// Close the database connection
$conn->close();

?>
