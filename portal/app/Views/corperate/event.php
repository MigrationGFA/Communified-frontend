<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="app-content content" <?php if(!empty($email)){ echo ''; }else{ ?>style="margin-left: 0px !important; padding-top: 10px !important;" <?php }  ?>>
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
             
            </div>
          </div>
        
        </div>
        <?php $checkYourStory = $this->gfa_model->getEventByTitle($ref_id); ?>

        <div class="content-detached content-left">
          <div class="content-body ">
              <!-- Blog Detail -->
<div class="blog-detail-wrapper container" id="payment-failed">
  <div class="row" id="payment-success">
    <!-- Blog -->
    <div class="col-12">
      <div class="card" style=" overflow: auto;
  
    height:auto;" >
        <img
          src="<?php echo base_url()?>uploads/files/<?php echo $checkYourStory[0]['picture'] ?>"
          class="img-fluid card-img-top"
          alt="Blog Detail Pic"
          width="750" 
          height="500"
        />
        <div class="card-body" >
            
            
            
            <div class="row">
                
                
          <div class="col-lg-8 col-md-9 col-sm-12">
          <h4 class="card-title"><?php echo ucfirst($checkYourStory[0]['title']); ?></h4>
          </div>
          
          
          <div class="col-lg-4 col-md-3 col-sm-12">
              
              <div style="margin-top:1px !important;">
          <?php
                if($email== $checkYourStory[0]['email'] ){ echo ''; }else{
                if($this->gfa_model->getWpEvent($email,$checkYourStory[0]['event_id'])[0]['status']=='active'){  ?>
               <div class="avatar-content avatar  p-50 m-0 bg-light-primary" style="float:right;">
                <i data-feather="user-check" class="font-large-2"  style="color:#7A6FF1;"></i>
              
                  </div><span class="bg-light-primary" style="float:right;paddding:4px;"> [You are ATTENDING THIS EVENT]</span>
                <?php }elseif($this->gfa_model->getWpEvent($email,$checkYourStory[0]['event_id'])[0]['status']=='pending'){  ?> 
                <button type="button" disabled class="btn btn-primary">Enquiry Pending</button> 
                <a href="<?php echo base_url(); ?>gfa/speakers/<?php echo $checkYourStory[0]['event_id']; ?>"  class="btn btn-warning" >Host Profile</a>

                <?php }else{  ?>
                  <?php if($email !=''){  ?>
                  <?php  if($checkYourStory[0]['ticket'] =="Free"){  ?>
                     <button type="button"  class="btn btn-primary attendEvent">Attend Event</button><span class="displayActionX"></span>
                    
                    <?php }else{  ?>
                     <button type="button"  class="btn btn-success attendEventOutPaid" data-bs-target="#checkDealRoomPaid" data-bs-toggle="modal" >Attend Event</button> 
                    <?php }  ?>
                 
                  <?php }else{    ?>
                    <?php  if($checkYourStory[0]['ticket'] =="Free"){  ?>
                    <button type="button"  class="btn btn-success attendEventOut" data-bs-target="#checkDealRoom" data-bs-toggle="modal" >Attend Event</button> 
                    
                    <?php }else{  ?>
                     <button type="button"  class="btn btn-success attendEventOutPaid" data-bs-target="#checkDealRoomPaid" data-bs-toggle="modal" >Attend Event</button> 
                    <?php }  ?>
                  <?php }  ?>
                  <a href="<?php echo base_url(); ?>gfa/speakers/<?php echo $checkYourStory[0]['event_id']; ?>"  class="btn btn-warning" >Host Profile</a>

              <?php     }} ?>
              
             </div>
             
             </div>
             
             </div>
              
          
          <div class="d-flex">
              <?php           $getPhoto =  $this->gfa_model->getPhotoUploaded($checkYourStory[0]['email']);  
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name'];  
          
      }  ?>
            <div class="avatar me-50">
                
              <img src="<?php echo base_url().$showPhoto; ?>" alt="Avatar" width="24" height="24" />
            </div>
            <div class="author-info">
              <small class="text-muted me-25">by</small>
              <small><a href="#" class="text-body"><?php echo ucwords($this->gfa_model->getStartUpDetails($checkYourStory[0]['email'])[0]['Primary_Contact_Name']);  ?></a></small>
              <span class="text-muted ms-50 me-25">|</span>
              <small class="text-muted"><?php echo date('M d Y', strtotime($checkYourStory[0]['time_submit'])) ?></small>
            </div>
          </div>
          <div class="my-1 py-25">
            <a href="#">
              <span class="badge rounded-pill badge-light-danger me-50"><?php echo $checkYourStory[0]['venue']  ?></span>
            </a>
            <a href="#">
              <span class="badge rounded-pill badge-light-warning"><?php echo $checkYourStory[0]['start_date']  ?> - <?php echo $checkYourStory[0]['end_date']  ?></span>
            </a>
            <a href="#">
            <span class="badge rounded-pill badge-light-primary"><?php  echo $checkYourStory[0]['ticket'];    ?></span>
            </a>
          </div>
          <p class="card-text mb-2 " style="text-align: justify; text-justify: inter-word;">
        <?php   $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">');
                $replaceData = array("<div>", "<br/>");
          echo html_entity_decode(str_replace($searchData,$replaceData,stripslashes($this->gfa_model->getEventByRef($checkYourStory[0]['ref_id'])[0]['textdata'])), ENT_QUOTES); ?>
          </p>
          <hr class="mb-2" style="margin-top: 60px !important;"/>
          <input type="hidden" class="eventId" value="<?php echo $checkYourStory[0]['event_id']; ?>" >
         <input type="hidden" class="title" value="<?php echo $checkYourStory[0]['title']; ?>" >
          
          
             <div style="margin-top:200px !important;">
             
              <?php   if($checkYourStory[0]['event_type']=='Paid'){
                  ?>
                  
                  <a href="<?php echo base_url(); ?>gfa/event_pay/<?php echo $checkYourStory[0]['event_id']; ?>"  class="btn btn-primary" >Pay</a>
                

                <?php }else{ echo '';}  ?>
         </div>
        </div>
      </div>
      <?php //echo $email //$this->gfa_model->getWpEvent($email,$checkYourStory[0]['event_id'])[0]['status'] ?>
    </div>
    <!--/ Blog -->

    <!-- Blog Comment -->
   <script>
    $(function(){
        
        
         $(".attendEvent").click(function(){
         
         var  eventId = $('.eventId').val();
         var  title = $('.title').val();
          $.ajax({
     data:{eventId:eventId,title:title},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/attendEvent",
     error:function() {$(".attendEvent").html('Error Request');},
	 beforeSend:function() {$(".attendEvent").html('Requesting...');$('.attendEvent').prop("disabled", true );},
      success: function(data) {
       
		 $(".attendEvent").html('Submitted'); 
	    $('.attendEvent').prop("disabled", true );
		 $(".displayActionX").html('Please check your email for more details.');
	   
	  
	
       }
      
    });
         
       }); 
       
      
        
    });
