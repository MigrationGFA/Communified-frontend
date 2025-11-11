

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Set Commission 
        <small>Preview</small>
      </h1>
      
    </section>
<?php $refx = $this->encrypt->decode($this->session->userdata('ref'));
$sumDollar= 0;
$sumNaira = 0;
$row = $this->admin_model->getAllAffiliateByRef($ref);  foreach($row as $rowArray){  
				$paymentDetails =  $this->admin_model->getAllUsersPayActive($rowArray['email']);
				if($paymentDetails[0]['amount'] == 15){
				$sumDollar += $paymentDetails[0]['amount']*700;
				}else{
				 $sumNaira  += $paymentDetails[0]['amount']; 
				}
				
				
}

$totalAmount = $sumDollar + $sumNaira;
?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Commission for <strong><?php echo $ref ?></strong></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal startUpForm" method="post" action="#">
              <div class="box-body">
                  
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Commission(%)</label>
                <input type="hidden" class="form-control" name='ref' id="inputEmail3"  value="<?php echo $ref ?>">

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name='commission' id="inputEmail3" required  placeholder="Commission %" value="<?php echo $this->admin_model->getLatestCommission($ref)[0]['commission'] ?>">
                  </div>
                </div>
                <!--<div class="form-group">-->
                <!--  <label for="inputPassword3" class="col-sm-2 control-label">Mi</label>-->

                <!--  <div class="col-sm-10">-->
                <!--    <input type="text" class="form-control" id="inputPassword3" placeholder="Amount">-->
                <!--  </div>-->
                <!--</div>-->
                <!--<div class="form-group">-->
                <!--    <label for="inputPassword3" class="col-sm-2 control-label">Payment Method</label>-->
                <!-- <div class="col-sm-10">    -->
                <!--  <select class="form-control">-->
                <!--    <option>Paystack</option>-->
                <!--    <option>Paypal</option>-->
                   
                <!--  </select>-->
                <!--  </div>-->
                <!--</div>-->
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <!--<button type="submit" class="btn btn-default">Cancel</button>-->
                <button type="submit" class="btn btn-info pull-right saveBtn">Set Commission</button><span class="displayAction"></span>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
          <!-- /.box -->

          <!-- Form Element sizes -->
         
          <!-- /.box -->
            <script>
      $(function(){
          
          
          
          	$(".startUpForm").submit(function() {
    //---------------^---------------
    // e.preventDefault();
    
	
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/commissionpro",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Submitting...');},
      success: function(data) {
       //
		  $(".displayAction").html(data);  
	   $(".saveBtn").html('Saved');  
	   
	  
	
       }
      
    });
	 
  return false;
  });
          
      });  
    </script> 
         
          <!-- /.box -->

          <!-- Input addon -->
         
          <!-- /.box -->

        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Payment History</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
             <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                 
                  
                  <th>Amount</th>
                  <th>Payment Status</th>
                
				  <th>Date</th>
				 
                </tr>
                </thead>
				<tbody>
				<?php 
				 $n = 1;
				$row = $this->admin_model->getAllAffiliateAmountByRef($ref);  foreach($row as $rowArray){  
				$paymentDetails =  $this->admin_model->getAllUsersPay($rowArray['email']);
				// 	$login_request = $this->admin_model->getProfile($rowArray['email'])
				?>
                  <tr class="myTable<?php echo $rowArray['id'] ?>">
				  
                    <td><?php echo  $n++ ?></td>
                    
                    
                    <td><?php echo $rowArray['amount'] ?> </td>
					<td><?php echo $rowArray['status'] ?> </td>
                   
                    <td><?php echo $rowArray['time_submit']; ?> 
                    <td>
				
                  </tr>
				 
                            
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>
          </div>
          <!-- /.box -->
          <!-- general form elements disabled -->
        
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  