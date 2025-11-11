<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Draft Agreement</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Investor</a>
                    </li>
                    <li class="breadcrumb-item active">Startup
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
            <div class="mb-1 breadcrumb-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Snow Editor start -->


<!-- full Editor start -->
<section class="full-editor">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <!--<h4 class="card-title">Full Editor</h4>-->
        </div>
        <div class="card-body">
          
          <div class="row">
            <div class="col-sm-12">
              
              
               <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
             <?php $rowArray =   $this->admin_model->getInvestorsConnectionById($id) ?> 
                 
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">Investor Name</label>
               <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* First Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="firstName"
                disabled
                placeholder="Investor Name"
                value="<?php echo $this->gfa_model->getInvestorDetails($rowArray[0]['email'])[0]['Contact_Name'] ?>"
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">Startup/Company Name</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Last Name</label>-->
              <input
                type="text"
                class="form-control"
                id="accountLastName"
                name="lastName"
                disabled
                placeholder="Startup/Company Name"
                value="<?php echo $this->admin_model->getAllStartUpNByEmail($rowArray[0]['email_startup'])[0]['Startup_Company_Name'] ?>"
                data-msg="Please enter last name"
              />
            </div>
            <!-- <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountEmail">Investment Type</label>
              
              
              <input
                type="email"
                class="form-control"
                id="accountEmail"
                name="invest_type"
                disabled
                placeholder="Investment Type"
                value="<?php //echo $rowArray[0]['invest_type'] ; ?>"
              />
            </div> -->
            <div class="col-sm-6 col-12 mb-1">
            <label class="form-label" for="accountEmail">Investment Type</label>
                  <select  class="form-select" name="invest_type" placeholder="Investment Type">
                     
                 <option value="<?php echo $rowArray[0]['invest_type'] ; ?>"><?php echo $rowArray[0]['invest_type'] ; ?></option>
                 <option value="Co-Investment">Co-Investment</option>
                 <option value="Direct Investment">Direct Investment</option> 
                  <option value="Syndicate">Syndicate</option>
                   
                    </select>
                
              </div>
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">GFA Investor Advisor Email</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Phone Number</label>-->
              <input
                type="text"
                class="form-control account-number-mask"
                id="accountPhoneNumber"
                name="adminx"
                placeholder="GFA Investor Advisor Email"
                disable
                value="<?php if(!empty($this->admin_model->getInvestorsAgreementById($id)[0]['admin'])){ echo $this->admin_model->getInvestorsAgreementById($id)[0]['admin'];} else{ echo 'diana@getfundedafrica.com'; } ?>"
              />
            </div>
            <input
                type="hidden"
                class="form-control admin"
                id="accountPhoneNumber"
                name="admin"
                placeholder="GFA Investor Advisor Email"
                disable
                value="<?php if(!empty($this->admin_model->getInvestorsAgreementById($id)[0]['admin'])){ echo $this->admin_model->getInvestorsAgreementById($id)[0]['admin'];} else{ echo 'diana@getfundedafrica.com'; } ?>"
              />
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountPhoneNumber">Upload <?php echo $rowArray[0]['invest_type'] ; ?> Agreement </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" />
                </div>
              </div>
            <div id="full-wrapper">
                <div id="full-container">
                  <div class="editor contentDoc">
                <?php 
                
                if(!empty($this->admin_model->getInvestorsAgreementByEmail($email,$id)[0]['content'])){
                echo $this->admin_model->getInvestorsAgreementByEmail($email,$id)[0]['content']; 
                }else{ echo ''; }
                ?>  
                  </div>
                </div>
              </div>
              
              
              
           <div class="col-12 col-sm-6 mb-1">
                      <div class="form-check">
                        <input class="form-check-input" id="isPrivacySelected" type="checkbox" tabindex="4"/>
                        <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;policy & terms</a></label>
                      </div>
                    </div>
                    <input type="hidden" name="email" class="email"   value="<?php echo $rowArray[0]['email']; ?>">
                    <input type="hidden" name="connect_id" class="connect_id"   value="<?php echo $rowArray[0]['id']; ?>">
                    <input type="hidden" name="investor_email"   value="<?php echo $rowArray[0]['email']; ?>">
                    <input type="hidden" name="startup_email"  value="<?php echo $rowArray[0]['email_startup']; ?>">
  
           <input type="hidden" name="edit_id" class="edit_id"  value="<?php echo $this->admin_model->getInvestorsAgreementById($id)[0]['id']; ?>">
            
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn regButton">Submit</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
              
            </div>
          </div>
        </form>
              
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  	<script>
                        $(function(){
							
							
							$(window).on('load',  function(){
        
		$(".regButton").prop("disabled", true);
      });
							$('#isPrivacySelected').on('change', function () {

   if ($(this).is(':checked'))
    $(".regButton").prop("disabled", false);
   else
   $(".regButton").prop("disabled", true);
});
						
                       $(".startUpForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
  var form = $(this)[0];
  var formData = new FormData(form); 
	var edit_id = $('.edit_id').val();
  var connect_id = $('.connect_id').val();
  var admin = $('.admin').val();
  var email = $('.email').val();
	var contentDoc = $('.contentDoc').html();
// 	 var personalInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:{edit_id:edit_id,contentDoc:contentDoc,connect_id:connect_id,admin:admin,email:email},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/sendinvagreementpro",
      error:function() {$(".displayAction").html('Error saving data');},
	    beforeSend:function() {$(".saveBtn").val('Confirming docs...');},
      success: function(data) {
       //
		$(".displayAction").html("<p>Successfully sent. Kindly check your mail for full confirmation of deal...  </p>");  
	   $(".saveBtn").html('Submitted');  
	   $(".saveBtn").prop('disabled',true);
	   
	
       }
      
    });


    //insert file here

    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/agreementfilepro",
	 error:function() {$(".displayActionx").html('Error')},
	 beforeSend:function() {$(".displayActionx").html('Submiting Event...'); $(".EventBtnx").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionx").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtnx").prop('disabled', true);
    //  window.open("<?php echo base_url(); ?>gfa/manage_event", "_self");



      }
    });

	
   

  });
                        
});
						</script>
</section>
<!-- full Editor end -->

        </div>
      </div>
    </div>