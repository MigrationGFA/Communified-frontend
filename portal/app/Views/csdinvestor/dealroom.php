
     <!-- BEGIN: Content-->
    <div class="app-content content file-manager-application">
        <?php  
        
        $loginkey = $this->gfa_model->getWpCred($email); ?>

       
       
           
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-area-wrapper container-xxl p-0">
          
        <div class="sidebar-left">
               
          <div class="sidebar"><div class="sidebar-file-manager">
  <div class="sidebar-inner">
    <!-- sidebar menu links starts -->
    <!-- add file button -->
    <div class="dropdown dropdown-actions">
      <button
        class="btn btn-primary add-file-btn text-center w-100"
        type="button"
        id="addNewFile"
        data-bs-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="true"
      >
        <span class="align-middle">Add Files</span>
      </button>
      <div class="dropdown-menu" aria-labelledby="addNewFile">
        <!--<div class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new-folder-modal">-->
        <!--  <div class="mb-0">-->
        <!--    <i data-feather="folder" class="me-25"></i>-->
        <!--    <span class="align-middle">Folder</span>-->
        <!--  </div>-->
        <!--</div>-->
        <div class="dropdown-item" data-bs-toggle="modal" data-bs-target="#new-folder-modal">
          <div class="mb-0" for="file-upload">
            <i data-feather="upload-cloud" class="me-25"></i>
            <span class="align-middle">Click to Upload File</span>
            <input type="file" id="file-upload" hidden />
          </div>
        </div>
        <div class="dropdown-item">
          <div for="folder-upload" class="mb-0 E-store">
            <i data-feather="shopping-bag" class="me-25"></i>
            <span class="align-middle">E-Store</span>
           
          </div>
        </div>
      </div>
    </div>
    <!-- add file button ends -->

    <!-- sidebar list items starts  -->
    <div class="sidebar-list">
      <!-- links for file manager sidebar -->
      <!--<div class="list-group">-->
      <!--  <div class="my-drive"></div>-->
      <!--  <a href="#" class="list-group-item list-group-item-action active">-->
      <!--    <i data-feather="star" class="me-50 font-medium-3"></i>-->
      <!--    <span class="align-middle">Important</span>-->
      <!--  </a>-->
      <!--  <a href="#" class="list-group-item list-group-item-action">-->
      <!--    <i data-feather="clock" class="me-50 font-medium-3"></i>-->
      <!--    <span class="align-middle">Recents</span>-->
      <!--  </a>-->
        <!--<a href="#" class="list-group-item list-group-item-action">-->
        <!--  <i data-feather="trash" class="me-50 font-medium-3"></i>-->
        <!--  <span class="align-middle">Deleted Files</span>-->
        <!--</a>-->
      <!--</div>-->
      <div class="list-group list-group-labels">
        <h6 class="section-label px-2 mb-1">Labels</h6>
        <a href="<?php echo base_url(); ?>gfa/dealroom_files/Documents" class="list-group-item list-group-item-action">
          <i data-feather="file-text" class="me-50 font-medium-3"></i>
          <span class="align-middle">Documents</span>
        </a>
        <a href="<?php echo base_url(); ?>gfa/dealroom_files/Images" class="list-group-item list-group-item-action">
          <i data-feather="image" class="me-50 font-medium-3"></i>
          <span class="align-middle">Images</span>
        </a>
        <a href="<?php echo base_url(); ?>gfa/dealroom_files/Videos" class="list-group-item list-group-item-action">
          <i data-feather="video" class="me-50 font-medium-3"></i>
          <span class="align-middle">Videos</span>
        </a>
        <a href="<?php echo base_url(); ?>gfa/dealroom_files/Audio" class="list-group-item list-group-item-action">
          <i data-feather="music" class="me-50 font-medium-3"></i>
          <span class="align-middle">Audio</span>
        </a>
        <!--<a href="#" class="list-group-item list-group-item-action">-->
        <!--  <i data-feather="layers" class="me-50 font-medium-3"></i>-->
        <!--  <span class="align-middle">Archives</span>-->
        <!--</a>-->
      </div>
      <!-- links for file manager sidebar ends -->

      <!-- storage status of file manager starts-->
      <!--<div class="storage-status mb-1 px-2">-->
      <!--  <h6 class="section-label mb-1">Storage Status</h6>-->
      <!--  <div class="d-flex align-items-center cursor-pointer">-->
      <!--    <i data-feather="server" class="font-large-1"></i>-->
      <!--    <div class="file-manager-progress ms-1">-->
      <!--      <span>68GB used of 100GB</span>-->
      <!--      <div class="progress progress-bar-primary my-50" style="height: 6px">-->
      <!--        <div-->
      <!--          class="progress-bar"-->
      <!--          role="progressbar"-->
      <!--          aria-valuenow="80"-->
      <!--          aria-valuemin="80"-->
      <!--          aria-valuemax="100"-->
      <!--          style="width: 80%"-->
      <!--        ></div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- storage status of file manager ends-->
    </div>
    <!-- side bar list items ends  -->
    <!-- sidebar menu links ends -->
  </div>
