
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
<!--   The investor name & title -->

<!--The industries the investor invests in -->
<i data-feather="list" class="user-timeline-title-icon"></i>
            <h4 class="card-title">Startup Details</h4>
<!--The size of cheques the investor writes -->


        <div class="content-body">
          <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-9 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <?php	
                //$startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                
               $row = $this->admin_model->getAllStartUpNById($id); 
			    $rowArray = $this->admin_model->getAllStartUpNByEmailExtX($row[0]['Contact_Email']); 	
				//foreach($row as $rowArray){  
                
                ?> 
    <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Primary_Contact_Name']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $row[0]['Startup_Company_Name']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"></h4>
                <small>Invested</small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"></h4>
                <small>Completed</small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1">Details</h4>
          <div class="info-container">
            <ul class="list-unstyled">
              <!--<li class="mb-75">-->
              <!--  <span class="fw-bolder me-25">Username:</span>-->
              <!--  <span>violet.dev</span>-->
              <!--</li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25"> Email:</span>
                <span><?php echo $row[0]['Contact_Email']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> Address:</span>
                <span><?php echo $row[0]['CountryHQ']; ?></span>
              </li>
               <li class="mb-75">
                <span class="fw-bolder me-25"> Company Category:</span>
                <span><?php echo $row[0]['PrimaryBusinessIndustry']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Status:</span>
                <span class="badge bg-light-success">Active</span>
              </li>
              
               <li class="mb-75">
                <span class="fw-bolder me-25">Phone:</span>
                <span><?php echo $row[0]['Phones']; ?></span>
              </li>
              
              <li class="mb-75">
                <span class="fw-bolder me-25">Business Model:</span>
                <span><?php echo $rowArray[0]['Startup_Model']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Business Solution:</span>
                <span><?php echo $rowArray[0]['Solution_Corperate']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Core Interest Corporate</span>
                <span><?php echo $rowArray[0]['Core_Interest_Corporate']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">Solution Ownership</span>
                <span><?php echo $rowArray[0]['Solution_Ownership']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25">LinkedIn:</span>
                <span><?php echo $row[0]['LinkedIn']; ?></span>
              </li>
             
            </ul>
            <?php //echo base_url(); ?>
            <!--gfa/schedule/startup/-->
            <?php //echo $rowArray[0]['Id']  ?>
            <!--<a href="" class="btn btn-primary me-1" >-->
            <!--    Schedule Meeting-->
            <!--  </a>-->
            <!--<div class="d-flex justify-content-center pt-2">-->
             
             
            <!--</div>-->
            <div class="demo-inline-spacing justify-content-center">
            <button type="button" class="btn btn-primary" data-bs-target="#checkProfile" data-bs-toggle="modal" actionMsg="Schedule a call">Schedule a call</button>
            
            <button type="button" class="btn btn-dark" data-bs-target="#referEarnModal" data-bs-toggle="modal" actionMsg="invest">Invest</button>
          </div>
          </div>
        </div>
      </div>
      <!-- /User Card -->
     
    </div>
    <!--/ User Sidebar -->

   
  </div>
</section>
          <!-- Edit User Modal -->
          
