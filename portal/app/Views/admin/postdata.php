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
        <div class="col-md-6">

          <div class="box box-danger">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Start Ups CSV Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date dd/mm/yyyy -->
            <!--  <form id="startUpsFile" action="" method="post" enctype="multipart/form-data">-->
            <!--  <div class="input-group input-group-sm">-->
            <!--    <input type="file" class="form-control" name="file[]">-->
            <!--        <span class="input-group-btn">-->
            <!--          <button type="submit" class="btn btn-info btn-flat">Upload</button>-->
            <!--        </span>-->
            <!--  </div>-->
            <!--  <span class="saveFile"></span>-->
            <!--  </form>-->
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
             
              <!-- /.form group -->

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Start-ups Form</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
              <form role="form" id="startUpsForm" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" required placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                  <input type="text" name="company_name" class="form-control" required placeholder="Enter Company name">
                </div>
                <div class="form-group">
                  <input type="text" name="company_description" class="form-control" required placeholder="Investment Stage">
                </div>
                <div class="form-group">
                  <input type="text" name="company_type" class="form-control" required placeholder="Enter Company Type">
                </div>
                <div class="form-group">
                  <input type="text" name="industry" class="form-control" required placeholder="Enter Industry">
                </div>
                <div class="form-group">
                  <input type="text" name="company_headquarters" class="form-control" required placeholder="Enter Country Headquaters ">
                </div>
                <div class="form-group">
                  <input type="date" name="date_founded" class="form-control" required placeholder="Enter Date Founded">
                </div>
                <div class="form-group">
                  <input type="text" name="number_of_employees" class="form-control" required placeholder="Enter Number of Employees">
                </div>
                <div class="form-group">
                  <input type="text" name="website" class="form-control"  placeholder="Enter website">
                </div>
                <div class="form-group">
                  <input type="text" name="company_phone" class="form-control" required placeholder="Enter Company Phone">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" required placeholder="Enter Company Email">
                </div>
                <div class="form-group">
                  <input type="text" name="facebook" class="form-control"  placeholder="Enter Facebook Url">
                </div>
                <div class="form-group">
                  <input type="text" name="linkedin" class="form-control"  placeholder="Enter linkedin url">
                </div>
                <div class="form-group">
                  <input type="text" name="twitter" class="form-control"  placeholder="Enter twitter Url">
                </div>
                <div class="form-group">
                  <input type="text" name="funding" class="form-control" required placeholder="Enter Funding Amount">
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
             <span class="saveStartupsForm"></span>
            </form>
              <!-- /.form group -->

              <!-- Color Picker -->
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-6">
          <div class="box box-primary">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Investors CSV Form Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date -->
            <!--  <form id="investorsFile" action="" method="post" enctype="multipart/form-data">-->
            <!--  <div class="input-group input-group-sm">-->
            <!--    <input type="file" class="form-control" name="file[]">-->
            <!--        <span class="input-group-btn">-->
            <!--          <button type="submit" class="btn btn-info btn-flat">Upload</button>-->
            <!--        </span>-->
            <!--  </div>-->
            <!--  <span class="saveFileInv"></span>-->
            <!--  </form>-->
              <!-- /.form group -->

             

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- iCheck -->
          <div class="box box-success">
            <div class="box-header">
              <h3 class="box-title">Investors Form</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- checkbox -->
             <form role="form" id="investorsForm" action="" method="post">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" name="name" class="form-control"  required  placeholder="Enter Full Name">
                </div>
                <div class="form-group">
                  <input type="text" name="company_name" class="form-control" required   placeholder="Enter Company name">
                </div>
                <div class="form-group">
                  <input type="text" name="preference" class="form-control" required placeholder="Enter preference">
                </div>
                <!--<div class="form-group">-->
                  <input type="hidden" name="title" class="form-control"  placeholder="Enter title">
                <!--</div>-->
                <!--<div class="form-group">-->
                  <input type="hidden" name="gender" class="form-control"   placeholder="Enter gender">
                <!--</div>-->
                <div class="form-group">
                  <input type="text" name="position" class="form-control"   placeholder="Enter position">
                </div>
                <div class="form-group">                  <input type="date" name="date_founded" class="form-control" required  placeholder="Enter Date Founded">
                </div>
                <div class="form-group">
                  <input type="text" name="investor_type" class="form-control" required  placeholder="Enter investor types">
                </div>
                <div class="form-group">
                  <input type="text" name="website" class="form-control" required  placholder="Enter website">
                </div>
                <div class="form-group">
                  <input type="text" name="phone" class="form-control" required  placeholder="Enter Phone">
                </div>
                <div class="form-group">
                  <input type="email" name="email" class="form-control" required  placeholder="Enter Email">
                </div>
                
                <div class="form-group">
                  <input type="text" name="investment_stage_focus" class="form-control" required  placeholder="investment stage focus">
                </div>
                <div class="form-group">
                <label></label>
                <select class="form-control select2 fetchCountryByRegion" name="regional_focus_industries[]" multiple="multiple" required data-placeholder="Regional focus industries" style="width: 100%;">
                  <?php $row = $this->admin_model->getAllAfricaRegions();  foreach($row as $getAllAfricaRegions){  ?>
                  <option><?php echo $getAllAfricaRegions['region'] ?></option>
                  <?php }  ?>
                </select>
              </div>                <div class="form-group">
                  <select class="form-control select2 showCountry" name="country[]" multiple="multiple" required  data-placeholder="country" style="width: 100%;">
                  
                </select>
                </div>
                <!--<div class="form-group">-->
                <!--  <input type="text" name="investment_stage_focus" class="form-control" required placeholder="investment stage focus">-->
                <!--</div>-->
                <div class="form-group">
                  <input type="text" name="address" class="form-control" required  placeholder="address">
                </div>
                <div class="form-group">
                  <input type="text" name="industry_focus" class="form-control" required  placeholder="industry focus">
                </div>
                 <!--<div class="form-group">-->
                  <input type="hidden" name="invested_companies" class="form-control"   placeholder="invested companies">
                <!--</div>-->
                <div class="form-group">
                  <input type="text" name="stage_invested_in_africa" class="form-control" required  placeholder="stage invested in africa">
                </div>
                <div class="form-group">
                  <input type="text" name="stage" class="form-control" required  placeholder="stage">
                </div>
                <div class="form-group">
                  <input type="text" name="investment_level" class="form-control" required  placeholder="investment level">
                </div>
                <div class="form-group">
                  <input type="text" name="min_cheque" class="form-control" required placeholder="min cheque">
                </div>
                <div class="form-group">
                  <input type="text" name="max_cheque" class="form-control" required  placeholder="max cheque">
                </div>
                <!--<div class="form-group">-->
                  <input type="text" name="additional_information" class="form-control"  placeholder="additional information">
                <!--</div>-->
                <!--<div class="form-group">-->
                  <input type="hidden" name="experience" class="form-control"  placeholder="experience">
                <!--</div>-->
                <!--<div class="form-group">-->
                  <input type="hidden" name="education" class="form-control"  placeholder="education">
                <!--</div>-->
                <!--<div class="form-group">-->
                  <input type="hidden" name="degree" class="form-control"  placeholder="degree">
                <!--</div>-->
                <!--<div class="form-group">-->
                  <input type="hidden" name="course" class="form-control"  placeholder="course">
                <!--</div>-->
                <div class="form-group">
                  <input type="text" name="facebook" class="form-control"  placeholder="Enter Facebook Url">
                </div>
                <div class="form-group">
                  <input type="text" name="linkedin" class="form-control"  placeholder="Enter linkedin url">
                </div>
                <div class="form-group">
                  <input type="text" name="twitter" class="form-control"  placeholder="Enter twitter Url">
                </div>
                <!--<div class="form-group">-->
                <!--  <input type="text" name="instagram" class="form-control"  placeholder="Enter instagram Url">-->
                <!--</div>-->
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
             <span class="saveInvestorsForm"></span>
            </form>

              <!-- radio -->
             
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>
      <div class="row">
        <div class="col-md-3">
		<?php 
				// 	$getSub = $this->admin_model->getSub($id);
				// 	$ref_request = $this->admin_model->getStartUp($getSub[0]['email']); 
				// 	$profile_request = $this->admin_model->getProfile($getSub[0]['email']);  
				// 	$getFile = $this->admin_model->getFile($getSub[0]['email']);
				// 	$getFund = $this->admin_model->getFund($getSub[0]['email']);
				// 	$getBusiness = $this->admin_model->getBusiness($getSub[0]['email']);
		
		?>
          <!-- Profile Image -->
          
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
       
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->

