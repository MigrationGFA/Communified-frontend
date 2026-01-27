<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Change Password</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
<!--      <div class="alert alert-info" role="alert">-->
<!--              <h4 class="alert-heading">Note</h4>-->
<!--              <div class="alert-body">-->
                  
               
<!--<p>Criteria for approving submitted events below:</p>-->
<!--<ul>-->
<!--<li>You must not promote tribal, ethnic or religious divisiveness at any level</li>-->
<!--<li>You must not be seen to contravene applicable laws of the country of origin</li>-->
<!--<li>You must have updated your GFA profile to at least 50% completion.</li>-->
<!--</ul>-->
<!--              </div>-->
<!--            </div>-->
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
         <section id="input-sizing">
  <div class="row match-height" bis_skin_checked="1">
    <div class="col-md-6 col-12" bis_skin_checked="1">
      <div class="card" bis_skin_checked="1">
        <div class="card-header" bis_skin_checked="1">
          <!-- <h4 class="card-title">Password</h4> -->
        </div>
        <?php 
        
        $profile_request = $this->gfa_model->getLoginDetails($email); 
        
        ?>
        <div class="card-body" bis_skin_checked="1">
          <div class="row" bis_skin_checked="1">
            <div class="col-12" bis_skin_checked="1">
              <p class="card-text displayError" style="display:none">
                 <code><?php echo lang('translation.Minimum of 8 characters') ?></code> 
                <!-- <code>.form-control-sm</code> for Large, Small input box. -->
              </p>
              <div class="mb-1" bis_skin_checked="1">
                <label class="form-label" for="largeInput"><?php echo lang('translation.Password') ?></label>
                <input id="largeInput" class="form-control form-control-lg oldPassX" readonly type="text" placeholder="Old Password" value="<?php echo $profile_request[0]['password']; ?>">
                <input  type="hidden" name="id"  value="<?php echo $profile_request[0]['id']; ?>">

            </div>
              <div class="mb-1" bis_skin_checked="1">
                <label class="form-label" for="defaultInput"><?php echo lang('translation.New Password') ?></label>
                <input id="defaultInput" class="form-control form-control-lg resetPass" name="password" required type="password" placeholder="<?php echo lang('translation.New Password') ?>">
              </div>
              <div bis_skin_checked="1">
                <label class="form-label" for="smallInput"><?php echo lang('translation.Confirm Password') ?></label>
                <input id="smallInput" class="form-control form-control-lg oldPass" readonly type="text" placeholder="<?php echo lang('translation.Confirm Password') ?>">
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</section>   
              
   
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2"><?php echo lang('translation.Update') ?></button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
   
    
    <script>
      $(function(){
          
        //var oldPass = $(".oldPass").val(); 
        
        $(".resetPass").on('input', function(){
        var newPass = $(this).val();  
        
        // Update the value of .oldPass if necessary
        // Ensure that this behavior is intentional. Typically, .oldPass refers to the current password.
        $(".oldPass").val(newPass);
        
        // Define the password strength criteria using a regular expression
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
        
        // Test the new password against the regex
        if(passwordRegex.test(newPass)){
            // If password meets all criteria, hide the error message and enable the submit button
            $('.displayError').hide();
            $(".EventBtn").prop('disabled', false);
        } else {
            // If password does not meet criteria, show the error message and disable the submit button
            $('.displayError').show().text('Password must be at least 8 characters long and include uppercase, lowercase, number, and symbol.');
            $(".EventBtn").prop('disabled', true);
        }
    });
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
       
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/changepasspro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Mise à jour en cours...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html("Mise à jour réussie");  
	//    $(".saveBtn").html(data); 
       $(".oldPassX").val(data);
		 $(".EventBtn").prop('disabled', true);
    //  window.open("<?php echo base_url(); ?>gfa/manage_perks", "_self");



      }
    });

    
    return false;

  });
         
          
          
      });  
    </script>

    <!-- Blog Comment -->
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->

          </div>
        
        
      </div>
    </div>