<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ONBOARD ALL</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
				  
                  <th>Country/Location</th>
                  <th>Type</th>
                  <th>Interest</th>
                   
                  <th>Start Time</th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllOnboard();  foreach($row as $rowArray){  
					$subType = $admin_model->getSubPay($rowArray['email'],$rowArray['package'] ); 
					$profile_request = $admin_model->getUser($rowArray['email']);  
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['fname']." ".$rowArray['lname'] ?></td>
                    
                    <td>
                    <?php echo $rowArray['email']; ?>
                    </td>
                    
                    <td><?php echo $rowArray['mobile']; ?></td>
					<td><?php echo $rowArray['country']."/".$rowArray['city']; ?></td>
                    	<td><?php echo $rowArray['organisation_type']; ?></td>
                    	<td><?php echo $rowArray['interest']; ?></td>
                    	
                    		<td><?php  echo $subType[0]['time_start']; ?></td>
                    	
                  
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













