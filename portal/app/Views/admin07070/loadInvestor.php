<?php	$rowArray = $this->admin_model->getAllStartUpNById($id);  ?>
<h4><?php echo $rowArray[0]['Primary_Contact_Name'] ; ?>
                    [<?php echo $rowArray[0]['Startup_Company_Name'] ; ?>]</h4>
<br>
<table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                     <th>S/no</th>
                  <th>Contact Name</th>
                  <th>Industries</th>
                  
				  <th>Investment Stage Focus</th>
				  <th>Regional_focus</th>
                  <th>Min Cheque</th>
                  <th>Max Cheque</th>
                 
                </tr>
                </thead>
				<tbody class="showInvestor">
				<?php 
			    $n = 1;
				$row = $this->admin_model->MatchInvestorDefault($rowArray[0]['PrimaryBusinessIndustry'],$rowArray[0]['CurrentInvestmentStage'],$rowArray[0]['Startup_Implementation_Stage'],$rowArray[0]['Next_Funding_Round_Target_Sought'],$rowArray[0]['CountryHQ']);  
				
				foreach($row as $rowArray){  
					
				
				?>
                  <tr>
				  
                    <td>
                    <?php echo $n++; ?>
                    </td>
                    <td><?php echo $rowArray['Contact_Name'] ; ?><br>
                    <?php echo $rowArray['Investor_Name'] ; ?>
                    </td>
                     
                    <td>
                    <?php echo str_replace("?","",$rowArray['Industry_Focus']); ?>
                    </td>
                    

					
                    <td>
                    <?php echo $rowArray['Investment_Stage_Focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Regional_focus']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Min_Cheque']; ?>
                    </td>
                    <td>
                    <?php echo $rowArray['Max_Cheque']; ?>
                    </td>
                    
                    
                  </tr>
				
                  <?php } ?>

				
				</tbody>
                
                <tfoot>
                 </tfoot>
              </table>