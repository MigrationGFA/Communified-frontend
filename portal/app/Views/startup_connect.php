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

<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title"> Startups </h4>

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
        <div class="col-lg-12 text-center mb-2">
            <!--data-bs-target="#checkHireProfile" data-bs-toggle="modal"-->
            <!--<a href="<?php echo base_url(); ?>gfa/corperates" class="btn btn-secondary btn-next" disabled> Connect </a>   <a href="#" class="btn btn-primary btn-next" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" class="btn btn-primary btn-next" > Schedule Meeting </a>-->
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
  <?php       
                $rowArray = $this->admin_model->getCorperateMicrosoftByEmail($email); 
     //Financial Services
         //$row = $this->admin_model->MatchInvestorDefaultLimitByOne($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']);  
    	$row = $this->admin_model->getStartupMicrosoft();
    	
    	if(!empty($row)){     
    	    
    	    ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Industry</th>
                  <th>Business Solution</th>
                  <th>Core Interest</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 
				foreach($row as $rowArray){  
                if($rowArray['Email']==$email){echo '';}else{
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
                        <div class="fw-bolder"><?php echo $this->gfa_model->getStartUpDetails($rowArray['Email'])[0]['Primary_Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $this->gfa_model->getStartUpDetails($rowArray['Email'])[0]['Startup_Company_Name'] ; ?></div>
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
                      <span><?php echo str_replace("?","",$this->gfa_model->getStartUpDetails($rowArray['Email'])[0]['PrimaryBusinessIndustry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['Solution_Corperate']; ?></span>
                      <span class="font-small-2 text-muted"><?php echo $rowArray['Startup_Model']; ?></span>
                    </div>
                  </td>
                  <td><?php echo $rowArray['Core_Interest_Corporate']; ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                  | <a href="<?php echo base_url(); ?>gfa/corperate_startup_details/<?php echo $rowArray['Id']; ?>" >   <span class="fw-bolder me-1">Meet Innovators</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a> | <a href="<?php echo base_url(); ?>gfa/schedule/startup/<?php echo $rowArray['Id']  ?>" >   <span class="fw-bolder me-1">Schedule Meeting</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a> 
                    </div>
                  </td>
                </tr>
                <?php } } ?>
          
                
              </tbody>
            </table>
          </div>
          
          <?php }else{ echo '<h5 class="card-title">No record found</h5>'; } ?>
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
  <!--checkInterview-->
  <script>
    $(function(){
        
        
         $(".requestPanel").click(function(){
         
         var status = 1;
          $.ajax({
     data:{status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/requestPanel",
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
     url: "<?php echo base_url(); ?>gfa/requestInterview",
     error:function() {$(".requestPanel").html('Error Request');},
	 beforeSend:function() {$(".requestInterview").html('Requesting...');$('.requestInterview').prop("disabled", true );},
      success: function(data) {
       
		 $(".requestInterview").html('Request Sent'); 
	    $('.requestInterview').prop("disabled", true );
	   
	  
	
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

   