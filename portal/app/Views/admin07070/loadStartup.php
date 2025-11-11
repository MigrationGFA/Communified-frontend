<?php	$rowArray = $this->admin_model->getAllInvestorNById($id);  ?>
<h4><?php echo $rowArray[0]['Contact_Name'] ; ?>
                    [<?php echo $rowArray[0]['Investor_Name'] ; ?>]</h4>
<br> 
 
 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>S/no</th>
                  <th>Contact/Company Name</th>
                  <th>Industry</th>
                  
				  <th>Current Investment Stage</th>
				  <th>Current Implementation Stage</th>
                  <th>Operating Country(ies)</th>
                  <th>Funding Goals</th>
                  
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			     $n = 1;
				$row = $this->admin_model->MatchStartupDefault($rowArray[0]['Industry_Focus'],$rowArray[0]['Investment_Stage_Focus'],$rowArray[0]['Implementation_Stage_Focus'],$this->admin_model->getCountryByRegion($rowArray[0]['Regional_focus'])[0]['country'],$rowArray[0]['Min_Cheque']);
				
				foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                   <td>
                    <?php echo $n++; ?>
                    </td>
                    <td><strong><?php echo $rowArray['Primary_Contact_Name'] ; ?></strong><br>
                    <?php echo $rowArray['Startup_Company_Name'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['PrimaryBusinessIndustry']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['CurrentInvestmentStage']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Startup_Implementation_Stage']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['CountryHQ']; ?>
                    </td>
                    <td>
                    
                    <strong>$ </strong><?php echo $rowArray['Next_Funding_Round_Target_Sought']; ?><br>
                    
                    </td>
                    <td>
                    
                 
                    
                    </td>
                  </tr>
				
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>