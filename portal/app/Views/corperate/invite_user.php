      <!-- BEGIN: Content-->
      <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
      <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Account</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/dashboard"); ?>">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/manage_user"); ?>">Manage Users  </a>
                    </li>
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="mb-1 breadcrumb-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
     

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Invite User(s) Profile Details</h4><br>
       
      </div>
      
     
      <?php  
      
      $getPhoto =  $this->gfa_model->getLogoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
      
      
      
      ?>
      <div class="card-body py-2 my-25">
       
        
        <?php 
                  
                 
                 
                 if(empty($account_type)){
                     $nameArray = explode(" ", $this->gfa_model->getOldStartUpDetails($email)[0]['name']); 
                     $firsname = $nameArray[0];
                     $lastname = $nameArray[1];
                     $phone = $this->gfa_model->getOldStartUpDetails($email)[0]['phone'];
                     $country = $this->gfa_model->getOldStartUpDetails($email)[0]['country'];
                     $industry = $this->gfa_model->getOldStartUpDetails($email)[0]['industry'];
                 }else{
                     if($account_type=='startup'){
                  $nameArray = explode(" ", $this->gfa_model->getStartUpDetails($email)[0]['Primary_Contact_Name']);
                  $firsname = $nameArray[0];
                    $lastname = $nameArray[1];
                     $phone = $this->gfa_model->getStartUpDetails($email)[0]['Phones'];
                     $country = $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];
                     $industry = $this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry'];
                     }
                      if($account_type=='investor'){
                        $nameArray = explode(" ", $this->gfa_model->getInvestorDetails($email)[0]['Contact_Name']);
                        $firsname = $nameArray[0];
                        $lastname = $nameArray[1];
                        
                     }
                  }
                ?>  
        <!-- form -->
        <hr class="invoice-spacing" />
        
         <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">User Profile</h4>
        </div>
        <div class="card-body">
            <!--invoice-repeater -->
          <form class="founderForm"  method="post" action="#"  enctype="multipart/form-data" >
        <?php $getCoFoundersJson =  $this->gfa_model->getStartUpDetails($email)[0]['Co_Founder_Info'];
            $getCoFoundersArray = json_decode($getCoFoundersJson,true); ?>
            
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder="Founders Name"
                        name="founderName[]"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="Email"
                        name="founderGender[]"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Designation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Designation"
                        name="founderDesignation[]"
                       
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Phone</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Phone"
                        name="founderLinkedin[]"
                        
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Set Permission</label>
              <select id="country" name="admin[]" class="form-select">
                
                 <option value="admin">Admin</option>
                  <option value="sub-admin">Sub Admin</option>
                </select>
                </div>
            </div>
                  

                  <!--<div class="col-md-2 col-12 mb-50">-->
                  <!--  <div class="mb-1">-->
                  <!--    <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">-->
                  <!--      <i data-feather="x" class="me-25"></i>-->
                        
                  <!--    </button>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
                <hr />
              </div>
            </div>
             <div class="input_fields_wrap_ot"></div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-primary mt-1 me-1 add_field_button_ot" type="button">
                  <i data-feather="plus" class="me-25"></i>
                  <span>Add more</span>
                </button>
                <button type="submit" class="btn btn-primary mt-1 me-1 saveFounders">Send Invite</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayActionF"></span>
              
              
              </div>
               <div class="col-12">
              
              
            </div>
            </div>
          </form>
        </div>
      </div>
    </div>
   
    
    
    <script>
            function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    
      
}
$(function(){
    
    
$(".founderForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/inviteformpro"); ?>",
	 error:function() {$(".displayActionF").html('Error')},
	 beforeSend:function() {$(".displayActionF").html('Saving profile...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayActionF").html('Invite sent!');
		
	
		//}
      }
    });
    return false;

 });
    
$(".fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/profile_photo"); ?>",
	 error:function() {$(".savePhoto").html('Error')},
	 beforeSend:function() {$(".savePhoto").html('Saving Photo...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".savePhoto").html(data);
		
	
		//}
      }
    });
    return false;

 });
 
 
});    
        </script>
       <script>  
         (function( $ ) {
             
             
           //Load table 

	var max_fields      = 10; //maximum input boxes allowed

    
	
	var wrapperx         = $(".input_fields_wrap_ot"); //Fields wrapper

  
    var x = 1; //initlal text box count	  
	 var add_button_ot      = $(".add_field_button_ot"); //Add button Class
 	$(add_button_ot).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

$(wrapperx).append('<div class="removeMoreot"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemname">Name</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Founders Name" name="founderName[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemcost">Email</label><input type="text" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="F" name="founderGender[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Designation</label><input type="text" class="form-control" id="itemquantity" placeholder="Designation" name="founderDesignation[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Phone</label><input type="text" class="form-control" placeholder="Phone" name="founderLinkedin[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Set Permission</label><select id="country" name="admin[]" class="form-select"><option value="admin">Admin</option><option value="sub-admin">Sub Admin</option></select></div></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldot" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
    <script>
      $(function(){
          
          $('inputXY').keyup(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileErrorExtDemo"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          $('select').change(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileError"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          var last_valid_selection = null;

          $('.userRequest_activity').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);
              	$(".selectError").html('You can not select more 3 options');
            } else {
              last_valid_selection = $(this).val();
              $(".selectError").html('');
            }
          });
          
          	$(".saveBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/startupProfileproExt"); ?>",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
      success: function(data) {
       //
		  $(".displayAction").html("Successfully Saved!");  
	   $(".saveBtn").html('Saved'); 
	   //$(".displayDataRoom").show();
	   
	  
	
       }
      
    });
	 
  
  });
          
      });  
    </script>

  </div>
</div>

        </div>
      </div>
      

  <!-- Add New Customer Sidebar -->
  
  <!-- /Add New Customer Sidebar -->
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->



   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  