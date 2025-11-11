<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
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
            <h4 class="card-title"><?php echo lang("translation.Mentor's Details") ?></h4>
<!--The size of cheques the investor writes -->


        <div class="content-body">
          <section class="app-user-view-account">
  <div class="row">
    <!-- User Sidebar -->
    <div class="col-xl-9 col-lg-5 col-md-5 order-1 order-md-0">
      <!-- User Card -->
      <?php	
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                // $rowArray = $this->admin_model->getAllStartUpNById($startupArray[0]['id']); 
               $row = $this->admin_model->getAllMentorById($id);  
				
				//foreach($row as $rowArray){  
                
                ?> 
      <div class="card">
        <div class="card-body">
          <div class="user-avatar-section">
            <div class="d-flex align-items-center flex-column">
              <img
                class="img-fluid rounded mt-3 mb-2"
                src="<?php echo base_url(); ?>public/assets/images/uploads/default-avatar.jpg"
                height="110"
                width="110"
                alt="User avatar"
              />
              <div class="user-info text-center">
                <h4><?php echo $row[0]['Mentor_name']; ?></h4>
                <span class="badge bg-light-secondary"><?php echo $row[0]['Company']; ?></span>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-around my-2 pt-75">
            <div class="d-flex align-items-start me-2">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="users" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php echo lang("translation.{$row[0]['Mentors_focus']}"); ?></h4>
                <small><?php echo lang('translation.Mentoring Focus') ?></small>
              </div>
            </div>
            <div class="d-flex align-items-start">
              <span class="badge bg-light-primary p-75 rounded">
                <i data-feather="check" class="font-medium-2"></i>
              </span>
              <div class="ms-75">
                <h4 class="mb-0"><?php echo $this->gfa_model->countAllConnByEmail($row[0]['Need_contact_email'])[0]['email_count'];  ?></h4>
                <small><?php echo lang('translation.Connection') ?></small>
              </div>
            </div>
          </div>
          <h4 class="fw-bolder border-bottom pb-50 mb-1"><?php echo lang('translation.Details') ?></h4>
          <div class="info-container">
            <ul class="list-unstyled">
              <!--<li class="mb-75">-->
              <!--  <span class="fw-bolder me-25">Username:</span>-->
              <!--  <span>violet.dev</span>-->
              <!--</li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Gender') ?>:</span>
                <span><?php echo $row[0]['Gender']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Nationality') ?>:</span>
                <span><?php echo $row[0]['Nationality']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"> <?php echo lang('translation.Role') ?>:</span>
                <span><?php echo $row[0]['Role']; ?></span>
              </li>
              <!--<li class="mb-75">-->
              <!--  <span class="fw-bolder me-25"> Email:</span>-->
              <!--  <span><?php //echo $row[0]['Email']; ?></span>-->
              <!--</li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Status') ?>:</span>
                <span class="badge bg-light-success"><?php echo lang('translation.Active') ?></span>
              </li>
              <!-- <li class="mb-75">
                <span class="fw-bolder me-25">Mentor Focus:</span>
                <span><?php echo $row[0]['Mentors_focus']; ?></span>
              </li> -->
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Industry Focus') ?>:</span>
                <span><?php echo $row[0]['Industry']; ?></span>
              </li>
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Short Bio') ?>:</span>
                <span><?php echo $row[0]['Mentors_history']; ?></span>
              </li>
              <!--<li class="mb-75">-->
              <!--  <span class="fw-bolder me-25">Phone:</span>-->
              <!--  <span><?php //echo $row[0]['Phone']; ?></span>-->
              <!--</li>-->
              <li class="mb-75">
                <span class="fw-bolder me-25"><?php echo lang('translation.Country') ?>:</span>
                <span><?php echo $row[0]['Nationality']; ?></span>
              </li>
              <li class="mb-75">
             <span class="fw-bolder me-25"><?php echo lang('translation.LinkedIn') ?>:</span>
                <span><?php echo $row[0]['LinkedIn']; ?></span>
            </li>
            </ul>
        <div class="demo-inline-spacing justify-content-center">
          
            <button type="button" class="btn btn-primary btn-sm" data-bs-target="#checkProfile" data-bs-toggle="modal" actionMsg="Schedule a call"><?php echo lang('translation.Schedule a call') ?></button>
            <a href="<?php echo base_url(); ?>calendar/index" class="btn btn-secondary btn-sm" actionMsg="Schedule meeting"><?php echo lang('translation.Schedule meeting') ?></a>
            <a href="<?php echo base_url(); ?>chat/index" class="btn btn-success btn-sm" actionMsg="Chat"><?php echo lang('translation.Chat') ?></a> 
            <a href="#" data-bs-target="#editUserX" data-bs-toggle="modal" class="btn btn-dark btn-sm connectBtn" >
              <?php echo lang("translation.Request to connect") ?> </a>
              <div class="alert alert-dark displayAlert" role="alert" style="display: none;">
              <div class="alert-body d-flex align-items-center">
                <i data-feather="check" class="me-50"></i>
                <span class="displayContent"> </span>
              </div>
            </div>
            <input type="hidden" class="connectEmail" value="<?php echo $row[0]['Email']; ?>" />
             <input type="hidden" class="connectType" value="startup-mentor" />
             <input type="hidden" class="connectMsg" value="Demande de connexion au mentor" />
            

            </div>
          </div>
        </div>
            
          </div>
        </div>
      </div>
      <!-- /User Card -->
     
    </div>
    <!--/ User Sidebar -->
    <script>
          $(function() {

            $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
  //$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/callconnection",
   error:function() {$(".displayAction").html('Error')},
   beforeSend:function() {$(".displayAction").html('Sending...'); $(".EventBtn").prop('disabled', true);},
   processData: false,
    contentType: false,
      success: function(data) {
        
   $(".displayAction").html(data);  
     //$(".saveBtn").html(data); 
     $(".EventBtn").prop('disabled', false);

      }
    });
    return false;

  });


              $(".connectBtn").click(function() {

                  var connectEmail = $('.connectEmail').val();
                  var connectType = $('.connectType').val();
                  var connectMsg = $('.connectMsg').val();
                  $.ajax({
                      data: {
                        connectEmail: connectEmail,
                        connectType: connectType,
                        connectMsg: connectMsg,  
                      },
                      type: "POST",
                      url: "<?php echo base_url(); ?>gfa/matchedConnection",
                      error: function() {
                          $(".connectBtn").html('Error Request');
                      },
                      beforeSend: function() {
                          $(".connectBtn").html('Requesting...');
                          //$('.connectBtn').prop("disabled", true);
                      },
                      success: function(data) {
                        $(".displayAlert").show();

                          $(".displayContent").html('Demande envoyée au mentor, vous serez informé de la  réponse.');
                          $('.connectBtn').html("Envoyé à ce mentor");
                          $('.connectBtn').prop("disabled", true);



                      }

                  });

              });

              

          });
        </script>
   
  </div>