<script>
                     $(function(){
                         
                         //Investors Form Upload

 $("#investorsForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    var investorsForm = $('#investorsForm').serialize();
      
    $.ajax({
     data:investorsForm,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/investor_form",
	 error:function() {$(".saveInvestorsForm").html('Error')},
	 beforeSend:function() {$(".saveInvestorsForm").html('Submitting Form...')},
      success: function(data) {
        
		//if(data==1){
		$(".saveInvestorsForm").html(data);
        //$("#investorsForm").val('');
      }
    });
    //return false;

  });
                         
                         //Fetch County by Region 
                         
                         $(".fetchCountryByRegion").change(function(){
                             
                             var id = $(this).val();
                             
                             $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchCountryByRegion",
	 error:function() {$(".showCountry").html('Error loading Data');},
	 beforeSend:function() {$(".showCountry").html('loading data...');},
     success: function(data) {
        
		
		$(".showCountry").html(data);
	
		}
      
    });
    
    
                             
                         }).change();
                         
                         //Start Ups File Upload 
                          $("#startUpsFile").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/startup_upload",
	 error:function() {$(".saveFile").html('Error')},
	 beforeSend:function() {$(".saveFile").html('Uploading...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".saveFile").html(data);

      }
    });
    return false;

  });
  
                        // Investors File Upload 
                         $("#investorsFile").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/investor_upload",
	 error:function() {$(".saveFileInv").html('Error')},
	 beforeSend:function() {$(".saveFileInv").html('Uploading...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".saveFileInv").html(data);

      }
    });
    return false;

  });
  
  
                        //StartUps Form Upload
                        
                         $("#startUpsForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    var startUpsInfo = $('#startUpsForm').serialize();
      
    $.ajax({
     data:startUpsInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/startup_form",
	 error:function() {$(".saveStartupsForm").html('Error')},
	 beforeSend:function() {$(".saveStartupsForm").html('Submitting Form...')},
      success: function(data) {
        
		//if(data==1){
		$(".saveStartupsForm").html(data);

      }
    });
    return false;

 });


  
                            
                         $(".displayBtnX").click(function(e){
                            e.preventDefault();
                           	$('.displayForm').show();
                           	$('.closeBtnX').show();
                            $(this).hide();
                         });
                         $(".closeBtnX").click(function(e){
                            e.preventDefault();
                            $('.displayForm').hide();
                           	$('.displayBtnX').show();
                           	 $(this).hide();
                            
                         });
                        
                         
                         $(".filterBtn").click(function(e){
                            e.preventDefault();
                           	$('.modal').modal();
                            
                         });
                         
                         
                          $("#industryInfo").submit(function(e){
                             e.preventDefault();
                             var industryInfo = $('#industryInfo').serialize();
                             
                             $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchStartups",
	 error:function() {$(".display1").html('Error loading Data');},
	 beforeSend:function() {$(".display1").html('loading data...');},
     success: function(data) {
        
		
		$(".searchStartup").html(data);
	    $(".display1").html("");
		}
      
    });
    
     $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestors",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
    		 $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchStartupsData",
	 error:function() {$(".showStartUp").html('Error loading Data');},
	 beforeSend:function() {$(".showStartUp").html('loading data...');},
     success: function(data) {
        
		
		$(".showStartUp").html(data);
	
		}
      
    });
                             
                         }).change();
                         
                         
                         
                         $(".fetchStartup").change(function(){
                             
                             var id = $(this).val();
                             
                             $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchStartup",
	 error:function() {$(".showStartUp").html('Error loading Data');},
	 beforeSend:function() {$(".showStartUp").html('loading data...');},
     success: function(data) {
        
		
		$(".showStartUp").html(data);
	
		}
      
    });
    
     $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestor",
	 error:function() {$(".showInvestor").html('Error loading Data');},
	 beforeSend:function() {$(".showInvestor").html('loading data...');},
     success: function(data) {
        
		
		$(".showInvestor").html(data);
	
		}
      
    });
                             
                         }).change();
                         
                          $(".fetchIndustry").keyup(function(){
                             
                             var industry = $(this).val();
                             
                             $.ajax({
     data:{industry:industry},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchIndustry",
	 error:function() {$(".showIndustry").html('Error loading Data');},
	 beforeSend:function() {$(".showIndustry").html('loading data...');},
     success: function(data) {
        
		
		$(".showIndustry").html(data);
	
		}
      
    });
                             
                         }).keyup();
                         
                       $(".modalClose").click(function(){
	
	$('.modal').modal('hide');
	
	});  	
	
	//Initialize Select2 Elements
    $(".select2").select2();

                     });
                     
                  </script>











