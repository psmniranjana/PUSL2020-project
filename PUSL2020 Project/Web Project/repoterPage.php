<!DOCTYPE html>
<html>

<head>
    <title>Garbage Report Form</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type='text/javascript'
        src='https://www.bing.com/api/maps/mapcontrol?key=Asrv8gVdJwcl8jytLXXSmUSurjAd43Tlk8NqzEJmEPhIVaamH_846VJLoHm2YXNc'>
        </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>

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
    <script type='text/javascript'>
        var map;

        function showMap() {
            map = new Microsoft.Maps.Map('#myMap', {
                center: new Microsoft.Maps.Location(7.8731, 80.7718),
                zoom: 8
            });
            Microsoft.Maps.Events.addHandler(map, 'click', addPin);
        }

        function addPin(e) {
            var loc = e.location;
            var pin = new Microsoft.Maps.Pushpin(loc, {
                title: 'Garbage Location',
                subTitle: 'Click to remove',
                color: 'red'
            });
            map.entities.clear();
            map.entities.push(pin);
            document.getElementById('garbage-location').value = loc.latitude + ', ' + loc.longitude;
        }
    </script>
</head>

<body>
    <h1>Garbage Report Form</h1>
    <br>
    <form action="repoterInfo.php" method="post" enctype="multipart/form-data">
        <div class="container-fluid">
            <div class="row">

                <div class="col">

                </div>

                <table>
                    <tr>
                        <th> <label for="reporter-name">Reporter Name:</label></th>
                        <th> <label for="report-date">Report Date:</label></th>
                        <th> <label for="report-time">Report Time:</label></th>
                        <th> <label for="nearest-city">Location Name:</label></th>
                        <th> <label for="district">District:</label></th>
                        <th> <label for="garbage-type">Garbage Type:</label></th>
                        <th> <label for="priority-level">Priority Level:</label></th>
                    </tr>

                    <tr>
                        <td> <input type="text" id="reporter-name" name="reporter-name" required> </td>

                        <td> <input type="date" id="report-date" name="report-date" required></td>
                        <td> <input type="time" id="report-time" name="report-time" required></td>
                        <td> <input type="text" id="nearest-city" name="nearest-city" required></td>
                        <td> <input type="text" id="district" name="district" required></td>
                        <td> <input type="text" id="garbage-type" name="garbage-type" required></td>
                        <td>
                            <select id="priority-level" name="priority-level" required>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </td>
                    </tr>

                </table>


                <div class="col"></div>

            </div>
        </div>

        <label for="garbage-image">Garbage Image:</label><br>
        <input type="file" id="garbage-image" name="garbage-image" accept="image/*" required><br><br>

        <label for="garbage-location">Garbage Location:</label><br>
        <input type="text" id="garbage-location" name="garbage-location" readonly>
        <button class="btn btn-primary rounded-0 " type="button" onclick="showMap()" style="background-color:#5FAF49;">Select Location</button> &nbsp &nbsp <button class="btn btn-primary rounded-0 " type="submit" style="background-color:#5FAF49;">Submit Report</button>
        <div id="myMap" style="height:400px"></div>

        

       
    </form>
</body>

</html>