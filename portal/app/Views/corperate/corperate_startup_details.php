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
        <div class="content-body">
          <section class="app-user-view-connections">
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
			    $rowArray = $this->admin_model->getAllStartUpNByEmailExtX($row[0]['Contact_Email']); 
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
                <span class="badge bg-light-secondary"><?php echo $row[0]['Interest_Fund_Raise']; ?></span>
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
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="link" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h5 class="mb-0"><span class="badge bg-light-success">Approved</span></h5>
                <small>Status</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
            <li class="mb-75">
                <span class="fw-bolder me-25"> Email:</span>
                <span><?php echo $row[0]['Contact_Email']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">State of Residence :</span>
                <span><?php echo $row[0]['State']; ?></span>
              </li>
               <li class="mb-75">
                <span class="fw-bolder me-25"> City/town of Residence:</span>
                <span><?php echo $row[0]['City']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">State of Origin:</span>
                <span><?php echo $rowArrayExt[0]['state_of_origin']; ?></span>
              </li>
              
               <li class="mb-75">
                <span class="fw-bolder me-25">L.G.A of Origin:</span>
                <span><?php echo $rowArrayExt[0]['lga_of_origin']; ?></span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Date of Birth:</span>
                <span><?php echo $rowArrayExt[0]['dob']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Marital Status:</span>
                <span><?php echo $rowArrayExt[0]['marital_status']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Home Address</span>
                <span><?php echo $row[0]['Personal_Address']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Telephone/WhatsApp number</span>
                <span><?php echo $row[0]['Phones']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">NIN:</span>
                <span><?php echo $rowArrayExt[0]['nin']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">BVN:</span>
                <span><?php echo $rowArrayExt[0]['bvn']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Highest Level of Education:</span>
                <span><?php echo $row[0]['Level_Edu']; ?></span>
              </li>
            </ul>
            <div class="demo-inline-spacing justify-content-center">
          
            <!--<button type="button" class="btn btn-primary" data-bs-target="#checkProfile" data-bs-toggle="modal" actionMsg="Schedule a call">Schedule a call</button>-->
            
            <!--<button type="button" class="btn btn-dark" data-bs-target="#referEarnModal" data-bs-toggle="modal" actionMsg="invest">Invest</button>-->

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
        <li class="nav-item">
          <a class="nav-link" href="#profile">
            <i data-feather="user" class="font-medium-3 me-50"></i>
            <span class="fw-bold">Profile Details</span></a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link active" href="#info">
            <i data-feather="link" class="font-medium-3 me-50"></i><span class="fw-bold">More Info</span>
          </a>
        </li>
      </ul>
      <!--/ User Pills -->

      <!-- connection -->
      <div class="card" id="info">
        <div class="card-body">
          <h4 class="card-title mb-75">More Details</h4>
          <p></p>

          <!-- Connections -->
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
              <!--<img
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Do you have a Wema Bank account?</p>
                <span><?php echo $rowArrayExt[0]['wema_account_que']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Do you need assistance in setting up Wema Account after the program?</p>
                <span><?php  if($rowArrayExt[0]['assist_wema']==1){ echo "Yes";  }else{ echo "No" ; } ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Number of Years in Operation</p>
                <span><?php echo str_replace('â€“','and',$rowArray[0]['Year_Operation']); ?></span>
              </div>
              
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
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Is your business registered with the Corporate Affairs Commission (CAC)?</p>
                <span><?php echo $rowArray[0]['Incorporated']; ?></span>
              </div>
              
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
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Business Registration Number</p>
                <span><?php echo $rowArray[0]['Registration_Number']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Line of Business/Sector </p>
                <span><?php echo $row[0]['PrimaryBusinessIndustry']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">What is Your Estimated Annual/Yearly Revenue/Sales </p>
                <span><?php echo $row[0]['Revenue']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Number of Employees</p>
                <span><?php echo $row[0]['NoOfEmployees']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Which of these Digital Tools or Platforms Have You Used in the Last Six Months to Manage and Operate Your Business</p>
                <span><?php echo $rowArrayExt[0]['digital_tool_proficiency']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Do You Have a Business Website?</p>
                <span><?php //echo $row[0]['Website']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Please Indicate the URL of Your Business Website if You Have One</p>
                <span><?php echo $row[0]['Website']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">Briefly Describe your Business</p>
                <span><?php echo $rowArray[0]['About_Company']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">What Challenges is Your Business Currently Facing?</p>
                <span><?php echo $rowArray[0]['Business_Challenge']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">How Do You Believe this Program Can Assist You and Your Business?</p>
                <span><?php echo $row[0]['Business_Importance']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
                src="../../../app-assets/images/icons/social/asana.png"
                alt="asana"
                class="me-1"
                height="38"
                width="38"
              />-->
            </div> 
            <div class="d-flex align-item-center justify-content-between flex-grow-1">
              <div class="me-1">
                <p class="fw-bolder mb-0">If Awarded a Grant from the Business Plan Competition, How Do You Intend to Use the Funds to Benefit Your Business?</p>
                <span><?php echo $rowArray[0]['Grant_Use']; ?></span>
              </div>
              <!-- <div class="mt-50 mt-sm-0">
                <div class="form-check form-switch form-check-primary">
                  <input type="checkbox" class="form-check-input" id="checkboxAsana" />
                  <label class="form-check-label" for="checkboxAsana">
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
          
            
      <!--      <button type="button" class="btn btn-warning" data-bs-target="#checkDealRoom" data-bs-toggle="modal" actionMsg="Dealroom Request">DealRoom Request</button>-->

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
<!--/ Edit User Modal -->
<div class="modal fade" id="editUserFile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
      <?php   
            $investorFile = $this->admin_model->getInvestorsFileUploadedByEmail($email); ?>
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1 showInvest">Verification</h1>
         <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
         <h5 class="kycText">We need to you more before investing.</h5>
         <?php  }  ?>
         <form action="#" id="#EventFormFile" class="form EventFormFile" enctype="multipart/form-data">
            <div class="row">
        <div class="kyc">
            <?php  
             
            if(empty($investorFile[0]['photo'])){
            ?>
            
              <div class="col-12">
                  <label>Upload Photo </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your photo" />
                </div>
              </div>
              
            <?php }else{ echo ''; } ?>
              <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
              
              <?php  if(empty($investorFile[0]['ids'])){  ?>
              <div class="col-12">
                  <label>Upload ID</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your IDs" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
             <?php  if(empty($investorFile[0]['address'])){  ?> 
              <div class="col-12">
                  <label>Upload Proof of Address</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload Proof of Address" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
              
              </div>
        <div class="col-12">
        <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>

                <button class="btn btn-primary float-end mt-3 btnNext">Next</button>
                <?php  }  ?>
                <!-- <button  class="btn btn-primary" data-bs-target="#editUser" data-bs-toggle="modal">Discuss further with GFA</button> -->
                <p class="displayActionFile"></p>
              </div>
              <div class="investDisplay" <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
 style="display:none;" <?php }  ?>>
              <div class="col-12">
                  
                <div class="mb-2">
                  <input type="number" name="amount" class="form-control" required placeholder="Amount to Invest in $" />
                </div>
              </div>
              <div class="col-md-12 hideDirectInvest">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Invite other Investors</h4>
        </div>
        <div class="card-body">
         
          <div class="row">
          
            <div class="col-xl-5 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop">Select Investors</label>
                
                <select class="form-select" name="gfa_investor[]" >

                <option></option> 
			      <?php	$rowInvestor = $this->admin_model->getAllInvestorInorder();  foreach($rowInvestor as $rowInvestorArray){  
              
              if($rowInvestorArray["Investor_Name"]==''){ echo '';}else{
              ?>

                  <option value="<?php echo $rowInvestorArray['Contact_Email'] ?>"><?php echo $rowInvestorArray["Contact_Name"] ?>[<?php echo $rowInvestorArray["Investor_Name"] ?>]</option>
                  <?php } }  ?>
              </select>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="basicInput">Other Investor via email</label>
            <input type="text" class="form-control fund_to_raise" id="accountAddress" name="other_investor[]" placeholder="Other Investor via email" />

              </div>
            </div>
           
            
            
            <div class="col-xl-3 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Amount to Invest (USD)</label>
                <input type="number" class="form-control fund_to_raise" id="accountAddress" name="fund[]" placeholder="Amount to Invest (USD)"  />

                
              </div>
            </div>
            
             <span class="display"></span>
          </div>
        
        </div>
             
      </div>
    </div>
              
              <div class="col-12">
                <textarea class="form-control mb-2 showMore" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             <input type="hidden" class="getinvest" name="invest_type" />
             </div>
              <div class="col-12" >
              <button type="submit" class="btn btn-primary EventBtnFile float-end mt-3 me-sm-2 mb-2 investBtn" <?php if(empty($investorFile[0]['photo']) || empty($investorFile[0]['ids']) || empty($investorFile[0]['address'])){  ?>
 style="display:none;" <?php }  ?>>Submit</button>
              <button class="btn btn-secondary float-end mt-3 me-sm-2 mb-2 mb-sm-0 btnPrev investBtn2" style="display:none">Previous</button>
                <!-- <button  class="btn btn-primary" data-bs-target="#editUser" data-bs-toggle="modal">Discuss further with GFA</button> -->
                <p class="displayActionFile"></p>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>

