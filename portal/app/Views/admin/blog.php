<?php  $this->admin_model = model('App\Models\AdminModel'); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">Blog Post</h3>
            </div>
            <!-- /.box-header -->
            
            <div class="box-body">
               <a href="<?php echo base_url(); ?>admin/add_blog" class="btn btn-info pull-right">+ Add blog</a>
                 <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th></th>
                  <th>Category</th>
                    <th>Title</th>
                    <th>Website</th>
                    <th>Blog Image</th>
                    <!--<th>No of Download</th>-->
                    
                    <th>Status</th>
				    <th>Date</th>
                  
                 
                </tr>
                </thead>
				<tbody>
				<?php 
				$n = 1;
				$row = $this->admin_model->blog_post();  foreach($row as $rowArray){  
					
				
				?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td class="display"><a href="<?php echo base_url(); ?>admin/edit_blog/<?php echo $rowArray['id']?>"><i class="fa fa-fw fa-pencil"></i></a> 
                    <a href="#"  class="deletebtn"><i class="fa fa-fw fa-trash"></i><span style="display: none;"><?php echo $rowArray['id'] ?></span></a>
                    </td>
                    <td><?php echo ucwords($rowArray['category']) ?></td>
                    <td><?php echo $rowArray['title'] ?></td>
                    <td><?php echo $rowArray['blog_url'] ?></td>
                    <td><img src="<?php echo base_url(); ?>/uploads/files/<?php echo $rowArray['blog_photo'] ?>" width="20px" height="20px" /></td>
                    
                    <td><?php echo $rowArray['status'] ?></td>
                    <td><?php echo $rowArray['date'] ; ?> </td>
                    
                    
                    
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
     url: "<?php echo base_url(); ?>admin/deleteBlog",
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













