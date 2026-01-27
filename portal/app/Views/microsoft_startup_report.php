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


            <h4 class="card-title">Recommended Corporate for Startups</h4>

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
        
      <div class="card card-company-table">
        <div class="card-body p-0">
  <?php       
                $row = $this->admin_model->getAllStartUpMicrosoft(); 
     //Financial Services
         //$row = $this->admin_model->MatchInvestorDefaultLimitByOne($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']);  
    	//$row = $this->admin_model->MatchMicrosftStartup($rowArray[0]['Solution_Corperate'],$rowArray[0]['Core_Interest_Corporate']);
    	
    	if(!empty($row)){     
    	   // S/N, Company name, Company type, Company Matched
    	    ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>S/N</th>
                  <th>Company/Name</th>
                  <th>Company Type</th>
                  <th>Company Matched</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 $n = 1;
				foreach($row as $rowArray){  
                    if($rowArray['Startup_Company_Name']!='') {
                    $rowArrayN = $this->admin_model->getAllStartUpByEmailExt($rowArray['Contact_Email']); 
                ?> 
                <tr>
                    <td><?php echo $n++ ; ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                     
                      <div>
                       <strong><?php echo $rowArray['Primary_Contact_Name'] ; ?></strong>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Startup_Company_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                     
                      
                     <?php echo $rowArrayN[0]['Solution_Corperate']; ?>
                          
                    </div>
                  </td>
                  
                  <td>
                <?php      
                
                
                $m = 1;
                $rowStartup = $this->admin_model->MatchCorperateDefaultLimit($rowArrayN[0]['Solution_Corperate'],$rowArrayN[0]['Core_Interest_Corporate']); 
                
                	foreach($rowStartup as $rowStartupArray){ 
              if($this->admin_model->getCorperateMicrosoftByEmail($rowStartupArray['Need_contact_email'])[0]['Corporate_Name']!='') {  
                echo $m++. '. '.$this->admin_model->getCorperateMicrosoftByEmail($rowStartupArray['Need_contact_email'])[0]['Corporate_Name'].'<br>';	    
                	    
                	}
                	}
                
                
                ?>
                      
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

   