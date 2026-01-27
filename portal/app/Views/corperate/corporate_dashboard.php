 <!-- BEGIN: Content-->
 <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
 <div class="app-content content " onmouseover='getpost(<?php echo json_encode($this->gfa_model->sort_dcdt_name($cor_info)); ?>); getallposts(3);'>
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
         </div>
         <div class="content-body" onmouseover='getpostcount(<?php echo json_encode($this->gfa_model->sort_dcdt_name($cor_info)); ?>)'>
             <!-- Dashboard Ecommerce Starts -->
             <section id="dashboard-ecommerce">
                 <div class="row match-height">
                     <?php //echo   $this->encrypt->decode($this->session->userdata('admin_access')); ?>
                     <!-- Medal Card -->
                     <?php
                           
                          $loginkey = $this->gfa_model->getWpCred($email);
                          $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
                          $corperateRow = $this->gfa_model->getCorperateStartupReg($corperateRow_Event[0]['Event']);
                          $getAllCorporate = $this->admin_model->getAllCorperateByEmail($email); 
                    ?>
                     <!-- Greetings Card starts -->
                     <div class="col-lg-4 col-md-6 col-sm-12">
                         <div class="card card-congratulations">
                             <div class="card-body text-center">
                                 <img src="<?php echo base_url("public/assets/app-assets/images/elements/decore-left.png"); ?>"
                                     class="congratulations-img-left" alt="card-img-left" />
                                 <img src="<?php echo base_url("public/assets/app-assets/images/elements/decore-right.png"); ?>"
                                     class="congratulations-img-right" alt="card-img-right" />
                                 <div class="avatar avatar-xl bg-primary shadow">
                                     <div class="avatar-content">
                                         <i data-feather="award" class="font-large-1"></i>
                                     </div>
                                 </div>

                                 <div class="text-center">
                                     <h1 class="mb-1 text-white">Congratulations</h1>
                                     <p class="card-text m-auto w-15">
                                         You have done <strong><?php echo $point; ?>%</strong> onboarding. <br><a
                                             href="<?php echo base_url(); ?>gfa/profile_corperate" style="color:#fff;"
                                             target="_blank">Please below to update profile for better experience.</a>
                                         <br>
                                         <a href="<?php echo base_url(); ?>gfa/profile_corperate"
                                             class="btn btn-primary">Update Profile</a>
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
                                         <a href='<?php echo base_url(); ?>gfa/manage_cohort'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-primary me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="box" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countCohort($corperateRow_Event[0]['Event']) ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Cohort</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                         <a href='<?php echo base_url(); ?>gfa/analytics'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-info me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="trending-up" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">

                                                        <?php echo  $this->gfa_model->countRegistrationTotal(); ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Applications</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                         <a href='<?php echo base_url(); ?>gfa/corperate_investor'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-danger me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countConnectStartupsInvestors($corperateRow_Event[0]['Event']) ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Investors </p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12">
                                         <a href='<?php echo base_url(); ?>gfa/corperate_mentor'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-success me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="user" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countConnectStartupsMentors($corperateRow_Event[0]['Event']) ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Mentors</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                 </div>
                             </div>

                             <div class="card-body statistics-body">
                                 <div class="row">
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                         <a href='<?php echo base_url(); ?>gfa/partner_startup'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-primary me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="box" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countPartner("wema-541") ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Partners</p>  
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                         <a href='<?php echo base_url(); ?>gfa/manage_csr'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-info me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="trending-up" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countCorperateCrs($email) ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Community</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                         <a href='<?php echo base_url(); ?>gfa/corporate_startup_news'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-danger me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="dollar-sign" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0" id="media_count">0</h4>
                                                     <p class="card-text font-small-3 mb-0">Media/PR</p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12  mb-2 mb-sm-0">
                                         <a href='<?php echo base_url(); ?>gfa/startup_content'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-success me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="user" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->admin_model->countStoryPostByStartup($corperateRow_Event[0]['Event']) ; ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0">Content</p>
                                                 </div>
                                             </div>
                                         </a>
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
                                 <a href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0]['LoginKey']; ?>&account=corporate"
                                     target="_blank">
                                     <div class="card">
                                         <div class="card-body pb-50">
                                             <h6>Learning</h6>
                                             <h2 class="fw-bolder mb-1">230</h2>
                                             <div id="statistics-order-chart"></div>
                                         </div>
                                     </div>
                                 </a>
                             </div>

                             <!--/ Bar Chart - Orders -->

                             <!-- Line Chart - Profit -->
                             <div class="col-lg-6 col-md-3 col-6">
                                 <a href='<?php echo base_url(); ?>gfa/manage_event'>
                                     <div class="card card-tiny-line-stats">
                                         <div class="card-body pb-50">
                                             <h6>Manage Event</h6>
                                             <h2 class="fw-bolder mb-1">
                                                 <?php echo $this->gfa_model->countAllEvents($email) ?></h2>
                                             <div id="statistics-profit-chart"></div>
                                         </div>
                                     </div>
                                 </a>
                             </div>
                             <!--/ Line Chart - Profit -->
                             <!-- Bar Chart - Orders -->
                             <div class="col-lg-6 col-md-3 col-6">
                                 <div class="card" style="background-color: #958DF3;">
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
                                 <a href="<?php echo base_url(); ?>gfa/reports">
                                     <div class="card card-tiny-line-stats">
                                         <div class="card-body pb-50">
                                             <h6>Hiring</h6>
                                             <h2 class="fw-bolder mb-1"><?php
                    
                                                if($corperateRow[0]['ref']==$cor_info){
                                                    $rowArrays = $this->admin_model->getCorperateEventRefByEmail($email,$cor_info); 
                                                    $row = $this->admin_model->MatchRefStartup($cor_info);
                                                      $rows = $this->admin_model->MatchRefStartups($cor_info);
                                                  }else {
                                                  
                                                  if($corperateRow_Event[0]['Event']=='Microsoft'){
                                                    $rowArrays = $this->admin_model->getCorperateMicrosoftByEmail($email); 
                                                  $row = $this->admin_model->MatchMicrosftStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                                                      
                                                  }else{
                                                      
                                                    $rowArrays = $this->admin_model->getCorperateByEmail($email); 
                                                  $row = $this->admin_model->MatchCorperateStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                                                  $rowsd = $this->admin_model->MatchCorperateStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
    
                                                  }
                                                  
                                                  }
                                                  
                                                  $sum = 0;
                                                  foreach($row as $rowArray){  
                                                    $sum +=  $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['NoOfEmployees'];
                                                  }
                                                    echo $sum + $this->admin_model->getSumOfHiredByWeekly($getAllCorporate[0]['Event']) - $this->admin_model->getSumOfFiredByWeekly($getAllCorporate[0]['Event']) ;
                                    
                                                  //echo $this->admin_model->getSumOfHiredByCompany() ; ?></h2>
                                            <div id="statistics-profit-chart"></div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                                                                  <!--/ Line Chart - Profit -->

                                                                  <!-- Bar Chart - Orders -->
                                                                  <!-- <div class="col-lg-6 col-md-3 col-6">
                                                <div class="card">
                                                  <div class="card-body pb-50">
                                                    <h6>Forms</h6>
                                                    <h2 class="fw-bolder mb-1">3</h2>
                                                    <div id="statistics-order-chart"></div>
                                                  </div>
                                                </div>
                                              </div> -->
                                                                  <!--/ Bar Chart - Orders -->

                                                                  <!-- Line Chart - Profit -->
                                                                  <!-- <div class="col-lg-6 col-md-3 col-6">
                                                <div class="card card-tiny-line-stats" style="background-color: #FFAD5F;">
                                                  <div class="card-body pb-50">
                                                    <h6>Survey</h6>
                                                    <h2 class="fw-bolder mb-1">2</h2>
                                                    <div id="statistics-profit-chart"></div>
                                                  </div>
                                                </div>
                                              </div> -->
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
                                                 <span
                                                     class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                 <span>Returns</span>
                                             </div>
                                             <div class="d-flex align-items-center ms-75">
                                                 <span
                                                     class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                 <span>Expense</span>
                                             </div>
                                         </div>
                                     </div>
                                     <div id="revenue-report-chart"></div>
                                 </div>
                                 <div class="col-md-4 col-12 budget-wrapper">
                                     <div class="btn-group">
                                         <button type="button"
                                             class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                                             data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                             2023
                                         </button>
                                         <div class="dropdown-menu">
                                             <a class="dropdown-item" href="#">2022</a>
                                         </div>
                                     </div>
                                     <h2 class="mb-25">$<?php echo $totalTrans; ?></h2>
                                     <div class="d-flex justify-content-center">
                                         <span class="fw-bolder me-25">Tax:</span>
                                         <span><?php echo $tax ?></span>
                                     </div>
                                     <div id="budget-chart"></div>
                                     <a href="<?php echo base_url(); ?>gfa/corporate_report"
                                         class="btn btn-primary">View All Report</a>
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
                                    
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--/ Company Table Card -->



                     <!-- Mentor Card -->
                     <div class="col-lg-4 col-12">
                         <div class="card card-user-timeline">
                             <div class="card-header">
                                 <div class="d-flex align-items-center">
                                     <i data-feather="list" class="user-timeline-title-icon"></i>
                                     <h4 class="card-title">Latest News</h4>
                                 </div>
                             </div>
                             <div class="card-body">

                                 <ul class="timeline ms-50" id="startup_news">
                                     <h6>Loading.....</h6>
                                 </ul>
                                 <ul class="timeline ms-50" id="startup_news_rand">
                                 </ul>

                             </div>
                             <!--        <hr class="mb-2" />-->
                             <!--          <div class="d-grid">         -->
                             <!--<a href="<?php echo base_url(); ?>gfa/add_story" class="btn btn-primary" >+ Add Story</a> -->
                             <!--         </div>-->
                         </div>
                     </div>
                     <!--/ Transaction Card -->

                     <!-- Profile Card -->
                     <div class="col-lg-4 col-md-6 col-12">
                         <div class="card card-profile">
                             <img src="https://getfundedafrica.com/images/cohort.jpg" class="img-fluid card-img-top"
                                 alt="Profile Cover Photo" />
                             <div class="card-body">
                                 <div class="profile-image-wrapper">
                                     <div class="profile-image">
                                         <div class="avatar">

                                             <img src="<?php echo base_url("public/assets/app-assets/images/gfacohort.jpg"); ?>"
                                                 alt="Cohort Pic" />
                                         </div>
                                     </div>
                                 </div>

                                 <h6 class="text-muted">NEXT COHORT STARTING</h6>
                                 <br>

                                 <h3>Investor Readiness Cohort</h3>
                                 <br>
                                 <span class="badge badge-light-primary profile-badge"> 9th Jan 2023</span><br><br>

                                 <hr class="mb-2" />
                                 <div class="d-grid">
                                     <button onclick="document.location='https://getfundedafrica.com/cohort'"
                                         type="button" class="btn btn-primary">Learn more</button>
                                 </div>
                                 <!--        	<br>
                                      <br>
                                            
                                    <h3> Cohort</h3>
                                  
                                    <span class="badge badge-light-primary profile-badge"> </span><br><br>
                                    
                                    
                                    <button onclick="document.location=''" type="button" class="btn btn-primary" style="float:auto;">Learn more</button> 
                                          -->

                             </div>
                         </div>
                     </div>
                     <!--/ Profile Card -->
                     <!-- Developer Meetup Card -->
                     <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="<?php echo base_url("public/assets/app-assets/images/eventgfa.jpg"); ?>" alt="Meeting Pic" height="170" />
                                </div>

                                
                                <div class="card-body">
                                <h4 class="card-title mb-25"> Events </h4>

                                <?php if(empty($eventResp['Title'])){ echo ''; $limit = 2;}else{  ?>
                                    <div class="meetup-header d-flex align-items-center">
                                    
                                    
                                        <div class="meetup-day mt-1">
                                            <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($eventResp['Date']));
                                            echo $this->gfa_model->getDay($dateEvent);  ?>
                                            </h6>
                                            <h5 class="mb-0"><?php echo date('d', strtotime($eventResp['Date']));  ?>
                                            </h5>-<h5 class="mb-0"><?php echo date('M', strtotime($eventResp['Date']));  ?>
                                            </h5>
                                        </div>
                                        <div class="my-auto">
                                            
                                            <p class="card-text mb-0"><?php echo $eventResp['Title']; ?></p>
                                            <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank">Click here for
                                                    more details</a></p>
                                        </div>

                                    </div>
                                    <?php  $limit = 1; }  ?>
                                    <?php $rowEvent = $this->gfa_model->getEventByEmailLimit($limit);
                                        foreach($rowEvent as $rowArrayEvent){
                                        ?>
                                    <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                            <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($rowArrayEvent['start_date']));
                                            echo $this->gfa_model->getDay($dateEvent);  ?>
                                            </h6>
                                            <h5 class="mb-0"><?php echo date('d', strtotime($rowArrayEvent['start_date']));  ?>
                                            </h5>-<h5 class="mb-0"><?php echo date('M', strtotime($rowArrayEvent['start_date']));  ?>
                                            </h5>
                                        </div>
                                        <div class="my-auto">
                                            
                                            <p class="card-text mb-0"><?php echo $rowArrayEvent['title']; ?></p>
                                            <p><a href="<?php echo base_url(); ?>gfa/events/<?php echo $rowArrayEvent['ref_id']; ?>">Click here for
                                                    more details</a></p>
                                        </div>
                                    </div>
                                    <?php }  ?>
                                    <input type="hidden" class="eventId" value="<?php echo $eventResp['ID']; ?>">
                                    <input type="hidden" class="title" value="<?php echo $eventResp['Title']; ?>">
                                    <!--<a href="<?php echo base_url(); ?>gfa/add_event" class="btn btn-primary mt-1">+Add Event</a>-->
                                    <!--<a href="<?php echo base_url(); ?>gfa/manage_event" class="btn btn-primary mt-1 me-sm-1">My Events</a>-->
                                    <!--<a href="<?php echo base_url(); ?>gfa/all_events" class="btn btn-primary mt-1 me-sm-1">All Events</a>-->
                                    
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

 