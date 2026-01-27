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
 <?php     
            //$loginkey = $this->gfa_model->getWpCred($email);  ?>
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5><?php echo lang('translation.SMEs Mentees Details') ?></h5>
          <!--<h5>Congratulations ðŸŽ‰!</h5>-->
          <!--<p class="card-text font-small-3">You have won gold medal</p>-->
          <div class="row">
              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                  <h3 class="mb-75 mt-2 pt-50">
              <div class="card-text font-small-3"><?php echo lang('translation.Matched') ?></div>
                   
                    <a href="#"><?php echo $totalMatched; ?></a>
                  </h3>
              </div>
              <div class="col-xl-6 col-sm-6 col-12 mb-2 mb-xl-0">
                  <h3 class="mb-75 mt-2 pt-50">
              <div class="card-text font-small-3"><?php echo lang('translation.Connected') ?></div>
                    
                    <a href="#"><?php echo $totalConnect; ?></a>
                  </h3>
              </div>
          </div>
          
          <a href="<?php echo base_url("gfa/mentor_startups/"); ?>" class="btn btn-primary"><?php echo lang('translation.Search Startups') ?></a>
          <img src="<?php echo base_url("public/assets/app-assets/images/gold.png"); ?>" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title"><?php echo lang('translation.Analytics Summary') ?></h4>
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
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Startups') ?></p>
                  <div class="font-small-2 text-muted"></div>

                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Resources') ?></p>
                  <div class="font-small-2 text-muted"></div>
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
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Meetings') ?></p>
                  <div class="font-small-2 text-muted"></div>
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
                  <h4 class="fw-bolder mb-0">0</h4>
                  <p class="card-text font-small-3 mb-0"><?php echo lang('translation.Report') ?></p>
                  <div class="font-small-2 text-muted"></div>
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
    <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table" id="table">
              <thead>
        <tr>
                  <th colspan="5"><?php echo lang('translation.BROWSE YOUR RECOMMENDED STARTUPS') ?>  <a href="<?php echo base_url("gfa/mentor_startups/"); ?>" class="btn btn-primary"><?php echo lang('translation.BROWSE ALL STARTUPS') ?></a></th>
                 
                </tr>
                <!-- <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Interest</th>
                  <th>Investment Size</th>
                  <th></th>
                </tr> -->
              </thead>
             
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

    