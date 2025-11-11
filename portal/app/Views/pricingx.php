
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
        <div class="col-12 col-md-2">
          
        </div>
        <!--/ basic plan -->

        <!-- standard plan -->
        <div class="col-12 col-md-8">
          <div class="card standard-pricing popular text-center">
            <div class="card-body">
              
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot2.svg" class="mb-1" alt="svg img" />
              <h3>GFA Premium</h3>
              <p class="card-text">Best for founders/SMEs</p>
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php detectCurrency(); ?></sup>
                  <span class="pricing-standard-value fw-bolder text-primary"><?php detectCurrencyAmount(10000); ?></span>
                  <sub class="pricing-duration text-body font-medium-1 fw-bold">/month</sub>
                </div>
                <small class="annual-pricing d-none text-muted"></small>
                 
              </div>
              <ul class="list-group list-group-circle text-start">
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited access to Investors</li>
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited access to Mentors</li>
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited access to Corporates</li>
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Unlimited access to a Dataroom</li>
														<li class="list-group-item"><i class="fa fa-check"></i>$50 Investor-readiness templates on the e-store</li>
														  <li class="list-group-item"><i class="fa fa-check"></i>Cohort Participation</li>
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Publish your Startup's story</li>
                                                        <li class="list-group-item"><i class="fa fa-check"></i>Get invites to exclusive events</li>
                                                       <li class="list-group-item"><i class="fa fa-check"></i><b>50% discount applies!</b></li>
                                                       
                                                       



              </ul>
              
             <?php if(empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active'))){  ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=0&package=funding&type=monthly&sub=GFA Startup Package&amt=<?php detectCurrencyAmount(10000); ?>" class="btn w-100 btn-primary mt-2">Upgrade</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Your current plan</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ standard plan -->

        <!-- enterprise plan -->
        <div class="col-12 col-md-2">
        
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


   