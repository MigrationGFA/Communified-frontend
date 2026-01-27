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
            <h4 class="card-title"><?php echo lang('translation.Recommended Mentors') ?></h4>
<!--The size of cheques the investor writes -->

<!--The investment stage -->
<?php   ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">

      <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
        </div>
        <div class="card-body">
          <form id="fetchStartups" action="" method="post" enctype="multipart/form-data"> 
          <div class="row">
         
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop"><?php echo lang('translation.Industry Sector') ?></label>
                
                <select class="getIndustry select2 form-select" name="industry[]" id="select2-multiple" multiple>

                
        <?php $rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo lang("translation.{$rowArrayIndustry['industry']}") ?></option>
                  <?php }  ?>
              </select>
              </div>
            </div>
            
           <div class="col-xl-6 col-md-6 col-12">
    <div class="mb-1">
        <label class="form-label" for="disabledInput"><?php echo lang('translation.Mentor Focus') ?></label>
        <select id="country" name="mentor_focus" class="form-select mentor_focus">
          <option value=""></option>
            <option value="Any"><?php echo lang('translation.Any') ?></option>
            <option value="Business Development"><?php echo lang('translation.Business Development') ?></option>
            <option value="Financial Management"><?php echo lang('translation.Financial Management') ?></option>
            <option value="Marketing"><?php echo lang('translation.Marketing') ?></option>
            <option value="Technology and Innovation"><?php echo lang('translation.Technology and Innovation') ?></option>
            <option value="Leadership and Management"><?php echo lang('translation.Leadership and Management') ?></option>
            <option value="Human Resources"><?php echo lang('translation.Human Resources') ?></option>
            <option value="Operations Management"><?php echo lang('translation.Operations Management') ?></option>
            <option value="Sales"><?php echo lang('translation.Sales') ?></option>
            <option value="Product Development"><?php echo lang('translation.Product Development') ?></option>
            <option value="Customer Service"><?php echo lang('translation.Customer Service') ?></option>
            <option value="Project Management"><?php echo lang('translation.Project Management') ?></option>
            <option value="Entrepreneurship"><?php echo lang('translation.Entrepreneurship') ?></option>
            <option value="Sustainability"><?php echo lang('translation.Sustainability') ?></option>
            <option value="Corporate Strategy"><?php echo lang('translation.Corporate Strategy') ?></option>
            <option value="Legal and Compliance"><?php echo lang('translation.Legal and Compliance') ?></option>
            <option value="Risk Management"><?php echo lang('translation.Risk Management') ?></option>
            <option value="Supply Chain Management"><?php echo lang('translation.Supply Chain Management') ?></option>
            <option value="Data Analytics"><?php echo lang('translation.Data Analytics') ?></option>
            <option value="Cybersecurity"><?php echo lang('translation.Cybersecurity') ?></option>
            <option value="E-commerce"><?php echo lang('translation.E-commerce') ?></option>
            <option value="Public Relations"><?php echo lang('translation.Public Relations') ?></option>
            <option value="Content Creation"><?php echo lang('translation.Content Creation') ?></option>
            <option value="Graphic Design"><?php echo lang('translation.Graphic Design') ?></option>
            <option value="Health and Wellness"><?php echo lang('translation.Health and Wellness') ?></option>
            <option value="Education and Training"><?php echo lang('translation.Education and Training') ?></option>
            <option value="Investment and Funding"><?php echo lang('translation.Investment and Funding') ?></option>
            <option value="International Business"><?php echo lang('translation.International Business') ?></option>
            <option value="Networking"><?php echo lang('translation.Networking') ?></option>
            <option value="Digital Transformation"><?php echo lang('translation.Digital Transformation') ?></option>
            <option value="Agile Methodologies"><?php echo lang('translation.Agile Methodologies') ?></option>
        </select>
    </div>
</div>

            
            
            
             <span class="display"></span>
          </div>
          </form>
        </div>
             
      </div>
    </div>
  </div>
  </script>



    
<script>
                  $(function(){
                      
                      
                   

$(".mentor_focus,.getIndustry,.name_sme").change(function(){
                          
                        
                         // var industryInfox = $('#fetchstartups').serialize();
       
        var mentor_focus = $('.mentor_focus').val();
        var industry = $('.getIndustry').val();
        var name_sme = $('.name_sme').val();
       
                    
                          
    $.ajax({
  data:{mentor_focus:mentor_focus,industry:industry,name_sme:name_sme},
  type: "POST",
  url: "<?php echo base_url(); ?>gfa/fetchStartupsMentor",
error:function() {$(".display").html('Error loading Data');},

beforeSend:function() {$(".display").html('loading data...');},
  success: function(data) {
     
 $(".showStartups").html(data);
 $(".display").html("");
 $(".hidePage").hide();
 }
 

   
 });
 
                          
                      });




//Initialize Select2 Elements
 $(".select2").select2();

                  });
                  
               </script>
      <div class="card card-company-table">
        <div class="card-body p-0">
             <?php 
             // if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ 

              ?>
            
            
            <?php  //echo ''; }else{  ?>
            <!-- <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Subscribe</h4>
              <div class="alert-body">
               Kindly subcribe to view other mentors
              </div>
            </div> -->
            
            <?php //} ?>
          <div class="table-responsive">
            <table class="table showStartups">
              <thead>
                <tr>
                    <th></th>
                  <th><?php echo lang('translation.Name') ?></th>
                  <th><?php echo lang('translation.Industry Sector') ?></th>
                  <th><?php echo lang('translation.Mentor Focus') ?></th>
                  
                </tr>
              </thead>
              <tbody>
                <?php
               
                // $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                // $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                
     //            if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){           
     //           $row = $this->admin_model->MatchMentorDefaultApp($rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Mentorship'],$rowArrayM[0]['Startup_Implementation_Stage']);
     // }else{
     //           $row = $this->admin_model->MatchMentorDefaultAppByOne($rowArrayM[0]['PrimaryBusinessIndustry'],$rowArrayM[0]['Mentorship'],$rowArrayM[0]['Startup_Implementation_Stage']);
     // }
                $row = $this->admin_model->getAllMentors();  

				foreach($row as $rowArray){  
                
                ?> 
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_mentor_details/<?php echo $rowArray['Mentor_ID']; ?>" class="btn btn-dark" >   <span class="fw-bolder me-1"><?php echo lang('translation.Connect Mentor') ?></span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="mentor photo" height="40" width="40" class="flex-shrink-0 rounded-circle me-3" />
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
                          <i data-feather="check-circle" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['Industry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                    <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="users" class="font-medium-3"></i>
                        </div>
                      </div>
                    <!-- <div class="d-flex flex-column"> -->
                      <span class="fw-bolder mb-25"><?php echo lang("translation.{$rowArray['Mentors_focus']}"); ?></span>
                      
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

   