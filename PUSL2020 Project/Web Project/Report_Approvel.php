<?php
// start the session
session_start();

// check if the user is logged in
if (!isset($_SESSION['username'])) {
  // redirect to the login page
  header('Location: Login.php');
  exit;
}
?>
<div style="width:100%; height:100px; background-color:#5FAF49; color:white; font-weight:bold;">
    <h1>Welcome, <?php echo $_SESSION['username']; ?>!(Green Captain)</h1> <a style="text-decoration:none; color:white;"
        href="index.php">Logout</a>
</div>
<!-- display other content here -->

<br>

<?php
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

// Fetch the garbage reports data from the database
$sql = "SELECT * FROM garbage_reports";
$result = mysqli_query($conn, $sql);

// Display the data in a table
if (mysqli_num_rows($result) > 0) {
    echo "<table border=1px solid black style=' border-collapse: collapse;' >";
    echo "<tr><th>ID</th><th>Reporter Name</th><th>Report Date</th><th>Report Time</th><th>Nearest City</th><th>District</th><th>Garbage Type</th><th>Priority Level</th><th>Garbage Location</th><th>Garbage Image</th><th>Action</th></tr>";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["reporter_name"] . "</td>";
        echo "<td>" . $row["report_date"] . "</td>";
        echo "<td>" . $row["report_time"] . "</td>";
        echo "<td>" . $row["nearest_city"] . "</td>";
        echo "<td>" . $row["district"] . "</td>";
        echo "<td>" . $row["garbage_type"] . "</td>";
        echo "<td>" . $row["priority_level"] . "</td>";
        echo "<td>" . $row["garbage_location"] . "</td>";
        //echo "<td><img src='uploads/" . $row["garbage_image"] . "'></td>";
        $status = $row['status'];
        if (!empty($status)) {
            $disable = 'disabled';
        } else {
            $disable = '';
        }
        echo "<td><form action='approve.php' method='post'>
        <input type='hidden' name='id' value='" . $row["id"] . "'>
        <input type='text' name='reason' placeholder='Reason' required $disable></br>
        <button type='submit' name='status' value='approve' onclick=\"document.getElementById('rejectBtn').disabled=true;\" $disable>Approve</button>
        <button type='submit' name='status' value='reject' id='rejectBtn' $disable>Reject</button>
        </form></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No garbage reports found.";
}

mysqli_close($conn);
?>