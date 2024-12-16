<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['rq'])) {
    header("Location: recover_1.php");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `hospitals` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>RED LIVES - Reset Password</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <!-- <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Pogo Slider CSS -->
    <link rel="stylesheet" href="css/pogo-slider.min.css">
  <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">    
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
   
</head>
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

  
  
                       <!------------------------- TOP BAR -------------------------->
  <div class="main-top">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="left-top">
            
            
          </div>
        </div>
        <div class="col-lg-6">
          <div class="wel-nots">
            <p>Welcome to Our Blood Bank and Donation Management System!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
                           <!----------------------- End top bar -------------------------->
  
      <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

                                        <!--------------------------- HEADER------------------------------>
  <header class="top-header">
    <nav class="navbar header-nav navbar-expand-lg">
            <div class="container">
        <a href="index.php"><p style="font-size: 30px; color: red;">RED LIVES</p></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-wd" aria-controls="navbar-wd" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbar-wd">
                    <ul class="navbar-nav">
                        <li><a class="nav-link active" href="#home">Home</a></li>
                        <li><a class="nav-link" href="#about">About Us</a></li>
                        <li><a class="nav-link" href="#services">Services</a></li>
            <li><a class="nav-link" href="#appointment">Appointment</a></li>
                        <li><a class="nav-link" href="#gallery">Gallery</a></li>
            <li><a class="nav-link" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
  </header>
                               <!-------------------------------- End header -------------------------------->
  
                         <!---------------------------------------- BANNER ----------------------------------->
  <div class="ulockd-home-slider">
    <div class="container-fluid">
      <div class="row">
        <div class="pogoSlider" id="js-main-slider">
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-01.jpeg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>Welcome to RED LIVES</h1>
                <p>A platform where blood donors can easily volunteer to give blood and patients can request for blood.</p>
                <a href="#contact" class="btn">Contact Us</a>
              </div>
            </div>
          </div>
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-02.jpg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>We are Expert in The Field of Blood Donation</h1>
                <p>Our system has the ability to keep blood records and reports.</p>
                <a href="#appointment" class="btn">Appointment</a>
              </div>
            </div>
          </div>
          <div class="pogoSlider-slide" data-transition="fade" data-duration="1500" style="background-image:url(images/slider-03.jpg);">
            <div class="lbox-caption pogoSlider-slide-element">
              <div class="lbox-details">
                <h1>Thank you for working with us!</h1>
                <p>Ready blood donors and patients that need blood can register within the system for appointments and the suggested hospitals can be alerted on their side and they can coordinate the appointment schedules</p>
                <a href="#contact" class="btn">Contact Us</a>
              </div>
            </div>
            
          </div>
        </div><!-- .pogoSlider -->
      </div>
    </div>
  </div>
                          <!------------------------------- End Banner ----------------------------->
  <div class="container">
<div class="row">
        <div class="col-lg-12">
          <div class="title-box">
            <h2>Forgot Password ? </h2>
            <p>Kindly Answer the Password Recovery Question to proceed.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12 col-xs-12">
          <div class="contact-block">
          <form method="POST" action="find_answer.php">
            <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" readonly class="form-control" value="<?php echo $row['Recovery_Question']; ?>">
                <!-- <div class="help-block with-errors"></div> -->
              </div>                                 
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="ra" required class="form-control" placeholder="Recovery Answer">
                <!-- <div class="help-block with-errors"></div> -->
              </div>                                 
            </div>
              <div class="submit-button text-center">
                <button class="btn btn-common" name="submit" id="submit" type="submit">Submit</button>
               
              </div>
            </div>            
          </form>
          </div>
        </div>
  </div>
</div>

                              <!------------------------- CONTACT --------------------------------->
  <div id="contact" class="contact-box">
    <div class="container">
  <div id="contact" class="contact-box">
    <div class="container">
      
      <script type="text/javascript">
        
                function myFunction() {
          var x =
          document.getElementById('password');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }
  


      </script>

        <div class="col-lg-12 col-xs-12">
          <div class="left-contact">
            <h2>Contact Us</h2>
            <div class="media cont-line">
              <div class="media-left icon-b">
                <i class="fa fa-location-arrow" aria-hidden="true"></i>
              </div>
              <div class="media-body dit-right">
                <h4>Address</h4>
                <p>Nairobi, Kenya</p>
              </div>
            </div>
            
            <div class="media cont-line">
              <div class="media-left icon-b">
                <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
              </div>
              <div class="media-body dit-right">
                <h4>Phone Number</h4>
                <a href="#">+254 797 722930</a><br>
              </div>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </div>
</div>
                                       <!----------------------- End Contact ----------------------->
  
  
                               <!---------------------------- FOOTER ------------------------------->
  <footer class="footer-box">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p class="footer-company-name">All Rights Reserved. &copy; 2022 <a href="#">RED LIVES</a> Design By : Eann Murimi (139118)</p>
        </div>
      </div>
    </div>
  </footer>
                             <!------------------------- End Footer ------------------------------------>
  
  <a href="#" id="scroll-to-top" class="new-btn-d br-2"><i class="fa fa-angle-up"></i></a>

  <!-- ALL JS FILES -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
  <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.pogo-slider.min.js"></script> 
  <script src="js/slider-index.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/TweenMax.min.js"></script>
  <script src="js/main.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
  <script src="js/isotope.min.js"></script> 
  <script src="js/images-loded.min.js"></script>  
    <script src="js/custom.js"></script>
</body>
</html>