<div class="modal fade" id="referEarnModal" tabindex="-1" aria-labelledby="referEarnTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg modal-refer-earn">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-0">
        <div class="px-sm-4 mx-50">
          <h1 class="text-center mb-1" id="referEarnTitle">Please select how you want to invest</h1>
          <!--<p class="text-center mb-5">-->
          <!--  Invite your friend to vuexy, if thay sign up, you and-->
          <!--  <br />-->
          <!--  your friend will get 30 days free trial-->
          <!--</p>-->

          <div class="row mb-4">
            <div class="col-12 col-lg-3">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Co-Investment"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="user-plus"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Co-Investment</h6>
                <!--<p>Send your referral link to your friend</p>-->
              </div></a>
            </div>
            <div class="col-12 col-lg-3">
              <a href="#" data-bs-target="#editUserSyn" data-bs-toggle="modal"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="users"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">GFA Syndicate</h6>
                <!--<p>Let them register to our services</p>-->
              </div></a>
            </div>
            <div class="col-12 col-lg-3">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="GFA Venture Fund"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="grid"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">GFA Venture Fund</h6>
                <!--<p>Your friend will get 30 days free trial</p>-->
              </div></a>
            </div>
            
             <div class="col-12 col-lg-3">
              <a href="#" class="invest" data-bs-target="#editUserFile" data-bs-toggle="modal" investType="Venture Debt"><div class="d-flex justify-content-center mb-1">
                <div
                  class="
                    modal-refer-earn-step
                    d-flex
                    width-100
                    height-100
                    rounded-circle
                    justify-content-center
                    align-items-center
                    bg-light-primary
                  "
                >
                  <i data-feather="book-open"></i>
                </div>
              </div>
              <div class="text-center">
                <h6 class="fw-bolder mb-1">Venture Debt</h6>
                <!--<p>Your friend will get 30 days free trial</p>-->
              </div></a>
            </div>
          </div>
        </div>

        <hr />

       
      </div>
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
<div class="modal fade" id="editUserSyn" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <!--<div class="text-center mb-2">-->
        <!--  <h1 class="mb-1">Book A Meeting</h1>-->
        <!--  <p>Select any of the free date to book your time</p>-->
        <!--</div>-->
      
      
      
      <iframe src="https://angel.co/login" style="height:800px;width:100%;" title="Syndicate Account"></iframe>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      </div>
    </div>
  </div>
</div>
<div class="modal fade" id="editUserFile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1 showInvest">Verification</h1>
          
         <form action="#" id="#EventFormFile" class="form EventFormFile" enctype="multipart/form-data">
            <div class="row">
            <?php  
            
            $investorFile = $this->admin_model->getInvestorsFileUploadedByEmail($email); 
            if(empty($investorFile[0]['photo'])){
            ?>
              <div class="col-12">
                  <label>Upload Photo </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your photo" />
                </div>
              </div>
              
            <?php }else{ echo ''; } ?>
              <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
              
              <?php  if(empty($investorFile[0]['ids'])){  ?>
              <div class="col-12">
                  <label>Upload ID</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload your IDs" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
             <?php  if(empty($investorFile[0]['address'])){  ?> 
              <div class="col-12">
                  <label>Upload Proof of Address</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="Upload Proof of Address" />
                </div>
              </div>
              <?php  }else{ echo '';  }  ?>
              <div class="col-12">
                <textarea class="form-control mb-2 showMore" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             <input type="hidden" class="getinvest" name="invest_type" />
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtnFile">Submit</button>
                <button  class="btn btn-primary" data-bs-target="#editUser" data-bs-toggle="modal">Discuss further with GFA</button>
                <p class="displayActionFile"></p>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>
      $(function(){
          
    $(".invest").click(function(){
     var getInvest = $(this).attr('investType'); 
     $('.getinvest').val(getInvest);
    $('.showInvest').html(getInvest);
    $('.showMore').attr('placeholder','More infomation on '+getInvest);
        
    });      
          
          
           $(".EventFormFile").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/verifyInvestor",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayActionFile").html('Sending...'); $(".EventBtnFile").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayActionFile").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtnFile").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
        </div>
<div class="modal fade" id="editUser" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
          <h1 class="mb-1">Book A Meeting</h1>
          <p>Select any of the free date to book your time</p>
        </div>
      
      
      
      <iframe src="https://calendly.com/dianateoh" style="height:800px;width:100%;" title="Book"></iframe>
      
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      
      </div>
    </div>
  </div>
</div>
          <!-- upgrade your plan Modal -->
<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1">Schedule a call</h1>
          
         <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control" required placeholder="Subject of the message" />
                </div>
              </div>
              
              <div class="col-md-12 mb-1">
          <!--<label class="form-label" for="fp-date-time"></label>-->
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="date_time"
            placeholder="Date/Time [YYYY-MM-DD HH:MM]"
          />
        </div>
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="More infomation"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
     
      </div>
      
    </div>
  </div>
</div>

<script>
      $(function(){
          
          
          
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/callstartup",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Sending...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', true);

      }
    });
    return false;

  });
         
          
          
      });  
    </script>
        </div>
<!--/ upgrade your plan Modal -->

        </div>
      </div>
    </div>
    <!-- END: Content-->
    
    
    
  </div>


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   