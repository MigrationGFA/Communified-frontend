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
                <h2 class="content-header-title float-start mb-0">Add Report</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/report">Weekly Report  <?php 
                    
                    // 
                    // echo $this->gfa_model->getStartupWeeklyRefByEmail($email)[0]['ref']; 
                    
                    ?>
                    
                    </a>
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
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
        <div class="card-body">
          <form action="#" id="postJobs" class="form storyForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="total_sale" step="0.001" class="form-control" required placeholder="Total Sales" />
                </div>
              </div>
             
              
            
            
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="total_exp" step="0.001" class="form-control" required  placeholder="Total Expenses" />
                </div>
              </div>
             
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" class="form-control" name="new_hiring" placeholder="New Hired Employee this week" />
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="employ_term" class="form-control"  placeholder="Employee Exits this week" />
                </div>
              </div>
             <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
             
              
              <select id="country" name="tax_paid" class="form-select">
                    <option>Do you pay Tax?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                    
                  
                  </select>
            </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" step="0.001" class="form-control" name="tax" placeholder="Tax Paid" />
                </div>
              </div>
              
              <!--<div class="col-sm-6 col-12">-->
              <!--  <div class="mb-2">-->
              <!--    <input type="file" name="file[]" class="form-control" required placeholder="Company Logo" />-->
              <!--  </div>-->
              <!--</div>-->
               
             <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time">Weekly Report Start Date</label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="start_date"
            placeholder="YYYY-MM-DD HH:MM"
          />
        </div>
         <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time">Weekly Report End Date</label>
          <input
            type="text"
            id="fp-date-time"
            name="end_date"
            class="form-control flatpickr-date-time"
            placeholder="YYYY-MM-DD HH:MM"
          />
          
          
        </div>
        <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
             
              
              <select id="country" name="csr_active" class="form-select">
                    <option value=''>Select the CRS you participated ?</option>
                    <option value='Our Inhouse CSR Program'>Our Inhouse CSR Program</option>
                <?php    $row =  $this->gfa_model->getAllCsr(); foreach($row as $rowStoryArray){  ?>
                    <option value="<?php echo $rowStoryArray['csr_id']  ?>"><?php echo $rowStoryArray['title']  ?></option>
                 <?php }  ?>   
                    
                  
                  </select>
            </div>
             <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="amount" placeholder="Amount Spent for Participating" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                  <label>Picture </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Picture" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="videourl" placeholder="Video Url (youtube, vimeo e.t.c" />
                </div>
              </div>
         <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Community Social Resposibility Participation Details"
                  style="height: 100px"
				  name="csr_active_details"
                ></textarea>
             </div>   
            </div>
             <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Other weekly information"
                  style="height: 100px"
				  name="other_info"
                ></textarea>
             </div>   
            </div>
            
            
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary storyBtn">Post Report</button><span class="displayAction"></span>
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
     url: "<?php echo base_url(); ?>gfa/postreport",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submiting Report...'); $(".storyBtn").prop('disabled', true);},
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
    <h6 class="section-label">Your Posted Jobs</h6>
    <div class="mt-75">
<?php 

$row = $this->gfa_model->getAllJobByEmail($email);  foreach($row as $rowStoryArray){  

    $getPhoto =  $this->gfa_model->getLogoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }

?>

    
      <div class="d-flex mb-2">
        <a href="#<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>" class="me-2">
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
          <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/job_details/<?php echo $rowStoryArray['id']; ?>">View</a> | <a href="<?php echo base_url()?>gfa/edit_job/<?php echo $rowStoryArray['id']; ?>">Edit</a> | <a href="">Delete</a>  </div>
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