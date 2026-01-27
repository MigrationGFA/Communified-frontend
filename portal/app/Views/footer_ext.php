 <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT  &copy; 2022 GetFundedAfrica, All rights Reserved</span></span><span class="float-md-end d-none d-md-block">Powered by GFA<i data-feather="heart"></i></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->

    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/repeater/jquery.repeater.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/pages/app-invoice.min.js"></script>
    <!-- END: Page JS-->

    <script>
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>

    <script>
      $(function(){
        
        (function updateTR5() {
  $.ajax({
    type : 'POST',
    url : '<?php echo base_url(); ?>gfa/verifypayment',
    success : function(data){
    //   $('.loadDashboard').html(data);
    },                       // pass existing options
  }).then(function() {           // on completion, restart
     setTimeout(updateTR5, 1000);  // function refers to itself
  });
})();

        (function updateTR6() {
  $.ajax({
    type : 'POST',
    url : '<?php echo base_url(); ?>gfa/verifyexpire',
    success : function(data){
    //   $('.loadDashboard').html(data);
    },                       // pass existing options
  }).then(function() {           // on completion, restart
     setTimeout(updateTR6, 1000);  // function refers to itself
  });
})();

(function updateTR7() {
  $.ajax({
    type : 'POST',
    url : '<?php echo base_url(); ?>gfa/checkpaystack',
    success : function(data){
    //   $('.loadDashboard').html(data);
    },                       // pass existing options
  }).then(function() {           // on completion, restart
     setTimeout(updateTR7, 1000);  // function refers to itself
  });
})();
        
    });
      $(window).on('load',  function(){
        if (feather) {
          feather.replace({ width: 14, height: 14 });
        }
      })
    </script>
  </body>
  
</html>