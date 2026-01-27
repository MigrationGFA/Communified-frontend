
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
            <h4 class="card-title">Manage CSR Posted</h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
    <?php 
                   
                  if($admin_access=='sub-admin'){ echo '';}else{ ?>
        <div class="col-lg-12 text-center mb-2">
        <a href="<?php echo base_url("gfa/corperate_add_csr"); ?>" class="btn btn-primary btn-next" style="float:auto;">+ Add CSR</a>
        </div>
        <?php }  ?>
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
                  <th>CSR Title </th>
                  <th>Date</th>
                  <th class="locationChange">Participants</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                $row = $this->gfa_model->getAllCsrByEmail($email);
               
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
                        <div class="fw-bolder"><?php echo $rowArray['title'] ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="calendar" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['time_submit']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                       <a href="<?php echo base_url("gfa/csr_apply/"); ?><?php echo $rowArray['csr_id']; ?>" >   <span class="fw-bolder me-1">Check [<?php echo $this->gfa_model->countCSRParticipant($rowArray['csr_id']); ?>]</span></a>
                      
                    </div>
                  </td>
                   
     
                  <td>
                    <div class="d-flex align-items-center">
                
               <a href="<?php echo base_url("gfa/csr/")?><?php echo $rowArray['title']; ?>" ><i data-feather="external-link" class="text-success font-medium-1"></i></a> <?php  if($admin_access=='sub-admin'){ echo '';}else{ ?>| 
               <a href="<?php echo base_url("gfa/edit_csr/")?><?php echo $rowArray['csr_id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i></a> | 
               <a href="#"><i data-feather="trash" class="text-success font-medium-1"></i></a>

               <?php }  ?>
                    </div>
                  </td>
                </tr>
                <?php   }  ?>
               
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

   