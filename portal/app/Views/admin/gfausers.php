<?php $admin_model = new \App\Models\AdminModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Subscribers</h3>
            </div>
            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/login/account_type">
                <input type="hidden" name="column_value" value="startup" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Account_type</th>
                 
                  <th>Time_submit</th>
				  
                  
                  
                  
                  
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllLoginUsers();  foreach($row as $rowArray){  
					$subType = $admin_model->getSubPay($rowArray['email'],$rowArray['service'] ); 
					$profile_request = $admin_model->getUser($rowArray['email']);  
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['email'] ?></td>
                    <td><?php echo $rowArray['username']; ?></td>
                    <td><?php echo '*********'; //$rowArray['password'] ; ?> </td>
                    
                    <td><?php echo $rowArray['account_type']; ?></td>
                    
                    
                    <td><?php echo $rowArray['time_submit']; ?></td>
					
                    
                    	
                    	
                    	
                    		
                  
                  </tr>
				
				<?php }  ?>
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

<script type="text/javascript">
function load()
{
setTimeout("window.open(self.location, '_self');", 60000);
}
</script>


          
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>













