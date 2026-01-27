 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <div class="auth-wrapper auth-cover">
            <div class="auth-inner row m-0">
              <!-- Brand logo--><a class="brand-logo" href="<?php echo base_url(); ?>">
               <img src="<?php echo base_url(); ?>assets/images/gfa-logo.png">
               </a>
              <!-- /Brand logo-->
              <!-- Left Text-->
              <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="<?php echo base_url(); ?>assets/images/Cartoon-Start-Up.png" alt="Start Up Application"/></div>
              </div>
              <!-- /Left Text-->
              <!-- Register-->
              <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                  <h2 class="card-title fw-bold mb-1">Start Up Application 🚀</h2>
                  <p class="card-text mb-2 saveStartUp">Apply for Investor!</p>
                  <form class="auth-register-form mt-2" id="startUp" action="" method="POST">
                    <div class="mb-1">
					
                      <label class="form-label" for="register-username">Do you have a registered business name</label>
					  <select class="form-control" id="register-username" name="business_name" aria-describedby="register-username" autofocus="" tabindex="1">
					  <option value="yes">Yes</option>
					  <option value="no">No</option>
					  <option value="in_process">In Process</option>
					  </select>
                        </div>
                    <div class="mb-1">
                      <label class="form-label" for="register-email">How Much do you want to rase</label>
                      <select class="form-control" id="register-username" name="raise_money" aria-describedby="register-username" autofocus="" tabindex="1">
					 
					   <option value="1000-5000">$1,000 - $5,000</option>
					   <option value="5000-10000">$5,000 - $10,000</option>
					    <option value="10000-20000">$10,000 - $20,000</option>
					    <option value="20000-30000">$20,000 - $30,000</option>
					    <option value="30000-40000">$30,000 - $40,000</option>
					    <option value="40000-50000">$40,000 - $50,000</option>
					    <option value="50000-60000">$50,000 - $60,000</option>
					    <option value="60000-70000">$60,000 - $70,000</option>
					    <option value="70000-80000">$70,000 - $80,000</option>
					    <option value="80000-90000">$80,000 - $90,000</option>
						 <option value="100000-500000">$100,000 - $500,000</option>
						  <option value="500000-1000000">$500,000 - $1,000,000</option>
						   <option value="1000000-10000000">$1,000,000 - $10,000,000</option>
						   <option value="10000000-50000000">$10,000,000 - $50,000,000</option>
						   <option value="50000000-100000000">$50,000,000 - $100,000,000</option>
						   <option value="10000000-above">$100,000,000 Above</option>
					  </select>
                    </div>
					
					<div class="mb-1">
                      <label class="form-label" for="register-email">Projected Revenue </label>
                      <select class="form-control" id="register-username" name="project_revenue" aria-describedby="register-username" autofocus="" tabindex="1">
					  
					   <option value="0-1000">$0 - $1,000</option>
					   <option value="1000-10000">$1,000 - $10,000</option>
					    <option value="10000-1000">$10,000 - $100,000</option>
						 <option value="100000-500000">$100,000 - $500,000</option>
						  <option value="500000-1000000">$500,000 - $1,000,000</option>
						   <option value="1000000-10000000">$1,000,000 - $10,000,000</option>
						   <option value="10000000-50000000">$10,000,000 - $50,000,000</option>
						   <option value="50000000-100000000">$50,000,000 - $100,000,000</option>
						   <option value="10000000-above">$100,000,000 Above</option>
					  </select>
                    </div>
					
					<div class="mb-1">
                      <label class="form-label" for="register-email">Industry of investment </label>
                      <select class="form-control" id="register-username" name="industry" aria-describedby="register-username" autofocus="" tabindex="1">
					  <option value="Agriculture">Agriculture</option>
					   <option value="Information_Technology">Information Technology</option>
					    <option value="Medicine_Pharamacy">Medicine & Pharamacy</option>
						 <option value="Entertainment">Entertainment</option>
						  <option value="Lesuire">Lesuire</option>
						   <option value="Commerce and Trade">Commerce and Trade</option>
						   <option value="Others">Others</option>
						   
					  </select>
                    </div>
                    <div class="mb-1">
                      <label class="form-label" for="register-email">Email</label>
                      <div class="input-group input-group-merge form-email-toggle">
                        <input class="form-control form-control-merge" required id="register-email" type="email" name="email" placeholder="Enter your email" aria-describedby="register-password" tabindex="3"/><span class="input-group-text cursor-pointer"></span>
                      </div>
                    </div>
                    <div class="mb-1">
                      <div class="form-check">
                        <input class="form-check-input" id="isPrivacySelected" type="checkbox" tabindex="4"/>
                        <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary w-100 regButton" tabindex="5">Continue</button>
					
                  </form>
                  <p class="text-center mt-2"><span>Already have an account?</span><a href="<?php echo base_url(); ?>gfa/"><span>&nbsp;Sign in instead</span></a></p>
                  <!--<div class="divider my-2">
                    <div class="divider-text">or</div>
                  </div>
                  <div class="auth-footer-btn d-flex justify-content-center"><a class="btn btn-facebook" href="#"><i data-feather="facebook"></i></a><a class="btn btn-twitter white" href="#"><i data-feather="twitter"></i></a><a class="btn btn-google" href="#"></a></div>
                --></div>
              </div>
              <!-- /Register-->
            </div>
          </div>
        </div>
      </div>
    </div>
	<script>
                        $(function(){
							
							
							
							$('#isPrivacySelected').on('change', function () {

   if ($(this).is(':checked'))
    $(".regButton").prop("disabled", false);
   else
   $(".regButton").prop("disabled", true);
});
						
                        $("#startUp").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	
	 var personalInfo = $('#startUp').serialize();
	 $.ajax({
     data:personalInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/signupAction",
	 beforeSend:function() {$(".saveStartUp").html('<i class="material-icons left">Processing</i>');},
      success: function(data) {
       
		
		$(".saveStartUp").html(data);
		//$(".saveStartUp").html(""); 
		
      }
    });
	 
    
	
   

  });
                        
});
						</script>
    <!-- END: Content-->