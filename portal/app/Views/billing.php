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
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.Billing & Plans') ?> </h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/'); ?>"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Account Settings') ?></a>
                    </li>
                    <li class="breadcrumb-item active"><?php echo lang('translation.Billing & Plans') ?> 
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          
        </div>
        <div class="content-body">
          <div class="row">
  <div class="col-12">
    

    <!-- billing and plans  -->
<?php   

                
                $subArray = $this->gfa_model->getPaidSubscriber($email);
                
                if(!empty($subArray)){

?>
    <!-- current plan -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title"><?php echo lang('translation.Current plan') ?></h4>
      </div>
      <div class="card-body my-2 py-25">
        <div class="row">
          <div class="col-md-6">
              <?php if(!empty($subArray)) {  ?>
            <div class="mb-2 pb-50">
              <h5><?php echo lang('translation.Your Current Plan is') ?> <strong><?php echo lang('translation.CIPME Premium') ?></strong></h5>
              <span>
                <?php echo lang('translation.Best for founders/SMEs') ?></span>
            </div>
            <div class="mb-2 pb-50">
              <h5><?php echo lang('translation.Active until') ?> <?php echo date('M d,Y', strtotime($subArray[0]['time_end'])) ?></h5>
              <span><?php echo lang('translation.We will send you a notification upon Subscription expiration') ?></span>
            </div>
            
            <?php }else{ ?>
            
             <div class="mb-2 pb-50">
              <h5><?php echo lang('translation.No active subscription') ?></strong></h5>
              
            </div>
            
            <?php }  ?>
            <div class="mb-1">
              <h5><?php detectCurrency(); ?><?php echo detectCurrencyAmount(13800); ?>  <?php echo lang('translation.Per Month') ?> <span class="badge badge-light-primary ms-50"><?php echo lang('translation.Popular') ?></span></h5>
              <span><?php echo lang('translation.Standard plan for Best for founders/SMEs') ?></span>
            </div>
          </div>
           <?php  
                        $today = time();
                        $start = $today - strtotime($subArray[0]['time_start']);
                        $day = 3600*24;
                        $start = ceil($start/$day);
                        
                        
                        $end = strtotime($subArray[0]['time_end']) - strtotime($subArray[0]['time_start']);
                        $end = floor($end/$day);
                        $percentage =  ceil(($start/$end) * 100) ;
                        $expire = strtotime($subArray[0]['time_end']);
                        //$expire = ceil($expire/$day);
                        
                       
                ?>
          <?php if(!empty($subArray)) {  ?>
          <div class="col-md-6">
              <?php if($today > $expire){ ?>
            <div class="alert alert-warning mb-2" role="alert">
              <h6 class="alert-heading"><?php echo lang('translation.We need your attention!') ?></h6>
              <div class="alert-body fw-normal"><?php echo lang('translation.Your plan requires update') ?></div>
              <h5 class="fw-bolder"><?php echo lang('translation.Expired') ?>: <?php echo $expire  ?> <?php echo lang('translation.day(s) ago') ?>. </h5>
            </div>
            <?php }else{  ?> 
            <div class="plan-statistics pt-1">
              <div class="d-flex justify-content-between">
                <h5 class="fw-bolder"><?php echo lang('translation.Days') ?></h5>
               
               
                <h5 class="fw-bolder"><?php echo $start ?> of <?php echo $end ?> <?php echo lang('translation.Day') ?></h5>
              </div>
              <div class="progress">
                <div
                  class="progress-bar w-<?php echo $percentage  ?>"
                  role="progressbar"
                  aria-valuenow="<?php echo $percentage  ?>"
                  aria-valuemin="0"
                  aria-valuemax="100"
                ></div>
              </div>
              <p class="mt-50"><?php echo $end - $start  ?> <?php echo lang('translation.days remaining until your plan requires update') ?></p>
            </div>
            <?php }  ?>
          </div>
          <?php } ?>
          <div class="col-12">
            <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary me-1 mt-1" >
              <?php echo lang('translation.Subscribe') ?>
            </a>
            <!--<button class="btn btn-outline-danger cancel-subscription mt-1">Cancel Subscription</button>-->
          </div>
        </div>
      </div>
    </div>
<?php }  ?>
    <!-- / current plan -->

    <!-- payment methods -->
   
    <!-- / payment methods -->

    <!-- billing address -->
   
    <!-- / billing address -->

    <!-- billing history table -->
   
    <!-- / billing history table -->
    
    <div class="card">
        <div class="table-responsive">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th><?php echo lang('translation.SUBSCRIPTION') ?></th>
            
            <th><i data-feather="trending-up"></i><?php echo lang('translation.PAYMENT STATUS') ?></th>
            <th class="text-truncate"><?php echo lang('translation.DUE DATE') ?></th>
            <th><?php echo lang('translation.AMOUNT') ?></th>
            <!--<th class="cell-fit">Actions</th>-->
          </tr>
        </thead>
        <?php
                 
         $row = $this->gfa_model->getAllSub($email);  
     	$n = 1;
				foreach($row as $rowArray){  
                
                ?> 
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div class="fw-bolder"><?php echo $n++ ; ?></div>
                        
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                     
                      <div>
                        <div class="fw-bolder"><?php echo lang("translation.{$rowArray['subscription']}") ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo lang("translation.{$rowArray['subtype']}") ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        
                      </div>
                     <div class="fw-bolder"><?php echo lang("translation.{$rowArray['payment_status']}")  ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo lang("translation.{$rowArray['status']}"); ?></div>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo date('M d,Y', strtotime($rowArray['time_start']))."-".date('M d,Y', strtotime($rowArray['time_end'])); ?></span>
                     
                    </div>
                  </td>
                  <td><?php detectCurrency(); ?><?php echo $rowArray['amount']; ?></td>
                  
                </tr>
                <?php }  ?>
                
      </table>
      
      </div>
    </div>

    <!--/ billing and plans -->
  </div>
</div>
          <!-- pricing modal  -->

<!-- / pricing modal  -->
          <!-- edit card modal  -->


        </div>
      </div>
    </div>