<div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-cover">
  <div class="auth-inner row m-0">
    <!-- Brand logo-->
    <a class="brand-logo" href="<?php echo base_url(); ?>">
     
      <img src="<?php echo base_url(); ?>assets/images/gfa-logo.png">
    </a>
    <!-- /Brand logo-->

    <!-- Left Text-->
    <div class="col-lg-3 d-none d-lg-flex align-items-center p-0">
      <div class="w-100 d-lg-flex align-items-center justify-content-center">
        <img
          class="img-fluid w-100"
          src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/create-account.svg"
          alt="multi-steps"
        />
      </div>
    </div>
    <!-- /Left Text-->

    <!-- Register-->
    <div class="col-lg-9 d-flex align-items-center auth-bg px-2 px-sm-3 px-lg-5 pt-3">
      <div class="width-700 mx-auto">
        <div class="bs-stepper register-multi-steps-wizard shadow-none">
        
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Select plan to continue</h4>
      </div>
      <div class="card-body">
          
        <form id="myForm" action="<?php echo base_url(); ?>gfa/complete_sub/" method="get"><div class="row custom-options-checkable g-1">
		    <div class="col-md-4">
            <input
              class="custom-option-item-check isPrivacySelected"
              type="radio"
              name="radio"
              id="customOptionsCheckableRadiosWithIcon3"
              value="pay"
            />
            <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcon3">
              <i data-feather="users" class="font-large-1 mb-75"></i>
              <span class="custom-option-item-title h4 d-block">Subscibe</span>
              <small>Complete your application and meet and access over 100 investors.</small>
			   <br>
			   <span class="plan-price">
                        <sup class="font-medium-1 fw-bold text-primary">$</sup>
                        <span class="pricing-value fw-bolder text-primary">499</span>
                        <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
               </span>
					  
            </label>
          </div>
		
		
		 <div class="col-md-4">
            <input
              class="custom-option-item-check isPrivacySelected"
              type="radio"
              name="radio"
              id="customOptionsCheckableRadiosWithIcon2"
              value="free"
              checked
            />
            <label class="custom-option-item text-center text-center p-1" for="customOptionsCheckableRadiosWithIcon2">
              <i data-feather="user" class="font-large-1 mb-75"></i>
              <span class="custom-option-item-title h4 d-block">Free</span>
              <small>Get 1 investor every week sent to your email for a month.</small>
			   <br>
			   <span class="plan-price">
                        <sup class="font-medium-1 fw-bold text-primary">$</sup>
                        <span class="pricing-value fw-bolder text-primary">0</span>
                        <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
               </span>
            </label>
          </div>
		
		
          <div class="col-md-4">
            <input
              class="custom-option-item-check isPrivacySelected"
              type="radio"
              name="radio"
              id="customOptionsCheckableRadiosWithIcon1"
              value="payasugo"
            />
            <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcon1">
              <i data-feather="play" class="font-large-1 mb-75"></i>
              <span class="custom-option-item-title h4 d-block">Pay as you Go</span>
              <small>Select from hundreds of our informative materials.<br><b>Starting from</b></small>
			  <br>
			   <span class="plan-price">
                        <sup class="font-medium-1 fw-bold text-primary">$</sup>
                        <span class="pricing-value fw-bolder text-primary">99</span>
                        <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                </span>
            </label>
          </div>

         
         
        </div>
      </div>
	  <button class="btn btn-primary w-100 btnTest" tabindex="4">Continue</button>
    </div>
  </div>
		
		<input type="hidden" class="showValue" value="free">
		</form>
		</div>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->
    <script>
     $(function(){
         var valuex =    $(".showValue").val() ;
          $('#myForm').on('click', function () {
        var value = $("[name=radio]:checked").val();

         var valuex =    $(".showValue").val(value) ;
    //   if(value == "pay"){
    //   window.open("<?php echo base_url(); ?>gfa/complete_sub/"+value, "_self");
    //   }
    //   if(value == "free"){
    //   window.open("<?php echo base_url(); ?>gfa/complete_sub/"+value, "_self");
    //   }
    //   if(value == "payasugo"){
    //   window.open("<?php echo base_url(); ?>gfa/complete_sub/"+value, "_self");
    //   }
    });
    
    // $(".btnTest").submit(function () {
    
    //     window.open("<?php echo base_url(); ?>gfa/complete_sub/"+valuex, "_self"); 
    // });
         
});
    </script>