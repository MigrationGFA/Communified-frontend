<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
				$sql =  $this->gfa_model->applicationByCategory($batch);
      ?>
<div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $sql[1]['Total']; //$this->gfa_model->countRegistration("Business Owner") ?></h2>
          <p class="card-text">Business Owner</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Business-Owner") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
	<div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-secondary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $sql[0]['Total']; //$this->gfa_model->countRegistration("Aspiring Business Owner") ?></h2>
          <p class="card-text">Aspiring Business Owner</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Aspiring-Business-Owner") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $sql[3]['Total'];  //$this->gfa_model->countRegistration("Professional") ?></h2>
          <p class="card-text">Working Professional</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p>
              <a href="<?php echo base_url("gfa/corperate_startups/Professional") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-success p-50 m-0">
            <div class="avatar-content">
              <i data-feather="users" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $sql[2]['Total'];  //$this->gfa_model->countRegistration("Jobseeker") ?></h2>
          <p class="card-text">Job Seeker</p>
        </div>
        <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Course</p> 
              <a href="#" class="fw-bolder mb-0">Details</a>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">Profiles</p> 
              <a href="<?php echo base_url("gfa/corperate_startups/Jobseeker") ?>" class="fw-bolder mb-0">View</a>
            </div>
          </div>
		
      </div>
    </div>