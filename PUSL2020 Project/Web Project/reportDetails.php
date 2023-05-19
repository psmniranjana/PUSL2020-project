<head>
	<title>About Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
		</script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
		integrity="sha512-7Vf/qaIuF+0sBLLzW0X9Ov2ZIVYbxTAvT/QsmwJiK/+vzwfhSAXPxp01ws2iWb1vpJv/F4Y0M3enEpP8iG81Cg=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	</script>

	<!-- Custom CSS -->
	<link rel="stylesheet" href="styles.css">

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


		/* Footer */
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#footer {
    background: #007b5e !important;
}

#footer h5 {
    padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color: #ffffff;
}

#footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}

#footer ul.social li {
    padding: 3px 0;
}

#footer ul.social li a i {
    margin-right: 5px;
    font-size: 25px;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}

#footer ul.social li:hover a i {
    font-size: 30px;
    margin-top: -10px;
}

#footer ul.social li a,
#footer ul.quick-links li a {
    color: #ffffff;
}

#footer ul.social li a:hover {
    color: #eeeeee;
}

#footer ul.quick-links li {
    padding: 3px 0;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}

#footer ul.quick-links li:hover {
    padding: 3px 0;
    margin-left: 5px;
    font-weight: 700;
}

#footer ul.quick-links li a i {
    margin-right: 5px;
}

#footer ul.quick-links li:hover a i {
    font-weight: 700;
}

@media (max-width:767px) {
    #footer h5 {
        padding-left: 0;
        border-left: transparent;
        padding-bottom: 0px;
        margin-bottom: 10px;
    }
}
	</style>
</head>


<nav class="navbar navbar-expand-lg fixed-top" style="font-size:19px; color:black;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="images/R.png" alt="Bootstrap" width="55" height="55">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportDetails.php">Map</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="About.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="reportDetails.php">Service</a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="Contac.php">Contac</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">

                    <button class="btn btn-outline-success" style="text-decoration:none;"><a
                            style=" text-decoration: none;" href="Registration.php"> Register</a></button>


                    <button class="btn btn-outline-success" style="margin-left:5px;"><a style=" text-decoration: none;"
                            href="Login.php">
                            Login</a></button>
                </form>
            </div>
        </div>
    </nav>

	<!-- Script for navbar shrink effect -->
	<script>
		$(window).scroll(function () {
			if ($(document).scrollTop() > 50) {
				$('.navbar').addClass('shrink');
			} else {
				$('.navbar').removeClass('shrink');
			}
		});
	</script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
		integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
		crossorigin="anonymous" referrerpolicy="no-referrer" />
	<div>

		<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">

			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/12.webp" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>"The greatest threat to our planet is the belief that someone else will save it." - Robert
							Swan</h5>

					</div>
				</div>
				<div class="carousel-item">
					<img src="images/6.webp" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>"The environment is where we all meet; where we all have a mutual interest; it is the one
							thing all of us share." - Lady Bird Johnson</h5>

					</div>
				</div>
				<div class="carousel-item">
					<img src="images/11.webp" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>"We are living on this planet as if we had another one to go to." - Terri Swearingen</h5>

					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
				data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
			</button>
		</div>

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




  <!-- Footer -->
  <section id="footer" style="margin-top:100px;">
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
                <div class="col" style="margin-right:50px; color:white;">
                    <h5 style="text-align:left;"> <img src="images/R.png" alt="Bootstrap" width="55" height="55"> &nbsp
                        Pure Planet</h5>
                    <p style="text-align:justify;">Pure Planet is an environment cleaning website that aims to promote
                        sustainable living and
                        reduce the impact of human activities on the environment.</p>
                </div>
                <div class="col" style="text-align:left;">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href="index.php"><i class="fa fa-angle-double-right"></i>Home</a></li>
                        <li><a href="About.php"><i class="fa fa-angle-double-right"></i>About</a></li>
                        <li><a href="faq.php"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
                        <li><a href="Videos.php"><i class="fa fa-angle-double-right"></i>Videos</a></li>
                    </ul>
                </div>
                <div class="col" style="text-align:left;">
                    <h5>Quick links</h5>
                    <ul class="list-unstyled quick-links">

                        <li><a href="Terms.php"><i class="fa fa-angle-double-right"></i>Terms & Conditions</a></li>
                        <li><a href="Contac.php"><i class="fa fa-angle-double-right"></i>Support</a></li>

                    </ul>
                </div>
                <div class="col" style="text-align:left;">
                    <h5>Contac us</h5>
                    <ul class="list-unstyled quick-links">
                        <li><a href=""><i class="fa-solid fa-phone"></i>&nbsp +94 1111111111</a></li>
                        <li><a href=""><i class="fa-solid fa-envelope"></i>&nbsp cmc@gmail.com</a></li>
                        <li><a href=""><i class="fa-solid fa-location-dot"></i>&nbsp Colombo 7</a></li>
                        <br>
                        <li class="list-inline-item"><a href="">
                                <i class="fa-brands fa-facebook"></i></a></li>

                        <li class="list-inline-item"><a href="">
                                <i class="fa-brands fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="">
                                <i class="fa-brands fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="" target="_blank"><i
                                    class="fa-brands fa-envelope"></i></a></li>

                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p>Pure Planet
                        is a
                        Registered Council Which is helpig for cleaning environment</p>
                    <p class="h6">© All right Reversed 2023.<a class="text-green ml-2" href="#" target="_blank">Pure
                            Planet</a></p>
                </div>

            </div>
        </div>
    </section>

