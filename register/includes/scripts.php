<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/forms/wizard/bs-stepper.min.js"></script>
<script src="app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="app-assets/js/scripts/forms/form-select2.min.js"></script>
<script src="app-assets/vendors/js/forms/validation/jquery.validate.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Page Vendor JS-->
<script src="app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/picker.time.js"></script>
<script src="app-assets/vendors/js/pickers/pickadate/legacy.js"></script>
<script src="app-assets/vendors/js/pickers/flatpickr/flatpickr.min.js"></script>
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="app-assets/js/core/app-menu.min.js"></script>
<script src="app-assets/js/core/app.min.js"></script>
<script src="app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="app-assets/js/scripts/forms/form-wizard.min.js"></script>
<!-- END: Page JS-->

<script src="app-assets/js/scripts/forms/pickers/form-pickers.min.js"></script>

<script>
        document.addEventListener("DOMContentLoaded", function() {
            var alertModal = new bootstrap.Modal(document.getElementById('alertModal'));
            alertModal.show();
        });
</script>
<!-- END: Page JS-->
<script>
    $(document).ready(function() {
$('.select2-multiple').select2({
                    placeholder: "Select resources",
                    width: '100%'  // Ensure it takes full width
                });

});
</script>
<script>
    $(window).on("load", function () {
    if (feather) {
        feather.replace({ width: 14, height: 14 });
    }
    });
</script>
<!-- END: Page JS-->


<!-- Api Scripts -->
<script src="api/v0/js/core.js"></script>