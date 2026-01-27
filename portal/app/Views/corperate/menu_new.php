<!-- BEGIN: Main Menu-->
<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');


$regBatchData = $this->gfa_model->regAllBatch();
?>
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
      <div class="navbar-header">
       <center><img src="https://gfa-tech.com/images/gfa-blue.png" width="100px" height="100px"  align="center"></center>
		
    </div><br> <br> <br>
      <div class="shadow-bottom"></div>
      <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
         <li class=" navigation-header"><span data-i18n="Apps &amp; Pages">Quick Menu</span><i data-feather="more-horizontal"></i>
		 
		 <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink">
		   <i data-feather="home"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Dashboard</span></a>
            <ul class="menu-content">
		<?php foreach($regBatchData as $regBatch){ ?>
              <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/corporate_dashboard/{$regBatch['Batch']}"); ?>" alt="Dashboard"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo $regBatch['Description']; ?></span></a></li>
             <?php }  ?>
			</ul>
          </li>
		 <script>
		     
		     $(function(){
		         
		    
		        $('.clicklink1').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/coming_soon", "_self");  
		       }); 
		        $('.clicklink2').click(function(){
		      //   window.open("<?php echo base_url(); ?>gfa/corperate_startups", "_self");  
		         window.open("<?php echo base_url(); ?>gfa/users_comments", "_self");  
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
		       
		       $('.clicklink9').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		       
		       $('.clicklink10').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/partners", "_self");  
		       }); 
		
			   $('.clicklink11').click(function(){
		         window.open("<?php echo base_url(); ?>gfa/manage_slider", "_self");  
		       });
		     });
		 </script>
		 
		 
		   <li class=" nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center clicklink2" >
		   <i data-feather="square"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Comments</span></a>
            <ul class="menu-content">
            </ul>
          </li>
          
		  <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Users Analytics</span></a>
            <ul class="menu-content">
             <?php foreach($regBatchData as $regBatch){ ?>
              <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/users_analytics/{$regBatch['Batch']}"); ?>" alt="Users Analytics"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo $regBatch['Description']; ?></span></a></li>
             <?php }  ?>
             </ul>
          </li>
		  
          <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="file"></i><span class="menu-title text-truncate" data-i18n="Certificate">Certificate</span></a>
            <ul class="menu-content">
             <?php foreach($regBatchData as $regBatch){ ?>
              <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/all_certificate/{$regBatch['Batch']}"); ?>" alt="Users Analytics"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics"><?php echo $regBatch['Description']; ?></span></a></li>
             <?php }  ?>
             </ul>
          </li>
		  
		  
		  <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Referral Program">Referral Program</span></a>
            <ul class="menu-content">
            
              <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/users_referrals"); ?>" alt="users referrals"><i data-feather="circle"></i>
			  <span class="menu-item text-truncate" data-i18n="users_referrals">Referrals</span></a></li>
			  <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/users_referrers"); ?>" alt="users referrer"><i data-feather="circle"></i>
			  <span class="menu-item text-truncate" data-i18n="users_referrals">Top Referrers</span></a></li>
             
             </ul>
          </li>
          
          <li class="nav-item active" style="margin-top:10px;"><a class="d-flex align-items-center" href="#">
           <i data-feather="settings"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Course Progress</span></a>
            <ul class="menu-content">
             
              <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/less60") ?>" alt="Users Analytics"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Course (<60)%</span></a></li>
             <!-- <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/course_progress/btw30-60") ?>" alt="Users Analytics"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Between 30-60</span></a></li> -->
             <li><a class="d-flex align-items-center" href="<?php echo base_url("gfa/greater60") ?>" alt="Users Analytics"><i data-feather="circle"></i><span class="menu-item text-truncate" data-i18n="Analytics">Course (>=60)%</span></a></li>
             </ul>
          </li>
          
		  <li class=" nav-item active" style="margin-top:10px;">
        <a class="d-flex align-items-center clicklink11" >
		    <i data-feather="slack"></i><span class="menu-title text-truncate" data-i18n="Dashboards">Manage Sliders</span></a>
           <ul class="menu-content">
            
            </ul>
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
