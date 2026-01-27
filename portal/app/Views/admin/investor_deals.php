<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Investor Validation</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
                
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Investor</th>
                  <th>Startups</th>
                 <th>Investment Type</th> 
                  <th>Photo</th>
                  <th>Valid IDs</th>
                  <th>Address</th>
				  
				  <th>Status</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			        $n = 1;
			     $row = $this->admin_model->getInvestorsFileUploaded();
				foreach($row as $rowArray){ 
				    $investorDetails =  $this->gfa_model->getInvestorDetails($rowArray['email']);
				    $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);
					
				
				?>
                  <tr>
                      
                      <td><?php echo $n++ ?></td>
                      <td>
                         <?php if(!empty($investorDetails[0]['Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $investorDetails[0]['Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $investorDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $investorDetails[0]['Investor_Name']; ?><br>
                        <?php }  ?>
                    
                    </td>
                    <td>
                         <?php if(!empty($personalDetails[0]['Primary_Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $personalDetails[0]['Primary_Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $personalDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $personalDetails[0]['Startup_Company_Name']; ?><br>
                        <?php }  ?>
                    
                    </td>
				  
                   <td>
                    
                    <strong><?php echo $rowArray['invest_type'] ; ?></strong>
                    
                    </td>
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['photo']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['photo']; ?>" target="_blank">View File</a>
                    
                    </td>
                     
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['ids']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['ids']; ?>" target="_blank">View File</a>
                    
                    </td>
                    
                    <td>
                        <img src="<?php echo base_url(); ?>uploads/files/<?php echo $rowArray['address']; ?>" alt="photo" height="35" /><br>
                        <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['address']; ?>" target="_blank">View File</a>
                    
                    </td>
					
                    
                    <td>
                    <span class="showStatus<?php echo $rowArray['id']; ?>"><?php  if($rowArray['status']==NULL || $rowArray['status']=='pending'){ echo 'pending '; }else{ echo $rowArray['status'] ; } ?> </span>
                    </td>
                    <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['id']; ?>" value="<?php echo $rowArray['id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['id']; ?>">
                      
                      <option value="pending">Pending</option> 
                      <option value="declined">Declined</option>
                      <option value="approved">Approved</option>
                      
                        
                    </select>
                    
                    </td>
                    
                    
                    
                  </tr>
                  
                  <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/filestatusproX",
	 error:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['id']; ?>').text(file_status);
		//if(data==1){
// 		$(".saveCohortForm").html('Event Info Sent');
//          $('.creditBtn').prop("disabled", true );
      }
    });   
            
            
                });
                  
              });
          </script>
				
                  <?php  } ?>

				
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
     url: "<?php echo base_url(); ?>admin/deleteCohortEvent",
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













