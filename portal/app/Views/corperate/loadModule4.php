<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
				$sqlReg =  $this->gfa_model->TotalRegistrationExt($batch);
      ?>
<div class="col-lg-6 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Applications by Gender</h4>
         
        </div>
        <div class="card-body" style="height: 150px; overflow: scroll;">
    <?php 
		$sumTotal = $sqlReg[0]['TotalRegistration'];
		$rowState = $this->gfa_model->getNgStatesLga($state); foreach($rowState as $rowStateArray) { ?> 
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="map-pin" class="avatar-icon font-medium-3"></i> 
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title"><?php echo $rowStateArray['lga'] ?> </h6>
                <small>Male: <?php echo $this->gfa_model->countGenderByStateLga("Male",$rowStateArray['lga']) ?> , Female: <?php echo $this->gfa_model->countGenderByStateLga("Female",$rowStateArray['lga'])  ?> 
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $this->gfa_model->countRegistrationLocationLga($rowStateArray['lga']) ?></div>
          </div>
      <?php }  ?>   
          
		  
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    
    <div class="col-lg-6 col-md-6 col-12" >
      <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h4 class="card-title">Goal Overview</h4>
          <i data-feather="help-circle" class="font-medium-3 text-muted cursor-pointer"></i>
        </div>
        <div class="card-body p-0">
          <div id="goal-overview-radial-bar-chart" class="my-2"></div>
          <div class="row border-top text-center mx-0">
            <div class="col-6 border-end py-1">
              <p class="card-text text-muted mb-0">Target</p>
              <h3 class="fw-bolder mb-0">100,000</h3>
            </div>
            <div class="col-6 py-1">
              <p class="card-text text-muted mb-0">In Progress</p>
              <h3 class="fw-bolder mb-0"><?php echo number_format($sumTotal) ?></h3>
            </div>
          </div>
        </div>
      </div>
    </div>
<input type="hidden" value="<?php echo round(($sumTotal/100000)*100) ?>" id="data-value" />