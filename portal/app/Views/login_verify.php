<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
      <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
          <!-- Coming soon page-->
          <div class="misc-wrapper">
             
            <div class="misc-inner p-2 p-sm-3">
              <!--<div class="w-100 text-center">-->
                <section id="basic-horizontal-layouts">
                    
                    <?php 
                    // Get learner's details 
                    $learnerDetails = $this->admin_model->getAllStartUpNByEmail($email);
                    $learnerExtInfo = $this->gfa_model->getUserAccountExt($email); 
                    ?>
  <div class="row">
    <div class="col-md-10 col-12">
        <center>
         <img src="<?php echo base_url('public/assets/images/logo/FGN-ALAT-Logo.png'); ?>">
         </center>
        <!-- Welcome Form   -->
      <div class="card display_1">
         
        <div class="card-header">
          <p></p><h2 class="mb-1 text-center">Welcome <?= ucwords($learnerDetails[0]['Primary_Contact_Name']) ?>!</h2></p>
        <p class="mb-2 text-center">Congratulations for being shortlisted for the POLARIS BANK Digital Skillnovation Program for MSMEs.</p>
        </div>
        <div class="card-body">
          <form class="form form-horizontal submitForm" action="#" enctype="multipart/form-data">
            <div class="row">
              <div class="col-12">
            <div class="row custom-options-checkable mb-1">
              <div class="col-md-12 mb-md-0 mb-2">
                <input
                  class="custom-option-item-check"
                  id="homeAddressRadio"
                  type="radio"
                  name="newAddress"
                  value="HomeAddress"
                  checked
                  disabled
                />
                <label for="homeAddressRadio" class="custom-option-item px-2 py-1">
                  <span class="d-flex align-items-center mb-50">
                    <i data-feather="home" class="font-medium-4 me-50"></i>
                    <span class="custom-option-item-title h4 fw-bolder mb-0">Course Information</span>
                  </span>
                  <span class="d-block">You have signed up for
                  <b><?php  echo ucwords($learnerDetails[0]['Interest_Fund_Raise']); ?></b> |
                  <b><?php  echo ucwords($learnerDetails[0]['Startup_Implementation_Stage']); ?> learning path</b> |
                  <!--<b><?php  echo ucwords($learnerExtInfo[0]['profile_extra']); ?></b>-->
                  </span>
                </label>
              </div>
              
            </div>
          </div>
          <div class="col-sm-9">
                <div class="mb-1">
                  <div class="form-check">
                   <h5>Soft Skills for 30 days compulsory for all participants</h5>
                    <h6>(Find below your recommended courses)</h6>
                  </div>
                </div>
              </div>
          <div class="col-12">
                <div class="mb-1">
                  
                  <div class="col-sm-9">
                      <?php 
              $getSubCatViaCourse = $this->gfa_model->getSubCatViaCourse($learnerExtInfo[0]['profile_extra']);
              $skillSubCatArray = $this->gfa_model->skillsBySubCat($getSubCatViaCourse[0]['category']); ?>
                    <select class="selectSkill" name="course" id="selectLarge" style="display:none">
                        <option value="<?= $learnerExtInfo[0]['profile_extra']  ?>"><?= ucwords($learnerExtInfo[0]['profile_extra'])  ?></option>
                        </select>
              <ul>
              
              
              <?php foreach($skillSubCatArray as $skillSubCat){  ?>
              <!--<option value="<?= $skillSubCat['skill_name']  ?>"><?= ucwords($skillSubCat['skill_name'])  ?></option>-->
              <li><?= ucwords($skillSubCat['skill_name'])  ?></li>
              <?php }  ?>
              </ul>
            <!--</select>-->
                  </div>
                </div>
              </div>
              <input type="hidden" value="<?php echo $learnerDetails[0]['Interest_Fund_Raise']; ?>" name="course_cat" />
               <input type="hidden" value="<?php echo $getSubCatViaCourse[0]['category']; ?>" name="course_sub_cat"  />
              <div class="col-sm-9">
                <div class="mb-1">
                  <div class="form-check">
                   <h5>Note: Soft Skills is compulsory for all participants for 1 month from the Program Launch date.</h5>

                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="button" class="btn btn-primary me-1 next_1">Next</button>
                <!--<button type="button" class="btn btn-outline-secondary">Reset</button>--> 
              </div>
            </div>
         
        </div>
      </div>
      <!-- End Welcome Form --->
      
      <!-- Verification of BVN/NIN  -->
      <div class="card display_2" style="display:none">
        <div class="card-header text-center">
          <p></p><h2 class="mb-1">Verify and Update your Information</h2></p>
        <!--<p class="mb-2">Kindly verify your BVN/NIN</p>-->
        </div>
        <div class="card-body">
          
            <div class="row">
             
                 <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><h4>Full
                                Name<span style="color:red">*</span></h4> </label> 
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control form-control-lg" name="fname"
                                    placeholder="First Name" minlength="3" value="<?= explode(" ",$learnerDetails[0]['Primary_Contact_Name'])[0] ?>"  />
                                    
                                    <input type="text" id="first-name-icon" class="form-control form-control-lg" name="mname"
                                    placeholder="Middle Name" value="<?= $learnerExtInfo[0]['middlename'] ?>" />

                                <input type="text" id="last-name-icon" class="form-control form-control-lg" name="lname"
                                    placeholder="Last Name" minlength="3"  value="<?= explode(" ",$learnerDetails[0]['Primary_Contact_Name'])[1] ?>" />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                <div class="mb-1">
                 
                    <label class="form-label" for="email-id"><h4>Phone No</h4> </label>
                  
                  <div class="">
                    <input type="text" id="email-id" class="form-control form-control-lg"  name="phone" placeholder="Phone No" value="<?= $learnerDetails[0]['Phones'] ?>" />
                  </div>
                </div>
              </div>
                    
              <div class="col-12">
                <div class="mb-1">
                 
                    <label class="form-label" for="email-id"><h4>BVN</h4> </label>
                  
                  <div class="">
                    <input type="number" id="email-id" class="form-control form-control-lg" name="bvn" placeholder="BVN" value="<?= $learnerExtInfo[0]['bvn'] ?>" />
                  </div>
                </div>
              </div>
              
              <div class="col-12 mb-1">
                <div class="">
                 
                    <label class="col-form-label" for="password"><h4>NIN</h4></label>
                  </div>
                  <div class="">
                    <input type="number" id="password" class="form-control form-control-lg" name="nin" placeholder="NIN" value="<?= $learnerExtInfo[0]['nin'] ?>" />
                  </div>
                </div>
              </div>
              <!--<div class="col-sm-9 offset-sm-3">-->
              <!--  <div class="mb-1">-->
              <!--    <div class="form-check">-->
              <!--      <input type="checkbox" class="form-check-input" id="customCheck1" />-->
              <!--      <label class="form-check-label" for="customCheck1">Remember me</label>-->
              <!--    </div>-->
              <!--  </div>-->
              <!--</div>-->
              <div class="col-sm-9 offset-sm-3 mb-1">
                <button type="button" class="btn btn-primary me-1 prev_1">Previous</button>
                <button type="button" class="btn btn-secondary next_2">Next</button>
              </div>
            </div>
          
        </div>
      </div>
      <!-- End Verification of BVN/NIN  -->
      
      <!-- Final Form  -->
      <div class="card display_3" style="display:none">
        <div class="card-header text-center">
           <p></p><h2 class="mb-1">Group Information</h2></p>
        <!--<p class="mb-2">Take your course </p>-->
        </div>
        <div class="card-body">
          
            <div class="row">
             
          
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-12">
                      
                    <label class="form-label" for="email-id"><h4>You have been grouped to the <?php echo $learnerDetails[0]['State']; ?>/<?php  echo ucwords($learnerDetails[0]['Interest_Fund_Raise']); ?>
                    /<?php  echo ucwords($learnerDetails[0]['Startup_Implementation_Stage']); ?>/<span class="displaySkill"></span></h4></label>
                  </div>
                  <div class="col-sm-3">
                    <!--<input type="text" id="email-id" class="form-control form-control-lg" name="bvn" placeholder="BVN" />-->
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="mb-1 row">
                  <div class="col-sm-4">
                    <label class="col-form-label" for="password"><h4>Total Members: <span class="displayCourseMember"></span></h4></label>
                  </div>
                  <?php $verifyGroupHead = $this->gfa_model->verifyGroupHead("Yes",$learnerDetails[0]['State'],$learnerExtInfo[0]['profile_extra']);  ?>
                  <div class="col-sm-6">
                    <!--<input type="text" id="password" class="form-control form-control-lg" name="nin" placeholder="NIN" />--><h4>Group Leader: 
                    <span class="displayLeader">
                        <?php if(empty($verifyGroupHead)){ ?>
                        Not Assigned
                        <?php }else{  ?>
                          Assigned
                          
                          <?php  } ?>
                        </span>
