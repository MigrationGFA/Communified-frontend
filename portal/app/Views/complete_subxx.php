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
         
      <div class="w-100 d-lg-flex align-items-center justify-content-center" style="vertical-align:top;">
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
          <div class="bs-stepper-header px-0" role="tablist">
            <div class="step" data-target="#account-details" role="tab" id="account-details-trigger">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-box">
                  <i data-feather="home" class="font-medium-3"></i>
                </span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Personal</span>
                  <span class="bs-stepper-subtitle">Enter Information</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i data-feather="chevron-right" class="font-medium-2"></i>
            </div>
            <div class="step" data-target="#personal-info" role="tab" id="personal-info-trigger">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-box">
                  <i data-feather="user" class="font-medium-3"></i>
                </span>
                <span class="bs-stepper-label">
                    <span class="bs-stepper-title">Documentation</span>
                  <span class="bs-stepper-subtitle">Upload files</span>
                </span>
              </button>
            </div>
            <div class="line">
              <i data-feather="chevron-right" class="font-medium-2"></i>
            </div>
            <div class="step" data-target="#billing" role="tab" id="billing-trigger">
              <button type="button" class="step-trigger">
                <span class="bs-stepper-box">
                  <i data-feather="credit-card" class="font-medium-3"></i>
                </span>
                <span class="bs-stepper-label">
                  <span class="bs-stepper-title">Startup meeting</span>
                  <span class="bs-stepper-subtitle">Schedule</span>
                </span>
              </button>
            </div>
          </div>
           <form id="fileInfox" method="post" action="" enctype="multipart/form-data">
          <div class="bs-stepper-content px-0 mt-4">
		 
            <div id="account-details" class="form1" >
              <div class="content-header mb-2">
                <h2 class="fw-bolder mb-75">Personal Information</h2>
                <span>Enter information</span>
              </div>
           
                <div class="row">
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="first-name">First Name</label>
                    <input type="text" name="first_name" id="first-name" class="form-control" placeholder="John" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="last-name">Last Name</label>
                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Doe" />
                  </div>
                  <div class="col-md-6 mb-1">
                    <label class="form-label" for="mobile-number">Mobile number</label>
                    <input
                      type="text"
                      name="phone_no"
                      id="mobile-number"
                      class="form-control mobile-number-mask"
                      placeholder="(472) 765-3654"
                    />
                  </div>
                  <!--<div class="col-md-6 mb-1">-->
                  <!--  <label class="form-label" for="pin-code">Link</label>-->
                  <!--   <input-->
                  <!--    type="text"-->
                  <!--    name="home-address"-->
                  <!--    id="home-address"-->
                  <!--    class="form-control"-->
                  <!--    placeholder="Link"-->
                  <!--  />-->
                  <!--</div>-->

                  <div class="col-12 mb-1">
                    <label class="form-label" for="home-address">Home Address</label>
                    <input
                      type="text"
                      name="address"
                      id="home-address"
                      class="form-control"
                      placeholder="Address"
                    />
                  </div>

                  <div class="col-12 mb-1">
                    <label class="form-label" for="area-address">Area, Street, Sector, Village</label>
                    <input
                      type="text"
                      name="city"
                      id="area-address"
                      class="form-control"
                      placeholder="Area, Street, Sector, Village"
                    />
                  </div>

                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">Town/City</label>
                    <input type="text" name="town" id="town-city" class="form-control" placeholder="Town/City" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="country">Country</label>
                    <select class="select2 w-100" name="country" id="country">
                      <option value="" label="blank"></option>
                      <option value="AK">Nigeria</option>
                      <option value="HI">South Africa</option>
                      <option value="CA">Ghana</option>
                      <option value="NV">Kenya</option>
                      <option value="OR">Morroco</option>
                    </select>
                  </div>
                </div>
         

              <div class="d-flex justify-content-between mt-2">
                <button class="btn btn-outline-secondary btn-prev" disabled>
                  <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next nextForm1">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
                  <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                </button>
              </div>
            </div>
            
			<div id="personal-info" class="form2" style="display:none">
             
            
              
                <div class="content-header my-2 py-1">
                  <h2 class="fw-bolder mb-75">Upload Documentation</h2>
                  <span>All your document are important to complete your application</span>
                </div>

                <div class="row gx-2">
                 <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">National Identity Number (NIN)</label>
                    <input type="file" id="addCardName" name="file" class="form-control" placeholder="NIN" />
                  </div>

                   <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">Company Register Certificate</label>
                    <input type="file" id="addCardName" name="file2" class="form-control" placeholder="Company" />
                  </div>

                   <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">National Identity Number (NIN)</label>
                    <input type="file" id="addCardName" name="file3" class="form-control" placeholder="John Doe" />
                  </div>

                  <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">Passport Photograh</label>
                    <input type="file" id="addCardName" name="file4" class="form-control" placeholder="John Doe" />
                  </div>
                </div>
              

              <div class="d-flex justify-content-between mt-2 ">
                <button class="btn btn-primary btn-prev prevForm2">
                  <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none ">Previous</span>
                </button>
                <button class="btn btn-primary btn-next nextForm2">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
                  <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                </button>
              </div>
            </div>
            <div id="billing" class="form3" style="display:none">
             
              
              <div class="d-flex justify-content-between mt-">
                <button class="btn btn-primary btn-prev prevForm3">
                  <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none ">Previous</span>
                </button>
                <button class="btn btn-primary btn-next nextForm3" type="submit" name="action">
                  <span class="align-middle d-sm-inline-block d-none">Submit</span>
                  <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                </button>
              </div>
                <div class="row gx-2">
                  <iframe src="https://calendly.com/webthinkers/60min?month=2021-12" title="description" width="100%" height="400px"></iframe> 
                </div>
              

              <input type="hidden" name="package" class="showValue" value="<?php echo $package ?>">
               <input type="hidden" name="email" class="" value="<?php echo $this->encrypt->decode($this->session->userdata('email') ) ?>">
               
              
            </div>
            <p class="saveFile3"></p>
          </div>
         
          <!--<button class="btn btn-primary right" type="submit" name="action">Submit</button> -->
          </form>
        
		</div>
      </div>
    </div>
  </div>
</div>
<script>
                        $(function(){
                            
    $(".nextForm1").click(function(e){
        e.preventDefault();
       $(".form1").hide(); 
         $(".form2").show();  
        
    });
    $(".nextForm2").click(function(e){
         e.preventDefault();
       $(".form2").hide(); 
         $(".form3").show(); 
     });
    
         $(".prevForm2").click(function(e){
             e.preventDefault();
       $(".form1").show(); 
         $(".form2").hide();  
        
         });
    
     $(".prevForm3").click(function(e){
         e.preventDefault();
       $(".form2").show(); 
         $(".form3").hide(); 
         
    });
						
    
     
                       $("#fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/profile_upload",
	 error:function() {$(".saveFile3").html('Error')},
	 beforeSend:function() {$(".saveFile3").html('Uploading...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".saveFile3").html('Finish Uploading');
		var value = $(".showValue").val();
		
		if(value=='payasugo'){
		    window.open("<?php echo base_url(); ?>gfa/shop/", "_self");
		}
		//}
		//if(data==2){
		//$(".saveFile3").html('Error Uploading');
		//}
      }
    });
    return false;

  });
                        });
						</script>

        </div>
      </div>
    </div>
    <!-- END: Content-->
