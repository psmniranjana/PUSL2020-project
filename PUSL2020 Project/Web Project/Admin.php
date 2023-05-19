<!DOCTYPE html>
<html>

<head>
	<title>My Website</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style>
		.card:hover {
			box-shadow: 0 0 10px rgba(0, 0, 0, .5);
		}
	</style>
</head>

<body>

	<?php
	// start the session
	session_start();

	// check if the user is logged in
	if (!isset($_SESSION['username'])) {
		// redirect to the login page
		header('Location: Login.php');
		exit;
	}

	// check if the user is an admin
	if ($_SESSION['role'] !== 'admin') {
		// redirect to the homepage
		header('Location: index.php');
		exit;
	}
	?>

	<!-- add the code you provided here -->
	<div class="container mt-5">
		<div class="row">
			<div class="col">
				<div class="card" style="height:300px;">
					<div class="card-body">
						<a class="nav-link" href="Captain_Account.php">
							<h5 class="card-title">Manage Green Captain Accounts</h5>
						</a>

					</div>
					<img src="images/icons8-user-144.png" style="width:150px; margin-left:15px; margin-bottom:40px;">
				</div>
			</div>
			<div class="col">
				<div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title"><a href="Collecting_Staff.php"> Manage Collecting Staff Accounts</a></h5>

					</div>
					<img src="images/icons8-user-144.png" style="width:150px; margin-left:15px; margin-bottom:40px;">
				</div>
			</div>
			<div class="col">
				<div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title"><a href="GTF_Account.php"> Manage GTF Member Accounts</a></h5>

					</div>
					<img src="images/icons8-user-144.png" style="width:150px; margin-left:15px; margin-bottom:40px;">
				</div>
			</div>
			<div class="col">
				<div class="card" style="height:300px;">
					<div class="card-body">
						<h5 class="card-title"><a href="Add_Article.php">Post articles</a></h5>

					</div>
					<img src="images/icons8-article-96.png" style="width:150px; margin-left:15px; margin-bottom:40px;">
				</div>
			</div>

		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
