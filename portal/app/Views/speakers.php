<div class="app-content content " style="margin-left: 0px !important; padding-top: 10px !important;">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <section class="app-user-view-connections">
     <!--[{"speakerName":"Lara","speakerDesignation":"Manger ","speakerLinkedin":"linkedIn","paymentInfo":"Brief about this Speaker\/Co-speaker\r\n              ","speakerPhoto":"9789beda8c5344450d60f9b3f32abf10.jpg"}]-->
            
            <?php $getSpeakerJson =  $this->gfa_model->getEventPass($id)[0]['speakers'];
            $getSpeakerJsonArray = json_decode($getSpeakerJson,true);
            foreach($getSpeakerJsonArray as $getSpeaker){
        ?>
  <div class="row">
    <!-- User Sidebar -->
       <div class="col-xl-6 col-lg-7 col-md-7 order-1 order-md-0">
      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
             
            <div class="d-flex align-items-center flex-column">
                <?php  
      
      $getPhoto =  $getSpeaker['speakerPhoto'];  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/files/".$getPhoto; 
          
      }
      
      
      
      ?>
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url().$showPhoto; ?>"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $getSpeaker['speakerName']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $getSpeaker['speakerDesignation']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">5</h4>
                <small>Rating</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0">100</h4>
                <small>Connection</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1"></h4>
          <div class="info-container">
            <ul class="list-unstyled">
            <li class="mb-75">
                
              
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $getSpeaker['speakerLinkedin']; ?></span>
              </li>
            </ul>
            <!--<div class="demo-inline-spacing justify-content-center">-->
          
            <!--<button type="button" class="btn btn-primary" data-bs-target="#checkProfile" data-bs-toggle="modal" actionMsg="Schedule a call">Schedule a call</button>-->
            
            <!--<button type="button" class="btn btn-dark" data-bs-target="#referEarnModal" data-bs-toggle="modal" actionMsg="invest">Invest</button>-->
          
            <!--</div>-->
          </div>
        </div>
      </div>
      <!-- /User Card -->
      <!-- Plan Card -->
      <!-- <div class="card border-primary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <span class="badge bg-light-primary">Standard</span>
            <div class="d-flex justify-content-center">
              <sup class="h5 pricing-currency text-primary mt-1 mb-0">$</sup>
              <span class="fw-bolder display-5 mb-0 text-primary">99</span>
              <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/month</sub>
            </div>
          </div>
          <ul class="ps-1 mb-2">
            <li class="mb-50">10 Users</li>
            <li class="mb-50">Up to 10 GB storage</li>
            <li>Basic Support</li>
          </ul>
          <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
            <span>Days</span>
            <span>4 of 30 Days</span>
          </div>
          <div class="progress mb-50" style="height: 8px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="65"
              aria-valuemax="100"
              aria-valuemin="80"
            ></div>
          </div>
          <span>4 days remaining</span>
          <div class="d-grid w-100 mt-2">
            <button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
              Upgrade Plan
            </button>
          </div>
        </div>
      </div> -->
      <!-- /Plan Card -->
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-6 col-lg-5 col-md-5 order-0 order-md-1">
      <!-- User Pills -->
      
      <!--/ User Pills -->

      <!-- connection -->
      <div class="card">
        <div class="card-body">
          <h4 class="card-title mb-75">About the Speaker</h4>
          <p></p>

          <!-- Connections -->
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <!--<p class="fw-bolder mb-0">About the Startup</p>-->
                <span><?php echo $getSpeaker['speakerAbout']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxGoogle" checked />
                  <label class="form-check-label" for="checkboxGoogle">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          <div class="d-flex mt-2">
             <div class="flex-shrink-0">
              <!--<img
                src="../../../app-assets/images/icons/social/slack.png"
                alt="slack"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            
          </div>
          <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <!-- <img
                src="../../../app-assets/images/icons/social/github.png"
                alt="github"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            
          </div>
           <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              <!-- <img
                src="../../../app-assets/images/icons/social/mailchimp.png"
                alt="mailchimp"
                class="me-1"
                height="38"
                width="38"
              /> -->
            </div>
            
          </div>
          <div class="d-flex mt-2">
             <div class="flex-shrink-0">
              <!--<img
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            
          </div>
          <!-- /Connections -->
        </div>
      </div>


      <!--/ connection -->
    </div>
    <!--/ User Content -->
  </div>
  
  <?php }  ?>
</section>
          <!-- Edit User Modal -->
        
          
  </div>
</div>
<!--/ Edit User Modal -->

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

   