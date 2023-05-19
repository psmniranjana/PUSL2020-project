<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Contact Form</title>

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

  <style>
    .contact-form {
      width: 850px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f9f9f9;
      box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.2);
    }

    .contact-form label {
      font-weight: bold;
    }

    .contact-form .form-control {
      margin-bottom: 10px;
    }

    .contact-form textarea.form-control {
      resize: vertical;
    }

    .contact-form button[type="submit"] {
      margin-top: 10px;
      width: 250px;
      background-color: #3A9E1E;
      border: none;
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
<br><br>

  <div class="container">
    <h1 style="text-align:center;">Contact Us</h1>
    <div class="row">
      <div class="col">
      <br><br><br>
        <h3>Contact with the team</h3>

        <br><br>

        <p style="font-size:20px;"><i class="fa-solid fa-phone" style="color: #80ff80;"></i> &nbsp Phone 
          (+94)111111111</p>
        <p style="font-size:20px;"><i class="fa-solid fa-envelope" style="color: #80ff80;"></i> &nbsp Email 
          support@gmail.com</p>
        <p style="font-size:20px;"><i class="fa-solid fa-location-dot" style="color: #80ff80;"></i> &nbsp Location 
          Colombo 7</p>

        </col>
      </div>
      <div class="col">
        <br><br><br><br>
        <form action="contac-form.php" method="post" class="contact-form">
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea name="message" id="message" class="form-control" rows="5" placeholder="Enter your message"
              required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Leave a Message</button>
        </form>
      </div>

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


</body>

</html>