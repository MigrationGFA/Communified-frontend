<div class="content-wrapperc">

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Startup-Investor
      </h1>
      <ol class="breadcrumb">
        <li><button type="submit" class="btn btn-default pull-left closeBtnX" style="display:none;">X Close Form Displayed</button></li>
       
        <li class="active"></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
     <div class="row displayForm" style="display:none;">
        <div class="col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Start Ups CSV Upload</h3>
            </div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <form id="startUpsFile" action="" method="post" enctype="multipart/form-data">
              <div class="input-group input-group-sm">
                <input type="file" class="form-control" name="file[]">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Upload</button>
                    </span>
              </div>
              <span class="saveFile"></span>
              </form>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
             
              <!-- /.form group -->

            </div>
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
                  <input type="text" name="company_description" class="form-control" required placeholder="Enter Company Description">
                </div>
                <div class="form-group">
                  <input type="text" name="company_type" class="form-control" required placeholder="Enter Company Type">
                </div>
                <div class="form-group">
                  <input type="text" name="industry" class="form-control" required placeholder="Enter Industry">
                </div>
                <div class="form-group">
                  <input type="text" name="company_headquarters" class="form-control" required placeholder="Enter Company Headquaters Address">
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
            <div class="box-header">
              <h3 class="box-title">Investors CSV Form Upload</h3>
            </div>
            <div class="box-body">
              <!-- Date -->
              <form id="investorsFile" action="" method="post" enctype="multipart/form-data">
              <div class="input-group input-group-sm">
                <input type="file" class="form-control" name="file[]">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Upload</button>
                    </span>
              </div>
              <span class="saveFileInv"></span>
              </form>
              <!-- /.form group -->

             

            </div>
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
                <div class="form-group">
                  <input type="text" name="title" class="form-control" required  placeholder="Enter title">
                </div>
                <div class="form-group">
                  <input type="text" name="gender" class="form-control" required  placeholder="Enter gender">
                </div>
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
                 <div class="form-group">
                  <input type="text" name="invested_companies" class="form-control" required  placeholder="invested companies">
                </div>
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
                <div class="form-group">
                  <input type="text" name="additional_information" class="form-control"  placeholder="additional information">
                </div>
                <div class="form-group">
                  <input type="text" name="experience" class="form-control"  placeholder="experience">
                </div>
                <div class="form-group">
                  <input type="text" name="education" class="form-control"  placeholder="education">
                </div>
                <div class="form-group">
                  <input type="text" name="degree" class="form-control"  placeholder="degree">
                </div>
                <div class="form-group">
                  <input type="text" name="course" class="form-control"  placeholder="course">
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
                  <input type="text" name="instagram" class="form-control"  placeholder="Enter instagram Url">
                </div>
               
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
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="https://getfundedafrica.com/images/logo-1.png" alt="gfa">

              <h3 class="profile-username text-center"><?php //echo $profile_request[0]['last_name'].' '.$profile_request[0]['first_name']  ?> </h3>

              <p class="text-muted text-center"><?php //echo $ref_request[0]['industry'] ?></p>

              <ul class="list-group list-group-unbordered">
                
                <li class="list-group-itemx">
                   <button type="submit" class="btn btn-default pull-left displayBtnX">Upload Forms for(Investors & Startups)</button>
                   
                </li>
                <li class="list-group-itemx">
				
                </li>
                <li class="list-group-itemx">
                 <button type="submit" class="btn btn-default pull-left filterBtn">Filter Search</button>
                </li>
              </ul>
			
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">STARTUP PROFILE</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    
                        
                    <span class="description"></span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    
                    <!-- /.col -->
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Startup Name:</label>

                  <div class="col-sm-10">
                      <select class="form-control select2 fetchStartup searchStartup" style="width: 100%;">
                
                  
                  <?php	$row = $this->admin_model->getAllStartUps();  foreach($row as $rowArray){  ?> 
					
                    <option value="<?php echo $rowArray['id'] ?>"><?php echo $rowArray['company_name']  ?></option>
                  <?php  }  ?>
                  
                  
                </select>
                   
                  </div>
                </div>
                <div class="showStartUp">
                 <?php	$rowStartUp = $this->admin_model->getAllStartUpsLimit();  foreach($rowStartUp as $rowStartUprowArray){  ?> 
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Industry:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['industry'] ?> </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Website:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['website'] ?> </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Founder:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['name'] ?> </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Country:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['company_headquarters'] ?> </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Email:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['email'] ?> </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Phone number:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['company_phone'] ?> </span>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Funding Demand(USD):</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['funding'] ?> </span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Description:</label>

                  <div class="col-sm-10">
                    <span class="form-controlx"> <?php echo $rowStartUprowArray['company_description'] ?> </span>
                  </div>
                </div>
                <?php  }  ?>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
               
             <!-- <button type="submit" class="btn btn-info pull-right signBtn">Sign in</button> -->
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      
                      
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Filter  </h5>
       
      </div>
      <div class="modal-body" style="height: 250px; overflow-y: scroll;">
	  <div class="col-lg-12" id="showForm">
<div class="contact-form" >

       <form id="industryInfo" method="post" action="#" class="row payForm">
           <div class="col-12 col-md-12" >
<div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-search"></i>
                  </div>
                  <input type="text" class="form-control fetchIndustry">
                </div>
</div>
<div class="showIndustry">
  
<?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>	   
<div class=" col-12 col-md-12" style="margin-top:20px;">
 
<input type="checkbox" name='industry' value="<?php echo $rowArrayIndustry["industry"] ?>">  <?php  echo str_replace("?","",$rowArrayIndustry["industry"])  ?>
</div>

<?php }  ?>

</div>


<p class="ml-4 display1"></p>
<p class="ml-4 display2"></p>

</div>
</div>
      </div>
	  <div class="showError"></div>
      <div class="modal-footer" style="margin-top:20px;">
        <button type="button" class="btn btn-default modalClose" data-bs-dismiss="modal" >Close</button>
     
		<button type="submit" class="btn btn-info searchBtn" >Search</button>
      </div>
	  
	  </form>
    </div>
  </div>
</div>

</div>
</div>

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

                 
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      
      <div class="row">
        
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">INVESTORS</a></li>
              
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    
                        
                    <span class="description"></span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    
                    <!-- /.col -->
                    <div class="col-sm-12">
                      <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Contact Name</th>
                  <th>Position/Role</th>
                  <th>Investor Type</th>
                  <th>Industries</th>
				  <th>Investment Stage Focus</th>
                  <th>Min Cheque</th>
                  <th>Max Cheque</th>
                  <th>Website</th>
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
				$row = $this->admin_model->getAllInvestor();  foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                    <td><?php echo $rowArray['name'] ?></td>
                    <td><?php echo $rowArray['position'] ; ?> </td>
                    <td>
                    <?php echo $rowArray['investor_type']; ?>
                    </td>
                    
                    <td><?php echo $rowArray['industry_focus']; ?></td>
					
                    <td>
                    <?php echo $rowArray['investment_stage_focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['min_cheque']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['max_cheque']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['website']; ?>
                    </td>
                  </tr>
				
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  

                 
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
             
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->













