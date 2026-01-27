<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
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

            <h4 class="card-title">Recommended Corporate for Startups</h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
         <div class="col-lg-12 text-center mb-2">
             <!--data-bs-target="#checkHireProfile" data-bs-toggle="modal"-->
            
        <?php     
          
        
        if(!empty($this->admin_model->getAllStartUpNByEmailMicrosoft($email))){  ?>
                    
                  
          <a href="<?php echo base_url(); ?>gfa/startup_connect" class="btn btn-primary btn-next" style="margin:5px;"> Connect to other Startups</a>   <a href="#" class="btn btn-primary btn-next" style="margin:5px;" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" class="btn btn-primary btn-next" style="margin:5px;"> Schedule Meeting </a>
          
     <?php   }  ?>
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
            <?php 
            if(empty($this->admin_model->getAllStartUpNByEmailMicrosoft($email))){
            
            if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
            
            
            <?php  echo ''; }else{  ?>
            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Subscribe</h4>
              <div class="alert-body">
               Kindly subscribe to view other other corperate/organisation information.
              </div>
            </div>
            
            <?php } } ?>
          <div class="table-responsive">
              
             
            <table class="table">
              <thead>
                  <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
             <tr>
                      <td>
            <p>Select a corporates' needs you can think your company can address?</p> 
             <select class="industry" name="industry[]" multiple="multiple">
              <!--<option value="">Select a corporates' needs you can think your company can address?</option>-->
              <option value="Distribution & Logistics Support">Distribution & Logistics Support</option>
              <option value="Micro Loans provisioning">Micro Loans provisioning</option>
              <option value="Drone Mapping/Surveillance Services">Drone Mapping/Surveillance Services</option>
              <option value="RecruitmeDistribution & Logistics Supportnt & Human Resource Management">RecruitmeDistribution & Logistics Supportnt & Human Resource Management</option>
              <option value="Market Analytics">Market Analytics</option>
              </select>
              </td>
              <td>
            <p>Select a corporates' services that you may required on a partnership basis</p> 
             <select class="service" name="service[]" multiple="multiple">
              <!--<option value="">Select a corporates' services that you may required on a partnership basis</option>-->
              <option value="Integrated Payments Processing">Integrated Payments Processing</option>
              <option value="BVN Verification">BVN Verification</option>
              <option value="Aerial Mapping/Cadding Services">Aerial Mapping/Cadding Services</option>
              <option value="Credit Scoring Data">Credit Scoring Data</option>
              <option value="Bill Payment Services">Bill Payment Services</option>
              </select>
              </td>
              </tr>
            
            <?php  echo ''; }else{  ?>
                  
              
              <?php }  ?>
                <tr>
                  <th>Name</th>
                  
                 
                  
                  <th>Engage Startup</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                $rowArrayExt = $this->admin_model->getAllStartUpNByEmailExtX($email);
  if(empty($this->admin_model->getAllStartUpNByEmailMicrosoft($email))){          
    
            if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){           
 $row = $this->admin_model->MatchCorperateDefaultLimit($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']);  
 }else{
 $row = $this->admin_model->MatchCorperateDefaultLimitByOne($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']);  
 }
  }else{
      
    $row = $this->admin_model->MatchCorperateMicrosoft($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']);   
  }        
                // $rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Startup_Implementation_Stage'],
				foreach($row as $rowArray){  
                
                ?> 
             
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://getfundedafrica.com/portal/assets/images/uploads/default-avatar.jpg" alt="Toolbar svg" height="40" width="40"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Key_contact_name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Corporate_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  
                  
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['Engage_Startup']; ?></span>
                      
                    </div>
                  </td>
     
                  <td>
                    <div class="d-flex align-items-center">
                
                <a href="<?php //echo base_url(); ?>startup_corperate_details/<?php echo $rowArray['Corporate_ID']; ?>" >   <span class="fw-bolder me-1">Connect</span></a> | 
                 <a href="<?php echo base_url(); ?>gfa/calendar?e=<?php echo $rowArray['Need_contact_email'];  ?>" >   <span class="fw-bolder me-1">Schedule Meeting</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a> 
                
               
                  
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
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
    <div class="modal fade" id="checkHireProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Panel Request</h1>
         
        <p>
             Request to be one of the Panelist at the Microsoft Corporate Innovation and Enterprise Forum.
        </p>
        
        <br>
       
        <button href="#" class="btn btn-primary float-end mt-3 requestPanel" >
          <span class="me-50">Submit</span>
          <i data-feather="user"></i>
        </button>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
     <div class="modal fade" id="checkInterview" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Request Interview</h1>
         
        <p>
             Request for an interview  at the Microsoft Corperate Innovation and Enterprise Forum.
        </p>
        
        <br>
       
        <button href="#" class="btn btn-primary float-end mt-3 requestInterview" >
          <span class="me-50">Submit</span>
          <i data-feather="user"></i>
        </button>
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
   
  </div>
        <script>
            
            $(function(){
                
                
                $(".requestPanel").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestPanelStartup",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestPanel").html('Requesting...');$('.requestPanel').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestPanel").html('Request Sent'); 
	    $('.requestPanel').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
                
                $(".requestInterview").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestInterviewStartup",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestInterview").html('Requesting...');$('.requestInterview').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestInterview").html('Request Sent'); 
	    $('.requestInterview').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
                
                $(".industry").change(function(){
                    $(".locationChange").html("Need Location");
                      var industry = $('.industry').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            
             $(".service").change(function(){
                 $(".locationChange").html("Service Location");
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

   