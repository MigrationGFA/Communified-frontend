
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

<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Deals & Connections with Startups</h4>

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
      

        <div class="card-body p-0">
        <div class="col-md-4 col-12" style="display: flex;">
      <div class="mb-2 col-xl-12 p-0 mt-xl-0 mt-8">
</div>
<div class="mb-2 col-xl-12 p-0 mt-xl-0 mt-8">
</div>
      <div class="input-group input-group-merge mb-2 col-xl-4 p-0 mt-xl-0 mt-2">
            <span class="input-group-text" id="basic-addon-search2"><i data-feather="search"></i></span>
            <input
              type="text"
              class="form-control searchDeals"
              placeholder="Search..."
              aria-label="Search..."
              aria-describedby="basic-addon-search2"
            />
          </div>
      
</div>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                <th></th>
                <th></th>
                   <th>Status</th> 
                  <th>Startups</th>
                  
                  <th>Investment Type</th> 
                  <th>Date</th>
                  <th></th>
                </tr>
              </thead>
              <tbody class="showStartups display">
                <?php
                 
                // $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                // $rowArray = $this->admin_model->getAllStartUpNByEmail($email); 
                $row = $this->admin_model->getInvestorsConnectionByEmail($email);
				foreach($row as $rowArray){ 
				$personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);   
     	
			
                
                ?> 
                <tr>
                <td><a href="<?php echo base_url(); ?>gfa/investor_startup_details/<?php echo $personalDetails[0]['STUP_ID'] ; ?>" class="btn btn-primary getStartup">Profile<span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></a></td>
                
                <td>
                  <?php if(!empty($rowArray['invest_type'])){ ?>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/document/<?php echo $rowArray['id']; ?>" >   <span class="fw-bolder me-1">Agreement Info</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                    <?php }else{ echo ''; } ?>
                  </td>
                  <td><?php echo $rowArray['status']; ?></td>
                     
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                         
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $personalDetails[0]['Startup_Company_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $personalDetails[0]['Primary_Contact_Name']; ?></div>
                      </div>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="clipboard" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['invest_type']); ?></span>
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
                      
                      
                    $(".searchDeals").keyup(function(){
                          
                        
                          // var industryInfox = $('#fetchstartups').serialize();
         var deals = $(this).val();  
        
                     
                           
     $.ajax({
   data:{deals:deals},
   type: "POST",
   url: "<?php echo base_url(); ?>gfa/fetchdeals",
 error:function() {$(".display").html('Error loading Data');},
 beforeSend:function() {$(".display").html('loading data...');},
   success: function(data) {
      
  $(".showStartups").html(data);
  //$(".display").html("");
  $(".hidePage").hide();
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

   