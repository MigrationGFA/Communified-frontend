<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Event Details</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/dashboard'); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/manage_event'); ?>">Manage Events</a>
                    </li>
                    <?php $checkYourStory = $this->gfa_model->getEventByTitle($ref_id); ?>
                    <li class="breadcrumb-item"><a href="#"><?php echo $checkYourStory[0]['title'] ?></a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        
        
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
    <div class="col-12">
      <div class="card">
        <img
          src="<?php echo base_url("uploads/files/{$checkYourStory[0]['picture']}")?>"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
        />
         <div class="card-body"  style=" overflow: auto;
  
    height:auto;">
          <h4 class="card-title"><?php echo $checkYourStory[0]['title'] ?></h4>
          <div class="d-flex">
              <?php           $getPhoto =  $this->gfa_model->getPhotoUploaded($checkYourStory[0]['email']);  
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }  ?>
            <div class="avatar me-50">
                
              <img src="<?php echo base_url("{$showPhoto}"); ?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="#" class="text-body"><?php echo $this->gfa_model->getStartUpDetails($checkYourStory[0]['email'])[0]['Primary_Contact_Name'];  ?></a></small>
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
            <a href="#">
            <span class="badge rounded-pill badge-light-success"><?php echo $checkYourStory[0]['event_type'] ?></span>
            </a>
          </div>
          <p class="card-text mb-2 " style="text-align: justify; text-justify: inter-word;">
          <?php 
          //$string = "The quick brown fox jumps over the lazy dog.";
        $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">');
        $replaceData = array("<div>", "<br/>");
          echo html_entity_decode(str_replace($searchData,$replaceData,stripslashes($this->gfa_model->getEventByRef($checkYourStory[0]['ref_id'])[0]['textdata'])), ENT_QUOTES); ?>
          </p>
          <hr class="mb-2" style="margin-top: 60px !important;"/>
          <input type="hidden" class="eventId" value="<?php echo $checkYourStory[0]['event_id']; ?>" >
         <input type="hidden" class="title" value="<?php echo $checkYourStory[0]['title']; ?>" >
          <?php 
          
          
          ?>
           <div style="margin-top: 60px !important;">
          
                  <?php
                  if($email== $checkYourStory[0]['email'] ){ echo ''; }else{

                   = (!empty($this->gfa_model->getWpEvent($email,$checkYourStory[0]['event_id'])[0]['status']))?$this->gfa_model->getWpEvent($email,$checkYourStory[0]['event_id'])[0]['status'] : "";
                  if($checkAttendanceStatus=='active'){  ?>
                  <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
                      <i data-feather="user-check" class="font-large-2"  style="color:#7A6FF1;"></i>
                 
                    </div>
                   <?php }elseif($checkAttendanceStatus =='pending'){  ?> 
                   <button type="button" disabled class="btn btn-primary">Enquiry Pending</button>
                   <?php }else{  ?>
                    <button type="button"  class="btn btn-primary attendEvent">Attend Event</button>
                    <a href="<?php echo base_url("gfa/speakers/{$checkYourStory[0]['event_id']}"); ?>"  class="btn btn-warning" >Host Profile</a>
        
                <?php     }} ?>
                 <?php   if($checkYourStory[0]['event_type']=='Paid'){ 
                    ?>
                    
                    <a href="<?php echo base_url("gfa/event_pay/{$checkYourStory[0]['event_id']}"); ?>"  class="btn btn-primary" >Pay</a>
        
                   <?php }else{ echo '';} ?>
            </div>
        </div>
      </div>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
   <script>
    $(function(){
        
        
         $(".attendEvent").click(function(){
         
         var  eventId = $('.eventId').val();
         var  title = $('.title').val();
          $.ajax({
     data:{eventId:eventId,title:title},
     type: "POST",
     url: "<?php echo base_url("gfa/attendEvent"); ?>",
     error:function() {$(".attendEvent").html('Error Request');},
	 beforeSend:function() {$(".attendEvent").html('Requesting...');$('.attendEvent').prop("disabled", true );},
      success: function(data) {
       
		 $(".attendEvent").html('You have been confirmed to attend, Glad to see you at the event'); 
	    $('.attendEvent').prop("disabled", true );
	   
	  
	
       }
      
    });
         
       }); 
       
      
        
    });
</script>
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
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
    <h6 class="section-label">Your Posted Events</h6>
    <div class="mt-75">
<?php 

$row =  $this->gfa_model->getEvent($email); foreach($row as $rowStoryArray){ ?>
      <div class="d-flex mb-2">
        <a href="<?php echo base_url()?>gfa/event/<?php echo $rowStoryArray['ref_id']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url()?>uploads/files/<?php echo $rowStoryArray['picture'] ?>"
            width="100"
            height="auto"
            alt="Add Story Picture "
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo base_url()?>gfa/event/<?php echo $rowStoryArray['ref_id']; ?>" class="text-body-heading"><?php echo $rowStoryArray['title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?> | <?php echo $rowStoryArray['status']; ?> </div>
          <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/event/<?php echo $rowStoryArray['ref_id']; ?>">View</a> | <a href="<?php echo base_url()?>gfa/edit_event/<?php echo $rowStoryArray['event_id']; ?>">Edit</a>  </div>
          <!-- | <a href="#">Delete</a>  -->
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