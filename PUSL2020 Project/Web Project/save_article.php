<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cmc";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $title = $_POST["title"];
    $description = $_POST["description"];
    
    // Upload image file
    $image_dir = "images/";
    $image_file = $image_dir . basename($_FILES["image"]["name"]);
    $image_type = strtolower(pathinfo($image_file, PATHINFO_EXTENSION));
    $allowed_types = array("jpg", "jpeg", "png", "gif");
    if (in_array($image_type, $allowed_types)) {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $image_file)) {
            $image = $image_file;
        } else {
            echo "Error uploading image";
            exit;
        }
    } else {
        echo "Invalid image format";
        exit;
    }

    // Prepare and execute SQL statement
    $stmt = $conn->prepare("INSERT INTO article (title, description, image) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $title, $description, $image);
    if ($stmt->execute()) {
        echo "Data inserted successfully";
    } else {
        echo "Error inserting data: " . $stmt->error;
    }

    // Close statement and database connection
    $stmt->close();
    $conn->close();
}
?>
