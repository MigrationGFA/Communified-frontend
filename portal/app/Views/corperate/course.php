<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
    <!-- Greetings Card starts -->
    
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->
	
    <div class="col-lg-4 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-primary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="book" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countCourseCateegory("Development") ?></h2>
          <p class="card-text">Development</p>
        </div>
        <!--<div class="row border-top text-center mx-0">-->
        <!--    <div class="col-6 border-end py-1">-->
        <!--      <p class="card-text text-muted mb-0">Course</p> -->
        <!--      <a href="#" class="fw-bolder mb-0">Details</a>-->
        <!--    </div>-->
        <!--    <div class="col-6 py-1">-->
        <!--      <p class="card-text text-muted mb-0">Profiles</p>-->
        <!--      <a href="<?php echo base_url("gfa/corperate_startups/Business-Owner") ?>" class="fw-bolder mb-0">View</a>-->
        <!--    </div>-->
        <!--  </div>-->
		
      </div>
    </div>
	<div class="col-lg-4 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-secondary p-50 m-0">
            <div class="avatar-content">
              <i data-feather="book" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countCourseCateegory("Growth") ?></h2>
          <p class="card-text">Growth</p>
        </div>
        <!--<div class="row border-top text-center mx-0">-->
        <!--    <div class="col-6 border-end py-1">-->
        <!--      <p class="card-text text-muted mb-0">Course</p> -->
        <!--      <a href="#" class="fw-bolder mb-0">Details</a>-->
        <!--    </div>-->
        <!--    <div class="col-6 py-1">-->
        <!--      <p class="card-text text-muted mb-0">Profiles</p>-->
        <!--      <a href="<?php echo base_url("gfa/corperate_startups/Aspiring-Business-Owner") ?>" class="fw-bolder mb-0">View</a>-->
        <!--    </div>-->
        <!--  </div>-->
		
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-12">
      <div class="card">
       <div class="card-header flex-column align-items-start pb-0">
          <div class="avatar bg-light-warning p-50 m-0">
            <div class="avatar-content">
              <i data-feather="book" class="font-medium-5"></i>
            </div>
          </div>
          <h2 class="fw-bolder mt-1"><?php echo $this->gfa_model->countCourseCateegory("Funding") ?></h2>
          <p class="card-text">Funding</p>
        </div>
        <!--<div class="row border-top text-center mx-0">-->
        <!--    <div class="col-6 border-end py-1">-->
        <!--      <p class="card-text text-muted mb-0">Course</p> -->
        <!--      <a href="#" class="fw-bolder mb-0">Details</a>-->
        <!--    </div>-->
        <!--    <div class="col-6 py-1">-->
        <!--      <p class="card-text text-muted mb-0">Profiles</p>-->
        <!--      <a href="<?php echo base_url("gfa/corperate_startups/Professional") ?>" class="fw-bolder mb-0">View</a> -->
        <!--    </div>-->
        <!--  </div>-->
		
      </div>
    </div>
    
    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
    
    <!-- Orders Chart Card ends -->
  </div>
<div class="row match-height">
    <!-- Medal Card -->
    
    <!--/ Medal Card -->

    <!-- Statistics Card -->
   
    <!--/ Statistics Card -->
  </div>
  <div class="row match-height">
    <!-- Avg Sessions Chart Card starts -->
   
    <!-- Avg Sessions Chart Card ends -->
	
	 <!-- Developer Meetup Card -->
     <div class="col-lg-12 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Development</h4>
         
        </div>
        <div class="card-body" style="height: 400px; overflow: scroll;">
    <?php $rowCourse = $this->gfa_model->skillsBySubCat("Development"); foreach($rowCourse as $rowCourseArray) { ?> 
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="map-pin" class="avatar-icon font-medium-3"></i> 
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title"><?php echo $rowCourseArray['skill_name'] ?> </h6>
    <!--            <small>Development: <?php echo $this->gfa_model->countRegistrationState("Business Owner",$rowStateArray['states']) ?> , ABO: <?php echo $this->gfa_model->countRegistrationState("Aspiring Business Owner",$rowStateArray['states']) ?>  , -->
    <!--            P: <?php echo $this->gfa_model->countRegistrationState("Professional",$rowStateArray['states']) ?>  , JS: <?php echo $this->gfa_model->countRegistrationState("Jobseeker",$rowStateArray['states']) ?> -->
				<!--</small>-->
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $this->gfa_model->countCourseCategoryEx($rowCourseArray['skill_name']) ?></div>
          </div>
      <?php }  ?>   
          
		  
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->
    
   
  </div>


 

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>