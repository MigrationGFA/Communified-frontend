
    <!-- BEGIN: Content-->
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
                <h2 class="content-header-title float-start mb-0">Search Cohort</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/all_events"></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_event"></a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  
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
  

  <div class="row match-height">
    <!-- Timeline Card -->
    
    <!--/ Timeline Card -->


	 <!-- Transaction Card -->
    <div class="col-lg-6 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Courses</h4>
         
        </div>
        <div class="card-body">
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-primary rounded float-start">
                <div class="avatar-content">
                  <i data-feather="pocket" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">GFA Max</h6>
                <small>Business TV and series movies
				</small>
              </div>
            </div>
                 <div class="fw-bolder text-success">$150</div>
          </div>
         
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-danger rounded float-start">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">estore</h6>
                <small>Access resources template</small>
              </div>
            </div>
            <div class="fw-bolder text-success">+ $59</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-warning rounded float-start">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Remsana</h6>
                <small>Startup Learning Platform</small>
              </div>
            </div>
                 <div class="fw-bolder text-success">+ $100</div>
          </div>
		   <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-success rounded float-start">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">News</h6>
                <small>Funding news of African Startups</small>
              </div>
            </div>
            <div class="fw-bolder text-success">Free</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-info rounded float-start">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Events</h6>
                <small>Join resources program organised by GFA</small>
              </div>
            </div>
          
          
          </div>
		  
		  <!--<button type="button" class="btn btn-primary w-100">Join Teams</button>-->
        </div>
      </div>
    </div>
    <!--/ Transaction Card -->

    <!-- App Design Card -->
    <div class="col-lg-6 col-md-6 col-12">
      <div class="card card-app-design">
	    <div class="card-header d-flex justify-content-between align-items-start pb-1">
          <div>
            <h4 class="card-title mb-25">Locations</h4>
          </div>
          <!--<div class="dropdown chart-dropdown">-->
          <!--  <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>-->
          <!--  <div class="dropdown-menu dropdown-menu-end">-->
          <!--    <a class="dropdown-item" href="#">Last 28 Days</a>-->
          <!--    <a class="dropdown-item" href="#">Last Month</a>-->
          <!--    <a class="dropdown-item" href="#">Last Year</a>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="card-body">
		
		<div class="design-group mb-2 pt-50">
		  
		  <br><br>
            <h6 class="section-label">Running Solutions</h6>
            <span class="badge badge-light-warning me-1">Funding (Basic)</span>  
			<br>Start: <span class="badge badge-light-primary">28 Nov, 22</span> - Due: <span class="badge badge-light-primary">28 Oct, 23</span><br>
            <br>
			<span class="badge badge-light-warning me-1">Learning (Premuim)</span>	
			<br>Start: <span class="badge badge-light-primary">8 Oct, 22</span> - Due: <span class="badge badge-light-primary">8 Aug, 23</span><br>			
			<br>
			<span class="badge badge-light-warning me-1">News (Free)</span>
			<br>Start: <span class="badge badge-light-primary">2 Oct, 22</span> - Due: <span class="badge badge-light-primary">2 Aug, 23</span><br>			
			<br>
            <span class="badge badge-light-primary">Insight (Basic)</span>
			<br>Start: <span class="badge badge-light-primary">10 Aug, 22</span> - Due: <span class="badge badge-light-primary">10 Jul, 23</span><br>
			<br>
			<span class="badge badge-light-primary">Venture (Basic)</span>
			<br>Start: <span class="badge badge-light-primary">4 Jun, 22</span> - Due: <span class="badge badge-light-primary">4 May, 23</span><br>
			
          </div>
       
        </div>
      </div>
    </div>
    <!--/ App Design Card -->
  </div>

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   