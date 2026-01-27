<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>
<?php 
      $profile_request = $admin_model->getOnboardIndividualById($extra_id);
      $getUser = $admin_model->getUser($profile_request[0]['email']);

?>

<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        PME Profile
      </h1>
       
      <div class="btn-group pull-right margin-bottom">
         <button class="btn btn-primary" href="#"  onclick="history.back()" style="margin-right: 10px;">Back</button>
         <?php if($getUser[0]['status'] == 'active'){ ?>
          <button class="btn btn-primary btnApproved" disabled href="#" style="margin-right: 10px;">✔Approved</button>
        <?php }else{  ?>
    <button class="btn btn-success btnStatus" href="#" style="margin-right: 10px;" lid="<?php echo $getUser[0]['id'] ?>" ls="active"><span class="showStatus">Approve</span></button>
  <?php } ?>
  <?php if($getUser[0]['status'] == 'de-active'){ ?>
    <button class="btn btn-primary btnDeclined" disabled href="#">x Declined</button>
  <?php }else{ ?>
  <button class="btn btn-warning btnStatus" lid="<?php echo $getUser[0]['id'] ?>" ls="de-active"><span class="showStatus">Decline </button>
<?php }  ?>
</div>
<script>
              
              $(function(){
                
                $('.btnStatus').click(function(){
                
            var file_status = $(this).attr('ls');
            var id = $(this).attr('lid');
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/userauthext",
   error:function() {$(".showStatus").html('Error')},
   beforeSend:function() {$(".showStatus").html('checking...')},
      success: function(data) {
        $('.showStatus').html(data);
        $(this).attr('disabled');
    if(data == "x Declined"){
   $(".btnApproved").hide();
         
      }else{

    $(".btnDeclined").hide();

  }

   }
    });   
            
            
                });
                  
              });
          </script>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
		<?php 

				// 	$ref_request = $admin_model->getStartUp($getSub[0]['email']); 
				// 	$getSub = $admin_model->getProfile($getSub[0]['email']);  
					$getFile = $admin_model->getFile($profile_request[0]['email']);
				// 	$getFund = $admin_model->getFund($getSub[0]['email']);
				
		?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
                <?php  
      
      $getPhoto =  $gfa_model->getPhotoUploaded($profile_request[0]['email']);  
      if(empty($getPhoto)){
          $showPhoto = "public/assets/images/uploads/default-avatar.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      } ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url().$showPhoto; ?>" alt="Startup's logo">

              <h3 class="profile-username text-center"><?php echo $profile_request[0]['lname']." ".$profile_request[0]['lname']  ?> </h3>

              <p class="text-muted text-center"><?php echo $profile_request[0]['organisation_type'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
				<?php  //if($getSub[0]['status']=='pending'){   ?>
                  <!--<b>Status</b> <a class="pull-right bg-light-warning" style="color:#FF3300">Unverified</a>-->
				  <?php //}   ?>
				  <?php  //if($getSub[0]['status']=='approved'){   ?>
                  <b>Status</b> <a class="pull-right bg-light-success" style="color:#009900"><?php echo ucwords($getUser[0]['status']) ?></a>
				  <?php //}   ?>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"><?php  //echo  $profile_request[0]['gender'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone No</b> <a class="pull-right"><?php  echo  $profile_request[0]['mobile'] ?></a>
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
               <?php  echo  $profile_request[0]['email'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Phone Number</strong>

              <p class="text-muted"><?php  echo  $profile_request[0]['mobile'] ?></p>

              <hr>
             
              

              <strong><i class="fa fa-pencil margin-r-5"></i>Country</strong>

              <p>
                <span class="label label-danger"><?php  echo  $profile_request[0]['country'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>State</strong>

              <p><?php  echo  $profile_request[0]['city'] ?></p>

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
                <li class="active"><a href="#timeline" data-toggle="tab">Other Info</a></li>
                 <!-- <li><a href="#settings" data-toggle="tab">Other Info</a></li> -->
              <!-- <li><a href="#activity" data-toggle="tab">Deal Room</a></li> -->
              
             
            </ul>
            <div class="tab-content">
             
              <!-- /.tab-pane -->
              <div class="active tab-pane" id="timeline">
                <!-- The timeline -->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Interested In Information</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['interest_update'];  ?>
                    </div>
                  </div>

                 

                  
                  
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Interested Fund Raise</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['interest_fund_raise'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Interested Business Growth</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['interest_business_growth'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Interest Insight Report</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['interest_insight_report'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Interest Learning</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['interest_learning'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Current Stage</label>
					
                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['current_stage'];  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Date</label>

                    <div class="col-sm-10">
                      <?php  echo $profile_request[0]['date'];   ?>
                    </div>
                  </div>
                  
                  
                  
                </form>
              </div>
              <!-- /.tab-pane -->

              
               
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













