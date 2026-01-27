<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">INVESTORS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/investor/">
                  <input type="hidden" name="column_value" value="" >
                    <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                  </form>
                <br><br>

               <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <!--porfolio size, location, Status (Verifed or Unverifed), Deals(numbers of deals/amount of deals),Action (detail,) details-->
                    <th>S/No</th>
                  <th>Contact/Company Name</th>
                  <th>Industry</th>
                  
				  <th>porfolio size</th>
				  <th>Operating Country(ies)</th>
				  
				  <th>Deals</th>
                  
                 <th>Status</th>
                  <th></th>
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			    $n = 1;
				$row = $this->admin_model->getAllInvestorN();  foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				    
				    <td>
                    <?php echo $n++; ?>
                    </td>
                   
                    <td><strong><?php echo $rowArray['Contact_Name'] ; ?></strong><br>
                    <?php echo $rowArray['Investor_Name'] ; ?><br>
                    <?php echo $rowArray['Contact_Email'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['Industry_Focus']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['Min_Cheque']; ?> - <?php echo $rowArray['Max_Cheque']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Country']; ?>
                    </td>
                    <td>
                    <?php echo $this->admin_model->countAllConnections($rowArray['Contact_Email']); ?>
                    </td>
                    <td>
                    <?php echo $this->admin_model->getInvestorsFileUploadedByEmail($rowArray['Contact_Email'])[0]['status']; ?>
                    </td>
                    
                    
                    <td class="display<?php echo $rowArray['Investor_ID'] ?>"><a href="<?php echo base_url(); ?>admin/investorsinfo/<?php echo $rowArray['Investor_ID'] ?>"><i class="fa fa-fw fa-external-link"></i> <span>View</span></a> 
                    <!--&nbsp; &nbsp;  <a href="<?php echo base_url(); ?>admin/editcohort/<?php echo $rowArray['id']?>" class=""><i class="fa fa-fw fa-pencil"></i></a><span></span>-->
                    &nbsp; &nbsp;
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['Investor_ID'] ?></span></a>
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













