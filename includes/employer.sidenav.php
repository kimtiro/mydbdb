<div class="dashboard-sidebar">
<?php
                            $ret=mysqli_query($con,"select employer.employer_id,employer_profile.image as image, employer_profile.companyname as companyname, employer.emailaddress from employer inner join employer_profile on employer_profile.employer_id=employer.employer_id where employer.employer_id ='".$_SESSION['employer_id']."'");
                          //      $sql=mysqli_query($con,"select jobTitle,jobType,qualification from jobs where jobs.employer_id = '".$_SESSION['employer_id']."'");
                              // <?php echo htmlentities($row['deadline'])? > $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {
                      ?>
                <div class="company-info">
                  <div class="thumb">
                  <?php if($row['image']==""){ ?>
                      <img src="images/employer/noimage.png" width="200" height="200"><?php } else {?>
                      <img src="images/employer/<?php echo htmlentities($row['image']);?>" width="200" height="200">
                      <?php } ?>
                  </div>
                 
                  <div class="company-body">
                    <h5><?php echo htmlentities($row['companyname'])?></h5>
                    <span><?php echo htmlentities($row['emailaddress'])?></span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                <?php } ?>
                <div class="dashboard-menu">
                  <ul>
                    <li class="active"><i class="fas fa-home"></i><a href="employer-dashboard.php">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.php">Edit Profile</a></li>
                    <li class=><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.php">Manage Jobs</a></li>
                    <li><i class="fas fa-users"></i><a href="employer-dashboard-manage-applicants.php">Manage Applicants</a></li>
                  <!--  <li><i class="fas fa-users"></i><a href="employer-dashboard-manage-candidate.html">Manage Candidates</a></li>
                    <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li>-->
                    <li><i class="fas fa-plus-square"></i><a href="employer-dashboard-post-job.php">Post New Job</a></li>
                 <!--   <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li> 
                    <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li>-->
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="logout.php">Logout</a></li>
             <!--       <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li> -->
                  </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>