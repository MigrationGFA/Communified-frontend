<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><a href="<?php echo base_url('gfa/dashboard'); ?>"><img src="<?php echo base_url('public/assets/images/logo/GFA-Logo.png'); ?>" align="center"></a></center>
      </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <?php 
                
                // $loginkey = $this->gfa_model->getWpCred($email);
                // $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
           ?>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">GefundedAfrica</span><i data-feather="more-horizontal"></i>
         
         <?php   
          if(!empty($login_type)){  ?>
 
         <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>admin/event">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Admin Dashboard') ?></span></a>
          </li>
          <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Perks') ?></span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/add_perks'); ?>" alt="Add Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ <?php echo lang('translation.Add Perks') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/manage_perks'); ?>" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo lang('translation.Manage Perks') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/manage_perks_category'); ?>"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Perks Category') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/perks_redeemed'); ?>" alt="Perks Redeemed"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Redeemed') ?></span></a></li>
             </ul>
          </li>
         <?php }else{   ?>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/dashboard'); ?>">
            <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Dashboard') ?></span></a>
        </li>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/resource'); ?>">
            <i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Resources') ?></span></a>
        </li>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('calendar/index'); ?>">
          <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Schedule Meeting') ?></span></a>
        </li>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('chat/index'); ?>">
          <i data-feather="speaker"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Chat') ?></span></a>
        </li>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/notify_inbox'); ?>">
          <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Messaging') ?></span></a>
        </li>
        <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/subscribe'); ?>">
          <i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Subscription') ?></span></a>
        </li>

        <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
          <i data-feather="speaker"></i><span class="menu-title text-truncate" data-i18n="Contact_Admin"><?php echo lang('translation.Contact Admin') ?></span></a>
          <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/support_ticket'); ?>" alt="Open_Ticket"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Open_Ticket"><?php echo lang('translation.Open Ticket') ?></span></a></li>
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/all_tickets'); ?>" alt="All Tickets"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="All_Tickets"><?php echo lang('translation.All Tickets') ?></span></a></li>
          </ul>
        </li>

      <li class=" nav-item active"  style="margin-top:10px;">
              
               <?php //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
     <?php //if($this->gfa_model->creditPointScore($email) >=50)  {  ?>
 <a class="d-flex align-items-center" href="<?php echo base_url('gfa/dealroom'); ?>">
  <?php   //}else{  ?>
     <!--<a href="#" data-bs-target="#checkDealRoomProfile" data-bs-toggle="modal"> -->
     <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">-->
   <?php  //}  ?>
    
    
  <?php   //}else{  ?>
  
 
 <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">       -->
 
         
           <i data-feather="layers"></i><span class="menu-title text-truncate" data-i18n="Data and Insight"><?php echo lang('translation.Dealroom') ?><?php //echo  ?></span></a>
            
          </li>
         
         <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Account Settings') ?></span></a>
            <ul class="menu-content">
              
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/profile'); ?>" alt="Update Profile"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo lang('translation.Profile') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/change_password'); ?>"  alt="Update Password"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Change password') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/billing'); ?>" alt="Billing"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Billing') ?></span></a></li>
             </ul>
          </li>
           
          </li>
          <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/signoutAction'); ?>">
           <i data-feather="power"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Logout') ?></span></a>
       </li>
         
          
         
           <!--<li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank">-->
           <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>-->
            
          </li>
          
          
            
         
          <?php }  ?>
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
