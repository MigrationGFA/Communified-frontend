<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $email = session()->get('email');
  $loginkey = $this->gfa_model->getWpCred($email);
 
?>
   <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            


             

<h4 class="py-3 mb-4"><span class="text-muted fw-light">My</span> Courses</h4>

<div class="app-academy">
  

  <div class="card mb-4">
    <div class="card-header d-flex flex-wrap justify-content-between gap-3">
      <div class="card-title mb-0 me-1">
        <h5 class="mb-1"></h5>
  
        
      </div>
      <input type="hidden" id="action_email" value="<?php echo $email; ?>">
    <!--  <div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">-->
    <!--    <select id="select2_course_select" class="select2 form-select" data-placeholder="All Courses">-->
    <!--      <option value="">All Courses</option>-->
    <!--      <option value="Digital Marketing">Digital Marketing (1)</option>-->
    <!--      <option value="Cloud Platforms Navigation">Cloud Platforms Navigation (2)</option>-->
    <!--      <option value="Data Analysis and Visualization">Data Analysis and Visualization (7)</option>-->
    <!--      <option value="Search Engine Optimization">Search Engine Optimization (SEO)</option>-->
    <!--      <option value="CRM Management">CRM Management (6)</option>-->
		  <!--<option value="Graphics Design">Graphics Design (0)</option>-->
		  <!--<option value="UIUX Design">UI/UX Design (0)</option>-->
		  <!--<option value="Accounting Software">Accounting Software (2)</option>-->
    <!--    </select>-->

        
    <!--  </div>-->
    </div>
    <div class="card-body">
        <div class="row mb-4 g-4 loadCourseAnalytics">
  
