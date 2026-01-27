<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
            <h4> <?php echo ucwords($batchData[0]['Description']) ?> </h4>
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height loadModule1 loadingPage1">
   
  </div>
<div class="row match-height loadModule2 loadingPage2">
   
  </div>
      <div class="row match-height loadModule3 loadingPage3">
   
  </div>
   <div class="row match-height loadModule4 loadingPage4">
   
  </div>
 

</section>
<input type="hidden" id="batch" value="<?php echo $batchSet ?>" />
      <input type="hidden" id="state" value="<?php echo $batchData[0]['state'] ?>" />
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    
    
    <script>
    $(document).ready(function() {
        var batch = $('#batch').val();
      var state = $('#state').val();
       $(window).on('load', function() {
    
    // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/loadModule1") ?>',
        method: 'POST',
        data:{batch:batch},
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadingPage1").html("Loading application breakdown...");

            // You can add loading indicators or other preparations here
        },
        success: function(response) {
            // Code to be executed after the AJAX request is successful
        	$(".loadingPage1").html("");
            $(".loadModule1").html(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage1").html('Error:', status, error);
        }
    });
       
     // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/loadModule3") ?>',
        method: 'POST',
    	data:{batch:batch,state:state},
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadingPage3").html("Loading application breakdown...");

            // You can add loading indicators or other preparations here
        },
        success: function(response) {
            // Code to be executed after the AJAX request is successful
        	$(".loadingPage3").html("");
            $(".loadModule3").html(response);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage3").html('Error:', status, error);
        }
    });
        
    $.ajax({
        url: '<?php echo base_url("gfa/loadModule4") ?>',
        method: 'POST',
    	data:{batch:batch,state:state},
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".loadingPage4").html("Loading application by gender and target...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
            // Code to be executed after the AJAX request is successful
        	$(".loadingPage4").html("");
            $(".loadModule4").html(data);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".loadingPage4").html('Error:', status, error);
        }
    });
});
    });
        
    </script>