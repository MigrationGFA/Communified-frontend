<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
  
  $resourceDetails = $this->gfa_model->getResouceById($id);
  $resourceCategory = $this->gfa_model->getResouceCategoryId($resourceDetails[0]['category_id']);

   ?>
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0"><?php echo ucwords($resourceCategory[0]['title']) ?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><?php echo ucwords($resourceDetails[0]['title']); ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/resource'); ?>"><?php echo lang('translation.Resource Centre') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Dashboard') ?></a>
                    </li>
                    <li class="breadcrumb-item active"><?php echo lang('translation.Details') ?>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="mb-1 breadcrumb-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-detached content-full">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
      <div class="card">
        <img
          src="<?php echo base_url('public/assets/app-assets/images/banner/resource.jpg'); ?>"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
        />
        <div class="card-body">
          <h4 class="card-title"><?php echo ucwords($resourceDetails[0]['title']); ?></h4>
          <div class="d-flex">
            <div class="avatar me-50">
              <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25"><?php echo lang('translation.by') ?></small>
              <small><a href="#" class="text-body"><?php echo lang('translation.Admin') ?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?php echo date('M d, Y', strtotime($resourceDetails[0]['time_submit'])); ?></small>
            </div>
          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span class="badge rounded-pill badge-light-danger me-50"><?php echo ucwords($resourceCategory[0]['title']) ?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-warning"><?php echo ucwords($resourceDetails[0]['caption']) ?></span>
            </a>
          </div>
            <?php
              $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">','<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL" placeholder="Embed URL">');
              $replaceData = array("<div>", "<br/>");
              echo html_entity_decode(str_replace($searchData,$replaceData,stripslashes($resourceDetails[0]['description'])), ENT_QUOTES); 
            ?>
         
          <hr class="my-2" />
          <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <div class="d-flex align-items-center me-1">
                <!-- <a href="#" class="me-50">
                  <i data-feather="message-square" class="font-medium-5 text-body align-middle"></i>
                </a> -->
                <a href="#">
                  <!--<div class="text-body align-middle">19.1K</div>-->
                </a>
              </div>
              <div class="d-flex align-items-center">
<!--                 <a href="#" class="me-50">
                  <i data-feather="bookmark" class="font-medium-5 text-body align-middle"></i>
                </a>
 -->                <a href="#">
                  <!--<div class="text-body align-middle">139</div>-->
                </a>
              </div>
            </div>
            <?php if(empty($resourceDetails[0]['file'])){ echo ""; }else{ ?>
            <div class="dropdown blog-detail-share">
              <a href="<?php echo base_url("gfa/download_resource/{$id}"); ?>" class="btn btn-primary" ls="<?= $id;  ?>" class="userActivity" >
            <?php echo lang('translation.Download') ?>
          </a>
            </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
 
    <div class="col-12 mt-1 get-comments-section" id="blogComment">
           <h6 class="section-label mt-25"><?php echo lang('translation.Comment') ?></h6>
  <?php $commentsData = $this->gfa_model->getCommentsResource($id); foreach($commentsData as $commentInfo){  ?>
  <div class="card">
    <div class="card-body">
      <div class="d-flex align-items-start">
        <div class="avatar me-75">
          <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" width="38" height="38" alt="Avatar" />
        </div>
        <div class="author-info">
          <h6 class="fw-bolder mb-25"><?php echo ucwords($this->gfa_model->getStartUpDetails($commentInfo['email'])[0]['Primary_Contact_Name']);  ?></h6>
          <p class="card-text"><?php  $timeDate = strtotime($commentInfo['date'])+ 3600; echo $this->gfa_model->timeAgo($timeDate); ?></p>
          <p class="card-text">
            <?php echo $commentInfo['comment'] ?>
          </p>
        </div>
      </div>
    </div>
  </div>
 <?php  } ?>
</div>
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
    <div class="col-12 mt-1">
  <h6 class="section-label mt-25"><?php echo lang('translation.Leave a Comment') ?></h6>
  <div class="card">
    <div class="card-body">
      <div class="row comment-form">
        <div class="col-12">
          <textarea class="form-control mb-2" rows="4" placeholder="<?php echo lang('translation.Comment') ?>" id="commentText"></textarea>
        </div>
        <div class="col-12">
          <button type="button" class="btn btn-primary sub" id="postComment"><?php echo lang('translation.Post Comment') ?></button>
        </div>
      </div>
      <input type="hidden" value="<?php echo $id ?>" class="resource_id" />
    </div>
  </div>
</div>
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->
<script>
$(document).ready(function(){
  $("#postComment").click(function(){
    var commentText = $("#commentText").val();
    var resource_id = $(".resource_id").val();
    if (commentText.trim() !== '') {
      $.ajax({
        url: '<?php echo base_url("gfa/commentresourcepro") ?>',
        method: 'POST',
        data: { commentText: commentText, resource_id: resource_id },
        beforeSend: function () {
              $(".sub").html("Soumission en cours...");
              $(".sub").prop("disabled", true);
            },
        success: function(response) {
          $(".get-comments-section").append(response);
          $("#commentText").val(''); // Clear the textarea after posting the comment 
          $(".sub").html("Publier un commentaire");
          $(".sub").prop("disabled", false);
        },
        error: function(xhr, status, error) {
          console.log('Error:', status, error);
        }
      });
    } else {
      alert('Veuillez entrer un commentaire.');
    }
  });
  
 
});
</script>

          </div>
        </div>
       
      </div>
    </div>