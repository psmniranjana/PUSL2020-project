<!DOCTYPE html>
<html>
<head>
	<title>Submit Form</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
?>
<div style="width:100%; height:100px; background-color:#5FAF49; color:white; font-weight:bold;"> <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>  <a  style="text-decoration:none; color:white;" href="index.php">Logout</a></div>
  <!-- display other content here -->
 
<br>
	<div class="container mt-5">
		<h1 class="mb-3">Submit Form</h1>
		<form action="save_article.php" method="POST" enctype="multipart/form-data">
			<div class="form-group">
				<label for="title">Title:</label>
				<input type="text" class="form-control" id="title" name="title">
			</div>
			<div class="form-group">
				<label for="description">Description:</label>
				<textarea class="form-control" id="description" name="description" rows="5"></textarea>
			</div>
			<div class="form-group">
				<label for="image">Image:</label>
				<input type="file" class="form-control-file" id="image" name="image">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
