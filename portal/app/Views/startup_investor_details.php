
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Investor</h4>
<!--The size of cheques the investor writes -->


        <div class="content-body">
          <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-9 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <?php	
                 
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArray = $this->admin_model->getAllStartUpNById($startupArray[0]['id']); 
               $row = $this->admin_model->getAllInvestorById($id);  
				
				//foreach($row as $rowArray){  
                
                ?> 
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>public/assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Contact_Name']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $row[0]['Investor_Name']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">1</h4>
                <small>Startup Funded</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php echo $this->admin_model->countInvestorConnection($row[0]['Contact_Email']) ?></h4>
                <small>Connected</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
           
              <li class="mb-75">
                <span class="fw-bolder me-25">Status:</span>
                <span class="badge bg-light-success">Active</span>
              </li>
              <?php if($row[0]['Investment_Stage_Focus']==''){echo '';}else{ ?>
              <li class="mb-75">
                <span class="fw-bolder me-25">Funding Focus:</span>
                <span><?php echo $row[0]['Investment_Stage_Focus']; ?></span>
              </li>
              <?php }  ?>
              <?php if($row[0]['Industry_Focus']==''){echo '';}else{ ?>
              <li class="mb-75">
                <span class="fw-bolder me-25">Industry Focus:</span>
                <span><?php echo $row[0]['Industry_Focus']; ?></span>
              </li>
             <?php }  ?>
              <li class="mb-75">
                <span class="fw-bolder me-25">Region:</span>
                <span><?php echo $row[0]['Regional_focus'].' | '.$row[0]['Country']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $row[0]['LinkedIn']; ?></span>
              </li>
            </ul>
        <?php    if($this->gfa_model->countProfileDocs($email) == 2){   ?>
          <div class="d-flex justify-content-center pt-2">
              <a href="<?php echo base_url(); ?>gfa/dealroom_files/Documents" class="btn btn-primary me-1">
              Share your document with this Investor
              </a>
             
            </div>
       <?php   } else {  ?>
            <div class="d-flex justify-content-center pt-2">
              <a href="#<?php echo base_url(); ?>gfa/dealroom/startup" data-bs-target="#upgradePlanModal" data-bs-toggle="modal" class="btn btn-primary me-1">
                 Grant this Investor access to my Dataroom
              </a>
             
            </div>

            <?php }  ?>
          </div>
        </div>
      </div>
      <!-- /User Card -->
     
    </div>
    <!--/ User Sidebar -->

   
  </div>
</section>
          <!-- Edit User Modal -->
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
          <h1 class="mb-1">Book A Meeting</h1>
          <p>Select any of the free date to book your time</p>
        </div>
      
      
      
      <iframe src="https://calendly.com/dianateoh" style="height:800px;width:100%;" title="Book"></iframe>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
          <!-- upgrade your plan Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-3 pb-1">
        <div class="text-center mb-2">
          <h1 class="mb-1">Dealroom Info</h1>
          <p>Read the below information carefully</p>
        </div>
        
          <div class="col-sm-12">
          <?php  
       

        if($this->gfa_model->countProfileDocs($email) == 2){ echo ''; } else {
                ?>
       <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Note: <strong>To connect to this investor</strong></h4>
              <div class="alert-body">
                  <?php 
        		         
        		        $loginkey = $this->gfa_model->getWpCred($email);
        		   ?>
               
You must upload two important files to your <strong>Profile Folder</strong> before uploading files to the rest of the folders in the Dealroom.
<br>
<br>1. Upload maximum of five minutes video pitch introducing your Startup/SME in mp4 format, <a href="https://www.youtube.com/watch?v=N9N7f3Cj0hQ">click here for sample video</a> or contact <a href="mailto:media@getfundedafrica.com">media@getfundedafrica.com</a> to tell your story.
<br>
<br>2. Upload your Pitch deck in pdf or powerpoint format, <a href="https://estore.getfundedafrica.com/product/blockchain-desk/">click here</a> to download sample pitch deck from our estore or <a href="https://estore.getfundedafrica.com/product/pitchdeck-development/">click here</a> to order for a pitch deck development from our team.
<br>
  <br>3. All files uploaded into your dealroom will be reviewed by GFA team before approval to be shared with investors.

              </div>
            </div>
            <?php }  ?>
          </div>
          
       
      </div>
     
      <div class="modal-body px-1 pb-1">
        
      <div class="d-flex justify-content-center pt-1">
          
          <a href="<?php echo base_url(); ?>gfa/dealroom/startup" class="btn btn-primary mt-2">Continue</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ upgrade your plan Modal -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
    
    
    
  </div>


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   