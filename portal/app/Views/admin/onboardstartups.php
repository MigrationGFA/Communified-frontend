<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Form
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
		<?php 
					$profile_request = $admin_model->getAllStartUpNById($id);
				// 	$ref_request = $admin_model->getStartUp($getSub[0]['email']); 
				// 	$getSub = $admin_model->getProfile($getSub[0]['email']);  
					$getFile = $admin_model->getFile($profile_request[0]['Contact_Email']);
				// 	$getFund = $admin_model->getFund($getSub[0]['email']);
					$rowArrayExt = $admin_model->getAllStartUpNByEmailExtX($profile_request[0]['Contact_Email']);
		
		?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <?php  
      
      $getPhoto =  $gfa_model->getPhotoUploaded($profile_request[0]['Contact_Email']);  
      if(empty($getPhoto)){
          $showPhoto = "assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      } ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().$showPhoto; ?>" alt="Startup's logo">

              <h3 class="profile-username text-center"><?php echo $profile_request[0]['Primary_Contact_Name']  ?> </h3>

              <p class="text-muted text-center"><?php echo $profile_request[0]['PrimaryBusinessIndustry'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
				<?php  //if($getSub[0]['status']=='pending'){   ?>
                  <!--<b>Status</b> <a class="pull-right bg-light-warning" style="color:#FF3300">Unverified</a>-->
				  <?php //}   ?>
				  <?php  //if($getSub[0]['status']=='approved'){   ?>
                  <b>Status</b> <a class="pull-right bg-light-success" style="color:#009900">Active</a>
				  <?php //}   ?>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"><?php  //echo  $profile_request[0]['gender'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone No</b> <a class="pull-right"><?php  echo  $profile_request[0]['Phones'] ?></a>
                </li>
              </ul>
				<?php  //if($getSub[0]['status']=='pending'){   ?>
              <!--<a href="<?php //echo base_url(); ?>admin/verify/<?php //echo $id  ?>" class="btn btn-danger btn-block"><b>Approve Form</b></a>-->
			    <?php //}   ?>
				<?php // if($getSub[0]['status']=='approved'){   ?>
                 <!--<a href="#" class="btn btn-success btn-block"><b>Approved</b></a>-->
				  <?php //}   ?>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">More Info</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Email</strong>

              <p class="text-muted">
               <?php  echo  $profile_request[0]['Contact_Email'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Phone Number</strong>

              <p class="text-muted"><?php  echo  $profile_request[0]['Phones'] ?></p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i>Zip Code</strong>

              <p class="text-muted"><?php  echo  $profile_request[0]['ZipCode'] ?></p>

              <hr>
              <strong><i class="fa fa-map-marker margin-r-5"></i>Address</strong>

              <p class="text-muted"><?php  echo  $profile_request[0]['Address'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>Country</strong>

              <p>
                <span class="label label-danger"><?php  echo  $profile_request[0]['Country'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>State</strong>

              <p><?php  echo  $profile_request[0]['State'] ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>State</strong>

              <p><?php  echo  $profile_request[0]['State'] ?></p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Print Data</strong>

              <p>
                <button type="submit" name="print" id="print" class="btn btn-primary" class="btn btn-info ">Print Info</button>
                  <br><br>
              </p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#timeline" data-toggle="tab">Startup/Company Info</a></li>
                 <li><a href="#settings" data-toggle="tab">Other Info</a></li>
              <li><a href="#activity" data-toggle="tab">Deal Room</a></li>
              
             
            </ul>
            <div class="tab-content">
             
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Startup/Company Name</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Startup_Company_Name'];  ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Solution_Corperate</label>
					
                    <div class="col-sm-10">
                      <?php  echo $rowArrayExt[0]['Solution_Corperate'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Core_Interest_Corporate</label>
					
                    <div class="col-sm-10">
                      <?php  echo $rowArrayExt[0]['Core_Interest_Corporate'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Solution_Ownership</label>
					
                    <div class="col-sm-10">
                      <?php  echo $rowArrayExt[0]['Solution_Ownership'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Startup_Model</label>
					
                    <div class="col-sm-10">
                      <?php  echo $rowArrayExt[0]['Startup_Model'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">	Event</label>
					
                    <div class="col-sm-10">
                      <?php  echo $rowArrayExt[0]['Event'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Date Founded</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Date_Founded'];   ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Current Stage</label>

                    <div class="col-sm-10">
                     <?php  echo $profile_request[0]['CurrentInvestmentStage'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Implementation Stage</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Startup_Implementation_Stage']  ?>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Operation Region</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['OperatingRegions']  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Country startup location</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['CountryHQ']  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Funding to raise ($)</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Next_Funding_Round_Target_Sought']  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Annual Revenue</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Revenue']  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">No of Employees</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['NoOfEmployees']  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Website Url</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['Website']  ?>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">LinkedIn Profile</label>
					
                    <div class="col-sm-10">
                     <?php echo  $profile_request[0]['LinkedIn'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Facebook Profile</label>

                    <div class="col-sm-10">
                       <?php echo  $profile_request[0]['Facebook'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">How did you hear about us?</label>

                    <div class="col-sm-10">
                      <?php echo  $profile_request[0]['Hear_Us'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Mentorship</label>

                    <div class="col-sm-10">
                       <?php echo  $profile_request[0]['Mentorship'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Tell us a little about your product, services or idea?</label>

                    <div class="col-sm-10">
                       <?php echo  $profile_request[0]['Investment_History'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                         
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                    
                    </div>
                  </div>
                </form>
              </div>
               <div class="tab-pane" id="activity">
                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    
                        
                    <span class="description"></span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                   
      
     
          <div class="dropdown float-end">
            <i data-feather="more-vertical" class="toggle-dropdown mt-n25"></i>
          </div>
          
           <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Folder</th>
                  <th>Title</th>
                  <th>Description</th>
				  <th>View</th>
				  <th>Status</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
			     $row = $admin_model->getRecentFileUploaded($profile_request[0]['Contact_Email']);
				foreach($row as $rowArray){ 
					if($rowArray['Title'] !=''){
				
				?>
                  <tr>
				  
                   
                    <td><strong><?php echo $rowArray['File_Type'] ; ?></strong>
                    
                    </td>
                     
                    <td>
                    <?php echo $rowArray['Title']; ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['File_Desc']; ?><br>
                    <?php echo date('d M Y',strtotime($rowArray['Time_Submit'])) ?>
                    </td>
                    <td>
                    
            <?php  $file = explode('.', $rowArray['File']); 
            $fileExt = $file[1];
            ?>
            <?php        
            if($fileExt=='ppt' || $fileExt=='pptx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/powerpoint-icon.png" alt="file-icon" height="35" />   
            
        <?php }  ?>
        
         <?php         
            if($fileExt=='pdf'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/pdf.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        <?php         
            if($fileExt=='txt'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/txt.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='csv' || $fileExt=='xls' ||  $fileExt=='xlsx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/xls.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='png' || $fileExt=='jpeg' ||  $fileExt=='jpg' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/jpg.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
         <?php
       
            if($fileExt=='doc' ||  $fileExt=='docx' || $fileExt=='DOC' ||  $fileExt=='DOCX' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/word-icon.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        <?php
            
            if($fileExt=='mp4' || $fileExt=='mpg' ||  $fileExt=='mov' || $fileExt=='mpe' || $fileExt=='avi' ||  $fileExt=='movie'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/video-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        <?php
       
            if($fileExt=='mp2' ||  $fileExt=='mp3' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/sound-icon.png" alt="file-icon" height="35" /> 
            
        <?php }  ?>
        
          
                    <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['File']; ?>" target="_blank">View File</a>
                    </td>
                    <td>
                    <span class="showStatus<?php echo $rowArray['File_Id']; ?>"><?php  if($rowArray['Status']==NULL || $rowArray['Status']=='pending'){ echo 'pending '; }else{ echo $rowArray['Status'] ; } ?> </span>
                    </td>
                    <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['File_Id']; ?>" value="<?php echo $rowArray['File_Id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['File_Id']; ?>">
                      
                      <option value="pending">Pending</option> 
                      <option value="declined">Declined</option>
                      <option value="approved">Approved</option>
                      
                        
                    </select>
                    
                    </td>
                    
                    
                    
                  </tr>
                  
                  <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['File_Id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['File_Id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['File_Id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/filestatuspro",
	 error:function() {$(".showStatus<?php echo $rowArray['File_Id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['File_Id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['File_Id']; ?>').text(file_status);
		//if(data==1){
// 		$(".saveCohortForm").html('Event Info Sent');
//          $('.creditBtn').prop("disabled", true );
      }
    });   
            
            
                });
                  
              });
          </script>
				
                  <?php } } ?>


                  

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
            </div>
          
        
      
     
                  </div>
                  <!-- /.row -->

                  

                 
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->













