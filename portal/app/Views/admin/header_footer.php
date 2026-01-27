
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url('public/assets/bootstrap/js/bootstrap.min.js ') ?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('public/assets/plugins/select2/select2.full.min.js ') ?>"></script>
<script src="<?php echo base_url('public/assets/plugins/datatables/jquery.dataTables.min.js ') ?>"></script>
<script src="<?php echo base_url('public/assets/plugins/datatables/dataTables.bootstrap.min.js ') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js ') ?>"></script>
<script src="<?php echo base_url('public/assets/plugins/datepicker/bootstrap-datepicker.js ') ?>"></script>

<!-- SlimScroll --> 
<script src="<?php echo base_url('public/assets/plugins/slimScroll/jquery.slimscroll.min.js ') ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('public/assets/plugins/fastclick/fastclick.js ') ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('public/assets/dist/js/app.min.js ') ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('public/assets/dist/js/demo.js ') ?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
<script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js ') ?>"></script>
<script src="<?php echo base_url('public/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js ') ?>"></script>
<script>
  $(function () {
      //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
    $('#datepicker1').datepicker({
      autoclose: true
    });
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
    CKEDITOR.replace('editor2');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
     CKEDITOR.replace('editor3');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
     CKEDITOR.replace('editor4');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
     CKEDITOR.replace('editor5');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
     
  });
   
</script>

<script> 
   window.onload = function () {
    document.getElementById("print")
        .addEventListener("click", () => {
            // const invoice = this.document.getElementById("invoice");
            const invoice = this.document.body;
            console.log(invoice);
            console.log(window);
            var opt = {
                margin: 1,
                filename: 'myfile.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'in', format: 'letter', orientation: 'portrait' }
            };
            html2pdf().from(invoice).set(opt).save();
        })
}
</script>

</body>
</html>
