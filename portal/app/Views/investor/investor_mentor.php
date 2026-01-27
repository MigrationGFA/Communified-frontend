 <?php 
          $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
  // $email = session()->get('email'); 
  // $loginkey = $this->gfa_model->getWpCred($email);
   ?>

 <!-- BEGIN: Content-->
 <div class="app-content content " onmouseover='getallposts(5)'>
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    
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
    <!-- Medal Card -->

    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5><?php echo lang('translation.Congratulations') ?> </h5>
          <p class="card-text font-small-3"><?php echo lang('translation.You have won gold medal') ?></p>
          <h3 class="mb-75 mt-2 pt-50">
      <div class="card-text font-small-3"><?php echo lang('translation.Total Dealflow') ?></div>
           
            <a href="<?php echo base_url("gfa/investor_deals/"); ?>">$ 0</a>
          </h3>
          <a href="<?php echo base_url("gfa/startups/"); ?>" class="btn btn-primary"><?php echo lang('translation.Search Startups') ?></a>
          <img src="<?php echo base_url("public/assets/app-assets/images/gold.png"); ?>" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title"><?php echo lang('translation.Your Deals in Summary') ?></h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0"><?php echo lang('translation.Transaction History') ?></p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Startups') ?></p>
                  <div class="font-small-2 text-muted"><?php echo lang('translation.Total') ?>: 0</div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0">LPs</p>
                  <div class="font-small-2 text-muted"><?php echo lang('translation.Total') ?>: 0</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Syndicate') ?></p>
                  <div class="font-small-2 text-muted"><?php echo lang('translation.Total') ?>: 0</div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Investment') ?></p>
                  <div class="font-small-2 text-muted"><?php echo lang('translation.Total') ?>: 0</div>
                </div>
              </div>
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
              <h6><?php echo lang('translation.Files uploaded') ?></h6>
              <h2 class="fw-bolder mb-1">0</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        
        <div class="col-lg-6 col-md-3 col-6">
        <a href="<?php echo base_url("gfa/investor_deals/"); ?>"><div class="card card-tiny-line-stats">
            <div class="card-body pb-50">
              <h6><?php echo lang('translation.Startups Connection') ?></h6>
              <h2 class="fw-bolder mb-1"><?php echo $this->admin_model->countInvestorConnection($email)  ?> </h2>
              <div id="statistics-profit-chart"></div>
            </div></a>
          </div> 
        </div>
        <!--/ Line Chart - Profit -->

        <!-- Earnings Card -->
        <div class="col-lg-12 col-md-6 col-12">
          <div class="card earnings-card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h4 class="card-title mb-1"><?php echo lang('translation.Deals') ?></h4>
                  <div class="font-small-2"><?php echo lang('translation.This Month') ?></div>
                  <h5 class="mb-1">0 $</h5>
                  <p class="card-text text-muted font-small-2">
                    <span class="fw-bolder">0%</span><span> <?php echo lang('translation.prospective deals') ?>.</span>
                  </p>
                </div>
                <div class="col-6">
                  <div id="earnings-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Earnings Card -->
      </div>
    </div>

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md-8 col-12 revenue-report-wrapper">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0"><?php echo lang('translation.Investment Report') ?></h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span><?php echo lang('translation.Returns') ?></span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span><?php echo lang('translation.Expense') ?></span>
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
                2024
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">2023</a>
                <a class="dropdown-item" href="#">2022</a>
                <a class="dropdown-item" href="#">2021</a>
              </div>
            </div>
            <h2 class="mb-25">$0</h2>
            <div class="d-flex justify-content-center">
              <span class="fw-bolder me-25"><?php echo lang('translation.Budget') ?>:</span>
              <span>0</span>
            </div>
            <div id="budget-chart"></div>
            <button type="button" class="btn btn-primary"><?php echo lang('translation.Increase Investment') ?></button>
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
                  <th colspan="5"><?php echo lang('translation.BROWSE YOUR RECOMMENDED STARTUPS') ?>  <a href="<?php echo base_url("gfa/startups/"); ?>" class="btn btn-primary"><?php echo lang('translation.BROWSE ALL STARTUPS') ?></a></th>
                 
                </tr>
                
              </thead>
              <tbody>
            
              
      
              </tbody>
            </table>
            <div class="paging-container" id="tablePaging"> </div>
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

                                    <ul class="timeline ms-50" id="startup_news_rand">



                                        <h6><?php echo lang('translation.Loading') ?>.....</h6>

                                    </ul>

                                </div>
                            </div>
                        </div>
                     <!--/ Transaction Card -->

                     <!-- Profile Card -->

                     <!--/ Profile Card -->
                     <!-- Developer Meetup Card -->
                     <div class="col-lg-6 col-md-6 col-12">
                         <div class="card card-developer-meetup">
                             <div class="meetup-img-wrapper rounded-top text-center">
                                 <img src="<?php echo base_url('public/assets/app-assets/images/eventgfa.jpg'); ?>"
                                     alt="Meeting Pic" height="170" />
                             </div>

                           
                             <div class="card-body">
                             
                                 

                                  <hr class="mb-2" />
                                <div class="d-grid">
                                
                                    <button type="button" class="btn btn-primary"><?php echo lang('translation.Attend Event') ?></button>  
                                   
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

    