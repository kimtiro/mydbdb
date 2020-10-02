<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['freelancerlogin'])==0)
{   
header('location:home.php');
}
if(isset($_POST['submit']))
{
$freelancer_id = $_SESSION['freelancer_id'];
$category=$_POST['category'];
$location=$_POST['location'];
$status=$_POST['status'];
$experience=$_POST['experience'];
$salaryrange=$_POST['salaryrange'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$qualification=$_POST['qualification'];
$education_background=$_POST['education_background'];
$work_experience=$_POST['work_experience'];
$professional_skill=$_POST['professional_skill'];
$special_qualification=$_POST['special_qualification'];
$birthdate=$_POST['birthdate'];
$nationality=$_POST['nationality'];
//$password=md5($_POST['password']);
//$ret=mysqli_query($con,"insert into jobs(employer_id,jobTitle,jobCategory,jobType,salary,experience,qualification,gender,vacancy,deadline,jobDescription,Responsibilities,education,OtherBenefits) values('$employer_id','$jobTitle','$jobCategory','$jobType','$salary','$experience','$qualification','$gender','$vacancy','$deadline','$jobDescription','$jobDescription','$Responsibilities','$education','$OtherBenefits')");
$ret=mysqli_query($con,"update resume  set category='$category', location='$location', status='$status', experience='$experience' ,
salaryrange = '$salaryrange', gender = '$gender', age = '$age' ,qualification = '$qualification' ,education_background = '$education_background' ,
work_experience = '$work_experience' ,professional_skill = '$professional_skill' ,special_qualification = '$special_qualification' ,
birthdate = '$birthdate' ,nationality = '$nationality'   where freelancer_id='".$_SESSION['freelancer_id']."'");
if($ret)
{
$_SESSION['msg']="Student Registered Successfully !!";
//$extra="employer-dashboard-manage-job.php";
//echo "<script> window.location.assign('employer-dashboard-manage-job.php'); </script>";
}
else
{
  $_SESSION['msg']="Error : User not Register!! Please use another email address";
}
}

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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
    <link rel="stylesheet" href="assets/css/html5-simple-date-input-polyfill.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="dashboard/css/dashboard.css">
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

  <?php include('includes/freelancerheader.php');?>
    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Add Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Resume</li>
                </ol>
              </nav>
            </div>
          </div>
          <div class="col-md-6">
            <div class="breadcrumb-form">
              <form action="#">
                <input type="text" placeholder="Enter Keywords">
                <button><i data-feather="search"></i></button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="post-container">
              <div class="post-content-wrapper">
                <form action="#" class="job-post-form" method="post">
                  <div class="basic-info-input">
                    <h4><i data-feather="plus-circle"></i>Edit Resume</h4>
                    <?php 
                                        $sql=mysqli_query($con,"select * from resume where freelancer_id = '".$_SESSION['freelancer_id']."'");
                                        while($row=mysqli_fetch_array($sql))
                                        {
                                  ?>
                   
                    <div id="information" class="row">
                      <label class="col-md-3 col-form-label">Information</label>
                      <div class="col-md-9">
                      <div class="row">
                      <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="category" class="form-control" placeholder="  Category" value="<?php echo htmlentities($row['category']);?>"required>
                            </div>
                          </div>
                    
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="status" class="form-control" placeholder=" Job Type" value="<?php echo htmlentities($row['status']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="experience" class="form-control" placeholder="  Experience" value="<?php echo htmlentities($row['experience']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="salaryrange" class="form-control" placeholder="  Salary Range" value="<?php echo htmlentities($row['salaryrange']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="qualification" class="form-control" placeholder="  qualification" value="<?php echo htmlentities($row['qualification']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="gender" class="form-control" placeholder="  gender" value="<?php echo htmlentities($row['gender']);?>"required>
                            </div>
                          </div>
                         
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="age" class="form-control" placeholder="  Age" value="<?php echo htmlentities($row['age']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="nationality" class="form-control" placeholder="  Nationality" value="<?php echo htmlentities($row['nationality']);?>"required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="gender"  name="location" class="form-control" placeholder="  Location" value="<?php echo htmlentities($row['location']);?>" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                          <label class="col-md-3 col-form-label">  </label>
                          </div>
                          <div class="col-md-6">
                          <label class="col-md-3 col-form-label">Birthday</label>
                          </div>
                          <div class="col-md-6">

                            <div class="form-group datepicker">
                              <input type="date"  id="deadline" name="birthdate" value="<?php echo htmlentities(date($row['birthdate']))?>"  class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="about" class="row">
                      <label class="col-md-3 col-form-label">Education Background</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" name ="education_background" placeholder="Description text here"><?php echo htmlentities($row['education_background']);?></textarea>
                      </div>
                    </div>
                    <div id="about" class="row">
                      <label class="col-md-3 col-form-label">Work Experience</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" name="work_experience" placeholder="Description text here"><?php echo htmlentities($row['work_experience']);?></textarea>
                      </div>
                    </div>
                    <div id="about" class="row">
                      <label class="col-md-3 col-form-label">Professional Skill</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" name="professional_skill" placeholder="Description text here"><?php echo htmlentities($row['professional_skill']);?></textarea>
                      </div>
                    </div>
                    <div id="about" class="row">
                      <label class="col-md-3 col-form-label">Special Qualification</label>
                      <div class="col-md-9">
                        <textarea class="tinymce-editor-1" name="special_qualification" placeholder="Description text here"><?php echo htmlentities($row['special_qualification']);?></textarea>
                      </div>
                    </div>
                   
                    <div class="row">
                      <div class="col-md-9 offset-md-3">
                        <div class="form-group mt-0 terms">
                          <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                          <label for="radio-4">
                            <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button" name="submit">Update Resume</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
               <!-- sidenav -->    <?php include('includes/freelancer.sidenav.php');?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
              </div>
              <div class="call-to-action-button">
                <a href="#" class="button">Add Resume</a>
                <span>Or</span>
                <a href="#" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

    <!-- Footer -->
    <footer class="footer-bg">
      <div class="footer-top border-bottom section-padding-top padding-bottom-40">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <div class="footer-logo">
                <a href="#">
                  <img src="images/footer-logo.png" class="img-fluid" alt="">
                </a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="footer-social">
                <ul class="social-icons">
                  <li><a href="#"><i data-feather="facebook"></i></a></li>
                  <li><a href="#"><i data-feather="twitter"></i></a></li>
                  <li><a href="#"><i data-feather="linkedin"></i></a></li>
                  <li><a href="#"><i data-feather="instagram"></i></a></li>
                  <li><a href="#"><i data-feather="youtube"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-widget-wrapper padding-bottom-60 padding-top-80">
        <div class="container">
          <div class="row">
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Information</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Job Seekers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Career Counseling</a></li>
                    <li><a href="#">My Oficiona</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Video Guides</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-sm-6">
              <div class="footer-widget footer-shortcut-link">
                <h4>Employers</h4>
                <div class="widget-inner">
                  <ul>
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">Products/Service</a></li>
                    <li><a href="#">Post a Job</a></li>
                    <li><a href="#">FAQ</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-5 offset-lg-1 col-sm-6">
              <div class="footer-widget footer-newsletter">
                <h4>Newsletter</h4>
                <p>Get e-mail updates about our latest news and Special offers.</p>
                <form action="#" class="newsletter-form form-inline">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email address...">
                  </div>
                  <button class="btn button primary-bg">Submit<i class="fas fa-caret-right"></i></button>
                  <p class="newsletter-error">0 - Please enter a value</p>
                  <p class="newsletter-success">Thank you for subscribing!</p>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-bottom-area">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="footer-bottom border-top">
                <div class="row">
                  <div class="col-xl-4 col-lg-5 order-lg-2">
                    <div class="footer-app-download">
                      <a href="#" class="apple-app">Apple Store</a>
                      <a href="#" class="android-app">Google Play</a>
                    </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 order-lg-1">
                    <p class="copyright-text">Copyright <a href="#">Oficiona</a> 2020, All right reserved</p>
                  </div>
                  <div class="col-xl-4 col-lg-3 order-lg-3">
                    <div class="back-to-top">
                      <a href="#">Back to top<i class="fas fa-angle-up"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer End -->

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
    <script src="assets/js/html5-simple-date-input-polyfill.min.js"></script>

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>

  </body>
</html>