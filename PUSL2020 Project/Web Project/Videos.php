<html>

<head>
	<title></title>

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


</head>


<style>
	body {
		font-family: 'Roboto', sans-serif;
	}

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


	.trash-container {
		position: relative;
		width: 230px;
		height: 270px;
		transition: all 0.8s ease-in-out;
	}

	.trash-container:hover .trash-lid {
		transform: rotate(20deg);
	}

	.trash-container:hover .trash-bin {
		transform: translateY(20%);
	}

	.trash-lid {
		position: absolute;
		top: 0;
		left: 0;
		right: 0;
		margin: auto;
		width: 80%;
		height: 20%;
		border: 1px solid #333;
		border-top: none;
		border-radius: 50% 50% 0 0;
		transform-origin: center bottom;
		transition: all 0.3s ease-in-out;
		background: linear-gradient(to bottom, #E0EAF2, #E0EAF2);
	}

	.trash-bin {
		position: absolute;
		bottom: 0;
		left: 0;
		right: 0;
		margin: auto;
		width: 80%;
		height: 80%;

		border-top: none;
		border-radius: 0 0 30% 30%;
		overflow: hidden;
		transition: all 0.3s ease-in-out;
		background: linear-gradient(to bottom, #E0EAF2, #E0EAF2);

	}

	.trash-image {
		position: absolute;
		margin-left: 50px;
		margin-top: 100px;
		height: 160px;
		width: 170px;
		transform: translate(-50%, -50%);

		border-radius: 50% 50% 50% 50%;
		object-fit: cover;
	}

	.button {
		position: absolute;
		bottom: 70px;
		left: 50%;
		transform: translateX(-50%);
		width: 60px;
		height: 60px;
		border: 3px solid #333;
		border-radius: 50%;
		box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.3);
		display: flex;
		justify-content: center;
		align-items: center;
		cursor: pointer;
		transition: all 0.3s ease-in-out;

	}

	.button:hover {
		border-color: #eee;
	}

	.arrow {
		position: relative;
		width: 0;
		height: 0;
		border-style: solid;
		border-width: 10px 0 10px 20px;
		border-color: transparent transparent transparent #333;
	}




	.image-container {
		position: relative;
		width: 600px;
		height: 480px;
	}

	.main-image {
		display: block;
		width: 100%;
		height: 480px;
		object-fit: cover;
	}

	.overlay {
		position: absolute;
		top: 0;
		left: 0;
		width: 100%;
		height: 100%;
		opacity: 0;
		transition: opacity 0.3s ease-in-out;
	}

	.image-container:hover .overlay {
		opacity: 1;
	}



	.parallax {
		background: url('images/16.webp') repeat fixed 100%;
		background-size: cover;
		color: aliceblue;

	}


	.parallax-inner {
		padding-top: 20%;
		padding-bottom: 20%;
	}


	footer {
		background-color: #f9f9f9;
		padding: 20px;
		text-align: center;
	}

	.social-icons {
		display: flex;
		justify-content: center;
		margin-bottom: 10px;
	}

	.social-icons a {
		display: inline-block;
		margin: 0 10px;
		color: #555;
		font-size: 24px;
		transition: color 0.3s;
	}

	.social-icons a:hover {
		color: #000;
	}

	.fab {
		font-size: inherit;
	}



	.dropdown:hover .dropdown-menu {
		display: block;
		width: calc(100% + 1rem);
		margin-left: -0.5rem;
		margin-right: -0.5rem;
	}

	.dropdown-toggle::after {
		display: none;
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

<body>


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
						<a class="nav-link active" aria-current="page" href="#">Home</a>
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
					<img src="images/1.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>"The greatest threat to our planet is the belief that someone else will save it." - Robert
							Swan</h5>

					</div>
				</div>
				<div class="carousel-item">
					<img src="images/2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>"The environment is where we all meet; where we all have a mutual interest; it is the one
							thing all of us share." - Lady Bird Johnson</h5>

					</div>
				</div>
				<div class="carousel-item">
					<img src="images/3.jpg" class="d-block w-100" alt="...">
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



	<div class="container" style="margin-top:100px;">



		<div class="row">
			<h2 style="text-align:center; font-size:30px;"><span style="font-size:45px;">R</span>ewrite the future on World </h2>
			<br><br><br><br>
			<div class="col" >
				<video controls>
					<source src="videos/Rewrite the future on World Clean Air Day 2022.mp4" type="video/mp4">
					Your browser does not support the video tag.
				</video>
			</div>
		</div>
		
		
	</div>









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



	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->

</body>

</html>