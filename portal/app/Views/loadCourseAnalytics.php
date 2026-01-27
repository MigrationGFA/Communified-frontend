<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  // $loginkey = $this->gfa_model->getWpCred($email);
  $courseTrack = $this->gfa_model->GetUserProgressAssignedCourses($email);
?>
<div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0"><?php echo $courseTrack[0]['TotalCourses']; ?></h4>
            <small>Total Courses</small>
          </div>
          <span class="badge bg-label-primary rounded-circle p-2">
            <i class="ti ti-book ti-md"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0"><?php echo $courseTrack[0]['Progress'] ?></h4>
            <small>Course Track</small>
          </div>
          <span class="badge bg-label-success rounded-circle p-2">
            <i class="ti ti-users ti-md"></i>
          </span>
        </div>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
<a href="<?php echo base_url("gfa/lesson_progress/{$courseTrack[0]['OngoingCourse']}"); ?>" class="stretched-link" style="font-weight: bold; color: #5c5460;">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h6 class="mb-0"><?php echo $courseTrack[0]['OngoingCourse'] ?></h6>
            <small style="color: green;">Ongoing Course</small>
          </div>
          <span class="badge bg-label-danger rounded-circle p-2">
            <i class="ti ti-user ti-md"></i>
          </span>
        </div>
</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0"><?php echo $courseTrack[0]['PassedQuizzes'] ?></h4>
            <small>Passed Quiz</small>
          </div>
          <span class="badge bg-label-info rounded-circle p-2">
            <i class="ti ti-check ti-md"></i>
          </span>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0">Certificate</h4>
            <small>Access Your Soft Skills Certificate</small>
          </div>
          <?php $cert_soft_ref  = session()->get('cert_soft_ref') ; if(!empty($cert_soft_ref)){ ?>
          <a href="<?php echo base_url("gfa/certificate_soft_skills/{$cert_soft_ref}"); ?>" class="btn bg-label-danger">
          <?php }else{  ?>
            <a href="<?php echo base_url("gfa/certificate_gen/"); ?>" class="btn bg-label-danger"> 
            <?php }  ?> 
          <i class="ti ti-link ti-md"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  
 <div class="col-sm-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <div class="d-flex align-items-center justify-content-between">
          <div class="content-left">
            <h4 class="mb-0">Certificate</h4>
            <small>Access Your Technical Skill Certificate</small>
          </div>
          <?php $cert_course_ref  = session()->get('cert_course_ref') ; if(!empty($cert_course_ref)){ ?>
          <a href="<?php echo base_url("gfa/certificate/{$cert_course_ref}"); ?>" class="btn bg-label-danger">
          <?php }else{  ?>
            <a href="<?php echo base_url("gfa/certificate_gen_course/"); ?>" class="btn bg-label-danger"> 
            <?php }  ?> 
          <i class="ti ti-link ti-md"></i>
          </a>
        </div>
      </div>
    </div>
  </div> 
 
  
  

  
  
  
  