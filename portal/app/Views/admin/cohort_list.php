<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

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
                <a href="<?php echo base_url(); ?>admin/post_cohort" class="btn btn-info pull-right">+ Add Cohort </a>
                <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>Title</th>
                  <th>Demo_Date</th>
                  <th>Date</th>
                  <th>Link</th>
				 
                  <th></th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllCohortEvent();  foreach($row as $rowArray){  
					
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><img src="<?php echo base_url(); ?>uploads/<?php echo $rowArray['Logo'] ?>" width="40" height="40"  ></td>
                    <td><?php echo $rowArray['Title'] ?></td>
                    <td><?php echo $rowArray['Demo_Date'] ; ?> </td>
                    <td>
                    <?php echo $rowArray['Date']; ?>
                    </td>
                    
                    <td><?php echo $rowArray['Url']; ?></td>
				
                    <td class="display<?php echo $rowArray['Id'] ?>"><a href="<?php echo base_url(); ?>admin/add_cohort_participant/<?php echo $rowArray['Title']?>"><i class="fa fa-fw fa-user-plus"></i> </a> &nbsp; &nbsp; <a href="<?php echo base_url(); ?>admin/checkcohortevent/<?php echo $rowArray['Id']?>"><i class="fa fa-fw fa-external-link"></i> </a> &nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohortevent/<?php echo $rowArray['Id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>&nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['Id'] ?></span></a></td>
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













