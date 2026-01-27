
    <!-- BEGIN: Content-->
    <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
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
            <h4 class="card-title">Startup/SME Details</h4>
<!--The size of cheques the investor writes -->


        <div class="content-body">
          <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-9 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <?php	
                //$startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                
                $rowArray = $this->admin_model->getAllStartUpNById($id); 
               $rowArray = $this->admin_model->getAllStartUpNByEmail($this->gfa_model->getCorperateStartupRegByIdRef($id,$cor_info)[0]['email']); 
				
				//foreach($row as $rowArray){  
                
                ?> 
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url("assets/images/uploads/default-avatar.jpg"); ?>"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php  if($rowArray[0]['Primary_Contact_Name']==''){ 
                  $onboardEmail = $this->gfa_model->getCorperateStartupRegByIdRef($id,$cor_info)[0]['email'];
                  echo $this->gfa_model->getOnboardIndividual($onboardEmail)[0]['lname'].' '.$this->gfa_model->getOnboardIndividual($onboardEmail)[0]['fname'];
                  
                  
                  }else{

                    echo $rowArray[0]['Primary_Contact_Name'];

                  } ?></h4>
                <span class="badge bg-light-secondary"><?php  $rowArray[0]['Startup_Company_Name']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"></h4>
                <small>Invested</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"></h4>
                <small>Completed</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
              <!--<li class="mb-75">-->
              <!--  <span class="fw-bolder me-25">Username:</span>-->
              <!--  <span>violet.dev</span>-->
              <!--</li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25"> Email:</span>
                <span><?php echo $this->gfa_model->getCorperateStartupRegByIdRef($id,$cor_info)[0]['email']; //$rowArray[0]['Contact_Email']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> Address:</span>
                <span><?php echo $rowArray[0]['CountryHQ']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> Gender:</span>
                <span><?php echo $rowArray[0]['Gender']; ?></span>
              </li>
              
               <li class="mb-75">
                <span class="fw-bolder me-25"> Company Category:</span>
                <span><?php echo $rowArray[0]['PrimaryBusinessIndustry']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Status:</span>
                <span class="badge bg-light-success">Active</span>
              </li>
              
               <li class="mb-75">
                <span class="fw-bolder me-25">Phone:</span>
                <span><?php echo $rowArray[0]['Phones']; ?></span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25">No Of Employees :</span>
                <span><?php echo $rowArray[0]['NoOfEmployees']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Revenue :</span>
                <span><?php echo $rowArray[0]['Revenue']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Country HQ: </span>
                <span><?php echo $rowArray[0]['CountryHQ']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Country: </span>
                <span><?php echo $rowArray[0]['Country']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Website:  </span>
                <span><?php echo $rowArray[0]['Website']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $rowArray[0]['LinkedIn']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Current Investment Stage:</span>
                <span><?php echo $rowArray[0]['CurrentInvestmentStage']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Interest Fund Raise:</span>
                <span><?php echo $rowArray[0]['Interest_Fund_Raise']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Designation:</span>
                <span><?php echo $rowArray[0]['Designation']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> About :</span>
                <span><?php echo $rowArray[0]['About_Me']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Date of Registration :</span>
                <span><?php echo $rowArray[0]['date']; ?></span>
              </li>
             
            </ul>
            <!--<div class="d-flex justify-content-center pt-2">-->
            <!-- <a href="<?php //echo base_url(); ?>gfa/schedule/startup/<?php //echo $rowArray[0]['Id']  ?>" class="btn btn-primary me-1" >-->
            <!--    Schedule Meeting-->
            <!--  </a>-->
             
            <!--</div>-->
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
      <div class="modal-body px-5 pb-2">
        <div class="text-center mb-2">
          <h1 class="mb-1">Upgrade Plan</h1>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row pt-50" onsubmit="return false">
          <div class="col-sm-8">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-4 text-sm-end">
            <button type="submit" class="btn btn-primary mt-2">Upgrade</button>
          </div>
        </form>
      </div>
      <hr />
      <div class="modal-body px-5 pb-3">
        <h6>User current plan is standard plan</h6>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-1 mb-1">
            <sup class="h5 pricing-currency pt-1 text-primary">$</sup>
            <h1 class="fw-bolder display-4 mb-0 text-primary me-25">99</h1>
            <sub class="pricing-duration font-small-4 mt-auto mb-2">/month</sub>
          </div>
          <button class="btn btn-outline-danger cancel-subscription mb-1">Cancel Subscription</button>
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

   