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
            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/startupinsight/">
                <input type="hidden" name="column_value" value="" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>

                <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Reg.Type</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
				  <th>Industry</th>
                  <th>Country</th>
                  
                  
                  
                  <th></th>
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $this->admin_model->getAllPrevSub();  foreach($row as $rowArray){  
					$subType = $this->admin_model->getSubPay($rowArray['email'],$rowArray['service'] ); 
					$profile_request = $this->admin_model->getUser($rowArray['email']);  
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['startup'] ?></td>
                    <td><?php echo $rowArray['name'] ; ?> </td>
                    <td>
                    <?php echo $rowArray['email']; ?>
                    </td>
                    
                    <td><?php echo $rowArray['phone']; ?></td>
					<td><?php echo $rowArray['industry']; ?></td>
                    	<td><?php echo $rowArray['country']; ?></td>
                    	
                    	
                    	
                    		<td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/checksubscriber/<?php echo $rowArray['id'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> 
                    <!--&nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>-->
                    &nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a>
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













