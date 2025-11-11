
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
    <h1 class="mt-5">Event Pass Plan</h1>  
    <!--<p class="mb-2 pb-75">-->
    <!--  You get all GFA solutions in just one affordable subscription.-->
    <!--</p>-->
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
        
        <!--/ basic plan -->
<!--[{"paymentCat":"Regular","paymentTag":"Best","amount":"1000","paymentInfo":"Pass 1\r\nPass 2"}]-->
        <!-- standard plan -->
                <?php $getPaymentJson =  $this->gfa_model->getEventPass($id)[0]['payment_cat'];
            $getPaymentJsonArray = json_decode($getPaymentJson,true);
            foreach($getPaymentJsonArray as $getPayment){
        ?>
        <!-- enterprise plan -->
        <div class="col-12 col-md-4">
          <div class="card enterprise-pricing text-center">
            <div class="card-body">
                 <div class="pricing-badge text-end">
                <span class="badge rounded-pill badge-light-primary"><?php  echo $getPayment['paymentTag'] ?></span>
              </div>
              <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/illustration/Pot3.svg" class="mb-2" alt="svg img" />
              <h3><?php  echo $getPayment['paymentCat'] ?></h3>
              <!-- <p class="card-text">Best for founders/SMEs</p> -->
              <div class="annual-plan">
                <div class="plan-price mt-2">
                  <sup class="font-medium-1 fw-bold text-primary"><?php  echo $this->gfa_model->getEventPass($id)[0]['currency']; ?></sup>
                  <span class="pricing-enterprise-value fw-bolder text-primary"><?php  echo $getPayment['amount'] ?></span>
                  <!--<sub class="pricing-duration text-body font-medium-1 fw-bold">/monthly</sub>-->
                </div>
                <small class="annual-pricing d-none text-muted"></small>
              </div>
              <ul class="list-group list-group-circle text-start">
                
<li class="list-group-item"><?php echo html_entity_decode(str_replace("rnrn","<br/>",stripslashes($getPayment['paymentInfo'])), ENT_QUOTES); ?>
</li>
              </ul>
              <?php if(empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){
              
              
              ?>
              <a href="<?php echo base_url(); ?>gfa/paypro?onetime=1&package=funding&type=yearly&sub=Business Funding&amt=<?php  echo $getPayment['amount'] ?>" class="btn w-100 btn-primary mt-2">Pay</a>
              <?php }else{   ?>
              <button class="btn w-100 btn-outline-success mt-2" disabled >Already Paid</button>
              <?php }  ?>
            </div>
          </div>
        </div>
        <!--/ enterprise plan -->
        <?php }  ?>
      </div>
    </div>
  </div>
  <!--/ pricing plan cards -->

</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->


   