</script>
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->

          </div>
        </div>
         <div class="sidebar-detached sidebar-right">
          <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
  <!-- Search bar -->
  <!-- <div class="blog-search">
    <div class="input-group input-group-merge">
      <input type="text" class="form-control" placeholder="Search here" />
      <span class="input-group-text cursor-pointer">
        <i data-feather="search"></i>
      </span>
    </div>
  </div> -->
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class="blog-recent-posts mt-3">
    <h6 class="section-label">Posted Events</h6>
    <div class="mt-75">
<?php 

$row =  $this->gfa_model->getEventLimit10(); foreach($row as $rowStoryArray){ ?>
      <div class="d-flex mb-2">
        <a href="<?php echo base_url()?>gfa/events/<?php echo $rowStoryArray['ref_id']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url()?>uploads/files/<?php echo $rowStoryArray['picture'] ?>"
            width="100"
            height="auto"
            alt="Add Event Picture "
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo $rowStoryArray['ref_id'] ?>" class="text-body-heading"><?php echo $rowStoryArray['title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['start_date'])) ?></div>
         
        </div>
      </div>
      
      <?php  }   ?>
      
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  <div class="modal fade" id="checkDealRoom" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Attend Event</h1>
          
         <form action="#" id="#EventForm" class="form EventFormDealRoom" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
              <input type="hidden" name="attend_title" class="form-control" value="<?php echo $checkYourStory[0]['title'] ?>" />
                  <input type="hidden" name="attend_eventId" class="form-control" value="<?php echo $checkYourStory[0]['event_id'] ?>" />
                <div class="mb-2">
                  <input type="text" name="attend_first_name" class="form-control" required placeholder="First Name" />
                </div>
              </div>
              <div class="col-12">
             
                <div class="mb-2">
                  <input type="text" name="attend_last_name" class="form-control" required placeholder="Last Name" />
                </div>
              </div>

              <div class="col-12">
                <div class="mb-2">
                  <select  class="form-select" name="attend_gender" placeholder="Gender">
                     
                 <option value="Female">Female</option>
                  <option value="Male">Male</option> 
                  
                    </select>
                </div>
              </div>
              <div class="col-12">

                <div class="mb-2">
                  <input type="email" name="attend_email" class="form-control" required placeholder="Email Address" />
                </div>
              </div>
              

              <div class="col-12">
                  
                <div class="mb-2">
                  <input type="text" name="attend_phone" class="form-control" required placeholder="Phone Number" />
                </div>
              </div>
              
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtnDealRoom">Submit</button><span class="displayActionDealRoom"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>
  </div>
  <!--/ Categories -->
