<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
              
            <?php
            
                // $rowArray = $this->admin_model->getAllInvestorNByEmail($email); 
            	$row = $this->admin_model->matchAllMentor($Industry,$Mentor_name,$Mentor_focus); 
            if(!empty($row)){
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArray){  
    //if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_mentor_details/<?php echo $rowArray['Mentor_ID']; ?>" class="btn btn-dark" >   <span class="fw-bolder me-1"><?php echo lang('translation.Connect Mentor') ?></span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="mentor photo" height="40" width="40" class="flex-shrink-0 rounded-circle me-3" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Mentor_name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Company'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="check-circle" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['Industry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                    <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="users" class="font-medium-3"></i>
                        </div>
                      </div>
                    <!-- <div class="d-flex flex-column"> -->
                      <span class="fw-bolder mb-25"><?php echo lang("translation.{$rowArray['Mentors_focus']}") ; ?></span>
                      
                    </div>
                  </td>
                 
                  
                </tr>
                <?php }}else{ echo lang('translation.Oops! Search not found');} ?>
       
              