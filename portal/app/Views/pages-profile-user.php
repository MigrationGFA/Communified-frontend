<!DOCTYPE html>
<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr" data-theme="theme-default" data-assets-path="<?= base_url('public/assets-new')?>/" data-template="vertical-menu-template">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <title>Startup Details</title>

    <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      '../../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-5J3LMKC');</script>
    <!-- End Google Tag Manager -->
    
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
    
    <!-- Page CSS -->
    <link rel="stylesheet" href="<?= base_url('public/assets-new')?>/vendor/css/pages/page-profile.css" />
    <script src="<?= base_url('public/assets-new')?>/js/config.js"></script>
    <style>
        .content-list1 {
            max-height: 400px;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .content-list2 {
            max-height: 400px;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .content-list3 {
            max-height: 400px;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        .content-list4 {
            max-height: 400px;
            overflow: hidden;
            transition: max-height 0.3s ease-out;
        }
        /*.read-more-btn4 {*/
        /*    display: none;*/
        /*    cursor: pointer;*/
        /*}*/
    </style>
</head>

<body>
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <!-- Layout wrapper -->
<div class="layout-wrapper layout-content-navbar ">
  <div class="layout-container">
    <div class="container-xxl flex-grow-1 container-p-y">
        
        <!-- Header -->
        <div class="row">
          <div class="col-12">
            <div class="card mb-4">
              <div class="user-profile-header-banner">
                <img src="<?=base_url()?>public/assets/images/business-cipme.png" alt="Banner image" class="rounded-top">
              </div>
              <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
                <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
                  <img id="switchImage" src="<?=base_url()?>uploads/files/default-avatar.jpg" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
                </div>
                <div class="flex-grow-1 mt-3 mt-sm-5">
                  <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
                    <div class="user-profile-info">
                      <h4><?=$details[0]['Startup_Company_Name']?></h4>
                      <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
    <li class="list-inline-item d-flex gap-1">
        <i class='ti ti-map-pin'></i> <?=$details[0]['State']?>, <?=$details[0]['Country']?>
    </li>
    <li class="list-inline-item d-flex gap-1">
        <i class='ti ti-calendar'></i><!--Rejoint en avril 2021--> Fondée <?=$details[0]['Date_Founded']?> 
    </li>
    <li class="list-inline-item d-flex gap-1">
        <a href="<?=base_url()?>gfa/login" class="btn btn-success">Accepter la connexion</a>
    </li>
</ul>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Header -->
        <!-- Navbar pills -->
        <div class="row">
          <div class="col-md-12">
      <ul class="nav nav-pills flex-column flex-sm-row mb-4">
          <li class="nav-item"><a class="nav-link active" href="#" data-content-id="user_content"><i class='ti-xs ti ti-user-check me-1'></i> Profil personnel</a></li>
          <li class="nav-item"><a class="nav-link" href="#" data-content-id="company_content"><i class='ti-xs ti ti-link me-1'></i> Profil de l'entreprise</a></li>
          <!--<li class="nav-item"><a class="nav-link" href="javascript:void(0);"><i class='ti-xs ti ti-layout-grid me-1'></i></a></li>-->
          <li class="nav-item"><a class="nav-link" href="#" data-content-id="founders_content"><i class='ti-xs ti ti-users me-1'></i> Fondateurs</a></li>
      </ul>

          </div>
        </div>
        <!--/ Navbar pills -->
        <!-- User Profile Content -->
        <div class="row" id="user_content" class="content-div">
          <div class="col-xl-4 col-lg-5 col-md-5">
            <!-- About User -->
            <div class="card mb-4">
              <div class="card-body">
    <small class="card-text text-uppercase">À propos de moi</small>
    <ul class="list-unstyled mb-4 mt-3">
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user text-heading"></i><span class="fw-medium mx-2 text-heading">Nom et prénoms :</span> <?=$details[0]['Contact_Salutation']?> <span><?=$details[0]['Primary_Contact_Name']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-flag text-heading"></i><span class="fw-medium mx-2 text-heading">Pays :</span> <span><?=$details[0]['Country']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-location text-heading"></i><span class="fw-medium mx-2 text-heading">Ville :</span> <span><?=$details[0]['State']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-call"></i><span class="fw-medium mx-2 text-heading">Numéro de téléphone :</span> <span><?=$details[0]['Phones']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-mail"></i><span class="fw-medium mx-2 text-heading">Email :</span> <span><?=$details[0]['Contact_Email']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-linkedin"></i><span class="fw-medium mx-2 text-heading">LinkedIn :</span> <span><?=$details[0]['LinkedIn']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-facebook"></i><span class="fw-medium mx-2 text-heading">Facebook :</span> <span><?=$details[0]['Facebook']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-twitter"></i><span class="fw-medium mx-2 text-heading">Twitter :</span> <span><?=$details[0]['Twitter']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-instagram"></i><span class="fw-medium mx-2 text-heading">Instagram :</span> <span><?=$details[0]['Instagram']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-location"></i><span class="fw-medium mx-2 text-heading">Adresse personnelle :</span> <span><?=$details[0]['Personal_Address']?> </span></li>
    </ul>
</div>

            </div>
          </div>
          <div class="col-xl-8 col-lg-7 col-md-7">
            <!-- Activity Timeline -->
            <div class="card card-action mb-4">
              <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Personal Info</h5>
              </div>
              <div class="card-body pb-0" style="text-align: justify;">
                <h6 class=""> <?=$details[0]['About_Me']?> </h6>
              </div>
            </div>
          </div>
        </div>
        <!--/ User Profile Content -->
        
         <!-- Company Cards -->
        <div class="row g-4" id="company_content" class="content-div" style="display:none">
          <div class="col-xl-4 col-lg-6 col-md-6">
            <!-- About Company -->
            <div class="card mb-4">
              <div class="card-body text-center">
            <small class="card-text text-uppercase">À propos de l'entreprise</small>
            <ul class="list-unstyled mb-4 mt-3 content-list1 expanded1">
        <li class="d-flex align-items-center mb-3"><i class="ti ti-crown"></i><span class="fw-medium mx-2 text-heading">Nom de l'entreprise :</span> <span><?=$details[0]['Startup_Company_Name']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-brand-pocket"></i><span class="fw-medium mx-2 text-heading">Nom du produit :</span> <span><?=$details[0]['Product_Name']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-bell"></i><span class="fw-medium mx-2 text-heading">Produit principal :</span> <span><?=$details[0]['Name_Main_Product']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-wallpaper"></i><span class="fw-medium mx-2 text-heading">Secteur d'activité principal :</span> <span><?=$details[0]['PrimaryBusinessIndustry']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-book"></i><span class="fw-medium mx-2 text-heading">Site web :</span> <span><?=$details[0]['Website']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-wallet"></i><span class="fw-medium mx-2 text-heading">Phase d'investissement :</span> <span><?=$details[0]['CurrentInvestmentStage']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-users-plus"></i><span class="fw-medium mx-2 text-heading">Nombre d'employés :</span> <span><?=$details[0]['NoOfEmployees']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-users-group"></i><span class="fw-medium mx-2 text-heading">Nombre de fondateurs/partenaires :</span> <span><?=$details[0]['NoOfFoundersPartners']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-color-swatch"></i><span class="fw-medium mx-2 text-heading">Structure du partenariat :</span> <span><?=$details[0]['Partnership_Structure']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-settings"></i><span class="fw-medium mx-2 text-heading">Régions d'opération :</span> <span><?=$details[0]['OperatingRegions']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span class="fw-medium mx-2 text-heading">Phase de mise en œuvre :</span> <span><?=$details[0]['Startup_Implementation_Stage']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Tour de financement précédent :</span> <span><?=$details[0]['Previous_Funding_Round']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Cible du prochain tour de financement :</span> <span><?=$details[0]['Next_Funding_Round_Target_Sought']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Prochain tour de financement :</span> <span><?=$details[0]['Next_Funding_Round']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user-circle"></i><span class="fw-medium mx-2 text-heading">Nom de l'actionnaire principal :</span> <span><?=$details[0]['High_Shareholder_Name']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user-bolt"></i><span class="fw-medium mx-2 text-heading">Genre de l'actionnaire principal :</span> <span><?=$details[0]['High_Shareholder_Gender']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user-dollar"></i><span class="fw-medium mx-2 text-heading">Ethnie de l'actionnaire principal :</span> <span><?=$details[0]['High_Shareholder_Race']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user-pin"></i><span class="fw-medium mx-2 text-heading">Date de naissance de l'actionnaire principal :</span> <span><?=$details[0]['High_Shareholder_DOB']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-user-star"></i><span class="fw-medium mx-2 text-heading">Position de l'actionnaire principal :</span> <span><?=$details[0]['High_Shareholder_Position']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-color-swatch"></i><span class="fw-medium mx-2 text-heading">Type d'organisation :</span> <span><?=$details[0]['Organisation_Type']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Intérêt à lever des fonds :</span> <span><?=$details[0]['Interest_Fund_Raise']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-location-filled"></i><span class="fw-medium mx-2 text-heading">Défis commerciaux :</span> <span><?=$details[0]['Business_Challenge']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-users-plus"></i><span class="fw-medium mx-2 text-heading">Plan de croissance :</span> <span><?=$details[0]['Growth_Plan']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-book"></i><span class="fw-medium mx-2 text-heading">Déclaration d'impact :</span> <span><?=$details[0]['Impact_Statement']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-file-description"></i><span class="fw-medium mx-2 text-heading">Raison du soutien :</span> <span><?=$details[0]['Reason_Support']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Revenus :</span> <span><?=$details[0]['Revenue']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-check"></i><span class="fw-medium mx-2 text-heading">Besoin de mentorat :</span> <span><?=$details[0]['Mentorship']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-ear"></i><span class="fw-medium mx-2 text-heading">Comment nous avez-vous connus :</span> <span><?=$details[0]['Hear_Us']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-color-swatch"></i><span class="fw-medium mx-2 text-heading">Désignation :</span> <span><?=$details[0]['Designation']?></span></li>
                </ul>
                <button class="read-more-btn1 btn btn-danger mx-auto">Lire la suite</button>
            </div>

  </div>
          </div>
        <div class="col-xl-4 col-lg-6 col-md-6">
          <!-- About Company -->
         <div class="card mb-4">
            <div class="card-body text-center">
            <ul class="list-unstyled mb-4 mt-3 content-list2 expanded2">
        <li class="d-flex align-items-center mb-3"><i class="ti ti-flag"></i><span class="fw-medium mx-2 text-heading">Importance de l'entreprise :</span> <span><?=$details[0]['Business_Importance']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-receipt"></i><span class="fw-medium mx-2 text-heading">Montant levé :</span> <span><?=$details[0]['Amount_Raise']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Revenu mensuel :</span> <span><?=$details[0]['Monthly_Revenue']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-growth"></i><span class="fw-medium mx-2 text-heading">Croissance minimale :</span> <span><?=$details[0]['Minimum_Growth']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-rectangle"></i><span class="fw-medium mx-2 text-heading">Évaluation :</span> <span><?=$details[0]['Valuation']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-refresh"></i><span class="fw-medium mx-2 text-heading">Produit :</span> <span><?=$details[0]['Product']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-rewind-forward-10"></i><span class="fw-medium mx-2 text-heading">Échelle :</span> <span><?=$details[0]['Scaling']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-registered"></i><span class="fw-medium mx-2 text-heading">Type de startup :</span> <span><?=$details[0]['Startup_Type']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-report-analytics"></i><span class="fw-medium mx-2 text-heading">Type de financement :</span> <span><?=$details[0]['Funding_Type']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-resize"></i><span class="fw-medium mx-2 text-heading">Modèle de startup :</span> <span><?=$details[0]['Startup_Model']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-report"></i><span class="fw-medium mx-2 text-heading">Niveau de la startup :</span> <span><?=$details[0]['Startup_Level']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-alert-circle"></i><span class="fw-medium mx-2 text-heading">Accélérateur de startup :</span> <span><?=$details[0]['Startup_Accelerator']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-users-plus"></i><span class="fw-medium mx-2 text-heading">Partenaire de startup :</span> <span><?=$details[0]['Startup_Partner']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-percentage"></i><span class="fw-medium mx-2 text-heading">Pourcentage de la startup :</span> <span><?=$details[0]['Startup_Percent']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-abc"></i><span class="fw-medium mx-2 text-heading">Concurrent le plus proche :</span> <span><?=$details[0]['Closest_Competitor']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-report-search"></i><span class="fw-medium mx-2 text-heading">Burn rate :</span> <span><?=$details[0]['Burn_Rate']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-moneybag"></i><span class="fw-medium mx-2 text-heading">Marge brute :</span> <span><?=$details[0]['Gross_Profit']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-access-point"></i><span class="fw-medium mx-2 text-heading">Économie unitaire :</span> <span><?=$details[0]['Unit_Econs']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-scoreboard"></i><span class="fw-medium mx-2 text-heading">Solution corporative :</span> <span><?=$details[0]['Solution_Corperate']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-info-circle"></i><span class="fw-medium mx-2 text-heading">Intérêt principal :</span> <span><?=$details[0]['Core_Interest_Corporate']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-phone-outgoing"></i><span class="fw-medium mx-2 text-heading">Téléphone de la startup :</span> <span><?=$details[0]['Startup_Phone']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-address-book-off"></i><span class="fw-medium mx-2 text-heading">Pays d'incorporation :</span> <span><?=$details[0]['Country_Incorporate']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-inbox-off"></i><span class="fw-medium mx-2 text-heading">État de la startup :</span> <span><?=$details[0]['Startup_State']?></span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-address-book"></i><span class="fw-medium mx-2 text-heading">Adresse de la startup :</span> <span><?=$details_ext[0]['Startup_Address']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-timeline-event-x"></i><span class="fw-medium mx-2 text-heading">Numéro d'enregistrement :</span> <span><?=$details[0]['Registration_Number']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-timeline-event"></i><span class="fw-medium mx-2 text-heading">Année d'opération :</span> <span><?=$details[0]['Year_Operation']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-growth"></i><span class="fw-medium mx-2 text-heading">Aspiration de l'entreprise :</span> <span><?=$details[0]['Company_Aspire']?> </span></li>
        <li class="d-flex align-items-center mb-3"><i class="ti ti-badge"></i><span class="fw-medium mx-2 text-heading">Propriété de la solution :</span> <span><?=$details[0]['Solution_Ownership']?> </span></li>
                </ul>
                <button class="read-more-btn2 btn btn-danger">En savoir plus</button>
            </div>

    </div>
          <div class="col-xl-4 col-lg-6 col-md-6">
    <!-- Timeline des activités -->
    <div class="card card-action mb-4">
        <div class="content-list3 expanded3">
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">À propos de l'entreprise</h5>
            </div>
            <div class="card-body pb-4" style="text-align: justify;">
                <h6 class=""><?=$details_ext[0]['About_Company']?></h6>
            </div>
            <div class="card-header align-items-center">
                <h5 class="card-action-title mb-0">Historique des investissements</h5>
            </div>
            <div class="card-body pb-2" style="text-align: justify;">
                <h6 class=""><?=$details[0]['Investment_History']?></h6>
            </div>
        </div>
        <div class="text-center py-3">
            <button class="read-more-btn3 btn btn-danger">En savoir plus</button>
        </div>
    </div>
</div>

        </div>
        <!--/ Company Cards -->
        
        <!-- Founders Cards -->
        <div class="row g-4" id="founders_content" class="content-div" style="display:none">
          <?php $allfounders = json_decode($details[0]['Co_Founder_Info'], true);
            foreach ($allfounders as $founder) { ?>
          <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card">
              <div class="card-body text-center content-list4 expanded4">
                <div class="mx-auto my-3">
                  <img src="<?= base_url()?>/uploads/files/<?=$founder['coPhoto']?>" alt="Founder Image" class="rounded-circle w-px-100" />
                </div>
                <h4 class="mb-1 card-title"><?=$founder['coFounderName']?></h4>
                <h5 class=""><?=$founder['coDesignation']?></h5>
                <span class=""><?=$founder['coGender']?></span> | 
                <a href="<?=$founder['coLinkedin']?>"><i class="ti ti-brand-linkedin"></i> LinkedIn </a> <br>
                <div class="pt-0 mt-0 px-2 pb-3" style="text-align: justify;"><?=$founder['coAbout']?></div>
              </div>
              <div class="text-center py-3"><button class="read-more-btn4 btn btn-danger">En savoir plus</button></div>
            </div>
          </div>
          <?php } ?>
        </div>
        <!--/ Founders Cards -->
    </div>
  <!-- / Content -->

</div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
  </div>
  <!-- / Layout wrapper -->
  <footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-center">
      <div> © <script> document.write(new Date().getFullYear()) </script>
        <a href="https://gfa-tech.com/" target="_blank" class="fw-medium">CIPME</a>
      </div>
    </div>
  </div>
</footer>

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  
  <script src="<?= base_url('public/assets-new')?>/vendor/libs/jquery/jquery.js"></script>
  <script src="<?= base_url('public/assets-new')?>/vendor/libs/popper/popper.js"></script>
  <script src="<?= base_url('public/assets-new')?>/vendor/js/bootstrap.js"></script>
  <!-- Main JS -->
  <script src="<?= base_url('public/assets-new')?>/js/main.js"></script>
  <!-- Page JS -->
  <script src="<?= base_url('public/assets-new')?>/js/pages-profile.js"></script>
  
<script>
$(document).ready(function () {
    $('.read-more-btn1').click(function () {
        var contentList1 = $('.content-list1');
        contentList1.toggleClass('expanded1');
        if (contentList1.hasClass('expanded1')) {
            contentList1.css('max-height', 'none');
            $('.read-more-btn1').text('Read Less');
        } else {
            contentList1.css('max-height', '400px');
            $('.read-more-btn1').text('Read More');
        }
    });
    $('.read-more-btn1').click();
    
    $('.read-more-btn2').click(function () {
        var contentList2 = $('.content-list2');
        contentList2.toggleClass('expanded2');
        if (contentList2.hasClass('expanded2')) {
            contentList2.css('max-height', 'none');
            $('.read-more-btn2').text('Read Less');
        } else {
            contentList2.css('max-height', '400px');
            $('.read-more-btn2').text('Read More');
        }
    });
    $('.read-more-btn2').click();
    
    $('.read-more-btn3').click(function () {
        var contentList3 = $('.content-list3');
        contentList3.toggleClass('expanded3');
        if (contentList3.hasClass('expanded3')) {
            contentList3.css('max-height', 'none');
            $('.read-more-btn3').text('Read Less');
        } else {
            contentList3.css('max-height', '400px');
            $('.read-more-btn3').text('Read More');
        }
    });
    $('.read-more-btn3').click();
    
    $('.read-more-btn4').click(function () {
        var contentList4 = $('.content-list4');
        contentList4.toggleClass('expanded4');
        if (contentList4.hasClass('expanded4')) {
            contentList4.css('max-height', 'none');
            $('.read-more-btn4').text('Read Less');
        } else {
            contentList4.css('max-height', '400px');
            $('.read-more-btn4').text('Read More');
        }
    });
    
    
    $('#user_content').show();
    $('.nav-link').click(function (e) {
        e.preventDefault();
        $('.nav-link').removeClass('active');
        if ($(this).attr('data-content-id') === 'user_content' ) {
            $('#user_content').show();
            $("#switchImage").attr("src", "<?=base_url() . 'uploads/files/default-avatar.jpg'?>");
            $('#company_content').hide();
            $('#founders_content').hide();
        } else if ($(this).attr('data-content-id') === 'founders_content') {
            $('#founders_content').show();
            $("#switchImage").attr("src", "<?=base_url() . 'uploads/files/default-avatar.jpg' ?>");
            $('#company_content').hide();
            $('#user_content').hide();
        } else if ($(this).attr('data-content-id') === 'company_content') {
            $('#company_content').show();
            $("#switchImage").attr("src", "<?=base_url() . 'uploads/files/default-avatar.jpg' ?>");
            $('#user_content').hide();
            $('#founders_content').hide();
        }
        $(this).addClass('active');
    });
});
</script>
</body>
</html>