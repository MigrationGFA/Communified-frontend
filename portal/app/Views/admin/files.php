<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Data Room Files</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
            
            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/files/">
                <input type="hidden" name="column_value" value="" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Startup</th>
                 <th>Funding Goals</th> 
                  <th>Folder</th>
                  <th>Title</th>
                  <th>Description</th>
				  <th>View</th>

				  <th>Status</th>
                  <th>Action</th>
                  
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			        $n = 1;
			     $row = $admin_model->getRecentFileUploadedX();
				foreach($row as $rowArray){ 
				    $personalDetails =  $admin_model->getAllStartUpNByEmail($rowArray['Email']);
					if($rowArray['Title'] !=''){

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
                    
                    <strong>$ </strong><?php echo $personalDetails[0]['Next_Funding_Round_Target_Sought']; ?>
                    
                    </td>
                    <td><strong><?php echo $rowArray['File_Type'] ; ?></strong>
                    
                    </td>
                     
                    <td>
                    <?php echo $rowArray['Title']; ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['File_Desc']; ?><br>
                    <?php echo date('d M Y',strtotime($rowArray['Time_Submit'])) ?>
                    </td>
                    <td>
                    
            <?php  $file = explode('.', $rowArray['File']); 
            $fileExt = $file[1];
            ?>
            <?php        
            if($fileExt=='ppt' || $fileExt=='pptx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/powerpoint-icon.png" alt="file-icon" height="35" />   
            
        <?php }  ?>
        
         <?php         
            if($fileExt=='pdf'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/pdf.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        <?php         
            if($fileExt=='txt'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/txt.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='csv' || $fileExt=='xls' ||  $fileExt=='xlsx' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/xls.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        
        <?php
       
            if($fileExt=='png' || $fileExt=='jpeg' ||  $fileExt=='jpg' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/jpg.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
         <?php
       
            if($fileExt=='doc' ||  $fileExt=='docx' || $fileExt=='DOC' ||  $fileExt=='DOCX' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/word-icon.png" alt="file-icon" height="35" />  
            
        <?php }  ?>
        
        <?php
            
            if($fileExt=='mp4' || $fileExt=='mpg' ||  $fileExt=='mov' || $fileExt=='mpe' || $fileExt=='avi' ||  $fileExt=='movie'){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/video-icon.png" alt="file-icon" height="35" />
            
        <?php }  ?>
        
        <?php
       
            if($fileExt=='mp2' ||  $fileExt=='mp3' ){
            ?>
            <img src="<?php echo base_url(); ?>assets/images/icons/sound-icon.png" alt="file-icon" height="35" /> 
            
        <?php }  ?>
        
          
                    <a href="https://getfundedafrica.com/portal/uploads/files/<?php echo $rowArray['File']; ?>" target="_blank">View File</a>
                    </td>
                    <td>
                    <span class="showStatus<?php echo $rowArray['File_Id']; ?>"><?php  if($rowArray['Status']==NULL || $rowArray['Status']=='pending'){ echo 'pending '; }else{ echo $rowArray['Status'] ; } ?> </span>
                    </td>
                    <td>
                    <input type="hidden" class="file_id<?php echo $rowArray['File_Id']; ?>" value="<?php echo $rowArray['File_Id']; ?>"  />
                    <select name="file_status" class="file_status<?php echo $rowArray['File_Id']; ?>">
                      
                      <option value="pending">Pending</option> 
                      <option value="declined">Declined</option>
                      <option value="approved">Approved</option>
                      
                        
                    </select>
                    
                    </td>
                    
                    
                    
                  </tr>
                  
                  <script>
              
              $(function(){
                
                $('.file_status<?php echo $rowArray['File_Id']; ?>').change(function(){
                 
            var file_status = $('.file_status<?php echo $rowArray['File_Id']; ?>').val();
            var id = $('.file_id<?php echo $rowArray['File_Id']; ?>').val();
             $.ajax({
     data:{id:id,file_status:file_status},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/filestatuspro",
	 error:function() {$(".showStatus<?php echo $rowArray['File_Id']; ?>").html('Error')},
	 beforeSend:function() {$(".showStatus<?php echo $rowArray['File_Id']; ?>").html('checking...')},
      success: function(data) {
        $('.showStatus<?php echo $rowArray['File_Id']; ?>').text(file_status);
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













