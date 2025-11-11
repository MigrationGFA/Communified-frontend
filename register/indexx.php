<?php 

require 'translation/french/main.php';

date_default_timezone_set('UTC'); 
session_start();

if(isset($_GET['ref'])){
    $urlRef = 'trans-1';
} else {
    $urlRef = 'trans-1';
}




if(isset($urlRef)){
    
 $_SESSION['urlRef'] = 'trans-1';   
}else{
    
    echo 'trans-1';
}



?>
<!DOCTYPE html>

<html class="loading bordered-layout" lang="en" data-layout="bordered-layout" data-textdirection="ltr">

<head>
    <?php include 'includes/head.php'; ?>
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body onmouseover="feather1()" class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
    data-menu="vertical-menu-modern" data-col="" style="
      background-image: url('https://fr.getfundedafrica.com/images/bg.jpg');
    " :>
  
</script>
<div id="google_translate"></div>    
    <table width="70%" align="center" border="0">
        <tbody>
            <tr>
                <td>
                    <!-- Modern Vertical Wizard -->

                    <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example1">
                        <div class="bs-stepper-header">
                            <div class="step" data-target="#social-links-vertical-modern" role="tab"
                                id="social-links-vertical-modern-trigger">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-subtitle">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span>
                                    </span>
                                </button>
                            </div>
                        </div>

                        <div class="bs-stepper-content" style="background-color: #19311A">
                            <center>
                                <img src="https://pmemarket.cipme.ci/assets/Coted'ivoire-Logo-DltBEHFD.png" />
                                <br /><br />

                                <h2 style="color: #fff"><?php echo translate('main-header'); ?></h2>
                            </center>
                        </div>
                    </div>
                    <br />

                    <section class="modern-vertical-wizard">
                        <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
                            <div class="bs-stepper-header">
                                <div class="step" data-target="#account-details-vertical-modern" role="tab"
                                    id="account-details-vertical-modern-trigger">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-box">
                                            <i data-feather="file-text" class="font-medium-3"></i>
                                        </span>
                                        <span class="bs-stepper-label">
                                            <!--<span class="bs-stepper-title"><?php echo translate('side-nav')['head-1']; ?></span>-->
                                          
                                            <span class="bs-stepper-subtitle">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<!--<?php echo translate('side-nav')['sub-head-1']; ?>--></span>
                                        </span>
                                    </button>
                                </div>

                                <!--<div class="step" data-target="#social-links-vertical-modern" role="tab"
                                    id="social-links-vertical-modern-trigger">
                                    <button type="button" class="step-trigger">
                                        <span class="bs-stepper-box">
                                            <i data-feather="link" class="font-medium-3"></i>
                                        </span>
                                        <span class="bs-stepper-label">
                                            <span class="bs-stepper-title" style="color: #fff">Schedule a meeting</span>
                                            <span class="bs-stepper-subtitle">We like to meet you</span>
                                        </span>
                                    </button>
                                </div>-->
                            </div>

                            <div class="bs-stepper-content">
                                <div id="account-details-vertical-modern" class="content" role="tabpanel"
                                    aria-labelledby="account-details-vertical-modern-trigger">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4 class="card-title">
                                                    <?php echo translate('card-head'); ?>
                                                </h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="row custom-options-checkable g-1 myForma" id="myForma">
                                                    <div class="col-md-4" onclick="myForma('gfa1')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon1"
                                                            value="gfa1" />
                                                        <label class="custom-option-item text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon1">
                                                            <i data-feather="user" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['individual']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['individual']['sub']; ?></small>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4" onclick="myForma('gfa2')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon2"
                                                            value="gfa2" />
                                                        <label class="custom-option-item text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon2">
                                                            <i data-feather="airplay" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['startup']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['startup']['sub']; ?></small><br />
                                                        </label>
                                                    </div>

                                                    <div class="col-md-4" onclick="myForma('gfa3')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon3"
                                                            value="gfa3" />
                                                        <label class="custom-option-item text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon3">
                                                            <i data-feather="dollar-sign"
                                                                class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['investor']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['investor']['sub']; ?></small>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-6" onclick="myForma('gfa6')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon6"
                                                            value="gfa6" />
                                                        <label class="custom-option-item text-center text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon6">
                                                            <i data-feather="send" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['mentor']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['mentor']['sub']; ?></small><br /><br />
                                                        </label>
                                                    </div>

                                                    <div class="col-md-6" onclick="myForma('gfa4')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon4"
                                                            value="gfa4" />
                                                        <label class="custom-option-item text-center text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon4">
                                                            <i data-feather="send" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['accelerator']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['accelerator']['sub']; ?></small>
                                                        </label>
                                                    </div>

                                                    <div class="col-md-6" onclick="myForma('gfa5')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon5"
                                                            value="gfa5" />
                                                        <label class="custom-option-item text-center text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon5">
                                                            <i data-feather="users" class="font-large-1 mb-75"></i>
                                                            <span
                                                                class="custom-option-item-title h4 d-block"><?php echo translate('org-type')['corporate']['head']; ?></span>
                                                            <small><?php echo translate('org-type')['corporate']['sub']; ?></small>
                                                        </label>
                                                    </div>
                                                    <div class="col-md-6" onclick="myForma('gfa7')">
                                                        <input class="custom-option-item-check" type="radio"
                                                            name="radio" id="customOptionsCheckableRadiosWithIcon7"
                                                            value="gfa7" />
                                                        <label class="custom-option-item text-center text-center p-1"
                                                            for="customOptionsCheckableRadiosWithIcon7">
                                                            <i data-feather="users" class="font-large-1 mb-75"></i><span
                                                                class="custom-option-item-title h4 d-block">Institution Financière
                                                            </span>
                                                            <small>Pour les institutions financières investissant dans et soutenant la croissance des PME.
                                                            </small>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Start Mentors -->
                                    <div id="form_all">
                                        <div id="form1_base">

                                        </div>
                                        <div id="form1_preload" style="display:none; text-align:center;">
                                            <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                        </div>

                                        <div id="form2_base">

                                        </div>
                                        <div id="form2_preload" style="display:none; text-align:center;">
                                            <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                        </div>

                                        <div id="form3_base">

                                        </div>
                                        <div id="form3_preload" style="display:none; text-align:center;">
                                            <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                        </div>

                                        <div id="form4_base">

                                        </div>
                                        <div id="form4_preload" style="display:none; text-align:center;">
                                            <i class="fa fa-spinner fa-spin" style="font-size:24px"></i>
                                        </div>
                                    </div>





                                    





                                    

                                    <div class="card" id="myFormc2x" style="display: none">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                What is your Interest? Select an option that applies
                                                to your ideas 2
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row custom-options-checkable g-1">
                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1a" value="gfa1a" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1a">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Get
                                                            Updated</span>
                                                        <small>Receive recent news on Startup</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1b" value="gfa1b" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1b">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Fundraising</span>
                                                        <small>Raise fund for your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1c" value="gfa1c" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1c">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Business
                                                            Growth</span>
                                                        <small>Get the tools to grow your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1d" value="gfa1d" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1d">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Insight
                                                            Report</span>
                                                        <small>Get updated with market report</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1e" value="gfa1e" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1e">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Learning</span>
                                                        <small>Learn how to grow business fast</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1f" value="gfa1f" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1f">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Streaming</span>
                                                        <small>Watch great contents by Startup</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card" id="myFormd2" style="display: none">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                What is your Interest? Select an option that applies
                                                to your development
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row custom-options-checkable g-1">
                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1a" value="gfa1a" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1a">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Get
                                                            Updated</span>
                                                        <small>Receive recent news on Startup</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1b" value="gfa1b" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1b">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Fundraising</span>
                                                        <small>Raise fund for your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1c" value="gfa1c" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1c">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Business
                                                            Growth</span>
                                                        <small>Get the tools to grow your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1d" value="gfa1d" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1d">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Insight
                                                            Report</span>
                                                        <small>Get updated with market report</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1e" value="gfa1e" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1e">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Learning</span>
                                                        <small>Learn how to grow business fast</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1f" value="gfa1f" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1f">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Streaming</span>
                                                        <small>Watch great contents by Startup</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card" id="myForme2" style="display: none">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                What is your Interest? Select an option that applies
                                                to your Pre-Launch
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row custom-options-checkable g-1">
                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1a" value="gfa1a" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1a">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Get
                                                            Updated</span>
                                                        <small>Receive recent news on Startup</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1b" value="gfa1b" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1b">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Fundraising</span>
                                                        <small>Raise fund for your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1c" value="gfa1c" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1c">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Business
                                                            Growth</span>
                                                        <small>Get the tools to grow your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1d" value="gfa1d" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1d">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Insight
                                                            Report</span>
                                                        <small>Get updated with market report</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1e" value="gfa1e" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1e">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Learning</span>
                                                        <small>Learn how to grow business fast</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1f" value="gfa1f" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1f">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Streaming</span>
                                                        <small>Watch great contents by Startup</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card myFormf3" id="myFormf2" style="display: none">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                What is your Interest? Select an option that applies
                                                to your Launch
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row custom-options-checkable g-1">
                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1a" value="gfa1a" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1a">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Get
                                                            Updated</span>
                                                        <small>Receive recent news on Startup</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1b" value="gfa1b" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1b">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Fundraising</span>
                                                        <small>Raise fund for your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1c" value="gfa1c" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1c">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Business
                                                            Growth</span>
                                                        <small>Get the tools to grow your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1d" value="gfa1d" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1d">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Insight
                                                            Report</span>
                                                        <small>Get updated with market report</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1e" value="gfa1e" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1e">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Learning</span>
                                                        <small>Learn how to grow business fast</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1f" value="gfa1f" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1f">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Streaming</span>
                                                        <small>Watch great contents by Startup</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card myFormg2" id="myFormg2" style="display: none">
                                        <div class="card-header">
                                            <h4 class="card-title">
                                                What is your Interest? Select an option that applies
                                                to your Growth
                                            </h4>
                                        </div>
                                        <div class="card-body">
                                            <div class="row custom-options-checkable g-1">
                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1a" value="gfa1a" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1a">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Get
                                                            Updated</span>
                                                        <small>Receive recent news on Startup</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1b" value="gfa1b" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1b">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Fundraising</span>
                                                        <small>Raise fund for your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1c" value="gfa1c" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1c">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Business
                                                            Growth</span>
                                                        <small>Get the tools to grow your business</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1d" value="gfa1d" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1d">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span class="custom-option-item-title h4 d-block">Insight
                                                            Report</span>
                                                        <small>Get updated with market report</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1e" value="gfa1e" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1e">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Learning</span>
                                                        <small>Learn how to grow business fast</small>
                                                    </label>
                                                </div>

                                                <div class="col-md-4">
                                                    <input class="custom-option-item-check" type="radio" name="radio1"
                                                        id="customOptionsCheckableRadiosWithIcongfa1f" value="gfa1f" />
                                                    <label class="custom-option-item text-center p-1"
                                                        for="customOptionsCheckableRadiosWithIcongfa1f">
                                                        <i data-feather="lock" class="font-large-1 mb-75"></i>
                                                        <span
                                                            class="custom-option-item-title h4 d-block">Streaming</span>
                                                        <small>Watch great contents by Startup</small>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="social-links-vertical-modern" class="content" role="tabpanel"
                                    aria-labelledby="social-links-vertical-modern-trigger">
                                    <iframe width="100%" height="515px" src="https://calendly.com/dianateoh"
                                        frameborder="0"></iframe>

                                    <div class="d-flex justify-content-between">
                                        <button class="btn btn-primary btn-prev">
                                            <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                                            <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                        </button>
                                        <button class="btn btn-success btn-submit">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                         <!-- Modal -->
    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="alertModalLabel">Alerte Importante</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Chers utilisateurs,</p>
                    <p>
                        Nous vous rappelons l'importance de fournir des informations exactes et véridiques lors de votre inscription et dans l'ensemble de vos interactions sur la plateforme NORA. Toute fausse déclaration ou fourniture d'informations erronées peut compromettre la confiance et l'intégrité de notre réseau.
                    </p>
                    <p>
                        En conséquence, nous tenons à vous avertir que :
                    </p>
                    <ul>
                        <li>Toute tentative de tromperie par la soumission de données incorrectes ou inexactes entraînera l'exclusion immédiate de la plateforme.</li>
                        <li>Des vérifications régulières seront effectuées afin de s’assurer de la conformité des informations fournies par les utilisateurs.</li>
                    </ul>
                    <p>
                        Nous comptons sur votre collaboration pour maintenir un environnement sûr, transparent et bénéfique pour tous.
                    </p>
                    <p>
                        Merci de votre compréhension et de votre engagement envers l'intégrité de la plateforme.
                    </p>
                    <p>Cordialement,</p>
                    <p><strong>L’équipe de gestion de NORA</strong></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">J'ai compris</button>
                </div>
            </div>
        </div>
    </div>
                    </section>
                    <!-- /Modern Vertical Wizard -->

                    <a href="#" style="float: right; color: #fff">
                        &copy 2024. All Right Reserved 
                    </a>
                    <br /><br />
                    <!-- End: Customizer-->

                    <!-- BEGIN: Vendor JS-->

                    <!-- BEGIN Vendor JS-->

                    <?php include 'includes/scripts.php'; ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>
<!-- END: Body-->

</html>