$(document).ready(function() {
  $("#myButton").tooltip();
  $("#myButton1").tooltip();
  $("#myButton2").tooltip();
});
      $(function(){

        $('.btnNext').click(function(e){
          e.preventDefault();
          $(this).hide();
          $('.kycText').hide();
          $('.kyc').hide();
          $('.investDisplay').show();
          $('.investBtn').show();
          $('.investBtn2').show();
         
        });
        $('.btnPrev').click(function(e){
          e.preventDefault();
          $('.kycText').show();
          $('.kyc').show();
          $('.btnNext').show();
          $('.investDisplay').hide();
          $('.investBtn').hide();
           $('.investBtn2').hide();
        });
          
    $(".invest").click(function(){
            
     var getInvest = $(this).attr('investType'); //hideDirectInvest
     $('.getinvest').val(getInvest);
    $('.showInvest').html(getInvest);
    $('.showMore').attr('placeholder','More infomation on '+getInvest);

    if(getInvest == "Direct Investment"){
      $('.hideDirectInvest').hide(); 
    }else{
      $('.hideDirectInvest').show();
    }
        
    });      
          
          
           $(".EventFormFile").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/verifyInvestor",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayActionFile").html('Sending...'); $(".EventBtnFile").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionFile").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtnFile").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
        </div>

          <!-- upgrade your plan Modal -->
