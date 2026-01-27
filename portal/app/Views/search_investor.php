<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
              
            <?php
            
                // $rowArray = $this->admin_model->getAllInvestorNByEmail($email); 
            	$row = $this->admin_model->matchAllInvestor($Industry_Focus,$Investor_Name,$Min_Cheque); 
            if(!empty($row)){
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArray){  
    //if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr class="data">
                  <td><div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_investor_details/<?php echo $rowArray['Investor_ID']; ?>" class="btn btn-dark" >   <span class="fw-bolder me-1">Connect Investor</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div></td>
                  <td>

                    <div class="d-flex align-items-center">
                     <div class="avatar-content">
                          <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="mentor photo" height="40" width="40" class="flex-shrink-0 rounded-circle me-3" />
                        </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Investor_Name'] ; ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="monitor" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['Industry_Focus']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex align-items-center">
                    <div class="avatar bg-light-success me-1">
                        <div class="avatar-content">
                          <i data-feather="file" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span class="fw-bolder mb-25">$<?php echo $rowArray['Min_Cheque']; ?></span>-
                      <span class="fw-bolder mb-25">$<?php echo $rowArray['Max_Cheque']; ?></span>
                    </div>
                  </td>
                  
                </tr>
                <?php }}else{ echo 'Oops! Search not found';} ?>
       
              