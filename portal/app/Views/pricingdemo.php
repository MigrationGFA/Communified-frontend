
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
        <div class="col-12 col-md-4">
          <div class="card basic-pricing text-center">
            <div class="card-body">
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot1.svg" class="mb-2 mt-5" alt="svg img" />
              <h3>GFA Basic</h3>
              <p class="card-text">Best for founders/SMEs</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-basic-value fw-bolder text-primary"><?php detectCurrencyAmount(10000); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/monthly</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
               
                 <li class="list-group-item">20% discount applies!</li>
<li class="list-group-item">$500 worth of perks</li>
<li class="list-group-item">$15 or 1 free worth of Investor-readiness templates on GFA e-store</li>
<li class="list-group-item">Access to 30 modules of the Fundrasing courses on Remsana.com</li>
<li class="list-group-item">Unlimited access to Investors</li>
<li class="list-group-item">Unlimited access to Mentors</li>
<li class="list-group-item">Unlimited access to Corporates</li>
<li class="list-group-item">Access to 2 folders on the Dataroom</li>
<li class="list-group-item">Cohort Participation</li>
<li class="list-group-item">Publish your Startup's story</li>
<li class="list-group-item">Get invites to 1 exclusive events</li>
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active'))){  ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=0&package=funding&type=monthly&sub=Premium Funding&amt=<?php detectCurrencyAmount(10000); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ basic plan -->

        <!-- standard plan -->
        <div class="col-12 col-md-4">
          <div class="card standard-pricing popular text-center">
            <div class="card-body">
             
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot2.svg" class="mb-1" alt="svg img" />
              <h3>GFA Premium</h3>
              <p class="card-text">Best for founders/SMEs</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-standard-value fw-bolder text-primary"><?php detectCurrencyAmount(8400); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/quaterly</sub>
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
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Basic Funding','active'))){
              
              
              ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=0&package=funding&type=quarterly&sub=Basic Funding&amt=<?php detectCurrencyAmount(33600); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ standard plan -->

        <!-- enterprise plan -->
        <div class="col-12 col-md-4">
          <div class="card enterprise-pricing text-center">
            <div class="card-body">
                 <div class="pricing-badge text-end">
                <span class="badge rounded-pill badge-light-primary">Popular</span>
              </div>
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot3.svg" class="mb-2" alt="svg img" />
              <h3>GFA Premium</h3>
              <p class="card-text">Best for founders/SMEs</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-enterprise-value fw-bolder text-primary"><?php detectCurrencyAmount(7000); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/yearly</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
                
<li class="list-group-item">33.3% discount applies!
<li class="list-group-item">$15,000 worth of perks
<li class="list-group-item">$45 or 7 free worth of Investor-readiness templates on GFA e-store
<li class="list-group-item">Dedicated investment/growth adviser
<li class="list-group-item">Access to all the 230 modules of the Fundrasing courses on Remsana.com
<li class="list-group-item">Unlimited access to Investors
<li class="list-group-item">Unlimited access to Mentors
<li class="list-group-item">Unlimited access to Corporates
<li class="list-group-item">Unlimited access to a Dataroom
<li class="list-group-item">Cohort Participation
<li class="list-group-item">Publish your Startup's story
<li class="list-group-item">Get invites to all exclusive events
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
              
              
              ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=1&package=funding&type=yearly&sub=Business Funding&amt=<?php detectCurrencyAmount(84000); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
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


   