</div>
<div class="modal fade" id="checkDealRoomPaid" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="mb-2">
        <div class="text-center">
         <span ><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Attend Event</h1>
          </div>
         <form action="#" class="form EventFormPaid" enctype="multipart/form-data">
             <input type='hidden' name='currencyCode'   class="form-control currencyCode" placeholder=""  value="<?php if($checkYourStory[0]['currency'] =="NGN"){ echo 'NGN'; }
              elseif($checkYourStory[0]['currency'] =="USD"){ echo 'USD'; }else{ echo '';} ?>">
              <input type='hidden' name='countryCode'   class="form-control countryCode" placeholder=""  value="<?php if($checkYourStory[0]['currency'] =="NGN"){ echo 'NG'; }
              elseif($checkYourStory[0]['currency'] =="USD"){ echo 'US'; }else{ echo '';} ?>">
             <input  type="hidden" name="trans_refx" class="trans_refx" value="<?php echo 'gfa-'.time() ?>" />
             <input  type="hidden" name="amount" class="amount" value="" />
             <input  type="hidden" name="totalAmount" class="totalAmount" value="" />
             <input  type="hidden" name="ticket_type" class="ticket_type" value="" />
            <div class="row">
                               <hr>
         <h5><i data-feather="file"></i>Ticket</h5>
          <hr>
          
         <?php $getPaymentJson =  $this->gfa_model->getEventPass($checkYourStory[0]['event_id'])[0]['payment_cat'];
            $getPaymentJsonArray = json_decode($getPaymentJson,true);
            foreach($getPaymentJsonArray as $getPayment){
        ?>
               <div class="row">
        
          <div class="col-md mb-md-0 mb-2">
            <div class="form-check custom-option custom-option-basic">
              <label class="form-check-label custom-option-content" for="customRadioTemp2">
                <input name="customRadioTemp" class="form-check-input" type="radio" value="<?php  echo $getPayment['amount'] ?>|<?php  echo $getPayment['paymentCat'] ?>" id="customRadioTemp2" />
                <span class="custom-option-header">
                  <span class="h6 mb-0"><?php  echo $getPayment['paymentCat'] ?></span><br>
                  <span class="text-muted"><?php if($checkYourStory[0]['currency'] =="NGN"){echo "₦"; }else{ echo "$"; } ?><?php  echo $getPayment['amount'] ?></span>
                </span>
                <br>
                <span class="custom-option-body">
                  <small><?php echo html_entity_decode(str_replace("rnrn","<br/>",stripslashes($getPayment['paymentInfo'])), ENT_QUOTES); ?></small> 
                </span>
              </label>
            </div>
          </div>
          
        </div>  
               <hr>  
          <?php  }  ?>  
              <div class="col-12">
                  
                <div class="mb-2">
                    <label>Number of Ticket</label>
                  <input type="number" name="no_ticket" class="form-control no_ticket" required placeholder="Number of Ticket" value="1"  />
                </div>
              </div>
              <div class="col-12">
              <input type="hidden" name="attend_titlePaid" class="form-control" value="<?php echo $checkYourStory[0]['title'] ?>" />
                  <input type="hidden" name="attend_eventIdPaid" class="form-control" value="<?php echo $checkYourStory[0]['event_id'] ?>" />
                <div class="mb-2">
                  <input type="text" name="attend_first_namePaid" class="form-control" required placeholder="First Name" />
                </div>
              </div>
              <div class="col-12">
             
                <div class="mb-2">
                  <input type="text" name="attend_last_namePaid" class="form-control" required placeholder="Last Name" />
                </div>
              </div>

              <div class="col-12">
                <div class="mb-2">
                  <select  class="form-select" name="attend_genderPaid" placeholder="Gender">
                     
                 <option value="Female">Female</option>
                  <option value="Male">Male</option> 
                  
                    </select>
                </div>
              </div>
              <div class="col-12">

                <div class="mb-2">
                  <input type="email" name="attend_emailPaid" class="form-control" required placeholder="Email Address" />
                </div>
              </div>
              

              <div class="col-12">
                  
                <div class="mb-2">
                  <input type="text" name="attend_phonePaid" class="form-control" required placeholder="Phone Number" />
                </div>
              </div>

             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtnDealRoomPaid" style="display:none;">Continue Payment</button><span class="displayActionDealRoomPaid"></span>
                           
                </div>
            </div>
          </form>
      <!--<a href="#" class="btn btn-primary" onclick="makePayment()">Payment</a> -->
      </div>
      
    </div>
  </div>
