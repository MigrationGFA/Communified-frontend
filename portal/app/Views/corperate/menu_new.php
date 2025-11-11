<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><img src="<?php echo base_url(); ?>public/assets/images/logo/GFA-Logo.png" align="center"></center>
		
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"></span><i data-feather="more-horizontal"></i>
		 
		  <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink" href="<?php echo base_url(); ?>gfa/corporate_dashboard">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Dashboard') ?></span></a>
            <ul class="menu-content">
		
			</ul>
          </li>
		 <script>
		     
		     $(function(){
		         
		       $('.clicklink').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/corporate_dashboard", "_self");  
		       });  
		       
		        $('.clicklink1').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/coming_soon", "_self");  
		       }); 
		        $('.clicklink2').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/corperate_startups", "_self");  
		       }); 
		        $('.clicklink3').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/corperate_investor", "_self");  
		       }); 
		        $('.clicklink4').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/corperate_mentor", "_self");  
		       }); 
                $('.clicklink5').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		       
		       $('.clicklink6').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/reports", "_self");  
		       }); 
		       
		       $('.clicklink7').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_csr", "_self");  
		       }); 
		       
		       $('.clicklink8').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_event", "_self");  
		       }); 
		       
		       $('.clicklink11').click(function(){
		         window.open("<?php echo base_url(); ?>calendar/index", "_self");  
		       }); 
					$('.clicklink12').click(function(){
		         window.open("<?php echo base_url(); ?>chat/index", "_self");  
		       }); 
		
		     });
		 </script>
		 
		 
		   <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center clicklink11" href="<?php echo base_url('calendar/index'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Schedule meeting') ?></span></a>
       </li>
		 <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center clicklink12" href="<?php echo base_url('chat/index'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Chat') ?></span></a>
       </li>


       <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url(); ?>gfa/notify_inbox">
		   <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Messaging') ?></span></a>
            
		</li>

		<li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
          <i data-feather="speaker"></i><span class="menu-title text-truncate" data-i18n="Contact_Admin"><?php echo lang('translation.Contact Admin') ?></span></a>
          <ul class="menu-content">
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/support_ticket'); ?>" alt="Open_Ticket"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Open_Ticket"><?php echo lang('translation.Open Ticket') ?></span></a></li>
            <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/all_tickets'); ?>" alt="All Tickets"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="All_Tickets"><?php echo lang('translation.All Tickets') ?></span></a></li>
          </ul>
        </li>

       <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Account Settings') ?></span></a>
            <ul class="menu-content">
              
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/profile_corperate'); ?>" alt="Update Profile"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo lang('translation.Profile') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/change_password'); ?>"  alt="Update Password"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Change password') ?></span></a></li>
              
             </ul>
          </li>
          <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/signoutAction'); ?>">
           <i data-feather="power"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Logout') ?></span></a>
       </li>
          <!--
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Digital Products</span></a>
            <ul class="menu-content">
		
			</ul>
          </li>
		  <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="user-check"></i><span class="menu-title text-truncate" data-i18n="Dashboards">News</span></a>
           
          </li>
		  
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink1" >
		   <i data-feather="video"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Media & PR</span></a>
           
          </li>
		  
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="rss"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Forms & Surveys</span></a>
           
          </li>
		  
		   
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="sliders"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Content</span></a>
           
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="share-2"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Learning</span></a>
           
          </li>
          <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink00" >
		   <i data-feather="speaker"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Entertainment</span></a>
           
          </li>
         -->
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
