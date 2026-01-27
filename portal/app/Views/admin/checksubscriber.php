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
					$getSub = $admin_model->getSub($id);
					$ref_request = $admin_model->getStartUp($getSub[0]['email']); 
					$profile_request = $admin_model->getProfile($getSub[0]['email']);  
					$getFile = $admin_model->getFile($getSub[0]['email']);
					$getFund = $admin_model->getFund($getSub[0]['email']);
					$getBusiness = $admin_model->getBusiness($getSub[0]['email']);
		
		?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $profile_request[0]['last_name'].' '.$profile_request[0]['first_name']  ?> </h3>

              <p class="text-muted text-center"><?php echo $ref_request[0]['industry'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
				<?php  if($getSub[0]['status']=='pending'){   ?>
                  <b>Status</b> <a class="pull-right bg-light-warning" style="color:#FF3300">Unverified</a>
				  <?php }   ?>
				  <?php  if($getSub[0]['status']=='approved'){   ?>
                  <b>Status</b> <a class="pull-right bg-light-success" style="color:#009900">Verified</a>
				  <?php }   ?>
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"><?php  echo  $profile_request[0]['gender'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone No</b> <a class="pull-right"><?php  echo  $profile_request[0]['phone_no'] ?></a>
                </li>
              </ul>
				<?php  if($getSub[0]['status']=='pending'){   ?>
              <a href="<?php echo base_url(); ?>admin/verify/<?php echo $id  ?>" class="btn btn-danger btn-block"><b>Approve Form</b></a>
			    <?php }   ?>
				<?php  if($getSub[0]['status']=='approved'){   ?>
                 <a href="#" class="btn btn-success btn-block"><b>Approved</b></a>
				  <?php }   ?>
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
              <strong><i class="fa fa-book margin-r-5"></i> Subscription Type</strong>

              <p class="text-muted">
               <?php  echo  $profile_request[0]['package'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted"><?php  echo  $profile_request[0]['country'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Email</strong>

              <p>
                <span class="label label-danger"><?php  echo  $profile_request[0]['email'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Document Info</a></li>
              <li><a href="#timeline" data-toggle="tab">FundRaising Info</a></li>
              <li><a href="#settings" data-toggle="tab">Business Info</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
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
                    
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $getFile[0]['file'] ?>" alt="Document 1">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $getFile[0]['file2'] ?>" alt="Document 2">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $getFile[0]['file3'] ?>" alt="Document 3">
                          <br>
                          <img class="img-responsive" src="<?php echo base_url(); ?>uploads/<?php echo $getFile[0]['file4'] ?>" alt="Document 4">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  

                 
                </div>
                <!-- /.post -->
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Is your business incorporated?</label>
					
                    <div class="col-sm-10">
                      <?php  echo ($getFund[0]['business_que1'])? "Yes":"No";  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Have you taken any Fundrasing courses in the past.</label>

                    <div class="col-sm-10">
                      <?php  echo ($getFund[0]['business_que2'])? "Yes":"No";   ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">How did you hear about us</label>

                    <div class="col-sm-10">
                     <?php  echo ($getFund[0]['business_que3'])? "Yes":"No";  ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Equity</label>

                    <div class="col-sm-10">
                      <?php  echo $getFund[0]['equity']  ?>
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
              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Describe  your Startup Idea</label>
					
                    <div class="col-sm-10">
                     <?php echo  $getBusiness[0]['startup_idea'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">What problem are you trying to solve</label>

                    <div class="col-sm-10">
                       <?php echo  $getBusiness[0]['startup_problem'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Your Industry</label>

                    <div class="col-sm-10">
                      <?php echo  $getBusiness[0]['business_type'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Your Website</label>

                    <div class="col-sm-10">
                       <?php echo  $getBusiness[0]['website'] ?> 
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Market Need</label>

                    <div class="col-sm-10">
                       <?php echo  $getBusiness[0]['market_need'] ?> 
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