</section>
          <!-- Edit User Modal -->
<div class="modal fade" id="checkProfile" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
         <span><i data-feather="users" class="font-large-2 me-sm-2 mb-2 mb-sm-0"></i></span><h1 class="mb-1"><?php echo lang("translation.Schedule a call") ?></h1>
          
         <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            <div class="col-md-12 mb-1">
                <select class="form-select"  name="subject_ext" >

                <option value=""><?php echo lang('translation.Subject') ?></option> 
                <option value="Yearly Revenue"><?php echo lang('translation.Yearly Revenue') ?></option>
                <option value="Request for a Partnership">Sollicitation pour un partenariat</option>
                <option value="Request for Experience Sharing">Sollicitation pour un partage d’expérience</option>
                <option value="Request for Coaching/Mentorship">Sollicitation pour un coaching/Mentorat</option>
                <option value="Pitch Presentation">Présentation de pitch</option>
              </select>
              </div>
              <div class="col-12">
                  <input type="hidden" name="id" class="form-control" value="<?php echo $id ?>" />
                <div class="mb-2">
                  <input type="text" name="subject" class="form-control" placeholder="<?php echo lang('translation.Other subject required') ?>" />
                </div>
              </div>
              
            <div class="col-md-12 mb-1">
          <!--<label class="form-label" for="fp-date-time"></label>-->
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="date_time"
            placeholder="<?php echo lang("translation.Date/Time [YYYY-MM-DD HH]") ?>"
          />
        </div> 

        <div class="col-md-12 mb-1">
                <select class="form-select"  name="time_zone" >

                <option value=""><?php echo lang('translation.Time Zone') ?></option> 
                <option value="WAT">WAT</option>
                <option value="EAT">EAT</option>
                <option value="EAT">EAT</option>
                <option value="AST">AST</option>
                <option value="EST">EST</option> 
                <option value="WET">WET</option>
                <option value="ADT">ADT</option>
              </select>
              </div>

        <div class="col-12">
                  
                <div class="mb-2">
                  <input type="text" name="meeting_link" class="form-control" placeholder="<?php echo lang("translation.Meeting link if available (e.g., Zoom, Teams, Meet, etc.)")?>"/>
                </div>
              </div>
              <input type="hidden" name="conn_email" value="<?php echo $row[0]['Email']; ?>" />
             <input type="hidden" name="conn_name" value="<?php echo $row[0]['Mentor_name']; ?>" />
             <input type="hidden" name="conn_type" value="startup-mentor" />
        
              <div class="col-12">
                <textarea class="form-control mb-2" name="more_info" required rows="4" placeholder="<?php echo lang('translation.More information') ?>"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn"><?php echo lang('translation.Submit') ?></button><br><span class="displayAction"></span>
              </div>
            </div>
          </form>
          
     
      </div>
      
    </div>
  </div>
</div>
<!--/ Edit User Modal -->
          <!-- upgrade your plan Modal -->
<div class="modal fade" id="upgradePlanModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-upgrade-plan">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body px-5 pb-2">
        <div class="text-center mb-2">
          <h1 class="mb-1">Upgrade Plan</h1>
          <p>Choose the best plan for user.</p>
        </div>
        <form id="upgradePlanForm" class="row pt-50" onsubmit="return false">
          <div class="col-sm-8">
            <label class="form-label" for="choosePlan">Choose Plan</label>
            <select id="choosePlan" name="choosePlan" class="form-select" aria-label="Choose Plan">
              <option selected>Choose Plan</option>
              <option value="standard">Standard - $99/month</option>
              <option value="exclusive">Exclusive - $249/month</option>
              <option value="Enterprise">Enterprise - $499/month</option>
            </select>
          </div>
          <div class="col-sm-4 text-sm-end">
            <button type="submit" class="btn btn-primary mt-2">Upgrade</button>
          </div>
        </form>
      </div>
      <hr />
      <div class="modal-body px-5 pb-3">
        <h6>User current plan is standard plan</h6>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
          <div class="d-flex justify-content-center me-1 mb-1">
            <sup class="h5 pricing-currency pt-1 text-primary">$</sup>
            <h1 class="fw-bolder display-4 mb-0 text-primary me-25">99</h1>
            <sub class="pricing-duration font-small-4 mt-auto mb-2">/month</sub>
          </div>
          <button class="btn btn-outline-danger cancel-subscription mb-1">Cancel Subscription</button>
        </div>
      </div>
    </div>
  </div>
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

   