
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
    <!-- Greetings Card starts -->
    
    <!-- Greetings Card ends -->

    <!-- Subscribers Chart Card starts -->

    <!-- Subscribers Chart Card ends -->

    <!-- Orders Chart Card starts -->
   
    <!-- Orders Chart Card ends -->
  </div>

  <div class="row match-height">
   
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-company-table formDisplay">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Subscription</th>
                  <th>Package</th>
                  <th>Amount</th>
                  
                  <th>Description</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td valign="top">
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                        </div>
                      </div>
                      <div>
                        
                        <div class="font-small-2 text-muted"><?php echo $this->session->userdata('type');  ?></div>
                      </div>
                    </div>
                  </td>
                  <td valign="top">
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span>GFA subscription packege best for Founders/SMEs<?php //echo $this->session->userdata('sub');   ?></span>
                    </div>
                  </td>
                  
                <td valign="top"><strong><?php detectCurrency(); ?><?php echo $this->session->userdata('amt');  ?></strong></td>
                <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <ul class="list-group list-group-circle text-start">
                             <?php if($this->session->userdata('type') =='monthly')    {  ?>                       
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
                                                       
                                                       <?php }  ?>
                                                       
                                                       <?php if($this->session->userdata('type') =='quarterly')    {  ?>                       
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
                                                       
                                                       <?php }  ?>
                                                       
                                                       <?php if($this->session->userdata('type') =='yearly')    {  ?>                       
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
                                                       
                                                       <?php }  ?>
              </ul>
                    </div>
                  </td>
                 
                </tr>
                
              </tbody>
            </table>
          </div>
           
        </div>
        <div class="row">
            <?php    ?>
            <input type='hidden' name='name'   class="form-control" placeholder="First Name" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name'] ?>">
            <input type='hidden' name='subpackage'   class="form-control" placeholder="First Name"  value="<?php echo $this->session->userdata('package');   ?>">
            <input type='hidden' name='phone'   class="form-control" placeholder="First Name"  value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Phones'] ?>">
            <input type='hidden' name='email'   class="form-control" placeholder="First Name" value="<?php echo $this->encrypt->decode($this->session->userdata('email')) ; ?>">
            <input type='hidden' name='industry'   class="form-control industry" placeholder="First Name" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'] ?>">
            <input type='hidden' name='country'   class="form-control country" placeholder="First Name" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'] ?>">
            <input type='hidden' name='reg_type'   class="form-control startup" placeholder="First Name" value="startup">
                                 <div class="col-md-12 ">
