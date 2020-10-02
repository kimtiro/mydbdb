<?php
session_start();
include('includes/config.php');
error_reporting(0);
if(strlen($_SESSION['alogin'])==0)
    {   
header('location:home.php');
}
else{
  if(isset($_GET['del']))
      {
              mysqli_query($con,"delete from jobs where job_id = '".$_GET['job_id']."'");
                  $_SESSION['delmsg']="Course deleted !!";
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

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>

      <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  <style>
      #input{
        font-size: 15px;
      }
  </style>

  </head>
  <body>

  <?php include('includes/header.php');?>


    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
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
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Freelancer_Id</th>
                   <!--     <th>Deadline</th> -->
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>

                    <?php
                  //  $sql=mysqli_query($con,"select jobs.job_id as job_id, jobs.jobTitle as jobTitle,jobtype.jobtype as jobtype,qualification.qualification as qualification from jobs join jobtype on jobtype.jobtype_id=jobs.jobType join qualification on qualification.qualification_id=jobs.qualification  where jobs.employer_id = '".$_SESSION['employer_id']."' order by job_id desc");
                    $sql=mysqli_query($con,"select jobs.employer_id as employer_id, jobs.jobTitle,jobapplication.job_id as job_id, jobapplication.freelancer_id , jobapplication.subject as subject, jobapplication.message as message, jobapplication.contactinfo as contactinfo from jobapplication join jobs on jobs.job_id = jobapplication.job_id where jobs.employer_id = '".$_SESSION['employer_id']."' ");
              //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                   // $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    {
                    ?>

                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#"><?php echo htmlentities($row['jobTitle']);?></a></h5>
                          <div class="info">
                           <!-- <span class="office-location"><a href="#"><i data-feather="award"></i><?php echo htmlentities($row['qualification']);?></a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i><?php echo htmlentities($row['jobtype']);?></a></span>-->
                          </div>
                        </td>
                     
                        <td class="application"><a href="client-proposal-view.html"><?php echo htmlentities($row['freelancer_id']);?></a></td>
                <!--        <td class="deadline">Oct 31,  2020</td>-->
                    
                        <td class="status active">Active</td>
                        <td class="action">
                          <a href="#" class="preview" title="Preview"><i data-feather="eye"></i></a>
                       
                          <a href="employer-dashboard-edit-job.php?job_id=<?php echo $row['job_id']?>" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="employer-dashboard-manage-job.php?job_id=<?php echo $row['job_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')" class="remove" title="Delete"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      
                      <?php 
                    //  $cnt++;
                      } ?>
                    
                    </tbody>
                  </table>
                  <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>                
                  </div>
                </div>
              </div>
             <!--sidenav--> <?php include('includes/employer.sidenav.php');?>
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
<?php } ?>
