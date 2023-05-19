<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">



    <style>
        .img-fluid {width:200px;}
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php
                // Replace with your MySQL database details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cmc";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Retrieve data from MySQL database
                $sql = "SELECT title, description FROM article";
                $result = mysqli_query($conn, $sql);

                // Output data in Bootstrap cards
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div style="  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);  margin-top:40px;" >';
                        echo '<div style="font-size:20px; margin-bottom:10px;" >' . $row["title"] . '</div>';
                        echo '<div style="margin-right:150px; text-align:justify; margin-left:10px;">' . $row["description"] . '</div>';
                        echo '</div>';
                    }
                } else {
                    echo "No data found.";
                }

                mysqli_close($conn);
                ?>


            </div>
            <div class="col-md-6">
                <?php
                // Replace with your MySQL database details
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "cmc";

                // Create connection
                $conn = mysqli_connect($servername, $username, $password, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Retrieve images from MySQL database
                $sql = "SELECT image FROM article";
                $result = mysqli_query($conn, $sql);

                // Output images
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div style="margin-left:-160px; margin-top:130px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);">';
                        echo '<img src="' . $row["image"] . '" class="img-fluid">';
                        echo '</div>';
                    }
                } else {
                    echo "No images found.";
                }

                mysqli_close($conn);
                ?>




            </div>
        </div>
    </div>



</body>


</html>