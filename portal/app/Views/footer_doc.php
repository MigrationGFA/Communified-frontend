 <!-- BEGIN: Footer-->
 
    <footer class="footer footer-static footer-light">
      <p class="clearfix mb-0"><span class="float-md-start d-block d-md-inline-block mt-25"><?php echo lang('translation.COPYRIGHT © 2024 CIPME, All rights Reserved') ?></span></p>
    </footer>
    <button class="btn btn-primary btn-icon scroll-top" type="button"><i data-feather="arrow-up"></i></button>
    <!-- END: Footer-->


    <!-- BEGIN: Page Vendor JS-->
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/editors/quill/katex.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/editors/quill/highlight.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/editors/quill/quill.min.js'); ?>"></script>
    <!-- END: Page Vendor JS-->

    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/extensions/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/forms/select/select2.full.min.js'); ?>"></script>
      <script src="<?php echo base_url('public/assets/app-assets/js/scripts/forms/form-select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-calendar-events.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/pages/app-calendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/calendar/fullcalendar.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/core/api.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.date.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/picker.time.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/pickadate/legacy.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/forms/pickers/form-pickers.min.js'); ?>"></script>
    <!-- BEGIN: Theme JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/core/app-menu.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/core/app.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/customizer.min.js'); ?>"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?php echo base_url('public/assets/app-assets/js/scripts/forms/form-quill-editor.min.js'); ?>"></script>
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

   
    
  </body>
  
</html>