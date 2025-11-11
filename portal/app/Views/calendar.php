<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="<?= site_url('public/assets-new')?>/" data-template="vertical-menu-template">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Meeting Scheduler</title>
  
  <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
  <!-- End Google Tag Manager -->
  
  <!-- Favicon -->
  <!--<link rel="icon" type="image/x-icon" href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />-->
  <link rel="apple-touch-icon" href="<?php echo base_url("public/assets/app-assets/images/ico/apple-icon-120.html"); ?>">
  <link rel="icon" type="image/x-icon" href="https://getfundedafrica.com/sme/images/favicon.png">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/">
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

  <!-- Icons -->
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/fonts/tabler-icons.css"/>
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/fonts/flag-icons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/css/demo.css" />
  
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/typeahead-js/typeahead.css" /> 
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/fullcalendar/fullcalendar.css" />
  <!-- <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/flatpickr/flatpickr.css" /> -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/quill/editor.css" />
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/libs/%40form-validation/umd/styles/index.min.css" />

  <!-- Page CSS -->
    
  <link rel="stylesheet" href="<?= site_url('public/assets-new')?>/vendor/css/pages/app-calendar.css" />


  <!-- Helpers -->
  <script src="<?= site_url('public/assets-new')?>/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!-- <script src="<?//= site_url('public/assets-new')?>/vendor/js/template-customizer.js"></script> -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="<?= site_url('public/assets-new')?>/js/config.js"></script>
  <script>
    function goBack() {
      window.history.back();
    }
  </script>
    
</head>

<body>

  <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<!-- <div class="layout-wrapper layout-content-navbar"> -->
  <!-- <div class="layout-container"> -->

    <!-- Layout container -->
    <!-- <div class="layout-page"> -->
         <!-- Navbar -->

<nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">

<div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
    <ul class="navbar-nav flex-row align-items-center ms-auto">
        <li class="nav-item">
            <a class="nav-link" href="javascript:void(0);" onclick="goBack()">
                <i class="ti ti-arrow-left ti-md text-primary"></i> 
                <span class="text-primary"><?php echo lang('translation.Back') ?></span>
            </a>
        </li>
    </ul>
</div>

</nav>
<!-- / Navbar -->

      <!-- Content wrapper -->
      <!-- <div class="content-wrapper"> -->

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y pt-5 mt-5">

<input type="hidden" id="eventFromDB" value="<?= htmlspecialchars(json_encode($events))?>">
<input type="hidden" id="getBaseUrl" value="<?=base_url()?>">
<input type="hidden" id="getHost" value="<?=$email?>">

