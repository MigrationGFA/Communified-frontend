
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><section id="pricing-plan">
  <!-- title text and switch button -->
  <div class="text-center">
    <h1 class="mt-5">All in One Plan</h1>  
    <p class="mb-2 pb-75">
      You get all GFA solutions in just one affordable subscription.
    </p>
    <!--<div class="d-flex align-items-center justify-content-center mb-5 pb-50">-->
    <!--  <h6 class="me-1 mb-0">Monthly</h6>-->
    <!--  <div class="form-check form-switch">-->
    <!--    <input type="checkbox" class="form-check-input" id="priceSwitch" />-->
    <!--    <label class="form-check-label" for="priceSwitch"></label>-->
    <!--  </div>-->
    <!--  <h6 class="ms-50 mb-0">Annually</h6>-->
    <!--</div>-->
  </div>
  <!--/ title text and switch button -->
<?php  ?>
  <!-- pricing plan cards -->
  <div class="row pricing-card">
    <div class="col-12 col-sm-offset-2 col-sm-10 col-md-12 col-lg-offset-2 col-lg-10 mx-auto">
      <div class="row">
        <!-- basic plan -->
        <div class="col-12 col-md-6">
          <div class="card basic-pricing text-center">
            <div class="card-body">
              <!-- <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot1.svg" class="mb-2 mt-5" alt="svg img" /> -->
              <h3>Monthly</h3>

              <p class="card-text">The basic choice</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-basic-value fw-bolder text-primary"><?php if( getlocation()=='Kenya'){
	detectCurrencyAmount(99); }elseif(getlocation()=='South Africa'){ detectCurrencyAmount(254); }else{ detectCurrencyAmount(300);}  ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/monthly</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
               
                 <li class="list-group-item">All Free Plan Features</li>
<li class="list-group-item">Access to the GFA investor circle (over $500 million in dry powder)</li>
<li class="list-group-item">Access to corporate organizations who can support as venture clients providing revenue & validation</li>
<li class="list-group-item">Access to unrestricted number of mentors who can help guide and shape the growth of your business and ideas</li>
<li class="list-group-item">$60 voucher to purchase rich templates</li>
<li class="list-group-item">Full access to 230 fundraising course videos</li>
<li class="list-group-item">Lead generation tools to increase revenue</li>
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active'))){  ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=0&package=funding&type=monthly&sub=Premium Funding&amt=<?php if( getlocation()=='Kenya'){
	detectCurrencyAmount(99); }elseif(getlocation()=='South Africa'){ detectCurrencyAmount(254); }else{ detectCurrencyAmount(300); }  ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ basic plan -->

        <!-- standard plan -->
        <?php //if(getlocation()=='Nigeria' || getlocation()=='Ghana' ){  ?>
        <!-- <div class="col-12 col-md-4">
          <div class="card standard-pricing popular text-center">
            <div class="card-body">
             
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot2.svg" class="mb-1" alt="svg img" />
              <h3>Quaterly</h3>
              <p class="card-text">The better choice </p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php //detectCurrency(); ?></sup>
                  <span class="pricing-standard-value fw-bolder text-primary"><?php //detectCurrencyAmount(22000); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/quarterly</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
               
                <li class="list-group-item">20% discount applies!</li>
<li class="list-group-item">$3,000 worth of perks</li>
<li class="list-group-item">$30 or 3 free worth of Investor-readiness templates on GFA e-store</li>
<li class="list-group-item">Dedicated investment/growth adviser</li>
<li class="list-group-item">Access to 130 modules of the Fundrasing courses on Remsana.com</li>
<li class="list-group-item">Unlimited access to Investors</li>
<li class="list-group-item">Unlimited access to Mentors</li>
<li class="list-group-item">Unlimited access to Corporates</li>
<li class="list-group-item">Access to 3 folders on the Dataroom</li>
<li class="list-group-item">Cohort Participation</li>
<li class="list-group-item">Publish your Startup's story</li>
<li class="list-group-item">Get invites to 3 exclusive events</li>
              </ul> -->
              <?php //if(empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active'))){
              
              
              ?>
              <!-- <a href="<?php //echo base_url(); ?>gfa/paypro?onetime=0&package=funding&type=quarterly&sub=Basic Funding&amt=<?php detectCurrencyAmount(22000); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a> -->
              <?php //}else{   ?>
              <!-- <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button> -->
              <?php //}  ?>
            <!-- </div>
          </div>
        </div> -->
        <!--/ standard plan -->
        <?php //}  ?>
        <!-- enterprise plan -->
        <div class="col-12 col-md-6">
          <div class="card enterprise-pricing text-center">
            <div class="card-body">
                 <div class="pricing-badge text-end">
                <span class="badge rounded-pill badge-light-primary">Popular</span>
              </div>
              <!-- <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot3.svg" class="mb-2" alt="svg img" /> -->
              <h3>Annual</h3>
              <p class="card-text">Best for founders/SMEs</p>
              <div class="annual-plan">
                
                
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-enterprise-value fw-bolder text-primary"><?php detectCurrencyAmount(69000); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/yearly</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
                
