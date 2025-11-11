 <!-- BEGIN: Footer-->
 
        
         
        
           
          
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><?php echo lang('translation.COPYRIGHT © 2024 CIPME, All rights Reserved') ?></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/editors/quill/katex.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/editors/quill/highlight.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/vendors/js/editors/quill/quill.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app-menu.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/core/app.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/customizer.min.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url(); ?>assets/app-assets/js/scripts/forms/form-quill-editor.min.js"></script>
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js" type="text/javascript"></script>

    <script>
    var quill = new Quill('#editor', {
    modules: {
        toolbar: '#toolbar'
    },
    theme: 'snow'
});

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