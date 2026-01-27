
<!DOCTYPE html>

<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">
  <!-- BEGIN: Head-->
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>
    <link rel="apple-touch-icon" href="<?php echo base_url("public/assets/app-assets/images/ico/apple-icon-120.html"); ?>">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
<!-- BEGIN: Vendor CSS-->
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/calendars/fullcalendar.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/forms/select/select2.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/pickers/flatpickr/flatpickr.min.css"); ?>">
    <!-- END: Vendor CSS-->
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/vendors.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/charts/apexcharts.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/extensions/toastr.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/tables/datatable/dataTables.bootstrap5.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/tables/datatable/responsive.bootstrap5.min.css"); ?>">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/bootstrap.min.css"); ?>">
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/bootstrap-extended.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/colors.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/components.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/themes/dark-layout.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/themes/bordered-layout.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/themes/semi-dark-layout.min.css"); ?>">

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/charts/chart-apex.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/page-pricing.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/extensions/ext-component-toastr.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/app-invoice-list.min.css"); ?>">
    

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/dashboard-ecommerce.min.css"); ?>">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/forms/select/select2.min.css"); ?>">
   
    <!-- END: Page CSS-->
    
    
    
     <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/extensions/ext-component-tree.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/app-file-manager.min.css"); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/app-invoice.min.css"); ?>">
    <!-- END: Page CSS-->
    
    
    
    
    
    <!-- END: Page CSS-->
    <link rel="icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-32x32.png" sizes="32x32" />
    <link rel="icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="https://getfundedafrica.com/gfa/upload/cropped-TG-Thumb-180x180.png" />
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/style.css"); ?>">
    <!-- END: Custom CSS-->
     <script src="<?php echo base_url("public/assets/app-assets/vendors/js/vendors.min.js"); ?>"></script>
      <!-- BEGIN: Page CSS-->
      
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/core/menu/menu-types/vertical-menu.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/forms/pickers/form-flat-pickr.min.css"); ?>">
     <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/vendors/css/pickers/pickadate/pickadate.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/pages/app-calendar.min.css"); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/ssets/app-assets/css/pages/pagination.css"); ?>a">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/plugins/forms/form-validation.css"); ?>">
    <!-- END: Page CSS-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets/app-assets/css/portal-onb.css"); ?>">
    <script src="<?php echo base_url("public/assets/app-assets/js/scripts/pagination.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/app-assets/js/core/api.js"); ?>"></script>
    <style>
  
</style>
  </head>
  <!-- END: Head-->
  <!-- BEGIN: Body-->