</div>

          </div>
        </div>
        
        
        
        
        <div class="content-right">
          <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body"><!-- overlay container -->
<div class="body-content-overlay"></div>

<!-- file manager app content starts -->
<div class="file-manager-main-content">
  <!-- search area start -->
  <div class="file-manager-content-header d-flex justify-content-between align-items-center">
    <div class="d-flex align-items-center">
      <div class="sidebar-toggle d-block d-xl-none float-start align-middle ms-1">
        <i data-feather="menu" class="font-medium-5"></i>
      </div>
      <div class="input-group input-group-merge shadow-none m-0 flex-grow-1">
        <span class="input-group-text border-0">
          <i data-feather="search"></i>
        </span>
        <input type="text" class="form-control files-filter border-0 bg-transparent" placeholder="Search" />
      </div>
    </div>
    <div class="d-flex align-items-center">
      <!--<div class="file-actions">-->
          
      <!--  <i data-feather="arrow-down-circle" class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"></i>-->
      <!--  <i data-feather="trash" class="font-medium-2 cursor-pointer d-sm-inline-block d-none me-50"></i>-->
      <!--  <i-->
      <!--    data-feather="alert-circle"-->
      <!--    class="font-medium-2 cursor-pointer d-sm-inline-block d-none"-->
      <!--    data-bs-toggle="modal"-->
      <!--    data-bs-target="#app-file-manager-info-sidebar"-->
      <!--  ></i>-->
      <!--  <div class="dropdown d-inline-block">-->
      <!--    <i-->
      <!--      class="font-medium-2 cursor-pointer"-->
      <!--      data-feather="more-vertical"-->
      <!--      role="button"-->
      <!--      id="fileActions"-->
      <!--      data-bs-toggle="dropdown"-->
      <!--      aria-haspopup="true"-->
      <!--      aria-expanded="false"-->
      <!--    >-->
      <!--    </i>-->
      <!--    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="fileActions">-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="move" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Open with</span>-->
      <!--      </a>-->
      <!--      <a-->
      <!--        class="dropdown-item d-sm-none d-block"-->
      <!--        href="#"-->
      <!--        data-bs-toggle="modal"-->
      <!--        data-bs-target="#app-file-manager-info-sidebar"-->
      <!--      >-->
      <!--        <i data-feather="alert-circle" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">More Options</span>-->
      <!--      </a>-->
      <!--      <a class="dropdown-item d-sm-none d-block" href="#">-->
      <!--        <i data-feather="trash" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Delete</span>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="plus" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Add shortcut</span>-->
      <!--      </a>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="folder-plus" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Move to</span>-->
      <!--      </a>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="star" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Add to starred</span>-->
      <!--      </a>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="droplet" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Change color</span>-->
      <!--      </a>-->
      <!--      <div class="dropdown-divider"></div>-->
      <!--      <a class="dropdown-item" href="#">-->
      <!--        <i data-feather="download" class="cursor-pointer me-50"></i>-->
      <!--        <span class="align-middle">Download</span>-->
      <!--      </a>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</div>-->
      <div class="btn-group view-toggle ms-50" role="group">
        <input
          type="radio"
          class="btn-check"
          name="view-btn-radio"
          data-view="grid"
          id="gridView"
          checked
          autocomplete="off"
        />
        <label class="btn btn-outline-primary p-50 btn-sm" for="gridView">
          <i data-feather="grid"></i>
        </label>
        <input type="radio" class="btn-check" name="view-btn-radio" data-view="list" id="listView" autocomplete="off" />
        <label class="btn btn-outline-primary p-50 btn-sm" for="listView">
          <i data-feather="list"></i>
        </label>
      </div>
    </div>
  </div>
  <!-- search area ends here -->
  <div class="file-manager-content-body">

    <!-- Folders Container Starts -->
    <div class="view-container">
      <h6 class="files-section-title mt-25 mb-75">Folders</h6>
      <div class="files-header">
        <h6 class="fw-bold mb-0">Filename</h6>
        <div>
          <h6 class="fw-bold file-item-size d-inline-block mb-0">Size</h6>
          <h6 class="fw-bold file-last-modified d-inline-block mb-0">Last modified</h6>
          <h6 class="fw-bold d-inline-block me-1 mb-0">Actions</h6>
        </div>
      </div>
      <div class="card file-manager-item folder level-up">
        <div class="card-img-top file-logo-wrapper">
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="arrow-up"></i>
          </div>
        </div>
        <div class="card-body ps-2 pt-0 pb-1">
          <div class="content-wrapper ">
            <p class="card-text file-name mb-0">...</p>
          </div>
        </div>
      </div>
       <div class="card file-manager-item folder linkProfile">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck1" />
          <label class="form-check-label" for="customCheck1"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Profile</p>
            <p class="card-text file-size mb-0"></p>
            
            <p class="card-text file-date"></p>
            
          </div>
          <small class="file-accessed text-muted"></small>
          <!--Last accessed: 21 hours ago-->
        </div>
      </div>
      <div class="card file-manager-item folder linkPitchDeck">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck1" />
          <label class="form-check-label" for="customCheck1"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Pitch Deck</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
          </div>
          <small class="file-accessed text-muted"></small>
          <!--Last accessed: 21 hours ago-->
        </div>
      </div>
      <div class="card file-manager-item folder linkFinance">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck2" />
          <label class="form-check-label" for="customCheck2"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Finance</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
            <!--05 Aug 2022-->
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      <div class="card file-manager-item folder linkLegal">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck3" />
          <label class="form-check-label" for="customCheck3"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Legal</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      <div class="card file-manager-item folder linkProposal">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck4" />
          <label class="form-check-label" for="customCheck4"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Proposal</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      <div class="card file-manager-item folder">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck5" />
          <label class="form-check-label" for="customCheck5"></label>
        </div>
        <div class="card-img-top file-logo-wrapper linkVideos">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Videos</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      <div class="card file-manager-item folder linkPartnership">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck6" />
          <label class="form-check-label" for="customCheck6"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <i data-feather="folder"></i>
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0">Partnership</p>
            <p class="card-text file-size mb-0"></p>
            <p class="card-text file-date"></p>
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      <div class="d-none flex-grow-1 align-items-center no-result mb-3">
        <i data-feather="alert-circle" class="me-50"></i>
        No Results
      </div>
    </div>
    <!-- /Folders Container Ends -->

    <!-- Files Container Starts -->
  <div class="view-container">
      <h6 class="files-section-title mt-2 mb-75">Recent Files</h6>
      <?php
                
                $row = $this->gfa_model->getRecentFileUploaded($email);
				foreach($row as $rowArray){  
				    
				    if($rowArray['Title'] !=''){
                
                ?> 
      
      <div class="card file-manager-item file">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="customCheck7" <?php if($rowArray['Status']=='approved'){ echo ''; }else{ echo 'disabled'; } ?> name="checkFile[]" value="<?php echo $rowArray['File_Id']; ?>" />
          <label class="form-check-label" for="customCheck7"></label>
        </div>
        <div class="card-img-top file-logo-wrapper">
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          <div class="d-flex align-items-center justify-content-center w-100">
            <?php  $file = explode('.', $rowArray['File']); 
            $fileExt = $file[1];
            ?>
            <?php        
            if($fileExt=='ppt' || $fileExt=='pptx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/powerpoint-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
         <?php         
            if($fileExt=='pdf'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/pdf.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        <?php         
            if($fileExt=='txt'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/txt.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='csv' || $fileExt=='xls' ||  $fileExt=='xlsx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/xls.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='png' || $fileExt=='jpeg' ||  $fileExt=='jpg' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/jpg.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
         <?php
       
            if($fileExt=='doc' ||  $fileExt=='docx' || $fileExt=='DOC' ||  $fileExt=='DOCX' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/word-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        <?php
            
            if($fileExt=='mp4' || $fileExt=='mpg' ||  $fileExt=='mov' || $fileExt=='mpe' || $fileExt=='avi' ||  $fileExt=='movie'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/video-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        <?php
       
            if($fileExt=='mp2' ||  $fileExt=='mp3' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/sound-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
          </div>
        </div>
        <div class="card-body">
          <div class="content-wrapper">
            <p class="card-text file-name mb-0"><?php echo $rowArray['Title']; ?>
            
            <br>
            
           <?php if($rowArray['Status']=='' || $rowArray['Status']=='pending' ){ ?>
            <span class="font-small-2 text-muted" style="color:Tomato;">■ Waiting for Approval</span>
                
             <?php }elseif($rowArray['Status']=='approved'){   ?>   
             
             <span class="font-small-2 text-muted" style="color:green;">&#10003; Approved</span>
               
               <?php }else{  ?>
            <span class="font-small-2 text-muted" style="color:red;">x Declined</span>   
            
            <?php  }  ?>
            
            </p>
            <p class="card-text file-size mb-0"><a href="#" class="deletebtn"><i data-feather="trash-2" class="me-50"></i><span style="display: none"><?php echo $rowArray['File_Id']; ?></span></a></p>
            <p class="card-text file-date"><?php echo date('d M Y',strtotime($rowArray['Time_Submit'])) ?></p>
          </div>
          <small class="file-accessed text-muted"></small>
        </div>
      </div>
      
      <?php }else{ echo '';}  }  ?>
      
      <div class="d-none flex-grow-1 align-items-center no-result mb-3">
        <i data-feather="alert-circle" class="me-50"></i>
        No Results
      </div>
    </div>
    <!-- /Files Container Ends -->
  </div>
</div>
<!-- file manager app content ends -->

<!-- File Info Sidebar Starts-->
<div class="modal modal-slide-in fade show" id="app-file-manager-info-sidebar">
  <div class="modal-dialog sidebar-lg">
    <div class="modal-content p-0">
      <div class="modal-header d-flex align-items-center justify-content-between mb-1 p-2">
        <h5 class="modal-title">menu.js</h5>
        <div>
          <i data-feather="trash" class="cursor-pointer me-50" data-bs-dismiss="modal"></i>
          <i data-feather="x" class="cursor-pointer" data-bs-dismiss="modal"></i>
        </div>
      </div>
      <div class="modal-body flex-grow-1 pb-sm-0 pb-1">
        <ul class="nav nav-tabs tabs-line" role="tablist">
          <li class="nav-item">
            <a
              class="nav-link active"
              data-bs-toggle="tab"
              href="#details-tab"
              role="tab"
              aria-controls="details-tab"
              aria-selected="true"
            >
              <i data-feather="file"></i>
              <span class="align-middle ms-25">Details</span>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              data-bs-toggle="tab"
              href="#activity-tab"
              role="tab"
              aria-controls="activity-tab"
              aria-selected="true"
            >
              <i data-feather="activity"></i>
              <span class="align-middle ms-25">Activity</span>
            </a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="details-tab" role="tabpanel" aria-labelledby="details-tab">
            <div class="d-flex flex-column justify-content-center align-items-center py-5">
              <img src="../../../app-assets/images/icons/js.png" alt="file-icon" height="64" />
              <p class="mb-0 mt-1">54kb</p>
            </div>
            <h6 class="file-manager-title my-2">Settings</h6>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>File Sharing</span>
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="sharing" />
                  <label class="form-check-label" for="sharing"></label>
                </div>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>Synchronization</span>
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" checked id="sync" />
                  <label class="form-check-label" for="sync"></label>
                </div>
              </li>
              <li class="d-flex justify-content-between align-items-center mb-1">
                <span>Backup</span>
                <div class="form-check form-switch">
                  <input type="checkbox" class="form-check-input" id="backup" />
                  <label class="form-check-label" for="backup"></label>
                </div>
              </li>
            </ul>
            <hr class="my-2" />
            <h6 class="file-manager-title my-2">Info</h6>
            <ul class="list-unstyled">
              <li class="d-flex justify-content-between align-items-center">
                <p>Type</p>
                <p class="fw-bold">JS</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Size</p>
                <p class="fw-bold">54kb</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Location</p>
                <p class="fw-bold">Files > Documents</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Owner</p>
                <p class="fw-bold">Sheldon Cooper</p>
              </li>
              <li class="d-flex justify-content-between align-items-center">
                <p>Modified</p>
                <p class="fw-bold">12th Aug, 2020</p>
              </li>

              <li class="d-flex justify-content-between align-items-center">
                <p>Created</p>
                <p class="fw-bold">01 Oct, 2019</p>
              </li>
            </ul>
          </div>
          <div class="tab-pane fade" id="activity-tab" role="tabpanel" aria-labelledby="activity-tab">
            <h6 class="file-manager-title my-2">Today</h6>
            <div class="d-flex align-items-center mb-2">
              <div class="avatar avatar-sm me-50">
                <img src="../../../app-assets/images/avatars/5-small.png" alt="avatar" width="28" />
              </div>
              <div class="more-info">
                <p class="mb-0">
                  <span class="fw-bold">Mae</span>
                  shared the file with
                  <span class="fw-bold">Howard</span>
                </p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm bg-light-primary me-50">
                <span class="avatar-content">SC</span>
              </div>
              <div class="more-info">
                <p class="mb-0">
                  <span class="fw-bold">Sheldon</span>
                  updated the file
                </p>
              </div>
            </div>
            <h6 class="file-manager-title mt-3 mb-2">Yesterday</h6>
            <div class="d-flex align-items-center mb-2">
              <div class="avatar avatar-sm bg-light-success me-50">
                <span class="avatar-content">LH</span>
              </div>
              <div class="more-info">
                <p class="mb-0">
                  <span class="fw-bold">Leonard</span>
                  renamed this file to
                  <span class="fw-bold">menu.js</span>
                </p>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <div class="avatar avatar-sm me-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="28" />
              </div>
              <div class="more-info">
                <p class="mb-0">
                  <span class="fw-bold">You</span>
                  shared this file with Leonard
                </p>
              </div>
            </div>
            <h6 class="file-manager-title mt-3 mb-2">3 days ago</h6>
            <div class="d-flex align-items-start">
              <div class="avatar avatar-sm me-50">
                <img src="../../../app-assets/images/portrait/small/avatar-s-1.jpg" alt="Avatar" width="28" />
              </div>
              <div class="more-info">
                <p class="mb-50">
                  <span class="fw-bold">You</span>
                  uploaded this file
                </p>
                <img src="../../../app-assets/images/icons/js.png" alt="Avatar" class="me-50" height="24" />
                <span class="fw-bold">app.js</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- File Info Sidebar Ends -->

<!-- File Dropdown Starts-->
<!--<div class="dropdown-menu dropdown-menu-end file-dropdown">-->
<!--  <a class="dropdown-item" href="#">-->
<!--    <i data-feather="eye" class="align-middle me-50"></i>-->
<!--    <span class="align-middle">Open</span>-->
<!--  </a>-->
<!--  <a class="dropdown-item" href="#">-->
<!--    <i data-feather="user-plus" class="align-middle me-50"></i>-->
<!--    <span class="align-middle">Share to Investor</span>-->
<!--  </a>-->

<!--  <div class="dropdown-divider"></div>-->
<!--  <a class="dropdown-item" href="#">-->
<!--    <i data-feather="edit" class="align-middle me-50"></i>-->
<!--    <span class="align-middle">Rename</span>-->
<!--  </a>-->

<!--  <div class="dropdown-divider"></div>-->
<!--  <a class="dropdown-item" href="#">-->
<!--    <i data-feather="trash" class="align-middle me-50"></i>-->
<!--    <span class="align-middle">Delete</span>-->
<!--  </a>-->
 
<!--</div>-->
<!-- /File Dropdown Ends -->
<?php    ?>
<!-- Create New Folder Modal Starts-->
<div class="modal fade" id="new-folder-modal">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">New File</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="startUpForm" method="post" action="" enctype="multipart/form-data">
      <div class="modal-body">
          
        <div class="col-12 col-sm-12 mb-1">
              <label class="form-label" for="country">Select Folder</label>
              <select name="File_Type" id="country" class="select2 form-select fileTypex">


               
               
                <option value="Profile">Profile</option>
                
<option value="Finance">Finance</option>
<option value="Legal_Doc">Legal Document</option>
<option value="Pitch_Deck">Pitch Deck</option>
<option value="Proposal">Proposal</option>
<option value="Partnership">Partnership</option>
<option value="Videos">Videos</option>

              </select>
            </div> 
            
            <div class="col-12 col-sm-12 mb-1">
              <label class="form-label" for="accountFirstName">Title of File</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="Title"
                placeholder=""
                required
                value=""
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-12 mb-1">
              <label class="form-label" for="accountLastName">File</label>
              <input
                type="file"
                class="form-control"
                id="<?php  if($this->gfa_model->countProfileDocs($email) != 2){ echo 'FilUploader'; }else { echo '';  } ?>"
                name="file[]"
                placeholder="File"
               
                
              />
            </div>
            <span class="showFileType"></span>
            
            <div class="col-12 col-sm-12 mb-1">
              <label class="form-label" for="accountAddress">Description of File Uploaded  </label>
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Counter"
                  style="height: 100px"
				  name="File_Desc"
                ></textarea>
            </div>
      </div>
      
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary me-1 saveBtn UploadFile" >Upload</button>
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
        <span class="displayAction"></span>
      </div>
       </form>
    </div>
  </div>
</div>
<!-- /Create New Folder Modal Ends -->

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->
 
 <script>
      
      $(function(){
          
           $(".file-manager-item").on('click','.deletebtn',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this file?');
    if(choice === true) {
  $(this).closest('.file-manager-item').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/deleteFile",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    $(".showDataDel").val();
    
    
    
    
    }
      
    });
    }
  
    
  return false;
});
          
      $("#FilUploader").change(function () {
        var fileExtension = ['pdf','mp4','pptx','ppt'];
        if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {
           $(".showFileType").html("Only formats are allowed : "+fileExtension.join(', '));
           $('.UploadFile').prop('disabled',true);
           
        }else{
           $(".showFileType").html("");
           $('.UploadFile').prop('disabled',false);
        }
    });
          
        $(".fileTypex").change(function() {
          
          var folderType = $(this).val();
          
          if(folderType=='Finance'){
              
            $(".showFileType").html('FILE:png,jpg,pdf,doc|docx,xls|xlsx,ppt|pptx,mp3,mp4');  
          }else if(folderType=='Legal_Doc'){
             $(".showFileType").html('FILE:png,jpg,pdf,doc|docx,xls|xlsx,ppt|pptx,mp3,mp4'); 
          }
          else if(folderType=='Profile'){
             $(".showFileType").html(''); 
          }
          else if(folderType=='Pitch_Deck'){
             $(".showFileType").html('FILE:png,jpg,pdf,doc|docx,xls|xlsx,ppt|pptx,mp3,mp4'); 
          }else if(folderType=='Proposal'){
             $(".showFileType").html('FILE:png,jpg,pdf,doc|docx,xls|xlsx,ppt|pptx,mp3,mp4'); 
          }else if(folderType=='Partnership'){
             $(".showFileType").html('FILE:png,jpg,pdf,doc|docx,xls|xlsx,ppt|pptx,mp3,mp4'); 
          }else if(folderType=='Videos'){
             $(".showFileType").html('FILE: mp4,3gp,mov'); 
          }else{
              
            $('.UploadFile').prop('disabled',true);    
          }
            
        });
        
        $(".E-store").click(function() {
              
          window.open("https://estore.getfundedafrica.com/", "_self");
          });
          
          $(".linkProfile").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Profile", "_self");
          });
          
          $(".linkFinance").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Finance", "_self");
          });
          
          $(".linkProposal").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Proposal", "_self");
          });
          
          $(".linkPitchDeck").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Pitch_Deck", "_self");
          });
          
          $(".linkVideos").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Videos", "_self");
          });
          
          $(".linkLegal").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Legal_Doc", "_self");
          });
          $(".linkPartnership").click(function() {
              
          window.open("<?php echo base_url(); ?>gfa/dealroom_folder/Partnership", "_self");
          });
          
          $('input[type="checkbox"]').click(function() {
                            //  e.preventDefault();
                            
                             
      if($(this).prop("checked") == true) {                       
    
         $(".sendBtn").show();
    
      }
    
    	
                             
        });
        
        
         $(".refreshBtn").click(function(e) {
             window.open("https://getfundedafrica.com/portal/gfa/dealroom", "_self");
         });
         
         
         $(".sendBtn").click(function() {
    //---------------^---------------
   // e.preventDefault();
	
     var  id = $('input[name="checkFile[]"]').serialize();
      
   $.ajax({
       
 
     data:id,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/sendToInvestor",
	 error:function() {$(".sendBtn").html('Error loading Data');},
	 beforeSend:function() {$(".sendBtn").html('Sending data...');},
     success: function(data) {
        
		$(".sendBtn").html('Message Sent');
		$(".sendAction").html(data);
	    
		}
		

      
    });

 }); 
                         
                         
          $(".addFile").click(function(){
            $(".displayForm").toggle();
              
          });
          
       
        $(".startUpForm").submit(function(e) {
         
        
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/dealroom_file_upload",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".UploadFile").html('Uploading...');$('.UploadFile').prop('disabled',true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayAction").html(data);
		$('.UploadFile').prop('disabled',false);
		$('.UploadFile').html('Upload');
	
		//}
      }
    });
    return false;

 }); 
          
      });
  </script>
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 <?php	
            //     $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
            //     $rowArray = $this->admin_model->getAllStartUpNById($startupArray[0]['id']); 
            //   $row = $this->admin_model->MatchInvestorDefaultLimit($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['CountryHQ']);  
				?>
    <!-- BEGIN: Content-->
   
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   