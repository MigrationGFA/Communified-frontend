<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">Affiliate</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
               
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/No</th>
                  <th>Ref</th>
                  <th>Profile</th>
                  <th>Other Info</th>
                  <th>Subscribers</th>
                  <th>Commission</th>
                  <th>Wallet</th>
                  
                  
				 
                  <th></th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				
				$sumDollar= 0;
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
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['ref_url'] ; ?></td>
                    <td>
                        <strong>Name: </strong><?php echo $rowArray['name'] ; ?><br>
                        <strong>Email: </strong><?php echo $rowArray['email'] ; ?><br>
                        <strong>Phone: </strong><?php echo $rowArray['phone'] ; ?>
                    </td>
                   <td>
                        <strong>Company: </strong><?php echo $rowArray['company'] ; ?><br>
                        <strong>Location: </strong><?php echo $rowArray['location'] ; ?><br>
                        <strong>Date Reg: </strong><?php echo $rowArray['time_submit'] ; ?>
                    </td>
                    <td><?php echo $this->admin_model->countRefByProduct($rowArray['ref_url']); ?></td>
                    <td>%<?php echo $this->admin_model->getLatestCommission($rowArray['ref_url'])[0]['commission'] ?></td>
                    <td>
                        <strong>Total Amount: <?php detectCurrency(); ?></strong><?php  detectCurrencyAmount($totalAmount); ?><br>
                        <strong>Withdrawn Amount: <?php detectCurrency(); ?></strong>
                        
                        <?php if(!empty($this->admin_model->getAllAffiliateAmountByRef($rowArray['ref_url'])[0]['amount']) ){ echo $this->admin_model->getAllAffiliateAmountByRef($rowArray['ref_url'])[0]['amount'] ;}else{ echo '0'; } ?><br>
                        <strong>Status: </strong><?php echo $rowArray['status'] ; ?>
                    </td>
                    
				
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/commission/<?php echo $rowArray['ref_url']?>"><i class="fa fa-fw fa-external-link"></i>Set Commission</a><br><a href="<?php echo base_url(); ?>admin/referral/<?php echo $rowArray['ref_url']?>"><i class="fa fa-fw fa-external-link"></i> Check Referred </a> 
                    <br><a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a></td>
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













