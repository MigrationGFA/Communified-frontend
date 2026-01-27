
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><a href="https://getfundedafrica.com/portal/gfa/dashboard"><img src="<?php echo base_url(); ?>assets/images/logo/GFA-Logo.png" align="center"></a></center>
		
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
          <?php 
		         
		        $loginkey = $this->gfa_model->getWpCred($email);
		        $rowArray = $this->admin_model->getAllStartUpNByEmail($email);
		   ?>
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">GFA Solutions</span><i data-feather="more-horizontal"></i>
         
         
         <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://getfundedafrica.com/portal/gfa/dashboard2">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            
          </li>
		 
		     <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Funding</span></a>
            <ul class="menu-content">
			  
              <li><a class="d-flex align-items-center" href="https://getfundedafrica.com/startup_investor" target="_blank" alt="Apply for Co-hort"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Connect to an Investor</span></a></li>
              <li><a class="d-flex align-items-center" href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0][LoginKey]; ?>" target="_blank" alt="Self help funding"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Learn how to get Funding</span></a></li>
              <li><a class="d-flex align-items-center" href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0][LoginKey]; ?>"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Self help Funding</span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/dealroom" alt="Data Room"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Dealroom</span></a></li>
             </ul>
          </li>
          
          <!--<li class=" nav-item active"  style="margin-top:10px;">-->
              
               <?php //if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
     <?php //if($point >=50)  {  ?>
 <!--<a class="d-flex align-items-center" href="<?php //echo base_url(); ?>gfa/dealroom">-->
  <?php   //}else{  ?>
     <!--<a href="#" data-bs-target="#checkDealRoomProfile" data-bs-toggle="modal"> -->
     <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">-->
   <?php  //}  ?>
    
    
  <?php   //}else{  ?>
  
 
 <!--<a href="#" data-bs-target="#checkDealRoom" data-bs-toggle="modal">       -->
 
         
          
 <?php   // }
     
     ?>
              
              
		   
		   <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Data and Insight">Dealroom</span></a>-->
            
          <!--</li>-->
		 
		 
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Grow your Business</span></a>
            <ul class="menu-content">
                <!--href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>"-->
                 <!--<a href="#" data-bs-target="#editUser" data-bs-toggle="modal">-->
             <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon"  target="_blank" alt="Sell a Product"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Sell a Product</span></a>
              </li>
			 <!--data-bs-target="#editUser" data-bs-toggle="modal"-->
		     <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon" alt="Sell a Service"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Sell a Service</span></a>
              </li>
			  
			   <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/post_job" alt="Post a Job"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Post a Job</span></a>
              </li>
			  
			<li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/startup_cooperate" alt="Connect to a Corporate"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Connect to a Corporate</span></a>
              </li>
			  <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/startup_mentor" alt="Connect to a Mentor"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Connect to a Mentor</span></a>
              </li>
			 
            </ul>
          </li>
		  
		 
          
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Learning</span></a>
		   
            <ul class="menu-content">
             <li>
                 
                 <?php     // if($startupPaid[0]['payment_status']=='paid' && $startupPaid[0]['status']=='active'  ) {  ?>
     <?php if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) ){  ?>
    
    <!--<a href="https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3/" target="_blank">-->
      
    
 <?php if($point >=50)  {  ?>
 
 <a class="d-flex align-items-center" href="https://remsana.getfundedafrica.com/sso.php?key=<?php echo $loginkey[0][LoginKey]; ?>" target="_blank" alt="Individual course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Individual course</span></a>
  <?php   }else{  ?>
    <a href="#" data-bs-target="#checkLearningProfile" data-bs-toggle="modal" target="_blank" alt="Individual course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Individual course</span></a>   
   <?php  }  ?>
 
  <?php   }else{  ?>
  
  <a href="#" data-bs-target="#checkLearningSub" data-bs-toggle="modal" target="_blank" alt="Individual course"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Individual course</span></a>
       
          
 <?php    }
     
     ?>
                 
              </li>
              <li><a class="d-flex align-items-center" href="https://getfundedafrica.com/cohort" target="_blank" alt="Join Cohort"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Join Co-hort</span></a>
              </li>
			  
            </ul>
          </li>
          
          
          
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Mentorship</span></a>
            <ul class="menu-content">
             <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/startup_mentor" alt="Browse Mentors"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Browse Mentors</span></a>
              </li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/startup_mentor" alt="Match to Mentor"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Match to Mentor</span></a>
              </li>
               <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon" alt="Resources"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Resources</span></a>
              </li>
			  
            </ul>
          </li>
          
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Partnerships</span></a>
            <ul class="menu-content">
             <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon" alt="Browse Mentors"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">With Corporate</span></a>
              </li>
              
            </ul>
          </li>
		  
		 
		   <!--<li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank">-->
		   <!--<i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>-->
            
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Events</span></a>
            <ul class="menu-content">
             <li><a class="d-flex align-items-center" href="https://events.getfundedafrica.com" target="_blank" alt="Browse Events"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Browse Events</span></a>
              </li>
              
               <li><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon" alt="Add Event"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce">Add Event</span></a>
              </li>
			  
            </ul>
          </li>
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="https://media.getfundedafrica.com" target="_blank">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">News</span></a>
            
          </li>
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/comingsoon" target="_blank">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">GFA Max</span></a>
           
          </li>
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->