<?php $admin_model = new \App\Models\AdminModel(); ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a></li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">-</span>
            </a>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          
              <span class="hidden-xs">Admin</span>
            </a>
           </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          
        </div>
        <div class="pull-left info">
          <p></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       
            <li><a href="<?php echo base_url(); ?>admin/"><i class="fa fa-circle-o"></i>Dashboard</a></li>
            
      
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Menu</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li class="active"><a href="<?php echo base_url(); ?>admin/subscribers"><i class="fa fa-circle-o"></i>Subscribers</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>admin/payment"><i class="fa fa-circle-o"></i> Payment</a></li>-->
                        
                        <li><a href="<?php echo base_url(); ?>admin/Onboard"><i class="fa fa-circle-o"></i> Onboarding</a></li>
                        <li><a href="<?php echo base_url(); ?>admin/startups"><i class="fa fa-circle-o"></i> Startups</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/payment"><i class="fa fa-circle-o"></i> Payment</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>-->
          </ul>
        </li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Cohort</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/cohort"><i class="fa fa-circle-o"></i>Cohort Participants</a></li>
            <li><a href="<?php echo base_url(); ?>admin/cohort_list"><i class="fa fa-circle-o"></i>Cohort</a></li>
            <li><a href="<?php echo base_url(); ?>admin/cohort_harmattan"><i class="fa fa-circle-o"></i>Cohort Harmattan</a></li>
            <li><a href="<?php echo base_url(); ?>admin/poe_investment"><i class="fa fa-circle-o"></i>Peo Investment</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/later_stage"><i class="fa fa-circle-o"></i>+ Add Corhort Participant</a></li>-->
          </ul>
        </li>
         <li><a href="<?php echo base_url(); ?>gfa/admin_login/course"><i class="fa fa-circle-o"></i>Course</a></li>
        <li><a href="<?php echo base_url(); ?>gfa/admin_login/perks"><i class="fa fa-circle-o"></i>Perks</a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Webinars</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <!-- <li><a href="<?php echo base_url(); ?>admin/freshworks_startup"><i class="fa fa-circle-o"></i>+ Add New Webminer </a></li> -->

          <!-- <li><a href="<?php echo base_url(); ?>admin/freshworks_startup"><i class="fa fa-circle-o"></i>All Webminer</a></li> -->
          <?php $getWebinar =  $admin_model->getAllWebinars(); foreach($getWebinar as $getWebinarArray){  
            $search_array = array("_", "-");
            $replace_array = array(" ", " ");
            ?>  
            <li><a href="<?php echo base_url(); ?>admin/webinars/<?php echo $getWebinarArray->event  ?>"><i class="fa fa-circle-o"></i><?php echo  ucwords(str_replace($search_array,$replace_array,$getWebinarArray->event)); ?>[<?php echo $admin_model->countWebinarAttendance($getWebinarArray->event); ?>]</a></li>
            <?php  }  ?>
            <!-- <li><a href="<?php echo base_url(); ?>admin/webinars/webinar_with_funke"><i class="fa fa-circle-o"></i>Roundtable talk with Funke[<?php echo $admin_model->countWebinarAttendance('webinar_with_funke'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/webinars/adcreative"><i class="fa fa-circle-o"></i>Organic Strategies For Growth[<?php echo $admin_model->countWebinarAttendance('organic-strategies-for-growth'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/webinars/expansion-beyond-borders"><i class="fa fa-circle-o"></i>Expansion Beyond Borders[<?php echo $admin_model->countWebinarAttendance('expansion-beyond-borders'); ?>]</a></li> -->
            <li><a href="<?php echo base_url(); ?>admin/freshworks_startup"><i class="fa fa-circle-o"></i>Freshworks[<?php echo  $admin_model->countFreshworksStartup(); ?>]</a></li>
            <!-- <li><a href="<?php echo base_url(); ?>admin/later_stage"><i class="fa fa-circle-o"></i>+ Add Corhort Participant</a> -->

          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Microsoft Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/microsoft_startup/Microsoft"><i class="fa fa-circle-o"></i>Nigeria Microsoft Startups[<?php echo  $admin_model->countMicrosoftStartup('Microsoft');  ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/microsoft_corperate/Microsoft"><i class="fa fa-circle-o"></i>Nigeria Microsoft Corporates[<?php echo  $admin_model->countMicrosoftCorporate('Microsoft');  ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/microsoft_startup/Kenya_Microsoft"><i class="fa fa-circle-o"></i>Kenya Microsoft Corporate Startups[<?php echo  $admin_model->countMicrosoftStartup('Kenya_Microsoft');  ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/microsoft_startup/Morocco_Microsoft"><i class="fa fa-circle-o"></i>Morocco Microsoft Corporate Startups[<?php echo  $admin_model->countMicrosoftStartup('Morocco_Microsoft');  ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/microsoft_startup/Egypt_Microsoft"><i class="fa fa-circle-o"></i>Egypt Microsoft Corporate Startups[<?php echo  $admin_model->countMicrosoftStartup('Egypt_Microsoft');  ?>]</a></li>
            
            <!--<li><a href="<?php echo base_url(); ?>admin/later_stage"><i class="fa fa-circle-o"></i>+ Add Corhort Participant</a></li>-->
          </ul>
        </li>
        	<li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>PMs Referrals</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/referral/events"><i class="fa fa-circle-o"></i>Events[<?php echo $admin_model->countRefByProduct('events'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/funding"><i class="fa fa-circle-o"></i>Funding[<?php echo $admin_model->countRefByProduct('funding'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/gfa-max"><i class="fa fa-circle-o"></i>Gfa-max[<?php echo $admin_model->countRefByProduct('gfa-max'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/learning"><i class="fa fa-circle-o"></i>Learning[<?php echo $admin_model->countRefByProduct('learning'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/insight"><i class="fa fa-circle-o"></i>Insight[<?php echo $admin_model->countRefByProduct('insight'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/investors"><i class="fa fa-circle-o"></i>Investors[<?php echo $admin_model->countRefByProduct('investors'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/news"><i class="fa fa-circle-o"></i>News[<?php echo $admin_model->countRefByProduct('news'); ?>]</a></li>
            <li><a href="<?php echo base_url(); ?>admin/referral/venture-building"><i class="fa fa-circle-o"></i>Venture-building[<?php echo $admin_model->countRefByProduct('venture-building'); ?>]</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/later_stage"><i class="fa fa-circle-o"></i>+ Add Corhort Participant</a></li>-->
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Credit</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url(); ?>admin/credit_list"><i class="fa fa-circle-o"></i>Credit Redemption</a></li>
      
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Investors</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/investors"><i class="fa fa-circle-o"></i>All investors</a></li>
            <li><a href="<?php echo base_url(); ?>admin/investor_deals"><i class="fa fa-circle-o"></i>Investor Deals</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/commission"><i class="fa fa-circle-o"></i>Set Commission</a></li>-->
          </ul>
          
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Affiliate Users</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/affiliate"><i class="fa fa-circle-o"></i>Affiliate</a></li>
            <li><a href="<?php echo base_url(); ?>admin/affiliate_pay"><i class="fa fa-circle-o"></i>Payment</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/commission"><i class="fa fa-circle-o"></i>Set Commission</a></li>-->
          </ul>
          
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>gfa/admin_login/event"><i class="fa fa-circle-o"></i>+ Add Event</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Online"><i class="fa fa-circle-o"></i>Posted Online Events</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Physical"><i class="fa fa-circle-o"></i>Posted Physical Events</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Hybrid"><i class="fa fa-circle-o"></i>Posted Hybrid Events</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event_list"><i class="fa fa-circle-o"></i>All Events Attendees </a></li>

            <!--<li><a href="<?php echo base_url(); ?>admin/commission"><i class="fa fa-circle-o"></i>Set Commission</a></li>-->
          </ul>
          
        </li>
        
             <!-- <li><a href="<?php //echo base_url(); ?>admin/event"><i class="fa fa-circle-o"></i>Posted Events</a></li> -->
              <li><a href="<?php echo base_url(); ?>admin/story"><i class="fa fa-circle-o"></i>Posted Stories</a></li>
      
            
        
		<li><a href="<?php echo base_url(); ?>admin/signoutAction"><i class="fa fa-circle-o"></i> Logout</a></li>
       
             </ul>
    </section>
    <!-- /.sidebar -->
  </aside>