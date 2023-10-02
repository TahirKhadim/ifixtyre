<?php


include("connection.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;





//Load Composer's autoloader
require 'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>I Fix Tyre - Conatct Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">


  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- call svg Styling -->
  <style>
    @import url("https://fonts.googleapis.com/css?family=Roboto");

    @-webkit-keyframes come-in {
      0% {
        -webkit-transform: translatey(100px);
        transform: translatey(100px);
        opacity: 0;
      }

      30% {
        -webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
      }

      70% {
        -webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
      }

      100% {
        -webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
        opacity: 1;
      }
    }

    @keyframes come-in {
      0% {
        -webkit-transform: translatey(100px);
        transform: translatey(100px);
        opacity: 0;
      }

      30% {
        -webkit-transform: translateX(-50px) scale(0.4);
        transform: translateX(-50px) scale(0.4);
      }

      70% {
        -webkit-transform: translateX(0px) scale(1.2);
        transform: translateX(0px) scale(1.2);
      }

      100% {
        -webkit-transform: translatey(0px) scale(1);
        transform: translatey(0px) scale(1);
        opacity: 1;
      }
    }




    .floating-container {
      z-index: 100;
      position: fixed;
      width: 100px;
      height: 100px;
      bottom: 0;
      right: 0;
      margin: 35px 25px;
    }

    .floating-container:hover {
      height: 300px;
    }

    .floating-container:hover .floating-button {
      box-shadow: 0 10px 25px rgba(40, 40, 41, 0.6);
      -webkit-transform: translatey(5px);
      transform: translatey(5px);
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .floating-container:hover .element-container .float-element:nth-child(1) {
      -webkit-animation: come-in 0.4s forwards 0.2s;
      animation: come-in 0.4s forwards 0.2s;
    }

    .floating-container:hover .element-container .float-element:nth-child(2) {
      -webkit-animation: come-in 0.4s forwards 0.4s;
      animation: come-in 0.4s forwards 0.4s;
    }

    .floating-container:hover .element-container .float-element:nth-child(3) {
      -webkit-animation: come-in 0.4s forwards 0.6s;
      animation: come-in 0.4s forwards 0.6s;
    }

    .floating-container .floating-button {
      position: absolute;
      width: 70px;
      height: 70px;
      background: #08ec2b;
      bottom: 0;
      border: 3px solid rgb(249, 249, 249);
      border-radius: 50%;
      left: 0;
      right: 0;
      margin: auto;
      color: white;
      line-height: 65px;
      text-align: center;
      font-size: 23px;
      z-index: 100;

      cursor: pointer;
      -webkit-transition: all 0.3s;
      transition: all 0.3s;
    }

    .floating-container .float-element {
      position: relative;
      display: block;
      border-radius: 50%;

      width: 50px;
      height: 50px;
      margin: 15px auto;
      color: white;
      font-weight: 500;
      text-align: center;
      line-height: 50px;
      z-index: 0;
      opacity: 0;
      -webkit-transform: translateY(100px);
      transform: translateY(100px);
    }

    .floating-container .float-element .material-icons {
      vertical-align: middle;
      font-size: 16px;
    }

    .floating-container .float-element:nth-child(1) {
      background: #ffd903;

    }

    .dbox {
      display: grid;
    }

    textarea {
      float: left;
      width: 100%;
      height: auto;
    }



    .nav-item h4,
    .btn {
      margin-right: 2vh;
      color: white;
    }
  </style>
  <!--  End call svg Styling -->

</head>

<body>

  <div class="wrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 d-flex align-items-center">
          <p class="mb-0 phone pl-md-2">
            <a href="Tel:+447916312844" class="mr-2"><span class="fa fa-phone mr-1"></span> +447916312844</a>
            <a href="#"><span class="fa fa-paper-plane mr-1"></span> contact@ifixtyre.com</a>
          </p>
        </div>
        <div class="col-md-6 d-flex justify-content-md-end">
          <div class="social-media">
            <p class="mb-0 d-flex">
              <a href="" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                    class="sr-only">Facebook</i></span></a>

              <a href="Surrey_chauffeur" class="d-flex align-items-center justify-content-center"><span
                  class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>

            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <img src="images/logo.png" alt="logo" class="img-fluid" width="100px" height="100px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <h4>For Emergency</h4>
          </li>
          <div class="btn btn-warning"><a href="tel:+447916312844">+447916312844</a></div>

          <li class="nav-item">
            <a class="nav-link " aria-current="page" href="index.html">Home</a>
          </li>

          <li class="nav-item "><a href="mobiletyrefitting.html" class="nav-link">Mobile Tyre
              Fitting</a></li>

          <li class="nav-item "><a href="breakdown.html" class="nav-link">BreakDown</a></li>
          <li class="nav-item "><a href="jumpstart.html" class="nav-link">Jumpstart</a></li>

          <li class="nav-item"><a href="services.html" class="nav-link">Services</a></li>
          <li class="nav-item active"><a href="contact.php" class="nav-link">Contact Us</a></li>

        </ul>

      </div>
    </div>
  </nav>
  <!-- END nav -->
  <section class="hero-wrap hero-wrap-2" style="background-image: url('pics/contact.jpg'); height: 100vh;"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center text-center ">
        <div class="col-md-12 ftco-animate ">
          <h1 class="mb-0 bread mt-5"
            style="color: #ffc436; text-shadow: 5px 5px 8px #070707; font-weight: bold; font-size: 12vh;">Contact US
          </h1>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5">
          <h2 class="heading-section"></h2>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="wrapper">

          </div>



          <div class="container">
            <div class="row mb-5">
              <div class="col-md-3">
                <div class="dbox w-100 text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-map-marker"></span>
                  </div>
                  <div class="text">
                    <p><span>Address:</span>10-16 tiller road, canary wharf,
                      E14 8PX</p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="dbox w-100 text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-phone"></span>
                  </div>
                  <div class="text">
                    <p><span>Phone:</span> <a href="tel://1234567920">+447916312844</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="dbox w-100 text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-paper-plane"></span>
                  </div>
                  <div class="text">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">gmail</a></p>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="dbox w-100 text-center">
                  <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fa fa-globe"></span>
                  </div>
                  <div class="text">
                    <p><span>Website</span> <a href="#">info@ifixtyre.com</a></p>
                  </div>
                </div>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-lg-6 col-sm-12 mt-3">
                    <form action=" " method="POST">
                      <h2 class="mt-3">We're Ready, Let's Talk.</h2>
                      <div class="mb-2">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name">

                      </div>
                      <div class="mb-2">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                          name="email">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                      <div class="mb-2">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" class="form-control" id="name" aria-describedby="emailHelp" name="phone">

                      </div>
                      <div class="mb-2">
                        <label for="model" class="form-label">Car Make & Model</label>
                        <input type="model" class="form-control" id="model" name="car">
                      </div>

                      <div class="mb-2">
                        <label for="model" class="form-label">Message</label>
                        <textarea name="comments" id="para1">

</textarea>
                      </div>

                      <button name="register" class="btn btn-success mt-3">Send Message</button>
                    </form>
                  </div>
                  <div class="col-lg-6 col-sm-12 mt-5 pt-4">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.927559908779!2d-0.027370024580980177!3d51.496196811523205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602c0671641a1%3A0x266a92454825f03e!2s10%2C%2016%20Tiller%20Rd%2C%20London%20E14%208PX%2C%20UK!5e0!3m2!1sen!2s!4v1695897928631!5m2!1sen!2s"
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    </div>
  </section>



  <!-- End Call SVG -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <h2 class="footer-heading">TyreFix</h2>
          <p>"Revive, Refuel, and Roll - Your TyreFix Roadside Savior".</p>
          <ul class="ftco-footer-social p-0">
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><span
                  class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><span
                  class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><span
                  class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
        </div>
        <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0">
          <h2 class="footer-heading">Quick Links</h2>
          <ul class="list-unstyled">
            <li><a href="index.html" class="py-2 d-block">Home</a></li>
            <li><a href="services.html" class="py-2 d-block">Services</a></li>
            <li><a href="contact.php" class="py-2 d-block">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-md-0">
          <h2 class="footer-heading">Where We Are?</h2>
          <div class="block-23 mb-3">
            <ul>
              <li><span class="icon fa fa-map"></span><span class="text"> 10-16 tiller road, canary wharf, E14
                  8PX</span></li>
              <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+447916312844</span></a></li>
              <li><a href="#"><span class="icon fa fa-paper-plane"></span><span
                    class="text">info@ifixtyre.com</span></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-12 text-center">
          <p class="copyright">
            Copyright &copy;
            <script>document.write(new Date().getFullYear());</script> I Fix Tyre All rights reserved
          </p>
        </div>
      </div>
    </div>
  </footer>




  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>



</body>

</html>
<?php

if (isset($_POST["register"])) {
  $name = mysqli_real_escape_string($con, $_POST['name']);
  $email = mysqli_real_escape_string($con, $_POST['email']);
  $phone = mysqli_real_escape_string($con, $_POST['phone']);
  $car = mysqli_real_escape_string($con, $_POST['car']);
  $comments = $_POST['comments'];


  $query = "INSERT INTO tyre1(`name`, `email`, `phone`, `model`, `message` ) VALUES ('$name','$email','$phone','$car', '$comments')";
  $data = mysqli_query($con, $query);

  if ($data) {
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
      //Server settings

      $mail->isSMTP(); //Send using SMTP
      $mail->Host = 'smtp.gmail.com'; //Set the SMTP server to send through
      $mail->SMTPAuth = true; //Enable SMTP authentication
      $mail->Username = 'tahirbinkhadim@gmail.com'; //SMTP username
      $mail->Password = 'qsnawvqidgmptzne'; //SMTP password
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
      $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

      //Recipients
      $mail->setFrom('tahirbinkhadim@gmail.com');
      $mail->addAddress('momistheboss10@gmail.com');


      //Content
      $mail->isHTML(true); //Set email format to HTML
      $mail->Subject = 'Customer data';
      $mail->Body = "<b>New customer send his data kindly check</b> 
            name:$name <br> email is:$email  <br> phone no: $phone <br> car modedl is: $car <br> message: $comments";
      $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

      $mail->send();

    } catch (Exception $e) {
      echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
    echo "<script> alert('Thank You for Contacting Us')</script>";
  } else {
    // echo " Something went wrong";
  }
} else {
  // echo "data not saved";
}