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
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Industry</th>
				  <th>Raise Money</th>
				  <th>Project Revenue</th>
                  <th>Action</th>
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $this->admin_model->getAllStartUp();  foreach($row as $rowArray){  
					$profile_request = $this->admin_model->getUser($rowArray['email']);  
					$login_request = $this->admin_model->getProfile($rowArray['email'])
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $login_request[0]['last_name'].' '.$login_request[0]['first_name'] ; ?> </td>
                    <td>
                    <?php echo $login_request[0]['email']; ?>
                    </td>
                    <td><?php echo $rowArray['industry']; ?></td>
                    <td><?php echo $rowArray['raise_money']; ?></td>
					<td>
                    <?php echo $rowArray['project_revenue']; ?>
                    </td>
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/checksubscriber/<?php echo $profile_request[0]['id'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> &nbsp; &nbsp; 
                    <a href="#"  class="deletebtn<?php echo $rowArray['id'] ?>"><i class="material-icons dp48"></i></a><span></span><input value="<?php echo $rowArray['id'] ?>" type="hidden" class="disVal<?php echo $rowArray['id'] ?>" /></td>
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













