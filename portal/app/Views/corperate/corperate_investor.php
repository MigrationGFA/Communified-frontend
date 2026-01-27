
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

<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Startups Investors Connections</h4>

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Startup</th>
                  <th>Investor Email</th>
                  <th>Date</th>
                  <!-- <th>Country</th> -->
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                
                // $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrays = $this->gfa_model->getCorperateDetails($email); 
                // MatchInvestorDefaultLimit
                //echo $rowArray[0]['Corporate_industry'];
               $rowx = $this->admin_model->MatchCorperateInvestor($rowArrays[0]['Corporate_industry']); 
              $row = $this->admin_model->connectStartupsInvestors($rowArrays[0]['Event']); 
              //  $getInvestorArray = $this->admin_model->getAllInvestorByEmail($rowR[0]['email']) 
				foreach($row as $rowArray){  
          $startupArray = $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);
                ?> 
                <tr>
                <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $startupArray[0]['Primary_Contact_Name']; ?></span>
                      <span class="font-small-2 text-muted"><?php echo $startupArray[0]['Startup_Company_Name']; ?></span>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['email']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['time_submit']; ?></span>
                      <span class="font-small-2 text-muted"><?php echo $rowArray['ref']; ?></span>
                    </div>
                  </td>
                 
                  <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url("gfa/corperate_startups_details/"); ?><?php echo $this->gfa_model->getAllDcdtByEmailRef($startupArray[0]['Contact_Email'])[0]['id']; ?>" >   <span class="fw-bolder me-1">Details</span>
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
  
  


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->



   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   