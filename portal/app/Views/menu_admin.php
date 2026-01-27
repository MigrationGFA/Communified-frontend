<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><a href="<?php echo base_url('gfa/dashboard'); ?>gfa/dashboard"><img src="<?php echo base_url('public/assets/images/logo/GFA-Logo.png'); ?>" align="center"></a></center>
        
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <?php 
                
                $loginkey = $this->gfa_model->getWpCred($email);
                $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
           ?>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Admin </span><i data-feather="more-horizontal"></i>
         
          
         
 
         
          
         
      <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('admin/'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Admin Dashboard</span></a>
       </li>
       <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Course Category</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_course_category" alt="Add Course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Course Category</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Course Category</span></a></li>
             
             </ul>
          </li>
       <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Course</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_course" alt="Add Course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Course</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Course</span></a></li>
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Course Category</span></a></li>-->
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/course_quizz" alt="Quizz"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Quiz</span></a></li>-->
             </ul>
          </li>
          <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Course Section</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_course_section" alt="Add Course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Course Section</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_section" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Course Section</span></a></li>
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Course Category</span></a></li>-->
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/course_quizz" alt="Quizz"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Quiz</span></a></li>-->
             </ul>
          </li>
          <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Lesson</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_lesson" alt="Add Course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Lesson</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_lesson" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Lesson</span></a></li>
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Course Category</span></a></li>-->
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/course_quizz" alt="Quizz"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Quiz</span></a></li>-->
             </ul>
          </li>
          <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Quiz">Quiz</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_quiz" alt="Add Course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Quiz</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_quiz" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Quiz</span></a></li>
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Course Category</span></a></li>-->
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/course_quizz" alt="Quizz"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Quiz</span></a></li>-->
             </ul>
          </li>
          <li class="nav-item" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Task">Task</span></a>
            <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/add_task" alt="Add Task"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">+ Add Task</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_task" alt="Manage Perks"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Manage Task</span></a></li>
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/manage_course_category"  alt="Manage Category"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Course Category</span></a></li>-->
              <!--<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/course_quizz" alt="Quizz"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Quiz</span></a></li>-->
             </ul>
          </li>
       
           <li class=" nav-item"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/manage_ticket'); ?>">
            <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Manage Tickets</span></a>
          </li>
           
          <li class=" nav-item"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/signoutAction'); ?>">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Logout</span></a>
       </li>
         
           
          
         
          
           
          
          
          
           
          
         
          
         
           <!--<li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank">-->
           <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>-->
            
          
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->