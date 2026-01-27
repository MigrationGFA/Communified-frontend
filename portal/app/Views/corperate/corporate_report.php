
<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Dashboard Analytics Start -->
            <section id="dashboard-analytics">

                <div class="row match-height">
                    <!--   The investor name & title -->

                    <h4 class="card-title">Revenue Report</h4>

                    <!--The investment stage -->
                   
                    <!--Options to reach out -->
                    <!-- Company Table Card -->
                    <div class="col-lg-12 col-12">
                        <div class="col-lg-12 text-center mb-2">
                            <!--data-bs-target="#checkHireProfile" data-bs-toggle="modal"-->
                            <!--<a href="<?php echo base_url(); ?>gfa/corperates" class="btn btn-secondary btn-next" style="margin:5px;" disabled> Connect </a>   <a href="#" class="btn btn-primary btn-next" style="margin:5px;" data-bs-target="#checkInterview" data-bs-toggle="modal"> Request an Interview </a> <a href="<?php echo base_url(); ?>gfa/calendar" style="margin:5px;" class="btn btn-primary btn-next" > Schedule Meeting </a>-->
                            <!--<a href="" class="btn btn-primary btn-next" style="float:auto;">Panel Request</a>-->
                        </div>
                        <div class="card card-company-table">
                            <div class="card-body p-0">
                                <?php           
                                                
                                                 $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
		                                         $corperateRow = $this->gfa_model->getCorperateStartupReg($cor_info);
                
    	        
    	        if($corperateRow[0]['ref']==$cor_info){
                        $rowArrays = $this->admin_model->getCorperateDcdtByEmail($email); 
    	                $row = $this->admin_model->MatchDcdtStartup();
                          
                      }else {
                      
                      if($corperateRow_Event[0]['Event']=='Microsoft'){
                        $rowArrays = $this->admin_model->getCorperateMicrosoftByEmail($email); 
    	                $row = $this->admin_model->MatchMicrosftStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }else{
                          
                        $rowArrays = $this->admin_model->getCorperateByEmail($email); 
    	                $row = $this->admin_model->MatchCorperateStartup($rowArrays[0]['Solution_Corperate'],$rowArrays[0]['Core_Interest_Corporate']);
                          
                      }
                      
                      }
    	
    	if(!empty($row)){     
    	    
    	    ?>
                                <div class="table-responsive" style="">
                                    <h5>Physical Transaction</h5>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Individual/Company Name</th>
                                                <th>Industry</th>
                                                <th>Transaction</th>
                                                <th>Revenue</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                              $reportRow = $this->gfa_model->getAllReport($cor_info);
                                              foreach($reportRow as $reportArray){
                                          ?>
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar rounded">
                                                            <div class="avatar-content">
                                                                <img src="https://getfundedafrica.com/portal/assets/images/uploads/default-avatar.jpg"
                                                                    alt="Toolbar svg" height="40" width="40" />
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <div class="fw-bolder">
                                                                <?php echo  $this->gfa_model->getStartUpDetails($reportArray['email'])[0]['Primary_Contact_Name'] ; ?>
                                                               
                                                            </div>
                                                            <div class="font-small-2 text-muted">
                                                               <?php echo  $this->gfa_model->getStartUpDetails($reportArray['email'])[0]['Startup_Company_Name'] ; ?>
                                                            </div>
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
                                                        <div>
                                                            <span class="fw-bolder mb-25">
                                                               <?php echo  $this->gfa_model->getStartUpDetails($reportArray['email'])[0]['PrimaryBusinessIndustry'] ; ?>
                                                                </span>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div class="d-flex flex-column">
                                                        <span
                                                            class="fw-bolder mb-25">$<?php echo $reportArray['total_sale']; ?></span>
                                                    </div>
                                                </td>
                                                <td>$<?php echo $reportArray['total_exp']; ?></td>
                                            </tr>
                                            <?php } ?>



                                        </tbody>
                                    </table>
                                </div>
                              
               
                            </div>
                        </div>
                    </div>
                    
                    
                                   
                                
                                
                                
                               
                                <?php }else{ echo '<h5 class="card-title">No record found</h5>'; } ?>
                                
                                
                                
                    <!--/ Company Table Card -->
                    <div class="modal fade" id="checkHireProfile" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <span><i data-feather="info"
                                                class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <h1 class="mb-1">Panel Request</h1>

                                        <p>
                                            Request to be one of the Panelist at the Microsoft Corporate Innovation and
                                            Enterprise Forum.
                                        </p>

                                        <br>

                                        <button href="#" class="btn btn-primary float-end mt-3 requestPanel">
                                            <span class="me-50">Submit</span>
                                            <i data-feather="user"></i>
                                        </button>


                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>

                    <div class="modal fade" id="checkInterview" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-edit-user">
                            <div class="modal-content">
                                <div class="modal-header bg-transparent">
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body pb-5 px-sm-5 pt-50">
                                    <div class="text-center mb-2">
                                        <span><i data-feather="info"
                                                class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                                        <h1 class="mb-1">Request Interview</h1>

                                        <p>
                                            Request for an interview at the Microsoft Corperate Innovation and
                                            Enterprise Forum.
                                        </p>

                                        <br>

                                        <button href="#" class="btn btn-primary float-end mt-3 requestInterview">
                                            <span class="me-50">Submit</span>
                                            <i data-feather="user"></i>
                                        </button>


                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                    
                   
                    
                </div>
                <!--checkInterview-->
                <script>
                $(function() {


                    $(".requestPanel").click(function() {

                        var status = 1;
                        $.ajax({
                            data: {
                                status: status
                            },
                            type: "POST",
                            url: "<?php echo base_url(); ?>gfa/requestPanel",
                            error: function() {
                                $(".requestPanel").html('Error Request');
                            },
                            beforeSend: function() {
                                $(".requestPanel").html('Requesting...');
                                $('.requestPanel').prop("disabled", true);
                            },
                            success: function(data) {

                                $(".requestPanel").html('Request Sent');
                                $('.requestPanel').prop("disabled", true);



                            }

                        });

                    });

                    $(".requestInterview").click(function() {

                        var status = 1;
                        $.ajax({
                            data: {
                                status: status
                            },
                            type: "POST",
                            url: "<?php echo base_url(); ?>gfa/requestInterview",
                            error: function() {
                                $(".requestPanel").html('Error Request');
                            },
                            beforeSend: function() {
                                $(".requestInterview").html('Requesting...');
                                $('.requestInterview').prop("disabled", true);
                            },
                            success: function(data) {

                                $(".requestInterview").html('Request Sent');
                                $('.requestInterview').prop("disabled", true);



                            }

                        });

                    });

                });
                </script>


            </section>
            <!-- Dashboard Analytics end -->

        </div>
    </div>
</div>
<!-- END: Content-->




<div class="sidenav-overlay"></div>
<div class="drag-target"></div>