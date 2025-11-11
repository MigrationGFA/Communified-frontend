
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Event Participants</h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        <div class="col-lg-12 text-center mb-2">
        <?php  $account_type = $this->encrypt->decode($this->session->userdata('account_type'));
        if($account_type == 'corperate'){  ?>
        <a href="<?php echo base_url(); ?>gfa/corperate_add_event" class="btn btn-primary btn-next" style="float:auto;">+ Add Event</a>
        <?php } 
         if($account_type == 'startup'){  
             
        ?>
                <a href="<?php echo base_url(); ?>gfa/add_event" class="btn btn-primary btn-next" style="float:auto;">+ Add Event</a>
                <?php }  ?>        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
              
               
            <table class="table">
              <thead>
                   <tr>
                      <td>
            
              </td>
              <td>
            
              </td>
               <td>
            
              </td>
               <td>
                <div class="col-xl-6 col-md-6 col-12">
              <!--<div class="mb-1">-->
              <!--  <label class="form-label" for="basicInput">Search Jobs</label>-->
              <!--  <input type="text" name="searchJobs" class="form-control searchJobs" id="basicInput" placeholder="Enter search">-->
              <!--</div>-->
            </div>
              </td>
              </tr>
                <tr>
                  <th>Name</th>
                  <th>Email</th>
                  <th class="locationChange">Country</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                 $row = $this->admin_model->applyEvent($id);
                //$startupArray = $this->admin_model->getAllStartUpNByEmail($row[0]['email']);
                //$rowArrayM = $this->admin_model->getAllStartUpNByEmail($row[0]['email']); 
               
                
				foreach($row as $rowArray){
				    
                
                ?> 
             
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                        </div>
                      </div>
                      <div>
                        <?php if(!empty($this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['Primary_Contact_Name'])){ ?>
                        <div class="fw-bolder"><?php echo $this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['Primary_Contact_Name'] ?></div>
                        <div class="font-small-2 text-muted"> <?php echo $this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['Startup_Company_Name'] ; ?></div>
                      <?php }else{   ?>
                        <div class="fw-bolder"><?php echo $rowArray['attend_name']; ?></div>
                        <div class="font-small-2 text-muted"> <?php echo $rowArray['attend_phone'] ; ?></div>
                     <?php }  ?>
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
                      <span><?php echo str_replace("?","",$this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['Contact_Email']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['Country']; ?></span>
                      
                    </div>
                  </td>
                   
     
                  <td>
                    <div class="d-flex align-items-center">
                
                <a href="<?php echo base_url(); ?>gfa/corperate_startups_details/<?php echo $this->admin_model->getAllStartUpNByEmail($rowArray['email'])[0]['STUP_ID']; ?>" >   <span class="fw-bolder me-1">Check Profile</span></a>
                

                  
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
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
   
  </div>
        <script>
            
            $(function(){
                
                $(".searchJobs").keyup(function(){
                    // $(".locationChange").html("Need Location");
                      var industry = $('.searchJobs').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/searchJobs",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            
             $(".service").change(function(){
                //  $(".locationChange").html("Service Location");
                      var service = $('.service').serialize();
                             
                             $.ajax({
     data:service,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp_service",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            });
            
        </script>

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   