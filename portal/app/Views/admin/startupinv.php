<div class="content-wrapperC">

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
        <button class="btn btn-default pull-right filterBtn">Filter Search</button>
     <div class="row displayForm">
         
        <div class="col-md-4">
            
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
              <h3 class="box-title">Start-ups</h3>
            </div>
            <div class="box-body">
              <!-- Color Picker -->
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
              <!-- /.form group -->

              <!-- Color Picker -->
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
        <!-- /.col (left) -->
        <div class="col-md-8">
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
              <h3 class="box-title">Investors</h3>
            </div>
            <div class="box-body">
              <!-- Minimal style -->

              <!-- checkbox -->
           
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
                  <th>Region</th>
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
                    <?php //echo $rowArray['website']; ?>
                    </td>
                  </tr>
				
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
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











