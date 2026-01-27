<div class="app-content content ecommerce-application">
      <div class="content-overlay" ></div>
      <div class="header-navbar-shadow" ></div>
      <div class="content-wrapper container-xxl p-0" >
     
        <div class="content-detached content-right">
     
	 
	 
	 
	           <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-6 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
			<?php $profile_request = $this->gfa_model->getProfile($this->encrypt->decode($this->session->userdata('email') )); 
			  
			  		$ref_request = $this->gfa_model->getStartUp($this->encrypt->decode($this->session->userdata('email') )); 
					$login_request = $this->gfa_model->getUser($this->encrypt->decode($this->session->userdata('email') )); 
					$payment_request = $this->gfa_model->getPay($this->encrypt->decode($this->session->userdata('email') )); 
					$count_Pay = $this->gfa_model->countPay($this->encrypt->decode($this->session->userdata('email') ));
			   ?>
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>uploads/<?php echo $profile_request[0]['photo'] ?>"
                height="110"
                width="110"
                alt="User avatar"
              />
			  
              <div class="user-info text-center">
                <h4><?php echo $profile_request[0]['last_name'].' '.$profile_request[0]['first_name']  ?> </h4>
                <span class="badge bg-light-secondary"><?php echo $ref_request[0]['industry'] ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php echo $ref_request[0]['ref_id'] ?> </h4>
                <small>Profile ID</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="briefcase" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
				 <span class="fw-bolder me-25">Status</span><br>
                <span class="badge bg-light-success">Verified</span>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
              <li class="mb-75">
                <span class="fw-bolder me-25">Username:</span>
                <span><?php echo strtoupper($login_request[0]['username']) ?> </span>
              </li>
			   <li class="mb-75">
                <span class="fw-bolder me-25">Password:</span>
                <span><?php echo $login_request[0]['password'] ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> Email:</span>
                <span><?php echo $login_request[0]['email'] ?></span>
              </li>
              
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Contact:</span>
                <span><?php echo $profile_request[0]['phone_no'] ?> </span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Location:</span>
                <span><?php echo $profile_request[0]['country'] ?> </span>
              </li>
			   <li class="mb-75">
                <span class="fw-bolder me-25">Amount to Rase:</span>
                <span><?php echo $ref_request[0]['raise_money'] ?></span>
              </li>
			  
             
            </ul>
            <div class="d-flex justify-content-center pt-2">
               <a href="<?php echo base_url(); ?>gfa/updateprofile" class="btn btn-primary me-1">
                Edit
              </a>
              
            </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
     
    </div>
    <!--/ User Sidebar -->

    <!-- User Content -->
    <div class="col-xl-4 col-lg-7 col-md-7 order-0 order-md-1">
      <!-- Plan Card -->
      <div class="card border-primary">
        <div class="card-body">
          <div class="d-flex justify-content-between align-items-start">
            <span class="badge bg-light-primary">Subscription Plan</span>
            <div class="d-flex justify-content-center">
              <sup class="h5 pricing-currency text-primary mt-1 mb-0">N</sup>
              <span class="fw-bolder display-5 mb-0 text-primary">330,000</span>
              <sub class="pricing-duration font-small-4 ms-25 mt-auto mb-2">/Yr</sub>
            </div>
          </div>
          
          <div class="d-flex justify-content-between align-items-center fw-bolder mb-50">
            <span>Duration</span>
            <span class="loadPay"> <?php  
			$startYr  =  strtotime($payment_request[0]['time_submit']);
			$endYr = strtotime($count_Pay. "year", $startYr);
			$todayDate = time();
			
			if($todayDate <= $endYr){
			 echo date("M Y", $startYr ). " - " . date("M Y", $endYr) ;  
			 }
			 if($todayDate > $endYr){
			 echo "expired" ;  
			 }
			 ?></span>
          </div>
          <div class="progress mb-50" style="height: 8px">
            <div
              class="progress-bar"
              role="progressbar"
              style="width: 80%"
              aria-valuenow="65"
              aria-valuemax="100"
              aria-valuemin="80"
            ></div>
          </div>
          <span>Annual Subscription</span>
          <div class="d-grid w-100 mt-2">
            <button class="btn btn-primary payForm" data-bs-target="#upgradePlanModal" data-bs-toggle="modal">
              Renew Plan
            </button>
          </div>
        </div>
      </div>
      <!-- /Plan Card -->
    </div>
    <!--/ User Content -->
  </div>
</section>
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
          </div>
        </div>
      
      </div>
    <!-- END: Content-->
	<input type="text" class="totalAmount" value="330000" style="display:none" />
	<input type="text" class="package" name="packagex" value="premium" style="display:none" />
    <script>
         $('.payForm').click(function(e) {

			e.preventDefault();
			
			var paymentFor = parseInt($(".totalAmount").val())||0;
			
			var actualAmount = Math.round(paymentFor * 100);
	 	//$('.modal').modal('hide');
		payWithPaystack(actualAmount);
			
			});
    </script>
	<script src="https://js.paystack.co/v1/inline.js"></script>
			<script>
	function payWithPaystack(trc){
    var handler = PaystackPop.setup({
      key: 'pk_live_f849722976a4354c340163f7d161f74d0f53fce6',
      email: 'info@getfundedafrica.com',
      amount: trc ,
	  currency: "NGN",
      ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
      metadata: {
         custom_fields: [
            {
                display_name: "Mobile Number",
                variable_name: "mobile_number",
                value: "+2347034979125"
            }
         ]
      },
      callback: function(response){
          //alert('success. transaction ref is ' + response.reference);
		var ref = response.reference;
	
	 var totalAmount = $(".totalAmount").val();
	  var pack = $("input[name='package']").val();
	 
	 $.ajax({
     data:{ref:ref,amount:totalAmount,pack:pack},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/payment",
     success: function(data) {
	 	
     			
		$(".loadPay").load("<?php echo base_url(); ?>gfa/payDuration");
		//+data1+"/"+data2+"/"+data3+"/"+encodeURIComponent(email)
      }
    });
	
		//window.open("<?php echo base_url(); ?>gfa/complete_sub/?radio=premium", "_self"); 
      },
      onClose: function(){
          alert('Transaction closed');
      }
    });
    handler.openIframe();
  }
  

</script>
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