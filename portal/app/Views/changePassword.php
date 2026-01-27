<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="app-content content">
     <!--  <div class="content-overlay-"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">-->
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Change Password </h2>
                <div class="breadcrumb-wrapper">
                  <!--<ol class="breadcrumb">-->
                  <!--  <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/signoutAction'); ?>">Logout</a>-->
                  <!--  </li>-->
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/subscribe">Subscription</a> </li>-->
                   
                    
                    
                  <!--</ol>-->
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
                 <code>Minimum of 8 characters</code> 
                <!-- <code>.form-control-sm</code> for Large, Small input box. -->
              </p>
              <p class="card-text displayErrorX" style="display:none">
                 <code>Pass does not match</code> 
                <!-- <code>.form-control-sm</code> for Large, Small input box. -->
              </p>
              <!--<div class="mb-1" bis_skin_checked="1">-->
              <!--  <label class="form-label" for="largeInput">Password</label>-->
                <input id="largeInput" class="form-control form-control-lg oldPassX" readonly type="hidden" placeholder="Old Password" value="<?php echo $profile_request[0]['password']; ?>">
                <input  type="hidden" name="id"  value="<?php echo $profile_request[0]['id']; ?>">

            <!--</div>-->
              <div class="mb-1" bis_skin_checked="1">
                <label class="form-label" for="defaultInput">New Password</label>
                <input id="defaultInput" class="form-control form-control-lg resetPass" autocomplete="off" name="password" required type="password" placeholder="New Password">
              </div>
              <div bis_skin_checked="1">
                <label class="form-label" for="smallInput">Confirm Password</label>
                <input id="smallInput" class="form-control form-control-lg oldPass" autocomplete="off" required type="password" placeholder="Confirm Password">
              </div>
            </div>
           
          </div>
        </div>
      </div>
    </div>
   
  </div>
</section>   
              
   
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Update</button><span class="displayAction"></span>
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
          
        
         //var oldPass =    $(".oldPass").val();
        
        $(".resetPass").keyup(function(){
            var newPass = $(".resetPass").val();  

         if(newPass.length >= 8){
            $('.displayError').hide();
            $(".EventBtn").prop('disabled', false);
         }else{
            $('.displayError').show();
            $(".EventBtn").prop('disabled', true);
         }
        });
        
        $(".oldPass").keyup(function(){
          var  oldPass =    $(".oldPass").val();
             var newPass = $(".resetPass").val(); 
         if(oldPass.length >= 8 && oldPass == newPass){
            $('.displayError').hide();
            $('.displayErrorX').hide();
            $(".EventBtn").prop('disabled', false);
         }else{
            $('.displayError').show();
            $('.displayErrorX').show();
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
	 beforeSend:function() {$(".displayAction").html('Updating...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html("Successfully Updated");  
	//    $(".saveBtn").html(data); 
       $(".oldPassX").val(data);
		 $(".EventBtn").prop('disabled', true);
    window.open("<?php echo base_url(); ?>gfa/login_verify", "_self");



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