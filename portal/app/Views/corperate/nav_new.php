<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
 <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
      <div class="navbar-container d-flex content">
        <div class="bookmark-wrapper d-flex align-items-center">
          
          
          
        </div>
        <ul class="nav navbar-nav align-items-center ms-auto">
          <li class="nav-item">
    <button id="backButton" class="btn btn-success btn-sm"> <i data-feather="circle"></i>< 
        <?php echo lang('translation.Back') ?>
    </button>
</li>

<script>
    // Check if there is no history to go back to
    if (history.length <= 1) {
        // Hide the back button
        document.getElementById('backButton').style.display = 'none';
    }

    // Add event listener for the back button
    document.getElementById('backButton').addEventListener('click', function() {
        window.history.back();
    });
</script>
          <!--<li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a></li>-->
          <!--<li class="nav-item nav-search"><a class="nav-link nav-link-search"><i class="ficon" data-feather="search"></i></a>
            <div class="search-input">
              <div class="search-input-icon"><i data-feather="search"></i></div>
              <input class="form-control input" type="text" placeholder="Explore GFA..." tabindex="-1" data-search="search">
              <div class="search-input-close"><i data-feather="x"></i></div>
              <ul class="search-list search-list-main"></ul>
            </div>
          </li>-->
         
          <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link" id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="user-nav d-sm-flex d-none"><span class="user-name fw-bolder">
                  
                  <?php 
                  
                  
                 // if(empty($account_type)){
                 //     echo 'Session'; //$this->gfa_model->getOldStartUpDetails($email)[0]['name']; 
                 // }else{
                     //echo $this->admin_model->getAllMentorByEmail($email)[0]['Mentor_name'];
                  // }
                ?>  
              </span><span class="user-status">
                  
                  <?php  if(empty($account_type)){ echo "TIME OUT"; }else { echo strtoupper($this->gfa_model->getCorperateDetails($email)[0]['Corporate_Name']); } ?>
              <?php  
     
      $getPhoto =  $this->gfa_model->getPhotoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
      

      ?>
              </span></div><span class="avatar"><img class="round" src="<?php echo base_url().$showPhoto ?>" alt="avatar" height="40" width="40"><span class="avatar-status-online"></span></span></a>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user"><a class="dropdown-item" href="<?php echo base_url(); ?>gfa/profile_corperate"><i class="me-50" data-feather="user"></i><?php echo lang('translation.Profile') ?></a>
        
            <?php if($admin_access=='admin' || $admin_access=='sub-admin'){ echo '';}else{ ?>
            <!-- <a class="dropdown-item" href="<?php echo base_url(); ?>gfa/startup_profile_corperate"><i class="me-50" data-feather="credit-card"></i><?php echo lang('translation.Add Startup/SME') ?></a> -->
            <a class="dropdown-item" href="<?php echo base_url(); ?>gfa/invite_user"><i class="me-50" data-feather="credit-card"></i><?php echo lang('translation.Invite Admin') ?></a>
            <a class="dropdown-item" href="<?php echo base_url(); ?>gfa/manage_user"><i class="me-50" data-feather="credit-card"></i><?php echo lang('translation.Manage Admin') ?>/a>
            <?php }   ?>
              <div class="dropdown-divider"></div><!--<a class="dropdown-item" href="#"><i class="me-50" data-feather="settings"></i> Settings</a>-->
              <!--<a class="dropdown-item" href="<?php echo base_url(); ?>gfa/subscribe"><i class="me-50" data-feather="credit-card"></i>Subscription</a>-->
              <!--<a class="dropdown-item" href="<?php echo base_url(); ?>gfa/billing"><i class="me-50" data-feather="credit-card"></i>Billing</a>-->
              <!--<a class="dropdown-item" href="#"><i class="me-50" data-feather="help-circle"></i> FAQ</a>--><a class="dropdown-item" href="<?php echo base_url(); ?>gfa/signoutAction"><i class="me-50" data-feather="power"></i> <?php echo lang('translation.Logout') ?></a>
            </div>
          </li>
        </ul>
      </div>
    </nav>