</h4>
                  </div>
                </div>
              </div>
              
              <div class="col-12">
                <div class="mb-1 row">
                    <?php if(empty($verifyGroupHead)){ ?>
                  <div class="col-sm-3">
                    <label class="form-label" for="contact-info">Would you like to become the group leader?</label>
                  </div>
                  <div class="col-sm-6">
                    <select class="form-select form-select-lg groupLeader" name="groupLeader" id="selectLarge"> 
              <option value="">Select Answer</option>
              <option value="Yes">Yes</option>
              <option value="No">No</option>
             
            </select>
                  </div>
                  <?php }else{  ?>
                  
                  <ul>
                     <li><h6>Name :  <?php echo  $this->admin_model->getAllStartUpNByEmail($verifyGroupHead[0]['email'])[0]['Primary_Contact_Name']; ?></h6> </li> 
                        <li><h6>Email : <?= $verifyGroupHead[0]['email'] ?></h6></li> 
                  </ul>
                  <?php }  ?>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3 leaderAgreement" style="display:none">
                <div class="mb-1">
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="customCheck1" />
                    <label class="form-check-label" for="customCheck1">Accept the terms of engagement <a href="#" data-bs-toggle="modal" data-bs-target="#agreeGrp">Click here</a></label>
                  </div>
                </div>
              </div>
              <div class="col-sm-9 offset-sm-3">
                <button type="button" class="btn btn-primary me-1 prev_2">Previous</button>
                <button type="button" class="btn btn-warning next_3">Next</button>
              </div>
            </div>
             <input type="hidden" value="<?php echo $learnerDetails[0]['State']; ?>" name="state" class="stateRd" />
         
        </div>
      </div>
      
      <div class="card display_4" style="display:none">
         
        <div class="card-header">
          <p></p><h2 class="mb-1 text-center">Completion is Key</h2></p>
        <p>You have been assigned a total of 22 compulsory soft skill courses for the next one month. These courses will be accessible to you every weekday until Wednesday, December 27th, 2023. After this date, you will have the flexibility to study the remaining assigned courses within the next three months.</p>

  <p>To progress through these courses, make sure to access each lesson daily on weekdays. Each lesson will be available until the specified deadline. It's important to click the "Complete" button at the bottom of every lesson to indicate that you have studied the material and to proceed to the next lesson. Upon completing all course lessons, locate and click the "Finish Course" button positioned in red at the top right corner of the page. This action is essential to officially mark the course as completed and ensure it is added to your profile, confirming your achievement.</p>

  <p>Take advantage of the opportunity to enhance your soft skills, and ensure that you manage your time effectively to complete all the assigned courses within the given timeframe. If you have any questions or concerns, feel free to reach out to <a href="mailto:fgnalat@wemabank.com">fgnalat@wemabank.com</a>. Good luck with your studies!</p>

        </div>
        <div class="col-sm-9 offset-sm-3">
                <button type="button" class="btn btn-primary me-1 prev_3">Previous</button>
                <button type="submit" class="btn btn-warning submitInfo">Continue to get started</button>
              </div>
      </div>
      <!-- End Final Form  -->
       </form>
    </div>
    
  </div>
