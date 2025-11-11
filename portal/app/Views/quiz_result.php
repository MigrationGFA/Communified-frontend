<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4">
  <span class="text-muted fw-light">Quiz Result</span>
</h4>

<div class="row justify-content-center">
        <div class="col-md-8">
          <?php if ($quiz_attempted == 0) : ?>
            <div class="card my-2 p-3 text-center">
              <div class="card-body">
                <h5 class="card-title py-2 text-center">No Question Attempted</h5>
                <button class="btn btn-warning">You Score is : <?php echo $score; ?></button> 
              </div>
            </div>

          <?php else : ?>
            <div class="card my-2 p-3 text-center">
              <div class="card-body">
                <h5 class="card-title py-2 text-center">Assessment attempted: <?php echo $quiz_attempted; ?> out of 3 </h5>
                <button class="btn btn-warning">You Score: <?php echo $score; ?>%</button><span class="badge text-bg-secondary">
                    <?php if($score >=80){ echo "<i class='ti ti-check ti-sm me-2 mt-n2'></i> Good";}else{ echo "Failed: Pass Mark 80% and above"; }  ?>
                <span class="badge text-bg-primary">Questions attempted: <?php echo $attempted; ?> out of <?php echo $total_ques; ?></span>
              </div>
            </div>

          <?php endif ?>
         
          <div class="card my-2 p-3 text-center">
            <div class="card-body">
                <?php if($quiz_attempted >= 3 || $score >= 80){ ?> <a class="btn btn-info" href="<?php echo base_url("gfa/quiz_answers/{$ref_id}") ?>">Answers to Questions</a>   <?php }else{  ?>
                <a class="btn btn-info" href="<?php echo base_url("gfa/quiz/{$ref_id}") ?>">Reattempt Quiz</a> 
                 <?php }  ?>
                <a class="btn btn-primary" href="<?php echo base_url("gfa/dashboard") ?>">Back to learning</a> 
            </div>
          </div>
         
        </div>

      </div>

            
          </div>