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
    <!-- Greetings Card starts -->
    
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
	
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countRegistration("Business Owner") ?></h2>
          <p class="card-text">Business Owner</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Business-Owner") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
	<div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-secondary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countRegistration("Aspiring Business Owner") ?></h2>
          <p class="card-text">Aspiring Business Owner</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Aspiring-Business-Owner") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countRegistration("Professional") ?></h2>
          <p class="card-text">Working Professional</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Professional") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countRegistration("Jobseeker") ?></h2>
          <p class="card-text">Job Seeker</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p> 
              <a href="<?php echo base_url("gfa/corperate_startups/Jobseeker") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    
    <!-- Orders Chart Card ends -->
  </div>
<div class="row match-height">
    <!-- Medal Card -->
    
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-6 col-12">  
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Wema Bank Account Opening Analysis</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0"></p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countAccountInterest("Yes") ?></h4>
                  <p class="card-text font-small-3 mb-0">Have Wema Account</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countAccountInterest("No") ?></h4>
                  <p class="card-text font-small-3 mb-0">No Wema Account</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countNeedAccount() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Account</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-warning me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegBVNX() ?></h4>
                  <p class="card-text font-small-3 mb-0">BVN</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegNINX() ?></h4>
                  <p class="card-text font-small-3 mb-0">NIN</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegNIN() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Acct with BVN/NIN</p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 me-2">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-warning me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegBVN() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Acct without BVN/NIN</p>
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="row">
            
            
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>
  <div class="row match-height">
    <!-- Avg Sessions Chart Card starts -->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row pb-50">
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
              <div class="mb-1 mb-sm-0">
                <h2 class="fw-bolder mb-25"><?php   
               $sumTotal = $this->gfa_model->countRegistrationTotal();  echo $sumTotal;
                 ?></h2>
                <p class="card-text fw-bold mb-2">Total Registration</p>
                <!--<div class="font-medium-2">-->
                <!--  <span class="text-success me-25">+5.2%</span>-->
                <!--  <span>vs last 7 days</span>-->
                <!--</div>-->
              </div>
              <a href="<?php echo base_url("gfa/corperate_startups/") ?>" class="btn btn-primary">View Details</a>
            </div>
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1">
              <!--<div class="dropdown chart-dropdown">-->
              <!--  <button-->
              <!--    class="btn btn-sm border-0 dropdown-toggle p-50"-->
              <!--    type="button"-->
              <!--    id="dropdownItem5"-->
              <!--    data-bs-toggle="dropdown"-->
              <!--    aria-haspopup="true"-->
              <!--    aria-expanded="false" >-->
              <!--    Last 7 Days-->
              <!--  </button>-->
                <!--<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownItem5">-->
                <!--  <a class="dropdown-item" href="#">Last 28 Days</a>-->
                <!--  <a class="dropdown-item" href="#">Last Month</a>-->
                <!--  <a class="dropdown-item" href="#">Last Year</a>-->
                <!--</div>-->
              <!--</div>-->
              <!--<div id="avg-sessions-chart"></div>-->
            </div>
          </div>
          <hr /> 
          <div class="row avg-sessions pt-50">
            <div class="col-6 mb-2">
                <?php  $countMale = $this->gfa_model->countGender("Male");
              $countMalePer = ceil(($countMale/$sumTotal)*100);
              ?>
              <?php  $countFemale = $this->gfa_model->countGender("Female");
              $countFemalePer = ceil(($countFemale/$sumTotal)*100);
              ?>
              <p class="mb-50">Male: <?php echo $countMale ?>/ <?php echo $countMalePer ?>%</p>
              <div class="progress progress-bar-primary" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="50"
                  aria-valuemin="50"
                  aria-valuemax="100"
                  style="width: <?php echo $countMalePer ?>%"
                ></div> 
              </div>
            </div>
            <div class="col-6 mb-2">
              <p class="mb-50">Female: <?php echo $countFemale ?> / <?php echo $countFemalePer ?>%</p> 
              <div class="progress progress-bar-warning" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="60"
                  aria-valuemin="60"
                  aria-valuemax="100"
                  style="width: <?php echo $countFemalePer ?>%"
                ></div>
              </div>
            </div>
            <!--<div class="col-6">-->
            <!--  <p class="mb-50">Progress: 90%</p>-->
            <!--  <div class="progress progress-bar-danger" style="height: 6px">-->
            <!--    <div-->
            <!--      class="progress-bar"-->
            <!--      role="progressbar"-->
            <!--      aria-valuenow="70"-->
            <!--      aria-valuemin="70"-->
            <!--      aria-valuemax="100"-->
            <!--      style="width: 70%"-->
            <!--    ></div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-6">-->
            <!--  <p class="mb-50">Duration: 1yr</p>-->
            <!--  <div class="progress progress-bar-success" style="height: 6px">-->
            <!--    <div-->
            <!--      class="progress-bar"-->
            <!--      role="progressbar"-->
            <!--      aria-valuenow="90"-->
            <!--      aria-valuemin="90"-->
            <!--      aria-valuemax="100"-->
            <!--      style="width: 90%"-->
            <!--    ></div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
    <!-- Avg Sessions Chart Card ends -->
	
	 <!-- Developer Meetup Card -->
     <div class="col-lg-6 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Applications by Locations</h4>
         
        </div>
        <div class="card-body" style="height: 100px; overflow: scroll;">
    <?php $rowState = $this->gfa_model->getNgStates(); foreach($rowState as $rowStateArray) { ?> 
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="map-pin" class="avatar-icon font-medium-3"></i> 
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title"><?php echo $rowStateArray['states'] ?> </h6>
                <small>BO: <?php echo $this->gfa_model->countRegistrationState("Business Owner",$rowStateArray['states']) ?> , ABO: <?php echo $this->gfa_model->countRegistrationState("Aspiring Business Owner",$rowStateArray['states']) ?>  , 
                P: <?php echo $this->gfa_model->countRegistrationState("Professional",$rowStateArray['states']) ?>  , JS: <?php echo $this->gfa_model->countRegistrationState("Jobseeker",$rowStateArray['states']) ?> 
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $this->gfa_model->countRegistrationLocation($rowStateArray['states']) ?></div>
          </div>
      <?php }  ?>   
          
		  
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->
    
   
  </div>

<div class="row match-height">
    <div class="col-lg-6 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Applications by Gender</h4>
         
        </div>
        <div class="card-body" style="height: 150px; overflow: scroll;">
    <?php $rowState = $this->gfa_model->getNgStates(); foreach($rowState as $rowStateArray) { ?> 
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="map-pin" class="avatar-icon font-medium-3"></i> 
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title"><?php echo $rowStateArray['states'] ?> </h6>
                <small>Male: <?php echo $this->gfa_model->countGenderByState("Male",$rowStateArray['states']) ?> , Female: <?php echo $this->gfa_model->countGenderByState("Female",$rowStateArray['states'])  ?> 
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $this->gfa_model->countRegistrationLocation($rowStateArray['states']) ?></div>
          </div>
      <?php }  ?>   
          
		  
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-12" >
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Goal Overview</h4>
          <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
        </div>
        <div class="card-body p-0">
          <div id="goal-overview-radial-bar-chart" class="my-2"></div>
          <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Target</p>
              <h3 class="fw-bolder mb-0">1,000,000</h3>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">In Progress</p>
              <h3 class="fw-bolder mb-0"><?php echo number_format($sumTotal) ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
 
<input type="hidden" value="<?php echo round(($sumTotal/1000000)*100) ?>" id="data-value" />
</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>