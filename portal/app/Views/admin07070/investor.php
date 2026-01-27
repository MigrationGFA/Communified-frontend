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
        <!--<button class="btn btn-default pull-right filterBtn">Filter Search</button>-->
     <div class="row displayForm">
        
         
       
        <!-- /.col (left) -->
        <div class="col-md-8" >
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
                  <th>Industries</th>
                  
				  <th>Investment Stage Focus</th>
				  <th>Regional_focus</th>
                  <th>Min Cheque</th>
                  <th>Max Cheque</th>
                  <th>Startup Available</th>
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
				$row = $this->admin_model->getAllInvestorN();  foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                   
                    <td><?php echo $rowArray['Contact_Name'] ; ?><br>
                    <?php echo $rowArray['Investor_Name'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['Industry_Focus']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['Investment_Stage_Focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Regional_focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Min_Cheque']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Max_Cheque']; ?>
                    </td>
                    <td>
                    
                    <a href="#" class="btn checkStartup">View(<?php echo $this->admin_model->countMatchStartupDefault($rowArray['Industry_Focus'],$rowArray['Investment_Stage_Focus'],$rowArray['Implementation_Stage_Focus'],$this->admin_model->getCountryByRegion($rowArray['Regional_focus'])[0]['country'],$rowArray['Min_Cheque']); ?>)
                    <span style="display: none;"><?php echo $rowArray['Investor_ID']; ?></span>
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
         <div class="col-md-4">
          <div class="box box-primary">
            

             

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
         
          <!-- iCheck -->
          <div class="box box-success">
           
            <div class="box-body">
              <!-- Minimal style -->

              <!-- checkbox -->
            <div class="margin pull-right">
                <div class="btn-group">
                  <button type="button" class="btn btn-default industryBtn">Industry / Type</button>
                  
                </div>
                <!--<div class="btn-group">-->
                <!--  <button type="button" class="btn btn-info stageBtn">Type</button>-->
                  
                  
                <!--</div>-->
                <div class="btn-group">
                  <button type="button" class="btn btn-danger stageBtn">Region/Implementation/Funding   </button>
                  
                </div>
                <!--<div class="btn-group">-->
                <!--  <button type="button" class="btn btn-success regionBtn">Region</button>-->
                  
                <!--</div>-->
                
              </div>
              
              <div class="col-lg-12" id="showForm ">
<div class="contact-form " >
    
    
    <div class="industryShow" style="display: none;">
       <form id="industryInfo" method="post" action="#" class="row payForm">
           <div class="col-12 col-md-12" >
               
               <h4>INDUSTRY</h4>
<!--<div class="input-group">-->
<!--                  <div class="input-group-addon">-->
<!--                    <i class="fa fa-search"></i>-->
<!--                  </div>-->
<!--                  <input type="text" class="form-control fetchIndustry">-->
<!--                </div>-->
<!--</div>-->
<!--<div class="showIndustryN">-->
<div class="form-group">   
   

<div class=" col-12 col-md-12" style="margin-top:5px;">
 
<select class="form-control select2 fetchIndustry" name="industry[]" multiple="multiple"  data-placeholder="Industry" style="width: 100%;">
                  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo $rowArrayIndustry["industry"] ?></option>
                  <?php }  ?>
                </select> 

</div>



</div>

 <br><br>
<h4>INVESTMENT STAGE</h4>
                <div class="form-group">
  
<?php	$rowIndustry = $this->admin_model->getInvestmentStage();  foreach($rowIndustry as $rowArrayIndustry){  ?>	   
<div class=" col-12 col-md-12" style="margin-top:5px;">
 
<input type="checkbox" name='Stages[]' value="<?php echo $rowArrayIndustry["Stages"] ?>">  <?php  echo str_replace("?","",$rowArrayIndustry["Stages"])  ?>
</div>

<?php }  ?>

</div>


<p class="ml-4 display1"></p>
<p class="ml-4 display2"></p>


</div>
</div>
      </div>
	  <div class="showError"></div>
   
	  
	  </form>
 </div>
<div class="stageShow" style="display: none;">
   
    <form id="industryInfoV" method="post" action="#" class="row payForm">
       
        
           <div class="col-12 col-md-12" >
                <h4>REGION</h4>
             <div class="form-group">
               <select class="form-control select2 fetchCountryByRegion" name="regional_focus_industries[]" multiple="multiple" required data-placeholder="Regional focus industries" style="width: 100%;">
                  <?php $row = $this->admin_model->getAllAfricaRegions();  foreach($row as $getAllAfricaRegions){  ?>
                  <option><?php echo $getAllAfricaRegions['region'] ?></option>
                  <?php }  ?>
                </select> 
                
                  </div>  
           <div class="form-group">
                  <select class="form-control select2 showCountryN fetchCountry" name="country[]" multiple="multiple" required  data-placeholder="country" style="width: 100%;">
                  <?php  $row = $this->admin_model->getCountryByRegionExt();  foreach($row as $rowArray){   
					
                    echo '<option value="'.$rowArray['country'].'"> '.$rowArray['country'].'  </option>';
                    }
		    
		 ?>
                </select>
                </div> 
                
                <br>
                <h4>IMPLEMENTATION STAGE</h4>
                <div class="form-group">
                    
                   <select class="form-control implementStage" name="implementStage"   data-placeholder="country" style="width: 100%;">
                       
                       implementationStage()
                   <?php $rowIS = $this->admin_model->implementationStage();  foreach($rowIS as $implementStage){  ?>
                  <option value="<?php echo $implementStage['Stages'] ?>"><?php echo $implementStage['Stages'] ?></option>
                  <?php }  ?>
                </select>
                  
             
                </div> 
                
                <br>
             
                <h4>AMOUNT SOUGHT</h4>
                <div class="form-group">
                  <input type="number" name="Min_Cheque" class="form-control Min_Cheque"   placeholder="Amount Sought">
                  <!--<input type="number" name="Max_Cheque" class="form-control Max_Cheque" required  placeholder="MAX AMOUNT">-->
                
                </div>
                
                
                
                
                