</div>
  </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      $(function(){
          
          //=======================Paid==========================
          
          $('input[name="customRadioTemp"]').change(function() {
    var selectedValue = $('input[name="customRadioTemp"]:checked').val(); 
    //console.log('Selected Value:', selectedValue);
    var getValue = selectedValue.split('|');
    var amount = parseFloat(getValue[0]);
    var ticket_type = getValue[1];
      var no_ticket = parseFloat($('.no_ticket').val());
      if(no_ticket < 1 ){
          
          var totalAmount = parseFloat(amount * 1 );
      }else{
           var totalAmount = parseFloat(amount * no_ticket);  
      }
      
      $('.ticket_type').val(ticket_type);
      $('.amount').val(totalAmount); 
         $('.totalAmount').val(amount);
    $(".EventBtnDealRoomPaid").show();
  });
  
  $(".EventFormPaid").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
    //     
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/eventpayflutter",
     error:function() {$(".displayActionDealRoomPaid").html('Error')},
	 beforeSend:function() {$(".displayActionDealRoomPaid").html('Requesting...'); $(".EventBtnDealRoomPaid").prop('disabled', true);},
	  processData: false,
        contentType: false,
     success: function(data) {
	 	
     makePayment(data);
     
      $(".EventBtnDealRoomPaid").html('Continue Payment');
		 $(".displayActionDealRoomPaid").html('');
		 $(".EventBtnDealRoomPaid").prop('disabled', false);
      }
    });
    return false;

  });

          
          //====================================================
          
        // DealRoom
        $(".EventFormDealRoom").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/attendEventExt",
	 error:function() {$(".displayActionDealRoom").html('Error')},
	 beforeSend:function() {$(".displayActionDealRoom").html('Requesting...'); $(".EventBtnDealRoom").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionDealRoom").html(data);  
	   //$(".saveBtn").html(data); 
     $(".EventBtnDealRoom").html('Submitted');
		 $(".displayActionDealRoom").html('Please check your email for more details.'); 

      }
    });
    return false;

  });
      
      });  
    </script>
    
