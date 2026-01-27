
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">

  <div class="row match-height">
<!--   The investor name & title -->

<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Search Startups</h4>

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">

  
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"></h4>
        </div>
        <div class="card-body">
          <form id="fetchStartups" action="" method="post" enctype="multipart/form-data"> 
          <div class="row">
          
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop">Industry</label>
                
                <select class="getIndustry select2 form-select" name="industry[]" id="select2-multiple" multiple>

                
			  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo $rowArrayIndustry["industry"] ?></option>
                  <?php }  ?>
              </select>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="basicInput">Current Stage</label>
                <select id="country" name="current_stage" class="form-select current_stage">
                <option value=""></option>  
             <?php	$rowIndustry = $this->admin_model->getInvestmentStage();  foreach($rowIndustry as $rowArrayIndustry){  ?>
              <option value="<?php echo $rowArrayIndustry["Stages"] ?>"><?php echo $rowArrayIndustry["Stages"] ?></option>
                  <?php }  ?>
                  
                  </select>
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">Implementation Stage</label>
                <select id="country" name="Implementation_stage" class="form-select Implementation_stage">
                <option value=""></option>  
             <?php $rowIS = $this->admin_model->implementationStage();  foreach($rowIS as $implementStage){  ?>
                  <option value="<?php echo $implementStage['Stages'] ?>"><?php echo $implementStage['Stages'] ?></option>
                  <?php }  ?>
                 </select>  
              </div>
            </div>
            
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Country</label>
                <select id="country" name="startup_country" class="form-select startup_country">
                            <option value=""></option>            
                            <option value="Algeria">Algeria</option>
                            <option value="Angola">Angola</option>
                            <option value="Benin">Benin</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Cape Verde">Cape Verde</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Congo, the Democratic Republic of the">Congo, the Democratic Republic of the</option>
                            <option value="Dijibouti">Dijibouti</option>
                            <option value="Egypt">Egypt</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Cote d'Ivoire (Ivory Coast)">Cote d'Ivoire (Ivory Coast)</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Mali">Mali</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mayotte">Mayotte</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="Reunion">Reunion</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saint Helena">Saint Helena</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Swaziland">Swaziland</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Togo">Togo</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Western Sahara">Western Sahara</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
              </select>

                
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Investment size (USD)</label>
                <input type="number" class="form-control fund_to_raise" id="accountAddress" name="fund_to_raise" placeholder="Funding to raise" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];  ?>" />

                
              </div>
            </div>
            
             <span class="display"></span>
          </div>
          </form>
        </div>
             
      </div>
    </div>
  </div>
  </script>



    
<script>
                  $(function(){
                      
                      
                    $(".fund_to_raise").keyup(function(){
                          
                        
                          // var industryInfox = $('#fetchstartups').serialize();
         var startup_country = $('.startup_country').val();  
         var Implementation_stage = $('.Implementation_stage').val();
         var industry = $('.getIndustry').val();
         var current_stage = $('.current_stage').val();
         var fund_to_raise = $('.fund_to_raise').val();
                     
                           
     $.ajax({
   data:{startup_country:startup_country,Implementation_stage:Implementation_stage,industry:industry,current_stage:current_stage,fund_to_raise:fund_to_raise},
   type: "POST",
   url: "<?php echo base_url(); ?>gfa/fetchstartups",
 error:function() {$(".display").html('Error loading Data');},
 beforeSend:function() {$(".display").html('loading data...');},
   success: function(data) {
      
  $(".showStartups").html(data);
  $(".display").html("");
  $(".hidePage").hide();
  }
  
 
    
  });
  
                           
                       });       

$(".startup_country,.Implementation_stage,.getIndustry,.current_stage").change(function(){
                          
                        
                         // var industryInfox = $('#fetchstartups').serialize();
        var startup_country = $('.startup_country').val();  
        var Implementation_stage = $('.Implementation_stage').val();
        var industry = $('.getIndustry').val();
        var current_stage = $('.current_stage').val();
        var fund_to_raise = $('.fund_to_raise').val();
                    
                          
    $.ajax({
  data:{startup_country:startup_country,Implementation_stage:Implementation_stage,industry:industry,current_stage:current_stage,fund_to_raise:fund_to_raise},
  type: "POST",
  url: "<?php echo base_url(); ?>gfa/fetchstartups",
error:function() {$(".display").html('Error loading Data');},

beforeSend:function() {$(".display").html('loading data...');},
  success: function(data) {
     
 $(".showStartups").html(data);
 $(".display").html("");
 $(".hidePage").hide();
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
      <div class="card card-company-table">
        <div class="card-body p-0">
            
        <div class="table-responsive">
            <table class="table" id="table">
              <thead>
			  <tr>
                  <th colspan="5">  </th>
                 
                </tr>
              <tr>
                <th></th>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Country</th>
                  <th>Investment Size</th>
                 <th></th>
                </tr>
              </thead>
              <tbody class="showStartups">
            <?php
            
                $rowArray = $this->admin_model->getAllInvestorNByEmail($email);
            	$row = $this->admin_model->AllStartupDefault(); 
            	$n = 1;
              $s = 1;	
              $count = 0;
          
            	foreach($row as $rowArrays){  
    if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr class="data">
                <td>
                    <!-- <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">%</span>
                     
                   <i data-feather="trending-up" class="text-success font-medium-1"></i> &nbsp;        
                    
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i> &nbsp; 
                      </div> -->
					  <a href="<?php echo base_url(); ?>gfa/investor_startup_details/<?php echo $rowArrays['STUP_ID'] ; ?>" class="btn btn-primary getStartup">Connect <span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></a>
                    
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArrays['Primary_Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArrays['Startup_Company_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArrays['PrimaryBusinessIndustry'] ; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArrays['CountryHQ'] ; ?></span>
                      <!--<span class="font-small-2 text-muted">in 24 hours</span>-->
                    </div>
                  </td>
                  <td>$<?php if($rowArrays['Next_Funding_Round_Target_Sought']=='0' || $rowArrays['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $rowArrays['Next_Funding_Round_Target_Sought'] ;} ?></td>
                  
                </tr>
                <?php }else{ echo '';} } ?>
       
              </tbody>
            </table>
            <div class="paging-container hidePage" id="tablePaging"> </div>
          </div>
        </div>
      </div>
    </div>

    <script>
            
            $(function(){

              $("tr").on('click','.getStartup',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  
  // $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/checkConnection",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
   $(".showData").html(data);
    
   window.open("<?php echo base_url(); ?>gfa/investor_startup_details/"+data, "_self");
    
    
    }
      
    });
    
  
    
  return false;
}); 
             
});

</script>

    <script>

	$(function () {
			// for (var i = 1; i < 20; i++) {
			// 	$('#table').append('<tr class="data"><td>' + i + '</td><td>Some title</td><td>Some Description</td></tr>');
			// }

			load = function() {
				window.tp = new Pagination('#tablePaging', {
					itemsCount: <?php echo $count ?>,
					onPageSizeChange: function (ps) {
						console.log('changed to ' + ps);
					},
					onPageChange: function (paging) {
						//custom paging logic here
						console.log(paging);
						var start = paging.pageSize * (paging.currentPage - 1),
							end = start + paging.pageSize,
							$rows = $('#table').find('.data');

						$rows.hide();

						for (var i = start; i < end; i++) {
							$rows.eq(i).show();
						}
					}
				});
			}

		load();
	});
	</script>
    <!--/ Company Table Card -->
   
  </div>
  
  


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   