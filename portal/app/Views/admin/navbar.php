<?php $admin_model = new \App\Models\AdminModel();
$this->encryption = \Config\Services::encrypter();
$this->session = \Config\Services::session();
$login_type  = $this->session->get('login_type_ext');

$name  = $this->session->get('name') ;
 ?>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b><?php echo lang('translation.Admin') ?></b></span>
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
          <!-- <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a></li> -->
          <!-- Notifications: style can be found in dropdown.less -->
          <!-- <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">-</span>
            </a>
          </li> -->
          <!-- Tasks: style can be found in dropdown.less -->
         <!--  <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a> </li> -->
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          
              <span class="hidden-xs"><?php echo ucwords($name)  ?>
           </li>
          <!-- Control Sidebar Toggle Button --> 
          <!-- <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
          </li> -->
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
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
       
            <li><a href="<?php echo base_url(); ?>admin/"><i class="fa fa-circle-o"></i><?php echo lang('translation.Dashboard') ?></a></li>
            
      
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
                        <li><a href="<?php echo base_url(); ?>admin/startups"><i class="fa fa-circle-o"></i> <?php echo lang('translation.Startups') ?></a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/payment"><i class="fa fa-circle-o"></i> Payment</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>-->
          </ul>
        </li>
      <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Resource</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <!--<li class="active"><a href="<?php echo base_url(); ?>admin/subscribers"><i class="fa fa-circle-o"></i>Subscribers</a></li>-->
            <!--<li><a href="<?php echo base_url(); ?>admin/payment"><i class="fa fa-circle-o"></i> Payment</a></li>-->
                        
                        <li><a href="<?php echo base_url(); ?>admin/resource_category"><i class="fa fa-circle-o"></i> <?php echo lang('translation.Category') ?></a></li>
                        <li><a href="<?php echo base_url(); ?>admin/resource"><i class="fa fa-circle-o"></i>Resource Items</a></li>
            <!--<li><a href="<?php echo base_url(); ?>admin/payment"><i class="fa fa-circle-o"></i> Payment</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Settings</a></li>-->
          </ul>
        </li>
      
		<li><a href="<?php echo base_url(); ?>gfa/admin_login/course"><i class="fa fa-circle-o"></i>Course</a></li>
        <li><a href="<?php echo base_url(); ?>gfa/admin_login/perks"><i class="fa fa-circle-o"></i><?php echo lang('translation.Perks') ?></a></li>
    <li><a href="<?php echo base_url(); ?>gfa/admin_login/manage_ticket"><i class="fa fa-circle-o"></i><?php echo lang('translation.Manage Help Desk'); ?></a></li>
       
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span><?php echo lang('translation.Investors') ?></span>
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
            <span><?php echo lang('translation.Events') ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>gfa/admin_login/event"><i class="fa fa-circle-o"></i>+ <?php echo lang('translation.Add Event') ?></a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Online"><i class="fa fa-circle-o"></i>Posted Online Events</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Physical"><i class="fa fa-circle-o"></i>Posted Physical Events</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event/Hybrid"><i class="fa fa-circle-o"></i>Posted Hybrid Event</a></li>
            <li><a href="<?php echo base_url(); ?>admin/event_list"><i class="fa fa-circle-o"></i>All Events Attendees</a></li>

            <!--<li><a href="<?php echo base_url(); ?>admin/commission"><i class="fa fa-circle-o"></i>Set Commission</a></li>-->
          </ul>
          
        </li>
        <li><a href="<?php echo base_url(); ?>admin/story"><i class="fa fa-circle-o"></i>Posted Stories</a></li>
        <?php if($login_type == 1){ ?>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Admin Settings</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
              <li><a href="<?php echo base_url(); ?>admin/add_sub_admin"><i class="fa fa-circle-o"></i>+ Add Sub Admin</a></li>
            <li><a href="<?php echo base_url(); ?>admin/manage_admin"><i class="fa fa-circle-o"></i>Manage Sub Admin</a></li>
            <li><a href="<?php echo base_url(); ?>admin/edit_admin_profile/1"><i class="fa fa-circle-o"></i>Update Profile</a></li>
             <li><a href="<?php echo base_url(); ?>admin/all_users/1"><i class="fa fa-circle-o"></i>Update Users' Profile</a></li>

            <!--<li><a href="<?php echo base_url(); ?>admin/commission"><i class="fa fa-circle-o"></i>Set Commission</a></li>-->
          </ul>
          
        </li>
        <?php } ?>
             <!-- <li><a href="<?php //echo base_url(); ?>admin/event"><i class="fa fa-circle-o"></i>Posted Events</a></li> -->
              
      
            
        
		<li><a href="<?php echo base_url(); ?>admin/signoutAction"><i class="fa fa-circle-o"></i> <?php echo lang('translation.Logout') ?></a></li>
       
             </ul>
    </section>
    <!-- /.sidebar -->
  </aside>