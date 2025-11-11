<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header"> 
              <h3 class="box-title"><?php echo ucwords($ref) ?> Customers Registered via Link/URL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Email</th>
				  <th>Referral Dept</th>
				  <th>Registered Product</th>
                  <th>Date</th>
                  <th></th>
                  
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $this->admin_model->getRefByProduct($ref);  foreach($row as $rowArray){  
					 
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['email']; ?> </td>
					<td><?php echo $rowArray['ref']; ?></td>
					<td><?php echo $rowArray['reg_type']; ?> </td>
                    <td><?php echo $rowArray['time_submit']; ?></td>
                    
                    <td></td>
                   
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













