<?php //session_start(); ?>          
         

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><?php echo lang('translation.COPYRIGHT © 2024 CIPME, All rights Reserved') ?></span></p>
      </div>
      
    </div>
  </div>
</footer>
<!-- / Footer -->

          
          <div class="content-backdrop fade"></div>
        </div>
        <!-- Content wrapper -->
        <div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-edit-user">
                <div class="modal-content">
                <div class="modal-header bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-5 px-sm-5 pt-50 contentProfile">
                    
                
                </div>
            </div>
        </div>


        </div> 
         
      </div>
      <!-- / Layout page -->
     <div class="modal fade" id="pricingModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-simple modal-pricing">
    <div class="modal-content p-2 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
       <div class="pb-sm-5 pb-2 rounded-top contentSub">
           
           </div>
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
             <script>
    $(document).ready(function() {
      $('.contentProfile').load('<?php echo base_url('gfa/loadprofile'); ?>');
      $('.contentSub').load('<?php echo base_url('gfa/loadsub'); ?>');
    });
  </script>
    
    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
    
    <div class="modal fade" id="suggest" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog  modal-simple modal-pricing">
    <div class="modal-content p-2 p-md-5">
      <div class="modal-body">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <!-- Pricing Plans -->
       <div class="pb-sm-5 pb-2 rounded-top">
            <form class="browser-default-validation">
           <div class="mb-3">
            <label class="form-label" for="basic-default-bio">Feedback</label>
            <textarea class="form-control" id="basic-default-bio" name="basic-default-bio" rows="6" required></textarea>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </div>
        </form>
           </div>
        <!--/ Pricing Plans -->
      </div>
    </div>
  </div>
</div>
  
  

  <!-- Core JS -->
  <!-- build:js assets-new/vendor/js/core.js -->
 
 <script src="<?php echo base_url('public/assets-new/vendor/libs/popper/popper.js'); ?>"></script> 
  <script src="<?php echo base_url('public/assets-new/vendor/js/bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/node-waves/node-waves.js'); ?>"></script>
  
  <script src="<?php echo base_url('public/assets-new/vendor/libs/hammer/hammer.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/i18n/i18n.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/typeahead-js/typeahead.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/js//app-file-manager.min.js'); ?>"></script>
  
  <script src="<?php echo base_url('public/assets-new/vendor/js/menu.js'); ?>"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?php echo base_url('public/assets-new/vendor/libs/bs-stepper/bs-stepper.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/bootstrap-select/bootstrap-select.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/select2/select2.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/formvalidation/dist/js/FormValidation.min.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/formvalidation/dist/js/plugins/Bootstrap5.min.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/formvalidation/dist/js/plugins/AutoFocus.min.js'); ?>"></script>

  <!-- Main JS -->
  <script src="<?php echo base_url('public/assets-new/js/main.js'); ?>"></script>

  <!-- Page JS -->
  
<script src="<?php echo base_url('public/assets-new/js/form-wizard-numbered.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/js/form-wizard-validation.js'); ?>"></script>
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
  $(document).ready(function() {
  $('a[href^="#"]').on('click', function(event) {
    event.preventDefault();
    var target = $(this.getAttribute('href'));
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000); // Adjust the duration as needed
    }
  });
  $('img').filter(function () {
        return !this.src || !this.src.trim();
      }).hide();
});

</script>

    <script>
      var monthlyData = <?php echo json_encode($chartData); ?>;
    </script>

    <script>
      var sartUpMonthlyData = <?php echo  json_encode($sartUpMonthlyData); ?>
    </script>

    <script>
      var distinctInvestors = <?php echo json_encode($investorData['distinctInvestors']); ?>
    </script>

    <script>
      var totalInvestors = <?php echo json_encode($countAllInvestors); ?>;
    </script>

    <script>
      var countMatchInvestor = <?php echo json_encode($_SESSION['matchedInvestors']); ?>
    </script>


<!-- <script src="../../../../dist/apexcharts.js"></script> -->
<script src="<?php echo base_url('public/assets-new/chart/assets-new/apexcharts.js'); ?>"></script>
    <script src=" <?php echo base_url('public/assets-new/chart/assets-new/data.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets-new/chart/assets-new/scripts.js'); ?>"></script>
 <script src="<?php echo base_url('public/assets-new/js/pages-pricing.js'); ?>"></script>



  
</body>

</html>

<!-- beautify ignore:end -->