<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Schedule a call</h1>
          
         <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-1">
                <select class="form-select"  name="subject_ext" >

                <option value="">Subject</option> 
                <option value="Yearly Revenue">Yearly Revenue</option>
                <option value="Pitch deck presentation">Pitch deck presentation</option>
              </select>
              </div>
              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control" placeholder="Other subject required" />
                </div>
              </div>
              
            <div class="col-md-12 mb-1">
          <!--<label class="form-label" for="fp-date-time"></label>-->
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="date_time"
            placeholder="Date/Time [YYYY-MM-DD HH:MM]"
          />
        </div>

        <div class="col-md-12 mb-1">
                <select class="form-select"  name="time_zone" >

                <option value="">Time Zone</option> 
                <option value="WAT">WAT</option>
                <option value="EAT">EAT</option>
                <option value="EAT">EAT</option>
                <option value="AST">AST</option>
                <option value="EST">EST</option> 
                <option value="WET">WET</option>
                <option value="ADT">ADT</option>
              </select>
              </div>

        <div class="col-12">
                  
                <div class="mb-2">
                  <input type="text" name="meeting_link" class="form-control" placeholder="Meting link if available e.g zoom, teams, meet etc" />
                </div>
              </div>
        
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn">Submit</button><br><span class="displayAction"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>
      $(function(){
          
        // DealRoom
        $(".EventFormDealRoom").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestdealroom",
	 error:function() {$(".displayActionDealRoom").html('Error')},
	 beforeSend:function() {$(".displayActionDealRoom").html('Requesting...'); $(".EventBtnDealRoom").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionDealRoom").html(data);  
	   //$(".saveBtn").html(data); 
     $(".EventBtnDealRoom").html('Pending Request');
		 $(".EventBtnDealRoom").prop('disabled', true);

      }
    });
    return false;

  });
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/callstartup",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Sending...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
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

   