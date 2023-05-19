<!DOCTYPE html>
<html>

<head>
    <title>Collecting Staff User List</title>
    <style>
    table,
    th,
    td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
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
?>
<div style="width:100%; height:100px; background-color:#5FAF49; color:white; font-weight:bold;"> <h1>Welcome, <?php echo $_SESSION['username']; ?>!</h1>  <a  style="text-decoration:none; color:white;" href="index.php">Logout</a></div>
  <!-- display other content here -->
 
<br>
    <h1>User List</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <!-- PHP code to fetch users from MySQL database and display them in the table -->
            <?php
                // Replace the database credentials with your own
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cmc";

                // Create connection
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }

                // Check if the edit form has been submitted
                if (isset($_POST['update'])) {
                    $id = $_POST['id'];
                    $name = $_POST['name'];
                    $email = $_POST['email'];

                    // Update the user data in the database
                    $sql = "UPDATE my_table SET name='$name', email='$email' WHERE id=$id";
                    if ($conn->query($sql) === TRUE) {
                        echo "User updated successfully";
                    } else {
                        echo "Error updating user: " . $conn->error;
                    }
                }

                // Check if the delete form has been submitted
                if (isset($_POST['delete'])) {
                    $id = $_POST['id'];

                    // Delete the user from the database
                    $sql = "DELETE FROM my_table WHERE id=$id";
                    if ($conn->query($sql) === TRUE) {
                        echo "User deleted successfully";
                    } else {
                        echo "Error deleting user: " . $conn->error;
                    }
                }

                // SQL query to fetch users from the database
                $sql = "SELECT * FROM my_table";
                $result = $conn->query($sql);

                // Display each user in the table
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>";
                    echo '<form method="post">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<input type="text" name="name" value="' . $row["name"] . '">';
                    echo '<input type="email" name="email" value="' . $row["email"] . '">';
                    echo '<input type="submit" name="update" value="Update">';
                    echo '</form>';
                    echo '<form method="post">';
                    echo '<input type="hidden" name="id" value="' . $row["id"] . '">';
                    echo '<input type="submit" name="delete" value="Delete">';
                    echo '</form>';
                    echo "</td>";
                    echo "</tr>";
                  }
                } else {
                  echo"<tr><td colspan='4'>No users found</td></tr>";
				} 			$conn->close();
				?>
		
				</tbody>
			</table>
		
		
		
			<script>
			// Get the modal
			var editUserModal = document.getElementById("editUserModal");
		
			// Get the <span> element that closes the modal
			var closeEditUserModal = document.getElementsByClassName("close")[0];
		
			// When the user clicks on the button, open the modal and fill in the form fields with user data
			function editUser(id, name, email) {
				document.getElementById("editUserId").value = id;
				document.getElementById("editUserName").value = name;
				document.getElementById("editUserEmail").value = email;
				editUserModal.style.display = "block";
			}
		
			// When the user clicks on <span> (x), close the modal
			closeEditUserModal.onclick = function() {
				editUserModal.style.display = "none";
			}
		
			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
				if (event.target == editUserModal) {
					editUserModal.style.display = "none";
				}
			}
		
			// Confirmation prompt for delete button
			var deleteButtons = document.getElementsByName("delete");
			for (var i = 0; i < deleteButtons.length; i++) {
				deleteButtons[i].addEventListener("click", function(event) {
					var confirmDelete = confirm("Are you sure you want to delete this user?");
					if (!confirmDelete) {
						event.preventDefault();
					}
				});
			}
			</script>
		</body>
		</html>		



		<!DOCTYPE html>
<html>
<head>
	<title>Insert Data into MySQL using PHP</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){
			$("#insert_button").click(function(){
				$("#insert_form").toggle();
			});
		});
	</script>
</head>
<body>
	<button id="insert_button">Insert Data</button>
	<form id="insert_form" style="display: none;" method="post" action="insert.php">
		Name: <input type="text" name="name"><br>
		Email: <input type="text" name="email"><br>
		<input type="submit" value="Save">
	</form>
</body>
</html>
