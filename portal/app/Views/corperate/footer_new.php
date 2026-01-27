  <!-- BEGIN: Footer-->
  <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
 <div class="modal fade" id="checkDealRoomProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
             Your profile update is <?php echo $this->gfa_model->creditPointScore($email); ?>%, pls update it to aleast 50%. 
        </p>

        <br>
       
        <a href="<?php echo base_url('gfa/profile'); ?>" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
     <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
    
        <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
          <span class="me-50">Subscribe</span>
          <i data-feather="user"></i>
        </a>
   <?php }  ?> 
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
         <div class="modal fade" id="checkDealRoom" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Deal Room</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
            You currently have no active subscription, subscribe now to upload required files for investors.
        </p>
        
        <br>
       
        <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Subscribe</span>
          <i data-feather="user"></i>
        </a>
       
        
        
     
     
      </div>
      
    </div>
  </div>
</div>


        </div>
        
           <div class="modal fade" id="checkLearningSub" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Learning</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
            You currently have no active subscription, subscribe now to have full investors readiness courses.
        </p>
        
        <br>
       
        <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Subscribe</span>
          <i data-feather="user"></i>
        </a>
       
      <!--https://remsana.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>  -->
        <a href="https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3" target="_blank" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Access Free Courses</span>
          <i data-feather="user"></i>
        </a>
     <!--https://remsana.getfundedafrica.com/courses/fundraising-program-course-for-gfa-account/lessons/are-you-ready-copy-3/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>-->
     
      </div>
      
    </div>
  </div>
</div>


        </div>
          <div class="modal fade" id="checkLearningProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="info" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Profile Completion</h1>
          <!--<p><a href="http://estore.getfundedafrica.com/sso.php?key=<?php //echo $loginkey[0][LoginKey]; ?>" target="_blank">Click here to visit estore</a></p>-->
        <p>
             Your profile update is <?php echo $this->gfa_model->creditPointScore($email) ?>%, pls update it to aleast 50% to access free courses.
        </p>
        
        <br>
       
        <a href="<?php echo base_url('gfa/profile'); ?>" class="btn btn-primary float-end mt-3" >
          <span class="me-50">Update Profile</span>
          <i data-feather="user"></i>
        </a>
        
        <?php  if(!empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) || !empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ echo '';}else{ ?>
    
        <a href="<?php echo base_url('gfa/subscribe'); ?>" class="btn btn-primary float-end mt-3 me-sm-2 mb-2 mb-sm-0" >
          <span class="me-50">Subscribe</span>
          <i data-feather="user"></i>
        </a>
   <?php }  ?> 
     
      </div>
      
    </div>
  </div>
</div>


        </div>
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2023 GetFundedAfrica, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Powered by GFA<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
   
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/charts/apexcharts.min.js'); ?>"></script>
    <!--<script src="assets/app-assets/vendors/js/extensions/toastr.min.js"></script>-->
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/extensions/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/tables/datatable/jquery.dataTables.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/tables/datatable/dataTables.bootstrap5.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/tables/datatable/dataTables.responsive.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/tables/datatable/responsive.bootstrap5.js'); ?>"></script>
     <script src="<?php echo base_url('public/assets/app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
      <script src="<?php echo base_url('public/assets/app-assets/js/scripts/forms/form-select2.min.js'); ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/core/app-menu.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/core/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/customizer.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-invoice.min.js'); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/dashboard-analytics.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-invoice-list.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/page-pricing.min.js'); ?>"></script>
    
    <!-- END: Page JS-->
    
    
    
    
    
    
    
    
     <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-calendar-events.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-calendar.min.js'); ?>"></script>
    <!-- END: Page JS-->
      <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/dashboard-ecommerce.min.js'); ?>"></script>
      
      
      
      
      
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/extensions/jstree.min.js'); ?>"></script>
    <!-- END: Page Vendor JS-->


    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-file-manager.min.js'); ?>"></script>
    <!-- END: Page JS-->
    
    

    <!-- BEGIN: Vendor JS
    <script src="assets/app-assets/vendors/js/vendors.min.js"></script>-->
    <!-- BEGIN Vendor JS-->
    
    <!-- calender -->
    <!-- BEGIN: Vendor JS-->
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/vendors.min.js"></script>-->
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/calendar/fullcalendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/extensions/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/forms/validation/jquery.validate.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js'); ?>"></script>
    <!-- END: Page Vendor JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/core/api.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.date.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.time.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/legacy.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js'); ?>"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
   
    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/forms/pickers/form-pickers.min.js'); ?>"></script>
    
    
    
    
    
    
    
    
   

    <!-- BEGIN: Page Vendor JS-->
   
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.min.js"></script>-->
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.min.js"></script>-->
    <!--<script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/customizer.min.js"></script>-->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!--<script src="<?php //echo base_url(); ?>assets/app-assets/js/scripts/forms/form-repeater.min.js"></script>-->
    <!-- END: Page JS-->
    <script type="text/javascript" src="<?php echo base_url('public/assets/app-assets/js/core/tableManager.js'); ?>"></script>
	<script type="text/javascript">
		// basic usage
		$('.tablemanager').tablemanager({
			firstSort: [[3,0],[2,0],[1,'asc']],
			disable: ["last"],
			appendFilterby: true,
			dateFormat: [[4,"mm-dd-yyyy"]],
			debug: true,
			vocabulary: {
    voc_filter_by: 'Filter By',
    voc_type_here_filter: 'Filter...',
    voc_show_rows: 'Rows Per Page'
  },
			pagination: true,
			showrows: [100,200,300,500,1000],
			disableFilterBy: [1]
		});
		// $('.tablemanager').tablemanager();
	</script>
    

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

    
    
  </body>
  
</html>
