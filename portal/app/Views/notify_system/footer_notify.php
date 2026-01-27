<?php //session_start(); ?>          
         

<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
  <div class="container-xxl">
      
    <div class="footer-container d-flex align-items-center justify-content-between py-2 flex-md-row flex-column">
      <div>
        © <script>
        document.write(new Date().getFullYear())
        </script>
        , All rights resevered<a href="#" target="_blank" class="fw-semibold">CIPME</a>
      </div>
      <div>
        
        <a href="#" class="footer-link me-4" target="_blank">Get in touch</a>
        <a href="#" target="_blank" class="footer-link me-4">Request a call</a>
        
        <a href="#" target="_blank" class="footer-link me-4">Privacy</a>
        
      
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
 
 <script src="<?php echo base_url('public/assets-new/vendor/libs/popper/popper.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/js/bootstrap.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/node-waves/node-waves.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/hammer/hammer.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/i18n/i18n.js'); ?>"></script>
  <script src="<?php echo base_url('public/assets-new/vendor/libs/typeahead-js/typeahead.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets-new/vendor/js/menu.js'); ?>"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="<?php echo base_url('public/assets-new/vendor/libs/quill/katex.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/quill/quill.js'); ?>"></script>
<script src="<?php echo base_url('public/assets-new/vendor/libs/select2/select2.js'); ?>"></script>


  <!-- Main JS -->
  <script src="<?php echo base_url('public/assets-new/js/main.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets-new/js/app-chat.js'); ?>"></script>

  <!-- Page JS -->
  <script src="<?php echo base_url('public/assets-new/js/app-email.js'); ?>"></script>
  <script>
    $(document).ready(function() {
      $('.contentProfile').load('<?php echo base_url('gfa/loadprofile'); ?>');
      $('.contentSub').load('<?php echo base_url('gfa/loadsub'); ?>');
      
      
    });
  </script>
  <script>
    
         
        $(function(){
            
            
            
            $(".clickInbox").click(function() { 
    
    $(".showInbox").show();
      });
      $(".clickAll").click(function() {
    
    $(".showInbox").hide();
      });
      
        $('.replyButton').on('click', function() {
    var getRefReply = $(".refIdMsg").val();
    var replyContent = $(".replyContent").html();
    $.ajax({
        data: { getRefReply: getRefReply, replyContent:replyContent },
        type: "POST",
        url: "<?php echo base_url(); ?>gfa/replymsgpro",
        error: function() {
            $(".titleMsg").html('Error');
        },
        beforeSend: function() {
            $(".resultReplyData").html('Replying...');
            $('.replyButton').prop("disabled", true);

        },
        success: function(data) {
           $('.replyButton').prop("disabled", false);
           $(".resultReplyData").html(data);
            $(".resultReplyData").html(data).delay(2000).fadeOut('slow');
            // window.open("<?php echo base_url(); ?>admin/resource", "_self");
        }
    });
});
            
            $('li.email-list-item').on('click', function() {
    var getRefInbox = $(this).attr("lms");
    $.ajax({
        data: { getRefInbox: getRefInbox },
        type: "POST",
        url: "<?php echo base_url(); ?>gfa/checkmsgpro",
        error: function() {
            $(".titleMsg").html('Error');
        },
        beforeSend: function() {
            $(".titleMsg").html('Checking...');
        },
        success: function(response) {
            var getdata = response.split("|"); // Corrected line 
            
            $(".titleMsg").html(getdata[0]);
            $(".nameMsg").html(getdata[1]);
            $(".emailMsg").html(getdata[2]);
            $(".dateMsg").html(getdata[3]);
            $(".contentMsg").html(getdata[4]);
             $(".refIdMsg").val(getdata[5]);
              $(".nameMsgSender").html(getdata[6]);
            // $(".resultData").html(data).delay(2000).fadeOut('slow');
            // window.open("<?php echo base_url(); ?>admin/resource", "_self"); 
        }
    });
});


         
        $('.btnSend').click(function(e) {
    e.preventDefault();
    
    // Get the form data
    var formData = new FormData($('#composeSender')[0]);
    
    // Get the content of the element with class 'composeEditor'
    var editorContent = $(".composeEditor").html(); // or .text() if you want plain text 
    
    // Append the editor content to the FormData object
    formData.append('editorContent', editorContent);
      
    $.ajax({
        data: formData,
        type: "POST",
        url: "<?php echo base_url(); ?>gfa/composepro",
        error: function() {
            $(".displayAction").html('Error');
        },
        beforeSend: function() {
            $(".displayActionCompose").html('Submitting...');
            $(this).prop("disabled", true);
            
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $(this).prop("disabled", false);
            $(".displayActionCompose").html("Submit");
            $(".resultData").html(data).delay(2000).fadeOut('slow');
            // window.open("<?php echo base_url(); ?>admin/resource", "_self");
        }
    });
});
         $('.btnSave').click(function(e) { 
    e.preventDefault();
    
    // Get the form data
    var formData = new FormData($('#composeSender')[0]);
    
    // Get the content of the element with class 'composeEditor'
    var editorContent = $(".composeEditor").html(); // or .text() if you want plain text
    
    // Append the editor content to the FormData object
    formData.append('editorContent', editorContent);
      
    $.ajax({
        data: formData,
        type: "POST",
        url: "<?php echo base_url(); ?>gfa/composesavepro",
        error: function() {
            $(".displayAction").html('Error');
        },
        beforeSend: function() {
            $(".displayActionComposeSave").html('Saving...');
            $(this).prop("disabled", true);
        },
        processData: false,
        contentType: false,
        success: function(data) {
            $(this).prop("disabled", false);
            $(".displayActionComposeSave").html("Save");
            $(".resultData").html(data).delay(2000).fadeOut('slow');
            // window.open("<?php echo base_url(); ?>admin/resource", "_self");
        }
    });
});

        });
    </script>
 
</body>

</html>

<!-- beautify ignore:end -->