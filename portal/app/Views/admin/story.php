<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Tell your story</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
                
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Post BY</th>
                  <th>Title</th>
                  
				  <th>View</th>
				  <th>Status</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			        $n = 1;
			     $row = $this->admin_model->getStoryPost();
				foreach($row as $rowArray){ 
				    $personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email']);
					if($rowArray['title'] !=''){
				
				?>
                  <tr>
                      
                      <td><?php echo $n++ ?></td>
                    <td>
                         <?php if(!empty($personalDetails[0]['Primary_Contact_Name'])){  ?>
                        <strong>Name:</strong>   <?php echo $personalDetails[0]['Primary_Contact_Name']; ?><br> 
                        <strong>Email: </strong><?php echo $personalDetails[0]['Contact_Email']; ?><br>
                        <strong>Company: </strong><?php echo $personalDetails[0]['Startup_Company_Name']; ?><br>
                        <?php }  ?>
                    
                    </td>
				  
                   
                   
                     
                    <td>
                    <?php echo $rowArray['title']; ?>
                    </td>
                    

					
                    <td>
                   <div class="text-muted mb-0"><a href="<?php echo base_url()?>gfa/check_story/<?php echo $rowArray['title']; ?>">Check Story</a>
                    </td>
                   
                    <td>
                    <span class="showStatus<?php echo $rowArray['story_id']; ?>"><?php  if($rowArray['status_ext']==NULL || $rowArray['status_ext']=='pending'){ echo 'pending '; }else{ echo $rowArray['status_ext'] ; } ?> </span>
                    </td>
                    <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['story_id']; ?>" value="<?php echo $rowArray['story_id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['story_id']; ?>">
                      
                      <option value="pending">Pending</option> 
                      <option value="declined">Declined</option>
                      <option value="approved">Approved</option>
                      
                        
                    </select>
                    
                    </td>
                    
                    
                    
                  </tr>
                  
                  <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['story_id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['story_id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['story_id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/storystatuspro",
	 error:function() {$(".showStatus<?php echo $rowArray['story_id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['story_id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['story_id']; ?>').text(file_status);
		//if(data==1){
// 		$(".saveCohortForm").html('Event Info Sent');
//          $('.creditBtn').prop("disabled", true );
      }
    });   
            
            
                });
                  
              });
          </script>
				
                  <?php } } ?>

				
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













