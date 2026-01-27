
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
            <h4 class="card-title">Corporate Details</h4>
<!--The size of cheques the investor writes -->


        <div class="content-body">

          <section class="app-user-view-account">
          <div class="col-lg-12 text-center mb-2">
             <!--data-bs-target="#checkHireProfile" data-bs-toggle="modal"-->
            
        <?php     
          
        
        if(!empty($this->admin_model->getAllStartUpNByEmailMicrosoft($email))){  ?>
                    
                  
          <a href="<?php echo base_url(); ?>gfa/startup_connect" class="btn btn-primary btn-next" style="margin:5px;"> Connect to other Startups</a>   <a href="#" class="btn btn-primary btn-next" style="margin:5px;" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" class="btn btn-primary btn-next" style="margin:5px;"> Schedule Meeting </a>
          
     <?php   }  ?>
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        </div>
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-12 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <?php	
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArray = $this->admin_model->getAllStartUpNById($startupArray[0]['id']); 
               $row = $this->admin_model->getAllCorperateById($id);  
				
				//foreach($row as $rowArray){  
                
                ?> 
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Key_contact_name']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $row[0]['Corporate_Name']; ?></span>
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
                <span><?php echo $row[0]['Need_contact_email']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> Country:</span>
                <span><?php echo $row[0]['Hq_country']; ?></span>
              </li>
               <li class="mb-75">
                <span class="fw-bolder me-25"> Solution Corperate:</span>
                <span><?php echo $row[0]['Solution_Corperate']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Status:</span>
                <span class="badge bg-light-success">Active</span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Startup Model:</span>
                <span><?php echo $row[0]['Startup_Model']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Engage Startup:</span>
                <span><?php echo $row[0]['Engage_Startup']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Core Interest Corporate</span>
                <span><?php echo $row[0]['Core_Interest_Corporate']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $row[0]['LinkedIn']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Solution_Ownership</span>
                <span><?php echo $row[0]['Solution_Ownership']; ?></span>
              </li>
            </ul>
            <div class="d-flex justify-content-center pt-2">
              <?php if(!empty($this->admin_model->getAllStartUpNByEmailMicrosoft($email))){  ?>
              <a href="<?php echo base_url(); ?>gfa/schedule/startup/<?php echo $row[0]['Corporate_ID']  ?>" data-bs-target="#editUserX" data-bs-toggle="modal" class="btn btn-primary me-1" >
              Connect to this corporate </a>
              <?php }else{  ?>
                <a href="#<?php echo base_url(); ?>gfa/schedule/startup/<?php echo $row[0]['Corporate_ID']  ?>" data-bs-target="#editUserX" data-bs-toggle="modal" class="btn btn-primary me-1 connectBtn" >
              Connect to this corporate </a><span class="displayContent"></span>
                <?php }  ?>
              
              <input type="hidden" class="connectEmail" value="<?php echo $row[0]['Need_contact_email']; ?>" />
             <input type="hidden" class="connectType" value="startup-corporate" />
             <input type="hidden" class="connectMsg" value="Try to connect to corporate" />
             <!--data-bs-target="#editUser" data-bs-toggle="modal"-->
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
     
    </div>
    <!--/ User Sidebar -->
    <script>
          $(function() {

            $(".requestInterview").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestInterviewStartup",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestInterview").html('Requesting...');$('.requestInterview').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestInterview").html('Request Sent'); 
	    $('.requestInterview').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 


              $(".connectBtn").click(function() {

                  var connectEmail = $('.connectEmail').val();
                  var connectType = $('.connectType').val();
                  var connectMsg = $('.connectMsg').val();
                  $.ajax({
                      data: {
                        connectEmail: connectEmail,
                        connectType: connectType,
                        connectMsg: connectMsg,  
                      },
                      type: "POST",
                      url: "<?php echo base_url(); ?>gfa/matchedConnection",
                      error: function() {
                          $(".connectBtn").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".connectBtn").html('Requesting...');
                          //$('.connectBtn').prop("disabled", true);
                      },
                      success: function(data) {

                        $(".displayContent").html('Request sent to corporate, you will be notified as soon as there is a response.');
                          $('.connectBtn').html("Sent to this corporate");
                          $('.connectBtn').prop("disabled", true);


                      }

                  });

              });

              

          });
        </script>
   
   
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

   