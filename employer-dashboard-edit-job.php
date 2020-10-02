<?php
session_start();
include('includes/config.php');
if(strlen($_SESSION['alogin'])==0)
{   
  header('location:home.php');
}
else{
$job_id=intval($_GET['job_id']);
if(isset($_POST['submit']))
{
  $employer_id=$_SESSION['employer_id'];
  $jobTitle=$_POST['jobTitle'];
  $jobCategory=$_POST['jobCategory'];
  $jobType=$_POST['jobType'];
  $salary=$_POST['salary'];
  $experience=$_POST['experience'];
  $qualification=$_POST['qualification'];
  $gender=$_POST['gender'];
  $vacancy=$_POST['vacancy'];
  $deadline=$_POST['deadline'];
  $jobDescription=$_POST['jobDescription'];
  $Responsibilities=$_POST['Responsibilities'];
  $education=$_POST['education'];
  //$password=md5($_POST['password']);
  //$ret=mysqli_query($con,"insert into jobs(employer_id,jobTitle,jobCategory,jobType,salary,experience,qualification,gender,vacancy,deadline,jobDescription,Responsibilities,education,OtherBenefits) values('$employer_id','$jobTitle','$jobCategory','$jobType','$salary','$experience','$qualification','$gender','$vacancy','$deadline','$jobDescription','$jobDescription','$Responsibilities','$education','$OtherBenefits')");
  $ret=mysqli_query($con,"update jobs set jobTitle='$jobTitle',jobCategory='$jobCategory',jobType='$jobType',experience='$experience',salary='$salary',qualification='$qualification',gender='$gender',vacancy='$vacancy',deadline='$deadline',jobDescription='$jobDescription',Responsibilities='$Responsibilities',education='$education' where job_id='$job_id'");
  if($ret)
    {
    $_SESSION['msg']="Student Registered Successfully !!";
    //$extra="employer-dashboard-manage-job.php";
    echo "<script> window.location.assign('employer-dashboard-manage-job.php'); </script>";
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

  <?php include('includes/header.php');?>

   <!-- Breadcrumb start-->
   <?php include('includes/employer.breadcrumb.php');?>

    <!-- Breadcrumb End -->

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <form action="#" class="dashboard-form job-post-form" method="post" enctype="multipart/form-data">
                    <?php
                     $ret=mysqli_query($con,"select jobs.job_id as job_id,category.category_id,category.category as category,jobs.jobTitle as jobTitle from jobs join category on category.category_id=jobs.jobCategory where jobs.job_id = '$job_id'order by job_id");
                  //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                      // $cnt=1;
                      while($row=mysqli_fetch_array($ret))
                      {
                    ?>
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Post A Job</h4>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label">Job Title</label>
                      <div class="col-md-9">
                        <input type="jobTitle"  id="jobTitle"  value="<?php echo htmlentities($row['jobTitle']);?>" name="jobTitle" class="form-control" placeholder="Your job title here" required>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Summary</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control" name="jobCategory" required="required">
                              <option selected="selected" value="<?php echo htmlentities($row['category_id']);?>"><?php echo htmlentities($row['category']);?></option>
                                <?php 
                                  $sql=mysqli_query($con,"select * from category");
                                  while($row=mysqli_fetch_array($sql))
                                  {
                                ?>
                                 <option value="<?php echo htmlentities($row['category_id']);?>"><?php echo htmlentities($row['category']);?></option>
                                 <?php } ?>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <?php } ?>
                          <?php
                          $ret=mysqli_query($con,"select jobs.job_id as job_id,jobtype.jobtype_id,jobtype.jobtype as jobtype from jobs join jobtype on jobtype.jobtype_id=jobs.jobType where jobs.job_id = '$job_id'");
                        //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                            // $cnt=1;
                            while($row=mysqli_fetch_array($ret))
                            {
                          ?>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control" name="jobType" required="required">
                              <option selected="selected" value="<?php echo htmlentities($row['jobtype_id']);?>"><?php echo htmlentities($row['jobtype']);?></option>
                                <?php 
                                  $sql=mysqli_query($con,"select * from jobtype");
                                  while($row=mysqli_fetch_array($sql))
                                  {
                                ?>
                                <option value="<?php echo htmlentities($row['jobtype_id']);?>"><?php echo htmlentities($row['jobtype']);?></option>
                                 <?php } ?>
                                 
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <?php } ?>
                          <?php
                          $ret=mysqli_query($con,"select jobs.job_id as job_id,experience.experience_id,experience.experience as experience from jobs join experience on experience.experience_id=jobs.experience where jobs.job_id = '$job_id'");
                        //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                            // $cnt=1;
                            while($row=mysqli_fetch_array($ret))
                            {
                          ?>
                        <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control"  type="experience"  id="experience"  name="experience"  required>
                              <option selected="selected" value="<?php echo htmlentities($row['experience_id']);?>"><?php echo htmlentities($row['experience']);?></option>
                                <?php 
                                  $sql=mysqli_query($con,"select * from experience");
                                  while($row=mysqli_fetch_array($sql))
                                  {
                                ?>
                                <option value="<?php echo htmlentities($row['experience_id']);?>"><?php echo htmlentities($row['experience']);?></option>
                                 <?php } ?>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                        <?php } ?>
                        <?php                                                     
                          $ret=mysqli_query($con,"select jobs.job_id as job_id,salaryrange.salaryrange_id,salaryrange.salaryrange as salaryrange from jobs join salaryrange on salaryrange.salaryrange_id=jobs.salary where jobs.job_id = '$job_id'");
                        //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                            // $cnt=1;
                            while($row=mysqli_fetch_array($ret))
                            {
                        ?>
                       <div class="col-md-6">
                          <div class="form-group">
                                <select class="form-control" type="salary"  id="salary"  name="salary"  required>
                                <option selected="selected" value="<?php echo htmlentities($row['salaryrange_id']);?>"><?php echo htmlentities($row['salaryrange']);?></option>
                                    <?php 
                                      $sql=mysqli_query($con,"select * from salaryrange");
                                      while($row=mysqli_fetch_array($sql))
                                      {
                                    ?>
                                    <option value="<?php echo htmlentities($row['salaryrange_id']);?>"><?php echo htmlentities($row['salaryrange']);?></option>
                                    <?php } ?>
                                  </select>
                                <i class="fa fa-caret-down"></i>
                              </div>
                          </div>
                          <?php } ?>
                          <?php
                          $ret=mysqli_query($con,"select qualification.qualification_id,qualification.qualification as qualification from jobs join qualification on qualification.qualification_id=jobs.qualification where jobs.job_id = '$job_id'");
                        //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                            // $cnt=1;
                            while($row=mysqli_fetch_array($ret))
                            {
                          ?>
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control" type="qualification"  id="qualification"  name="qualification"   required>
                              <option selected="selected" value="<?php echo htmlentities($row['qualification_id']);?>"><?php echo htmlentities($row['qualification']);?></option>
                                  <?php 
                                        $sql=mysqli_query($con,"select * from qualification");
                                        while($row=mysqli_fetch_array($sql))
                                        {
                                  ?>
                                
                                  <option value="<?php echo htmlentities($row['qualification_id']);?>"><?php echo htmlentities($row['qualification']);?></option>
                                  <?php } ?>
                              </select>
                              <i class="fa fa-caret-down"></i>
                              </div>
                            </div>
                            <?php } ?>
                            <?php
                            $ret=mysqli_query($con,"select jobs.job_id as job_id,gender.gender_id ,gender.gender as gender from jobs join gender on gender.gender_id=jobs.gender where jobs.job_id = '$job_id'");
                          //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                              // $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {
                            ?>
                            <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control"  type="gender"  id="gender"  name="gender" required>
                              <option selected="selected" value="<?php echo htmlentities($row['gender_id']);?>"><?php echo htmlentities($row['gender']);?></option>
                                <?php 
                                        $sql=mysqli_query($con,"select * from gender");
                                        while($row=mysqli_fetch_array($sql))
                                        {
                                  ?>
                                  <option value="<?php echo htmlentities($row['gender_id']);?>"><?php echo htmlentities($row['gender']);?></option>
                                  <?php } ?>
                              </select>
                              <i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <?php } ?>
                          <?php
                            $ret=mysqli_query($con,"select * from jobs where jobs.job_id = '$job_id'");
                          //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                              // <?php echo htmlentities($row['deadline'])? > $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {
                            ?>
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="vacancy"  id="vacancy"  name="vacancy" class="form-control" value=" <?php echo htmlentities($row['vacancy']);?>" required>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group datepicker">
                              <input type="date"  id="deadline" value="<?php echo htmlentities(date($row['deadline']))?>" name="deadline" data-date="ddasd" class="form-control">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Job Description</label>
                      <div class="col-md-9">
                        <textarea id="mytextarea"  type="jobDescription"  id="jobDescription"  name="jobDescription" class="tinymce-editor tinymce-editor-1" placeholder="Description text here"><?php echo htmlentities($row['jobDescription'])?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Responsibilities</label>
                      <div class="col-md-9">
                        <textarea id="mytextarea2"  type="Responsibilities"  id="Responsibilities"  name="Responsibilities"  class="tinymce-editor tinymce-editor-2" placeholder="Responsibilities" ><?php echo htmlentities($row['Responsibilities'])?></textarea>
                      </div>
                    </div>
                    <div class="row">
                      <label class="col-md-3 col-form-label">Education</label>
                      <div class="col-md-9">
                        <textarea id="mytextarea3"  type="education"  id="education"  name="education" class="tinymce-editor tinymce-editor-2" placeholder="Education" ><?php echo htmlentities($row['education'])?></textarea>
                      </div>
                    </div>
                    <?php } ?>
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button" name="submit">Update Job</button>
                      </div>
                    </div>
                
                  </div>
                </form>
              </div>
                <!-- sidenav -->    <?php include('includes/employer.sidenav.php');?>
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
    <script src="assets/js/html5-simple-date-input-polyfill.min.js"></script>

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>

  </body>
</html>
<?php } ?>