</div>




<p class="ml-4 display1"></p>
<p class="ml-4 display2"></p>

</div>
</div>
      </div>
	  <div class="showError"></div>
      
	  
	  </form>
	  
	    <form id="industryInfo" method="post" action="#" class="row payForm">
           <div class="col-12 col-md-12" >




<p class="ml-4 display1"></p>
<p class="ml-4 display2"></p>

</div>
</div>
      </div>
	  <div class="showError"></div>
   
	  
	  </form>
</div>
<div class="stageShow" style="display: none;">
     
 </div>  
  
 
 
    
    
    </div>
    
    
  </div>
  
  
            </div>
            <!-- /.box-body -->
             
          </div>
          <!-- /.box -->
        </div>
      </div>
      <div class="row">
          <div class="col-md-8"></div>
        <div class="col-md-4">
		
          <!-- Profile Image -->
          
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
          
        </div>
        <!-- /.col -->
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">MATCHED STARTUP LIST  </h5>
       
      </div>
      <div class="modal-body" style="height: 300px; overflow-y: scroll;">
	  <div class="col-lg-12" id="showForm">

        </div>
      </div>
	  <div class="showError"></div>
      <div class="modal-footer" style="margin-top:20px;">
        <button type="button" class="btn btn-default modalClose" data-bs-dismiss="modal" >Close</button>
     
		<!--<button type="submit" class="btn btn-info searchBtn" >Search</button>-->
      </div>
	  
	 
  </div>
</div>

</div>
       </div>
       
      
     
      <!-- /.row -->

    </section>
    
    <script>
    
    $(function(){
        
        // $(".regionBtn").click(function(e){
        //     e.preventDefault();
        //     $(".regionShow").show();
        //     $(".industryShow").hide();
        //     $(".stageShow").hide();
        // });
        
        $("a.checkStartup").click(function(e){
                            e.preventDefault();
                            var id = $(this).find('span').text();
                            // $('#showForm').text(clickedValue);
                            $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/matchStartup",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$("#showForm").html(data);
// 		$(".display2").html("");
	
		}
		

      
    });
                           	$('.modal').modal();
                            
                         });
        
        $(".industryBtn").click(function(e){
            e.preventDefault();
            $(".industryShow").show();
             
             $(".stageShow").hide();
            
        });
        
        $(".stageBtn").click(function(e){
            e.preventDefault();
            $(".industryShow").hide();
            
             $(".stageShow").show();
            
        });
        
        // $('.fetchIndustry').change(function() {
        
         $('.fetchIndustry').change(function() {
                            //  e.preventDefault();
                             var industryInfo = $('#industryInfo').serialize();
                             
                          
    
     $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsN",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
    
    
    	
                             
                         });
                         
                         
       $('input[type="checkbox"]').click(function() {
                            //  e.preventDefault();
                             var industryInfo = $('#industryInfo').serialize();
                             
      if($(this).prop("checked") == true) {                       
    
     $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsNS",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
      }
    
    	
                             
                         });
    //     $('input[type="checkbox"]').click(function() {
       
            
            
    //       if($(this).prop("checked") == true) {
                
    //           $(".industryShow").hide();
            
    //          $(".stageShow").show();   
    //         }
        
            
            
        
    // });
        
        
    });
</script>



    
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
  
  //,.Max_Cheque
  
  $(".Min_Cheque").keyup(function(){
                             
                           
                             var industryInfo = $('#industryInfoV').serialize();
                             
                             
    	 $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsNNN",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
                             
                         });
                         
//------------------Implementation Stage-------------------------

$(".implementStage").change(function(){
                             
                           
                             var industryInfo = $('#industryInfoV').serialize();
                             
                             
    	 $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsNNIS",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
                             
                         });

  
  //Fetch Investor By Country
  
   $(".fetchCountry").change(function(){
                             
                           
                             var industryInfo = $('#industryInfoV').serialize();
                             
                             
    	 $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsNN",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
                             
                         });
                         
                         //Fetch County by Region 
                         
                         $(".fetchCountryByRegion").change(function(){
                             
                             var id = $(this).val();
                             var industryInfo = $('#industryInfoV').serialize();
                             
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
    	 $.ajax({
     data:industryInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/fetchInvestorsNN",
	 error:function() {$(".display2").html('Error loading Data');},
	 beforeSend:function() {$(".display2").html('loading data...');},
     success: function(data) {
        
		$(".showInvestor").html(data);
		$(".display2").html("");
	
		}
		

      
    });
    
                             
                         });
                         
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
    









