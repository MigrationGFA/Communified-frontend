<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Add Course</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/Lesson">All Lesson</a>-->
                    <!--</li>-->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_course">Manage Course</a> 
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
<!--      <div class="alert alert-info" role="alert">-->
<!--              <h4 class="alert-heading">Note</h4>-->
<!--              <div class="alert-body">-->
                  
               
<!--<p>Criteria for approving submitted events below:</p>-->
<!--<ul>-->
<!--<li>You must not promote tribal, ethnic or religious divisiveness at any level</li>-->
<!--<li>You must not be seen to contravene applicable laws of the country of origin</li>-->
<!--<li>You must have updated your GFA profile to at least 50% completion.</li>-->
<!--</ul>-->
<!--              </div>-->
<!--            </div>-->
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="course_category" placeholder="Course Category">
                     
                <?php $getCourseCategoryData = $this->gfa_model->getAllCourseCategory(); foreach($getCourseCategoryData as $getCourseCategory){  ?>
                  <option value="<?php echo $getCourseCategory['id'] ?>"><?php echo $getCourseCategory['title'] ?></option>
                  <?php }  ?>
                    </select>
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
              <!--<label>Lesson Title </label>-->
                <div class="mb-2">
                  <input type="text" name="coursetitle" class="form-control" required placeholder="Course Title" />
                </div>
              </div>
             
              <div class="col-sm-6 col-12">
              <!--<label>Lesson Title </label>-->
                <div class="mb-2">
                  <input type="date" name="start_date" class="form-control"  placeholder="Start date" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="date" class="form-control" name="end_date" placeholder="End date" />
                </div>
              </div>
              <hr class="mb-2" />
              
            
              <div class="col-sm-6 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">
                                </label> 
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"></span>
                                <input type="number" id="first-name-icon" class="form-control form-control" value="0" name="duration"
                                    placeholder="Duration Value"  />
                                    
                                    <select class="form-select" name="duration_time" >
                     
                 <option value="mins">Minute(s)</option>
                  <option value="hours">Hours(s)</option>
                  <option value="days">Days(s)</option>
                  <option value="weeks">Week(s)</option>
                  
                    </select>

                                
                            </div>
                        </div>
                    </div>
              
               
              
              <div class="col-sm-6 col-12">
                  <label>Course Picture</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control"  placeholder="Lesson Cover Picture" />
                </div>
              </div>
             <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="description" placeholder="Short Description" />
                </div>
              </div>
               <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="media" placeholder="Media/Video link" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="lmslink" placeholder="Course Url/Link" />
                </div>
              </div>
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <div class="editor eventDoc textData" style="height:250px;">
                Full Description 
                  </div>
                </div>
              </div>       
              
    </div>
              
    <input type="hidden" class="ref_id" name="ref_id" value="<?php echo time(); ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog --> 
    
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
   
    
    
    <script>
      $(function(){
          
          
          $(".fetchSection").change(function(){
              var thisVal = $(this).val();
              $.ajax({
     data:{thisVal:thisVal},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/fetchSection",
      success: function(data) {
        
	  $(".getSection").html(data);  
	  
      }
    });
              
          }).change();
          
        //   $(".getSection").change(function(){
              
        //   });
          
          
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
        var textData = $('.textData').html();
        var ref_id = $('.ref_id').val();
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/addcoursepostpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Uploading Course...'); $(".EventBtn").prop('disabled', false);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);
     window.open("<?php echo base_url(); ?>gfa/manage_course", "_self");



      }
    });

    $.ajax({
     data:{textData:textData,ref_id:ref_id},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/lessonpostpro_ext",
      success: function(data) {
        
	  $(".displayActionx").html(data);  
	  
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
    </div>