 <!-- BEGIN: Content-->
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
 <?php     
		        $loginkey = $this->gfa_model->getWpCred($email);  ?>
    <div class="col-xl-4 col-md-6 col-12">
      <div class="card card-congratulation-medal">
        <div class="card-body">
          <h5>Congratulations 🎉!</h5>
          <p class="card-text font-small-3">You have won gold medal</p>
          <h3 class="mb-75 mt-2 pt-50">
		  <div class="card-text font-small-3">Total Dealflow</div>
            <!-- <a href="<?php echo base_url(); ?>gfa/investor_deals/">$48.9k</a> -->
            <a href="<?php echo base_url(); ?>gfa/investor_deals/">$0</a>
          </h3>
          <a href="<?php echo base_url(); ?>gfa/startups/" class="btn btn-primary">Search Startups</a>
          <img src="<?php echo base_url(); ?>assets/app-assets/images/gold.png" class="congratulation-medal" alt="Medal Pic" />
        </div>
      </div>
    </div>
    <!--/ Medal Card -->

    <!-- Statistics Card -->
    <div class="col-xl-8 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header">
          <h4 class="card-title">Your Deals in Summary</h4>
          <div class="d-flex align-items-center">
            <p class="card-text font-small-2 me-25 mb-0">Last transactions 1 week ago</p>
          </div>
        </div>
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0">Startups</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0">LPs</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0">Syndicate</p>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-success me-2">
                  <div class="avatar-content">
                    <i data-feather="dollar-sign" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">$0</h4>
                  <p class="card-text font-small-3 mb-0">Investment</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>

  <div class="row match-height">
    <div class="col-lg-4 col-12">
      <div class="row match-height">
        <!-- Bar Chart - Orders -->
        <div class="col-lg-6 col-md-3 col-6">
          <div class="card">
            <div class="card-body pb-50">
              <h6>Prospective Deals</h6>
              <h2 class="fw-bolder mb-1">$0</h2>
              <div id="statistics-order-chart"></div>
            </div>
          </div>
        </div>
        <!--/ Bar Chart - Orders -->

        <!-- Line Chart - Profit -->
        
        <div class="col-lg-6 col-md-3 col-6">
        <a href="<?php echo base_url(); ?>gfa/investor_deals/"><div class="card card-tiny-line-stats">
            <div class="card-body pb-50">
              <h6>Startups Connection</h6>
              <h2 class="fw-bolder mb-1"><?php echo $this->admin_model->countInvestorConnection($email)  ?> </h2>
              <div id="statistics-profit-chart"></div>
            </div></a>
          </div> 
        </div>
        <!--/ Line Chart - Profit -->

        <!-- Earnings Card -->
        <div class="col-lg-12 col-md-6 col-12">
          <div class="card earnings-card">
            <div class="card-body">
              <div class="row">
                <div class="col-6">
                  <h4 class="card-title mb-1">Insight</h4>
                  <div class="font-small-2">This Month</div>
                  <h5 class="mb-1">$405M</h5>
                  <p class="card-text text-muted font-small-2">
                    <span class="fw-bolder">68.2%</span><span> more investment in Fintech.</span>
                  </p>
                </div>
                <div class="col-6">
                  <div id="earnings-chart"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Earnings Card -->
      </div>
    </div>

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md-8 col-12 revenue-report-wrapper">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0">Investment Report</h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span>Returns</span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span>Expense</span>
                </div>
              </div>
            </div>
            <div id="revenue-report-chart"></div>
          </div>
          <div class="col-md-4 col-12 budget-wrapper">
            <div class="btn-group">
              <button
                type="button"
                class="btn btn-outline-primary btn-sm dropdown-toggle budget-dropdown"
                data-bs-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                2022
              </button>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">2019</a>
                <a class="dropdown-item" href="#">2018</a>
                <a class="dropdown-item" href="#">2017</a>
              </div>
            </div>
            <h2 class="mb-25">$25,852</h2>
            <div class="d-flex justify-content-center">
              <span class="fw-bolder me-25">Budget:</span>
              <span>56,800</span>
            </div>
            <div id="budget-chart"></div>
            <button type="button" class="btn btn-primary">Increase Investment</button>
          </div>
        </div>
      </div>
    </div>
    <!--/ Revenue Report Card -->
  </div>

  <div class="row match-height">
    <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table" id="table">
              <thead>
			  <tr>
                  <th colspan="5">Browse your Recommended Startups  <a href="<?php echo base_url(); ?>gfa/startups/" class="btn btn-primary">Browse all startups</a></th>
                 
                </tr>
                <tr>
                  <th>Company</th>
                  <th>Category</th>
                  <th>Interest</th>
                  <th>Investment Size</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
            <?php
            
                $rowArray = $this->admin_model->getAllInvestorNByEmail($email);
            	$row = $this->admin_model->MatchStartupDefault($rowArray[0]['Industry_Focus'],$rowArray[0]['Investment_Stage_Focus'],$rowArray[0]['Implementation_Stage_Focus'],$this->admin_model->getCountryByRegion($rowArray[0]['Regional_focus'])[0]['country'],$rowArray[0]['Min_Cheque']); 
            	
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArrays){  
               
                if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
                  $count += $n;
                  ?>
                <tr class="data">
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
                  <td>
                    
					  <a href="<?php echo base_url(); ?>gfa/investor_startup_details/<?php echo $rowArrays['STUP_ID'] ; ?>" class="btn btn-primary getStartup">Connect <span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></span></a>
                   
                  </td>
                </tr>
                <?php }else{ echo ''; }}  ?>
      
              </tbody>
            </table>
            <div class="paging-container" id="tablePaging"> </div>
          </div>
        </div>
      </div>
      
    </div>
    <!--/ Company Table Card -->
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

    <!-- Mentor Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-transaction">
        <div class="card-header">
          <h4 class="card-title">Mentor A Startup</h4>
          <div class="dropdown chart-dropdown">
            <i data-feather="more-vertical" class="font-medium-3 cursor-pointer" data-bs-toggle="dropdown"></i>
            <div class="dropdown-menu dropdown-menu-end">
              <a class="dropdown-item" href="#">Last 28 Days</a>
              <a class="dropdown-item" href="#">Last Month</a>
              <a class="dropdown-item" href="#">Last Year</a>
            </div>
          </div>
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
                <h6 class="transaction-title">Walls Hub</h6>
                <small>Real Esate - Uganda</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">$40k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-success rounded float-start">
                <div class="avatar-content">
                  <i data-feather="check" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">MoneyBank</h6>
                <small>Finance - Ghana</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$80k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-danger rounded float-start">
                <div class="avatar-content">
                  <i data-feather="dollar-sign" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Paytime</h6>
                <small>Finance - Egypt</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$50k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-warning rounded float-start">
                <div class="avatar-content">
                  <i data-feather="credit-card" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Foodcow</h6>
                <small>Agriculture - Kenya</small>
              </div>
            </div>
            <div class="fw-bolder text-danger">$23k</div>
          </div>
          <div class="transaction-item">
            <div class="d-flex">
              <div class="avatar bg-light-info rounded float-start">
                <div class="avatar-content">
                  <i data-feather="trending-up" class="avatar-icon font-medium-3"></i>
                </div>
              </div>
              <div class="transaction-percentage">
                <h6 class="transaction-title">Yoyop</h6>
                <small>Fintech - Nigeria</small>
              </div>
            </div>
            <div class="fw-bolder text-success">$98k</div>
          </div>
		  
		  
		
		<hr class="mb-2" />
		<div class="d-grid">
          <button type="button" class="btn btn-primary">Connect with Mentees</button>
        </div>
        </div>
      </div>
    </div>
    <!--/ Transaction Card --> 

  <!-- Profile Card -->
  <div class="col-lg-4 col-md-6 col-12">
    <div class="card card-profile">
      <img
        src="https://getfundedafrica.com/images/cohort.jpg"
        class="img-fluid card-img-top"
        alt="Profile Cover Photo"
      />
      <div class="card-body">
        <div class="profile-image-wrapper">
          <div class="profile-image">
            <div class="avatar">
              <img src="<?php echo base_url(); ?>assets/app-assets/images/gfacohort.jpg" alt="Cohort Pic"/>
            </div>
          </div>
        </div>
        <h3>Cohorts</h3>
        <h6 class="text-muted">Connect with Investors Ready Startups</h6>
        <span class="badge badge-light-primary profile-badge">Next: 9th January 2023</span>
        <hr class="mb-2" />
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted fw-bolder">Registered</h6>
            <h3 class="mb-0">410</h3>
          </div>
          <div>
            <h6 class="text-muted fw-bolder">Paticipant</h6>
            <h3 class="mb-0">100</h3>
          </div>
          <div>
            <h6 class="text-muted fw-bolder">Investment</h6>
            <h3 class="mb-0">$21k</h3>
          </div>
        </div>
		
		<hr class="mb-2" />
		
		<div class="d-grid">
          <button type="button" class="btn btn-primary">Browse & Paticipate in Cohort</button>
        </div>
		
		
      </div>
    </div>
  </div>
  <!--/ Profile Card -->
    <!-- Developer Meetup Card -->
    <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-developer-meetup">
        <div class="meetup-img-wrapper rounded-top text-center">
           <img src="<?php echo base_url(); ?>assets/app-assets/images/eventgfa.jpg" alt="Meeting Pic" height="170" />
        </div>
        <div class="card-body">
          <div class="meetup-header d-flex align-items-center">
            <div class="meetup-day">
              <h6 class="mb-0">THU</h6>
              <h3 class="mb-0">24</h3>
            </div>
            <div class="my-auto">
              <h4 class="card-title mb-25">GFA Event </h4>
              <p class="card-text mb-0">Click here for more details</p>
            </div>
          </div>
          <div class="mt-0">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="calendar" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Oct 11, 2022</h6>
              <small>Oct 11, 2022</small>
            </div>
          </div>
          <div class="mt-2">
            <div class="avatar float-start bg-light-primary rounded me-1">
              <div class="avatar-content">
                <i data-feather="map-pin" class="avatar-icon font-medium-3"></i>
              </div>
            </div>
            <div class="more-info">
              <h6 class="mb-0">Crowne Plaza Hotel,</h6>
              <small>Sheikh Zayed Road, Dubai</small>
            </div>
          </div>
         
		
		<hr class="mb-2" />
		  <div class="d-grid">
          <button type="button" class="btn btn-primary">Request an Invite</button>
        </div>
        </div>
      </div>
    </div>
    <!--/ Developer Meetup Card -->

   


  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

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