<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
  function makePayment(trans_ref) {
     var no_ticket = parseFloat($('.no_ticket').val());
  var amount =   parseFloat($('.amount').val());
      if(no_ticket < 1 ){
          
          var totalAmount = parseFloat(amount * 1 );
      }else{
           var totalAmount = parseFloat(amount * no_ticket); 
      }
      
    var ticket_type =  $('.ticket_type').val();
//var flutterAmount =  parseFloat($('.totalAmount').val(totalAmount));
    
	 var phone = $("input[name='attend_phonePaid']").val();
	 var email = $("input[name='attend_emailPaid']").val();
	 var attend_title = $("input[name='attend_titlePaid']").val();
	 var attend_first_name = $("input[name='attend_first_namePaid']").val(); 
	 var attend_last_name = $("input[name='attend_last_namePaid']").val();
	 var name = "Temitope Dasho"; 
	 var attend_eventId = $("input[name='attend_eventIdPaid']").val();
	 var attend_gender = $("input[name='attend_genderPaid']").val(); 
   var currencyCode = $("input[name='currencyCode']").val();
  var countryCode = $("input[name='countryCode']").val();
   //var trans_ref = $("input[name='trans_ref']").val();
    FlutterwaveCheckout({
      public_key: "FLWPUBK-1d151de281440cc66d8a0600963c9dee-X",
      tx_ref: trans_ref,
      amount: totalAmount,
      currency: currencyCode,
      payment_options: "card, mobilemoneyghana, ussd",
      do_3ds: true,
      callback: function(payment) {
        // Send AJAX verification request to backend
        verifyTransactionOnBackend(payment.id);
        var ref = trans_ref;
        
	 $.ajax({
     data:{payId:1},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/payflutter",
     success: function(data) {
	 	
// 		$(".displaySub").html("<p>Thank you for subscribing</p>");
		
     	window.open("<?php echo base_url(); ?>gfa/eventPayTicket/"+trans_ref, "_self");
		
		//pk_live_f849722976a4354c340163f7d161f74d0f53fce6
		//+data1+"/"+data2+"/"+data3+"/"+encodeURIComponent(email)
		//pk_test_57f928ef3b08dc974a816c89f7687c37e9afb03c
      }
    });
      },
      onclose: function(incomplete) {
        if (incomplete || window.verified === false) {
          document.querySelector("#payment-failed").style.display = 'block';
        } else {
          document.querySelector("form").style.display = 'none';
          if (window.verified == true) {
            document.querySelector("#payment-success").style.display = 'block';
          } else {
            document.querySelector("#payment-pending").style.display = 'block';
          }
        }
      },
      meta: {
        consumer_id: "<?php echo time(); ?>",
        consumer_mac: "<?php echo sha1(time()); ?>",
      },
      customer: {
        email: email,
        phone_number: phone,
        name: name,
      },
      customizations: {
        title: "GFA EVENT PAY",
        description: attend_title,
        logo: "https://getfundedafrica.com/gfa/upload/logo@2x_white.png",
      },
      display_otp_prompt: true,
    });
  }

  function verifyTransactionOnBackend(transactionId) {
    // Let's just pretend the request was successful
    setTimeout(function() {
      window.verified = true;
    }, 200);
  }
</script>