<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="col-xl-12 col-md-6 col-12">  
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Wema Bank Account Opening Analysis</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0"></p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countAccountInterest("Yes") ?></h4>
                  <p class="card-text font-small-3 mb-0">Have Wema Account</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countAccountInterest("No") ?></h4>
                  <p class="card-text font-small-3 mb-0">No Wema Account</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countNeedAccount() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Account</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-warning me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegBVNX() ?></h4>
                  <p class="card-text font-small-3 mb-0">BVN</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegNINX() ?></h4>
                  <p class="card-text font-small-3 mb-0">NIN</p>
                </div>
              </div>
            </div>
            
            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegNIN() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Acct with BVN/NIN</p>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 me-2">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-warning me-2">
                  <div class="avatar-content">
                    <i data-feather="link-2" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0"><?php echo  $this->gfa_model->countRegBVN() ?></h4>
                  <p class="card-text font-small-3 mb-0">Need Wema Acct without BVN/NIN</p>
                </div>
              </div>
            </div>
            
            
          </div>
          <div class="row">
            
            
          </div>
        </div>
      </div>
    </div>