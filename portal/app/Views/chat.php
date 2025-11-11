<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('public/assets-new')?>/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Chat App</title>    
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
  
    <!-- Favicon -->
    <link rel="apple-touch-icon" href="<?php echo base_url("public/assets/app-assets/images/ico/apple-icon-120.html"); ?>">
    <link rel="icon" type="image/x-icon" href="https://getfundedafrica.com/sme/images/favicon.png">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/fonts/tabler-icons.css"/>
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/css/rtl/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/css/demo.css" />
    
    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/libs/node-waves/node-waves.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/libs/typeahead-js/typeahead.css" /> 
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.css" />

    <!-- Page CSS -->	
	<link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/css/pages/app-chat.css">
	
        <!-- Helpers -->
        <script src="<?= base_url('public/assets-new')?>/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <!--<script src="<?= base_url('public/assets-new')?>/vendor/js/template-customizer.js"></script>-->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= base_url('public/assets-new')?>/js/config.js"></script>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    <style>
    .btn-xs {
        font-size: 0.92rem;
        padding: 0.25rem 0.5rem;
        /* line-height: 1.2; */
    }
</style>
</head>
<body>
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
 
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
    <!-- Content wrapper -->
    <div class="content-wrapper">      
        <input type="hidden" id="getBaseUrl" value="<?=base_url()?>">
        <input type="hidden" id="SenderName" value="<?=$name?>">
        <input type="hidden" id="SenderAcct" value="<?=session()->get('account_type')?>">
    	<!-- <input type="hidden" id="SenderCompany" value="<?//=$company?>"> -->
        <!-- Content -->
        <div class="container-xxl flex-grow-1 container-p-y pt-5 mt-5">        
            <div class="app-chat card overflow-hidden">
                <div class="row g-0">
                    <!-- Chat & Contacts -->
                    <div class="col app-chat-contacts app-sidebar flex-grow-0 overflow-hidden border-end" id="app-chat-contacts">
                    <div class="sidebar-header">
                        
                        <div class="d-flex align-items-center me-3 me-lg-0">
                        <div class="flex-shrink-0 avatar me-3" data-bs-toggle="sidebar" data-overlay="app-overlay-ex" data-target="#app-chat-sidebar-left">
                            <img class="user-avatar rounded-circle cursor-pointer" src="<?= base_url('public/assets-new')?>/img/avatars/default-img.jpg" alt="Avatar">
                        </div>
                        <div class="flex-grow-1 input-group input-group-merge rounded-pill">
                            <span class="input-group-text search-icon" id="basic-addon-search31"><i class="ti ti-search"></i></span>
                            <input type="text" class="form-control chat-search-input" id="searchInput" placeholder="Search..." aria-label="Search..." aria-describedby="basic-addon-search31">
                        </div>
                        <span class="text-primary" id="loadFromDb"></span>
                        </div>
                        <!-- <i class="ti ti-x cursor-pointer d-lg-none d-block position-absolute mt-2 me-1 top-0 end-0" data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i> -->
                        <i id="sidebarCloseToggle" class="ti ti-x cursor-pointer d-lg-none d-block position-absolute mt-2 me-1 top-0 end-0" data-overlay data-bs-toggle="sidebar" data-target="#app-chat-contacts"></i>
                        <div>
                            <small class="text-muted text-capitalize"><?=session()->get('account_type')?></small>
                        </div>
                    </div>
                    <hr class="container-m-nx m-0">
                    <div class="sidebar-body">
                        <ul class="nav nav-pills card-header-pills py-2" role="tablist">
                            <!-- Chats -->
                            <li class="nav-item">
                                <button id="recentChatsTab" type="button" class="nav-link active  btn btn-xs" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-tab-home" aria-controls="navs-pills-tab-home" aria-selected="true"><?php echo lang('translation.Recent Chats') ?></button>
                            </li>
                            <!-- Contacts -->
                            <li class="nav-item">
                                <button id="allContactsTab" type="button" class="nav-link  btn btn-xs" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-tab-profile" aria-controls="navs-pills-tab-profile" aria-selected="false"><?php echo lang('translation.All Contacts') ?></button>
                            </li>
                        </ul>
                        <div class="tab-content p-0">
                          <!-- Chats -->
                          <div class="tab-pane fade show active" id="navs-pills-tab-home" role="tabpanel">
                            <ul class="list-unstyled chat-contact-list" id="chat-list">
                                <!-- Chat items here -->
                            </ul>
                          </div>
                          <!-- Contacts -->
                          <div class="tab-pane fade" id="navs-pills-tab-profile" role="tabpanel">
                            <ul class="list-unstyled chat-contact-list" id="contact-list">
                                <!-- Contact items here -->
                            </ul>
                          </div>
                        </div>
                    </div>
                    </div>
                    <!-- /Chat contacts -->

                    <!-- Chat History -->
                    <div class="col app-chat-history bg-body">
                        <div class="chat-history-wrapper">
                            <div class="chat-history-header border-bottom">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex overflow-hidden align-items-center">
                                <!-- <i class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-contacts"></i> -->
                                <i id="sidebarToggle" class="ti ti-menu-2 ti-sm cursor-pointer d-lg-none d-block me-2" data-bs-toggle="collapse" data-bs-target="#app-chat-contacts"></i>


                                <div class="flex-shrink-0 avatar">
                                    <img src="<?= base_url('public/assets-new')?>/img/avatars/default-img.jpg" alt="Avatar" class="rounded-circle" data-bs-toggle="sidebar" data-overlay data-target="#app-chat-sidebar-right">
                                </div>
                                <div class="chat-contact-info flex-grow-1 ms-2">
                                    <h6 class="m-0" id="currentReceiverName"> </h6>
    								<small class="user-status text-muted" id="currentReceiverAcct"> </small>
                                </div>
                                </div>
                                <div class="d-flex align-items-center">
                                <!-- <i class="ti ti-search cursor-pointer d-sm-block d-none me-3" id="searchIcon"></i> -->
                                </div>
                            </div>
                            </div>
                            <div class="chat-history-body bg-body">
                            <ul class="list-unstyled chat-history" id="chat-history">
                                <!-- Chat messages will be dynamically loaded here -->
                            </ul>
                            </div>
                            <!-- Chat message form -->
                            <div class="chat-history-footer shadow-sm">
                                <form class="form-send-message d-flex justify-content-between align-items-center ">
                                    <input class="form-control message-input border-0 me-3 shadow-none" placeholder="<?php echo lang('translation.Type your message here') ?>">
                                    <div class="message-actions d-flex align-items-center">
                                        <button class="btn btn-primary d-flex send-msg-btn">
                                            <i class="ti ti-send me-md-1 me-0"></i>
                                            <span class="align-middle d-md-inline-block d-none"><?php echo lang('translation.Send') ?></span>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- /Chat History -->
        
                    <div class="app-overlay"></div>
                </div>
            </div>
        </div>
        <!-- / Content -->
        <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->
    <div class="drag-target"></div>
   
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
        const sidebarToggle = document.getElementById("sidebarToggle");
        const sidebarCloseToggle = document.getElementById("sidebarCloseToggle");
        const sidebar = document.querySelector("#app-chat-contacts");

        sidebarToggle.addEventListener("click", function() {
            const sidebarCollapsed = sidebar.classList.contains("collapse");
            if (sidebarCollapsed) {
                sidebar.classList.remove("show");
            } else {
                sidebar.classList.add("show");
            }
        });

        sidebarCloseToggle.addEventListener("click", function() {
            const sidebarCollapsed = sidebar.classList.contains("show");
            if (sidebarCollapsed) {
                sidebar.classList.remove("show");
            } else {
                sidebar.classList.add("show");
            }
        });
    });
    </script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/popper/popper.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/js/bootstrap.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/node-waves/node-waves.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/hammer/hammer.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/i18n/i18n.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="<?= base_url('public/assets-new')?>/vendor/js/menu.js"></script>
    
    <!-- endbuild -->
    
    <!-- Vendors JS -->
    <script src="<?= base_url('public/assets-new')?>/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <!-- Main JS -->
    <script src="<?= base_url('public/assets-new')?>/js/main.js"></script>
    <!-- Page JS -->
    <script src="<?= base_url('public/assets-new')?>/js/app-chat.js" defer></script>
    
</body>

</html>
