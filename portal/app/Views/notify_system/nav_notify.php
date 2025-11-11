<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
<body>

  
  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar  layout-without-menu">
  <div class="layout-container">

    

    <!-- Layout container -->
    <div class="layout-page">
      
      



<!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
  
 <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0   d-xl-none ">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
          <i class="ti ti-menu-2 ti-sm"></i>
        </a>
      </div>
      

      <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">

        
        <!-- Search -->
        <!--<div class="navbar-nav align-items-center">-->
        <!--  <div class="nav-item navbar-search-wrapper mb-0">-->
        <!--    <a class="nav-item nav-link search-toggler d-flex align-items-center px-0" href="javascript:void(0);">-->
        <!--      <i class="ti ti-search ti-md me-2"></i>-->
        <!--      <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>-->
        <!--    </a>-->
        <!--  </div>-->
      
      
        <!--</div>-->
        <!-- /Search -->
        

        <ul class="navbar-nav flex-row align-items-center ms-auto">
          
          <!-- Language -->
          <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
            <button id="backButton" class="btn btn-primary"><?php echo lang('translation.Back') ?></button>
          </li>

          <script>
            document.getElementById('backButton').addEventListener('click', function() {
  window.history.back();
});

          </script>

          <!--/ Language -->

          <!-- Quick links  -->
          <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
            <!--<a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">-->
            <!--  <i class='ti ti-layout-grid-add ti-md'></i>-->
            <!--</a>-->
            <div class="dropdown-menu dropdown-menu-end py-0">
              <div class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto">CIPME Apps</h5>
                  <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i class="ti ti-sm ti-apps"></i></a>
                </div>
              </div>
              <div class="dropdown-shortcuts-list scrollable-container">
                <div class="row row-bordered overflow-visible g-0">
            <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-user fs-4"></i>
                    </span>
                     <a href="<?php echo base_url("gfa/dashboard") ?>" class="stretched-link">Learning</a>
                    <small class="text-muted mb-0">Dashboard</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-calendar fs-4"></i>
                    </span>
                    <a href="http://fundraisercrm.io" class="stretched-link">FundraiserCRM</a>
                    <small class="text-muted mb-0">Connect & Engage</small>
                  </div>
                  
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-users fs-4"></i>
                    </span>
                    <a href="https://marketplace.getfundedafrica.com/" target="_blank" class="stretched-link">Marketplace</a>
                    <small class="text-muted mb-0">Buy & Sell Services</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-lock fs-4"></i>
                    </span>
                    <a href="https://remsana.getfundedafrica.com/" target="_blank" class="stretched-link">Remsana</a>
                    <small class="text-muted mb-0">Fundrasing Courses</small>
                  </div>
                </div>
                <div class="row row-bordered overflow-visible g-0">
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-chart-bar fs-4"></i>
                    </span>
                    <a href="https://getfundedafrica.com/events/all/" target="_blank" class="stretched-link">Events</a>
                    <small class="text-muted mb-0">Add & Attend Events</small>
                  </div>
                  <div class="dropdown-shortcuts-item col">
                    <span class="dropdown-shortcuts-icon rounded-circle mb-2">
                      <i class="ti ti-settings fs-4"></i>
                    </span>
                    <a href="https://estore.getfundedafrica.com/" target="_blank" class="stretched-link">E-Store</a> 
                    <small class="text-muted mb-0">Buy & Product</small>
                  </div>
                </div>
                <!--<div class="row row-bordered overflow-visible g-0">-->
                <!--  <div class="dropdown-shortcuts-item col">-->
                <!--    <span class="dropdown-shortcuts-icon rounded-circle mb-2">-->
                <!--      <i class="ti ti-help fs-4"></i>-->
                <!--    </span>-->
                <!--    <a href="#" class="stretched-link">Workspace by GFA</a>-->
                <!--    <small class="text-muted mb-0">Great Space to Work</small>-->
                <!--  </div>-->
                <!--  <div class="dropdown-shortcuts-item col">-->
                <!--    <span class="dropdown-shortcuts-icon rounded-circle mb-2">-->
                <!--      <i class="ti ti-square fs-4"></i>-->
                <!--    </span>-->
                <!--    <a href="#" class="stretched-link">Jobs</a>-->
                <!--    <small class="text-muted mb-0">Apply & Post for Jobs</small>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
            </div>
          </li>
          <!-- Quick links -->

          <!-- Notification -->
          <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
            <!-- <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
              <i class="ti ti-bell ti-md"></i>
              <span class="badge bg-danger rounded-pill badge-notifications">0</span>
            </a> -->
            <ul class="dropdown-menu dropdown-menu-end py-0">
              <li class="dropdown-menu-header border-bottom">
                <div class="dropdown-header d-flex align-items-center py-3">
                  <h5 class="text-body mb-0 me-auto"><?php echo lang('translation.Notification') ?></h5>
                  <a href="javascript:void(0)" class="dropdown-notifications-all text-body" data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i class="ti ti-mail-opened fs-4"></i></a>
                </div>
              </li>
              <li class="dropdown-notifications-list scrollable-container">
                <ul class="list-group list-group-flush">
                  <!--<li class="list-group-item list-group-item-action dropdown-notifications-item">-->
                   
                  <!--      <div class="d-flex">-->
                            
                  <!--    <div class="flex-shrink-0 me-3">-->
                  <!--      <div class="avatar">-->
                  <!--        <span class="avatar-initial rounded-circle bg-label-success"><i class="ti ti-chart-pie"></i></span>-->
                  <!--      </div>-->
                  <!--    </div>-->
                  <!--    <a href="<?php echo base_url("gfa/notify") ?>"><div class="flex-grow-1">-->
                  <!--      <h6 class="mb-1">Information Desk</h6>-->
                  <!--      <p class="mb-0">Survey on services for your growth</p>-->
                  <!--      <small class="text-muted"><?php  $timestamp = strtotime('2023-12-22 17:00:00'); echo $this->gfa_model->timeAgo($timestamp); ?></small>-->
                  <!--    </div></a>-->
                  <!--    <div class="flex-shrink-0 dropdown-notifications-actions">-->
                  <!--      <a href="javascript:void(0)" class="dropdown-notifications-read"><span class="badge badge-dot"></span></a>-->
                  <!--      <a href="javascript:void(0)" class="dropdown-notifications-archive"><span class="ti ti-x"></span></a>-->
                  <!--    </div>-->
                      
                  <!--  </div>-->
                    
                  <!--</li>-->
                 </ul>
              </li>
              <!--<li class="dropdown-menu-footer border-top">-->
              <!--  <a href="javascript:void(0);" class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40 mb-1 align-items-center">-->
              <!--    View all notifications-->
              <!--  </a>-->
              <!--</li>-->
            </ul>
          </li>
          <!--/ Notification -->

          <!-- User -->
          <?php if(empty($getPhoto)){
          $showPhoto = "public/assets-new/img/avatars/default-img.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      } ?>
          <li class="nav-item navbar-dropdown dropdown-user dropdown">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
              <div class="avatar avatar-online">
                <img src="<?php echo base_url("{$showPhoto}") ?>" alt class="h-auto rounded-circle">
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
              <li>
                <a class="dropdown-item" href="#">
                  <div class="d-flex">
                    <div class="flex-shrink-0 me-3">
                      <div class="avatar avatar-online">
           
                        <img src="<?php echo base_url("{$showPhoto}") ?>" alt class="h-auto rounded-circle">
                      </div>
                    </div>
                    <div class="flex-grow-1">
                      <span class="fw-semibold d-block"><?php //echo $StartupArray[0]['Primary_Contact_Name']  ?></span>
                      <small class="text-muted"><?php //echo $StartupArray[0]['Startup_Company_Name']  ?></small>
                    </div>
                  </div>
                </a>
              </li>
              <!--<li>-->
              <!--  <div class="dropdown-divider"></div>-->
              <!--</li>-->
              <!--<li>-->
              <!--  <a class="dropdown-item" href="<?php echo base_url('gfa/profile'); ?>">-->
              <!--    <i class="ti ti-user-check me-2 ti-sm"></i>-->
              <!--    <span class="align-middle">My Profile</span>-->
              <!--  </a>-->
              <!--</li>-->
         
        <!--<li>-->
     <!--           <a class="dropdown-item" href="<?php echo base_url('gfa/subscribe'); ?>">-->
     <!--             <i class="ti ti-currency-dollar me-2 ti-sm"></i>-->
     <!--             <span class="align-middle">Subscribe</span>-->
     <!--           </a>-->
     <!--         </li>-->
        <!--<li>-->
     <!--           <a class="dropdown-item" href="<?php echo base_url('gfa/billing'); ?>">-->
     <!--             <span class="d-flex align-items-center align-middle">-->
     <!--               <i class="flex-shrink-0 ti ti-credit-card me-2 ti-sm"></i>-->
     <!--               <span class="flex-grow-1 align-middle">Billing</span>-->
     <!--               </span>-->
     <!--           </a>-->
     <!--         </li>-->
       
         <!--<li>-->
      <!--          <a class="dropdown-item" href="#<?php echo base_url('gfa/invite_users'); ?>">-->
      <!--            <i class="ti ti-user me-2 ti-sm"></i>-->
      <!--            <span class="align-middle">Invite Users</span>-->
      <!--          </a>-->
      <!--        </li>-->
             
             
      <!--        <li>-->
      <!--          <div class="dropdown-divider"></div>-->
      <!--        </li>-->
      <!--        <li>-->
      <!--          <a class="dropdown-item" href="<?php echo base_url(''); ?>">-->
      <!--            <i class="ti ti-lifebuoy me-2 ti-sm"></i>-->
      <!--            <span class="align-middle">Help</span>-->
      <!--          </a>-->
      <!--        </li>-->
      <!--        <li>-->
      <!--          <a class="dropdown-item" href="<?php echo base_url(''); ?>">-->
      <!--            <i class="ti ti-help me-2 ti-sm"></i>-->
      <!--            <span class="align-middle">FAQ</span>-->
      <!--          </a>-->
      <!--        </li>-->
              
              <li>
                <div class="dropdown-divider"></div>
              </li>
              <li>
                <a class="dropdown-item" href="<?php echo base_url('gfa/signoutAction'); ?>" target="_self">
                  <i class="ti ti-logout me-2 ti-sm"></i>
                  <span class="align-middle">Log Out</span>
                </a>
              </li>
            </ul>
          </li>
          <!--/ User -->
        </ul>
      </div>

      
      <!-- Search Small Screens -->
      <div class="navbar-search-wrapper search-input-wrapper  d-none">
        <input type="text" class="form-control search-input container-xxl border-0" placeholder="Search..." aria-label="Search...">
        <i class="ti ti-x ti-sm search-toggler cursor-pointer"></i>
      </div>
  

  

      
      

      
      

     
      
  
</nav>

<!-- / Navbar -->

 <div class="content-wrapper">
