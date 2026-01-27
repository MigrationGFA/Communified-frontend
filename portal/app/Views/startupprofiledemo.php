 <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>     <!-- BEGIN: Content-->
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
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Startup Profile </a>
                    </li>
                    <li class="breadcrumb-item active"> Account Details
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
     <ul class="nav nav-pills mb-2">
      <!-- account -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>gfa/profile">
          <i data-feather="user" class="font-medium-3 me-50"></i>
          <span class="fw-bold">User Profile</span>
        </a>
      </li>
       
      <li class="nav-item">
        <a class="nav-link  active" href="<?php echo base_url(); ?>gfa/startupprofile">
          <i data-feather="lock" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Startup Profile</span>
        </a>
      </li>
      <!-- billing and plans 
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i data-feather="bookmark" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Billings &amp; Plans</span>
        </a>
      </li>-->
      <!-- notification 
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i data-feather="bell" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Notifications</span>
        </a>
      </li>-->
    
    </ul>

    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title">Startup Profile Details</h4><br>
       
      </div>
      
     
      <?php  
      
      $getPhoto =  $this->gfa_model->getLogoUploaded($email);  
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      }
      
      
      
      ?>
      <div class="card-body py-2 my-25">
       
        <!-- header section -->
         <label class="form-label" for="accountFirstName">Upload Coporate Logo</label><br>
         <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Upload your Logo</label>-->
          
              <br>
        <div class="d-flex">
            
          <a href="#" class="me-25">
              
            <img
              src="<?php echo base_url().$showPhoto; ?>"
              id="frame"
              class="uploadedAvatar rounded me-50"
              alt="profile image"
              height="100"
              width="100"
            />
          </a>
          <!-- upload and reset button -->
          <form class="fileInfox" method="post" action="#" enctype="multipart/form-data">
          <div class="d-flex align-items-end mt-75 ms-1">
            <div>
              <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75 uploadBtn">Upload</label>
              <input type="file" name="file[]" id="account-upload" hidden accept="image/*"  onchange="preview()" />
              <input type="hidden" name='upload_type' value='logo' />
              <button type="submit" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75 savePhotox">Save Upload</button>
              <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
              <span class="savePhoto"></span>
            </div>
          </div>
          </form>
          <!--/ upload and reset button -->
        </div>
        <!--/ header section -->
        
        
