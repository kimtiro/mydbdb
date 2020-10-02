<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(isset($_POST['submit']))
{
  $emailaddress=$_POST['emailaddress'];
  //$password=md5($_POST['password']);
  $password=$_POST['password'];
  $query=mysqli_query($con,"SELECT * FROM freelancer WHERE emailaddress='$emailaddress' and password='$password'");
  $num=mysqli_fetch_array($query);
if($num>0)
{
  $extra="freelancerdashboard.php ";//
  $_SESSION['freelancerlogin']=$_POST['emailaddress'];
  $_SESSION['freelancer_id']=$num['freelancer_id'];
  $host=$_SERVER['HTTP_HOST'];
  $uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  header("location:http://$host$uri/$extra");
  exit();
}
else
{
  $_SESSION['errmsg']="Invalid username or password";
  $extra="freelancerlogin.php";
  $host  = $_SERVER['HTTP_HOST'];
  $uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
  header("location:http://$host$uri/$extra");
  exit();
}
}
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Oficiona</title>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- External Css -->
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/et-line.css" />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />
    <link rel="stylesheet" href="assets/css/plyr.css" />
    <link rel="stylesheet" href="assets/css/flag.css" />
    <link rel="stylesheet" href="assets/css/slick.css" /> 
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/jquery.nstSlider.min.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/icon-114x114.png">


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <header class="header-2 access-page-nav">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="home.php"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="top-nav">
                <a href="EmployerRegistration.php" class="account-page-link">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="padding-top-90 padding-bottom-90 access-page-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="access-form">
              <div class="form-header">
                <h5><i data-feather="user"></i>Freelancer Login</h5>
              </div>
              <form action="#" method="post">
                <div class="form-group">
                <span style="color:red;" ><?php echo htmlentities($_SESSION['errmsg']); ?><?php echo htmlentities($_SESSION['errmsg']="");?></span>  
                <input type="emailaddress" name="emailaddress" placeholder="Email Address" class="form-control">
                </div>
                <div class="form-group">
                  <input type="password" name="password" placeholder="Password" class="form-control">
                </div>
                <div class="more-option">
                  <div class="mt-0 terms">
                    <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                    <label for="radio-4">
                      <span class="dot"></span> Remember Me
                    </label>
                  </div>
                  <a href="#">Forget Password?</a>
                </div>
                <button class="button primary-bg btn-block"  type="submit" name="submit" id="submit">Login</button>
              </form>
              <div class="shortcut-login">
                <span>Or connect with</span>
                <div class="buttons">
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                </div>
                <p>Don't have an account? <a href="register.html">Register</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.nstSlider.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/visible.js"></script>
    <script src="assets/js/jquery.countTo.js"></script>
    <script src="assets/js/chart.js"></script>
    <script src="assets/js/plyr.js"></script>
    <script src="assets/js/tinymce.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/jquery.ajaxchimp.min.js"></script>

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>
</html>