<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <?php
  $getRef =  $getTaskTitle[0]['ref_id'];
  $getQuizQuestionData = $this->gfa_model->getTaskQuestion($getRef);
  ?>
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"><?php echo ucwords($getTaskTitle[0]['title']) ?></span>
</h4>

 <?php if($quiz_attempted ==1){ ?> 
 <h4>You have attempted this assessment.</h4>
 <div class="card my-2 p-3 text-center">
            <div class="card-body">
                
                <a class="btn btn-primary backBtn" href="#">Back to learning</a 
            </div>
          </div>  
          <?php }else{  ?>
          <h5 class="text-light fw-medium">Total Questions: <?php echo $this->gfa_model->countTaskQuestions($getRef) ?></h5>
<div class="row">
<form class="EventForm"  method="post" action="#"  enctype="multipart/form-data" >

  <!-- Default Checkboxes and radios & Default checkboxes and radios -->
  <?php 
  
       
        $ques_no = 1;
        foreach($getQuizQuestionData as $getQuizQuestion){
        
  ?>
   
  <div class="col-xl-10">

    <div class="card mb-2">
      <h5 class="card-header">[<?php echo $ques_no++ ?>] <?php echo ucwords($getQuizQuestion['question']) ?></h5>
      <!-- Checkboxes and Radios -->
      
      <hr class="m-0" />
      <!-- Inline Checkboxes -->
     
        
        <div class="col-md p-4">
          <textarea class="form-control char-textarea" required rows="3" style="height: 100px" name="ans[]"></textarea> 
          
        </div>
      
     
      <!-- Checkboxes & Radio Colors -->
     
    </div>

    

  </div>
<?php  }  ?>
<input type="hidden" class="ref_id getRef" name="ref_id" value="<?php echo $getRef; ?>">
<div class="col-6">
                
        <a href="#" class="btn btn-success mb-2" style="display: none;">Back</a>
        <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
  
          </form>
</div>
<?php } ?>
            
          </div>
        
        <script>
 		$(function(){
         $('.btn-success, .backBtn').on('click', function(e) {
                // Go back in the browser history
           e.preventDefault();
                history.back();
            });
        
         $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
          var choice = confirm('Do you really want to submit your answwers? Note: You can only submit once.');
    if(choice === true) {
       
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/taskpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Submitting Task...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   $(".continue").show(); 
		 $(".EventBtn").prop('disabled', true);
     



      }
    });
    }
   
    return false;

  });
    });    
</script>