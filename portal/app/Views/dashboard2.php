    <?php 
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        $email = session()->get('email'); 
        $loginkey = $this->gfa_model->getWpCred($email);
    ?>
    <!-- BEGIN: Content-->
    <div class="app-content content " onmouseover='getallposts(5)'>
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
           <input type="hidden" id="action_email" value="<?php echo $email; ?>">
            <div class="content-body">
                <!-- Dashboard Analytics Start -->
                <section id="dashboard-analytics">
                    <div class="row match-height">
                        <!-- Greetings Card starts -->
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="card card-congratulations">
                                <div class="card-body text-center">
                                    <img src="<?php echo base_url('public/assets/app-assets/images/elements/decore-left.png'); ?>"
                                        class="congratulations-img-left" alt="card-img-left" />
                                    <img src="<?php echo base_url('public/assets/app-assets/images/elements/decore-right.png'); ?>"
                                        class="congratulations-img-right" alt="card-img-right" />
                                    <div class="avatar avatar-xl bg-primary shadow">
                                        <div class="avatar-content">
                                            <i data-feather="award" class="font-large-1"></i>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <h1 class="mb-1 text-white">Congratulations</h1>
                                        <p class="card-text m-auto w-15">
                                            You have done <strong><?php echo $point ?>%</strong> onboarding. <br><a
                                                href="<?php echo base_url('gfa/profile'); ?>" style="color:#fff;"
                                                target="_blank">Please update your profile for better experience, click
                                                here.</a>
                                        </p>


                                        <?php 
                                          
                                        
                                        ?>
                                        <b>
                                            <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){ ?>
                                            You have an active subscription from
                                            <?php //foreach($startupPaid as $startupPaidArray){  ?>
                                            <?php  echo date('d M, y',strtotime($startupPaid[0]['time_start']));  ?> to
                                            <?php  echo date('d M, y',strtotime($startupPaid[0]['time_end']));  ?>
                                            <?php //}
            
                                      }else{ ?>
                                              <a href="<?php echo base_url('gfa/subscribe'); ?>" title="Subscription" ?
                                                style="color:#fff;">No active subscription found, click here to
                                                activate.</a>
                                            <?php }  ?>
                                        </b>




                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Greetings Card ends -->

                        <!-- Subscribers Chart Card starts -->

                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">


                                <?php 
                                 
                                  
                                  //if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active' && $point >=80 ) {
                                  // if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ 
                                ?>








                                <?php  if($point < 50){ ?>


                                <a href="#" data-bs-target="#checkProfile" data-bs-toggle="modal">


                                    <?php }else{ ?>

                                    <a href="<?php echo base_url('gfa/startup_investor'); ?>">

                                        <?php   }
                                        ?>

                                        <?php //} else { ?>
                                        <!--<a href="<?php echo base_url(); ?>gfa/startup_investor"> -->


                                        <?php //}   ?>

                                        <div class="card-header flex-column align-items-start pb-0">
                                            <div class="avatar bg-light-primary p-50 m-0">
                                                <div class="avatar-content">
                                                    <i data-feather="users" class="font-medium-5"></i>
                                                </div>
                                            </div>
                                            <h2 class="fw-bolder mt-1">
                                                <p class="card-text">&nbsp;<br>
                                                    <?php
          
                                                      
                                                      
                                                    if($account_type=='startup' || $account_type=='' || $account_type=='individual' ){
                                                    $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
                                                  $rowArrayExt = $this->admin_model->getAllStartUpNByEmailExtX($email);
                                                    echo $this->admin_model->countMatchInvestorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']); ?>
                                                                                              <br>Investors Matched
                                                                                          </p>
                                                                                      </h2>
                                                                                      <?php }elseif($account_type=='investor') { 
                                                  $rowArrayInv = $this->admin_model->getAllInvestorNByEmail($email);
                                                  echo $this->admin_model->countMatchStartupDefault($rowArrayInv[0]['Industry_Focus'],$rowArrayInv[0]['Investment_Stage_Focus'],$rowArrayInv[0]['Implementation_Stage_Focus'],$this->admin_model->getCountryByRegion($rowArrayInv[0]['Regional_focus'])[0]['country'],$rowArrayInv[0]['Min_Cheque']);
                                                  ?>

                                            <p class="card-text">Startups Match</p>
                                            <?php   }else{ echo 0;   ?>

                                            <p class="card-text">No Match<br><br><span
                                                    class="badge badge-light-warning me-1">[Update Your Profile]</span>
                                            </p>
                                            <?php   }  ?>


                                        </div>
                                        <div id="gained-chart"></div>
                                    </a>
                            </div>
                        </div>

                        <!-- Subscribers Chart Card ends -->

                        <!-- Orders Chart Card starts -->
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="card">
                                <a href="<?php echo base_url('gfa/perks'); ?>">
                                    <!--data-bs-target="#editUser" data-bs-toggle="modal"-->
                                    <div class="card-header flex-column align-items-start pb-0">
                                        <div class="avatar bg-light-warning p-50 m-0">
                                            <div class="avatar-content">
                                                <i data-feather="package" class="font-medium-5"></i>
                                            </div>
                                        </div>
                                        <?php $sum = 0;
                                        $rowPerks = $this->gfa_model->getAllPerks(); foreach($rowPerks as $rowPerksArray){
                                            $sum += $rowPerksArray['value_2'];
                                        }   
                                        ?>
                                        <h2 class="fw-bolder mt-1">
                                            <?php detectCurrency(); ?><?php echo  detectCurrencyAmount($sum*460); ?>
                                        </h2>
                                        <p class="card-text">Free perks!</p>
                                       
                                    </div>
                                    <div id="order-chart"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->
                    </div>






                      <div class="row match-height">
                        <div class="col-lg-12 col-12">
                            <div class="row match-height">
                                <?php  //if(empty($this->gfa_model->getAllDcdtByEmail($email))){ echo ''; }else{ ?>


                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php echo  $this->gfa_model->countWeeklyReport($email) ?>
                                                    Reports</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Weekly Update</h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder"><a
                                                            href="<?php echo base_url('gfa/add_report'); ?>">Add Weekly
                                                            Report </a> | <a
                                                            href="<?php echo base_url('gfa/report'); ?>">Weekly
                                                            Report</a></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="layers" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <?php   //}   ?>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>230 Courses</span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Learning</h4>
                                                    <!--https://remsana.getfundedafrica.com/sso.php?key=bG9sdWRlYm9sYUB5YWhvby5jb20-->
                                                    
                                                    <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ ?>
                                                        <a style="color: #7367F0;" href="https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3/">                                                                
                                                            <small class="fw-bolder">
                                                                <!--Add Courses | -->Free Course | All Courses
                                                            </small>
                                                        </a>
                                                    <?php }else{ ?>
                                                        <a style="color: #7367F0;" data-bs-target="#checkremsana" data-bs-toggle="modal" target="_blank">
                                                            <small class="fw-bolder">
                                                                <!--Add Courses | -->Free Course | All Courses
                                                            </small>
                                                        </a>
                                                    <?php } ?>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body">
                                                        <i data-feather="book-open" class="font-large-1"
                                                            style="color:#7A6FF1;"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>120 Digital Services</span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Services</h4>
                                                    <?php 
                                                        $market_names = $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']; 
                                                        $market_name = explode(" ",$market_names);
                                                        $market_first_name = $market_name[0];
                                                        $market_last_name = (!empty($market_name[1]))?$market_name[1] : '';
                                                    ?>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    
                                                        <small class="fw-bolder">
                                                            <a style="color: #7367F0;" <?php $market_url_buy = "https://marketplace.getfundedafrica.com/sso.php?key=".$loginkey[0]['LoginKey']."&service=buy&first_name=".$market_first_name."&last_name=".$market_last_name; ?> onclick="saveSSOAction('buy_service', '<?php echo $market_url_buy ?>')">Buy a Service</a> 
                                                            | 
                                                            <a style="color: #7367F0;" <?php $market_url_sell = "https://marketplace.getfundedafrica.com/sso.php?key=".$loginkey[0]['LoginKey']."&service=sell&first_name=".$market_first_name."&last_name=".$market_last_name; ?> onclick="saveSSOAction('sell_service', '<?php echo $market_url_sell ?>')">Sell a Service</a></small> 
                                                   
                                                    <!-- <small class="fw-bolder"><a
                                                            href="<?php //echo base_url(); ?>/portal/gfa/undermaintenance"
                                                            target="_blank">Buy a Service</a> | <a
                                                            href="<?php //echo base_url(); ?>/portal/gfa/undermaintenance"
                                                            target="_blank">Sell a Service</a></small> -->
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="award" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>130 Digital Products</span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Products</h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    <!--<a href="<?php //echo base_url(); ?>gfa/comingsoon">-->
                                                        <small class="fw-bolder">
                                                            <a style="color: #7367F0;" <?php $product_buy = "https://estore.getfundedafrica.com/sso.php?key=" . (!empty($loginkey[0]['LoginKey']) ? $loginkey[0]['LoginKey'] : '') . "&product=buy"; ?> onclick="saveSSOAction('buy_product', '<?php echo $product_buy; ?>')">Buy a Product</a>
                                                            | 
                                                            <a style="color: #7367F0;" <?php $product_sell = "https://estore.getfundedafrica.com/sso.php?key=".(!empty($loginkey[0]['LoginKey'])?$loginkey[0]['LoginKey']: '')."&product=sell"; ?> onclick="saveSSOAction('sell_product', '<?php echo $product_sell; ?>')">Sell a Product</a>
                                                            |
                                                            <a href="#" data-bs-target="#editUser" data-bs-toggle="modal"> <?php if($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !='' && $this->admin_model->getCreditRedeemSumByEmail($email)==60){ ?>
                                        Free e-store Credit (<?php detectCurrency(); ?><?php echo 0 ; ?>)
                                        <?php }elseif($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !='' && $this->admin_model->getCreditRedeemSumByEmail($email)==15){ 
            
                                              if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
                                              ?>

                                       
                                            Free e-store Credit (<?php detectCurrency(); ?><?php echo  detectCurrencyAmount($balanceCredit); ?>)
                                       
                                        <?php  }else{  ?>
                                       
                                            Free e-store Credit (<?php detectCurrency(); ?><?php echo detectCurrencyAmount($balanceCreditFree); ?>)
                                
                                        <?php } ?>

                                       
                                        <?php }else{  ?>
                                        
                                            Free e-store Credit (<?php detectCurrency(); ?><?php echo detectCurrencyAmount($viewcredit); ?>)
                                      
                                        
                                        <?php } ?> </a></small>
                                                    <!--</a>-->
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="award" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
                                                    echo $this->admin_model->countMatchMentorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['Mentorship'],$rowArray[0]['Startup_Implementation_Stage']); ?>
                                                    Mentors</span>


                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Mentors</h4>



                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    <small class="fw-bolder"><?php  if($point < 50){
                                                      ?>

                                                        <a href="#" data-bs-target="#checkMentorProfile"
                                                            data-bs-toggle="modal">
                                                            <?php    }else{ 

 
                                                            ?>
                                                            <a href="<?php echo base_url('gfa/startup_mentor'); ?>">
                                                                <?php    }  
    
                                                                ?>Connect [<?php echo $this->gfa_model->countStartupConnect($email,'startup-mentor'); ?>]</a> | <?php if(empty($this->gfa_model->getMentorDetails($email))){ ?><a
                                                                href="<?php echo base_url('gfa/register_as_mentor'); ?>">
                                                                Register as a Mentor <a> <?php }else { ?><a
                                                                        href="<?php echo base_url('gfa/switch_account/mentor'); ?>">Switch
                                                                        to Mentor Account<a> <?php }  ?></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="users" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
                                                    echo $this->admin_model->countMatchInvestorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']); 
                                                  ?>
                                                    Investors

                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Investors</h4>

                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->
                                                    <small class="fw-bolder"><?php  if($point < 50) {  ?>
                                                        <a href="#" data-bs-target="#checkProfile"
                                                            data-bs-toggle="modal">
                                                            <?php    }else{ ?>
                                                            <?php if(!($this->gfa_model->checkInvConOnbStatus($email)))  { ?>
                                                            <a style="color: #7367F0;" onclick="loadInvestOnb('step1')" data-bs-target="#investorconnect" data-bs-toggle="modal" target="_blank">
                                                            <?php } else { ?>
                                                            <a href="<?php echo base_url('gfa/startup_investor'); ?>" >
                                                            <?php } ?>
                                                                <?php  }  ?> Connect [<?php echo $this->gfa_model->countStartupConnect($email,'startup-investor'); ?>]</a> |
                                                            <?php if(empty($this->gfa_model->getInvestorDetails($email))){ ?><a
                                                                href="<?php echo base_url('gfa/register_as_investor'); ?>">
                                                                Register as an Investor <a> <?php }else { ?><a
                                                                        href="<?php echo base_url('gfa/switch_account/investor'); ?>">Switch
                                                                        to Investor Account<a> <?php }  ?></small>

                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="users" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>
                                                  <?php 
              
                                                    // if(!empty($this->admin_model->countMatchCooperateDefaultApp($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']))){ echo  $this->admin_model->countMatchCooperateDefaultApp($rowArrayExt[0]['Solution_Corperate'],$rowArrayExt[0]['Core_Interest_Corporate']); }else{ echo 0; } 
                                                  ?> Corporate</span>
                                       
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Corporate</h4>



                                                    <!--$urly = base_url()."gfa/startup_cooperate";-->
                                                    <small class="fw-bolder">
                                                        <?php    if($point < 50) {  ?>

                                                         <a href="#" data-bs-target="#checkMentorProfile"
                                                            data-bs-toggle="modal">Connect [<?php echo $this->gfa_model->countStartupConnect($email,'startup-corporate'); ?>]</a>
                                                        <?php  }else{  ?><a
                                                            href="<?php echo base_url('gfa/startup_cooperate'); ?>">Connect [<?php echo $this->gfa_model->countStartupConnect($email,'startup-corporate'); ?>]
                                                        </a><?php   }  ?>
                                                        |
                                                        <?php if(empty($this->gfa_model->getCorperateDetails($email))){ ?><a
                                                            href="<?php echo base_url('gfa/register_as_corporate'); ?>">
                                                            Register as a Corporate <a> <?php }else { ?><a
                                                                    href="<?php echo base_url('gfa/switch_account/corperate'); ?>">Switch
                                                                    to Corporate Account<a> <?php }  ?> | <a
                                                                            href="<?php echo base_url('gfa/csr_participate'); ?>">Participate
                                                                            in CSR</a></small>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="briefcase" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php if($this->gfa_model->countFileUploded($email)==1 || $this->gfa_model->countFileUploded($email)==0  ){
                                                    echo $this->gfa_model->countFileUploded($email).' File';
                                                    
                                                }else{ 
                                                        echo $this->gfa_model->countFileUploded($email)." Files";
                                                        
                                                        } ?> </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Dealroom</h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder">
                                                    <?php if($creditPointScore >=50)  {  ?>
 <a class="d-flex align-items-center" href="<?php echo base_url('gfa/dealroom'); ?>">View All Files </a>
                                                            
  <?php   }else{  ?>
     <a href="#" data-bs-target="#checkDealRoomProfile" data-bs-toggle="modal"> View All Files </a>
     <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">-->
   <?php  }  ?>    
                                                     
                                                    </small>
                                                  
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="file" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                


                                

                      
                                <?php  if(!empty($this->gfa_model->getAllDcdtByEmail($email))){ echo ''; }else{ ?>


                                <!-- <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span>400 work desk</span>
                                                
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Workspace</h4>
                                                    <a href="<?php //echo base_url(); ?>gfa/comingsoon">
                                                        <small class="fw-bolder">Book Space | Add Workspace</small>
                                                    </a>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="layers" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->

                                <?php   }   ?>


                                

                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between">
                                                <span><?php if($this->gfa_model->countAllStory()==1 || $this->gfa_model->countAllStory()==0  ){
                                                    echo $this->gfa_model->countAllStory().' All Story';
                                                    
                                                }else{ 
                                                        echo $this->gfa_model->countAllStory()." All Stories";
                                                        
                                                        } ?> </span>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-end mt-1 pt-25">
                                                <div class="role-heading">
                                                    <h4 class="fw-bolder">Tell Your Story</h4>
                                                    <!--<a href="javascript:;" class="role-edit-modal" data-bs-toggle="modal" data-bs-target="#addRoleModal">-->

                                                    <small class="fw-bolder"><a
                                                            href="<?php echo base_url('gfa/all_stories'); ?>">All
                                                            Stories</a> | <a
                                                            href="<?php echo base_url('gfa/add_story'); ?>"> Add Story
                                                        </a> | <a href="<?php echo base_url('gfa/manage_story'); ?>">
                                                            Manage Story </a></small>
                                                    </a>
                                                </div>
                                                <div class="avatar-content avatar  p-50 m-0 bg-light-primary"
                                                    style="float:right;">
                                                    <a href="javascript:void(0);" class="text-body"><i
                                                            data-feather="edit" class="font-large-1"
                                                            style="color:#7A6FF1;"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                


                            </div>
                        </div>

                        <!-- Timeline Card -->
                        <div class="col-lg-4 col-12">
                            <div class="card card-user-timeline">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="list" class="user-timeline-title-icon"></i>
                                        <h4 class="card-title">Latest News</h4>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <ul class="timeline ms-50" id="startup_news_rand">



                                        <h6>Loading.....</h6>

                                    </ul>

                                </div>
                            </div>
                        </div>
                        <!--/ Timeline Card -->



                        <!-- Profile Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-profile">
                                <img src="https://getfundedafrica.com/images/cohort.jpg" class="img-fluid card-img-top"
                                    alt="Profile Cover Photo" />
                                <div class="card-body">
                                    <div class="profile-image-wrapper">
                                        <div class="profile-image">
                                            <div class="avatar">

                                                <img src="<?php echo base_url('public/assets/app-assets/images/gfacohort.jpg'); ?>" alt="Cohort Pic" />
                                            </div>
                                        </div>
                                    </div>

                                    <h6 class="text-muted">NEXT COHORT STARTING</h6>
                                    <br>

                                    <h3>Investor Readiness Cohort</h3>
                                    <br>
                                    <span class="badge badge-light-primary profile-badge"> 9th Jan 2023</span><br><br>


                                    <button onclick="document.location='https://getfundedafrica.com/cohort'"
                                        type="button" class="btn btn-primary" style="float:auto;">Learn more</button>

                                </div>
                            </div>
                        </div>
                        <!--/ Profile Card -->


                        <!-- Developer Meetup Card -->
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="card card-developer-meetup">
                                <div class="meetup-img-wrapper rounded-top text-center">
                                    <img src="<?php echo base_url('public/assets/app-assets/images/eventgfa.jpg'); ?>" alt="Meeting Pic" height="170" />
                                </div>

                                
                                <div class="card-body">
                                <h4 class="card-title mb-25"> Events </h4>

                                <?php if(empty($eventResp['Title'])){ echo ''; $limit = 2;}else{  ?>
                                    <div class="meetup-header d-flex align-items-center">
                                    
                                    
                                        <div class="meetup-day mt-1">
                                            <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($eventResp['Date']));
                                            echo $this->gfa_model->getDay($dateEvent);  ?>
                                            </h6>
                                            <h5 class="mb-0"><?php echo date('d', strtotime($eventResp['Date']));  ?>
                                            </h5>-<h5 class="mb-0"><?php echo date('M', strtotime($eventResp['Date']));  ?>
                                            </h5>
                                        </div>
                                        <div class="my-auto">
                                            
                                            <p class="card-text mb-0"><?php echo $eventResp['Title']; ?></p>
                                            <p><a href="<?php echo $eventResp['Url']; ?>" target="_blank">Click here for
                                                    more details</a></p>
                                        </div>

                                    </div>
                                    <?php  $limit = 1; }  ?>
                                    <?php $rowEvent = $this->gfa_model->getEventByEmailLimit($limit);
                                        foreach($rowEvent as $rowArrayEvent){
                                        ?>
                                    <div class="meetup-header d-flex align-items-center">
                                    <div class="meetup-day">
                                            <h6 class="mb-0"><?php $dateEvent = date('w', strtotime($rowArrayEvent['start_date']));
                                            echo $this->gfa_model->getDay($dateEvent);  ?>
                                            </h6>
                                            <h5 class="mb-0"><?php echo date('d', strtotime($rowArrayEvent['start_date']));  ?>
                                            </h5>-<h5 class="mb-0"><?php echo date('M', strtotime($rowArrayEvent['start_date']));  ?>
                                            </h5>
                                        </div>
                                        <div class="my-auto">
                                            
                                            <p class="card-text mb-0"><?php echo $rowArrayEvent['title']; ?></p>
                                            <p><a href="<?php echo base_url(); ?>gfa/events/<?php echo $rowArrayEvent['ref_id']; ?>">Click here for
                                                    more details</a></p>
                                        </div>
                                    </div>
                                    <?php }  ?>
                                    <input type="hidden" class="eventId" value="<?php echo (!empty($eventResp['ID']))?$eventResp['ID'] : ""; ?>">
                                    <input type="hidden" class="title" value="<?php echo (!empty($eventResp['Title']))?$eventResp['Title'] : ""; ?>">
                                    <a href="<?php echo base_url('gfa/add_event'); ?>" class="btn btn-primary mt-1">+Add Event</a>
                                    <a href="<?php echo base_url('gfa/manage_event'); ?>" class="btn btn-primary mt-1 me-sm-1">My Events</a>
                                    <a href="<?php echo base_url('gfa/all_events'); ?>" class="btn btn-primary mt-1 me-sm-1">All Events</a>
                                    
                                </div>


                                
                            </div>
                        </div>
                        <!--/ Developer Meetup Card -->





                </section>
                <!-- Dashboard Analytics end -->
                <div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Credit redemption</h1>
          <p><a style="color: #7367F0;" <?php $estore_credit = "https://estore.getfundedafrica.com/sso.php?key=".(!empty($loginkey[0]['LoginKey']))?$loginkey[0]['LoginKey']: ''."&product=buy"; ?> onclick="saveSSOAction('estore_credit', '<?php echo $estore_credit; ?>')">Go to our e-store for investor readiness templates</a></p>
          <p id="credit_message" style="color:green;"></p>
             <!--<input type="text" class="credit" value="<?php //echo $this->admin_model->getCreditAciveSub($email) ?>" >-->
            <input type="hidden" class="credit" value="<?php echo $showCredit ?>" > 
            <input type="hidden" id="email" value="<?php echo $email ?>" >
            <input type="hidden" id="credit" value="<?php echo $credit ?>" >
           <?php if($credit >=15 ){  ?>
          <!--<p>Go to our estore to redeem your credit, we will apply credit automatically to your total checkout order.</p>-->
          <?php if($this->admin_model->getCreditRedeemByEmail($email)[0]['More_Info'] !=''){ 
          
          $redeemArray = $this->admin_model->getCreditRedeemByEmail($email); foreach($redeemArray as $getRedeemInfo){
          
          ?>
         
          <p><strong><?php echo $getRedeemInfo ['More_Info'] ?></strong> </p>
          <hr></hr>
          <?php } } ?>
          <?php }else{  ?>
          
          <p> You can not redeem your credit until you have minimum of <?php detectCurrency(); ?><?php echo detectCurrencyAmount(10500); ?>. Please update your profile to 50% and earn more free credit.</p>
          
         
          <?php }  ?>
         
        </div>
      
         <?php if($credit >=15  ){  ?>
       
      
      <?php
       
      ?>
     
        <!--<button  class="btn btn-primary float-end mt-3" disabled>-->
        <!--  <span class="me-50">Credit Request Pending</span>-->
        <!--  <i data-feather="box"></i>-->
        <!--</button>-->
     
        
        
       <?php 
        //}
      // } else{  ?>
       
       <!--<button  class="btn btn-primary float-end mt-3" disabled>-->
       <!--   <span class="me-50">Credit Request Pending</span>-->
       <!--   <i data-feather="box"></i>-->
       <!-- </button>-->
        
        <?php  //}   ?>
        
       <?php if (empty($this->admin_model->getCreditRedeemByEmail($email)[0]['Credit'])) { ?>
            <?php 
                $date_expire = strtotime('+30 days', time());
                $info = "Your credit of $".$credit." has been applied automatically to your E-store account, you can now purchase one template for free. Click <a style='color: #7367F0;' https://estore.getfundedafrica.com/sso.php?key=".$loginkey[0][LoginKey]."&product=buy  onclick='saveSSOAction('estore_credit', '".$estore_credit."')'>here</a> to login and purchase one template for free. This credit is valid for a month, expires ".date('l jS F Y', $date_expire).".";
            ?>
            <input type="hidden" value="<?php echo $info; ?>" id="credit_redeem_message">
            
           <button  class="btn btn-primary float-end mt-3" onclick="redeem_estore_credit()" id="redeem_btn">
          <span class="me-50 displayRedeem">Redeem</span>
          <i data-feather="box"></i>
        </button>
     <?php       }else{ 
          if($showCredit !=''){
              
           if($showCredit ==0){ echo ''; }else{  
        ?>
        
        <button  class="btn btn-primary float-end mt-3 RedeemCredit" disabled >
          <span class="me-50 displayRedeem">Credit waiting for activation</span>
          <i data-feather="box"></i>
        </button>
      <?php  } } } ?>
      
     
      
    <?php  } else{  ?>
    
    <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
        <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
    
    <a href="<?php echo base_url(); ?>gfa/subscribe" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
      <span class="me-50">Subscribe</span>
      <i data-feather="user"></i>
    </a>
<?php }  ?> 
    <?php  //}else{  ?>
    
    
    <?php //}  ?>
        
   <?php  }  //}  ?>
      </div>
      
    </div>
  </div>
