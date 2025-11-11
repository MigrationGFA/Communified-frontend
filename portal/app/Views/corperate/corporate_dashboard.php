 <!-- BEGIN: Content-->
 <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
 <div class="app-content content " onmouseover='getallposts(5)'>
     <div class="content-overlay"></div>
     <div class="header-navbar-shadow"></div>
     <div class="content-wrapper container-xxl p-0">
         <div class="content-header row">
         </div>
         <div class="content-body" onmouseover=''>
             <!-- Dashboard Ecommerce Starts -->
             <section id="dashboard-ecommerce">
                 <div class="row match-height">
                    <!-- Current Notification -->
    
<div class="row connectionAlert">
    
    </div>
    <!-- Current Notification -->
    <div class="col-xl-12 col-md-12 col-12">
         <div class="alert alert-success alert-dismissible fade show" role="alert">
              <div class="alert-body dashboardNotification">
                
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
    
      </div>
    <!-- End of Current Notification -->
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
                                     <h1 class="mb-1 text-white"><?php echo lang('translation.Congratulations') ?></h1>
                                     <p class="card-text m-auto w-15">
                                         You must complete your integration.<br><a
                                             href="<?php echo base_url(); ?>gfa/profile_corperate" style="color:#fff;"
                                             target="_blank"> Please update your profile for a better user experience.</a>
                                         <br>
                                         <a href="<?php echo base_url(); ?>gfa/profile_corperate"
                                             class="btn btn-primary"><?php echo lang('translation.Update Profile') ?></a>
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
                                 <h4 class="card-title"><?php echo lang('Your Interations in Summary') ?></h4>
                                 <div class="d-flex align-items-center">
                                     <p class="card-text font-small-2 me-25 mb-0"><?php echo lang('translation.Recent updated transactions') ?></p>
                                 </div>
                             </div>
                             <div class="card-body statistics-body">
                                 <div class="row">
                                     
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
                                                        <?php $startupCount = $this->gfa_model->getStartupCount()[0]['startup_count']; echo $startupCount ?>
                                                         
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Applications') ?></p>
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
                                                     <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Community') ?></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>
                                     <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                         <a href='<?php echo base_url(); ?>gfa/notify_inbox'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-info me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="box" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->gfa_model->getNotificationSummary($email)[0]['total_notifications'] ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Messaging') ?></p>
                                                 </div>
                                             </div>
                                         </a>
                                     </div>

                                     <div class="col-xl-3 col-sm-6 col-12  mb-2 mb-sm-0">
                                         <a href='<?php echo base_url(); ?>gfa/manage_event'>
                                             <div class="d-flex flex-row">
                                                 <div class="avatar bg-light-success me-2">
                                                     <div class="avatar-content">
                                                         <i data-feather="users" class="avatar-icon"></i>
                                                     </div>
                                                 </div>
                                                 <div class="my-auto">
                                                     <h4 class="fw-bolder mb-0">
                                                         <?php echo $this->gfa_model->countAllEvents($email) ?>
                                                     </h4>
                                                     <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Events') ?></p>
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
                                 <a href="<?php echo base_url(); ?>gfa/learning"
                                     target="_blank">
                                     <div class="card">
                                         <div class="card-body pb-50">
                                             <h6><?php echo lang('translation.Learning') ?></h6>
                                             <h2 class="fw-bolder mb-1">30</h2>
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
                                             <h6><?php echo lang('translation.Manage Event') ?></h6>
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
                                         <h6><?php echo lang('translation.Perks') ?></h6>
                                         <h2 class="fw-bolder mb-1">25000 </h2>
                                         <div id="statistics-order-chart"></div>
                                     </div>
                                 </div>
                             </div>
                             <!--/ Bar Chart - Orders -->

                             <!-- Line Chart - Profit -->
                             <div class="col-lg-6 col-md-3 col-6">
                                 <a href="https://pmemarket.cipme.ci" target="_blank">
                                     <div class="card card-tiny-line-stats">
                                         <div class="card-body pb-50">
                                             <h6>Embauche</h6>
                                             <h2 class="fw-bolder mb-1"><?php
                    
                                                
                                                  
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
                                         <h4 class="card-title mb-50 mb-sm-0"><?php echo lang('translation.Weekly Report') ?></h4>
                                         <div class="d-flex align-items-center">
                                             <div class="d-flex align-items-center me-2">
                                                 <span
                                                     class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                                                 <span><?php echo lang('translation.Returns') ?></span>
                                             </div>
                                             <div class="d-flex align-items-center ms-75">
                                                 <span
                                                     class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                                                 <span><?php echo lang('translation.Expense') ?></span>
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
                                     <h2 class="mb-25"><?php echo $totalTrans; ?></h2>
                                     <div class="d-flex justify-content-center">
                                         <span class="fw-bolder me-25"><?php echo lang('translation.Tax') ?>:</span>
                                         <span><?php echo $tax ?> </span>
                                     </div>
                                     <div id="budget-chart"></div>
                                     <a href="<?php echo base_url(); ?>gfa/add_report"
                                         class="btn btn-primary"><?php echo lang('translation.View All Report') ?></a>
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
                                     <table class="table" id="table">
                                         <thead>
                                             <tr>
                                                 <th colspan="5">
                                                    <?php echo lang('translation.BROWSE YOUR RECOMMENDED STARTUPS') ?> 
                                                 <a href="<?php echo base_url(); ?>gfa/corperate_startups/" class="btn btn-success"><?php echo $startupCount; ?> </a></th>

                                             </tr>
                                             
                                         </thead>
           
                                     </table>
                                    
                                 </div>
                             </div>
                         </div>
                     </div>
                     <!--/ Company Table Card -->



                     <!-- Mentor Card -->
                     <div class="col-lg-6 col-12">
                         <div class="card card-user-timeline">
                             <div class="card-header">
                                 <div class="d-flex align-items-center">
                                     <i data-feather="list" class="user-timeline-title-icon"></i>
                                     <h4 class="card-title"><?php echo lang('translation.Latest News') ?></h4>
                                 </div>
                             </div>
                             <div class="card-body">

                                 <ul class="timeline ms-50" id="startup_news">
                                     <h6><?php echo lang('translation.Loading') ?>.....</h6>
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
                     
                     <!--/ Profile Card -->
                     <!-- Developer Meetup Card -->
                     <div class="col-lg-6 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="<?php echo base_url("public/assets/app-assets/images/eventgfa.jpg"); ?>" alt="Meeting Pic" height="170" />
                                </div>

                                
                                <div class="card-body">
                                <h4 class="card-title mb-25"> <?php echo lang('translation.Events') ?> </h4>

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
                                            <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank"><?php echo lang('translation.Click here for more details') ?></a></p>
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
                                            <p><a href="<?php echo base_url(); ?>gfa/events/<?php echo $rowArrayEvent['ref_id']; ?>"><?php echo lang('translation.Click here for more details') ?></a></p>
                                        </div>
                                    </div>
                                    <?php }  ?>
                                    <input type="hidden" class="eventId" value="<?php echo $eventResp['ID']; ?>">
                                    <input type="hidden" class="title" value="<?php echo $eventResp['Title']; ?>">
                                    <a href="<?php echo base_url(); ?>gfa/add_event" class="btn btn-primary mt-1">+<?php echo lang('translation.Add Event') ?></a>
                                    <a href="<?php echo base_url(); ?>gfa/manage_event" class="btn btn-primary mt-1 me-sm-1"><?php echo lang('translation.My Events') ?></a>
                                    <a href="<?php echo base_url(); ?>gfa/all_events" class="btn btn-primary mt-1 me-sm-1"><?php echo lang('translation.All Events') ?></a>
                                    
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

 <script>

	$(function () {
			// for (var i = 1; i < 20; i++) {
			// 	$('#table').append('<tr class="data"><td>' + i + '</td><td>Some title</td><td>Some Description</td></tr>');
			// }

			load = function() {
				window.tp = new Pagination('#tablePaging', {
					itemsCount: <?php echo $count ?>,
					onPageSizeChange: function (ps) {
						console.log('changed to ' + ps);
					},
					onPageChange: function (paging) {
						//custom paging logic here
						console.log(paging);
						var start = paging.pageSize * (paging.currentPage - 1),
							end = start + paging.pageSize,
							$rows = $('#table').find('.data');

						$rows.hide();

						for (var i = start; i < end; i++) {
							$rows.eq(i).show();
						}
					}
				});
			}

		load();
	});
	</script>