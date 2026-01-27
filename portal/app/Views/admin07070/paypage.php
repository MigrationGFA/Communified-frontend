<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Payment</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Payment Gateway</th>
                  <th>Ref:</th>
                  <th>Package</th>
                  <th>email</th>
                  <th>Subscription</th
                  <th>Sub Type</th>
                  <th>amount</th>
				  <th>Payment Status</th>
                  <th></th>
                  <th>Status</th>
                  
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $this->admin_model->getAllSubPay($product);  foreach($row as $rowArray){  
					$ref_request = $this->admin_model->getStartUp($rowArray['email']); 
					$profile_request = $this->admin_model->getProfile($rowArray['email']);  
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                     <td><?php echo $rowArray['gateway']; ?> </td>
                    <td><?php echo $rowArray['ref']; ?> </td>
					<td><?php echo $rowArray['package']; ?> </td>
					<td><?php echo $rowArray['email']; ?> </td>
					<td><?php echo $rowArray['subscription']; ?> </td>
					<td><?php echo $rowArray['subtype']; ?> </td>
					<td><?php echo $rowArray['amount']; ?> </td>
					<td><?php echo $rowArray['payment_satus']; ?> </td>
					<td><?php echo $rowArray['time_start']; ?> </td>
                    <td>
                    <?php  if($rowArray['status']!="active"){   ?>
                 <a class="pull-right bg-light-warning" style="color:#FF3300">Expired</a>
				  <?php }   ?>
				  <?php  if($rowArray['status']=="active"){   ?>
                <a class="pull-right bg-light-success" style="color:#009900">Active</a>
				  <?php }   ?>
                    </td>
                    
                   
                    
                  </tr>
				 <script>
                            $(function(){

$(".table tbody").on('click','.deletebtn<?php echo $rowArray['id'] ?>',function() {
    var id = $(".disVal<?php echo $rowArray['id'] ?>").val(); 
	var choice = confirm('Do you really want to delete this record?');
    if(choice === true) {
	$(this).closest('tr').remove();
        $('tr.myTable<?php echo $rowArray['id'] ?>').remove();
		
		$.ajax({
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/admin_pay",
	 //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
	 //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
		
		$(".showResp").html(data);
		
		
		
		
		}
      
    });
    }
	
    
	return false;
}); 


              
                        });
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













