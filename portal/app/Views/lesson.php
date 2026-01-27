<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>

<div class="container-xxl flex-grow-1 container-p-y">
 <?php  
        $getLessonData = $this->gfa_model->getLessonById($id); 
        $getSectionData = $this->gfa_model->getCourseSection($getLessonData[0]['section_id']);
        $getCourseData = $this->gfa_model->getCourseById($getLessonData[0]['course_id']);
        $getActiveSection = $this->gfa_model->getSectionByCourseIdActive($getLessonData[0]['course_id']);
        $getActiveLessonData = $this->gfa_model->getLessonBySectionId($getActiveSection[0]['id']);
        $getActiveSectionData = $this->gfa_model->getSectionByCourseIdNotActive($getLessonData[0]['course_id']);
        
		$getQuizByLessonIdData = $this->gfa_model->getQuizByLessonId($id);

 ?>           
          
<h4 class="pt-3 mb-0">
  <span class="text-muted fw-light"> <?php echo ucwords($getSectionData[0]['title']) ?></span>
</h4>
<script src="https://cdnjs.cloudflare.com/ajax/libs/shaka-player/3.0.1/shaka-player.compiled.js"></script>
<div class="card g-3 mt-5">
  <div class="card-body row g-3">
    <div class="col-lg-8">
      <div class="d-flex justify-content-between align-items-center flex-wrap mb-2 gap-1">
        <div class="me-1">
          <h5 class="mb-1"><?php echo ucwords($getLessonData[0]['title']) ?></h5>
          <!--<p class="mb-1">Prof. <span class="fw-medium"> Devonne Wallbridge </span></p>-->
        </div>
        <div class="d-flex align-items-center">
          <span class="badge bg-label-danger"><?php echo $getCourseData[0]['learningpath'] ?></span>
          <!--<i class='ti ti-share ti-sm mx-4'></i>-->
          <!--<i class='ti ti-bookmarks ti-sm'></i>-->
        </div>
      </div>
  
      <div class="card academy-content shadow-none border">
        <div class="p-2">
          <div class="cursor-pointer">
              
          <?php if($getLessonData[0]['media'] !=""){  
             $haystack = $getLessonData[0]['media'];
             $needle = "sp-embed-player";
             $needle2 = "format=mpd-time-cmaf";

             $position = stripos($haystack, $needle);
             $position2 = stripos($haystack, $needle2);

            if ($position !== false) {
            ?>
                <?php echo $getLessonData[0]['media'] ?>
                <?php } elseif ($position2 !== false) { ?>
                  <video id="vid1"  class="azuremediaplayer amp-default-skin w-100" poster="poster.jpg" autoplay="autoplay" controls="controls"  data-setup="{&quot;nativeControlsForTouch&quot;: false}">
            <source src="<?php echo $getLessonData[0]['media'] ?>" type="application/vnd.ms-sstr+xml" />
            </video>
            <?php } else {  ?>    
              <iframe class="w-100" height="320px" src="<?php echo $getLessonData[0]['media'] ?>"></iframe>
            <?php }  ?>
      
              <?php  }else{   ?>
            
            <?php }  ?>
          </div>
        </div>
               
              
        <div class="card-body">
            <h5><?php echo lang('translation.Lesson Details') ?></h5>
          <div class="me-2" style="text-align: justify; height: 100%; overflow: auto;">
            <?php
              $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">','<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" placeholder="Embed URL">');
              $replaceData = array("<div>", "<br/>");
              echo html_entity_decode(str_replace($searchData,$replaceData,stripslashes($this->gfa_model->getCourseDataByRef($getLessonData[0]['ref_id'])[0]['data'])), ENT_QUOTES); 
            ?>
          </div>
          <div class="gap-6 col-lg-6 " style="margin-top: 30px;">
            <!--<div class="demo-inline-spacing mb-2 gap-6">-->
            <?php
            $getPreviousData = $this->gfa_model->getPreviousLessonById($id,$course_sess_id);
            
            $getNextData = $this->gfa_model->getNextLessonById($id,$course_sess_id);
            
            ?>
            <?php if(!empty($getPreviousData)){  $lesson_url_prev = str_replace(" ","-", $getPreviousData['title']); $prevId = $getPreviousData['id']; ?>
            <a href="<?php echo base_url("gfa/lesson/{$prevId}/{$lesson_url_prev}") ?>" class="btn rounded-pill btn-primary"><?php echo lang('translation.Previous') ?></a>
            <?php }  ?>
            <?php if(!empty($getNextData)){  $lesson_url_next = str_replace(" ","-", $getNextData['title']); $nextId = $getNextData['id']; ?>
            <a href="<?php echo base_url("gfa/lesson/{$nextId}/{$lesson_url_next}") ?>" class="btn rounded-pill btn-dark"><?php echo lang('translation.Next') ?></a>
            <?php }  ?>
            <?php if($getQuizByLessonIdData[0]['lesson_id'] ==''){  echo ''; }else{ ?>
            <a href="<?php echo base_url("gfa/quiz/{$getActiveQuizData[0]['ref_id']}") ?>" class="btn rounded-pill btn-secondary"><?php echo lang('translation.Quiz') ?></a>
            <?php }  ?>
          </div>
          <hr class="my-4">
          <h5 class="mb-2"><?php echo lang('translation.About this lesson') ?></h5>
        <?php echo $getLessonData[0]['description'] ?>
          <hr class="my-4">
          <!-- <h5>By the numbers</h5> -->
          <div class="d-flex flex-wrap">
            <div class="me-5">
              <!--<p class="text-nowrap"><i class='ti ti-checks ti-sm me-2 mt-n2'></i>Skill level: All Levels</p>-->
              <!--<p class="text-nowrap"><i class='ti ti-user ti-sm me-2 mt-n2'></i>Students: ALL</p>-->
              <!-- <p class="text-nowrap"><i class='ti ti-flag ti-sm me-2 mt-n2'></i>Languages: English</p> -->
              <p class="text-nowrap "><i class='ti ti-file ti-sm me-2 mt-n2'></i><?php echo lang('translation.Captions: Yes') ?></p>
            </div>
            <div>
              <p class="text-nowrap"><i class='ti ti-pencil ti-sm me-2 mt-n2'></i><?php echo lang('translation.Rating') ?>: 5</p>
              <p class="text-nowrap "><i class='ti ti-clock ti-sm me-2 mt-n2'></i><?php echo lang('translation.Video') ?>: <?php echo $getLessonData[0]['duration_value']." ".$getLessonData[0]['duration_time'] ?> </p>
            </div>
          </div>
          <hr class="mb-4 mt-2">
          
          <!-- Chat History -->
    
    <!-- /Chat History -->
          
          <h5>Instructor</h5>
          <div class="d-flex justify-content-start align-items-center user-name">
            <div class="avatar-wrapper">
              <div class="avatar me-2"><img src="<?php echo base_url("public/assets-new/img/avatars/default-img.jpg") ?>" alt="Avatar" class="rounded-circle"></div>
            </div>
            <div class="d-flex flex-column">
              <span class="fw-medium"><?php echo lang('translation.Admin') ?></span>
              <small class="text-muted">CIPME </small> 
            </div>
          </div>
        </div>
              <hr class="mb-4 mt-2">
              <h4><?php echo lang('translation.Comments') ?></h4>
        <div class="comments-section">
        <!-- Existing Comments -->
        <div class="get-comments-section" >
              <?php $commentsData = $this->gfa_model->getComments($id); foreach($commentsData as $commentInfo){  ?>
        <div class="comment">
              
            <div class="user"><?php echo ucwords($this->gfa_model->getStartUpDetails($commentInfo['email'])[0]['Primary_Contact_Name']);  ?></div>
            <p><?php echo $commentInfo['comment'] ?></p>
            <div class="timestamp"><strong><?php  $timeDate = strtotime($commentInfo['date']) +3600; echo $this->gfa_model->timeAgo($timeDate); ?></strong></div>
        </div>
		
              <?php } ?>
        
		</div>
        <!-- Comment Form -->
        <div class="comment-form">
            <textarea placeholder="<?php echo lang('translation.Write your comment here') ?>"></textarea>
              <input type="hidden" class="lesson_id" value="<?php echo $id ?>" />
            <button><?php echo lang('translation.Add Comment') ?></button>
        </div>
    </div>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="accordion stick-top accordion-bordered" id="courseContent">
         
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
            <?php 
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
               <?php 
                  $getActiveQuizData = $this->gfa_model->getQuizBySectionId($getActiveLessonData[0]['section_id']);
        			
                    foreach($getActiveQuizData as $getActiveQuiz){
                       
                ?>    
              <div class="form-check d-flex align-items-center mb-3">
                <a href="<?php echo base_url("gfa/quiz/{$getActiveQuiz['ref_id']}") ?>" ls="<?= $getActiveQuiz['title'];  ?>" class="userActivity">
                <!--<input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" />-->
                <i class='ti ti-box ti-sm me-2 mt-n2'></i>
                <label for="defaultCheck1" class="form-check-label ms-3">
                  <span class="mb-0 h6"><?php echo ucwords($getActiveQuiz['title']) ?></span>
                  <span class="text-muted d-block"></span>
                </label>
                </a>
              </div>
              <?php }  ?>
            </div>
          </div>
        </div>
          <?php 
           
          foreach($getActiveSectionData as $getActiveSection){
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
              <?php 
                  	$getNonActiveQuizData = $this->gfa_model->getQuizBySectionId($getActiveSection['id']);
                    foreach($getNonActiveQuizData as $getActiveQuiz){
                       
                ?>    
              <div class="form-check d-flex align-items-center mb-3">
                <a href="<?php echo base_url("gfa/quiz/{$getActiveQuiz['ref_id']}") ?>" ls="<?= $getActiveQuiz['title'];  ?>" class="userActivity">
                <!--<input class="form-check-input" type="checkbox" id="defaultCheck1" checked="" />-->
                <i class='ti ti-box ti-sm me-2 mt-n2'></i>
                <label for="defaultCheck1" class="form-check-label ms-3">
                  <span class="mb-0 h6"><?php echo ucwords($getActiveQuiz['title']) ?></span>
                  <span class="text-muted d-block"></span>
                </label>
                </a>
              </div>
              <?php }  ?>
            </div>
          </div>
        </div>
        <?php }  ?>
      </div>
    </div>
  </div>
</div>

<script>
          $(function(){
          $(".comment-form button").click(function(e){
          		e.preventDefault();
          
          var commentText = $('.comment-form textarea').val();
          var lesson_id = $('.lesson_id').val();
                if (commentText.trim() !== '') {
            
          		$.ajax({
        url: '<?php echo base_url("gfa/commentpro") ?>',
        method: 'POST',
        data:{commentText:commentText,lesson_id:lesson_id},
        success: function(response) {
            // Code to be executed after the AJAX request is successful
        	
           $(".get-comments-section").append(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".get-comments-section").html('Error:', status, error);
        }
    });
          		
                }    
          });
          
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