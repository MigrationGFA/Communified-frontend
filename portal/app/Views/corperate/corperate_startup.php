
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


            <h4 class="card-title">Application Startups/SME for Corporate Programme/Event <?php //echo $this->encrypt->decode($this->session->userdata('cor_info')) ; ?> </h4>

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
 <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
    <div class="col-lg-12 col-12">
        <div class="col-lg-12 text-center mb-2">
            <!--data-bs-target="#checkHireProfile" data-bs-toggle="modal"-->
            <!--<a href="<?php echo base_url(); ?>gfa/corperates" class="btn btn-secondary btn-next" style="margin:5px;" disabled> Connect </a>   <a href="#" class="btn btn-primary btn-next" style="margin:5px;" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" style="margin:5px;" class="btn btn-primary btn-next" > Schedule Meeting </a>-->
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
  <?php         
                 $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
                 $corperateRow = $this->gfa_model->getCorperateStartupReg($corperateRow_Event[0]['Event']);
                
    	        
    	        if($corperateRow_Event[0]['ref']==$cor_info){
                        $rowArrays = $this->admin_model->getCorperateRefByEmail($email,$cor_info); 
    	                $row = $this->admin_model->MatchRefStartup($cor_info);
                          
                      }elseif($corperateRow_Event[0]['Event']=='Microsoft'){
                      
                      
                        $rowArrays = $this->admin_model->getCorperateMicrosoftByEmail($email); 
    	                $row = $this->admin_model->MatchMicrosftStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }else{
                          
                      //   $rowArrays = $this->admin_model->getCorperateByEmail($email); 
    	                // $row = $this->admin_model->MatchCorperateStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }
                      
                      
    	
    	if(!empty($row)){     
    	    
    	    ?>
          <div class="table-responsive">
            <table class="table" id="table">
              <thead>
                <tr>
                    <th></th>
                  <th>Name</th>
                  <th>Industry</th>
                  
                  <?php 
                   
                  // if($admin_access=='sub-admin'){ echo '';}else{ ?>
                  <th></th>
                  <?php //}  ?>
                </tr>
              </thead>
              <tbody>
                <?php
                $n = 1;
                $s = 1;	
                $count = 0;
				foreach($row as $rowArray){   $count += $n; 
                
                ?> 
                <tr class="data">
                    
                    <td>
                    <div class="d-flex align-items-center">
                  <div class="mb-1" bis_skin_checked="1">
            <!--<label class="form-label" for="basicSelect">Action Options</label>-->
            <select class="form-select file_status<?php echo $rowArray['id']; ?>" id="basicSelect" >
                <option>Action Options</option>
                <option value="details">Details</option>
                <?php 
                   
                   if($admin_access=='sub-admin'){ echo '';}else{ ?> 
              <option value="approved">Approve</option>
              <option value="declined">Decline</option>
              <option value="delete">Delete Account</option>
              <?php }  ?>
            </select>
          </div> 
                    </div>
                    <input type="hidden" class="file_id<?php echo $rowArray['id']; ?>" value="<?php echo $rowArray['id']; ?>"  />
                     <input type="hidden" class="file_idx<?php echo $rowArray['id']; ?>" value="<?php echo $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['STUP_ID']; ?>"  />
                    <input type="hidden" class="check_status<?php echo $rowArray['id']; ?>"   />
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <!-- <img src="https://getfundedafrica.com/portal/assets/images/uploads/default-avatar.jpg" alt="Toolbar svg" height="40" width="40" /> -->
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder">
                            <?php if ($this->gfa_model->getStartUpDetails($rowArray['email'])[0]['Primary_Contact_Name']==''){ ?>
                        <?php echo $this->gfa_model->getOnboardIndividual($rowArray['email'])[0]['lname'].' '.$this->gfa_model->getOnboardIndividual($rowArray['email'])[0]['fname']; }else{
                            echo $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['Primary_Contact_Name'];
                        }  
                        
                        ?>
                      
                      </div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['email'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $this->gfa_model->getStartUpDetails($rowArray['email'])[0]['Startup_Company_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="box" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php
                      $checkReg = $this->gfa_model->getStartUpDetails($rowArray['email']);
                      if($checkReg[0]["Interest_Fund_Raise"]=="Business Owner"){
           echo "<strong>Business Owner</strong>"; 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){
           echo "<strong>Aspiring Business Owner</strong>"; 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Professional" || $checkReg[0]["Interest_Fund_Raise"]=="professional"){
           echo "<strong>Working Professional</strong>"; 
        }
        if($checkReg[0]["Interest_Fund_Raise"]=="Jobseeker"){
           echo "<strong>Job Seeker</strong>"; 
        }
            echo "<br>";          
                      echo str_replace("?","",$this->gfa_model->getStartUpDetails($rowArray['email'])[0]['PrimaryBusinessIndustry']); ?><br>
                      
                          
                          
                          </span>
                    </div>
                  </td>
                 
                  <td>
                  
                   <span class="showStatus<?php echo $rowArray['id']; ?>"><?php 
                  
                  $startupStatus = $this->gfa_model->getStartupDcdtRegByEmailRef($rowArray['email'], $cor_info);
                  if($startupStatus[0]['status']=="" || $startupStatus[0]['status']=='pending'){ echo 'pending'; }else{ echo $startupStatus[0]['status']; } ?> </span></td>
                   
                  

                </tr>
                <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['id']; ?>').change(function(){
            var id = $('.file_id<?php echo $rowArray['id']; ?>').val();   
             var idx = $('.file_idx<?php echo $rowArray['id']; ?>').val(); 
            var file_status = $('.file_status<?php echo $rowArray['id']; ?>').val();
         if(file_status == 'details'){   
            window.open("<?php echo base_url("gfa/corperate_startups_details/"); ?>"+idx, "_self");
         } 
         
        if(file_status == 'delete'){
            var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
         $(this).closest('tr').remove();
         var delete_id = id;
    }
        }
            
             $.ajax({
     data:{id:id,file_status:file_status,delete_id:delete_id},
     type: "POST",
     url: "<?php echo base_url("gfa/smestatuspro"); ?>",
	 error:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('checking...')},
      success: function(data) {
   var checkStatus =      $('.showStatus<?php echo $rowArray['id']; ?>').text(data);
//   var findStatus = $('.check_status<?php //echo $rowArray['STUP_ID']; ?>').val(checkStatus);
        //  if(findStatus == "details"){
		
        // }
      }
    });   
            
                
                
                    
                });
                  
              });
          </script>
                <?php }  ?>
          
                
              </tbody>
            </table>
            <div class="paging-container" id="tablePaging"> </div>
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

   