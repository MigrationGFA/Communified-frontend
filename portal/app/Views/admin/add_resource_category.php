<?php $admin_model = new \App\Models\AdminModel(); ?>

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
              <h3 class="box-title">Add Resource Category</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <form class="mt-2 pt-50 startUpForm" id="startUpForm" method="post" action="" enctype="multipart/form-data">
                                
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
                
              />
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
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/add_resource_category_pro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submiting...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 //$(".cohortBtn").prop('disabled', true);
		 window.open("<?php echo base_url(); ?>admin/resource_category", "_self");

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->













