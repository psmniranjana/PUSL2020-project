<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



	<!-- Custom CSS -->


	<style>

	</style>
</head>



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
		<h1>Welcome,
			<?php echo $_SESSION['username']; ?>!
		</h1> <a style="text-decoration:none; color:white;" href="index.php">Logout</a>
	</div>


 
<div style="width:100%; height:50px; background-color:#BDDEB4;"><p style="text-align:center; font-weight:bold; font-size:20px;">Note - If  map is not loading refresh the page few time.</p></div>
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

// Execute the SQL SELECT statement to get the location data
$sql = "SELECT * FROM garbage_reports WHERE status = 'Approved' ";
$result = mysqli_query($conn, $sql);

// Create an array to store the latitude, longitude, and reporter name of each location
$locations = array();

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0 ) {
  // Loop through each row and store the location in the array
  while ($row = mysqli_fetch_assoc($result)) {
    $location = $row["garbage_location"];
    $location_parts = explode(",", $location);
    $latitude = trim($location_parts[0]);
    $longitude = trim($location_parts[1]);
    $reporter_name = $row["nearest_city"];
    $locations[] = array("latitude" => $latitude, "longitude" => $longitude, "nearest_city" => $reporter_name);
  }
}

mysqli_close($conn);
?>

<!-- Display the Bing Map on the page using JavaScript -->
<div id='map' style='height:900px;width:75%; margin-left:300px; '></div>
<script type='text/javascript'
    src='http://www.bing.com/api/maps/mapcontrol?key=Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'>
</script>
<script type='text/javascript'>
var map = new Microsoft.Maps.Map('#map', {
    credentials: 'Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'
});

// Loop through the locations array and create a pushpin for each location
<?php foreach ($locations as $location): ?>
var pushpin = new Microsoft.Maps.Pushpin(new Microsoft.Maps.Location(<?php echo $location["latitude"] ?>,
    <?php echo $location["longitude"] ?>));

// Add an event listener to the pushpin to show a pop-up menu when clicked
Microsoft.Maps.Events.addHandler(pushpin, 'click', function(e) {
    var menu = new Microsoft.Maps.Infobox(e.target.getLocation(), {
        title: '<?php echo $location["nearest_city"] ?>'
    });
    menu.setMap(map);
});

map.entities.push(pushpin);
<?php endforeach; ?>

// Set the map view to show all the pushpins
map.setView({
    bounds: Microsoft.Maps.LocationRect.fromLocations(
        <?php foreach ($locations as $location): ?> new Microsoft.Maps.Location(
            <?php echo $location["latitude"] ?>, <?php echo $location["longitude"] ?>),
        <?php endforeach; ?>
    )
});
</script>



<table style="margin-top:-900px; height:100px; width:200px;">
    <tr>
        <td>
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

        // Select data from the database
        $sql = "SELECT * FROM garbage_reports";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
          // Output data of each row
          while ($row = mysqli_fetch_assoc($result)) {
            echo "Location Name : " . $row["nearest_city"] . "<br>";
            echo "Priority Level : " . $row["priority_level"] . "<br>";
                      echo '<img src="uploads/' . $row["garbage_image"] . '" alt="Garbage Image" width="50" height="50">' . "<br>";
            echo "<hr>";
          }
        } else {
          echo "0 results";
        }

        mysqli_close($conn);

        ?>
        </td>
        <td></td>
    </tr>
</table>




 