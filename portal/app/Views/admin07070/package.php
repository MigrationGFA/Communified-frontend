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
<span class="sp-color2"></span>
<h2>Subscription</h2>

<table id="page-length-option" class="display table">
                <thead>
				
                  <tr>
                    <th>S/no</th>
                    <th>Email</th>
                    <th>Subcription</th>
                    <th>Date</th>
                    <th>Action</th>
                  </tr>
				  
				  
                </thead>
                <tbody>
				
				<?php 
				$n = 1;
				$row = $this->admin_model->getAllUsersPay();  foreach($row as $rowArray){  ?>
                  <tr class="myTable<?php //echo $rowArray['id'] ?>">
				  
                    <td><?php echo $n++ ?></td>
                    <td><?php echo $rowArray['email']; ?> </td>
                    <td>Amount: <?php echo $rowArray['amount'] ?>
                    <br>Package:
                    <?php echo $rowArray['package1'] ?>
                    <?php echo $rowArray['package2'] ?>
                    <?php echo $rowArray['package3'] ?>
                    Status:<?php echo $rowArray['status'] ?> 
                    </td>
                    
                    <td><?php echo date("l",strtotime($rowArray['time_submit']))." ".date("d/M/Y h:iA",strtotime($rowArray['time_submit'])) ?></td>
                    <td class="display<?php echo $rowArray['id'] ?>"><a href="<?php //echo base_url(); ?>admin/admin_account_edit/<?php echo $rowArray['ref_id'] ?>"><i class="material-icons dp48"><!--edit--></i><span></span></a> &nbsp; &nbsp; 
                    <a href="#"  class="deletebtn<?php echo $rowArray['id'] ?>"><i class="material-icons dp48">delete</i></a><span></span><input value="<?php echo $rowArray['ref_id'] ?>" type="hidden" class="disVal<?php echo $rowArray['id'] ?>" /></td>
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
     data:{id:id},
     type: "POST",
     url: "<?php echo base_url(); ?>admin/admin_pay",
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









