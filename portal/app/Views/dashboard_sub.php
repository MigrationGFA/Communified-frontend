 <!-- Greetings Card starts -->
 <?php 
        $this->gfa_model = model('App\Models\GfaModel');
        $this->admin_model = model('App\Models\AdminModel');
        
    ?>
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
                                        <h1 class="mb-1 text-white"><?php echo lang('translation.Congratulations'); ?></h1>
                                        <p class="card-text m-auto w-15">
                                        <a href="<?php echo base_url('gfa/profile'); ?>" style="color:#fff;" target="_blank">
                                            You need to complete your integration. Please update your profile for a better user experience.
                                        </a>
                                        </p>


                                        <?php 
                                          
                                        
                                        ?>
                                        <b>
                                            <?php if(!empty($getCurrentSubBasic) || !empty($getCurrentSubPremium) || !empty($getCurrentSubBusiness) ){ ?>
                                            You have an active subscription from
                                            <?php //foreach($startupPaid as $startupPaidArray){  ?>
                                            <?php  echo date('d M, y',strtotime($startupPaid[0]['time_start']));  ?> to
                                            <?php  echo date('d M, y',strtotime($startupPaid[0]['time_end']));  ?>
                                            <?php //}
            
                                      }else{ ?>
                                              <a href="<?php echo base_url('gfa/subscribe'); ?>" title="Subscription" ?
                                                style="color:#fff;"><?php echo lang('translation.No active subscription found click here to activate'); ?>.</a>
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








                                



                                    <a href="<?php echo base_url('gfa/startup_investor'); ?>">

                                        

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
                                                    // $rowArray = 

                                                        echo $this->admin_model->countOnboardingInvestors();
                                                  // $rowArrayExt = $this->admin_model->getAllStartUpNByEmailExtX($email);
                                                  //   echo $this->admin_model->countMatchInvestorDefaultApp($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['OperatingRegions']); ?>
                                                                    <br><?php echo lang('translation.Investors Matched') ?>
                                                                                          </p>
                                                                                      </h2>
                                                                                      
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
                                        $sumPerks = $this->gfa_model->getTotalPerksBySubType("Free"); 
                                        $sumPerks = $sumPerks[0]['total_value'] * 623;
                                        // }   

                                        ?>
                                        <h2 class="fw-bolder mt-1">$<?php echo number_format($sumPerks, 0, '.', ','); ?> 
                                            <?php //detectCurrency(); ?><?php //echo  detectCurrencyAmount($sum*460); ?>
                                        </h2>
                                        <p class="card-text"><?php echo lang('translation.Free perks!'); ?></p>
                                       
                                    </div>
                                    <div id="order-chart"></div>
                                </a>
                            </div>
                        </div>
                        <!-- Orders Chart Card ends -->