<li class="list-group-item">All our monthly plan features</li>
<li class="list-group-item">Opportunities to pitch during GFA Investor Club meetings</li>
<li class="list-group-item">Industry & geography based intensive cohorts to foster growth</li>
<li class="list-group-item">Access to a community of business people focused on unleashing innovation across Africa</li>
<li class="list-group-item">Opportunity to be invited on GFA TV</li>
<li class="list-group-item">One-on-one call with a GFA growth representative</li>
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
              
              
              ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=1&package=funding&type=yearly&sub=Business Funding&amt=<?php detectCurrencyAmount(69000); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ enterprise plan -->
        
        
        
        
        <!-- enterprise plan -->
        <div class="col-12 col-md-12">
          <div class="card enterprise-pricing text-center" >
            <div class="card-body">
                
              <h3>Compare our plans</h3>
              <p class="card-text">GET YOUR GFA ANNUAL SUBSCRIPTION AND ENJOY 50% DISCOUNT</p>
               <table class="w-full text-left">
                    <thead>
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <th
                          class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                          #                        </th>
                        <th
                          class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                          Features                        </th>
                        <th
                          class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >
                          Free                        </th>
                        <th
                          class="whitespace-nowrap px-3 py-3 font-semibold uppercase text-slate-800 dark:text-navy-100 lg:px-5"
                        >Paid</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">1</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5"><strong>Access to the GFA investor circle</strong><br> 
                        (over $500 million in dry powder)</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                              <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                            </svg>
                        </div></td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                              <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                            </svg>
                        </div></td>
                      </tr>
                      <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">2</td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Access to the GFA MarketPlace</b>
						<br>Sell your services and digital products (eg apps or web solutions) </td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                              <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                            </svg>
                        </div></td>
                        <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                            <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                              <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                            </svg>
                        </div></td>
                      </tr>
					  
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">3</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><strong>$15 and $45 voucher for free and paid subscription </strong><br> 
				         for the purchase of rich templates</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">4</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Invitations to industry leading </b> <br>
				         events and webinars </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td height="21" valign="top" class="whitespace-nowrap px-4 py-3 sm:px-5">5</td>
					     <td class="sm:px-5 py-3 px-4 whitespace-nowrap"><strong>Full or limited access to 230 fundraising course videos</strong></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">6</td>
					     <td class="sm:px-5 py-3 px-4 whitespace-nowrap"><strong>Access to research on funding in Africa</strong></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">7</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Access to relevant news </b> <br>
				         about your industry and people in your industry </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">8</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Access to corporate organizations</b> <br>
				         who can support as venture clients providing revenue & validation </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">9</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Access to unrestricted number of mentors </b> <br>
who can help guide and shape the growth of your business and ideas </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">10</td>
					     <td class="sm:px-5 py-3 px-4 whitespace-nowrap"><strong>Full or limited access to 230 fundraising course videos</strong></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">11</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Lead generation </b> <br>
				         tools to increase your revenue </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">12</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Opportunities to pitch during GFA Investor Club meetings </b> <br>
				         (subject to terms and conditions) </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class="border-y border-transparent border-b-slate-200 dark:border-b-navy-500"
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">13</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Industry & geography based intensive cohorts to foster growth </b> <br>
				         (terms and conditions apply) </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class=""
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">14</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Access to a community of business people </b> <br>
				         focused on unleashing innovation across Africa </td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class=""
                      >
					     <td valign="top" class="whitespace-nowrap px-4 py-3 sm:px-5">15</td>
					     <td valign="top" class="whitespace-nowrap px-4 py-3 sm:px-5"><b>Opportunity to be invited on GFA TV</b> <br>
				         to share your knowledge as a key opinion leader</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					   <tr
                        class=""
                      >
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top">16</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5" valign="top"><strong>One-on-one call with a GFA</strong><br> 
				         growth representative</td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 text-center"  valign="top"><div 
                  class="flex h-6 w-6 shrink-0 items-center text-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light"
                >
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
					     <td class="whitespace-nowrap px-4 py-3 sm:px-5 items-center"><div class="flex h-6 w-6 shrink-0 items-center justify-center rounded-full bg-primary/10 text-primary dark:bg-accent/10 dark:text-accent-light">
                             <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="h-4.5 w-4.5 text-center items-center"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                               <path
                      fill-rule="evenodd" 
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd"
                    />
                             </svg>
                         </div></td>
				      </tr>
					  </tbody>
                  </table>
            </div>
          </div>
        </div>
        <!--/ enterprise plan -->
      </div>
      
      
      
      
      
      
      
    </div>
  </div>
  <!--/ pricing plan cards -->

</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
