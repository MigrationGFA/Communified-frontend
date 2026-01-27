
                <?php
                
                $startupArray = $this->admin_model->getAllStartUpNByEmail($email);
                $rowArrayM = $this->admin_model->getAllStartUpNByEmail($email); 
                $Need_location = $rowArrayM[0]['CountryHQ'];
            // if(!empty($industry)){
            //   $row = $this->admin_model->MatchCorperateByIndustry($industry);
            // }else{
                
            //     echo "No data found";
            // }
            
            // if(!empty($service)){
            //      $row = $this->admin_model->MatchCorperateByIndustry($service);
            // }else{
            //     echo "";
            // }
            
            foreach($industry as $key=>$value){
                
             $row = $this->admin_model->MatchCorperateByIndustry($industry[$key], $Need_location);
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
                        <div class="fw-bolder"><?php echo $rowArray['Key_contact_name'] ; ?></div>
                        <div class="font-small-2 text-muted"><?php echo $rowArray['Corporate_Name'] ; ?></div>
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
                      <span><?php echo str_replace("?","",$rowArray['Business_need_support']); ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['Need_locations']; ?></span>
                      
                    </div>
                  </td>
                  <td><?php echo $rowArray['Partner_startup_stage']; ?></td>
                  <td>
                    <div class="d-flex align-items-center">
                  <a href="<?php echo base_url(); ?>gfa/startup_corperate_details/<?php echo $rowArray['Corporate_ID']; ?>" >   <span class="fw-bolder me-1">Connect</span>
                      <i data-feather="trending-up" class="text-success font-medium-1"></i></a>
                    </div>
                  </td>
                </tr>
                <?php } }  ?>
                