</div>
      <div class="row gy-4 mb-4">
           <?php if(!empty($courseArrayToday)){  ?>
           <div class="col-sm-6 col-lg-6">
          <div class="card p-2 h-100 shadow-none border"> 
           <a href="#" class="h5">Your Course for this Month</a> 
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("uploads/files/{$courseArrayToday[0]['img']}") ?>" alt="soft skill" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseArrayToday[0]['duration']; ?> <?php echo $courseArrayToday[0]['duration_time']; ?></ls></span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseArrayToday[0]['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseArrayToday[0]['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <!--<a class="app-academy-md-50 btn btn-label-secondary me-md-2 d-flex align-items-center" href="<?= $courseArrayToday[0]['lmslink'];  ?>">-->
                <!--  <i class="ti ti-rotate-clockwise-2 align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Start Over</span>-->
                <!--</a>-->
             <?php   $cours_url =  str_replace(" ","-",$courseArrayToday[0]['coursetitle']); 
                    $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($courseArrayToday[0]['id']);
                    $getActiveLesson = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $lesson_url = str_replace(" ","-",$getActiveLesson[0]['title']);
             ?>
                <a class="app-academy-md-50 btn btn-label-success d-flex align-items-center userActivity" ls="<?= $courseArrayToday[0]['coursetitle'];  ?>" href="<?php 
                if($courseArrayToday[0]['lmslink'] ==''){ echo base_url("gfa/course/{$courseArrayToday[0]['id']}/{$cours_url}"); }else{ echo $courseArrayToday[0]['lmslink']; } ?>"> 
                  <span class="me-2">Review</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a> 

             <?php if($getActiveLesson[0]['title'] !="") {  ?>  

                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php 
                if($courseArrayToday[0]['lmslink'] ==''){ echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}");}else{ echo $courseArrayToday[0]['lmslink']; }  ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
        
        <a class="h5" href="#">Assigned Courses: You are required to complete at least one course.</a>

			<?php $n =1;  foreach ($courseArrayRec as $courseDetailsRec) {  ?>
       
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("uploads/files/{$courseDetailsRec['img']}") ?>" alt="soft skill" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetailsRec['duration']; ?> <?php echo $courseDetailsRec['duration_time']; ?></ls></span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetailsRec['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetailsRec['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
              <?php   $cours_url =  str_replace(" ","-",$courseDetailsRec['coursetitle']); 
                    $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($courseDetailsRec['id']);
                    $getActiveLesson = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $lesson_url = str_replace(" ","-",$getActiveLesson[0]['title']);
             ?>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-success me-md-2 d-flex align-items-center userActivity" ls="<?= $courseDetailsRec['coursetitle'];  ?>" href="<?php echo base_url("gfa/course/{$courseDetailsRec['id']}/{$cours_url}") ?>">
                  <i class="ti ti-chevron-right align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Review</span>
                </a>
                
                <?php if($getActiveLesson[0]['title'] !="" || $courseDetailsRec['lmslink'] !=null) {  ?>  

                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php 
                if($courseDetailsRec['lmslink'] ==null){ echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}");}else{ echo $courseDetailsRec['lmslink']; }  ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
        </div>
        
		<?php }  ?>
         
         <br>
		<a class="h5" href="#">Previous Courses</a>

		<?php $n =1;  foreach ($courseArrayPrev as $courseDetailsPrev) {  ?>
        <div class="col-sm-6 col-lg-4">
          <div class="card p-2 h-100 shadow-none border">
            <div class="rounded-2 text-center mb-3">
              <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets-new/img/{$courseDetailsPrev['img']}") ?>" alt="soft skill" /></a>
            </div>
            <div class="card-body p-3 pt-2">
              <div class="d-flex justify-content-between align-items-center mb-3">
                <span class="badge bg-success">Duration: <ls style="color:#"><?php echo $courseDetailsPrev['duration']; ?> mins</ls></span>
                <h6 class="d-flex align-items-center justify-content-center gap-1 mb-0">
                 <!--<span class="text-muted"> Day <?php echo $n++ ?></span>-->
                </h6>
              </div>
              <a class="h5" href="#"><?= $courseDetailsPrev['coursetitle'];  ?></a>
              <p class="mt-2"><?= $courseDetailsPrev['description'];  ?></p> 
              <!--<p class="d-flex align-items-center"><i class="ti ti-clock me-2 mt-n1"></i>7 hours</p>-->
              <!--<div class="progress mb-4" style="height: 8px">-->
              <!--  <div class="progress-bar w-50" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>-->
              <!--</div>-->
              <?php   $cours_url =  str_replace(" ","-",$courseDetailsPrev['coursetitle']); 
                    $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($courseDetailsPrev['id']);
                    $getActiveLesson = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $lesson_url = str_replace(" ","-",$getActiveLesson[0]['title']);
             ?>
             <div class="d-flex flex-column flex-md-row gap-2 text-nowrap">
                <a class="app-academy-md-50 btn btn-label-success me-md-2 d-flex align-items-center userActivity" ls="<?= $courseDetailsPrev['coursetitle'];  ?>" href="<?php echo base_url("gfa/course/{$courseDetailsPrev['id']}/{$cours_url}") ?>">
                  <i class="ti ti-chevron-right align-middle scaleX-n1-rtl  me-2 mt-n1 ti-sm"></i><span>Review</span>
                </a>
                 <?php if($getActiveLesson[0]['title'] !="") {  ?>
                <a class="app-academy-md-50 btn btn-label-primary d-flex align-items-center userActivity" ls="<?= $getActiveLesson[0]['title'];  ?>" href="<?php echo base_url("gfa/lesson/{$getActiveLesson[0]['id']}/{$lesson_url}") ?>"> 
                  <span class="me-2">Start</span><i class="ti ti-chevron-right scaleX-n1-rtl ti-sm"></i>
                </a>
                <?php }  ?>
              </div>
            </div>
          </div>
                 <select id="mySelect" style="display: none;">
                  <option value="">Option</option>
        <option value="Option 1">Option 1</option>
       
    </select>
        </div>
        
		<?php }  ?>
       
<input type="hidden" name="email" class="emailAcct" value="<?php echo $email;  ?>" />
		
      <!--<input type="text" class="getValue" value="" />-->
		<span class="loadModule1 loadingPage1"></span>
      </div>
      <script>
          $(document).ready(function() {
              //$(window).on('load', function() {
        		 $('#mySelect').change(function() {
                var email = $(".emailAcct").val();  
                  //load analytic page 
                  $.ajax({
        url: '<?php echo base_url("gfa/loadCourseAnalytics") ?>',
        method: 'POST',
        data:{email:email},
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadCourseAnalytics").html("Loading...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
            // Code to be executed after the AJAX request is successful
        	$(".loadCourseAnalytics").html("");
            $(".loadCourseAnalytics").html(data);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadCourseAnalytics").html('Error:', status, error);
        }
    });
                  
              // Check if the modal has been shown before
    if (!localStorage.getItem('modalShown')) {
      // Show the modal
      $('#agreeGrp').modal('show');

      // Set a flag in localStorage to indicate that the modal has been shown
      localStorage.setItem('modalShown', 'true');
    }

    // Event listener for modal close button
    $('#agreeGrp').on('hidden.bs.modal', function () {
      // Clear the localStorage flag when the modal is closed
      localStorage.removeItem('modalShown');
    });
              }).change();
    
            $('.userActivity').click(function(){
                var getValue =  $(this).attr("ls");
                //var showValue = $(".getValue").val(getValue);
                
                 // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/courseActivities") ?>',
        method: 'POST',
        data:{getValue:getValue},
        success: function(response) {
            // Code to be executed after the AJAX request is successful
        	
            $(".loadModule1").html(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage1").html('Error:', status, error);
        }
    });
            });  
              
              
          });
      </script>
      <!--<nav aria-label="Page navigation" class="d-flex align-items-center justify-content-center">-->
      <!--  <ul class="pagination">-->
      <!--    <li class="page-item prev">-->
      <!--      <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-left ti-xs scaleX-n1-rtl"></i></a>-->
      <!--    </li>-->
      <!--    <li class="page-item active">-->
      <!--      <a class="page-link" href="javascript:void(0);">1</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">2</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">3</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">4</a>-->
      <!--    </li>-->
      <!--    <li class="page-item">-->
      <!--      <a class="page-link" href="javascript:void(0);">5</a>-->
      <!--    </li>-->
      <!--    <li class="page-item next">-->
      <!--      <a class="page-link" href="javascript:void(0);"><i class="ti ti-chevron-right ti-xs scaleX-n1-rtl"></i></a>-->
      <!--    </li>-->
      <!--  </ul>-->
      <!--</nav>-->
    </div>
  </div>
  

</div>

          </div>
          <!-- / Content -->


          <script>
          $(function(){
            $('.userActivity').click(function(){
                var getValue =  $(this).attr("ls");
                //var showValue = $(".getValue").val(getValue);
                
                 // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/courseActivities") ?>',
        method: 'POST',
        data:{getValue:getValue},
        success: function(response) {
            // Code to be executed after the AJAX request is successful
          
            $(".loadModule1").html(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage1").html('Error:', status, error);
        }
    });
            });  
              
              
          });
      </script>