<?php  $this->admin_model = model('App\Models\AdminModel'); ?>

<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <!--<section class="content-header">-->
    <!--  <h1>-->
    <!--    Startup-Investor-->
    <!--  </h1>-->
    <!--  <ol class="breadcrumb">-->
    <!--    <li><button type="submit" class="btn btn-default pull-left closeBtnX" style="display:none;">X Close Form Displayed</button></li>-->
       
    <!--    <li class="active"></li>-->
    <!--  </ol>-->
    <!--</section>-->

    <!-- Main content -->
    <section class="content">
     <div class="row displayForm">
        <div class="col-md-12">

          <div class="box box-danger">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Start Ups CSV Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date dd/mm/yyyy -->
           

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Add Blog</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <form class="mt-2 pt-50 startUpForm" id="startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Category</label>
              
              <select id="country" name="category" class="select2 form-control form-select">
              <?php  //$row = $this->admin_model->getAllResourceCategory();  foreach($row as $rowArray){  ?>
                  <option value="Business & Entrepreneurship">Business & Entrepreneurship</option>
                            <option value="Startup Advice">Startup Advice</option>
                            <option value="Leadership & Management">Leadership & Management</option>
                            <option value="Marketing Strategies">Marketing Strategies</option>
                            <option value="Sales & Customer Service">Sales & Customer Service</option>
                            <option value="Business Growth & Scaling">Business Growth & Scaling</option>
                            <option value="Innovation & Trends">Innovation & Trends</option>
                        
                            <option value="Technology & Innovation">Technology & Innovation</option>
                            <option value="Tech News & Updates">Tech News & Updates</option>
                            <option value="Software & Tools">Software & Tools</option>
                            <option value="Emerging Technologies">Emerging Technologies (AI, Blockchain, etc.)</option>
                            <option value="IT & Infrastructure">IT & Infrastructure</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Cloud Computing">Cloud Computing</option>
                        
                            <option value="Finance & Investment">Finance & Investment</option>
                            <option value="Personal Finance Tips">Personal Finance Tips</option>
                            <option value="Stock Market & Trading">Stock Market & Trading</option>
                            <option value="Real Estate Investment">Real Estate Investment</option>
                            <option value="Financial Planning & Budgeting">Financial Planning & Budgeting</option>
                            <option value="Cryptocurrency & Digital Assets">Cryptocurrency & Digital Assets</option>
                <?php //}  ?>      
               </select>  
                 </div>
             <div class="col-12 col-sm-6 mb-1">
                <label class="form-label" for="accountFirstName">Title</label> 
                 <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="title"
                required
                placeholder=""
                value=""
                data-msg="Please enter first name"
              />
               </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">Source of Blog</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="source"
                placeholder=""
                value=""
                data-msg="Please enter first name"
              />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Blog Page</label>
              
              <select id="country" name="blog_url" class="select2 form-control form-select">
              <?php  //$row = $this->admin_model->getAllResourceCategory();  foreach($row as $rowArray){  ?>
                  <option value="Unleashified Website">Unleashified Website</option>
                  <option value="QuickBook Website">QuickBook Website</option>
                <?php //}  ?>      
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Upload File</label>
              <input type="file" class="form-control"  name="file[]"  />
            </div>

            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Status</label>
              
              <select id="country" name="status" class="select2 form-control form-select">
              
                  <option value="pending">Pending</option>
                  <option value="de-active">De-Active</option>
                  <option value="active">Active</option>
                  
               </select>  
                 </div>
                
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Description</label> 
              <div
                  
                  class="form-control"
                  id="editor"
                  rows="3"
                  style="height: 100px"
				  name="content"
                ></div>
            </div>
           
           
            
          </div>
        
              <!-- /.form group -->

              <!-- Color Picker -->
              
            </div>
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Submit</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
              
            </div>
            <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
        
        </div>
        <!-- /.col (left) -->
        
        <!-- /.col (right) -->
      </div>
      <div class="row">
       
        <!-- /.col -->
       
       <script>
      $(function(){
          
          
          
          
           $("#startUpForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
        
        // Get the content of the element with ID 'editor'
    var editorContent = $("#editor").html(); // or .text() if you want plain text
    
    // Append the editor content to the FormData object
    formData.append('content', editorContent);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/add_blog_pro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submiting...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	 
	   window.open("<?php echo base_url(); ?>admin/blog", "_self");

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->













