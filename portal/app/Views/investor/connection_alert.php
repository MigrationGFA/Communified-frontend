 <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');

  #==============Get Name================================
  $requestdata = $this->gfa_model->getAllRequestConnections($email);
  $requestEmail = $requestdata[0]['email_startup'];
  $startupDetail = $this->gfa_model->getStartUpDetails($requestEmail)[0]['Primary_Contact_Name'];
  $investorDetail =  $this->admin_model->getAllInvestorByEmail($requestEmail)[0]['Contact_Name'];
  $mentorDetail =  $this->admin_model->getAllMentorByEmail($requestEmail)[0]['Mentor_name'];
  $corperateDetail =  $this->admin_model->getAllCorperateByEmail($requestEmail)[0]['Key_contact_name'];
  if(!empty($startupDetail)){

      $name = $startupDetail;
  }
  if(!empty($investorDetail)){

      $name = $investorDetail;
  }
  if(!empty($mentorDetail)){

      $name = $mentorDetail;
  }
  if(!empty($corperateDetail)){

      $name = $corperateDetail;
  }
   ?>

   
  
 <script src="<?php echo base_url("public/assets/app-assets/vendors/js/vendors.min.js"); ?>"></script>
<div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title"><?php echo lang('translation.Connection Alert') ?></h4>
        </div>
        <div class="card-body">
          <!-- Buttons with Icon -->
          <p class="card-text mb-0">
            <?php echo ucwords($name) ?> <?php echo lang('translation.Requesting connection') ?>
          </p>
          <div class="demo-inline-spacing">
            <a href="#" class="btn btn-danger rejectBtn" lnc="reject" ldb="<?php echo $requestdata[0]['id'] ?>" lem="<?php echo $requestdata[0]['email_startup'] ?>">
              <!-- <i data-feather="x-circle" class="me-25"></i> -->
              <span>x <lsp class="lspConnectionR"><?php echo lang('translation.Reject') ?></lsp></span>
            </a>
            <a type="#" class="btn btn-success acceptBtn" lnc="accept" ldb="<?php echo $requestdata[0]['id'] ?>" lem="<?php echo $requestdata[0]['email_startup'] ?>">
              <!-- <i data-feather="check" class="me-25"></i> -->
              <span>✓ <lsp class="lspConnection"><?php echo lang('translation.Accept') ?></lsp></span>
            </a>
            <!-- <button type="button" class="btn btn-flat-"> -->
              
              <span class="dashboardConnection"></span>
            <!-- </button> -->
            <!-- <button type="button" class="btn btn-outline-primary" disabled>
              <i data-feather="home" class="me-25"></i>
              <span>Home</span>
            </button> -->
          </div>
        </div>
      </div>

      <script>
      $(function(){

    
      $(".rejectBtn, .acceptBtn").on('click',  function(){
        
        //load Current Notification
        var getConType = $(this).attr("lnc");
        var getId = $(this).attr("ldb");
        var getEmail = $(this).attr("lem");
        $.ajax({
        url: '<?php echo base_url("gfa/dashboardConnection") ?>',
        data:{getConType:getConType,getId:getId,getEmail:getEmail},
        method: 'POST',
        beforeSend: function() {
            // Code to be executed before the AJAX request is sent
            $(".dashboardConnection").html("Connection updating...");

            // You can add loading indicators or other preparations here
        },
        success: function(data) {
            // Code to be executed after the AJAX request is successful
          $(".dashboardConnection").html("");
          if(data =="Accepted"){
          $(".lspConnection").html(data);
        }
        if(data =="Rejected"){
          $(".lspConnectionR").html(data);
        }

          $(this).prop("disabled", true);
          $(".connectionAlert").hide("slow");
            // $(".dashboardConnection").html(data);
            
            // You can perform additional actions or manipulate the loaded content here
        },
        error: function(xhr, status, error) {
            // Handle errors if the AJAX request fails
            $(".dashboardConnection").html('Error:', status, error);
        }
    });
         //Load notification
         
      });
       });
    </script>