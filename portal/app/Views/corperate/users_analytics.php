<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
				$sql =  $this->gfa_model->UsersAnalytics($batch);
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
    <!-- Avg Sessions Chart Card starts -->
    
    <!-- Avg Sessions Chart Card ends -->
	
	 <!-- Developer Meetup Card -->
     <div class="col-lg-12 col-md-6 col-12" >
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Applicants Activites Analytics </h4>
         
        </div>
        <div class="card-body" style="height: 400px; overflow: scroll;">
    
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                 <a href="<?php echo base_url("gfa/access_dashboard") ?>" class="btn btn-primary w-100">Details</a>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Login In</h6>
                <small>
                    Total number of Applicants that log into their account (access to the dashboard).
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $sql[0]['ApplicantsThatHaveLoggedIn']; //$this->gfa_model->countStudentsAccessToDashboard(); //48683 ?></div>
          </div>
          
         
         
          
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                 <a href="<?php echo base_url("gfa/started_learning") ?>" class="btn btn-success w-100">Details</a>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Started Learning</h6>
                <small>
                    Total number of Applicants that have started learning.
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $sql[0]['StartedLearning']; //48683 ?></div> 
          </div>
          <div class="transaction-item">
            <div class="d-flex">
                 <div class="avatar bg-light-dark rounded float-start">
              <a href="<?php echo base_url("gfa/completed_at_least_a_course") ?>" class="btn btn-warning w-100">Details</a>
              </div>
            
              <div class="transaction-percentage">
                <h6 class="transaction-title">Completed at least one assigned courses</h6>
                <small>
                    Total number of people that have completed at least one assigned courses.  
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php
															// $atLeatOneCourse = $this->gfa_model->countStudentsCompletedAtLeastOneCourse();
															// $onGoingCourse   =  $this->gfa_model->countStudentsCompletedCourse();
															// $completedCourse = $atLeatOneCourse - $onGoingCourse;
															// echo $atLeatOneCourse;
															echo $sql[0]['CompletedAtLeastOneCourse'];
															//?>
            </div>
          </div>
      <div class="transaction-item">
            <div class="d-flex">
                 <div class="avatar bg-light-warning rounded float-start">
              <a href="<?php echo base_url("gfa/completed_assigned_course") ?>" class="btn btn-warning w-100">Details</a>
              </div>
            
              <div class="transaction-percentage">
                <h6 class="transaction-title">Completed Assigned Courses</h6>
                <small>
                    Total number of people that have completed all their assigned courses.  
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $sql[0]['StudentsCompletedCoursePassedQuiz'];  //$completedCourse ?></div>
          </div>
          
		  <div class="transaction-item"> 
            <div class="d-flex">
                 <div class="avatar bg-light-secondary rounded float-start">
              <a href="<?php echo base_url("gfa/started_learning") ?>" class="btn btn-warning w-100">Details</a>
              </div>
            
              <div class="transaction-percentage">
                <h6 class="transaction-title">Learning so far </h6>
                <small>
                    Total number of people that are  learning from GFA regarding the program thus far.  
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success"><?php echo $sql[0]['StartedLearning']; //$this->gfa_model->countStudentsbyLessonFar(); //48683 ?></div>
          </div>
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->
    
   
  </div>
<!--<div class="row match-height">-->
   
<!--    <div class="col-xl-12 col-md-6 col-12">  -->
<!--      <div class="card card-statistics">-->
<!--        <div class="card-header">-->
<!--          <h4 class="card-title"> Total number of users that have login more than today, two, three, four, five, six, seven times in a week</h4> -->
<!--          <div class="d-flex align-items-center">-->
<!--            <p class="card-text font-small-2 me-25 mb-0"><a type="button" class="btn btn-warning w-100">Details</a></p>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="card-body statistics-body">-->
<!--          <div class="row">-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-primary me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countAccountInterest("Yes") ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Once</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-info me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countAccountInterest("No") ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Twice</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-success me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countNeedAccount() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Thrice</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-warning me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegBVNX() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Fourth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-danger me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegNINX() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Fifth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-danger me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegNIN() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Sixth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-4 col-sm-6 col-12 me-2">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-warning me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegBVN() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Seven</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
            
<!--          </div>-->
<!--          <div class="row">-->
            
            
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
    
<!--  </div>-->
  
<!--<div class="row match-height">-->
   
<!--    <div class="col-xl-12 col-md-6 col-12">  -->
<!--      <div class="card card-statistics">-->
<!--        <div class="card-header">-->
<!--          <h4 class="card-title"> Total number of people who have completed at least one, two, three, four, five, six, seven course </h4> -->
<!--          <div class="d-flex align-items-center">-->
<!--            <p class="card-text font-small-2 me-25 mb-0"><a type="button" class="btn btn-primary w-100">Details</a></p>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="card-body statistics-body">-->
<!--          <div class="row">-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-primary me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countAccountInterest("Yes") ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Once</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-info me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countAccountInterest("No") ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Twice</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-success me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="box" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countNeedAccount() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Thrice</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-warning me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegBVNX() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Fourth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-2 col-sm-6 col-12 mb-2 mb-xl-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-danger me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegNINX() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Fifth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
<!--            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-danger me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegNIN() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Sixth</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-xl-4 col-sm-6 col-12 me-2">-->
<!--              <div class="d-flex flex-row">-->
<!--                <div class="avatar bg-light-warning me-2">-->
<!--                  <div class="avatar-content">-->
<!--                    <i data-feather="link-2" class="avatar-icon"></i>-->
<!--                  </div>-->
<!--                </div>-->
<!--                <div class="my-auto">-->
                  <h4 class="fw-bolder mb-0"><?php //echo  $this->gfa_model->countRegBVN() ?></h4>
<!--                  <p class="card-text font-small-3 mb-0">Seven</p>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
            
            
<!--          </div>-->
<!--          <div class="row">-->
            
            
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
   
<!--  </div>-->

 

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>