 <?php
                if($searchJobs==""){
                     
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                $row = $this->admin_model->MatchCandidate($rowArrayM[0]['CountryHQ'], $rowArrayM[0]['PrimaryBusinessIndustry']);
                }else{
                $row = $this->admin_model->getAllJobsBySearch($searchJobs); 
                }
                
				foreach($row as $rowArray){  
                
                ?> 
             
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                          <img src="https://pixinvent.com/demo/vuexy-html-bootstrap-admin-template/app-assets/images/icons/toolbox.svg" alt="Toolbar svg" />
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['fname']." ".$rowArray['lname'] ; ?></div>
                         <div class="font-small-2 text-muted">Job Experience: <?php echo $rowArray['yr_exp'] ; ?>yr(s)</div>
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
                      <span><?php echo str_replace("?","",$rowArray['industry']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['state'].",".$rowArray['country']; ?></span>
                      
                    </div>
                  </td>
     
                  <td>
                    <div class="d-flex align-items-center">
                
                <a href="<?php echo base_url(); ?>gfa/startup_hire_details/<?php echo $rowArray['id']; ?>" >   <span class="fw-bolder me-1">Check Profile</span></a>
                

                  
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                </tr>
                <?php   }  ?>