<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');

  if($getStartUpDetails[0]["Interest_Fund_Raise"]=="Business Owner" || $getStartUpDetails[0]["Interest_Fund_Raise"]=="Aspiring Business Owner"){ 
       $courseCat = "Technical Course";
       }else{
          $courseCat = "Technology Course";
           } 
  
 
?>
   <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row mb-4 g-4">
  
    
    <h4 class="fw-bold py-3 mb-4">
      <span class="text-muted fw-light">Certificate Center</span>
    </h4>

  
    <div class="col-sm-6 col-xl-6">
      <?php $cert_course_ref  = session()->get('cert_course_ref') ; if(!empty($cert_course_ref)){ ?>
            <a href="<?php echo base_url("gfa/certificate/{$cert_course_ref}"); ?>">
            <?php }else{  ?>
              <a href="<?php echo base_url("gfa/certificate_gen_course/"); ?>">
              <?php }  ?>
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="content-left">
              <h4 class="mb-0"><?php echo $courseCat ?></h4>
              <small style="font-weight: lighter; color: #5c5470;">Download your <?php echo $courseCat ?> Certificate</small>
            </div>
            <button class="btn bg-label-danger">
            <i class="ti ti-link ti-md"></i>
            </button>
            
          </div>
        </div>
      </div>
      </a>
    </div>
    
    

    
    <div class="col-sm-6 col-xl-6">
      <?php $cert_soft_ref  = session()->get('cert_soft_ref') ; if(!empty($cert_soft_ref)){ ?>
        <a href="<?php echo base_url("gfa/certificate_soft_skills/{$cert_soft_ref}"); ?>" >
      <?php }else{  ?>
        <a href="<?php echo base_url("gfa/certificate_gen/"); ?>" > 
      <?php }  ?> 
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center justify-content-between">
            <div class="content-left">
              <h4 class="mb-0">Soft Skills</h4>
              <small style="font-weight: lighter; color: #5c5470;">Download your Soft Skill Course Certificate </small>
            </div>
            <button class="btn bg-label-success">
            <i class="ti ti-link ti-md"></i>
          </button>
            
          </div>
        </div>
      </div>
      </a>
    </div>

      
        <!--<input type="text" class="getValue" value="" />-->
    <span class="loadModule1 loadingPage1"></span>
      
  

  </div>

</div>
<!-- / Content -->
</div>
</div>
</div>

