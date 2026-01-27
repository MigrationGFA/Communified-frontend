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
            <h4 class="card-title">Recommended Investors</h4>

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
            <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
            
            
            <?php  echo ''; }else{  ?>
            <div class="alert alert-info" role="alert">
              <h4 class="alert-heading">Oops! you can only view 1 Investor weekly</h4>
              <div class="alert-body">
              It seems you don't have an active subscripion, pls <a href="https://getfundedafrica.com/portal/gfa/subscribe">click here</a> to subscribe to view all investors.
              </div>
            </div>
            
            <?php } ?>
          <div class="table-responsive">
            <table class="table" id="table">
              <thead>
                <tr>
                <th>S/no</th>
                  <th>Name</th>
                  <th>Industry</th>
                  <th>Min-Max Cheques</th>
                  <th>Investment Stage</th>
                  <th>Option</th>
                </tr>
              </thead>
              <tbody>
                <?php
                 
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArray = $this->admin_model->getAllStartUpNByEmail($email); 
     if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){           
               $row = $this->admin_model->MatchInvestorDefaultLimit($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']);  
     }else{
         $row = $this->admin_model->MatchInvestorDefaultLimitByOne($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']);  
     }	
     $n = 1;
     $s = 1;	
     $count = 0;
				foreach($row as $rowArray){  
                $count += $n;
                ?> 
                <tr class="data">
                  <td><?php echo $s++; ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Investor_Name'] ; ?></div>
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
                      <span><?php echo str_replace("?","",$rowArray['Industry_Focus']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25">$<?php echo $rowArray['Min_Cheque']; ?></span>
                      <span class="font-small-2 text-muted">$<?php echo $rowArray['Max_Cheque']; ?></span>
                    </div>
                  </td>
                  <td><?php echo $rowArray['Investment_Stage_Focus']; ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_investor_details/<?php echo $rowArray['Investor_ID']; ?>" >   <span class="fw-bolder me-1">Connect Investor</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                </tr>
                <?php }  ?>
                
              </tbody>
            </table>
          
            <div class="paging-container" id="tablePaging"> </div>
          </div>
        </div>
      </div>
    </div>
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

   