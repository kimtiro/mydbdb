<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['freelancerlogin'])==0)
{   
header('location:home.php');
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

    <header class="header-2">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index.html"><img src="images/logo-2.png" alt=""></a>
              </div>
              <div class="header-top-toggler">
                <div class="header-top-toggler-button"></div>
              </div>
              <div class="top-nav">
                <div class="dropdown header-top-notification">
                  <a href="#" class="notification-button">Notification</a>
                  <div class="notification-card">
                    <div class="notification-head">
                      <span>Notifications</span>
                      <a href="#">Mark all as read</a>
                    </div>
                    <div class="notification-body">
                      <a href="home-2.html" class="notification-list">
                        <i class="fas fa-bolt"></i>
                        <p>Your Resume Updated!</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-check-square"></i>
                        <p>You applied for Project Manager <span>@homeland</span></p>
                        <span class="time">11 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-user"></i>
                        <p>You changed password</p>
                        <span class="time">5 hours ago</span>
                      </a>
                      <a href="#" class="notification-list">
                        <i class="fas fa-arrow-circle-down"></i>
                        <p>Someone downloaded resume</p>
                        <span class="time">11 hours ago</span>
                      </a>
                    </div>
                    <div class="notification-footer">
                      <a href="#">See all notification</a>
                    </div>
                  </div>
                </div>
                <div class="dropdown header-top-account">
                  <a href="#" class="account-button">My Account</a>
                  <div class="account-card">
                    <div class="header-top-account-info">
                      <a href="#" class="account-thumb">
                        <img src="images/account/thumb-1.jpg" class="img-fluid" alt="">
                      </a>
                      <div class="account-body">
                        <h5><a href="#">Robert Chavez</a></h5>
                        <span class="mail">chavez@domain.com</span>
                      </div>
                    </div>
                    <ul class="account-item-list">
                      <li><a href="#"><span class="ti-user"></span>Account</a></li>
                      <li><a href="#"><span class="ti-settings"></span>Settings</a></li>
                      <li><a href="#"><span class="ti-power-off"></span>Log Out</a></li>
                    </ul>
                  </div>
                </div>
                <select class="selectpicker select-language" data-width="fit">
                  <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                  <option  data-content='<span class="flag-icon flag-icon-mx"></span> Español'>Español</option>
                </select>
              </div>
            </div>
            <nav class="navbar navbar-expand-lg cp-nav-2">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                  <li class="menu-item active"><a title="Home" href="home-1.html">Home</a></li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Jobs</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="job-listing.html">Job Listing</a></li>
                      <li class="menu-item"><a  href="job-listing-with-map.html">Job Listing With Map</a></li>
                      <li class="menu-item"><a  href="job-details.html">Job Details</a></li>
                      <!-- <li class="menu-item"><a  href="post-job.html">Post Job</a></li> -->
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidates</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="candidate.html">Candidate Listing</a></li>
                      <li class="menu-item"><a  href="candidate-details.html">Candidate Details</a></li>
                      <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employers</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a  href="employer-listing.html">Employer Listing</a></li>
                      <li class="menu-item"><a  href="employer-details.html">Employer Details</a></li>
                      <li class="menu-item"><a  href="employer-dashboard-post-job.html">Post a Job</a></li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Dashboard</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Candidate Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a  href="dashboard.html">Dashboard</a></li>
                          <li class="menu-item"><a  href="dashboard-edit-profile.html">Edit Profile</a></li>
                          <li class="menu-item"><a  href="add-resume.html">Add Resume</a></li>
                          <li class="menu-item"><a  href="resume.html">Resume</a></li>
                          <li class="menu-item"><a  href="edit-resume.html">Edit Resume</a></li>
                          <li class="menu-item"><a  href="dashboard-bookmark.html">Bookmarked</a></li>
                          <li class="menu-item"><a  href="dashboard-applied.html">Applied</a></li>
                          <li class="menu-item"><a  href="dashboard-pricing.html">Pricing</a></li>
                          <li class="menu-item"><a  href="dashboard-message.html">Message</a></li>
                          <li class="menu-item"><a  href="dashboard-alert.html">Alert</a></li>
                        </ul>
                      </li>
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Employer Dashboard</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="employer-dashboard.html">Employer Dashboard</a></li>
                          <li class="menu-item"><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-candidate.html">Manage Candidate</a></li>
                          <li class="menu-item"><a href="employer-dashboard-manage-job.html">Manage Job</a></li>
                          <li class="menu-item"><a href="employer-dashboard-message.html">Dashboard Message</a></li>
                          <li class="menu-item"><a href="employer-dashboard-pricing.html">Dashboard Pricing</a></li>
                          <li class="menu-item"><a href="employer-dashboard-post-job.html">Post Job</a></li>
                        </ul>
                      </li>
                    </ul>
                  </li>
                  <li class="menu-item dropdown">
                    <a title="" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">Pages</a>
                    <ul  class="dropdown-menu">
                      <li class="menu-item"><a href="about-us.html">About Us</a></li>
                      <li class="menu-item"><a href="how-it-work.html">How It Works</a></li>
                      <li class="menu-item"><a href="pricing.html">Pricing Plan</a></li>
                      <li class="menu-item"><a href="faq.html">FAQ</a></li>
                      <li class="menu-item dropdown">
                        <a href="#" data-toggle="dropdown"  class="dropdown-toggle" aria-haspopup="true" aria-expanded="false">News &amp; Advices</a>
                        <ul class="dropdown-menu">
                          <li class="menu-item"><a href="blog.html">News</a></li>
                          <li class="menu-item"><a href="blog-grid.html">News Grid</a></li>
                          <li class="menu-item"><a href="blog-details.html">News Details</a></li>
                        </ul>
                      </li>
                      <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                      <li class="menu-item"><a href="payment-complete.html">Payment Complete</a></li>
                      <li class="menu-item"><a href="invoice.html">Invoice</a></li>
                      <li class="menu-item"><a href="terms-and-condition.html">Terms And Condition</a></li>
                      <li class="menu-item"><a href="404.html">404 Page</a></li>
                      <li class="menu-item"><a href="login.html">Login</a></li>
                      <li class="menu-item"><a href="register.html">Register</a></li>
                    </ul>
                  </li>
                  <li class="menu-item"><a href="contact.html">Contact Us</a></li>
                  <li class="menu-item post-job"><a href="post-job.html"><i class="fas fa-plus"></i>Post a Job</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>

    <!-- Candidates Details -->
    <div class="alice-bg padding-top-60 section-padding-bottom">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="candidate-details">
              <div class="title-and-info">
                <div class="title">
                  <div class="thumb">
                    <img src="images/candidate/thumb-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="title-body">
                    <h4>Micheal N. Taylor</h4>
                    <div class="info">
                      <span class="candidate-designation"><i data-feather="check-square"></i>ios Developer</span>
                      <span class="candidate-location"><i data-feather="map-pin"></i>Los Angeles</span>
                    </div>
                  </div>
                </div>
                <div class="download-resume">
                  <a href="#">Download CV <i data-feather="download"></i></a>
                </div>
              </div>
              <div class="skill-and-profile">
                <div class="skill">
                  <label>Skills:</label>
                  <a href="#">Design</a>
                  <a href="#">Illustration</a>
                  <a href="#">iOS</a>
                </div>
                <div class="social-profile">
                  <label>Social:</label>
                  <a href="#"><i class="fab fa-facebook-f"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                  <a href="#"><i class="fab fa-google-plus"></i></a>
                  <a href="#"><i class="fab fa-linkedin-in"></i></a>
                  <a href="#"><i class="fab fa-pinterest-p"></i></a>
                  <a href="#"><i class="fab fa-behance"></i></a>
                  <a href="#"><i class="fab fa-dribbble"></i></a>
                  <a href="#"><i class="fab fa-github"></i></a>
                </div>
              </div>
              <div class="details-information section-padding-60">
                <div class="row">
                  <div class="col-xl-7 col-lg-8">
                    <div class="about-details details-section">
                      <h4><i data-feather="align-left"></i>About Me</h4>
                      <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including.</p>
                      <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable </p>
                    </div>
                    <div class="edication-background details-section">
                      <h4><i data-feather="book"></i>Education Background</h4>
                      <div class="education-label">
                        <span class="study-year">2018 - Present</span>
                        <h5>Masters in Software Engineering<span>@ Engineering University</span></h5>
                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                      </div>
                      <div class="education-label">
                        <span class="study-year">2014 - 2018</span>
                        <h5>Diploma in Graphics Design<span>@ Graphic Arts Institute</span></h5>
                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                      </div>
                      <div class="education-label">
                        <span class="study-year">2008 - 2014</span>
                        <h5>Secondary School Certificate<span>@  Engineering High School</span></h5>
                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                      </div>
                    </div>
                    <div class="experience details-section">
                      <h4><i data-feather="briefcase"></i>Work Experiance</h4>
                      <div class="experience-section">
                        <span class="service-year">2016 - Present</span>
                        <h5>Lead UI/UX Designer<span>@ Codepassengers LTD</span></h5>
                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                      </div>
                      <div class="experience-section">
                        <span class="service-year">2012 - 2016</span>
                        <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                        <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                      </div>
                    </div>
                    <div class="professonal-skill details-section">
                      <h4><i data-feather="feather"></i>Professional Skill</h4>
                      <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting</p>
                      <div class="progress-group">
                        <div class="progress-item">
                          <div class="progress-head">
                            <p class="progress-on">Photoshop</p>
                          </div>
                          <div class="progress-body">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                            </div>
                            <p class="progress-to">70%</p>
                          </div>
                        </div>
                        <div class="progress-item">
                          <div class="progress-head">
                            <p class="progress-on">HTML/CSS</p>
                          </div>
                          <div class="progress-body">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                            </div>
                            <p class="progress-to">90%</p>
                          </div>
                        </div>
                        <div class="progress-item">
                          <div class="progress-head">
                            <p class="progress-on">JavaScript</p>
                          </div>
                          <div class="progress-body">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                            </div>
                            <p class="progress-to">74%</p>
                          </div>
                        </div>
                        <div class="progress-item">
                          <div class="progress-head">
                            <p class="progress-on">PHP</p>
                          </div>
                          <div class="progress-body">
                            <div class="progress">
                              <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                            </div>
                            <p class="progress-to">86%</p>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="special-qualification details-section">
                      <h4><i data-feather="gift"></i>Special Qualification</h4>
                      <ul>
                        <li>5 years+ experience designing and building products.</li>
                        <li>Skilled at any Kind Design Tools.</li>
                        <li>Passion for people-centered design, solid intuition.</li>
                        <li>Hard Worker & Quick Lerner.</li>
                      </ul>
                    </div>
                    <div class="portfolio details-section">
                      <h4><i data-feather="gift"></i>Portfolio</h4>
                      <div class="portfolio-slider owl-carousel">
                        <div class="portfolio-item">
                          <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                          <div class="overlay">
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="link"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-item">
                          <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
                          <div class="overlay">
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="link"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-item">
                          <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                          <div class="overlay">
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="link"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-item">
                          <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                          <div class="overlay">
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="link"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-item">
                          <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                          <div class="overlay">
                            <a href="#"><i data-feather="eye"></i></a>
                            <a href="#"><i data-feather="link"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 offset-xl-1 col-lg-4">
                    <div class="information-and-contact">
                      <div class="information">
                        <h4>Information</h4>
                        <ul>
                          <li><span>Category:</span> Design & Creative</li>
                          <li><span>Location:</span> Los Angeles</li>
                          <li><span>Status:</span> Full-time</li>
                          <li><span>Experience:</span> 3 year(s)</li>
                          <li><span>Salary:</span> $32k - $36k</li>
                          <li><span>Gender:</span> Male</li>
                          <li><span>Age:</span> 24 Year(s)</li>
                          <li><span>Qualification:</span> Gradute</li>
                        </ul>
                      </div>
                      <div class="buttons">
                        <a href="#" class="button contact-button" data-toggle="modal" data-target="#exampleModal">Contact Me</a>
                        <a href="#" class="button cover-download"><i data-feather="download"></i>Cover Letter</a>
                        <a href="#" class="button contact-download"><i data-feather="download"></i>Contact</a>
                      </div>
                      <!-- Modal -->
                      <div class="modal fade contact-form-modal" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-body">
                              <h4><i data-feather="edit"></i>Contact Me</h4>
                              <form action="#">
                                <div class="form-group">
                                  <input type="text" class="form-control" placeholder="Your Name">
                                </div>
                                <div class="form-group">
                                  <input type="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="form-group">
                                  <textarea class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                <button class="button">Submit</button>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xl-7 col-lg-8">
                  <div class="personal-information details-section">
                    <h4><i data-feather="user-plus"></i>Personal Deatils</h4>
                    <ul>
                      <li><span>Full Name:</span> Micheal N. Taylor</li>
                      <li><span>Father's Name:</span> Howard Armour</li>
                      <li><span>Mother's Name:</span> Megan Higbee</li>
                      <li><span>Date of Birth:</span> 22/08/1992</li>
                      <li><span>Nationality:</span> American </li>
                      <li><span>Sex:</span> Male</li>
                      <li><span>Address:</span> 2018 Nelm Street, Beltsville, VA 20705</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Candidates Details End -->

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
                <a href="add-resume.html" class="button">Add Resume</a>
                <span>Or</span>
                <a href="post-job.html" class="button">Post A Job</a>
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

    <script src="js/custom.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>
</html>