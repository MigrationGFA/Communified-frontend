<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
              
            <?php
            
                // $rowArray = $this->admin_model->getAllInvestorNByEmail($email); 
            	$row = $this->admin_model->matchAllCorporate($Need_service,$Solution_Corperate); 
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
                
                <a href="<?php //echo base_url(); ?>startup_corperate_details/<?php echo $rowArray['Corporate_ID']; ?>" >   <span class="fw-bolder me-1 btn btn-dark" ><?php echo lang("translation.Connect") ?></span>
                 <!-- <a href="<?php echo base_url(); ?>gfa/calendar?e=<?php echo $rowArray['Need_contact_email'];  ?>" >   <span class="fw-bolder me-1">Schedule Meeting</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a> --> 
                
               
                  
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="<?php echo base_url(); ?>public/assets/images/uploads/default-avatar.jpg" alt="Toolbar svg" height="40" width="40"/>
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Key_contact_name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Corporate_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  
                  
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                    <div class="avatar bg-light-secondary me-1">
                        <div class="avatar-content">
                          <i data-feather="settings" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span class="fw-bolder mb-25"><?php echo lang("translation.{$rowArray['Need_service']}"); ?></span>
                      
                    </div>

                  </td>
     
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                    <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span class="fw-bolder mb-25"><?php echo lang("translation.{$rowArray['Solution_Corperate']}"); ?></span>
                      
                    </div>
                    
                  </td>
                </tr>
                <?php }}else{ echo lang("translation.Oops! Search not found") ;} ?>
       
              