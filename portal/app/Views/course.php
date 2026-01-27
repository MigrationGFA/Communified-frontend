<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>

<div class="container-xxl flex-grow-1 container-p-y">
 <?php $getCourseData = $this->gfa_model->getCourseById($id);  ?>           
            
<h4 class="pt-3 mb-0">
  <span class="text-muted fw-light"> <?php echo ucwords($getCourseData[0]['learningpath'])  ?></span>
</h4>

<div class="card g-3 mt-5">
  <div class="card-body row g-3">
    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
        <div class="me-1">
          <h5 class="mb-1"><?php echo ucwords($getCourseData[0]['coursetitle']) ?></h5>
          <!--<p class="mb-1">Prof. <span class="fw-medium"> Devonne Wallbridge </span></p>-->
        </div>
        <div class="d-flex align-items-center">
          <span class="badge bg-label-danger">Overview</span>
          <!--<i class='ti ti-share ti-sm mx-4'></i>-->
          <!--<i class='ti ti-bookmarks ti-sm'></i>-->
        </div>
      </div>
      <div class="card academy-content shadow-none border">
        <div class="p-2">
          <div class="cursor-pointer">
              
              <?php if($getCourseData[0]['img'] !=""){  ?>
              <img class="img-fluid" src="<?php echo base_url("uploads/files/{$getCourseData[0]['img']}") ?>" alt="" />
              
              <?php  }else{   ?>
           
              
            
            <?php }  ?>
          </div>
        </div>
        <div class="card-body">
          <h5 class="mb-2">About this course</h5>
        <?php echo $getCourseData[0]['description'] ?>
          <hr class="my-4">
          <h5>By the numbers</h5>
          <div class="d-flex flex-wrap">
            <div class="me-5">
              <p class="text-nowrap"><i class='ti ti-checks ti-sm me-2 mt-n2'></i>Skill level: All Levels</p>
              <p class="text-nowrap"><i class='ti ti-user ti-sm me-2 mt-n2'></i>Students: ALL</p>
              <p class="text-nowrap"><i class='ti ti-flag ti-sm me-2 mt-n2'></i>Languages: English</p>
              <p class="text-nowrap "><i class='ti ti-file ti-sm me-2 mt-n2'></i>Captions: Yes</p>
            </div>
            <div>
              <p class="text-nowrap"><i class='ti ti-pencil ti-sm me-2 mt-n2'></i>Lectures: <?php echo $this->gfa_model->getTotalLessonByCourse($id) ?></p>
              <p class="text-nowrap "><i class='ti ti-clock ti-sm me-2 mt-n2'></i>Video: <?php echo $getCourseData[0]['duration']." ".$getCourseData[0]['duration_time'] ?> </p>
            </div>
          </div>
          <hr class="mb-4 mt-2">
          
          <hr class="my-4">
          <h5>Instructor</h5>
          <div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
              <div class="avatar me-2"><img src="<?php echo base_url("public/assets-new/img/avatars/default-img.jpg") ?>" alt="Avatar" class="rounded-circle"></div>
            </div>
            <div class="d-flex flex-column">
              <span class="fw-medium">Admin</span>
              <small class="text-muted">FGNALAT </small> 
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="accordion stick-top accordion-bordered" id="courseContent">
          <?php $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($id)   ?> 
        <div class="accordion-item active mb-0">
          <div class="accordion-header" id="headingOne">
            <button type="button" class="accordion-button bg-lighter rounded-0" data-bs-toggle="collapse" data-bs-target="#chapterOne" aria-expanded="true" aria-controls="chapterOne">
              <span class="d-flex flex-column">
                <span class="h5 mb-1"><?php echo ucwords($getActiveSection[0]['title']) ?></span>
                <span class="fw-normal text-body">  <?php echo $this->gfa_model->getTotalLessonBySection($getActiveSection[0]['id']) ?> | <?php echo $this->gfa_model->getTotalDurationofLessonBySection($getActiveSection[0]['id'])  ?>min(s)</span>
              </span>
            </button>
          </div>
          <div id="chapterOne" class="accordion-collapse collapse show" data-bs-parent="#courseContent">
            <div class="accordion-body py-3 border-top">
            <?php $getActiveLessonData = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
                    $n =1;
                    foreach($getActiveLessonData as $getActiveLesson){
                        $lesson_url = str_replace(" ","-",$getActiveLesson['title']);
                ?>    
              <div class="form-check d-flex align-items-center mb-3">
                <a href="<?php echo base_url("gfa/lesson/{$getActiveLesson['id']}/{$lesson_url}") ?>" ls="<?= $getActiveLesson['title'];  ?>" class="userActivity">
                <!--<input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" />-->
                <i class='ti ti-checks ti-sm me-2 mt-n2'></i>
                <label for="defaultCheck1" class="form-check-label ms-3">
                  <span class="mb-0 h6"><?php echo $n++ ?>. <?php echo ucwords($getActiveLesson['title']) ?></span>
                  <span class="text-muted d-block"><?php echo $getActiveLesson['duration_value']."".$getActiveLesson['duration_time'] ?></span>
                </label>
                </a>
              </div>
              <?php }  ?>
            </div>
          </div>
        </div>
          <?php $getActiveSectionData = $this->gfa_model->getSectionByCourseIdNotActive($id);
          foreach($getActiveSectionData as $getActiveSection){
                $haystack = $getActiveSection['title'];
                $needle = "Assessment";

             $position = stripos($haystack, $needle);

if ($position !== false) { echo ""; }else{  
              //if($getActiveSection['title'] =="Assessment" || Assessment and Quiz  Check knowledge
          ?> 
        <div class="accordion-item mb-0">
          <div class="accordion-header" id="headingTwo">
             
            <button type="button" class="bg-lighter rounded-0 accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#chapterTwo" aria-expanded="false" aria-controls="chapterTwo">
              <span class="d-flex flex-column">
                <span class="h5 mb-1"><?php echo ucwords($getActiveSection['title']) ?></span>
                <span class="fw-normal text-body">  <?php echo $this->gfa_model->getTotalLessonBySection($getActiveSection['id']) ?> | <?php echo $this->gfa_model->getTotalDurationofLessonBySection($getActiveSection['id'])  ?>min(s)</span>
              </span>
            </button>
          </div>
          <div id="chapterTwo" class="accordion-collapse collapse" data-bs-parent="#courseContent">
            <div class="accordion-body py-3 border-top">
                <?php $getActiveLessonData = $this->gfa_model->getLessonBySectionId($getActiveSection['id']);
                    $n =1;
                    foreach($getActiveLessonData as $getActiveLesson){
                        $lesson_url = str_replace(" ","-",$getActiveLesson['title']);
                ?>
              <div class="form-check d-flex align-items-center mb-3">
                  <a href="<?php echo base_url("gfa/lesson/{$getActiveLesson['id']}/{$lesson_url}") ?>" ls="<?= $getActiveLesson['title'];  ?>" class="userActivity">
                <!--<input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" />-->
                <i class='ti ti-checks ti-sm me-2 mt-n2'></i>
                <label for="defaultCheck1" class="form-check-label ms-3">
                  <span class="mb-0 h6"><?php echo $n++ ?>. <?php echo ucwords($getActiveLesson['title']) ?></span>
                  <span class="text-muted d-block"><?php echo $getActiveLesson['duration_value']."".$getActiveLesson['duration_time'] ?></span>
                </label>
                </a>
              </div>
              <?php }  ?>
            </div>
          </div>
        </div>
        <?php } } ?>
      </div>
    </div>
  </div>
</div>
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


          </div>