<div class="card app-calendar-wrapper">
  <div class="row g-0">
    <!-- Calendar Sidebar -->
    <div class="col app-calendar-sidebar" id="app-calendar-sidebar">
      <div class="border-bottom p-4 my-sm-0 mb-3">
        <div class="d-grid">
          <button class="btn btn-primary btn-toggle-sidebar" data-bs-toggle="offcanvas" data-bs-target="#addEventSidebar" aria-controls="addEventSidebar">
            <i class="ti ti-plus me-1"></i>
            <span class="align-middle"><?php echo lang('translation.Schedule Meeting') ?></span>
          </button>
        </div>
      </div>
      <div class="p-3">
        <!-- inline calendar (flatpicker) -->
        <div class="inline-calendar"></div>

        <hr class="container-m-nx mb-4 mt-3">

        <!-- Filter -->
        <div class="mb-3 ms-3">
          <small class="text-small text-muted text-uppercase align-middle"><?php echo lang('translation.Filter') ?></small>
        </div>

        <div class="form-check mb-2 ms-3">
          <input class="form-check-input select-all" type="checkbox" id="selectAll" data-value="all" checked>
          <label class="form-check-label" for="selectAll"><?php echo lang('translation.View All') ?></label>
        </div>

        <div class="app-calendar-events-filter ms-3">
          <div class="form-check form-check-danger mb-2">
            <input class="form-check-input input-filter" type="checkbox" id="select-personal" data-value="personal" checked>
            <label class="form-check-label" for="select-personal"><?php echo lang('translation.Personal') ?></label>
          </div>
          <div class="form-check mb-2">
            <input class="form-check-input input-filter" type="checkbox" id="select-business" data-value="business" checked>
            <label class="form-check-label" for="select-business"><?php echo lang('translation.Business') ?></label>
          </div>
          <div class="form-check form-check-warning mb-2">
            <input class="form-check-input input-filter" type="checkbox" id="select-family" data-value="family" checked>
            <label class="form-check-label" for="select-family"><?php echo lang('translation.Family') ?></label>
          </div>
          <div class="form-check form-check-success mb-2">
            <input class="form-check-input input-filter" type="checkbox" id="select-holiday" data-value="holiday" checked>
            <label class="form-check-label" for="select-holiday"><?php echo lang('translation.Holiday') ?></label>
          </div>
          <div class="form-check form-check-info">
            <input class="form-check-input input-filter" type="checkbox" id="select-etc" data-value="etc" checked>
            <label class="form-check-label" for="select-etc"><?php echo lang('translation.ETC') ?></label>
          </div>
        </div>
      </div>
    </div>
    <!-- /Calendar Sidebar -->

    <!-- Calendar & Modal -->
    <div class="col app-calendar-content">
      <div class="card shadow-none border-0">
        <div class="card-body pb-0">
          <!-- FullCalendar -->
          <div id="calendar"></div>
        </div>
      </div>
      <div class="app-overlay"></div>
      <!-- FullCalendar Offcanvas -->
      <div class="offcanvas offcanvas-end event-sidebar" tabindex="-1" id="addEventSidebar" aria-labelledby="addEventSidebarLabel">
        <div class="offcanvas-header my-1">
          <h5 class="offcanvas-title" id="addEventSidebarLabel"><?php echo lang('translation.Schedule Meeting') ?></h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body pt-0">
          <form class="event-form pt-0" id="eventForm" onsubmit="return false">
            <div class="mb-3">
              <label class="form-label" for="eventTitle"><?php echo lang('translation.Title') ?></label>
              <input type="text" class="form-control" id="eventTitle" name="eventTitle" placeholder="<?php echo lang('translation.Title') ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventLabel"><?php echo lang('translation.Label') ?></label>
              <select class="select2 select-event-label form-select" id="eventLabel" name="eventLabel">
                <option data-label="primary" value="Business" selected><?php echo lang('translation.Business') ?></option>
                <option data-label="danger" value="Personal"><?php echo lang('translation.Personal') ?></option>
                <option data-label="warning" value="Family"><?php echo lang('translation.Family') ?></option>
                <option data-label="success" value="Holiday"><?php echo lang('translation.Holiday') ?></option>
                <option data-label="info" value="ETC"><?php echo lang('translation.ETC') ?></option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventStartDate"><?php echo lang('translation.Start Date') ?></label>
              <input type="text" class="form-control" id="eventStartDate" name="eventStartDate" placeholder="<?php echo lang('translation.Start Date') ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventEndDate"><?php echo lang('translation.End Date') ?></label>
              <input type="text" class="form-control" id="eventEndDate" name="eventEndDate" placeholder="<?php echo lang('translation.End Date') ?>" />
            </div>
            <div class="mb-3 position-relative d-none">
              <label class="form-label" for="eventURL"><?php echo lang('translation.Meeting URL') ?></label>
              <div class="input-group">
                  <input type="url" readonly class="form-control" id="eventURL" name="eventURL" value="" />
                  <button class="btn btn-sm btn-outline-primary" type="button" id="copyButton" title="Copy URL">
                      <i class="fas fa-copy"></i>
                  </button>
              </div>
              <span id="copyMessage" class="text-muted mt-2"></span>
          </div>

            <div class="mb-3 select2-primary">
              <label class="form-label" for="eventGuests"><?php echo lang('translation.Add Guests') ?></label>
              <select class="select2 select-event-guests form-select" id="eventGuests" name="eventGuests" multiple>
                <?php foreach($guests as $guest) {
                    if ($guest['user_email'] != $email) { 
                ?>
                   <option value="<?=$guest['user_email']?>"><?=$guest['user_name']?> (<?=$guest['Startup_Company_Name'] ?? 'N/A'?>)</option>
                <?php }} ?>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventLocation"><?php echo lang('translation.Location') ?></label>
              <input type="text" class="form-control" id="eventLocation" name="eventLocation" placeholder="<?php echo lang('translation.Location') ?>" />
            </div>
            <div class="mb-3">
              <label class="form-label" for="eventDescription"><?php echo lang('translation.Description') ?></label>
              <textarea class="form-control" name="eventDescription" id="eventDescription"></textarea>
            </div>
            <div class="mb-3 d-flex justify-content-sm-between justify-content-start my-4">
              <div>
                <button type="submit" class="btn btn-sm btn-primary btn-add-event me-sm-3 me-1"><?php echo lang('translation.Add') ?></button>
                <button type="reset" class="btn btn-sm  btn-label-secondary btn-cancel me-sm-0 me-1" data-bs-dismiss="offcanvas"><?php echo lang('translation.Cancel') ?></button>
              </div>
              <div><button class="btn btn-sm btn-label-danger btn-delete-event d-none"><?php echo lang('translation.Delete') ?></button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- /Calendar & Modal -->
  </div>
