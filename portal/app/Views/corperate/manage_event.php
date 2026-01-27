
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
<div class="row">
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Manage Event Posted</h4>
<div class="col-lg-12 text-center mb-2">
            <?php 
        if($account_type == 'corperate'){  ?>
        <a href="<?php echo base_url("gfa/corperate_add_event"); ?>" class="btn btn-primary btn-next" style="float:auto;">+ Add Event</a>
        <?php } 
         if($account_type == 'startup'){  
             
        ?>
                <a href="<?php echo base_url("gfa/add_event"); ?>" class="btn btn-primary btn-next" style="float:auto;">+ Add Event</a>
                <?php }  ?>
        </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">
     
       <?php  
        $row = $this->gfa_model->getEventByEmail($email);
        $sumTotalAttendees = 0;       
				foreach($row as $rowArray){
          $sumTotalAttendees += $this->gfa_model->countAllEventAttendeesByEmail($rowArray['event_id']);
        }
            echo $sumTotalAttendees;
            
            ?>
            </h2>
            <p class="card-text">Attendees</p>
          </div>
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">
            <?php  
        $row = $this->gfa_model->getEventByEmail($email);
        $sumTotalAttendees = 0;       
				foreach($row as $rowArray){
          $sumTotalAttendees += $this->gfa_model->countAllEventAttendeesByEmailGender($rowArray['event_id'],'Male');
        }
            echo $sumTotalAttendees;
            
            ?>
            </h2>
            <p class="card-text">Male</p>
          </div>
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content">
              <i data-feather="user" class="font-medium-5"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
        <div class="card-header">
          <div>
            <h2 class="fw-bolder mb-0">
            <?php  
        $row = $this->gfa_model->getEventByEmail($email);
        $sumTotalAttendees = 0;       
				foreach($row as $rowArray){
          $sumTotalAttendees += $this->gfa_model->countAllEventAttendeesByEmailGender($rowArray['event_id'],'Female');
        }
            echo $sumTotalAttendees;
            
            ?>
            </h2>
            <p class="card-text">Female</p>
          </div>
          <div class="avatar bg-light-danger p-50 m-0">
            <div class="avatar-content">
              <i data-feather="user" class="font-medium-5"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </div>

  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->

<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        
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
                  <th>Event Title </th>
                  <th>Date Posted</th>
                  <th>Event Link</th>
                  <th>Status</th>
                  <th class="locationChange">Participants</th>
                  
                  <th></th>
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                $row = $this->gfa_model->getEventByEmail($email);
               
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
                  <td>
                  <?php if($rowArray['status'] =='pending' || $rowArray['status'] =='declined'){ echo ''; }else { ?><?php //echo base_url()."gfa/events/". $rowArray['ref_id'] ;?>
                  <a href="https://getfundedafrica.com/events/?e=<?php echo $rowArray['ref_id']; ?>&rf=<?php echo $rowArray['event_url']; ?>" class="string-input" style="display:none"></a>
                  <a href="#" class="copyLink"><p style="display:none">https://getfundedafrica.com/events/?e=<?php echo $rowArray['ref_id']; ?><?php echo "&"; ?>rf=<?php echo $rowArray['event_url']; ?></p><span><i data-feather="copy"></i>Click here to copy link<span></a>
                  <?php  }   ?>
                </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        
                      </div>
                      <span><?php if($rowArray['status'] =='pending'){
                        echo "Awaiting approval";
                      }else{
                        echo $rowArray['status'];
                      } ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                       <a href="<?php echo base_url(); ?>gfa/event_apply/<?php echo $rowArray['event_id']; ?>" >   <span class="fw-bolder me-1">View [<?php echo $this->gfa_model->countEventParticipant($rowArray['event_id']); ?>]</span></a>
                      
                    </div>
                  </td>
                   
     
                  <td>
                    <div class="d-flex align-items-center">
                
               <a href="<?php echo base_url("gfa/event/")?><?php echo $rowArray['ref_id']; ?>" ><i data-feather="external-link" class="text-success font-medium-1"></i>View</a> <?php  if($admin_access=='sub-admin'){ echo '';}else{ ?>| 
               <a href="<?php echo base_url("gfa/edit_event/")?><?php echo $rowArray['event_id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i>Edit</a> <?php if($rowArray['status']=='active'){ echo '';}else{ ?> | 
               <a href="#" alt="delete Cohort" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i>Delete<span style="display: none;"><?php echo $rowArray['ref_id'] ?></span></a>
               <?php }  ?>
               <?php }  ?>
                    </div>
                  </td>
                </tr>

                
                <?php   }  ?>
               
              </tbody>
            </table>
          </div>
        </div>
      <!-- </div><span class="showDataDel"></span> -->
    </div>
    <!--/ Company Table Card -->
   
  </div>
        <script>
            
            $(function(){

              $(".copyLink").click(function(){
                // Select the input element with the string
                $(this).find('span').html('Copied');
var stringInput = $(this).find('p'); //$('.string-input');

// Get the value of the string
var stringToCopy = stringInput.text();

// Create a temporary input element to copy the string
var tempInput = $('<input>');

// Append the input element to the body
$('body').append(tempInput);

// Set the value of the input element to the string
tempInput.val(stringToCopy);

// Select the input element
tempInput.select();

// Copy the selected text to the clipboard
document.execCommand("copy");

// Remove the temporary input element
tempInput.remove();


              });

              $("tr").on('click','.deletebtn',function() {
    var ref_id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
  $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{ref_id:ref_id},
     type: "POST",
     url: "<?php echo base_url("gfa/deleteEvent"); ?>",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    // $(".showDataDel").html(data);
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 
                
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

   