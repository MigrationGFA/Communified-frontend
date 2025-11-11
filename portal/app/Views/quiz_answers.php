
<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
<div class="container-xxl flex-grow-1 container-p-y">
  <?php
  $getRef =  $getQuizTitle[0]['ref_id'];
  $getQuizQuestionData = $this->gfa_model->getQuizQuestion($getRef);
  ?>
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light"><?php echo ucwords($getQuizTitle[0]['title']) ?></span>
</h4>

 <?php if($quiz_attempted < 1){ ?> <h4>You have not attempted this assessment thrice</h4>
 <div class="card my-2 p-3 text-center">
            <div class="card-body">
                
                <a class="btn btn-primary" href="<?php echo base_url("gfa/dashboard") ?>">Back to learning</a 
            </div>
          </div>  <?php }else{  ?>
          <h5 class="text-light fw-medium">Answers</h5>
<div class="row">
<form action="#" method="post">

  <!-- Default Checkboxes and radios & Default checkboxes and radios -->
  <?php 
  
       
        $ques_no = 1;
        foreach($getQuizQuestionData as $getQuizQuestion){
        $getAnsJsonData = json_decode($getQuizQuestion['ans_json'], true);
  ?>
   
  <div class="col-xl-10">

    <div class="card mb-2">
      <h5 class="card-header">[<?php echo $ques_no++ ?>] <?php echo ucwords($getQuizQuestion['question']) ?></h5>
      <!-- Checkboxes and Radios -->
      
      <hr class="m-0" />
      <!-- Inline Checkboxes -->
     
        
        <div class="col-md p-4">
          <?php foreach($getAnsJsonData as $key => $value) { ?>
         
          <div class="form-check  mt-3">
             <?php if($value !=""){ ?>
            <input class="form-check-input" type="radio" name="answer[<?php echo $getQuizQuestion['qid'] ?>]" id="inlineRadio1" value="<?php echo $key ?>"
            <?php if ($getQuizQuestion['ans_id'] == $key) echo 'checked'; ?> />
            
            <label class="form-check-label" for="inlineRadio1"><?php echo $value ?> <?php if ($getQuizQuestion['ans_id'] == $key){ ?><span class="text-bg-success"><i class='ti ti-check ti-sm me-2 mt-n2'></i></span><?php }  ?></label>
          <?php }  ?>
          </div>
          <?php }  ?>
          
        </div>
      
     
      <!-- Checkboxes & Radio Colors -->
     
    </div>

    

  </div>
<?php  }  ?>
<input type="hidden" class="ref_id" name="ref_id" value="<?php echo $getRef; ?>">
<div class="col-6">
               <a class="btn btn-primary" href="<?php echo base_url("gfa/dashboard") ?>">Back to learning</a>
              </div>
  
          </form>
</div>
<?php } ?>
            
          </div>