<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Investor - Startups
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
				    $rowArray = $this->admin_model->getAllInvestorById($id);  
				// 	$subType = $this->admin_model->getSubPayX($rowArray[0]['email'],'Investor Readiness Cohort'); 
					$investor_email = $this->admin_model->getAllInvestorById($id)[0]['Contact_Email']; 
		
		?>
          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url(); ?>assets/images/uploads/default-avatar.jpg" alt="User profile picture">

              <h3 class="profile-username text-center"><?php echo $rowArray[0]['Contact_Name']  ?> </h3>

              <p class="text-muted text-center"><?php echo $rowArray[0]['Investor_Name'] ?></p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
				
				  
                  <b>Status</b> <a class="pull-right bg-light-success" style="color:#009900">Active</a>
				  
                </li>
                <li class="list-group-item">
                  <b>Sex</b> <a class="pull-right"><?php  echo  $rowArray[0]['Contact_Email'] ?></a>
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
                <strong><i class="fa fa-book margin-r-5"></i> Investor Type</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Investor_Type'] ?>
              </p>

              <hr>
                <strong><i class="fa fa-book margin-r-5"></i> Investor Sub-Type</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Investor_SubType'] ?>
              </p>

              <hr>
                
              <strong><i class="fa fa-book margin-r-5"></i> Country</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Country'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> City/Province</strong>

              <p class="text-muted"><?php  echo  $rowArray[0]['	City'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Password</strong>

              <p>
                <span class="label label-danger"><?php  echo  $profile_request[0]['password'] ?></span>
                
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
              <li class="active"><a href="#activity" data-toggle="tab">Startup Info Focus</a></li>
              <li><a href="#timeline" data-toggle="tab">Deals and Connections</a></li>
              <li><a href="#settings" data-toggle="tab">Documents </a></li>
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
              <strong><i class="fa fa-book margin-r-5"></i> Industry</strong>

              <p class="text-muted">
               <?php  echo  $rowArray[0]['Industry_Focus'] ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i>Minimum Cheque </strong>

              <p class="text-muted"><?php  echo  $rowArray[0]['Min_Cheque'] ?></p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i>Maximum Cheque</strong>

              <p>
                <?php  echo  $rowArray[0]['Max_Cheque'] ?></span>
                
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Investment Stage Focus</strong>

              <p> <?php  echo  $rowArray[0]['Investment_Stage_Focus'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Implementation Stage Focus</strong>

              <p> <?php  echo  $rowArray[0]['Implementation_Stage_Focus'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Regional focus</strong>

              <p> <?php  echo  $rowArray[0]['Regional_focus'] ?></span></p>
              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i>Mentor</strong>

              <p> <?php  echo  $rowArray[0]['Mentorship'] ?></span></p>
              
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
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Investor</th>
                  <th>Startups</th>
                 <th>Investment Type</th> 
                  <th>More Info</th>
                  <th></th>
                  
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			        $n = 1;
			     $row = $this->admin_model->getInvestorsConnectionByEmail($rowArray[0]['Contact_Email']);
				foreach($row as $rowArray){ 
				    $investorDetails =  $this->gfa_model->getInvestorDetails($rowArray['email']);
				    $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);
					
				
				?>
                  <tr>
                      
                      <td><?php echo $n++ ?></td>
                      <td>
                         <?php if(!empty($investorDetails[0]['Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $investorDetails[0]['Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $investorDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $investorDetails[0]['Investor_Name']; ?><br>
                        <strong>Requested Time: </strong><?php echo $rowArray['time_submit'] ; ?>
                        <?php }  ?>
                    
                    </td>
                    <td>
                         <?php if(!empty($personalDetails[0]['Primary_Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $personalDetails[0]['Primary_Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $personalDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $personalDetails[0]['Startup_Company_Name']; ?><br>
                        <?php }  ?>
                    
                    </td>
				  
                   <td>
                    
                    <strong><?php echo $rowArray['invest_type'] ; ?></strong>
                    
                    </td>
                    <td>
                        <strong><?php echo $rowArray['more_info'] ; ?></strong>
                    
                    </td>
                     
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/sendinvestordoc/<?php echo $rowArray['id']?>"><i class="fa fa-fw fa-external-link"></i>Send Agreement</a> 
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a>
                    </td>
                    
                    
                  </tr>
                  
                  
				
                  <?php  } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>   
              <script type="text/javascript">
          $(function(){

            // $("a.clientId").click(function(){
            //   //var clientId = $(this).attr("clientId");
             
            //   var clickedValue = $(this).find('p').text();
            //   var clientName = $(this).find('span').text();
            //      $(".showClientId").val(clickedValue);
            //      //$(".clientName").val(clientName);
            // });


            $("tr").on('click','.deletebtn',function() {
    var id = $(this).find('span').text();
    //$(".showDataDel").val(id);
  var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
  $(this).closest('tr').remove();
        //$('tr.myTable').remove();
    
    $.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/deleteCreditX",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    $(".showDataDel").val();
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 

  

          });

        </script>    
              </div>
                
                
                 <div class="tab-pane" id="settings">
               <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Investor</th>
                  
                  <th>Photo</th>
                  <th>Valid IDs</th>
                  <th>Address</th>
				  
				  <th>Status</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			        $n = 1;
			     $row = $this->admin_model->getInvestorsFileUploadedByEmail($investor_email);
				foreach($row as $rowArray){ 
				    $investorDetails =  $this->gfa_model->getInvestorDetails($rowArray['email']);
				    $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);
					
				
				?>
                  <tr>
                      
                      <td><?php echo $n++ ?></td>
                      <td>
                         <?php if(!empty($investorDetails[0]['Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $investorDetails[0]['Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $investorDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $investorDetails[0]['Investor_Name']; ?><br>
                        <?php }  ?>
                    
                    </td>
                    
				  
                   
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['photo']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['photo']; ?>" target="_blank">View File</a>
                    
                    </td>
                     
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['ids']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['ids']; ?>" target="_blank">View File</a>
                    
                    </td>
                    
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['address']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['address']; ?>" target="_blank">View File</a>
                    
                    </td>
					
                    
                    <td>
                    <span class="showStatus<?php echo $rowArray['id']; ?>"><?php  if($rowArray['status']==NULL || $rowArray['status']=='pending'){ echo 'pending '; }else{ echo $rowArray['status'] ; } ?> </span>
                    </td>
                    <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['id']; ?>" value="<?php echo $rowArray['id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['id']; ?>">
                      
                      <option value="pending">Pending</option> 
                      <option value="declined">Declined</option>
                      <option value="approved">Approved</option>
                      
                        
                    </select>
                    
                    </td>
                    
                    
                    
                  </tr>
                  
                  <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/filestatusproX",
	 error:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['id']; ?>').text(file_status);
		//if(data==1){
// 		$(".saveCohortForm").html('Event Info Sent');
//          $('.creditBtn').prop("disabled", true );
      }
    });   
            
            
                });
                  
              });
          </script>
				
                  <?php  } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>   
                  
              </div>
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













