<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
<?php
        $stateRd = $StartupArray[0]['State'];
        $thisSkill = $skillArray[0]['profile_extra'];
        // echo $this->gfa_model->displayTotalCourseMember($thisSkill,$stateRd);
        $EmailByCourse = $this->gfa_model->displayCourseGroupMemberJoinLimitOffset($thisSkill, $stateRd, $limit, $offset);
       //$EmailByCourseL = $this->gfa_model->displayCourseGroupMemberJoin($thisSkill, $stateRd);
        
        
        // $sumMembers = 0;
        // foreach($EmailByCourse as $courseArray){
        //  $sumMembers += $this->gfa_model->displayTotalCourseMember($courseArray['email'],$stateRd);   
        // }
      
     ?>   
<?php  $count = 1;      foreach($EmailByCourse as $courseArray){
         //$groupDetails = $this->gfa_model->displayCourseGroupMember($courseArray['email'],$stateRd);
         
          $getPhoto  =  $this->gfa_model->getPhotoUploaded($courseArray['Contact_Email']);   
             if(empty($getPhoto)){
          $showPhoto = "public/assets-new/img/avatars/default-img.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
         ?>
  <div class="col-xl-4 col-lg-6 col-md-6">
    <div class="card">

   
      <div class="card-body text-center">
        <!--<div class="dropdown btn-pinned">-->
        <!--  <button type="button" class="btn dropdown-toggle hide-arrow p-0" data-bs-toggle="dropdown" aria-expanded="false"><i class="ti ti-dots-vertical text-muted"></i></button>-->
        <!--  <ul class="dropdown-menu dropdown-menu-end">-->
        <!--    <li><a class="dropdown-item" href="javascript:void(0);">Share connection</a></li>-->
        <!--    <li><a class="dropdown-item" href="javascript:void(0);">Block connection</a></li>-->
        <!--    <li>-->
        <!--      <hr class="dropdown-divider">-->
        <!--    </li>-->
        <!--    <li><a class="dropdown-item text-danger" href="javascript:void(0);">Delete</a></li>-->
        <!--  </ul>-->
        <!--</div>-->
        <div class="mx-auto my-3">
          <img src="<?php echo base_url("{$showPhoto}") ?>" alt="Avatar Image" class="rounded-circle w-px-100" />
        </div>
        <h4 class="mb-1 card-title"><?php echo ucwords($courseArray['Primary_Contact_Name']) ?></h4>
     <?php    if($checkHead ==''){ echo ""; }else{  ?>
        <span class="pb-1"><?php echo $courseArray['Contact_Email'] ?> </span>
         <?php }  ?>
    
        <div class="d-flex align-items-center justify-content-center my-3 gap-2">
          <a href="javascript:;" class="me-1"><span class="badge bg-label-secondary"><?php echo $courseArray['Gender'] ?></span></a>
          <a href="javascript:;"><span class="badge bg-label-warning"><?php echo $courseArray['city'] ?></span></a>
        </div>

        <!--<div class="d-flex align-items-center justify-content-around my-3 py-1">-->
        <!--  <div>-->
        <!--    <h4 class="mb-0">18</h4>-->
        <!--    <span>Projects</span>-->
        <!--  </div>-->
        <!--  <div>-->
        <!--    <h4 class="mb-0">834</h4>-->
        <!--    <span>Tasks</span>-->
        <!--  </div>-->
        <!--  <div>-->
        <!--    <h4 class="mb-0">129</h4>-->
        <!--    <span>Connections</span>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="d-flex align-items-center justify-content-center">
          <a href="<?php echo base_url("gfa/profile_details/{$courseArray['STUP_ID']}") ?>" class="btn btn-primary d-flex align-items-center me-3"><i class="ti-xs me-1 ti ti-user-check me-1"></i>View Profile</a>
     		<a href="<?php echo base_url("chat/index/{$courseArray['STUP_ID']}") ?>" class="btn btn-light d-flex align-items-center me-3"><i class="ti-xs me-1 ti ti-link me-1"></i>Chat</a>
          <!-- <a href="javascript:;" class="btn btn-label-secondary btn-icon"><i class="ti ti-mail ti-sm"></i></a> -->
        </div>
      </div>
      
    </div>
  </div>
   <?php  }   ?>