<!--window.open("https://getfundedafrica.com/paypro.php?onetime=1&package=insight&type="+showValue+"&sub=Standard Startups Finder Individual&amt="+optAmount+"", "_self");    -->
                                        <input  type="hidden" name="amount" class="amount" value="<?php 
			if($this->session->userdata['onetime']==0 && $this->session->userdata['type']=='monthly'){
			
			echo str_replace(",","",$this->session->userdata['amt']);
			}
			
				if($this->session->userdata['onetime']==0 && $this->session->userdata['type']=='daily'){
			
			echo str_replace(",","",$this->session->userdata['amt']);
			}
			
			if($this->session->userdata['onetime']==0 && $this->session->userdata['type']=='quarterly'){
			
			echo str_replace(",","",$this->session->userdata['amt']);
			}
			
			if($this->session->userdata['onetime']==0 && $this->session->userdata['type']=='yearly'){
			
			$amount = str_replace(",","",$this->session->userdata['amt']);
			echo $amount;
			}
			if($this->session->userdata['onetime']==1 && ($this->session->userdata['type']=='yearly' || $this->session->userdata['type']=='monthly' || $this->session->userdata['type']=='daily' || $this->session->userdata['type']=='quarterly')){
			
			$amount = str_replace(",","",$this->session->userdata['amt']);
			echo $amount ;
			}
			?>" />
            
            
				<input  type="hidden" name="subType" class="subType" value="<?php echo $this->session->userdata['type'] ?>" />
			<input  type="hidden" name="subscription" class="subscription" value="<?php echo $this->session->userdata['sub'] ?>"  />

                                        <div id='submit' class="pull-right">
                                            <?php if(getlocation()=='Nigeria'){  ?>
     
      <button  id='send_message'  class="btn w-80 btn-primary mt-2 payBtn" >Pay Now</button>
 <?php }else{  ?> 
  
  <button  id='send_message'  class="btn w-80 btn-primary mt-2 payPalBtn" >Pay with PayPal</button>
                                
                           <?php  }   ?>
                           
                          
											<p class="displayError"></p>
                                        </div>
                        
                                        
                                        <div class="clearfix"></div>

                                    </div>
                                    
                                    </div>
      </div>
    </div>
    <!--/ Company Table Card -->
   
  </div>
  
  <div class="pricing-free-trial displaySub" style="display: none">
    <div class="row">
      <div class="col-12 col-lg-10 col-lg-offset-3 mx-auto">
        <div class="pricing-trial-content d-flex justify-content-between">
          <div class="text-center text-md-start mt-3">
            <h3 class="text-primary">Thank you for subscribing!</h3>
            <h5>Start full access GFA feature for successful startup</h5>
            
          </div>

          <!-- image -->
          
        </div>
      </div>
    </div>
  </div>
	<script>
          	
          		$(function() {
	    
	  

  
  $(".payPalBtn").click(function(e){
   e.preventDefault();
	 var totalAmount = $(".amount").val();
	 var name = $("input[name='name']").val();
	 var phone = $("input[name='phone']").val();
	 var email = $("input[name='email']").val();
	 var industry = $(".industry").val();
	 var country = $(".country").val();
	 var subpackage = $("input[name='subpackage']").val();
	 var subscription = $("input[name='subscription']").val();
	 var subType = $("input[name='subType']").val();
	 var urlreq = 'portal';
	 var onetime = 1;
	 $.ajax({
     data:{subscription:subscription,subType:subType,onetime:onetime,amount:totalAmount,name:name,phone:phone,email:email,industry:industry,country:country,urlreq:urlreq,subpackage:subpackage},
     type: "POST",
     url: "https://getfundedafrica.com/paypaldata.php",
     success: function(data) {
	 	
	
		
     	window.open("https://getfundedafrica.com/paypalplan.php", "_self");
		
		//pk_live_f849722976a4354c340163f7d161f74d0f53fce6
		//+data1+"/"+data2+"/"+data3+"/"+encodeURIComponent(email)
		//pk_test_57f928ef3b08dc974a816c89f7687c37e9afb03c
      }
    });  
      
  });
	  
	  
         $('.payBtn').click(function(e) {

			e.preventDefault();
			
			var paymentFor = parseInt($(".amount").val())||0;
			
			var actualAmount = Math.round(paymentFor * 100);
	 	//$('.modal').modal('hide');
		//payWithPaystack(actualAmount);
	 var totalAmount = $(".amount").val();
	 var subscription = $("input[name='subscription']").val();
	 var subType = $("input[name='subType']").val();
	 var startup = $(".startup").val();
	 var name = $("input[name='name']").val();
	 var phone = $("input[name='phone']").val();
	 var email = $("input[name='email']").val();
	 var industry = $(".industry").val();
	 var country = $(".country").val();
		 $.ajax({
     data:{amount:totalAmount,subscription:subscription,subType:subType,startup:startup,name:name,phone:phone,email:email,industry:industry,country:country},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/subpaydemo",
     error:function() {$(".payBtn").html('Error');},
	 beforeSend:function() {$(".payBtn").html('Sending payment...');},
     success: function(data) {
	 	
	    $('.payBtn').prop('disabled',false);
		//$('.payBtn').html(data);
		
     	window.open(data, "_self");
		
		//pk_live_f849722976a4354c340163f7d161f74d0f53fce6
		//+data1+"/"+data2+"/"+data3+"/"+encodeURIComponent(email)
		//pk_test_57f928ef3b08dc974a816c89f7687c37e9afb03c
      }
    });
			
			});
			
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
	
	 var totalAmount = $(".amount").val();
	  var subscription = $("input[name='subscription']").val();
	 var subType = $("input[name='subType']").val();
	 var startup = $(".startup").val();
	 var name = $("input[name='name']").val();
	 var phone = $("input[name='phone']").val();
	 var email = $("input[name='email']").val();
	 var industry = $(".industry").val();
	 var country = $(".country").val();
	 $.ajax({
     data:{ref:ref,amount:totalAmount,subscription:subscription,subType:subType,startup:startup,name:name,phone:phone,email:email,industry:industry,country:country},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/subpay",
     success: function(data) {
	 	
// 		$(".displaySub").html("<p>Thank you for subscribing</p>");
		$(".displaySub").show();
		$(".formDisplay").hide();
		$(".payBtn").hide(); 
     	window.open("https://getfundedafrica.com/portal/gfa/dashboard", "_self");
		
		//pk_live_f849722976a4354c340163f7d161f74d0f53fce6
		//+data1+"/"+data2+"/"+data3+"/"+encodeURIComponent(email)
		//pk_test_57f928ef3b08dc974a816c89f7687c37e9afb03c
      }
    });
	
	
      },
      onClose: function(){
          alert('Transaction closed');
      }
    });
    handler.openIframe();
  }
  

</script>
  

  
</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   