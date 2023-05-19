<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmc";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
}

// Insert data into "users" table
$name = $_POST["name"];
$password = $_POST["password"];
$role= $_POST["role"];
$email = $_POST["email"];

$sql = "INSERT INTO users (name,password,role, email) VALUES ('$name','$password' ,'$role','$email')";

if (mysqli_query($conn, $sql)) {
	echo "Data inserted successfully!";
} else {
	echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close MySQL connection
mysqli_close($conn);
?>
