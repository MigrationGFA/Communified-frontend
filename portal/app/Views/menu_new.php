<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><a href="<?php echo base_url('gfa/dashboard'); ?>gfa/dashboard"><img src="https://gfa-tech.com/portal/public/assets/images/logo/gfa-logo.png" align="center"></a></center>
        
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <?php 
                
                $loginkey = $this->gfa_model->getWpCred($email);
                $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
           ?>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">GFA Solutions</span><i data-feather="more-horizontal"></i>
         
          
         
 
         
          
         
      <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/dashboard'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
       </li>
       <li class=" nav-item"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/group_members'); ?>">
           <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Group Members</span></a>
       </li>
           <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-book"></i>
        <div data-i18n="Certificate">Certificate</div>
      </a>
      <ul class="menu-sub">
        <?php if(!empty($cert_course_ref)){  ?>
     <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate/{$cert_course_ref}"); ?>" class="menu-link">
            <div data-i18n="Course">Course</div>
          </a>
        </li>
    <?php }else{  ?>
      <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_gen_course"); ?>" class="menu-link">
            <div data-i18n="Course">Course</div> 
          </a>
        </li>

      <?php }  ?>
    <?php if(!empty( $cer_soft_ref )){  ?>
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_soft_skills/{$cer_soft_ref}"); ?>" class="menu-link">
            <div data-i18n="Soft Skills">Soft Skills</div> 
          </a>
        </li>
     <?php }else{  ?>

      <li class="menu-item">
          <a href="<?php echo base_url("gfa/certificate_gen"); ?>" class="menu-link">
            <div data-i18n="Soft Skills">Soft Skills</div> 
          </a>
        </li>
  <?php }  ?>
        
        
      </ul>
    </li> -->
       <!-- <li class="menu-item">
      <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons ti ti-users"></i>
        <div data-i18n="Contact Admin">Contact Admin</div>
      </a>
      <ul class="menu-sub">
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/support_ticket") ?>" class="menu-link">
            <div data-i18n="Open Ticket">Open Ticket</div>
          </a>
        </li>
        <li class="menu-item">
          <a href="<?php echo base_url("gfa/all_tickets") ?>" class="menu-link">
            <div data-i18n="All Tickets">All Tickets</div>
          </a>
        </li>
      </ul>
    </li> 
           <li class="menu-item">
      <a href="<?php echo base_url('chat'); ?>" class="menu-link">
        <i class="menu-icon tf-icons ti ti-book"></i>
        <div data-i18n="Chat">Chat</div>
      </a>
    </li> -->
          <li class=" nav-item"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/signoutAction'); ?>">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Logout</span></a>
       </li>
         
           
          
         
          
           
          
          
          
           
          
         
          
         
           <!--<li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank">-->
           <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>-->
            
          
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->