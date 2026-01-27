<?php //session_start(); ?>          
         

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
      <button class="windowClick">Test</button>
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © <script>
        document.write(new Date().getFullYear())
        </script>
        , All rights resevered. Created with ❤️ by <a href="https://getfundedafrica.com" target="_blank" class="fw-semibold">GetFundedAfrica Team</a>
      </div>
      <div>
        
        <a href="https://getfundedafrica.com/contact-us.php" class="footer-link me-4" target="_blank">Get in touch</a>
        <a href="https://getfundedafrica.com/request-a-call.php" target="_blank" class="footer-link me-4">Request a call</a>
        
        <a href="https://getfundedafrica.com/privacy.php" target="_blank" class="footer-link me-4">Privacy</a>
        
      
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
  
    
    
    <!-- Drag Target Area To SlideIn Menu On Small Screens -->

    
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
 

  <script src="<?php echo base_url('public/assets-new/vendor/libs/popper/popper.'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/js/bootstrap.'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/node-waves/node-waves.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/hammer/hammer.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/i18n/i18n.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/typeahead-js/typeahead.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets-new/vendor/js/menu.js'); ?>"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?php echo base_url('public/assets-new/vendor/libs/bootstrap-maxlength/bootstrap-maxlength.js'); ?>"></script>

  <!-- Main JS -->
  <script src=".<?php echo base_url('public/assets-new/js/main.js'); ?>"></script>
  

  <!-- Page JS -->
  <script src="<?php echo base_url('public/assets-new/js/app-chat.js'); ?>"></script>
 
 
</body>

</html>

<!-- beautify ignore:end -->