</section>
              <!--</div>-->
            </div>
          </div>
          <!-- / Coming soon page-->
          <div class="modal fade" id="agreeGrp" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered modal-edit-user">
    <div class="modal-content">
      <div class="modal-header bg-transparent">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button><span class="displayError"></span>
      </div>
      <div class="modal-body pb-5 px-sm-5 pt-50">
        <div class="text-center mb-2">
          <h1 class="mb-1">Group Terms of Engangement </h1>
          <p>Read carefully</p>
        </div>
       <h2>As the Group Leader, your core responsibilities include:</h2>

    <ul>
        <li>Facilitating the successful completion of all courses for every member in your group.</li>
        <li>Proactively addressing and reporting any issues related to the program on behalf of your group.</li>
        <li>Ensuring clear understanding of all communicated information among group participants.</li>
        <li>Acting as the spokesperson for the group and directing any inquiries to <a
                href="mailto:fgnalat@wemabankplc.com">fgnalat@wemabankplc.com</a>.</li>
    </ul>

   
      </div>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
    <!-- END: Content-->
   
    

<script> 
    $(function(){
        
        $(".submitForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
    //     
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/submitLoginVerify"); ?>",
     error:function() {$(".displayError").html('Error')},
	 beforeSend:function() {$(".submitInfo").html('Loading...'); $(".submitInfo").prop('disabled', true);},
	  processData: false,
        contentType: false,
     success: function(data) {
     
      $(".submitInfo").html('Continue to get started');
		 $(".displayError").html('');
		 $(".submitInfo").prop('disabled', false);
		window.open("<?php echo base_url("gfa/soft_skills"); ?>", "_self");
      }
    });
    return false;

  });
        
        $(".selectSkill").change(function(){
        
        var thisSkill = $(this).val();
        var stateRd = $(".stateRd").val();
        $(".displaySkill").html(thisSkill);
        
        $.ajax({
     data:{thisSkill:thisSkill,stateRd:stateRd},
     type: "POST",
     url: "<?php echo base_url("gfa/displayTotalCourseMember"); ?>",
     error:function() {$(".displayCourseMember").html('Error')},
	 beforeSend:function() {$(".displayCourseMember").html('loading...'); },
     success: function(data) {
	 $(".displayCourseMember").html(data);	
     }
    });
        
    }).change();
        
    $(".groupLeader").change(function(){
        
        var thisVal = $(this).val();
        if(thisVal == "Yes"){
            
        $(".leaderAgreement").show();    
            
        }else{
           $(".leaderAgreement").hide();    
            
        }
        
    });
        
        $(".next_1").click(function(){
            $(".display_1").hide();
            $(".display_2").show();
            $(".display_3").hide();
            $(".display_4").hide();
        });
        $(".next_2").click(function(){
             $(".display_1").hide();
            $(".display_2").hide();
            $(".display_3").show();
            $(".display_4").hide();
        });
        $(".next_3").click(function(){
             $(".display_1").hide();
            $(".display_2").hide();
            $(".display_3").hide();
            $(".display_4").show();
        });
        
        $(".prev_1").click(function(){
             $(".display_1").show();
            $(".display_2").hide();
            $(".display_3").hide();
             $(".display_4").hide();
        });
        $(".prev_2").click(function(){
             $(".display_1").hide();
            $(".display_2").show();
            $(".display_3").hide();
             $(".display_4").hide();
        });
        
        $(".prev_3").click(function(){
             $(".display_1").hide();
            $(".display_2").hide();
            $(".display_3").show();
             $(".display_4").hide();
        });
    });
</script>

   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   