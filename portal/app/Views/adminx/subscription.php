<div class="banner-area-two">
<div class="container-fluid">
<div class="container-max">
<div class="row align-items-center">
<div class="col-lg-5">

</div>

</div>
</div>
</div>

</div>



<div class="security-area pt-100 pb-70">
<div class="container">

<div class="section-title text-center">
<div class="col-xl-2 col-lg-2 d-none d-lg-block text-right">

<a href="<?php echo base_url(); ?>admin/addsub" class="theme-btn sign-btn" style="background-color:#F57F19; color:#FFFFFF;">+ ADD</a>
</div>
<span class="sp-color2"></span>
<h2>Subscription</h2>

<table id="page-length-option" class="display table responsive">
                <thead>
				
                  <tr>
                    <th>S/no</th>
                    <th>Package</th>
                    <th>Subcription</th>
                    <th>Amount</th>
					<th>Details</th>
                    <th>Action</th>
                  </tr>
				  
				  
                </thead>
                <tbody>
				
				<?php 
				$n = 1;
				//$this->admin_model->getAllUsersPay(); 
				$row = $this->admin_model->getAllSub();  foreach($row as $rowArray){  ?>
                  <tr class="myTable<?php echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['package']; ?> </td>
                    <td><?php echo $rowArray['subscription'] ?></td>
					<td><?php echo $rowArray['amount'] ?></td>
                    <td><strong><?php echo $rowArray['subscription_type'] ?>:</strong><br />
					<p>Description</p>
					<ul>
					<?php 
					$rowDetails = json_decode($rowArray['details'], true);
					foreach($rowDetails as $key => $n){ ?>
					<li><?php echo $rowDetails[$key] ?></li>
					
					<?php }  ?>
					</ul>
                    
                    
                    </td>
                    
                   
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php echo base_url(); ?>admin/editsub/<?php echo $rowArray['id'] ?>"><i class="material-icons dp48">edit</i><span></span></a> <a href="#"  class="deletebtn<?php echo $rowArray['id'] ?>"><i class="material-icons dp48">delete</i></a><span></span>
					<input value="<?php echo $rowArray['id'] ?>" type="hidden" class="disVal<?php echo $rowArray['id'] ?>" /></td>
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
     data:{id:id,package:},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/delesub",
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
				  
				 
              </table>
</div>

</div>



<div class="about-area ptb-100">
<div class="container">
<div class="row align-items-center">