</div>

          </div>
          <!-- / Content -->

          
          

<!-- Footer -->
<!-- <footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © <script>
        document.write(new Date().getFullYear())

        </script>
        , made with ❤️ by <a href="https://pixinvent.com/" target="_blank" class="fw-medium">Pixinvent</a>
      </div>
      <div class="d-none d-lg-inline-block">
        
        <a href="https://themeforest.net/licenses/standard" class="footer-link me-4" target="_blank">License</a>
        <a href="https://1.envato.market/pixinvent_portfolio" target="_blank" class="footer-link me-4">More Themes</a>
        
        <a href="https://demos.pixinvent.com/vuexy-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>
        
        
        <a href="https://pixinvent.ticksy.com/" target="_blank" class="footer-link d-none d-sm-inline-block">Support</a>
        
      </div>
    </div>
  </div>
</footer> -->
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
      <!-- </div> -->
      <!-- / Layout page -->
    <!-- </div> -->

    
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  <!-- </div> -->
  <!-- / Layout wrapper -->

  
  <!-- <div class="buy-now">
    <a href="https://1.envato.market/vuexy_admin" target="_blank" class="btn btn-danger btn-buy-now">Buy Now</a>
  </div> -->
  
<script>
    // const copyButton = document.getElementById('copyButton');
    // const copyURL = document.getElementById('eventURL');
    // const copyMessage = document.getElementById('copyMessage');

    // copyButton.addEventListener('click', function () {
    //     copyURL.select();
    //     copyURL.setSelectionRange(0, 99999); // For mobile devices

    //     try {
    //         document.execCommand('copy');
    //         copyMessage.textContent = 'Copié';
    //         setTimeout(() => {
    //             copyMessage.textContent = '';
    //         }, 3000);
    //     } catch (err) {
    //         console.error('Failed to copy: ', err);
    //     }
    // });
</script> 
  

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/popper/popper.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/js/bootstrap.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/node-waves/node-waves.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/hammer/hammer.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/i18n/i18n.js"></script>
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/typeahead-js/typeahead.js"></script>
   <script src="<?= site_url('public/assets-new')?>/vendor/js/menu.js"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?= site_url('public/assets-new')?>/vendor/libs/fullcalendar/fullcalendar.js"></script>
<script src="<?= site_url('public/assets-new')?>/vendor/libs/%40form-validation/umd/bundle/popular.min.js"></script>
<script src="<?= site_url('public/assets-new')?>/vendor/libs/%40form-validation/umd/plugin-bootstrap5/index.min.js"></script>
<script src="<?= site_url('public/assets-new')?>/vendor/libs/%40form-validation/umd/plugin-auto-focus/index.min.js"></script>
<script src="<?= site_url('public/assets-new')?>/vendor/libs/select2/select2.js"></script>
<!-- <script src="<?= site_url('public/assets-new')?>/vendor/libs/flatpickr/flatpickr.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/fr.js"></script>
<script src="<?= site_url('public/assets-new')?>/vendor/libs/moment/moment.js"></script>

  <!-- Main JS -->
  <script src="<?= site_url('public/assets-new')?>/js/main.js"></script>
  

  <!-- Page JS -->
  <script src="<?= site_url('public/assets-new')?>/js/app-calendar-events.js"></script>
<script src="<?= site_url('public/assets-new')?>/js/app-calendar.js"></script>
  
</body>


<!-- Mirrored from demos.pixinvent.com/vuexy-html-admin-template/html/vertical-menu-template/app-calendar.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 15 Nov 2023 07:15:25 GMT -->
</html>

<!-- beautify ignore:end -->

