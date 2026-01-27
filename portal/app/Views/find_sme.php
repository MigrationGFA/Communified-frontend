<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
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
            <h4 class="card-title"><?php echo lang('translation.Search SME') ?></h4>

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
                <label class="form-label" for="basicInput"><?php echo lang('translation.Industry Name') ?></label>
                <input type="text" id="country" name="name_sme" class="form-control name_sme">
                     
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helpInputTop"><?php echo lang('translation.Industry Sector') ?></label>
                
                <select class="getIndustry select2 form-select" name="industry[]" id="select2-multiple" multiple>

                
			  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo lang("translation.{$rowArrayIndustry['industry']}")  ?></option>
                  <?php }  ?>
              </select>
              </div>
            </div>
            
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="disabledInput"><?php echo lang('translation.Implementation Stage') ?></label>
                <select id="country" name="Implementation_stage" class="form-select Implementation_stage">
                <option value=""></option>  
             <?php $rowIS = $this->admin_model->implementationStage();  foreach($rowIS as $implementStage){  ?>
                  <option value="<?php echo $implementStage['Stages'] ?>"><?php echo lang("translation.{$implementStage['Stages']}") ?></option>
                  <?php }  ?>
                 </select>  
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
                      
                      
                   

$(".Implementation_stage,.getIndustry,.name_sme").change(function(){
                          
                        
                         // var industryInfox = $('#fetchstartups').serialize();
       
        var Implementation_stage = $('.Implementation_stage').val();
        var industry = $('.getIndustry').val();
        var name_sme = $('.name_sme').val();
       
                    
                          
    $.ajax({
  data:{Implementation_stage:Implementation_stage,industry:industry,name_sme:name_sme},
  type: "POST",
  url: "<?php echo base_url(); ?>gfa/fetchSME",
error:function() {$(".display").html('Error loading Data');},

beforeSend:function() {$(".display").html('loading data...');},
  success: function(data) {
     
 $(".showStartups").html(data);
 $(".display").html("");
 $(".hidePage").hide();
 }
 

   
 });
 
                          
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
                  <th><?php echo lang('translation.Company') ?></th>
                  <th><?php echo lang('translation.Category') ?></th>
                  <th><?php echo lang('translation.Country') ?></th>
                  <th><?php echo lang('translation.Investment Size') ?></th>
                 <th></th>
                </tr>
              </thead>
              <tbody class="showStartups">
            <?php
            
                $rowArray = $this->admin_model->getAllMentorByEmail($email);
            	$row = $this->admin_model->AllStartupDefault(); 
            	$n = 1;
              $s = 1;	
              $count = 0;
          
            	foreach($row as $rowArrays){  
    //if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr class="data">
                <td>
                    <!-- <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">%</span>
                     
                   <i data-feather="trending-up" class="text-success font-medium-1"></i> &nbsp;        
                    
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i> &nbsp; 
                      </div> -->
					  <a href="<?php echo base_url(); ?>gfa/sme_startup_details/<?php echo $rowArrays['STUP_ID'] ; ?>" class="btn btn-primary getStartup"><?php echo lang('translation.Connect') ?> <span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></a>
                    
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
                      <span><?php echo lang("translation.{$rowArrays['PrimaryBusinessIndustry']}") ; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArrays['CountryHQ'] ; ?></span>
                      <!--<span class="font-small-2 text-muted">in 24 hours</span>-->
                    </div>
                  </td>
                  <td><?php if($rowArrays['Next_Funding_Round_Target_Sought']=='0' || $rowArrays['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $rowArrays['Next_Funding_Round_Target_Sought'] ;} ?> XOF</td>
                  
                </tr>
                <?php }
                
                //else{ echo '';} } ?>
       
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
     url: "<?php echo base_url(); ?>gfa/checkSmeConnection",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
   $(".showData").html(data);
    
   window.open("<?php echo base_url(); ?>gfa/sme_startup_details/"+data, "_self");
    
    
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

   