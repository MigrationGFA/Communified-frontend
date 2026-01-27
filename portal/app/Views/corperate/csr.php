 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">CSR Detail</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Corperate Social Responsibility</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo $story_title ?></a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        
        <?php $checkYourStory = $this->gfa_model->getCsrByTitle($story_title); ?>
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
      <div class="card">
        <img
          src="<?php echo base_url()?>uploads/files/<?php echo $checkYourStory[0]['picture'] ?>"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
        />
        <div class="card-body">
          <h4 class="card-title"><?php echo $checkYourStory[0]['title'] ?></h4>
          <div class="d-flex">
              <?php           $getPhoto =  $this->gfa_model->getPhotoUploaded($checkYourStory[0]['email']);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }  ?>
            <div class="avatar me-50">
                
              <img src="<?php echo base_url().$showPhoto; ?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="#" class="text-body"><?php echo $this->gfa_model->getCorperateDetails($checkYourStory[0]['email'])[0]['Corporate_Name'];  ?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?php echo date('M d Y', strtotime($checkYourStory[0]['time_submit'])) ?></small>
            </div>
          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span class="badge rounded-pill badge-light-danger me-50"><?php echo $checkYourStory[0]['venue']  ?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-warning"><?php echo $checkYourStory[0]['start_date']  ?> - <?php echo $checkYourStory[0]['end_date']  ?></span>
            </a>
            <!--<a href="#">-->
            <!--  <span class="badge rounded-pill badge-light-success">$<?php echo $checkYourStory[0]['amount']   ?></span>-->
            <!--</a>-->
          </div>
          <p class="card-text mb-2">
              <input type="hidden" class="eventId" value="<?php echo $checkYourStory[0]['csr_id']; ?>" >
           <?php echo $checkYourStory[0]['csr'] ?>
          </p>
          
          <?php $email = $this->encrypt->decode($this->session->userdata('email')) ; 
                if($email == $checkYourStory[0]['email']){ echo ''; }else{ 
           ?>
           <hr class="mb-2" />
          <div class=" col-lg-4 col-md-6 d-grid">         
<?php if(!empty($this->admin_model->applyCSRByEmail($email,$checkYourStory[0]['csr_id']))){  ?> 
           <button type="button" disabled class="btn btn-primary attendEvents">Already Participated</button>
           <?php }else{  ?>
             <button type="button"  class="btn btn-primary attendEvent">Participate in CSR</button>
           <?php } ?> 
         </div>
         
         <?php  }  ?>
        </div>
      </div>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
    <script>
      $(function(){
   $(".attendEvent").click(function(){
         
         var  eventId = $('.eventId').val();
         
          $.ajax({
     data:{eventId:eventId},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/attendCSR",
     error:function() {$(".attendEvent").html('Error Request');},
	 beforeSend:function() {$(".attendEvent").html('Requesting...');$('.attendEvent').prop("disabled", true );},
      success: function(data) {
       
		 $(".attendEvent").html('Participated'); 
	    $('.attendEvent').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
                 
      });  
    </script>
    <!--/ Leave a Blog Comment -->
  </div>
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
    <h6 class="section-label">Your Posted CSR</h6>
    <div class="mt-75">
<?php 
$email = $this->encrypt->decode($this->session->userdata('email')) ;
$row =  $this->gfa_model->getCsr($email); foreach($row as $rowStoryArray){ ?>
      <div class="d-flex mb-2">
        <a href="<?php echo base_url()?>gfa/csr/<?php echo $rowStoryArray['title']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url()?>uploads/files/<?php echo $rowStoryArray['picture'] ?>"
            width="100"
            height="70"
            alt="Add CSR Picture "
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo base_url()?>gfa/csr/<?php echo $rowStoryArray['title']; ?>" class="text-body-heading"><?php echo $rowStoryArray['title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?> | <?php echo $rowStoryArray['status']; ?> </div>
          <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/csr/<?php echo $rowStoryArray['title']; ?>">View</a> | <a href="<?php echo base_url()?>gfa/edit_csr/<?php echo $rowStoryArray['csr_id']; ?>">Edit</a> | <a href="">Delete</a>  </div>
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