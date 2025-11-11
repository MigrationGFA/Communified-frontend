<?php $admin_model = new \App\Models\AdminModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscribers</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/package_sub/payment_status">
                <input type="hidden" name="column_value" value="paid" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Profile</th>
				  <th>Amount</th>
				  <th>Payment</th>
                  
                  <th>Date</th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllPaidCohort();  foreach($row as $rowArray){  
				$personalDetails =  $admin_model->getAllStartUpNByEmail($rowArray['email']);	 
				$personalDetailsCohort =  $admin_model->getAllCohortByEmail($rowArray['email']);
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td>
                        <?php if(!empty($personalDetails[0]['Primary_Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $personalDetails[0]['Primary_Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $personalDetails[0]['Contact_Email']; ?><br>
                        <strong>Phone:</strong> <?php echo $personalDetails[0]['Phones']; ?> 
                        <?php  }else{ ?>
                        <?php if(!empty($personalDetailsCohort[0]['name'])){  ?>
                        <strong>Name:</strong>   <?php echo $personalDetailsCohort[0]['name']; ?><br> 
                        <strong>Email: </strong><?php echo $personalDetailsCohort[0]['email']; ?><br>
                        <strong>Phone:</strong> <?php echo $personalDetailsCohort[0]['phone']; ?> 
                        <?php  }else{ echo ''; } } ?> 
                        </td>
					<td><?php  if($rowArray['gateway'] =='paystack naira'){ echo '#';}else{ echo '$'; } ?><?php echo $rowArray['amount']; ?> </td>
					<td><?php echo $rowArray['payment_status']; ?> </td>
                    
                    
                    <td><?php if(!empty($rowArray['time_start'])){ echo date("l",strtotime($rowArray['time_start']))." ".date("d/M/Y h:iA",strtotime($rowArray['time_start'])); }else{ echo '-'; } ?></td>
                    <td class="display<?php echo $rowArray['id'] ?>">
                     
                    <!--<a href="#"  class="deletebtn<?php echo $rowArray['id'] ?>"><i class="material-icons dp48"></i></a><span></span><input value="<?php echo $rowArray['id'] ?>" type="hidden" class="disVal<?php echo $rowArray['id'] ?>" /></td>-->
                  </tr>
				 <script>
                           
                        </script>
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>













