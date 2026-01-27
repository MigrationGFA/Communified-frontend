<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
              
            <?php
            
                // $rowArray = $this->admin_model->getAllInvestorNByEmail($email); 
            	$row = $this->admin_model->matchAllMentorStartup($PrimaryBusinessIndustry,$Mentorship,$Startup_Implementation_Stage); 
            if(!empty($row)){
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArrays){  
    //if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr class="data">
                <td>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                          <i class="fa fa-bars"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                          <li><a class="dropdown-item" href="<?php echo base_url(); ?>gfa/checkMentorConnection_url/<?php echo $rowArrays['STUP_ID'] ; ?>"><?php echo lang('translation.Profile') ?></a></li>
                          <li><a class="dropdown-item getStartup btn btn-primary" href="<?php echo base_url(); ?>gfa/mentor_startup_details/<?php echo $rowArrays['STUP_ID'] ; ?>"><?php echo lang('translation.Send Message') ?><span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></span></a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url(); ?>calendar/index"><?php echo lang('translation.Schedule meeting') ?></a></li>
                          <li><a class="dropdown-item" href="<?php echo base_url(); ?>chat/index"><?php echo lang('translation.Chat') ?></a></li>
                        </ul>
                      </div>
                     
                    
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArrays['Primary_Contact_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArrays['Startup_Company_Name'] ; ?></div>
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
                      <span><?php echo $rowArrays['PrimaryBusinessIndustry'] ; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArrays['CountryHQ'] ; ?></span>
                      <!--<span class="font-small-2 text-muted">in 24 hours</span>-->
                    </div>
                  </td>
                  <td><?php if($rowArrays['Next_Funding_Round_Target_Sought']=='0' || $rowArrays['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $rowArrays['Next_Funding_Round_Target_Sought'] ;} ?> $</td>
                  
                </tr>
                <?php }}else{ echo 'Oops! Search not found';} ?>
       
              