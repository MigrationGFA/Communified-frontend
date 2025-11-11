<?php $admin_model = new \App\Models\AdminModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">COHORTS</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
                <a href="<?php echo base_url(); ?>admin/add_cohort_participant/Microsoft" class="btn btn-info pull-right">+ Add Cohort Particpant</a>
                <br><br>
                <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/startup_co/">
                  <input type="hidden" name="column_value" value="<?= $segmentValue  ?>" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Startup</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
				          <th>Industry</th>
                  <th>Country</th>
                  <th>Payment</th>
                  <th></th>

                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllCohort();  foreach($row as $rowArray){  
					$subType = $admin_model->getSubPayX($rowArray['email'],'Investor Readiness Cohort'); 
					$profile_request = $admin_model->getUser($rowArray['email']);  

				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['company_name'] ?></td>
                    <td><?php echo $rowArray['name'] ; ?> </td>
                    <td>
                    <?php echo $rowArray['email']; ?>
                    </td>
                    
                    <td><?php echo $rowArray['phone']; ?></td>
					<td><?php echo $rowArray['industry']; ?></td>
                    	<td><?php echo $rowArray['country']; ?></td>
                    	
                    	<td><?php //echo $subType[0]['payment_status']; //
                    	if($subType[0]->payment_status == 'pending' || empty($subType[0]->payment_status)){
                    	    
                    	    echo 'free';  //$subType[0]['payment_status'];''
                    	    
                    	}else{
                    	    
                    	    echo "paid";
                    	}
                    	
                    	?> </td>
                    		
                    	
                  </td>
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/checkcohort/<?php echo $rowArray['id'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> &nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>&nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a></td>
                  </tr>
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
     url: "<?php echo base_url(); ?>admin/deleteCohort",
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













