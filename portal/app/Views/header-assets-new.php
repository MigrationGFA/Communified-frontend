<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed " dir="ltr" data-theme="theme-default" data-assets-path="<?php echo base_url('public/assets-new/'); ?>" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title><?php if(!empty($page_title)){ echo $page_title; } ?></title>

    
    <meta name="description" content="Find the right investors for your startup. Connect with angel investors, venture capitalists, and more.">
    <meta name="keywords" content="investor finder, startup investors, angel investors, venture capitalists">
    <meta name="author" content="Your Investor Finder App">
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Investor Finder App">
    <meta property="og:description" content="Find the right investors for your startup. Connect with angel investors, venture capitalists, and more.">
    <meta property="og:image" content="https://investorsfinder.getfundedafrica.com/public/assets-new/img/gfa-logo.png">
    <meta property="og:url" content="https://investorsfinder.getfundedafrica.com/">
    <meta property="og:type" content="website">
        <!-- Canonical SEO -->
    <link rel="canonical" href="https://1.envato.market/vuexy_admin">
    
    
    <!-- Favicon -->
    <link rel="icon" href="https://getfundedafrica.com/images/fav.png" sizes="16x16" type="image/png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">

    <!-- Icons -->
   <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/fonts/fontawesome.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/fonts/tabler-icons.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/fonts/flag-icons.css'); ?>" />

     <!-- Core CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/css/rtl/core.css'); ?>" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/css/rtl/theme-default.css'); ?>" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/css/demo.css'); ?>" />
    
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/css/app-file-manager.min.css'); ?>">
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/perfect-scrollbar/perfect-scrollbar.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/node-waves/node-waves.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/typeahead-js/typeahead.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/bs-stepper/bs-stepper.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/bootstrap-select/bootstrap-select.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/css/pages/app-chat.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/select2/select2.css'); ?>" />
<link rel="stylesheet" href="<?php echo base_url('public/assets-new/vendor/libs/formvalidation/dist/css/formValidation.min.css'); ?>" /> 

    <!-- Page CSS -->
    
    <!-- Helpers -->
    <script src="<?php echo base_url('public/assets-new/vendor/js/helpers.js'); ?>"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="<?php //echo base_url('public/assets-new/vendor/js/template-customizer.js'); ?>"></script>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?php echo base_url('public/assets-new/js/config.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets-new/vendor/libs/jquery/jquery.js'); ?>"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url("public/assets-new/vendor/css/pages/pagination.css"); ?>">
    <script src="<?php echo base_url("public/assets-new/vendor/js/pagination.js"); ?>"></script>
    <script src="<?php echo base_url("public/assets/app-assets/js/core/api.js"); ?>"></script>
     <link href="//amp.azure.net/libs/amp/latest/skins/amp-default/azuremediaplayer.min.css" rel="stylesheet">
	<script src= "//amp.azure.net/libs/amp/latest/azuremediaplayer.min.js"></script>
     <script src="<?php echo base_url('public/assets-new/js/app-chat.js'); ?>"></script>
    <style>
       

        .comments-section {
            max-width: 100%;
            margin: 0 0 10px 0;
        }

        .comment {
            background-color: #f2f2f2;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .comment .user {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment .timestamp {
            font-size: 0.8em;
            color: #666;
        }

        .comment-form {
            margin-top: 20px;
        }

        .comment-form textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .comment-form button {
            padding: 8px 15px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
		button {
			cursor: pointer;
		}
		/*Initial style sort*/
		.tablemanager th.sorterHeader {
			cursor: pointer;
		}
		.tablemanager th.sorterHeader:after {
			content: " \f0dc";
			font-family: "FontAwesome";
		}
		/*Style sort desc*/
		.tablemanager th.sortingDesc:after {
			content: " \f0dd";
			font-family: "FontAwesome";
		}
		/*Style sort asc*/
		.tablemanager th.sortingAsc:after {
			content: " \f0de";
			font-family: "FontAwesome";
		}
		/*Style disabled*/
		.tablemanager th.disableSort {

		}
		#for_numrows {
			padding: 10px;
			float: left;
		}
		#for_filter_by {
			padding: 10px;
			float: right;
		}
		#pagesControllers {
			display: block;
			text-align: center;
		}
 /* CSS to disable text selection */
        body {
            -webkit-user-select: none; /* Safari */
            -moz-user-select: none; /* Firefox */
            -ms-user-select: none; /* Internet Explorer/Edge */
            user-select: none; /* Standard */
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </head>