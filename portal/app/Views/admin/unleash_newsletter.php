<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Unleashified Newsletter</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
                
                <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th></th>
                  <th>Date</th>
                 
                  <th>Email</th>
                  
				 
                  <th></th>
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $admin_model->getAllUnleashifiedNewsletter();  foreach($row as $rowArray){  
					
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
                      
                       <td><?php echo $n++ ?></td>
				  
                    <td><?php echo $rowArray['time_submit'] ?></td>
                    
                    <td><?php echo $rowArray['email'] ; ?> </td>
                   
				
                    <td class="display<?php echo $rowArray['Id'] ?>"> &nbsp; &nbsp;  
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













