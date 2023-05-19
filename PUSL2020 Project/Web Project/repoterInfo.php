<?php
    // Check if the form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $reporterName = $_POST["reporter-name"];
        $reportDate = $_POST["report-date"];
        $reportTime = $_POST["report-time"];
        $nearestCity = $_POST["nearest-city"];
        $district = $_POST["district"];
        $garbageType = $_POST["garbage-type"];
        $priorityLevel = $_POST["priority-level"];
        $garbageLocation = $_POST["garbage-location"];
        
        // Upload the image file
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["garbage-image"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $newFileName = uniqid('', true) . '.' . $imageFileType;
        $target_file = $target_dir . $newFileName;
        move_uploaded_file($_FILES["garbage-image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . '/Web Project/' . $target_file);
        
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

        // Insert the form data into the database
        $sql = "INSERT INTO garbage_reports (reporter_name, report_date, report_time, nearest_city, district, garbage_type, priority_level, garbage_location, garbage_image)
        VALUES ('$reporterName', '$reportDate', '$reportTime', '$nearestCity', '$district', '$garbageType', '$priorityLevel', '$garbageLocation', '$newFileName')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);
    }
?>
