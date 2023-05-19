<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $id = $_POST["id"];
    $reason = $_POST["reason"];
    
    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "cmc";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Update the status of the row in the database
    $sql = "UPDATE garbage_reports SET status='Approved' WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        // Insert the reason into the database
        $sql_reason = "INSERT INTO approve_reject_reasons (garbage_report_id, reason, status) VALUES ('$id', '$reason', 'Approved')";
        if (mysqli_query($conn, $sql_reason)) {
            echo "Report approved successfully";
        } else {
            echo "Error: " . $sql_reason . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>
