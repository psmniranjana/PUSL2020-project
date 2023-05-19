<!DOCTYPE html>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
</script>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="https://kit.fontawesome.com/your-kit-id.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-7Vf/qaIuF+0sBLLzW0X9Ov2ZIVYbxTAvT/QsmwJiK/+vzwfhSAXPxp01ws2iWb1vpJv/F4Y0M3enEpP8iG81Cg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<head>
    <meta charset="utf-8">
    <title>Page Title</title>


    <style>
    .navbar-toggler {
        border: none !important;
    }

    .navbar-toggler-icon {

        font-size: 0.8rem;
        /* Adjust to your liking */
    }

    .navbar-toggler-icon::before {
        content: '';
        display: block;
        width: 20px;
        height: 2px;
        background-color: black;
        margin-top: 7px;
    }

    .navbar-toggler-icon::after {
        content: '';
        display: block;
        width: 20px;
        height: 2px;
        background-color: black;
        margin-top: 2px;
    }

    .navbar-toggler.collapsed .navbar-toggler-icon::before {
        transform: rotate(45deg);
    }

    .navbar-toggler.collapsed .navbar-toggler-icon::after {
        transform: rotate(-45deg);
    }

    .navbar {
        transition: transform 0.5s ease-out;
        transform-origin: top;
        background-color: transparent;
    }

    .navbar.shrink {
        background-color: #fff;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
        transform: scaleY(1.2);
    }
    </style>

</head>

<body>
   <div style="margin-bottom:100px;">

   <nav class="navbar navbar-expand-lg fixed-top" >
        <div class="container-fluid" >
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportDetails.php">News</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex" role="search">

                    <button class="btn btn-outline-success"><a href="Registration.php"> Register</a></button>


                    <button class="btn btn-outline-success" style="margin-left:5px;"><a href="Login.php">
                            Login</a></button>
                </form>
            </div>
        </div>
    </nav>
   </div>

    <!-- Script for navbar shrink effect -->
    <script>
    $(window).scroll(function() {
        if ($(document).scrollTop() > 50) {
            $('.navbar').addClass('shrink');
        } else {
            $('.navbar').removeClass('shrink');
        }
    });
    </script>
    <main>
        <section>
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
$sql = "SELECT garbage_location, reporter_name FROM garbage_reports";
$result = mysqli_query($conn, $sql);

// Create an array to store the latitude, longitude, and reporter name of each location
$locations = array();

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
  // Loop through each row and store the location in the array
  while ($row = mysqli_fetch_assoc($result)) {
    $location = $row["garbage_location"];
    $location_parts = explode(",", $location);
    $latitude = trim($location_parts[0]);
    $longitude = trim($location_parts[1]);
    $reporter_name = $row["reporter_name"];
    $locations[] = array("latitude" => $latitude, "longitude" => $longitude, "reporter_name" => $reporter_name);
  }
}

mysqli_close($conn);
?>

            <!-- Display the Bing Map on the page using JavaScript -->
            <div id='map' style='height:900px;width:82%; margin-left:300px; '></div>
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
                    title: '<?php echo $location["reporter_name"] ?>'
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
            echo "Nearest City : " . $row["nearest_city"] . "<br>";
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
        </section>
    </main>
    <footer>
        <p>Copyright &copy; Year</p>
    </footer>
</body>

</html>