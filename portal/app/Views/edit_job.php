 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Edit Job</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Startup</a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-detached content-left">
            
            <?php 
            
            
            $row = $this->gfa_model->getAllJobByEmail($email); 
             $jobInfo = $this->gfa_model->getAllJobByEmailAndId($email,$id); 
            ?>
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
        <div class="card-body">
          <form action="#" id="postJobs" class="form storyForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="job_title" class="form-control" required placeholder="Job title" value='<?php echo $jobInfo[0]['job_title'] ?>' />
                </div>
              </div>
             <input type="hidden" name="id" class="form-control"  placeholder="Job title" value='<?php echo $id ?>' />
               <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
             
              
              <select id="country" name="category" class="form-select">
                  
                  
            <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
            
                    <option value="<?php echo $jobInfo[0]['category'] ?>"><?php echo $jobInfo[0]['category'] ?></option>
            
                  <option value="<?php echo $rowArrayIndustry["industry"] ?>"><?php echo $rowArrayIndustry["industry"] ?></option>
                  <?php }  ?>
                  
                  </select>
            </div>
            
            <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
             
              
              <select id="country" name="job_type" class="form-select">
                  <option value="<?php echo $jobInfo[0]['job_type'] ?>"><?php echo $jobInfo[0]['job_type'] ?></option>
                    <option value="Full-Time">Full-Time</option>
                    <option value="Freelance">Freelance</option>
                    <option value="Internship">Internship</option>
                    <option value="Part-Time">Part-Time</option>
                    <option value="Temporary">Temporary</option>
                  
                  </select>
            </div>
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="location" class="form-control" required placeholder="location" value="<?php echo $jobInfo[0]['location'] ?>" />
                </div>
              </div>
             
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="job_req" placeholder="Qualification" value="<?php echo $jobInfo[0]['job_req'] ?>" />
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="rem" class="form-control"  placeholder="Remunation" value="<?php echo $jobInfo[0]['rem'] ?>" />
                </div>
              </div>
             
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="date" class="form-control" name="time_end" placeholder="Time to end" value="<?php echo $jobInfo[0]['time_end'] ?>" />
                </div>
              </div>
              
              <!--<div class="col-sm-6 col-12">-->
              <!--  <div class="mb-2">-->
              <!--    <input type="file" name="file[]" class="form-control" required placeholder="Company Logo" />-->
              <!--  </div>-->
              <!--</div>-->
             
             <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Company Details"
                  style="height: 100px"
				  name="company"
				  
                ><?php echo $jobInfo[0]['company'] ?></textarea>
             </div>   
            </div>
            <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Job Method of Appplication"
                  style="height: 100px"
				  name="job_method"
                ><?php echo $jobInfo[0]['job_method'] ?></textarea>
             </div>   
            </div>
            <div class="col-sm-6 col-12">
             
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Job Summary"
                  style="height: 100px"
				  name="job_summary"
                ><?php echo $jobInfo[0]['job_summary'] ?></textarea>
            </div>
            <div class="col-12 col-sm-6 mb-1">
             
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Duties & Responsibility"
                  style="height: 100px"
				  name="duties_resp"
                ><?php echo $jobInfo[0]['duties_resp'] ?></textarea>
            </div>
            
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary storyBtn">Post Job</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    
    <script>
      $(function(){
          
          
          
          
           $(".storyForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/savejobpro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submiting Job...'); $(".storyBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".storyBtn").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>

    <!-- Blog Comment -->
   
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
    <h6 class="section-label">Posted Jobs</h6>
    <div class="mt-75">
<?php 
foreach($row as $rowStoryArray){  

    $getPhoto =  $this->gfa_model->getLogoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }

?>

    
      <div class="d-flex mb-2">
        <a href="#<?php echo base_url()?>gfa/hire/<?php echo $rowStoryArray['id']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url().$showPhoto; ?>"
            width="100"
            height="70"
            alt="Company logo"
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="#" class="text-body-heading"><?php echo $rowStoryArray['job_title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?></div>
          <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/hire/<?php echo $rowStoryArray['id']; ?>">Applicants</a> | <a href="<?php echo base_url()?>gfa/edit_job/<?php echo $rowStoryArray['id']; ?>">Edit</a> | <a href="">Delete</a>  </div>
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