</div>

<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target='_blank'>Click here to visit estore</a></p>-->
        <p>
            <!--Kindly update your profile at least more than 50% for better investor match.-->
            Your profile update is <?php echo $point ?>%, kindly update it to aleast 50% to view list of matched investors.
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
        <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
    
            <a href="<?php echo base_url(); ?>gfa/subscribe" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
            <span class="me-50">Subscribe</span>
            <i data-feather="user"></i>
            </a>
        <?php }  ?> 
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
        <div class="modal fade" id="checkMentorProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
             Your profile update is <?php echo $point ?>%, kindly update it to aleast 50% to view list of matched mentors.
        </p>
        
        <br>
       
        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
     
        <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
    
    <a href="<?php echo base_url(); ?>gfa/subscribe" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
      <span class="me-50">Subscribe</span>
      <i data-feather="user"></i>
    </a>
<?php }  ?> 
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
       
        <div class="modal fade" id="checkHireProfile" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                        <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
                        <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
                        <p>
                            Your profile update is <?php echo $point ?>%, kindly update it to aleast 50% and startup country and industry must be inclusive to hire. 
                        </p>
                        
                        <br>
                    
                        <a href="<?php echo base_url(); ?>gfa/profile" class="btn btn-primary float-end mt-3" >
                        <span class="me-50">Update Profile</span>
                        <i data-feather="user"></i>
                        </a>
                        <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
                    
                            <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
                            <span class="me-50">Subscribe</span>
                            <i data-feather="user"></i>
                            </a>
                        <?php }  ?> 
                
                    </div>
                
                </div>
            </div>
        </div>


        </div>
        
        
      
        <div class="modal fade" id="checkHireSub" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50">
                    <div class="text-center mb-2">
                    <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Hiring</h1>
                    <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
                    <p>
                        You currently have no active subscription, subscribe now to have post jobs and hire professional job seekers.
                    </p>
                    
                    <br>
                
                    <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3" >
                    <span class="me-50">Subscribe</span>
                    <i data-feather="user"></i>
                    </a>
                </div>
                
                </div>
            </div>
        </div>

        <!-- Remsana Modal -->
        


        </div>
        
      </div>
    </div>

        <div class="modal fade" id="checkremsana" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2">
                        <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                        <h1 class="mb-1">Learning</h1>

                        <?php  if($point > 50){ ?>

                        
                            <p>
                                Access rich videos and content on fundraising and many more. Kindly subscribe below to access full courses.
                            </p>
                            
                            <br>
                            
                            <a href="https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3/"   class="btn btn-primary float-end mt-3" >
                                <span class="me-50">Continue</span>
                                <i data-feather="arrow-right"></i>
                            </a>
                        
                            <a href="<?php echo base_url(); ?>gfa/subscribe" class="btn btn-primary float-end mt-3" style="margin-right: 10px">
                                <span class="me-50">Subscribe</span>
                                <i data-feather="user"></i>
                            </a>
                        <?php }else{ ?>

                            <p>
                                <!--Kindly update your profile at least more than 50% for better investor match.-->
                                Your profile update is <?php echo $point ?>%, kindly update it to view courses.
                            </p>
                            
                            <br>
                        
                            <a href="<?php echo base_url('gfa/profile'); ?>" class="btn btn-primary float-end mt-3" >
                            <span class="me-50">Update Profile</span>
                            <i data-feather="user"></i>
                            </a>

                        <?php } ?>

                        
                    </div>

                </div>
            </div>
        </div>
    </div>

        <div class="modal fade" id="investorconnect" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-edit-user" style="max-width: 95%;" >
                <div class="modal-content" style="height:700px;  overflow-y: auto; overflow-x: hidden;">
                    <div class="modal-header bg-transparent">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-5 px-sm-5 pt-50">
                        <div class="text-center mb-2" >
                            <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span>
                            <h1 class="mb-1">Investors</h1>
                            
                                <?php  if($point > 50){ ?>
                                <div id="invest-con-onb" style="display:hidden; margin-top: 20px;">
                                    
                                </div>
                                <div id="invest-con-preload">
                                    <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                </div>
                                <?php }else{ ?>

                                    <p>
                                        <!--Kindly update your profile at least more than 50% for better investor match.-->
                                        Your profile update is <?php echo $point ?>%, kindly update it to connect with investors.
                                    </p>
                                    
                                    <br>
                                
                                    <a href="<?php echo base_url('gfa/profile'); ?>" class="btn btn-primary float-end mt-3" >
                                    <span class="me-50">Update Profile</span>
                                    <i data-feather="user"></i>
                                    </a>

                                <?php } ?>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- END: Content-->
        <script>
          $(function() {


              $(".attendEvent").click(function() {

                  var eventId = $('.eventId').val();
                  var title = $('.title').val();
                  $.ajax({
                      data: {
                          eventId: eventId,
                          title: title
                      },
                      type: "POST",
                      url: "<?php echo base_url('gfa/attendEvent'); ?>",
                      error: function() {
                          $(".attendEvent").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".attendEvent").html('Requesting...');
                          $('.attendEvent').prop("disabled", true);
                      },
                      success: function(data) {

                          $(".attendEvent").html('Enquiry Pending');
                          $('.attendEvent').prop("disabled", true);



                      }

                  });

              });

              $(".RedeemCredit").click(function() {

                  var credit = $('.credit').val();
                  $.ajax({
                      data: {
                          credit: credit
                      },
                      type: "POST",
                      url: "<?php echo base_url('gfa/creditRedeem'); ?>",
                      error: function() {
                          $(".displayRedeem").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".displayRedeem").html('Requesting...');
                      },
                      success: function(data) {


                          $(".displayRedeem").html('Request Pending');
                          $('.RedeemCredit').prop("disabled", true);



                      }

                  });

              });

          });
        </script>


        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>