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
              <h3 class="box-title">Update Resource</h3>
            </div>
            <?php $getResourceData = $this->admin_model->getResourceById($id); ?>
            <div class="box-body">
              <!-- Color Picker -->
              <form class="mt-2 pt-50 startUpForm" id="startUpForm" method="post" action="" enctype="multipart/form-data">
                                <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Resource Category</label>
              
              <select id="country" name="category_id" class="select2 form-control form-select">
                  <option value="<?php echo $getResourceData[0]['category_id'] ?>"><?php echo ucwords($this->admin_model->getResourceCategoryById($getResourceData[0]['category_id'])[0]['title']) ?></option>
              <?php  $row = $this->admin_model->getAllResourceCategory();  foreach($row as $rowArray){  ?>
                  <option value="<?php echo $rowArray['id'] ?>"><?php echo ucwords($rowArray['title']) ?></option>
                <?php }  ?>      
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
                value="<?php echo $getResourceData[0]['title'] ?>"
                data-msg="Please enter first name"
              />
               </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">Caption</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="caption"
                required
                placeholder=""
                value="<?php echo $getResourceData[0]['caption'] ?>"
                data-msg="Please enter first name"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Upload File</label>
              <input type="file" class="form-control"  name="file[]"  />
            </div>
            <input type="hidden" name="getfile" value="<?php echo $getResourceData[0]['file'] ?>" />
           
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Status</label>
              
              <select id="country" name="status" class="select2 form-control form-select">
                    <option value="<?php echo $getResourceData[0]['status'] ?>"><?php echo ucwords($getResourceData[0]['status']) ?></option>
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
				  name="description"
                ><?php echo $getResourceData[0]['description'] ?></div>
            </div>
           <input type="hidden" name="id" value="<?php echo $id ?>" />
            
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
    formData.append('editorContent', editorContent);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/update_resource_pro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submiting...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	 
	   window.open("<?php echo base_url(); ?>admin/resource", "_self");

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->













