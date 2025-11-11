
              
            <?php
            
                // $rowArray = $this->admin_model->getAllInvestorNByEmail($email);
            	$row = $this->admin_model->MatchAllStartup($PrimaryBusinessIndustry,$CurrentInvestmentStage,$Startup_Implementation_Stage,$CountryHQ, $Next_Funding_Round_Target_Sought); 
            if(!empty($row)){
              $n = 1;
              $s = 1;	
              $count = 0;
            	foreach($row as $rowArrays){  
    if($rowArrays['PrimaryBusinessIndustry'] !='' && $rowArrays['CountryHQ'] !='' && $rowArrays['CurrentInvestmentStage'] !='' && $rowArrays['Next_Funding_Round_Target_Sought'] !='' && $rowArrays['Startup_Implementation_Stage']!=''){
      $count += $n;
            ?>
                <tr class="data">
                <td>
                    <!-- <div class="d-flex align-items-center">
                      <span class="fw-bolder me-1">%</span>
                     
                   <i data-feather="trending-up" class="text-success font-medium-1"></i> &nbsp;        
                    
                      <i data-feather="trending-down" class="text-danger font-medium-1"></i> &nbsp; 
                      </div> -->
                      <a href="<?php echo base_url(); ?>gfa/checkConnection_url/<?php echo $rowArrays['STUP_ID'] ; ?>" class="btn btn-primary getStartups">Connect <span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></a>
                    
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
                  <td>$<?php if($rowArrays['Next_Funding_Round_Target_Sought']=='0' || $rowArrays['Next_Funding_Round_Target_Sought']==''){ echo 0; }else{ echo $rowArrays['Next_Funding_Round_Target_Sought'] ;} ?></td>
                  
                </tr>
                <?php }else{ echo '';} }}else{ echo 'Oops! Search not found';} ?>
       
              