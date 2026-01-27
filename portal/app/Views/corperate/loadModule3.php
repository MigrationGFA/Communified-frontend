<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
               $sqlReg =  $this->gfa_model->TotalRegistrationExt($batch);
			   $consented = $this->gfa_model->CountUsersWhoConsentedToAccountOpening($batch);
      ?>
<!-- Avg Sessions Chart Card starts -->
    <div class="col-lg-6 col-12">
      <div class="card">
        <div class="card-body">
          <div class="row pb-50">
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column order-sm-1 order-2 mt-1 mt-sm-0">
              <div class="mb-1 mb-sm-0">
                <h2 class="fw-bolder mb-25"><?php   
               $sumTotal = $sqlReg[0]['TotalRegistration'];  echo $sumTotal;
                 ?></h2>
                <p class="card-text fw-bold mb-2">Total Registration</p>
                <!--<div class="font-medium-2">-->
                <!--  <span class="text-success me-25">+5.2%</span>-->
                <!--  <span>vs last 7 days</span>-->
                <!--</div>-->
              </div>
              <a href="<?php echo base_url("gfa/corperate_startups/") ?>" class="btn btn-primary">View Details</a>
            </div>
            <div class="col-sm-6 col-12 d-flex justify-content-between flex-column text-end order-sm-2 order-1">
              <div class="dropdown chart-dropdown">
                <h2 class="fw-bolder mb-25"><?php   
                echo $consented[0]['UserCount'];
                 ?></h2>
                <p class="card-text fw-bold mb-2">Consented to open Acct</p>
                </div>

                <a href="<?php echo base_url("gfa/corperate_startups_consented/{$batch}/{$state}") ?>" class="btn btn-secondary">View Details</a>
              </div>
              
            </div>
          </div>
          <hr /> 
          <div class="row avg-sessions pt-50">
            <div class="col-6 mb-2">
                <?php  $countMale = $sqlReg[0]['MaleCount'];
              $countMalePer = round(($countMale/$sumTotal)*100);
              ?>
              <?php  $countFemale = $sqlReg[0]['FemaleCount'];
              $countFemalePer = round(($countFemale/$sumTotal)*100);
              ?>
              <p class="mb-50">Male: <?php echo $countMale ?>/ <?php echo $countMalePer ?>%</p>
              <div class="progress progress-bar-primary" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="50"
                  aria-valuemin="50"
                  aria-valuemax="100"
                  style="width: <?php echo $countMalePer ?>%"
                ></div> 
              </div>
            </div>
            <div class="col-6 mb-2">
              <p class="mb-50">Female: <?php echo $countFemale ?> / <?php echo $countFemalePer ?>%</p> 
              <div class="progress progress-bar-warning" style="height: 6px">
                <div
                  class="progress-bar"
                  role="progressbar"
                  aria-valuenow="60"
                  aria-valuemin="60"
                  aria-valuemax="100"
                  style="width: <?php echo $countFemalePer ?>%"
                ></div>
              </div>
            </div>
            <!--<div class="col-6">-->
            <!--  <p class="mb-50">Progress: 90%</p>-->
            <!--  <div class="progress progress-bar-danger" style="height: 6px">-->
            <!--    <div-->
            <!--      class="progress-bar"-->
            <!--      role="progressbar"-->
            <!--      aria-valuenow="70"-->
            <!--      aria-valuemin="70"-->
            <!--      aria-valuemax="100"-->
            <!--      style="width: 70%"-->
            <!--    ></div>-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-6">-->
            <!--  <p class="mb-50">Duration: 1yr</p>-->
            <!--  <div class="progress progress-bar-success" style="height: 6px">-->
            <!--    <div-->
            <!--      class="progress-bar"-->
            <!--      role="progressbar"-->
            <!--      aria-valuenow="90"-->
            <!--      aria-valuemin="90"-->
            <!--      aria-valuemax="100"-->
            <!--      style="width: 90%"-->
            <!--    ></div>-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </div>
    </div>
    <!-- Avg Sessions Chart Card ends -->
	
	 <!-- Developer Meetup Card -->
     <div class="col-lg-6 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Applications by LGA</h4>
         
        </div>
        <div class="card-body" style="height: 100px; overflow: scroll;">
    <?php $rowState = $this->gfa_model->getNgStatesLga($state); foreach($rowState as $rowStateArray) { ?> 
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="map-pin" class="avatar-icon font-medium-3"></i> 
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title"><?php echo $rowStateArray['lga'] ?> </h6>
                <small>BO: <?php echo $this->gfa_model->countRegistrationStateLga("Business Owner",$rowStateArray['lga']) ?> , ABO: <?php echo $this->gfa_model->countRegistrationStateLga("Aspiring Business Owner",$rowStateArray['lga']) ?>  , 
                P: <?php echo $this->gfa_model->countRegistrationStateLga("Professional",$rowStateArray['lga']) ?>  , JS: <?php echo $this->gfa_model->countRegistrationStateLga("Jobseeker",$rowStateArray['lga']) ?> 
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
    <!--/ Developer Meetup Card -->