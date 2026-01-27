<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">MENTORS</h3>
            </div>
            <!-- /.box-header -->
            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/mentor_info/">
                <input type="hidden" name="column_value" value="" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>
            <div class="box-body" style="overflow: auto; margin: 0 10px;">
               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/N</th>
                  <th>Contact/Company Name</th>
                  <th>Industry</th>
                  <th>Email</th>
                  <th>Mentors_focus </th>
                  <th>Multiple_Mentees </th>
                  <th>Nationality</th>
                 <th>Date</th>
                  <th></th>

                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			
				$row = $admin_model->getAllMentors();  foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                    <td><strong><?php echo $rowArray['Mentor_ID'] ; ?></strong><br>
                    <td><strong><?php echo $rowArray['Mentor_name'] ; ?></strong><br>
                    <?php echo $rowArray['Company'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['Industry']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['Email']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Mentors_focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Multiple_Mentees']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Nationality']; ?>
                    </td>
                     <td>
                    <?php echo $rowArray['Date']; ?>
                    </td>
                    
                    <td class="display<?php echo $rowArray['Mentor_ID'] ?>"><a href="<?php echo base_url(); ?>admin/mentorsinfo/<?php echo $rowArray['Mentor_ID'] ?>" target="_blank"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> 
                    <!--&nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>-->
                    &nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['Mentor_ID'] ?></span></a>
                    </td>
                    
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
     url: "<?php echo base_url(); ?>admin/deleteInvestor",
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













