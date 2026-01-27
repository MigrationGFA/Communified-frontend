<?php 
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        $email = session()->get('email'); 
        $loginkey = '';
    ?>
    <!-- BEGIN: Content-->
    <div class="app-content content " onmouseover='getallposts(5)'>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
           <input type="hidden" id="action_email" value="<?php echo $email; ?>">
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
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
                    </div>
                    <div class="row match-height loadModule1">
                       
                    </div>






                      <div class="row match-height">
                        <div class="col-lg-12 col-12">
                            <div class="row match-height">
                                <p class="loadingPage1"></p>
                                <?php  //if(empty($this->gfa_model->getAllDcdtByEmail($email))){ echo ''; }else{ ?>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo  $GetCounts[0]['startup_count'] ?>
                                                    <?php echo lang('translation.SMEs') ?></span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.SMEs') ?></h4>
                                                   

                                                    <small class="fw-bolder"><a
                                                            href="<?php echo base_url('gfa/notify_inbox'); ?>"><?php echo lang('translation.Connect') ?>
                                                            </a> | <a
                                                            href="<?php echo base_url('gfa/find_sme'); ?>"><?php echo lang('translation.Search') ?>
                                                            </a></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="layers" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo  $this->gfa_model->countWeeklyReport($email) ?>
                                                    <?php echo lang('translation.Reports') ?></span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Weekly Update') ?></h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder"><a
                                                            href="<?php echo base_url('gfa/add_report'); ?>"><?php echo lang('translation.Add Weekly Report') ?> </a> | <a
                                                            href="<?php echo base_url('gfa/report'); ?>"><?php echo lang('translation.Weekly Report') ?></a></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="layers" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php   //}   ?>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo lang('translation.Courses')?></span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Learning') ?></h4>
                                                    <!--https://remsana.getfundedafrica.com/sso.php?key=bG9sdWRlYm9sYUB5YWhvby5jb20-->
                                                    
                                                    
                                                        <a style="color: #7367F0;" href="<?php echo base_url('gfa/learning'); ?>">                                                                
                                                            <small class="fw-bolder">
                                                                <!--Add Courses | --><?php echo lang('translation.Free Course') ?> | <?php echo lang('translation.All Courses') ?>
                                                            </small>
                                                        </a>
                                                    
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <i data-feather="book-open" class="font-large-1"
                                                            style="color:#005862;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo lang('translation.Digital Services') ?></span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Services') ?></h4>
                                                    
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    
                                                         
                                                   
                                                    <small class="fw-bolder"><a
                                                            href="https://pmemarket.cipme.ci/jobs/services-list"
                                                            target="_blank"><?php echo lang('translation.Buy a Service') ?></a> | <a
                                                            href="https://pmemarket.cipme.ci/jobs/services-list"
                                                            target="_blank"><?php echo lang('translation.Sell a Service') ?></a></small> 
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="award" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
                                                    echo $GetCounts[0]['mentor_count'] ?>
                                                    <?php echo lang('translation.Mentors') ?></span>


                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Mentors') ?></h4>



                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    <small class="fw-bolder">

                                                      

 
                                                            
                                                            <a href="<?php echo base_url('gfa/startup_mentor'); ?>">
                                                                
    
                                                                <?php echo lang('translation.Connect') ?> [<?php echo $this->gfa_model->countStartupConnect($email,'startup-mentor'); ?>]</a> </small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="users" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
                                                    echo $GetCounts[0]['investor_count']; 
                                                  ?>
                                                    <?php echo lang('translation.Investors') ?>

                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Investors') ?></h4>

                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    <small class="fw-bolder">
                                                            
                                                            <a href="<?php echo base_url('gfa/startup_investor'); ?>" >
                                                           
                                                                 <?php echo lang('translation.Connect') ?> [<?php echo $this->gfa_model->countStartupConnect($email,'startup-investor'); ?>]</a></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="users" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
              
                                                    $GetCounts[0]['cooperate_count']
                                                  ?> <?php echo lang('translation.Corporate') ?></span>
                                       
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Corporate') ?></h4>



                                                    <!--$urly = base_url()."gfa/startup_cooperate";-->
                                                    <small class="fw-bolder">
                                                        

                                                        
                                                         
                                                        <a
                                                            href="<?php echo base_url('gfa/startup_cooperate'); ?>"><?php echo lang('translation.Connect') ?> [<?php echo $this->gfa_model->countStartupConnect($email,'startup-corporate'); ?>]
                                                        </a>
                                                         | <a href="<?php echo base_url('gfa/csr_participate'); ?>"><?php echo lang('translation.Participate in CSR') ?></a></small>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="briefcase" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php if($this->gfa_model->countFileUploded($email)==1 || $this->gfa_model->countFileUploded($email)==0  ){
                                                    echo $this->gfa_model->countFileUploded($email).' File';
                                                    
                                                }else{ 
                                                        echo $this->gfa_model->countFileUploded($email)." Files";
                                                        
                                                        } ?> </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Dealroom') ?></h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder">
                                                    <?php if($creditPointScore >=50)  {  ?>
 <a class="d-flex align-items-center" href="<?php echo base_url('gfa/dealroom'); ?>"><?php echo lang('translation.View All Files') ?> </a>
                                                            
  <?php   }else{  ?>
     <a href="<?php echo base_url('gfa/dealroom'); ?>"> <?php echo lang('translation.View All Files') ?> </a>
     <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">-->
   <?php  }  ?>    
                                                     
                                                    </small>
                                                  
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="file" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php if($GetCounts[0]['resource_count']==1 || $GetCounts[0]['resource_count']==0  ){
                                                    echo $GetCounts[0]['resource_count'].' File';
                                                    
                                                }else{ 
                                                        echo $GetCounts[0]['resource_count']." Files";
                                                        
                                                        } ?> </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Resources') ?></h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder">
                                                   
 <a class="d-flex align-items-center" href="<?php echo base_url('gfa/resource'); ?>"> <?php echo lang('translation.View Resources') ?></a>
                                                            
     
                                                     
                                                    </small>
                                                  
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="file" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                      
                                <?php  if(!empty($this->gfa_model->getAllDcdtByEmail($email))){ echo ''; }else{ ?>


                                <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>400 work desk</span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Workspace</h4>
                                                    <a href="<?php //echo base_url(); ?>gfa/comingsoon">
                                                        <small class="fw-bolder">Book Space | Add Workspace</small>
                                                    </a>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="layers" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <?php   }   ?>


                                

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php if($this->gfa_model->countAllStory()==1 || $this->gfa_model->countAllStory()==0  ){
                                                    echo $this->gfa_model->countAllStory()." All the story";
                                                    
                                                }else{ 
                                                        echo $this->gfa_model->countAllStory()." All the story";
                                                        
                                                        } ?> </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder"><?php echo lang('translation.Tell Your Story') ?></h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder"><a
                                                            href="<?php echo base_url('gfa/all_stories'); ?>"><?php echo lang('translation.All Stories') ?></a> | <a
                                                            href="<?php echo base_url('gfa/add_story'); ?>"> <?php echo lang('translation.Add Story') ?>
                                                        </a> | <a href="<?php echo base_url('gfa/manage_story'); ?>">
                                                            <?php echo lang('translation.Manage Story') ?> </a></small>
                                                    </a>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="edit" class="font-large-1"
                                                            style="color:#005862;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                


                            </div>
                        </div>

                        <!-- Timeline Card -->
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



                                        <h6>Loading.....</h6>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--/ Timeline Card -->



                        <!-- Profile Card -->
                       
                        <!--/ Profile Card -->


                        <!-- Developer Meetup Card -->
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="<?php echo base_url('public/assets/app-assets/images/eventgfa.jpg'); ?>" alt="Meeting Pic" height="170" />
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
                                            <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank"><?php echo lang('translation.Click here for
                                                    more details') ?></a></p>
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
                                    <input type="hidden" class="eventId" value="<?php echo (!empty($eventResp['ID']))?$eventResp['ID'] : ""; ?>">
                                    <input type="hidden" class="title" value="<?php echo (!empty($eventResp['Title']))?$eventResp['Title'] : ""; ?>">
                                    <a href="<?php echo base_url('gfa/add_event'); ?>" class="btn btn-primary mt-1">+<?php echo lang('translation.Add Event') ?></a>
                                    <a href="<?php echo base_url('gfa/manage_event'); ?>" class="btn btn-primary mt-1 me-sm-1"><?php echo lang('translation.My Events') ?></a>
                                    <a href="<?php echo base_url('gfa/all_events'); ?>" class="btn btn-primary mt-1 me-sm-1"><?php echo lang('translation.All Events') ?></a>
                                    
                                </div>


                                
                            </div>
                        </div>
                        <!--/ Developer Meetup Card -->





                </section>
                <!-- Dashboard Analytics end -->
                <select id="mySelect" style="display: none;">
                  <option value="">Option</option>
        <option value="Option 1">Option 1</option>
       
    </select>
        
      </div>
    </div>

       
        </div>
    <!-- END: Content-->
    <script>
    $(document).ready(function() {
       $('#mySelect').change(function() {
    
    // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/dashboard_sub") ?>',
        method: 'GET',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadingPage1").html("Loading Ananlytics...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
            // Code to be executed after the AJAX request is successful
            $(".loadingPage1").html("");
            $(".loadModule1").html(data);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage1").html('Error:', status, error);
        }
    });
        
}).change();
    });
        
    </script>
        <script>
          $(function() {


              $(".attendEvent").click(function() {

                  var eventId = $('.eventId').val();
                  var title = $('.title').val();
                  $.ajax({
                      data: {
                          eventId: eventId,
                          title: title
                      },
                      type: "POST",
                      url: "<?php echo base_url('gfa/attendEvent'); ?>",
                      error: function() {
                          $(".attendEvent").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".attendEvent").html('Requesting...');
                          $('.attendEvent').prop("disabled", true);
                      },
                      success: function(data) {

                          $(".attendEvent").html('Enquiry Pending');
                          $('.attendEvent').prop("disabled", true);



                      }

                  });

              });

              $(".RedeemCredit").click(function() {

                  var credit = $('.credit').val();
                  $.ajax({
                      data: {
                          credit: credit
                      },
                      type: "POST",
                      url: "<?php echo base_url('gfa/creditRedeem'); ?>",
                      error: function() {
                          $(".displayRedeem").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".displayRedeem").html('Requesting...');
                      },
                      success: function(data) {


                          $(".displayRedeem").html('Request Pending');
                          $('.RedeemCredit').prop("disabled", true);



                      }

                  });

              });

          });
        </script>


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>
