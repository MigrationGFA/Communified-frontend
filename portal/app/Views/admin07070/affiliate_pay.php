<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Affiliate</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
               
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                 
                  <th>Ref</th>
                  <th>Payment Details</th>
                  <th>Amount Earned</th>
                  <th>Withdraw Request</th>
                 <th>Status</th>
				  <th>Date</th>
				 
                </tr>
                </thead>
				<tbody>
			<?php	    $sumDollar= 0;
                $sumNaira = 0;
                
				$n = 1;
				$row = $this->admin_model->getAllAffiliate();  foreach($row as $rowArray){  
				$rowRef = $this->admin_model->getAllAffiliateByRef($rowArray['ref_url']);  foreach($rowRef as $rowArrayRef){  
				$paymentDetails =  $this->admin_model->getAllUsersPayActive($rowArrayRef['email']);
				if($paymentDetails[0]['amount'] == 15){
				$sumDollar += $paymentDetails[0]['amount']*700;
				}else{
				 $sumNaira  += $paymentDetails[0]['amount']; 
				 
				}
				
				}
				$totalAmount = $sumDollar + $sumNaira;
				
				}
				?>
				<?php 
				 $n = 1;
				$row = $this->admin_model->getAllAffiliateWithdraw();  foreach($row as $rowArray){  
				//$paymentDetails =  $this->admin_model->getAllUsersPay($rowArray['ref']);
				$bankDetails = $this->admin_model->getBankDetails($rowArray['ref']);
				?>
                  <tr class="myTable<?php echo $rowArray['id'] ?>">
				  
                    <td><?php echo  $n++ ?></td>
                    <td><?php echo  $rowArray['ref'] ?></td>
                    <td>
                        
                        <strong>Name:</strong><?php echo $bankDetails[0]['bank_name'];  ?><br>
                        <strong>Bank Name:</strong><?php echo $bankDetails[0]['bank'];  ?><br>
                        <strong>Account No:</strong><?php echo $bankDetails[0]['account_no'];  ?><br>
                        <strong>Email:</strong><?php echo $this->admin_model->getAllAffiliateByRef($rowArray['ref'])[0]['email'];  ?><br>
                        <strong>Country:</strong><?php echo $bankDetails[0]['country'];  ?>
                        
                    </td>
                   <td><?php detectCurrency(); ?><?php  detectCurrencyAmount($totalAmount); ?></td>
                    <td><?php detectCurrency(); ?><?php echo $rowArray['amount']*700 ?></td>
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
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
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













