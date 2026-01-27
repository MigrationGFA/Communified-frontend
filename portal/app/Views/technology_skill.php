<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
   <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            

<h4 class="py-3 mb-4"><span class="text-muted fw-light">My</span> Courses</h4>

<div class="app-academy">
  

  <div class="card mb-4">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-1">Technology enabled skills (no coding involved)</h5>
        <p class="text-muted mb-0">Total of 18 course have been assigned to you</p>
      </div>
      <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
        <select id="select2_course_select" class="select2 form-select" data-placeholder="All Courses">
          <option value="">All Courses</option>
          <option value="Digital Marketing">Digital Marketing (1)</option>
          <option value="Cloud Platforms Navigation">Cloud Platforms Navigation (2)</option>
          <option value="Data Analysis and Visualization">Data Analysis and Visualization (7)</option>
          <option value="Search Engine Optimization">Search Engine Optimization (SEO)</option>
          <option value="CRM Management">CRM Management (6)</option>
		  <option value="Graphics Design">Graphics Design (0)</option>
		  <option value="UIUX Design">UI/UX Design (0)</option>
		  <option value="Accounting Software">Accounting Software (2)</option>
        </select>

        
      </div>
    </div>
    <div class="card-body">
      <div class="row gy-4 mb-4">
        <div class="col-sm-6 col-lg-6">
          <div class="card p-2 h-100 shadow-none border">
		  
		   
              <a href="app-academy-course-details.html" class="h5">Today's Course</a>
              
		  
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1" /></a>
            </div>
            <div class="card-body p-3 pt-2">
			<div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-primary">Digital Marketing</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  4.4 <span class="text-warning"><i class="ti ti-star-filled me-1 mt-n1"></i></span><span class="text-muted">(1)</span>
                </h6>
              </div>
			  <a href="app-academy-course-details.html" class="h5">Digital Marketing</a>
             <p class="mt-2">Introductory course for Angular and framework basics in web development.</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                 <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Start Learning</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
				<!--
				
				<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Continue</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>-->
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-6">
          <div class="card p-2 h-100 shadow-none border">
		  <a class="h5" href="app-academy-course-details.html">Your Next Course</a>
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-2.png" alt="tutor image 2" /></a>
            </div>
            <div class="card-body p-3 pt-2">
			
              <div class="d-flex justify-content-between align-items-center mb-3 pe-xl-3 pe-xxl-0">
                <span class="badge bg-label-danger">Cloud Platforms Navigation</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  4.2 <span class="text-warning"><i class="ti ti-star-filled me-1 mt-n1"></i></span><span class="text-muted"> (2)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Microsoft Azure Fundamentals: Describe Azure architecture and services</a>
              <p class="mt-2">Introductory course for design and framework basics in web development.</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>16 hours</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

              <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Coming Up Next</span>
                </a>
				<!--<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Continue</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>-->
              </div>
            </div>
          </div>
        </div>		<br>
		<a class="h5" href="#">Upcoming Course</a>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-3.png" alt="tutor image 3" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-success">Data Analysis and Visualizat...</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <span class="text-muted"> (7)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Model, query, and explore data in Azure Synapse</a>
              <p class="mt-2">This learning path introduces the foundational components of implementing lifecycle management techniques for Power BI assets.</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Continue</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-4.png" alt="tutor image 4" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-info">Data Analysis and Visualizat...</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                   <span class="text-muted"> (7)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Manage the analytics development lifecycle</a>
              <p class="mt-2">Learn about the features and capabilities of Azure Synapse Analytics - a cloud-based platform for big data processing and analysis. </p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Continue</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-5.png" alt="tutor image 5" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                 <span class="badge bg-label-info">Data Analysis and Visualizat...</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                   <span class="text-muted"> (7)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Implement and manage an analytics environment</a>
              <p class="mt-2">This learning path introduces Power BI administration at an enterprise-level, including governance, adoption, collaborating, sharing,</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-100" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="app-academy-course-details.html">
                  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>
                </a>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center" href="app-academy-course-details.html">
                  <span class="me-2">Continue</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
              </div>  </div>
          </div>
        </div>
		
				<br>
		<a class="h5" href="#">Previous Course</a>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-6.png" alt="tutor image 6" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-danger">Cloud Platforms Navigation</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0"> 
                  <span class="text-muted"> (2)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Microsoft Azure Fundamentals: Describe cloud concepts</a>
              <p class="mt-2">This learning path introduces the foundational components of implementing lifecycle management techniques for Power BI assets.</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>16 hours</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                 <a class="w-100 btn btn-label-primary" href="app-academy-course-details.html"><i class="ti ti-rotate-clockwise-2 me-2 mt-n1 scaleX-n1-rtl"></i>Start Over</a>
            
              </div>
            </div>
          </div>
        </div>
		
		 <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
		  <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-1.png" alt="tutor image 1" /></a>
            </div>
            <div class="card-body p-3 pt-2">
			<div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-label-primary">Manage the analytics...</span> 
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                  <span class="text-muted">(1)</span>
                </h6>
              </div>
			  <a href="app-academy-course-details.html" class="h5">Manage the analytics...</a>
             <p class="mt-2">Learn about the features and capabilities of Azure Synapse Analytics - a cloud-based platform for big data processing and analysis. </p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>30 minutes</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-75" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                 <a class="w-100 btn btn-label-primary" href="app-academy-course-details.html"><i class="ti ti-rotate-clockwise-2 me-2 mt-n1 scaleX-n1-rtl"></i>Start Over</a>
            
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="app-academy-course-details.html"><img class="img-fluid" src="../../assets/img/pages/app-academy-tutor-2.png" alt="tutor image 2" /></a>
            </div>
            <div class="card-body p-3 pt-2">
			
              <div class="d-flex justify-content-between align-items-center mb-3 pe-xl-3 pe-xxl-0">
                <span class="badge bg-label-danger">Cloud Platforms Navigation</span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0"> 
                 <span class="text-muted">(2)</span>
                </h6>
              </div>
              <a class="h5" href="app-academy-course-details.html">Implement and manage an analytics environment</a>
              <p class="mt-2">This learning path introduces Power BI administration at an enterprise-level, including governance, adoption, collaborating, sharing,</p>
              <p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>16 hours</p>
              <div class="progress mb-4" style="height: 8px">
                <div class="progress-bar w-25" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>

            <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                 <a class="w-100 btn btn-label-primary" href="app-academy-course-details.html"><i class="ti ti-rotate-clockwise-2 me-2 mt-n1 scaleX-n1-rtl"></i>Start Over</a>
            
              </div>
            </div>
          </div>
        </div>		<br>
		
		
      </div>
      <nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">
        <ul class="pagination">
          <li class="page-item prev">
            <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs scaleX-n1-rtl"></i></a>
          </li>
          <li class="page-item active">
            <a class="page-link" href="javascript:void(0);">1</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">2</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">3</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">4</a>
          </li>
          <li class="page-item">
            <a class="page-link" href="javascript:void(0);">5</a>
          </li>
          <li class="page-item next">
            <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs scaleX-n1-rtl"></i></a>
          </li>
        </ul>
      </nav>
    </div>
  </div>

</div>

          </div>
          <!-- / Content -->