<!--        <form>-->
<!--  <input type="file" onchange="preview()">-->
<!--  <img id="frame" src="" width="100px" height="100px"/>-->
<!--</form>-->
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
          <h4 class="card-title">Founders/Co-Founders Profile</h4>
        </div>
        <div class="card-body">
            <!--invoice-repeater -->
          <form class="founderForm"  method="post" action="#"  enctype="multipart/form-data" >
        <?php $getCoFoundersJson =  $this->gfa_model->getStartUpDetails($email)[0]['Co_Founder_Info'];
            $getCoFoundersArray = json_decode($getCoFoundersJson,true);
            foreach($getCoFoundersArray as $getCoFounders){
        ?>
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
                        value="<?php  echo $getCoFounders['coFounderName'] ?>"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-1 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Gender</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="F"
                        name="founderGender[]"
                        value="<?php  echo $getCoFounders['coGender'] ?>"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Designation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="CEO"
                        name="founderDesignation[]"
                        value="<?php  echo $getCoFounders['coDesignation'] ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Linkedin</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="url"
                        name="founderLinkedin[]"
                        value="<?php  echo $getCoFounders['coLinkedin'] ?>"
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="staticprice">Picture</label>
                       <input
                        type="file"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Picture"
                        name="file[]"
                       
                      />
                    </div>
                  </div>
                  <input type="hidden" name="coFounderPhoto" value="<?php  echo $getCoFounders['coPhoto'] ?>" />
                  
                   <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Prior Startup Founding Experience</label>
              <select id="country" name="startup_exp[]" class="form-select">
                <option value="<?php  echo $getCoFounders['coStartupExp'] ?>"><?php  echo $getCoFounders['coStartupExp'] ?></option>
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
            <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Exit Experience</label>
              <select id="country" name="exit_exp[]" class="form-select">
                <option value="<?php  echo $getCoFounders['coExitExp'] ?>"><?php  echo $getCoFounders['coExitExp'] ?></option>
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
            
             <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Relevant work experience?</label>
              <select id="country" name="work_exp[]" class="form-select">
                     <option value="<?php  echo $getCoFounders['coWorkExp'] ?>"><?php  echo $getCoFounders['coWorkExp'] ?></option>
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
                   <div class="col-12 col-sm-6 mb-1">
             
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Brief about this founder"
                  style="height: 100px"
				  name="founderAbout[]"
			
                >
                  <?php  echo $getCoFounders['coAbout'] ?>
              </textarea>
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
            
            
            <?php }  ?>
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

                  <div class="col-md-1 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Gender</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="F"
                        name="founderGender[]"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Designation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="CEO"
                        name="founderDesignation[]"
                       
                      />
                    </div>
                  </div>
                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Linkedin</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="url"
                        name="founderLinkedin[]"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-2 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="staticprice">Picture</label>
                       <input
                        type="file"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Picture"
                        name="file[]"
                      
                      />
                    </div>
                  </div>
                    <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Prior Startup Founding Experience</label>
              <select id="country" name="startup_exp[]" class="form-select">
                
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
            <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Exit Experience</label>
              <select id="country" name="exit_exp[]" class="form-select">
                
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
            
             <div class="col-md-2 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Relevant work experience?</label>
              <select id="country" name="work_exp[]" class="form-select">
                
                 <option value="Yes">Yes</option>
                  <option value="No">No</option>
                </select>
                </div>
            </div>
            
             
                   <div class="col-12 col-sm-6 mb-1">
             
              <textarea
                  
                  class="form-control"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Brief about this founder/Cofounder"
                  style="height: 100px"
				  name="founderAbout[]"
			        required
                >Brief about this founder/Cofounder
              </textarea>
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
                <button type="submit" class="btn btn-primary mt-1 me-1 saveFounders">Save Founders Profile</button>
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
     url: "<?php echo base_url(); ?>gfa/founderformpro",
	 error:function() {$(".displayActionF").html('Error')},
	 beforeSend:function() {$(".displayActionF").html('Saving profile...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayActionF").html(data);
		
	
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
     url: "<?php echo base_url(); ?>gfa/profile_photo",
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

$(wrapperx).append('<div class="removeMoreot"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemname">Name</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Founders Name" name="founderName[]" /></div></div><div class="col-md-1 col-12"><div class="mb-1"><label class="form-label" for="itemcost">Gender</label><input type="text" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="F" name="founderGender[]" /></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Designation</label><input type="text" class="form-control" id="itemquantity" placeholder="CEO" name="founderDesignation[]" /></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Linkedin</label><input type="text" class="form-control" placeholder="url" name="founderLinkedin[]" /></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Picture</label><input type="file" class="form-control" placeholder="Picture" name="file[]" /></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Prior Startup Founding Experience</label><select id="country" name="startup_exp[]" class="form-select"><option value="Yes">Yes</option><option value="No">No</option></select></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Exit Experience</label><select id="country" name="exit_exp[]" class="form-select"><option value="Yes">Yes</option><option value="No">No</option></select></div></div><div class="col-md-2 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Relevant work experience?</label><select id="country" name="work_exp[]" class="form-select"><option value="Yes">Yes</option><option value="No">No</option></select></div></div><div class="col-12 col-sm-6 mb-1"><textarea class="form-control" rows="3" placeholder="Brief about this founder/Cofounder" style="height: 100px" name="founderAbout[]" ></textarea></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldot" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    <hr class="invoice-spacing" />
        <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
                
                
                
            <!-- Invoice repeater -->
   
    <!-- /Invoice repeater -->    
                
              
                 
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountStartupName">Startup Name</label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* First Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountStartupName"
                name="organization"
                placeholder="GFA"
                value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Company_Name'];  ?>"
                data-msg="Please enter Startup Name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountStartupHQAddress">Startup HQ Address</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Last Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountStartupHQAddress"
                name="Startup_Address"
                placeholder="First Street, Bamako"
                value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Address'];  ?>"
                data-msg="Please enter Startup HQ Address"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country">Country of Incorporation</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Country</label>-->
              <select id="country" name="Country_Incorporate" class="form-select">
                <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Country_Incorporate'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Country_Incorporate'];  ?></option>
    <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option> 
              </select>
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Date Founded</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Date Founded</label>-->
              
              <input type="date" class="form-control" id="accountAddress" name="year_founded" placeholder="Year Founded" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Date_Founded'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="normalMultiSelect">Industry</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Industry</label>-->
              
               <select class="select2 form-select" name="industry[]" id="select2-multiple" multiple>
              
                <?php  $IndustryArray = explode(",",$this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']); ?>
                 <?php if(!empty($IndustryArray[0])){  ?>
                 <option value="<?php echo $IndustryArray[0];  ?>" selected><?php echo $IndustryArray[0]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[1])){  ?>
                 <option value="<?php echo $IndustryArray[1];  ?>" selected><?php echo $IndustryArray[1]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[2])){  ?>
                 <option value="<?php echo $IndustryArray[2];  ?>" selected><?php echo $IndustryArray[2]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
			  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo $rowArrayIndustry["industry"] ?></option>
                  <?php }  ?>
              </select>
            </div>
            
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country">Startup HQ Country</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Country</label>-->
              <select id="country" name="startup_country" class="form-select">
                <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['CountryHQ'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Country'];  ?></option>
    <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option> 
              </select>
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountState">Startup State</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* State</label>-->
              <input type="text" class="form-control" id="accountState" name="Startup_State" placeholder="State" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_State'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountZipCode">Zip Code</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Zip Code</label>-->
              <input
                type="text"
                class="form-control account-zip-code"
                id="accountZipCode"
                name="Zip_Code"
                placeholder="Zip Code"
                maxlength="6"
                value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['ZipCode'];  ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Website Url</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Website Url</label>-->
              <input type="text" class="form-control" id="accountAddress" name="website" placeholder="website" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Website'];  ?>" />
            </div>
          
          
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">Email</label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Email</label>-->
              
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="email"
                disabled
                placeholder="Email"
                value="<?php echo $email ; ?>"
              />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Phone</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Phone Number</label>-->
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="Startup_Phone"
                placeholder="Phone"
                value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Phone'];  ?>"
              />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">LinkedIn Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="linkedIn" placeholder="LinkedIn Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['LinkedIn'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Facebook Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Facebook Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="Startup_Facebook" placeholder="Facebook Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Facebook'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountYoutube">Startup Youtube Link </label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Youtube Link Profile</label>-->
              <input type="text" class="form-control" id="accountYoutube" name="youtube" placeholder="Youtube" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Youtube_Url'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">No of Employees</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* No of Employees</label>-->
              <input type="number" class="form-control" id="accountAddress" name="NoOfEmployees" placeholder="No of Employees" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees'];  ?>" />
            </div>
            
            
            
            
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Current Stage</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Current Stage</label>-->
              
              <select id="country" name="current_stage" class="form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage'];  ?></option>
             <?php	$rowIndustry = $this->admin_model->getInvestmentStage();  foreach($rowIndustry as $rowArrayIndustry){  ?>
              <option value="<?php echo $rowArrayIndustry["Stages"] ?>"><?php echo $rowArrayIndustry["Stages"] ?></option>
                  <?php }  ?>
                  
                  </select>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Implementation Stage</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Implementation Stage</label>-->
              
              <select id="country" name="Implementation_stage" class="form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?></option>
             <?php $rowIS = $this->admin_model->implementationStage();  foreach($rowIS as $implementStage){  ?>
                  <option value="<?php echo $implementStage['Stages'] ?>"><?php echo $implementStage['Stages'] ?></option>
                  <?php }  ?>
                 </select>  
            </div>
            <div class="col-12 col-sm-6 mb-1">
             <label class="form-label" for="country">Operating Region</label>
             <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Operating Region</label>-->
              
              <select name="OperatingRegions" id="Region" class=" form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['OperatingRegions'];  ?></option>
            <?php $row = $this->admin_model->getAllAfricaRegions();  foreach($row as $getAllAfricaRegions){  ?>
            
                  <option value="<?php echo $getAllAfricaRegions['region'] ?>"><?php echo $getAllAfricaRegions['region'] ?></option>
                  <?php }  ?>
             </select> 
             </div>
              
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Funding to raise (USD)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Funding to Raise ($)</label>-->
              
              <input type="number" class="form-control" id="accountAddress" name="fund_to_raise" placeholder="Funding to raise" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Amount you will raise in 6 to 18month (USD)</label>
              <!-- <label class="form-label" for="accountAmount" style="color:#ff0000;">* Amount you will like to raise in 6 to 18month</label>-->
              
              <input type="number" class="form-control" id="accountAmount" name="Amount_Raise" placeholder="Amount you will like to raise in 6 to 18month" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Amount_Raise'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress"> What is your current annual revenue (eg. Pre-revenue, $1M ARR, $150k GMV Q4 2022)? (USD)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Annual Revenue</label>-->
              <input type="number" class="form-control" id="accountARR" name="revenue" placeholder="eg. Pre-revenue, $1M ARR, $150k GMV Q4 2022" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Revenue'];  ?>" />
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountMRR">Monthly Revenue</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Monthly Revenue</label>-->
              <input type="number" class="form-control" id="accountMRR" name="Monthly_Revenue" placeholder="Monthly Revenue" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Monthly_Revenue'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountMinGrowth">Minimum growth per month </label>
              <!-- <label class="form-label" for="accountMinGrowth" style="color:#ff0000;">* Minimum growth per month</label>-->
              <input type="text" class="form-control" id="accountMinGrowth" name="Minimum_Growth" placeholder="Minimum growth per month" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Minimum_Growth'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Valuation Multiple of Revenue (USD)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Valuation (USD)</label>-->
              <input type="number" class="form-control" id="accountValuation" name="Valuation" placeholder="Valuation" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Valuation'];  ?>" />
            </div>
            
           <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Closest Competitor(s)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Valuation (USD)</label>-->
              <input type="text" class="form-control" id="accountValuation" name="Closest_Competitor" placeholder="Valuation" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Closest_Competitor'];  ?>" />
            </div>
           <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Current Burn Rate (USD)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Valuation (USD)</label>-->
              <input type="text" class="form-control" id="accountValuation" name="Burn_Rate" placeholder="Current Burn Rate (USD)" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Burn_Rate'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Gross Profit Margin (%)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Valuation (USD)</label>-->
              <input type="text" class="form-control" id="accountValuation" name="Gross_Profit" placeholder="Gross Profit Margin (%)" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Gross_Profit'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Current Unit Economics</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Valuation (USD)</label>-->
              <input type="text" class="form-control" id="accountValuation" name="Unit_Econs" placeholder="e.g. Total Recruiters,Total Job Seekers,CAC (Customer Acquisition Cost)" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Unit_Econs'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Product / Tech Readiness</label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Product" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Product'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Product'];  ?></option>
                        
                        <option value="Building">Building</option>
                       <option value="Prototype">Prototype</option>
                       <option value="MVP">MVP</option>
                       <option value="Fully Functional">Fully Functional</option>
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Solutions Category you can Provide for Corporate</label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Solution_Corperate" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Solution_Corperate'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Solution_Corperate'];  ?></option>
                       
    <option value="Financial Services FMCG/CPG">Financial Services FMCG/CPG</option>
    <option value="Renewable Energy Software">Renewable Energy Software</option>
    <option value="Digital Banks">Digital Banks</option>
    <option value="Mastercard/VISA">Mastercard/VISA</option>
    <option value="Manufacturing">Manufacturing</option>
    <option value="Payment Platform">Payment Platform</option>
    <option value="ICT Technology Products & Solutions">ICT Technology Products & Solutions</option>
    <option value="Engineering/ESG">Engineering/ESG</option>
               </select>  
                 </div>
                  <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Core Interest of Corporate your Startup can Solve</label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Core_Interest_Corporate" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Core_Interest_Corporate'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Core_Interest_Corporate'];  ?></option>
                       
   
 <option value="Increasing revenue">Increasing revenue</option>
 <option value="Reducing company costs">Reducing company costs</option>
 <option value="Enhance operational excellence, capabilities or performance management">Enhance operational excellence, capabilities or performance management</option>
 <option value="Ensure resources & processes becoming liabilities rather capabilities, when facing challenges such as new markets or disruptive challenges">Ensure resources & processes becoming liabilities rather capabilities, when facing challenges such as new markets or disruptive challenges</option>
 <option value="Accessing new markets/customers">Accessing new markets/customers</option>
    <option value="Increasing sales in existing markets">Increasing sales in existing markets</option>
 <option value="Improving your access to technology and other resources">Improving your access to technology and other resources</option>
 <option value="Improving your product offering for your customers">Improving your product offering for your customers</option>
    <option value="Diversifying your product offerings">Diversifying your product offerings</option>
    <option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Digital Transformation digital transformation for a company's business process, culture and customer experiences to meet changing business and market requirements</option>
 <option value="Aggregation of data and gaining new insights">Aggregation of data and gaining new insights</option>
    <option value="Solutions to enable a smart workforce across multiple internal functions">Solutions to enable a smart workforce across multiple internal functions</option>
               </select>  
                 </div>
                  <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Corporate Solution Proximity to Company's Core</label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Corporate_Solution_Prox" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Corporate_Solution_Prox'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Corporate_Solution_Prox'];  ?></option>
                       
    <option value="Adjacent">Adjacent</option>
    <option value="Close">Close</option>
    <option value="Radical">Radical</option>
    
               </select>  
                 </div>
                  <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Solution Ownership/Relationship Style</label>
              <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->
              
              <select id="Readiness" name="Solution_Ownership" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Solution_Ownership'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Solution_Ownership'];  ?></option>
                       Solution_Ownership
    <option value="Built In-house">Built In-house</option>
    <option value="Investment Opportunity">Investment Opportunity</option>
    <option value="Partnership/Joint Venture">Partnership/Joint Venture</option>
    <option value="Acquisition">Acquisition</option>
    
               </select>  
                 </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountSocial">Social Impact (meets the SDG 17 Goals)</label>
              <!-- <label class="form-label" for="accountSocial" style="color:#ff0000;">* Social Impact (meets the SDG 17 Goals)</label>-->
              
              <select id="Social" name="Social_Impact" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Social_Impact'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Social_Impact'];  ?></option>
                        
                        <option value="Yes">Yes</option>
                       <option value="No">No</option>
                       <option value="Either">Either</option>
               </select>  
                 </div>
                 
                 
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEntrepreneur">Serial Entrepreneur</label>
              <!-- <label class="form-label" for="accountEntrepreneur" style="color:#ff0000;">* Serial Entrepreneur</label>-->
              
              <select id="Entrepreneur" name="Serial_Entrepreneur" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Serial_Entrepreneur'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Serial_Entrepreneur'];  ?></option>
                        
                        <option value="Yes">Yes</option>
                       <option value="No">No</option>
                       <option value="Either">Both</option>
               </select>  
                 </div>
                 
                 
                     <div class="col-12 col-sm-6 mb-1">
                
              <label class="form-label" for="normalMultiSelect">Scaling geography share a list of countries</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* What areas you’d like mentorship? Select Minimum of 3</label>-->
             
              <select class="select2 form-select"  name="Scaling[]"  multiple>
                  <?php  $scalingArray = explode(",",$this->gfa_model->getStartUpDetailsExt($email)[0]['Scaling']); ?>
                 <?php if(!empty($scalingArray[0])){  ?>
                 <option value="<?php echo $scalingArray[0];  ?>" selected><?php echo $scalingArray[0]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($scalingArray[1])){  ?>
                 <option value="<?php echo $scalingArray[1];  ?>" selected><?php echo $scalingArray[1]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($scalingArray[2])){  ?>
                 <option value="<?php echo $scalingArray[2];  ?>" selected><?php echo $scalingArray[2]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($scalingArray[3])){  ?>
                 <option value="<?php echo $scalingArray[3];  ?>" selected><?php echo $scalingArray[3]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                 
                   <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option> 
                       
                
                 </select>  
                 <span class="selectError"></span>
            </div>  
            
                 <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountCompanytype">Company type</label>
              <!-- <label class="form-label" for="accountCompanytype" style="color:#ff0000;">* Company type</label>-->
              
              <select id="Companytype" name="Startup_Type" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Type'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Type'];  ?></option>
                        
                        <option value="Startup">Startup</option>
                       <option value="SME">SME</option>
                       <option value="Both">Both</option>
               </select>  
                 </div>
                 
            
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFundingtype">Funding type</label>
              <!-- <label class="form-label" for="accountFundingtype" style="color:#ff0000;">* Funding type</label>-->
              
              <select id="Fundingtype" name="Funding_Type" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Funding_Type'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Funding_Type'];  ?></option>
                        
                        <option value="Equity">Equity</option>
                       <option value="Debt">Debt</option>
                       <option value="Both">Both</option>
               </select>  
                 </div>
                 
                 <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountModel">Whats your business model</label>
              <!-- <label class="form-label" for="accountInvolvement" style="color:#ff0000;">* Whats your business model</label>-->
              
              <select id="Model" name="Startup_Model" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Model'];  ?></option>
                        
                        <option value="B2B">B2B</option>
                       <option value="B2B2C">B2B2C</option>
                       <option value="B2C">B2C</option>
               </select>  
                 </div>  
                      
              
              <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountCoreTeam">Where is your core team structure</label>
              <!-- <label class="form-label" for="accountCoreTeam" style="color:#ff0000;">* Core Team</label>-->
              
              <select id="CoreTeam" name="Startup_Core" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Core'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Core'];  ?></option>
                        
                        <option value="In Africa">In Africa</option>
                       <option value="Outside Africa">Outside Africa</option>
                       <option value="Either">Either</option>
               </select>  
                 </div>
                         
                <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountInvolvement">Level of involvement</label>
              <!-- <label class="form-label" for="accountInvolvement" style="color:#ff0000;">* Level of Involvement</label>-->
              
              <select id="Involvement" name="Startup_Level" class=" form-control form-select">
              <option value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Level'];  ?>"><?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Level'];  ?></option>
                        
                        <option value="Invest only">Invest only</option>
                       <option value="Board of director">Board of director</option>
                       <option value="Mentor">Mentor</option>
               </select>  
                 </div>  
                 
                 
                   <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAccelerator">Name of accelerator program attented</label>
              <!-- <label class="form-label" for="accountAccelerator" style="color:#ff0000;">* Name of accelerator program attented</label>-->
              <input type="text" class="form-control" id="accountAccelerator" name="Startup_Accelerator" placeholder="Name of accelerator program attented" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Accelerator'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPartners">Mention some of your major partners</label>
              <!-- <label class="form-label" for="accountPartners" style="color:#ff0000;">* Mention some of your major partners</label>-->
              <input type="text" class="form-control" id="accountPartners" name="Startup_Partner" placeholder="Major partners" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Partner'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountSubsidiarie">If you have subsidiaries what's your ownership percentage?</label>
              <!-- <label class="form-label" for="accountPartners" style="color:#ff0000;">* Mention some of your major partners</label>-->
             <input type="text" class="form-control" id="accountSubsidiarie" name="Startup_Percent" placeholder="Subsidiaries Ownership percentage?" value="<?php echo $this->gfa_model->getStartUpDetailsExt($email)[0]['Startup_Percent'];  ?>" />
          </div>
           
         <div class="col-12 col-sm-6 mb-1">
                
              <label class="form-label" for="normalMultiSelect">What areas you’d like mentorship? Select Minimum of 3</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* What areas you’d like mentorship? Select Minimum of 3</label>-->
             
              <select id="select2-limited" name="mentorship[]" multiple class="select2 form-control form-select userRequest_activity">
                  <?php  $mentorArray = explode(",",$this->gfa_model->getStartUpDetails($email)[0]['Mentorship']); ?>
                 <?php if(!empty($mentorArray[0])){  ?>
                 <option value="<?php echo $mentorArray[0];  ?>" selected><?php echo $mentorArray[0]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($mentorArray[1])){  ?>
                 <option value="<?php echo $mentorArray[1];  ?>" selected><?php echo $mentorArray[1]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($mentorArray[2])){  ?>
                 <option value="<?php echo $mentorArray[2];  ?>" selected><?php echo $mentorArray[2]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                 
                   <option value="Business development">Business Development</option>
                   <option value="Financial management">Financial Management</option>
                    <option value="Marketing">Marketing</option>
                     <!--<option value="Employee management">Employee management</option>-->
                     <!-- <option value="Business Operations – legal, supply chain etc">Business Operations – legal, supply chain etc</option>-->
                     <!--  <option value="Managing Growth Effectively">Managing Growth Effectively</option>-->
                     <!--  <option value="Executive Coaching for Entrepreneurs">Executive Coaching for Entrepreneurs </option>-->
                       
                
                 </select>  
                 <span class="selectError"></span>
            </div> 
           
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Tell us a little about your product, services or idea? </label>
               <!--<label class="form-label" for="accountAddress" style="color:#ff0000;">Tell us a little about your product, services or idea? </label>-->
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="About your product, services or idea"
                  style="height: 100px"
				  name="about"
                ><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Investment_History'];  ?></textarea>
            </div>
           
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="language" class="form-label">Language</label>-->
            <!--  <select id="language" class="select2 form-select">-->
            <!--    <option value="">Select Language</option>-->
            <!--    <option value="en">English</option>-->
            <!--    <option value="fr">French</option>-->
            <!--    <option value="de">German</option>-->
            <!--    <option value="pt">Portuguese</option>-->
            <!--  </select>-->
            <!--</div>-->
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="timeZones" class="form-label">Timezone</label>-->
            <!--  <select id="timeZones" class="select2 form-select">-->
            <!--    <option value="">Select Time Zone</option>-->
            <!--    <option value="-12">(GMT-12:00) International Date Line West</option>-->
            <!--    <option value="-11">(GMT-11:00) Midway Island, Samoa</option>-->
            <!--    <option value="-10">(GMT-10:00) Hawaii</option>-->
            <!--    <option value="-9">(GMT-09:00) Alaska</option>-->
            <!--    <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>-->
            <!--    <option value="-8">(GMT-08:00) Tijuana, Baja California</option>-->
            <!--    <option value="-7">(GMT-07:00) Arizona</option>-->
            <!--    <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>-->
            <!--    <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>-->
            <!--    <option value="-6">(GMT-06:00) Central America</option>-->
            <!--    <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>-->
            <!--    <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>-->
            <!--    <option value="-6">(GMT-06:00) Saskatchewan</option>-->
            <!--    <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>-->
            <!--    <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>-->
            <!--    <option value="-5">(GMT-05:00) Indiana (East)</option>-->
            <!--    <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>-->
            <!--    <option value="-4">(GMT-04:00) Caracas, La Paz</option>-->
            <!--    <option value="-4">(GMT-04:00) Manaus</option>-->
            <!--    <option value="-4">(GMT-04:00) Santiago</option>-->
            <!--    <option value="-3.5">(GMT-03:30) Newfoundland</option>-->
            <!--  </select>-->
            <!--</div>-->
            <!--<div class="col-12 col-sm-6 mb-1">-->
            <!--  <label for="currency" class="form-label">Currency</label>-->
            <!--  <select id="currency" class="select2 form-select">-->
            <!--    <option value="">Select Currency</option>-->
            <!--    <option value="usd">USD</option>-->
            <!--    <option value="euro">Euro</option>-->
            <!--    <option value="pound">Pound</option>-->
            <!--    <option value="bitcoin">Bitcoin</option>-->
            <!--  </select>-->
            <!--</div>-->
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Save Company Details</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
             <?php //if($this->gfa_model->getStartUpDetails($email)[0]['Credit_Point'] >=98) {  ?>
              <a class="btn btn-primary mt-1 me-1 displayDataRoom"  href="<?php echo base_url(); ?>gfa/dealroom_folder/Profile">
          <i data-feather="cloud" class="font-medium-3 me-50"></i>
          <span class="fw-bold">Next: Data Room</span>
        </a>
           <?php  //}   ?>   
            </div>
          </div>
        </form>
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
     url: "<?php echo base_url(); ?>gfa/checkProfileErrorExtDemo",
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
     url: "<?php echo base_url(); ?>gfa/checkProfileError",
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
     url: "<?php echo base_url(); ?>gfa/startupProfileproExt",
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

  