
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
            <h4 class="card-title">Startups Partners/Corporates Connections</h4>

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
                  <th></th>
                  <th>Name</th>
                  <th>Email</th>
                   <th>Phone</th>
                   <th>Type</th> 
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 
                // $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                
                $row = $this->gfa_model->getAllPartner("wema-541");
				foreach($row as $rowArray){ 
				$investorArray = $this->gfa_model->getInvestorDetails($rowArray['email']);
                $mentorArray = $this->gfa_model->getMentorDetails($rowArray['email']);
                $acceleratorArray = $this->gfa_model->getAcceleratorDetails($rowArray['email']);
                $corporateArray = $this->gfa_model->getCorperateDetails($rowArray['email']);
                ?> 
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/corperate_details/<?php echo $rowArray['id']; ?>" >   <span class="fw-bolder me-1">Details</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php 
                      echo $investorArray[0]['Contact_Name']; echo $mentorArray[0]['Mentor_name']; echo $acceleratorArray[0]['Contact_Name'] ; echo $corporateArray[0]['Key_contact_name']; 
                      ?></span>
                      <span class="font-small-2 text-muted">
                <?php 
                 echo $investorArray[0]['Investor_Name']; echo $mentorArray[0]['Company']; echo $acceleratorArray[0]['Accelerator_Name'] ; echo $corporateArray[0]['Corporate_Name'];
                ?>
                          </span>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="email" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>
                          <?php 
                 echo $rowArray['email'];
                ?>
                          </span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">
                          <?php echo $investorArray[0]['Phone']; echo $mentorArray[0]['Phone']; echo $acceleratorArray[0]['Phone'] ; echo $corporateArray[0]['Phone']; ?>
                          </span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['ref']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['reg_type']; ?></span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['ref']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['time_submit']; ?></span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['ref']; ?></span>
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

   