 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Jobs</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Startup</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php //echo $story_title ?></a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        
        <?php //$checkYourStory = $this->gfa_model->getJobsByTitle($story_title); ?>
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-list-wrapper">
  <!-- Blog List Items -->
  <div class="row">
      
      <?php 
$row =  $this->gfa_model->getJobsLimit10(); foreach($row as $rowStoryArray){ ?>
    <div class="col-md-6 col-12">
      <div class="card">
        
        <div class="card-body">
          <h4 class="card-title">
            <a href="<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>" class="blog-title-truncate text-body-heading">
                <?php echo $rowStoryArray['job_title'] ?>
                </a>
          </h4>
          <div class="d-flex">
            <div class="avatar me-50">
                <?php           $getPhoto =  $this->gfa_model->getPhotoUploaded($rowStoryArray['email']);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-logo.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }  ?>
              <img src="<?php echo base_url().$showPhoto; ?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">in</small>
              <small><a href="#" class="text-body"><?php echo $rowStoryArray['location'];  ?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?></small>
            </div>
          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span class="badge rounded-pill badge-light-info me-50"><?php echo $rowStoryArray['category'];  ?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-primary"><?php echo $rowStoryArray['job_type'];  ?></span>
            </a>
          </div>
          <p class="card-text blog-content-truncate">
            <?php echo substr($rowStoryArray['company'],0,30) ?>...
          </p>
          <hr />
          <div class="d-flex justify-content-between align-items-center">
            <a href="page-blog-detail.html#blogComment">
              <div class="d-flex align-items-center">
                <!--<i data-feather="message-square" class="font-medium-1 text-body me-50"></i>-->
                <!--<span class="text-body fw-bold">76 Comments</span>-->
              </div>
            </a>
            <a href="<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>" class="fw-bold">Job Details</a>
          </div>
        </div>
      </div>
    </div>

  <?php }  ?>  

    

    
  </div>
  <!--/ Blog List Items -->

  <!-- Pagination -->
  <!--<div class="row">-->
  <!--  <div class="col-12">-->
  <!--    <nav aria-label="Page navigation">-->
  <!--      <ul class="pagination justify-content-center mt-2">-->
  <!--        <li class="page-item prev-item"><a class="page-link" href="#"></a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">1</a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">2</a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">3</a></li>-->
  <!--        <li class="page-item active" aria-current="page"><a class="page-link" href="#">4</a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">5</a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">6</a></li>-->
  <!--        <li class="page-item"><a class="page-link" href="#">7</a></li>-->
  <!--        <li class="page-item next-item"><a class="page-link" href="#"></a></li>-->
  <!--      </ul>-->
  <!--    </nav>-->
  <!--  </div>-->
  <!--</div>-->
  <!--/ Pagination -->
</div>
<!--/ Blog Detail -->

          </div>
        </div>
        <div class="sidebar-detached sidebar-right">
          <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
  <!-- Search bar -->
  <div class="blog-search">
    <div class="input-group input-group-merge">
      <input type="text" class="form-control" placeholder="Search here" />
      <span class="input-group-text cursor-pointer">
        <i data-feather="search"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
   <div class="blog-recent-posts mt-3">
    <h6 class="section-label">Posted Jobs</h6>
    <div class="mt-75">
<?php 

$row1 =  $this->gfa_model->getJobsLimit10(); foreach($row1 as $rowStoryArray){ 

$getPhoto1 =  $this->gfa_model->getPhotoUploaded($rowStoryArray['email']); 

 if(empty($getPhoto1)){
          $showPhoto1 = "assets/images/uploads/default-logo.jpg";
      }else{
         
         $showPhoto1 = "uploads/onboarding/".$getPhoto1[0]['Photo_name']; 
          
      } 
?>

      <div class="d-flex mb-2">
        <a href="<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url().$showPhoto1; ?>"
            width="100"
            height="70"
            alt="Company logo"
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>" class="text-body-heading"><?php echo $rowStoryArray['job_title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?></div>
         
        </div>
      </div>
      
      <?php  }   ?>
      
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  
  <!--/ Categories -->
</div>

          </div>
        </div>
      </div>
    </div>