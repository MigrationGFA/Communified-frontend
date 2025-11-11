<!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><img src="<?php echo base_url('public/assets/images/logo/GFA-Logo.png'); ?>" align="center"></center>
		
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><i data-feather="more-horizontal"></i>
         <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink" href="#">
		   <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Dashboard') ?></span></a>
            <ul class="menu-content">
		
			</ul>
          </li>
          <script>
		     
		     $(function(){
		         
		       $('.clicklink').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/mentor", "_self");  
		       });  
		       
		        $('.clicklink1').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/mentor_startups", "_self");  
		       }); 
		        $('.clicklink2').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/dealroom", "_self");
				//  https://venture.angellist.com/v/login
		       }); 
		        $('.clicklink3').click(function(){
		         window.open("https://marketplace.getfundedafrica.com/search-users/", "_blank");  
		       }); 
		        $('.clicklink4').click(function(){
		         window.open("https://gfamax.com/", "_blank");  
		       }); 
                $('.clicklink5').click(function(){
		         window.open("https://media.getfundedafrica.com/", "_blank");  
		       }); 
		       
		       $('.clicklink6').click(function(){
		         window.open("https://events.getfundedafrica.com/", "_blank");  
		       }); 
		       
		       $('.clicklink7').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_csr", "_self");  
		       }); 
		       
		       $('.clicklink8').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_event", "_self");  
		       }); 
		       
		       $('.clicklink9').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		       
		       $('.clicklink10').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
             $('.clicklink11').click(function(){
		         window.open("<?php echo base_url(); ?>calendar/index", "_self");  
		       }); 
			$('.clicklink12').click(function(){
		         window.open("<?php echo base_url(); ?>chat/index", "_self");  
		       }); 
		     });
		 </script>
		  <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink1" href="#">
		   <i data-feather="users"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Find Startups') ?></span></a>
            <ul class="menu-content">
		
			</ul>
          </li>
		 <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center clicklink11" href="<?php echo base_url('calendar/index'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Schedule meeting') ?></span></a>
       </li>
		 <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center clicklink12" href="<?php echo base_url('chat/index'); ?>">
           <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Chat') ?></span></a>
       </li>
		 
		 
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="user-plus"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Find LPs</span></a>
            <ul class="menu-content">
            </ul>
          </li> -->
		  
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="clipboard"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Invest In Other Funds</span></a>
            <ul class="menu-content">
             
            </ul>
          </li> -->
		  
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
              
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/profile'); ?>" alt="Update Profile"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo lang('translation.Profile') ?></span></a></li>
              <li><a class="d-flex align-items-center" href="<?php echo base_url('gfa/change_password'); ?>"  alt="Update Password"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="eCommerce"><?php echo lang('translation.Change password') ?></span></a></li>
              
             </ul>
          </li>
		  
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="user"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Find Corporate Partners</span></a>
            <ul class="menu-content">
              
            </ul>
          </li> -->
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="pie-chart"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Data & Insight</span></a>
           
          </li> -->
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="corner-down-right"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Mentor a Startup</span></a>
            <ul class="menu-content">
		
			</ul>
          </li> -->
		  <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="crop"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Cohorts</span></a>
           
          </li> -->
		  
		   
		    <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
		   <i data-feather="tv"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Media Exposure</span></a>
           
          </li> -->
		  
		   <!-- <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="comiingsoon">
		   <i data-feather="slack"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Get Portfolio Perks</span></a>
            <ul class="menu-content">
            
            </ul>
          </li> -->
		  
		
		  
		   <!--<li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink5" href="#">-->
		   <!--<i data-feather="globe"></i><span class="menu-title text-truncate" data-i18n="Dashboards">News</span></a>-->
           
     <!--     </li>-->
		  
		    <li class=" nav-item active"  style="margin-top:10px;"><a class="d-flex align-items-center" href="<?php echo base_url('gfa/signoutAction'); ?>">
           <i data-feather="power"></i><span class="menu-title text-truncate" data-i18n="Dashboards"><?php echo lang('translation.Logout') ?></span></a>
       </li>
          
        </ul>
      </div>
    </div>
    <!-- END: Main Menu-->
