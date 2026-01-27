<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cohort 
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       
        <li class="active">Investor Details</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">
		<?php 
				    $rowArray = $this->admin_model->getAllCorperateById($id);  
				// 	$subType = $this->admin_model->getSubPayX($rowArray[0]['email'],'Investor Readiness Cohort'); 
					$profile_request = $this->admin_model->getUser($rowArray[0]['Email']); 
		
		?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/uploads/default-avatar.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $rowArray[0]['Key_contact_name']  ?> </h3>

              <p class="text-muted text-center"><?php echo $rowArray[0]['Corporate_Name'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
				
				  
                  <b>Status</b> <a class="pull-right bg-light-success" style="color:#009900">Active</a>
				  
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"><?php  echo  $rowArray[0]['Email'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Phone No</b> <a class="pull-right"><?php  echo  $rowArray[0]['Phone'] ?></a>
                </li>
              </ul>
				
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
                <strong><i class="fa fa-book margin-r-5"></i>Gender</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Gender'] ?>
              </p>

              <hr>
                <strong><i class="fa fa-book margin-r-5"></i>Nationality</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Hq_country'] ?>
              </p>

              <hr>
                
              <strong><i class="fa fa-book margin-r-5"></i> Solution_Corperate</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Solution_Corperate'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Engage_Startup</strong>

              <p class="text-muted"><?php  echo  $rowArray[0]['Engage_Startup'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Startup_Model</strong>

              <p>
                <span class="label label-danger"><?php  echo  $profile_request[0]['Startup_Model'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>LinkedIn </strong>

              <p><span class="label label-danger"><?php  echo  $rowArray[0]['LinkedIn'] ?></span></p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">More Corperate Details</a></li>
              <!--<li><a href="#timeline" data-toggle="tab">FundRaising Info</a></li>-->
              <!--<li><a href="#settings" data-toggle="tab">Business Info</a></li>-->
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
                    <div class="col-sm-10">
                      <div class="row">
                        <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Core_Interest_Corporate</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Core_Interest_Corporate'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i>Solution_Ownership </strong>

              <p class="text-muted"><?php  echo  $rowArray[0]['Solution_Ownership'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>Corporate_industry</strong>

              <p>
                <?php  echo  $rowArray[0]['Corporate_industry'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Event</strong>

              <p> <?php  echo  $rowArray[0]['Event'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Business_address</strong>

              <p> <?php  echo  $rowArray[0]['Business_address'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Website</strong>

              <p> <?php  echo  $rowArray[0]['Website'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Facebook</strong>

              <p> <?php  echo  $rowArray[0]['Facebook'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>LinkedIn</strong>

              <p> <?php  echo  $rowArray[0]['LinkedIn'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>City</strong>

              <p> <?php  echo  $rowArray[0]['City'] ?></span></p>
              <hr>
              
               <strong><i class="fa fa-file-text-o margin-r-5"></i>Attendance</strong>

              <p> <?php  echo  $rowArray[0]['Attendance'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Date</strong>

              <p> <?php  echo  $rowArray[0]['Date'] ?></span></p>
              
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
              <!--<div class="tab-pane" id="timeline">-->
                <!-- The timeline -->
              <!--  <ul class="timeline timeline-inverse">-->
                  <!-- timeline time label -->
              <!--    <li class="time-label">-->
              <!--          <span class="bg-red">-->
              <!--            10 Feb. 2014-->
              <!--          </span>-->
              <!--    </li>-->
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
              <!--    <li>-->
              <!--      <i class="fa fa-envelope bg-blue"></i>-->

              <!--      <div class="timeline-item">-->
              <!--        <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>-->

              <!--        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>-->

              <!--        <div class="timeline-body">-->
              <!--          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,-->
              <!--          weebly ning heekya handango imeem plugg dopplr jibjab, movity-->
              <!--          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle-->
              <!--          quora plaxo ideeli hulu weebly balihoo...-->
              <!--        </div>-->
              <!--        <div class="timeline-footer">-->
              <!--          <a class="btn btn-primary btn-xs">Read more</a>-->
              <!--          <a class="btn btn-danger btn-xs">Delete</a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
                  <!-- END timeline item -->
                  <!-- timeline item -->
              <!--    <li>-->
              <!--      <i class="fa fa-user bg-aqua"></i>-->

              <!--      <div class="timeline-item">-->
              <!--        <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>-->

              <!--        <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request-->
              <!--        </h3>-->
              <!--      </div>-->
              <!--    </li>-->
                  <!-- END timeline item -->
                  <!-- timeline item -->
              <!--    <li>-->
              <!--      <i class="fa fa-comments bg-yellow"></i>-->

              <!--      <div class="timeline-item">-->
              <!--        <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>-->

              <!--        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>-->

              <!--        <div class="timeline-body">-->
              <!--          Take me to your leader!-->
              <!--          Switzerland is small and neutral!-->
              <!--          We are more like Germany, ambitious and misunderstood!-->
              <!--        </div>-->
              <!--        <div class="timeline-footer">-->
              <!--          <a class="btn btn-warning btn-flat btn-xs">View comment</a>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
                  <!-- END timeline item -->
                  <!-- timeline time label -->
              <!--    <li class="time-label">-->
              <!--          <span class="bg-green">-->
              <!--            3 Jan. 2014-->
              <!--          </span>-->
              <!--    </li>-->
                  <!-- /.timeline-label -->
                  <!-- timeline item -->
              <!--    <li>-->
              <!--      <i class="fa fa-camera bg-purple"></i>-->

              <!--      <div class="timeline-item">-->
              <!--        <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>-->

              <!--        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>-->

              <!--        <div class="timeline-body">-->
              <!--          <img src="http://placehold.it/150x100" alt="..." class="margin">-->
              <!--          <img src="http://placehold.it/150x100" alt="..." class="margin">-->
              <!--          <img src="http://placehold.it/150x100" alt="..." class="margin">-->
              <!--          <img src="http://placehold.it/150x100" alt="..." class="margin">-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </li>-->
                  <!-- END timeline item -->
              <!--    <li>-->
              <!--      <i class="fa fa-clock-o bg-gray"></i>-->
              <!--    </li>-->
              <!--  </ul>-->
              <!--</div>-->
              <!-- /.tab-pane -->

              <!--<div class="tab-pane" id="settings">-->
              <!--  <form class="form-horizontal">-->
              <!--    <div class="form-group">-->
              <!--      <label for="inputName" class="col-sm-2 control-label">Name</label>-->

              <!--      <div class="col-sm-10">-->
              <!--        <input type="email" class="form-control" id="inputName" placeholder="Name">-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <label for="inputEmail" class="col-sm-2 control-label">Email</label>-->

              <!--      <div class="col-sm-10">-->
              <!--        <input type="email" class="form-control" id="inputEmail" placeholder="Email">-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <label for="inputName" class="col-sm-2 control-label">Name</label>-->

              <!--      <div class="col-sm-10">-->
              <!--        <input type="text" class="form-control" id="inputName" placeholder="Name">-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <label for="inputExperience" class="col-sm-2 control-label">Experience</label>-->

              <!--      <div class="col-sm-10">-->
              <!--        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <label for="inputSkills" class="col-sm-2 control-label">Skills</label>-->

              <!--      <div class="col-sm-10">-->
              <!--        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <div class="col-sm-offset-2 col-sm-10">-->
              <!--        <div class="checkbox">-->
              <!--          <label>-->
              <!--            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>-->
              <!--          </label>-->
              <!--        </div>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--    <div class="form-group">-->
              <!--      <div class="col-sm-offset-2 col-sm-10">-->
              <!--        <button type="submit" class="btn btn-danger">Submit</button>-->
              <!--      </div>-->
              <!--    </div>-->
              <!--  </form>-->
              <!--</div>-->
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













