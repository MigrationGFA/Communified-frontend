<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $page_title ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?= base_url('public/assets/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="icon" href="<?php echo base_url('public/favicon-nora.png') ?>" sizes="32x32" type="image/png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/datepicker/datepicker3.css ') ?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/datatables/dataTables.bootstrap.css ') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/AdminLTE.min.css ') ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url('public/assets/dist/css/skins/_all-skins.min.css ') ?>">
  <script src="<?php echo base_url('public/assets/plugins/jQuery/jquery-2.2.3.min.js ') ?>"></script>
    <link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/select2/select2.min.css ') ?>">
    <!--<link rel="stylesheet" href="<?php echo base_url('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css ') ?>"> -->
    <link href="<?php echo base_url('public/assets/plugins/quill/quill.snow.css ') ?>" rel="stylesheet">
<script src="<?php echo base_url('public/assets/plugins/quill/quill.js ') ?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
   <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'en',
        includedLanguages: 'fr',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
      
      // Automatically trigger translation to French
      var translateElement = document.querySelector('.goog-te-combo');
      if (translateElement) {
        translateElement.value = 'fr';
        translateElement.dispatchEvent(new Event('change'));
      }
    }
  </script>
  <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <!-- Hide Google Translate Widget -->
  <style>
    .goog-te-banner-frame.skiptranslate {
      display: none !important;
    }
    body {
      top: 0px !important;
    }
    #google_translate_element {
      display: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
   <div id="google_translate_element"></div>