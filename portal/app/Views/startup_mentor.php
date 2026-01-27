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
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Recommended Mentors</h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->
<?php   ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
             <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
            
            
            <?php  echo ''; }else{  ?>
            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Subscribe</h4>
              <div class="alert-body">
               Kindly subcribe to view other mentors
              </div>
            </div>
            
            <?php } ?>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                    <th></th>
                  <th>Name</th>
                  <th>Industry</th>
                  <th>Mentor Focus</th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
               
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                
                if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){           
               $row = $this->admin_model->MatchMentorDefaultApp($rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Mentorship'],$rowArrayM[0]['Startup_Implementation_Stage']);
     }else{
               $row = $this->admin_model->MatchMentorDefaultAppByOne($rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Mentorship'],$rowArrayM[0]['Startup_Implementation_Stage']);
     }

				foreach($row as $rowArray){  
                
                ?> 
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_mentor_details/<?php echo $rowArray['Mentor_ID']; ?>" >   <span class="fw-bolder me-1">Connect Mentor</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <!--<img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />-->
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Mentor_name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Company'] ; ?></div>
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
                      <span><?php echo str_replace("?","",$rowArray['Industry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['Mentors_focus']; ?></span>
                      
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

   