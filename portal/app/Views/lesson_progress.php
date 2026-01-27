<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
 ?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light"><?php echo $course ?></span>
</h4>
<div class="row">
  <!-- User Sidebar -->
  <div class="col-xl-8 col-lg-5 col-md-5 order-1 order-md-0">
    <!-- User Card -->
    <div class="card mb-4">
      <div class="card-body">
       
        <!--<div class="d-flex justify-content-around flex-wrap mt-3 pt-3 pb-4 border-bottom">-->
        <!--  <div class="d-flex align-items-start me-4 mt-3 gap-2">-->
        <!--    <span class="badge bg-label-primary p-2 rounded"><i class='ti ti-checkbox ti-sm'></i></span>-->
        <!--    <div>-->
        <!--      <p class="mb-0 fw-medium">1.23k</p>-->
        <!--      <small>Tasks Done</small>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="d-flex align-items-start mt-3 gap-2">-->
        <!--    <span class="badge bg-label-primary p-2 rounded"><i class='ti ti-briefcase ti-sm'></i></span>-->
        <!--    <div>-->
        <!--      <p class="mb-0 fw-medium">568</p>-->
        <!--      <small>Projects Done</small>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <span class="badge bg-label-primary">Lessons Completed</span>
        <div class="info-container">
          <!--<ul class="list-unstyled">-->
            <!--<li class="mb-2">-->
            <!--  <span class="fw-medium me-1">Username:</span>-->
            <!--  <span>violet.dev</span>-->
            <!--</li>-->
            <ul class="ps-3 g-2 my-3">
           <?php $CompletedLessonsData = $this->gfa_model->GetCompletedLessons($email,$course); foreach($CompletedLessonsData as $CompletedLessons){ ?>
          <li class="mb-2"><a href="<?php echo base_url("gfa/lesson/{$CompletedLessons['id']}/{$CompletedLessons['lesson']}"); ?>"><?php echo $CompletedLessons['lesson'] ?></a></li>
         <?php  }  ?>
        </ul>
            
           
          <!--</ul>-->
          <!--<div class="d-flex justify-content-center">-->
          <!--  <a href="javascript:;" class="btn btn-primary me-3" data-bs-target="#editUser" data-bs-toggle="modal">Edit</a>-->
          <!--  <a href="javascript:;" class="btn btn-label-danger suspend-user">Suspended</a>-->
          <!--</div>-->
        </div>
      </div>
    </div>
    <!-- /User Card -->
    <!-- Plan Card -->
    <div class="card mb-4">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-start">
          <span class="badge bg-label-warning">Lessons Not Completed</span>
          <div class="d-flex justify-content-center">
            <!--<sup class="h6 pricing-currency mt-3 mb-0 me-1 text-primary fw-normal">$</sup>-->
            <!--<h1 class="mb-0 text-primary">99</h1>-->
            <!--<sub class="h6 pricing-duration mt-auto mb-2 fw-normal text-muted">/month</sub>-->
          </div>
        </div>
         <ul class="ps-3 g-2 my-3">
            <?php $PendingLessonsData = $this->gfa_model->GetPendingLessons($email,$course); foreach($PendingLessonsData as $GetPendingLessons){ ?>
          <li class="mb-2"><a href="<?php echo base_url("gfa/lesson/{$GetPendingLessons['id']}/{$GetPendingLessons['lessons']}"); ?>"><?php echo $GetPendingLessons['lessons'] ?></a></li>
         <?php  }  ?>
        </ul>
        </ul>
        <!--<div class="d-flex justify-content-between align-items-center mb-1 fw-medium text-heading">-->
        <!--  <span>Progress</span>-->
        <!--  <span>65% Completed</span>-->
        <!--</div>-->
        <!--<div class="progress mb-1" style="height: 8px;">-->
        <!--  <div class="progress-bar" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>-->
        <!--</div>-->
        <!--<span>4 days remaining</span>-->
        <div class="d-grid w-100 mt-4">
          <!--<button class="btn btn-primary" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">Upgrade Plan</button>-->
        </div>
      </div>
    </div>
    <!-- /Plan Card -->
  </div>
  <!--/ User Sidebar -->


  <!-- User Content -->
  

<!-- /Modals -->
          </div>