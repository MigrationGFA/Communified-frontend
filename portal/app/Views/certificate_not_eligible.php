<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
<div class="container-xxl flex-grow-1 container-p-y">
<!--            <h4 class="fw-bold py-3 mb-4">-->
<!--  <span class="text-muted fw-light">Refer and Win</span>-->
<!--</h4>-->
<div class="row">
  <!-- Alerts with headings -->
  <div class="col-lg-6 mb-4 mb-lg-0">
    <div class="card">
      <h5 class="card-header">Certificate Viewing Ineligibility</h5>
      <div class="card-body">
        <div class="alert alert-danger alert-dismissible" role="alert">
          <h5 class="alert-heading mb-2">x Oops</h5>
         <?php if($course_type == "soft" ){ ?>
          <p class="mb-0">You are not eligible to view your certificate as you have not reached the passing mark of 60% for the soft skills course progress.</p><p class="mb-0">To increase your score to 60% and generate your certificate, please continue with the assigned courses and pass the quiz.</p>
          <?php }  ?>
          <?php if($course_type == "course" ){ ?>
          <p class="mb-0">You are not eligible to view your certificate as you have not reached the passing mark <!-- of 60% --> for the technical skills course progress.</p><p class="mb-0">To increase your score <!-- to 60% --> and generate your certificate, please continue with the assigned courses and pass the quiz.</p>
          <?php }  ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          </button>
        </div>
        
      </div>
    </div>
  </div>
  <!--/ Alerts with headings GetUserProgressSoftSkills  -->
  <!-- Alert headings with icon -->
  <?php if($course_type == "soft" ){ ?>
  <?php $getCerticateData = $this->gfa_model->GetCertificateEligibleSoftSkills($email); ?>
  <div class="col-lg-6 mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Soft Skills Course Analysis</h5>
      <div class="card-body">
      <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading">Full Name:</span> <span><?php echo $getCerticateData[0]['FullName'] ?></span></li>
          <!-- <li class="d-flex align-items-center mb-3"><i class="ti ti-check text-heading"></i><span class="fw-medium mx-2 text-heading">St:</span> <span>Active</span></li> -->
          <li class="d-flex align-items-center mb-3"><i class="ti ti-pencil text-heading"></i><span class="fw-medium mx-2 text-heading">Score:</span> <span><?php echo $getCerticateData[0]['Score'] ?>%</span></li>
          <!-- <li class="d-flex align-items-center mb-3"><i class="ti ti-flag text-heading"></i><span class="fw-medium mx-2 text-heading">Country:</span> <span>USA</span></li> -->
          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description text-heading"></i><span class="fw-medium mx-2 text-heading">Course:</span> <span><?php echo $getCerticateData[0]['courses'] ?></span></li>
        </ul>
      </div>
    </div>
  </div>
  <?php }  ?>
  <?php if($course_type == "course" ){ ?>
  <?php $getCerticateData = $this->gfa_model->GetEachUserCourseList($email);
                                      // GetUserProgressAssignedCourses
       $courseTrack = $this->gfa_model->GetUserProgressAssignedCourses($email);
       // $courseTrack = $this->gfa_model->GetUserEndProgress($email);
  ?>
  <div class="col-lg-6 mb-4 mb-md-0">
    <div class="card">
      <h5 class="card-header">Course Analysis</h5>
      <div class="card-body">
      <ul class="list-unstyled mb-4 mt-3">
          <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading">Full Name:</span> <span><?php echo ucwords($getCerticateData[0]['Name']) ?></span></li>
          <!-- <li class="d-flex align-items-center mb-3"><i class="ti ti-check text-heading"></i><span class="fw-medium mx-2 text-heading">St:</span> <span>Active</span></li> -->
          <li class="d-flex align-items-center mb-3"><i class="ti ti-pencil text-heading"></i><span class="fw-medium mx-2 text-heading">Score:</span> <span><?php echo $courseTrack[0]['Progress'] ?></span></li>
          <!-- <li class="d-flex align-items-center mb-3"><i class="ti ti-flag text-heading"></i><span class="fw-medium mx-2 text-heading">Country:</span> <span>USA</span></li> -->
          <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description text-heading"></i><span class="fw-medium mx-2 text-heading">Course:</span> <span><?php echo $getCerticateData[0]['Courses'] ?></span></li>
        </ul>
      </div>
    </div>
  </div>
  <?php }  ?>
  <!--/ Alert headings with icon -->
</div>


  </div>          
          </div>