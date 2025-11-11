 <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
    <?php 
		        $email = $this->encrypt->decode($this->session->userdata('email')); 
		        $loginkey = $this->gfa_model->getWpCred($email);
		        $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
		        $corperateRow = $this->gfa_model->getCorperateStartupReg()
		   ?>
   <!-- Greetings Card starts -->
    <div class="col-lg-4 col-md-6 col-sm-12">
      <div class="card card-congratulations">
        <div class="card-body text-center">
          <img
            src="../../../app-assets/images/elements/decore-left.png"
            class="congratulations-img-left"
            alt="card-img-left"
          />
          <img
            src="../../../app-assets/images/elements/decore-right.png"
            class="congratulations-img-right"
            alt="card-img-right"
          />
          <div class="avatar avatar-xl bg-primary shadow">
            <div class="avatar-content">
              <i data-feather="award" class="font-large-1"></i>
            </div>
          </div>
          
          <div class="text-center">
            <h1 class="mb-1 text-white">Congratulations</h1>
            <p class="card-text m-auto w-15">
              You have done <strong><?php echo $point ?>%</strong> onboarding. <br><a href="<?php echo base_url(); ?>gfa/profile_corperate" style="color:#fff;" target="_blank">Please below to update profile for better experience.</a>
            <br>
            <a href="<?php echo base_url(); ?>gfa/profile_corperate" class="btn btn-primary">Update Profile</a>
            </p>
            
       

        
            
          </div>
        </div>
      </div>
    </div>
    <!-- Greetings Card ends -->
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Your Interations in Summary</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0">Recent updated transactions</p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
        <a href='<?php echo base_url(); ?>gfa/coming_soon'> <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">1</h4>
                  <p class="card-text font-small-3 mb-0">Cohort</p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <a href='<?php echo base_url(); ?>gfa/corperate_startups'>
                  <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">
                      
                      <?php if($corperateRow[0]['ref']=='dcdt'){
                          
                          echo $this->gfa_model->countDcdtSme('dcdt');
                      }else{ 
                      
                      
                      if($corperateRow_Event[0]['Event']=='Microsoft'){
                          echo $this->gfa_model->countMicrosoftStartup('Microsoft');
                          
                      }
                      
                      else{
                          
                    echo $this->admin_model->countAllStartup($corperateRow[0]['Solution_Corperate'],$corperateRow[0]['Core_Interest_Corporate']);
                          
                      }
                      }
                      ?>
                      </h4>
                  <p class="card-text font-small-3 mb-0">Applications</p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <a href='<?php echo base_url(); ?>gfa/corperate_investor'><div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo $this->admin_model->countMatchCorperateInvestor($this->gfa_model->getCorperateDetails($email)[0]['Corporate_industry']) ; ?></h4>
                  <p class="card-text font-small-3 mb-0">Investors</p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <a href='<?php echo base_url(); ?>gfa/corperate_mentor'><div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="user"  class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo $this->admin_model->countMatchCorperateMentor($this->gfa_model->getCorperateDetails($email)[0]['Corporate_industry']) ; ?></h4>
                  <p class="card-text font-small-3 mb-0">Mentors</p>
                </div>
              </div></a>
            </div>
          </div>
        </div>
        
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <a href='<?php echo base_url(); ?>gfa/partners'><div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo $this->admin_model->countMatchCorperatePartner($this->gfa_model->getCorperateDetails($email)[0]['Corporate_industry'], $email) ; ?></h4>
                  <p class="card-text font-small-3 mb-0">Partners</p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <a href='<?php echo base_url(); ?>gfa/corperate_add_csr' ><div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo $this->admin_model->countCorperateCrs($email) ; ?></h4>
                  <p class="card-text font-small-3 mb-0">Community</p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <a href='<?php echo base_url(); ?>gfa/coming_soon'><div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">1</h4>
                  <p class="card-text font-small-3 mb-0">Media/PR</p>
                </div>
              </div></a>
            </div>
            <div class="col-xl-3 col-sm-6 col-12  mb-2 mb-sm-0" >
              <a href='<?php echo base_url(); ?>gfa/coming_soon'><div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="user"  class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">1</h4>
                  <p class="card-text font-small-3 mb-0">Content</p>
                </div>
              </div></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>

  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
        <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card">
            <div class="card-body pb-50">
              <h6>Learning</h6>
              <h2 class="fw-bolder mb-1">230</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-6 col-md-3 col-6">
          <a href='<?php echo base_url(); ?>gfa/corperate_add_event'><div class="card card-tiny-line-stats">
            <div class="card-body pb-50">
              <h6>Manage Event</h6>
              <h2 class="fw-bolder mb-1">1</h2>
              <div id="statistics-profit-chart"></div>
            </div>
          </div></a>
        </div>
        <!--/ Line Chart - Profit -->
         <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card"  style="background-color: #958DF3;">
            <div class="card-body pb-50">
              <h6>Perks</h6>
              <h2 class="fw-bolder mb-1">$2500</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card card-tiny-line-stats">
            <div class="card-body pb-50">
              <h6>Hiring</h6>
              <h2 class="fw-bolder mb-1"><?php
              
                    if($corperateRow[0]['ref']=='dcdt'){
                        $rowArrays = $this->admin_model->getCorperateDcdtByEmail($email); 
    	                $row = $this->admin_model->MatchDcdtStartup();
                          
                      }else {
                      
                      if($corperateRow_Event[0]['Event']=='Microsoft'){
                        $rowArrays = $this->admin_model->getCorperateMicrosoftByEmail($email); 
    	                $row = $this->admin_model->MatchMicrosftStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }else{
                          
                        $rowArrays = $this->admin_model->getCorperateByEmail($email); 
    	                $row = $this->admin_model->MatchCorperateStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }
                      
                      }
                      
                      $sum = 0;
                      foreach($row as $rowArray){  
                         $sum +=  $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['NoOfEmployees'];
                      }
                        echo $sum;
              
             //echo $this->admin_model->getSumOfHiredByCompany() ; ?></h2>
              <div id="statistics-profit-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Line Chart - Profit -->
        
          <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card">
            <div class="card-body pb-50">
              <h6>Forms</h6>
              <h2 class="fw-bolder mb-1">3</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card card-tiny-line-stats" style="background-color: #FFAD5F;">
            <div class="card-body pb-50">
              <h6>Survey</h6>
              <h2 class="fw-bolder mb-1">2</h2>
              <div id="statistics-profit-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Line Chart - Profit -->
        
        
       
      </div>
    </div>

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md-8 col-12 revenue-report-wrapper">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0">Weekly Report</h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span>Returns</span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span>Expense</span>
                </div>
              </div>
            </div>
            <div id="revenue-report-chart"></div>
          </div>
          <div class="col-md-4 col-12 budget-wrapper">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                2023
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">2022</a>
              </div>
            </div>
            <h2 class="mb-25">$25,852</h2>
            <div class="d-flex justify-content-center">
              <span class="fw-bolder me-25">Tax:</span>
              <span>2,585.2</span>
            </div>
            <div id="budget-chart"></div>
            <button type="button" class="btn btn-primary">View All Report</button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Revenue Report Card -->
  </div>

  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
			  <tr>
                  <th colspan="5">Browse your Recommended Startups</th>
                 
                </tr>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Country</th>
                  <th>Revenue</th>
                  <th>Rate</th>
                </tr>
              </thead>
              <tbody>
        <?php  foreach($row as $rowArrayS){   ?>
                         
                     
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo  $this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['Primary_Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['Startup_Company_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['PrimaryBusinessIndustry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['CountryHQ'] ; ?></span>
                      <!--<span class="font-small-2 text-muted">in 24 hours</span>-->
                    </div>
                  </td>
                  <td>$<?php if($this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['Revenue']=='0' || $this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['Revenue']==''){ echo 0; }else{ echo $rowArrays['Revenue'] ;} ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1"><?php echo $this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['Credit_Point'] ; ?>%</span>
                      <?php if($rowArrays['Credit_Point'] >=50){ ?>
                   <i data-feather="trending-up" class="text-success font-medium-1"></i> &nbsp;        
                    <?php   }else{  ?>
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i> &nbsp; 
                      <?php } ?> 
					   <a href="<?php echo base_url(); ?>gfa/corperate_startups_details/<?php echo $this->gfa_model->getStartUpDetails($rowArrayS['email'])[0]['STUP_ID'] ; ?>" class="btn btn-primary">Details</a>
                    </div>
                  </td>
                </tr>
               <?php }  ?> 
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!--/ Company Table Card -->



    <!-- Mentor Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Mentor A Startup</h4>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Walls Hub</h6>
                <small>Real Esate - Uganda</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">$40k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-success rounded float-start">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">MoneyBank</h6>
                <small>Finance - Ghana</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$80k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-danger rounded float-start">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Paytime</h6>
                <small>Finance - Egypt</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$50k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-warning rounded float-start">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Foodcow</h6>
                <small>Agriculture - Kenya</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">$23k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-info rounded float-start">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Yoyop</h6>
                <small>Fintech - Nigeria</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$98k</div>
          </div>
		  
		  
		
		<hr class="mb-2" />
		<div class="d-grid">
          <button type="button" class="btn btn-primary">Connect with Mentees</button>
        </div>
        </div>
      </div>
    </div>
    <!--/ Transaction Card --> 

  <!-- Profile Card -->
  <div class="col-lg-4 col-md-6 col-12">
    <div class="card card-profile">
      <img
        src="https://getfundedafrica.com/images/cohort.jpg"
        class="img-fluid card-img-top"
        alt="Profile Cover Photo"
      />
      <div class="card-body">
        <div class="profile-image-wrapper">
          <div class="profile-image">
            <div class="avatar">
              <img src="../../../app-assets/images/gfacohort-.jpg" alt="Cohort Pic"/>
            </div>
          </div>
        </div>
        <h3>Cohorts</h3>
        <h6 class="text-muted">Connect with Investors Ready Startups</h6>
        <span class="badge badge-light-primary profile-badge">Next: 9th January 2023</span>
        <hr class="mb-2" />
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted fw-bolder">Registered</h6>
            <h3 class="mb-0">410</h3>
          </div>
          <div>
            <h6 class="text-muted fw-bolder">Paticipant</h6>
            <h3 class="mb-0">100</h3>
          </div>
          <div>
            <h6 class="text-muted fw-bolder">Investment</h6>
            <h3 class="mb-0">$21k</h3>
          </div>
        </div>
		
		<hr class="mb-2" />
		
		<div class="d-grid">
          <button type="button" class="btn btn-primary">Browse & Paticipate in Cohort</button>
        </div>
		
		
      </div>
    </div>
  </div>
  <!--/ Profile Card -->
    <!-- Developer Meetup Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-developer-meetup">
        <div class="meetup-img-wrapper rounded-top text-center">
           <img src="../../../app-assets/images/eventgfa.jpg" alt="Meeting Pic" height="170" />
        </div>
        <div class="card-body">
          <div class="meetup-header d-flex align-items-center">
            <div class="meetup-day">
              <h6 class="mb-0">THU</h6>
              <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
              <h4 class="card-title mb-25">GFA Event </h4>
              <p class="card-text mb-0">Click here for more details</p>
            </div>
          </div>
          <div class="mt-0">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Oct 11, 2022</h6>
              <small>Oct 11, 2022</small>
            </div>
          </div>
          <div class="mt-2">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Crowne Plaza Hotel,</h6>
              <small>Sheikh Zayed Road, Dubai</small>
            </div>
          </div>
         
		
		<hr class="mb-2" />
		  <div class="d-grid">
          <button type="button" class="btn btn-primary">Request an Invite</button>
        </div>
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->

   


  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->