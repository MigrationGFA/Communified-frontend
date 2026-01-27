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


            <h4 class="card-title">Need Wema Acct with BVN/NIN <?php //echo $this->encrypt->decode($this->session->userdata('cor_info')) ; ?> </h4>

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
            <a href="<?php echo base_url(); ?>gfa/export_need_wema_acct_with_bvn_nin" class="btn btn-secondary btn-next" style="margin:5px;"> Export Data </a>    
            <!--<a href="#" class="btn btn-primary btn-next" style="margin:5px;" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" style="margin:5px;" class="btn btn-primary btn-next" > Schedule Meeting </a>-->
        <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
        </div>
      <div class="card card-company-table">
        <div class="card-body p-0">
  <?php         
                 
           if(!empty($reg_type)){           
           $row  = $this->gfa_model->getStartUpDetailsReg($reg_type); 
           }else{
               
             $row  = $this->gfa_model->get_need_wema_acct_with_bvn_nin_limit();    
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
                    
            <!--<label class="form-label" for="basicSelect">Action Options</label>-->
             <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary dropdown-toggle"
                data-bs-toggle="dropdown"
                aria-expanded="false">
                Action
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="<?php echo base_url("gfa/corperate_startups_details/{$rowArray['STUP_ID']}"); ?>">Details</a>
                <a class="dropdown-item" href="#">Delete<span </a>
                <!--<a class="dropdown-item" href="#">Option 3</a>-->
                
              </div>
            </div>
         
                    
                     
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
                            <?php 
                            if ($rowArray['Primary_Contact_Name']!=''){
                       
                            echo $rowArray['Primary_Contact_Name'];
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
                      
                      if($rowArray["Interest_Fund_Raise"]=="Business Owner"){
           echo "<strong>Business Owner</strong>"; 
        }
        if($rowArray["Interest_Fund_Raise"]=="Aspiring Business Owner"){
           echo "<strong>Aspiring Business Owner</strong>"; 
        }
        if($rowArray["Interest_Fund_Raise"]=="Professional" || $rowArray["Interest_Fund_Raise"]=="professional"){
           echo "<strong>Working Professional</strong>"; 
        }
        if($rowArray["Interest_Fund_Raise"]=="Jobseeker"){
           echo "<strong>Job Seeker</strong>"; 
        }
            echo "<br>";          
                      //echo str_replace("?","",$this->gfa_model->getUserAccountExt($rowArray['Contact_Email'])[0]['profile_extra']); 
                      ?>
                      <br>
                      
                          
                          
                          </span>
                    </div>
                  </td>
                 
                  <td>
                  
                  <?php echo "approved"; ?> </td>
                   
                  

                </tr>
                
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

   