 <?php
                 
                // $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                // $rowArray = $this->admin_model->getAllStartUpNByEmail($email); 
                $row = $this->admin_model->getInvestorsConnectionBySearch($email,$deals);
                if(!empty($row)){
				foreach($row as $rowArray){ 
				$personalDetails =  $this->admin_model->getAllStartUpNByEmail($rowArray['email_startup']);   
     	
			
                
                ?> 
                <tr>
                <td><a href="<?php echo base_url(); ?>gfa/investor_startup_details/<?php echo $personalDetails[0]['STUP_ID'] ; ?>" class="btn btn-primary getStartup">Profile<span style="display: none;"><?php echo $rowArrays['STUP_ID'] ?></a></td>
                
                <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/document/<?php echo $rowArray['id']; ?>" >   <span class="fw-bolder me-1">Agreement Info</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                  <td><?php echo $rowArray['status']; ?></td>
                     
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar rounded">
                        <div class="avatar-content">
                         
                        </div>
                      </div>
                      <div>
                        <div class="fw-bolder"><?php echo $personalDetails[0]['Startup_Company_Name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $personalDetails[0]['Primary_Contact_Name']; ?></div>
                      </div>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="clipboard" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['invest_type']); ?></span>
                    </div>
                  </td>
                  
                  
                  
                  <td>
                  <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="calendar" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo str_replace("?","",$rowArray['time_submit']); ?></span>
                    </div>  
                    </td>
                </tr>
                <?php }}else{ echo 'Oops! Search not found';}  ?>