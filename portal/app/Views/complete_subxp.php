 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body"><div class="auth-wrapper auth-cover">
  <div class="auth-inner row m-0">
    <!-- Brand logo-->
    <a class="brand-logo" href="index.html">
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
                  <span class="bs-stepper-title">Startup Onboarding</span>
                  <span class="bs-stepper-subtitle">Personal Information</span>
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
                  <span class="bs-stepper-title">Startup meeting Documentation</span>
                  <span class="bs-stepper-subtitle">Schedule</span>
                </span>
              </button>
            </div>
          </div>
          <div class="bs-stepper-content px-0 mt-4">
		  
            <div id="account-details" class="content" role="tabpanel" aria-labelledby="account-details-trigger">
              <div class="content-header mb-2">
                <h2 class="fw-bolder mb-75">Personal Information</h2>
                <span>Enter information</span>
              </div>
             <form>
                <div class="row">
					
				  <div class="mb-1 col-md-6">
                    <label class="form-label" for="first-name">First Name</label>
                    <input type="text" name="first-name" id="first-name" class="form-control" placeholder="John" />
                  </div>
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="last-name">Last Name</label>
                    <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Doe" />
                  </div>
				  
                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="first-name">Gender</label>
					
					<select name="gender" class="form-control">
					<option>Male</option>
					<option>Female</option>
					</select>
					
                  </div>
                  
                  <div class="col-md-6 mb-1">
                    <label class="form-label" for="mobile-number">Mobile number</label>
                    <input
                      type="text"
                      name="mobile-number"
                      id="mobile-number"
                      class="form-control mobile-number-mask"
                      placeholder="(+234) 802 000 0000"
                    />
                  </div>
				  
				    <div class="mb-1 col-md-6">
                    <label class="form-label" for="last-name">Email</label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email Address" />
                  </div>
				  
                 <div class="mb-1 col-md-6">
                    <label class="form-label" for="last-name">Nationality</label>
                    <input type="text" name="Nationality" id="Nationality" class="form-control" placeholder="Nationality" />
                  </div>
				  
				 
  <div class="content-header mb-2"> <br><br>
                <h2 class="fw-bolder mb-75">Business Information</h2>
                <span>Enter information</span>
              </div>
                  <div class="col-12 mb-1">
                    <label class="form-label" for="home-address">Describe  your Startup Idea</label>
					<textarea cols=3 rows=3 class="form-control" placeholder="Describe your Startup Idea"> </textarea>
                    
                  </div>
				  

				    <div class="col-12 mb-1">
                    <label class="form-label" for="home-address">What problem are you trying to solve</label>
					<textarea cols=3 rows=3 class="form-control" placeholder="Describe your Startup Idea"> </textarea>
                    
                  </div>

                  <div class="col-12 mb-1">
                    <label class="form-label" for="area-address">Your Industry</label>
                     <select class="form-control" id="register-username" name="business-name" aria-describedby="register-username" autofocus="" tabindex="1">
					  <option>Fin Tech</option>
					   <option>Agri Tech</option>
					    <option>Mobility/ Transportation</option>
						 <option>Hospitality</option>
						  <option>Prop Tech</option>
						   <option>Real Estate</option>
						   <option>Financial Services</option>
					   <option>Health Tech</option>
					    <option>Logistics</option>
						 <option>Renewable Energy</option>
						  <option>Blockchain</option>
						   <option>Saas</option>
						   
						   
					  </select>
                  </div>
				  
				  
				  

                  <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">Your Website</label>
                    <input type="text" name="url" id="url" class="form-control" placeholder="URL" />
                  </div>
				  
				
				  
				  <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">Market Need</label>
                    <input type="text" name="url" id="url" class="form-control" placeholder="Market Need" />
                  </div>
				  
				  
				  
				  
				  				 
  <div class="content-header mb-2"> <br><br>
                <h2 class="fw-bolder mb-75">Fundrasing Information</h2>
                <span>Enter information</span>
              </div>
				  
				  
				    <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">Is your business incorporated?</label>
                   <select name="busreg" class="form-control">
					<option>Yes</option>
					<option>No</option>
					</select>
                  </div>
				  
				  
				  
				  
				  
				
				    <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">Have you taken any Fundrasing courses in the past.</label>
                   <select name="busreg" class="form-control">
					<option>Yes</option>
					<option>No</option>
					</select>
                  </div>
				  
				  
				  
				  
				  
				  
				    <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">% of Equity</label>
                  <input type="text" name="equity" id="equity" class="form-control" placeholder="% of Equity" />
                  </div>
				  
				  
				  
				  
				  
				  
				    <div class="mb-1 col-md-6">
                    <label class="form-label" for="town-city">How did you hear about us</label>
                   <select name="busreg" class="form-control">
					<option>Interest</option>
					<option>Social Media</option>
					<option>Google</option>
				
					</select>
                  </div>
                </div>
              </form>

              <div class="d-flex justify-content-between mt-2">
                <button class="btn btn-outline-secondary btn-prev" disabled>
                  <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
                  <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                </button>
              </div>
            </div>
            
			<div id="personal-info" class="content" role="tabpanel" aria-labelledby="personal-info-trigger">
             
             <form>
              
                <div class="content-header my-2 py-1">
                  <h2 class="fw-bolder mb-75">Upload Documentation</h2>
                  <span>All your document are important to complete your application</span>
                </div>

                <div class="row gx-2">
                 <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">National Identity Number (NIN)</label>
                    <input type="file" id="addCardName" class="form-control" placeholder="NIN" />
                  </div>

                   <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">Company Register Certificate</label>
                    <input type="file" id="addCardName" class="form-control" placeholder="Company" />
                  </div>

                   <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">National Identity Number (NIN)</label>
                    <input type="file" id="addCardName" class="form-control" placeholder="John Doe" />
                  </div>

                  <div class="col-md-12 mb-1">
                    <label class="form-label" for="addCardName">Passport Photograh</label>
                    <input type="file" id="addCardName" class="form-control" placeholder="John Doe" />
                  </div>
                </div>
              </form>

              <div class="d-flex justify-content-between mt-2">
                <button class="btn btn-primary btn-prev">
                  <i data-feather="chevron-left" class="align-middle me-sm-25 me-0"></i>
                  <span class="align-middle d-sm-inline-block d-none">Previous</span>
                </button>
                <button class="btn btn-primary btn-next">
                  <span class="align-middle d-sm-inline-block d-none">Next</span>
                  <i data-feather="chevron-right" class="align-middle ms-sm-25 ms-0"></i>
                </button>
              </div>
            </div>
            <div id="billing" class="content" role="tabpanel" aria-labelledby="billing-trigger">
             
              <form>
             
                <div class="row gx-2">
                  <iframe src="https://calendly.com/webthinkers/60min?month=2021-12" title="description" width="100%" height="950px"></iframe> 
                </div>
              </form>

              
            </div>
          </div>
        
		</div>
      </div>
    </div>
  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->
