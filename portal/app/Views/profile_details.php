<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Profile   </span> Details
</h4>

<!-- Header -->
 <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-6 col-lg-7 col-md-7 order-1 order-md-0">
      <!-- User Card -->
      <div class="card" id="profile">
        <div class="card-body">
          <div class="user-avatar-section">
          <?php	
                //$startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                
               $row = $this->admin_model->getAllStartUpNById($id); 
			    $rowArray = $this->gfa_model->getStartUpDetails($row[0]['Contact_Email']); 
			    $rowArrayExt = $this->gfa_model->getUserAccountExt($row[0]['Contact_Email']); 
				//foreach($row as $rowArray){  
                
                ?> 
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>public/assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Primary_Contact_Name']. " ", $rowArrayExt[0]['middlename']; ?> </h4>
                <span class="badge bg-light-secondary"><?php echo "Aspiring Business Owner"; //$row[0]['Interest_Fund_Raise']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="user" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h5 class="mb-0"><?php echo $row[0]['Gender']; ?></h5> 
                <small>Gender</small>
              </div>
            </div>
            
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
             <!-- /User Card <li class="mb-75">
                <span class="fw-bolder me-25"> Email:</span>
                <span><?php //echo $row[0]['Contact_Email']; ?></span>
              </li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25">State of Residence :</span>
                <span><?php echo $row[0]['State']; ?></span>
              </li>
               <li class="mb-75">
                <span class="fw-bolder me-25"> City/town of Residence:</span>
                <span><?php echo $rowArrayExt[0]['city']; ?></span>
              </li>
              
             
              
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Highest Level of Education:</span>
                <span><?php echo $row[0]['Level_Edu']; ?></span>
              </li>
            </ul>
            <div class="demo-inline-spacing justify-content-center">
          
            <a href="#" class="btn btn-warning backBtn" onclick="goBack()">Back</a>
            
            <!--<button type="button" class="btn btn-dark" data-bs-target="#referEarnModal" data-bs-toggle="modal" actionMsg="invest">Invest</button>-->
            <script>
function goBack() {
    window.history.back();
}
</script>
            </div>
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
      <ul class="nav nav-pills mb-2">
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link" href="#profile">-->
        <!--    <i data-feather="user" class="font-medium-3 me-50"></i>-->
        <!--    <span class="fw-bold">Profile Details</span></a>-->
        <!--</li>-->
        
        <!--<li class="nav-item">-->
        <!--  <a class="nav-link active" href="#info">-->
        <!--    <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold">More Details</span>-->
        <!--  </a>-->
        <!--</li>-->
      </ul>
      <!--/ User Pills -->

      <!-- connection -->
      <div class="card" id="info">
        <div class="card-body">
          <h4 class="card-title mb-75">More Details</h4>
          <p></p>
            <div class="d-flex mt-2">
            <div class="flex-shrink-0">
              
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
               <p class="fw-bolder mb-0">Course Applied for</p>
                <span><?php echo $rowArrayExt[0]['profile_extra']; ?></span>
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
              
            </div>
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Business Name</p>
                <span><?php echo $row[0]['Startup_Company_Name']; ?></span>
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
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Business Address</p>
                <span><?php echo $row[0]['Personal_Address']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxSlack" />
                  <label class="form-check-label" for="checkboxSlack">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          <!-- /Connections -->
        </div>
      </div>

      
      <!--<div class="demo-inline-spacing justify-content-center">-->
          
            
      <!--      <a href="#" class="btn btn-warning backBtn" >Back</a>-->

      <!--      </div>-->
      <!--/ connection -->
    </div>
    <!--/ User Content -->
    <div class="modal fade" id="checkDealRoom" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Dealroom Request</h1>
          
         <form action="#" id="#EventForm" class="form EventFormDealRoom" enctype="multipart/form-data">
            <div class="row">
            

              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control"  placeholder="Subject of the message" />
                </div>
              </div>
              
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtnDealRoom">Submit</button><span class="displayActionDealRoom"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>
  </div>
</section>
          <!-- Edit User Modal -->
        
          <div class="modal fade" id="referEarnModal" tabindex="-1" aria-labelledby="referEarnTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-0">
        <div class="px-sm-4 mx-50">
          <h1 class="text-center mb-1" id="referEarnTitle">Please select how you want to invest</h1>
          <!--<p class="text-center mb-5">-->
          <!--  Invite your friend to vuexy, if thay sign up, you and-->
          <!--  <br />-->
          <!--  your friend will get 30 days free trial-->
          <!--</p>-->

          <div class="row mb-6">
            <div class="col-12 col-lg-4">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Co-Investment"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="user-plus"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Co-Investment</h6>
                <span id="myButton1" title="Select this option, if you would like to co-invest on a chosen deal available on GFA platform with another fund. GFA is not the lead in this deal. You liaise directly with the selected funds that you want to work with on investment terms.">More info</span>

              </div></a>
            </div>
            <div class="col-12 col-lg-4">
              <a href="<?php echo base_url(); ?>gfa/syndicate/<?php echo $id ?>" target="_self"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="users"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">GFA Syndicate</h6>
                <span id="myButton2" title="GFA Syndicates and Rolling Funds - Select this option, if you would like to explore GFA's syndicate deals and different types of rolling funds. GFA is the lead investor in these selected deals.
*Note: A syndicate is where a group of investors pools their resources together to invest in a single deal.
*Note: Rolling fund is a type of fund that operates on a quarterly subscription model, allowing investors to make ongoing commitments rather than one-time investments.">More info</span>

              </div></a>
            </div>
            <div class="col-12 col-lg-4">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Direct Investment"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="grid"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Direct Investment</h6>
                <span id="myButton" title="Select this option, if you want to invest in this deal without any lead investor, you liaise directly with the startup on investment terms.">More info</span>

                <!--<p>Your friend will get 30 days free trial</p>-->
              </div></a>
              
            
             <!-- <div class="col-12 col-lg-3">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Venture Debt"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="book-open"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Venture Debt</h6>
                <p>Your friend will get 30 days free trial</p>-->
              </div></a>
            </div> 
          </div>
        </div>

        <hr />

       
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->

<!--/ Navbar pills -->

<!-- Connection Cards -->

<!--/ Connection Cards -->

          </div>