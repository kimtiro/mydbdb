<?php
  session_start();
  include('includes/config.php');
  $upload_dir = 'images/employer/';
  if(strlen($_SESSION['alogin'])==0)
  {   
  header('location:home.php');
  }

  if(isset($_POST['save'])){
    $companyname=$_POST['companyname'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $category=$_POST['category'];
    $aboutus=$_POST['aboutus'];
    $videolink=$_POST['videolink'];
    //$imagesource=$_POST['imagesource'];
    
 //   $ret=mysqli_query($con,"update employer_profile set  companyname='$companyname', phone='$phone' , address =' $address' 
  //  , category='$category', aboutus='$aboutus' , videolink='$videolink' where emailaddress='".$_SESSION['alogin']."'");
  $ret=mysqli_query($con,"update employer_profile, employer set  companyname='$companyname', phone='$phone' , address =' $address' 
   , category='$category', aboutus='$aboutus' , videolink='$videolink' where employer_profile.employer_id='".$_SESSION['employer_id']."'");
    
    if($ret)
    {
    $_SESSION['msg']="Updated Successfully !!";
    }
    else
    {
      $_SESSION['msg']="Error : Course not Updated";
    }
  }
  if(isset($_POST['submit'])){
    $image = $_FILES['image']['name'];
    move_uploaded_file($_FILES["image"]["tmp_name"],"images/employer/".$_FILES["image"]["name"]);
    //$imagesource=$_POST['imagesource'];
    $ret=mysqli_query($con,"update employer_profile set image='$image' where employer_profile.employer_id='".$_SESSION['employer_id']."'");
    
    if($ret)
    {
    $_SESSION['msg']="Course Updated Successfully !!";
    }
    else
    {
      $_SESSION['msg']="Error : Course not Updated";
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
              <form action="#" >
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
                <form action="#" class="dashboard-form" method="post" enctype="multipart/form-data">
         
                  <div class="dashboard-section upload-profile-photo">

                  <?php $sql=mysqli_query($con,"select * from employer_profile where employer_id='".$_SESSION['employer_id']."'");
                    $cnt=1;
                    while($row=mysqli_fetch_array($sql))
                    { ?>
                    <div class="update-photo">
                  
                      <!--<img class="image" src="dashboard/images/company-logo.png" alt="">-->
                      <?php if($row['image']==""){ ?>
                      <img src="images/employer/noimage.png" width="200" height="200"><?php } else {?>
                      <img src="images/employer/<?php echo htmlentities($row['image']);?>" width="200" height="200">
                      <?php } ?>
                  
                    </div>
                  
                    <div class="file-upload">            
                      <input type="file" class="file-input" name="image">Change Avatar
                    </div>
                    <div style="float:left;">
                    <button class="button" style="margin-top:1em;margin-bottom:2em" name="submit">Save Image</button>
                  </div>
                  </div>
            
                  <div class="dashboard-section basic-info-input">
                    <h4>    <br>    <br>    <br><i data-feather="user-check"></i>Basic Info</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Company Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Company Name"  id="companyname" name="companyname" value="<?php echo htmlentities($row['companyname']);?>"  />
                      </div>
                    </div>
                   <!-- <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="email@example.com"  id="emailaddress" name="emailaddress" value="<?php echo htmlentities($row['emailaddress']);?>"  />
                      </div>
                    </div>-->
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="+55 123 4563 4643" id="phone" name="phone" value="<?php echo htmlentities($row['phone']);?>"  />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Washington D.C" id="address" name="address" value="<?php echo htmlentities($row['address']);?>"  />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Category</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="UI & UX Designer" id="category" name="category" value="<?php echo htmlentities($row['category']);?>"  />
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">About Us</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" placeholder="" id="aboutus" name="aboutus" value="" > <?php echo htmlentities($row['aboutus']);?></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="dashboard-section media-inputs">
                    <h4><i data-feather="image"></i>Photo &amp; Video</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Intro Video</label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Link</div>
                          </div>
                          <input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=ZRkdyjJ_489M" id="videolink" name="videolink" value="<?php echo htmlentities($row['videolink']);?>"  />
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Gallery</label>
                      <div class="col-sm-9">
                        <div class="input-group image-upload-input">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Image</div>
                          </div>
                          <div class="active">
                            <div class="upload-images">
                              <div class="pic">
                                <span class="ti-plus"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            <!--      <div class="dashboard-section social-inputs">
                    <h4><i data-feather="cast"></i>Social Networks</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Social Links</label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="facebook.com/username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="twitter.com/username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="google.com/username">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group add-new">
                          <div class="input-group-prepend">
                            <div class="input-group-text dropdown-label">
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option>Select</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select><i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="Input Profile Link">
                        </div>
                      </div>
                    </div>
                  </div>-->
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Change Password</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Current Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Current Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="New Password">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Retype Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Retype Password">
                      </div>
                    </div>
                    <?php } ?>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label"></label>
                      <div class="col-sm-9">
                        <button class="button" name="save">Save Change</button>
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

    <script src="js/custom.js"></script>
    <script src="dashboard/js/dashboard.js"></script>
    <script src="dashboard/js/datePicker.js"></script>
    <script src="dashboard/js/upload-input.js"></script>

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
    <script src="js/map.js"></script>
  </body>
</html>