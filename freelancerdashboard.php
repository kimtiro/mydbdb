<?php
session_start();
error_reporting(0);
include("includes/config.php");
if(strlen($_SESSION['freelancerlogin'])==0)
    {   
header('location:home.php');
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
   <!-- Header -->
   <?php include('includes/freelancerheader.php');?>
    <!-- Header End -->
 
    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidates Dashboard</h1>
              
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidates Dashboard</li>
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
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-section user-statistic-block">
                  <div class="user-statistic">
                    <i data-feather="pie-chart"></i>
                    <h3>132</h3>
                    <span>Companies Viewed</span>
                  </div>
                  <?php 
                    $sql=mysqli_query($con,"select jobs.job_id as job_id,count(freelancer_id) as total from jobapplication join jobs on jobs.job_id = jobapplication.job_id where jobapplication.freelancer_id ='".$_SESSION['freelancer_id']."'");
                    while($row=mysqli_fetch_array($sql))
                    {
                  ?>
                  <div class="user-statistic">
                    <i data-feather="briefcase"></i>
                    <h3><?php echo $row['total'] ; ?></h3>
                    <span>Applied Jobs</span>
                  </div>
                  <?php } ?>
                  <div class="user-statistic">
                    <i data-feather="heart"></i>
                    <h3>32</h3>
                    <span>Favourite Jobs</span>
                  </div>
                </div>
                <div class="dashboard-section dashboard-view-chart">
                  <canvas id="view-chart" width="400" height="200"></canvas>
                </div>
                <div class="dashboard-section dashboard-recent-activity">
                  <h4 class="title">Recent Activity</h4>
                  <div class="activity-list">
                    <i class="fas fa-bolt"></i>
                    <div class="content">
                      <h5>Your Resume Updated!</h5>
                      <span class="time">5 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-arrow-circle-down"></i>
                    <div class="content">
                      <h5>Someone downloaded your resume.</h5>
                      <span class="time">11 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-check-square"></i>
                    <div class="content">
                      <h5>You applied for Project Manager @homeland</h5>
                      <span class="time">11 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-check-square"></i>
                    <div class="content">
                      <h5>You applied for Project Manager @homeland</h5>
                      <span class="time">5 hours ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-user"></i>
                    <div class="content">
                      <h5>You changed password successfuly</h5>
                      <span class="time">2 days ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                  <div class="activity-list">
                    <i class="fas fa-heart"></i>
                    <div class="content">
                      <h5>Someone bookmarked you</h5>
                      <span class="time">3 days ago</span>
                    </div>
                    <div class="close-activity">
                      <i class="fas fa-times"></i>
                    </div>
                  </div>
                </div>
              </div>
      <!-- sidenav -->    <?php include('includes/freelancer.sidenav.php');?> <!-- sidenav --> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
  <?php include('includes/calltoaction.php');?>
    <!-- Call to Action End -->


    <!-- Footer -->
    <?php include('includes/footer.php');?>
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

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>
</html>