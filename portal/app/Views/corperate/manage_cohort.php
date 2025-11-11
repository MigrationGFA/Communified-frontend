
    <!-- BEGIN: Content-->
    <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
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
            <h4 class="card-title">Manage Cohort Posted</h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
    <?php 
                   
                  if($admin_access=='sub-admin'){ echo '';}else{ ?>
        <div class="col-lg-12 text-center mb-2">
            <?php  
        if($account_type == 'corperate'){  ?>
        <a href="<?php echo base_url("gfa/add_cohort"); ?>" class="btn btn-primary btn-next" style="float:auto;">+ Add Cohort</a>
        <?php } 
         if($account_type == 'startup'){  
             
        ?>
                <a href="<?php echo base_url("gfa/add_event"); ?>" class="btn btn-primary btn-next" style="float:auto;">+ Add Event</a>
                <?php }  ?>
        </div><?php } ?>
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
                <th></th>
                  <th>Title</th>
                  <th>Demo_Date</th>
                  <th>Date</th>
                  <th>Link</th>
				 
                  <th></th>
                 
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                $n = 1;
                
		        $loginkey = $this->gfa_model->getWpCred($email);
		        $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
				$row = $this->admin_model->getAllCohortEventByCompany($corperateRow_Event[0]['Event']);  foreach($row as $rowArray){  
				    
				    
                
                ?> 
             
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                      <img src="<?php echo base_url("uploads/"); ?><?php echo $rowArray['Logo'] ?>" width="40" height="40"  >
                      </div>
                      
                    </div>
                  </td>
                  <td><?php echo $rowArray['Title'] ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="calendar" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['Demo_Date'] ; ?></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="calendar" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['Date']; ?></span>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                
               <a href="<?php echo $rowArray['Url']; ?>" tooltip="View Cohort" target="_blank" ><i data-feather="external-link" class="text-success font-medium-1"></i></a> | 
               <a href="<?php echo base_url()?>gfa/edit_cohort/<?php echo $rowArray['Id']; ?>" alt="Edit Cohort" ><i data-feather="edit" class="text-success font-medium-1"></i></a> | 
               <a href="#" alt="delete Cohort" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i><span style="display: none;"><?php echo $rowArray['Id'] ?></span></a>
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
  <script type="text/javascript">
          $(function(){

         
            $("tr").on('click','.deletebtn',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
  $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url("admin/deleteCohortEvent"); ?>",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    $(".showDataDel").val();
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 

  

          });

        </script>
        <script>
            
            $(function(){
                
                $(".searchJobs").keyup(function(){
                    // $(".locationChange").html("Need Location");
                      var industry = $('.searchJobs').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url("gfa/searchJobs"); ?>",
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
     url: "<?php echo base_url("gfa/industry_corp_service"); ?>",
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

   