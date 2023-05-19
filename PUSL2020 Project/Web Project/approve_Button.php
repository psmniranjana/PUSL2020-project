<?php

if(isset($_POST['approve'])) {
    $id = $_POST['id'];
    $reason = $_POST['reason'];
    
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

    // Insert the data into the approve_reasons table
    $sql = "INSERT INTO approve_reasons (garbage_report_id, reason)
            VALUES ('$id', '$reason')";

    if (mysqli_query($conn, $sql)) {
        // Update the status of the garbage report to approved
        $sql = "UPDATE garbage_reports
                SET status = 'approved'
                WHERE id = '$id'";

        if (mysqli_query($conn, $sql)) {
            echo "Garbage report approved successfully";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}


?>