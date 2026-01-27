
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="normalMultiSelect">Industry</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Industry</label>-->
              
               <select class="select2 form-select" name="industry[]" id="select2-multiple" multiple>
              
                <?php  $IndustryArray = explode(",",$this->gfa_model->getStartUpDetails($email)[0]['PrimaryBusinessIndustry']); ?>
                 <?php if(!empty($IndustryArray[0])){  ?>
                 <option value="<?php echo $IndustryArray[0];  ?>" selected><?php echo $IndustryArray[0]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[1])){  ?>
                 <option value="<?php echo $IndustryArray[1];  ?>" selected><?php echo $IndustryArray[1]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($IndustryArray[2])){  ?>
                 <option value="<?php echo $IndustryArray[2];  ?>" selected><?php echo $IndustryArray[2]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
			  <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                  <option><?php echo $rowArrayIndustry["industry"] ?></option>
                  <?php }  ?>
              </select>
            </div>
          <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Date Founded</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Date Founded</label>-->
              
              <input type="date" class="form-control" id="accountAddress" name="year_founded" placeholder="Year Founded" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Date_Founded'];  ?>" />
            </div>
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Current Stage</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Current Stage</label>-->
              
              <select id="country" name="current_stage" class="select2 form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['CurrentInvestmentStage'];  ?></option>
             <?php	$rowIndustry = $this->admin_model->getInvestmentStage();  foreach($rowIndustry as $rowArrayIndustry){  ?>
              <option value="<?php echo $rowArrayIndustry["Stages"] ?>"><?php echo $rowArrayIndustry["Stages"] ?></option>
                  <?php }  ?>
                  
                  </select>
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Implementation Stage</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Implementation Stage</label>-->
              
              <select id="country" name="Implementation_stage" class="select2 form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Startup_Implementation_Stage'];  ?></option>
             <?php $rowIS = $this->admin_model->implementationStage();  foreach($rowIS as $implementStage){  ?>
                  <option value="<?php echo $implementStage['Stages'] ?>"><?php echo $implementStage['Stages'] ?></option>
                  <?php }  ?>
                 </select>  
            </div>
            <div class="col-12 col-sm-6 mb-1">
             <label class="form-label" for="country">Operation Region</label>
             <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Operation Region</label>-->
              
              <select name="OperatingRegions" id="country" class="select2 form-select">
                  <option value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Revenue'];  ?>"><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Revenue'];  ?></option>
            <?php $row = $this->admin_model->getAllAfricaRegions();  foreach($row as $getAllAfricaRegions){  ?>
            
                  <option value="<?php echo $getAllAfricaRegions['region'] ?>"><?php echo $getAllAfricaRegions['region'] ?></option>
                  <?php }  ?>
             </select> 
             </div>
              	<div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="country">What country is your startup located in</label>
              <select name="startup_country" id="country" class="form-select">
                <option value="<?php echo $country ?>"><?php echo ucfirst($country) ?></option>
    <option value="Afghanistan">Afghanistan</option>
<option value="Albania">Albania</option>
<option value="Algeria">Algeria</option>
<option value="American Samoa">American Samoa</option>
<option value="Andorra">Andorra</option>
<option value="Angola">Angola</option>
<option value="Anguilla">Anguilla</option>
<option value="Antartica">Antarctica</option>
<option value="Antigua and Barbuda">Antigua and Barbuda</option>
<option value="Argentina">Argentina</option>
<option value="Armenia">Armenia</option>
<option value="Aruba">Aruba</option>
<option value="Australia">Australia</option>
<option value="Austria">Austria</option>
<option value="Azerbaijan">Azerbaijan</option>
<option value="Bahamas">Bahamas</option>
<option value="Bahrain">Bahrain</option>
<option value="Bangladesh">Bangladesh</option>
<option value="Barbados">Barbados</option>
<option value="Belarus">Belarus</option>
<option value="Belgium">Belgium</option>
<option value="Belize">Belize</option>
<option value="Benin">Benin</option>
<option value="Bermuda">Bermuda</option>
<option value="Bhutan">Bhutan</option>
<option value="Bolivia">Bolivia</option>
<option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
<option value="Botswana">Botswana</option>
<option value="Bouvet Island">Bouvet Island</option>
<option value="Brazil">Brazil</option>
<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
<option value="Brunei Darussalam">Brunei Darussalam</option>
<option value="Bulgaria">Bulgaria</option>
<option value="Burkina Faso">Burkina Faso</option>
<option value="Burundi">Burundi</option>
<option value="Cambodia">Cambodia</option>
<option value="Cameroon">Cameroon</option>
<option value="Canada">Canada</option>
<option value="Cape Verde">Cape Verde</option>
<option value="Cayman Islands">Cayman Islands</option>
<option value="Central African Republic">Central African Republic</option>
<option value="Chad">Chad</option>
<option value="Chile">Chile</option>
<option value="China">China</option>
<option value="Christmas Island">Christmas Island</option>
<option value="Cocos Islands">Cocos (Keeling) Islands</option>
<option value="Colombia">Colombia</option>
<option value="Comoros">Comoros</option>
<option value="Congo">Congo</option>
<option value="Congo">Congo, the Democratic Republic of the</option>
<option value="Cook Islands">Cook Islands</option>
<option value="Costa Rica">Costa Rica</option>
<option value="Cota D'Ivoire">Cote d'Ivoire</option>
<option value="Croatia">Croatia (Hrvatska)</option>
<option value="Cuba">Cuba</option>
<option value="Cyprus">Cyprus</option>
<option value="Czech Republic">Czech Republic</option>
<option value="Denmark">Denmark</option>
<option value="Djibouti">Djibouti</option>
<option value="Dominica">Dominica</option>
<option value="Dominican Republic">Dominican Republic</option>
<option value="East Timor">East Timor</option>
<option value="Ecuador">Ecuador</option>
<option value="Egypt">Egypt</option>
<option value="El Salvador">El Salvador</option>
<option value="Equatorial Guinea">Equatorial Guinea</option>
<option value="Eritrea">Eritrea</option>
<option value="Estonia">Estonia</option>
<option value="Ethiopia">Ethiopia</option>
<option value="Falkland Islands">Falkland Islands (Malvinas)</option>
<option value="Faroe Islands">Faroe Islands</option>
<option value="Fiji">Fiji</option>
<option value="Finland">Finland</option>
<option value="France">France</option>
<option value="France Metropolitan">France, Metropolitan</option>
<option value="French Guiana">French Guiana</option>
<option value="French Polynesia">French Polynesia</option>
<option value="French Southern Territories">French Southern Territories</option>
<option value="Gabon">Gabon</option>
<option value="Gambia">Gambia</option>
<option value="Georgia">Georgia</option>
<option value="Germany">Germany</option>
<option value="Ghana">Ghana</option>
<option value="Gibraltar">Gibraltar</option>
<option value="Greece">Greece</option>
<option value="Greenland">Greenland</option>
<option value="Grenada">Grenada</option>
<option value="Guadeloupe">Guadeloupe</option>
<option value="Guam">Guam</option>
<option value="Guatemala">Guatemala</option>
<option value="Guinea">Guinea</option>
<option value="Guinea-Bissau">Guinea-Bissau</option>
<option value="Guyana">Guyana</option>
<option value="Haiti">Haiti</option>
<option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
<option value="Holy See">Holy See (Vatican City State)</option>
<option value="Honduras">Honduras</option>
<option value="Hong Kong">Hong Kong</option>
<option value="Hungary">Hungary</option>
<option value="Iceland">Iceland</option>
<option value="India">India</option>
<option value="Indonesia">Indonesia</option>
<option value="Iran">Iran (Islamic Republic of)</option>
<option value="Iraq">Iraq</option>
<option value="Ireland">Ireland</option>
<option value="Israel">Israel</option>
<option value="Italy">Italy</option>
<option value="Jamaica">Jamaica</option>
<option value="Japan">Japan</option>
<option value="Jordan">Jordan</option>
<option value="Kazakhstan">Kazakhstan</option>
<option value="Kenya">Kenya</option>
<option value="Kiribati">Kiribati</option>
<option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
<option value="Korea">Korea, Republic of</option>
<option value="Kuwait">Kuwait</option>
<option value="Kyrgyzstan">Kyrgyzstan</option>
<option value="Lao">Lao People's Democratic Republic</option>
<option value="Latvia">Latvia</option>
<option value="Lebanon">Lebanon</option>
<option value="Lesotho">Lesotho</option>
<option value="Liberia">Liberia</option>
<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
<option value="Liechtenstein">Liechtenstein</option>
<option value="Lithuania">Lithuania</option>
<option value="Luxembourg">Luxembourg</option>
<option value="Macau">Macau</option>
<option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
<option value="Madagascar">Madagascar</option>
<option value="Malawi">Malawi</option>
<option value="Malaysia">Malaysia</option>
<option value="Maldives">Maldives</option>
<option value="Mali">Mali</option>
<option value="Malta">Malta</option>
<option value="Marshall Islands">Marshall Islands</option>
<option value="Martinique">Martinique</option>
<option value="Mauritania">Mauritania</option>
<option value="Mauritius">Mauritius</option>
<option value="Mayotte">Mayotte</option>
<option value="Mexico">Mexico</option>
<option value="Micronesia">Micronesia, Federated States of</option>
<option value="Moldova">Moldova, Republic of</option>
<option value="Monaco">Monaco</option>
<option value="Mongolia">Mongolia</option>
<option value="Montserrat">Montserrat</option>
<option value="Morocco">Morocco</option>
<option value="Mozambique">Mozambique</option>
<option value="Myanmar">Myanmar</option>
<option value="Namibia">Namibia</option>
<option value="Nauru">Nauru</option>
<option value="Nepal">Nepal</option>
<option value="Netherlands">Netherlands</option>
<option value="Netherlands Antilles">Netherlands Antilles</option>
<option value="New Caledonia">New Caledonia</option>
<option value="New Zealand">New Zealand</option>
<option value="Nicaragua">Nicaragua</option>
<option value="Niger">Niger</option>
<option value="Nigeria">Nigeria</option>
<option value="Niue">Niue</option>
<option value="Norfolk Island">Norfolk Island</option>
<option value="Northern Mariana Islands">Northern Mariana Islands</option>
<option value="Norway">Norway</option>
<option value="Oman">Oman</option>
<option value="Pakistan">Pakistan</option>
<option value="Palau">Palau</option>
<option value="Panama">Panama</option>
<option value="Papua New Guinea">Papua New Guinea</option>
<option value="Paraguay">Paraguay</option>
<option value="Peru">Peru</option>
<option value="Philippines">Philippines</option>
<option value="Pitcairn">Pitcairn</option>
<option value="Poland">Poland</option>
<option value="Portugal">Portugal</option>
<option value="Puerto Rico">Puerto Rico</option>
<option value="Qatar">Qatar</option>
<option value="Reunion">Reunion</option>
<option value="Romania">Romania</option>
<option value="Russia">Russian Federation</option>
<option value="Rwanda">Rwanda</option>
<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
<option value="Saint LUCIA">Saint LUCIA</option>
<option value="Saint Vincent">Saint Vincent and the Grenadines</option>
<option value="Samoa">Samoa</option>
<option value="San Marino">San Marino</option>
<option value="Sao Tome and Principe">Sao Tome and Principe</option> 
<option value="Saudi Arabia">Saudi Arabia</option>
<option value="Senegal">Senegal</option>
<option value="Seychelles">Seychelles</option>
<option value="Sierra">Sierra Leone</option>
<option value="Singapore">Singapore</option>
<option value="Slovakia">Slovakia (Slovak Republic)</option>
<option value="Slovenia">Slovenia</option>
<option value="Solomon Islands">Solomon Islands</option>
<option value="Somalia">Somalia</option>
<option value="South Africa">South Africa</option>
<option value="South Georgia">South Georgia and the South Sandwich Islands</option>
<option value="Span">Spain</option>
<option value="SriLanka">Sri Lanka</option>
<option value="St. Helena">St. Helena</option>
<option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
<option value="Sudan">Sudan</option>
<option value="Suriname">Suriname</option>
<option value="Svalbard">Svalbard and Jan Mayen Islands</option>
<option value="Swaziland">Swaziland</option>
<option value="Sweden">Sweden</option>
<option value="Switzerland">Switzerland</option>
<option value="Syria">Syrian Arab Republic</option>
<option value="Taiwan">Taiwan, Province of China</option>
<option value="Tajikistan">Tajikistan</option>
<option value="Tanzania">Tanzania, United Republic of</option>
<option value="Thailand">Thailand</option>
<option value="Togo">Togo</option>
<option value="Tokelau">Tokelau</option>
<option value="Tonga">Tonga</option>
<option value="Trinidad and Tobago">Trinidad and Tobago</option>
<option value="Tunisia">Tunisia</option>
<option value="Turkey">Turkey</option>
<option value="Turkmenistan">Turkmenistan</option>
<option value="Turks and Caicos">Turks and Caicos Islands</option>
<option value="Tuvalu">Tuvalu</option>
<option value="Uganda">Uganda</option>
<option value="Ukraine">Ukraine</option>
<option value="United Arab Emirates">United Arab Emirates</option>
<option value="United Kingdom">United Kingdom</option>
<option value="United States">United States</option>
<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
<option value="Uruguay">Uruguay</option>
<option value="Uzbekistan">Uzbekistan</option>
<option value="Vanuatu">Vanuatu</option>
<option value="Venezuela">Venezuela</option>
<option value="Vietnam">Viet Nam</option>
<option value="Virgin Islands (British)">Virgin Islands (British)</option>
<option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
<option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
<option value="Western Sahara">Western Sahara</option>
<option value="Yemen">Yemen</option>
<option value="Serbia">Serbia</option>
<option value="Zambia">Zambia</option>
<option value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>
            
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Funding to raise ($)</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Funding to Raise ($)</label>-->
              
              <input type="number" class="form-control" id="accountAddress" name="fund_to_raise" placeholder="Funding to raise" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];  ?>" />
            </div>
             <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Annual Revenue</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Annual Revenue</label>-->
              <input type="text" class="form-control" id="accountAddress" name="revenue" placeholder="Annual Revenue" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Revenue'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">No of Employees</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* No of Employees</label>-->
              <input type="number" class="form-control" id="accountAddress" name="NoOfEmployees" placeholder="No of Employees" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['NoOfEmployees'];  ?>" />
            </div>
           <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Website Url</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Website Url</label>-->
              <input type="text" class="form-control" id="accountAddress" name="website" placeholder="website" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Website'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">LinkedIn Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="linkedIn" placeholder="LinkedIn Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['LinkedIn'];  ?>" />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Facebook Profile</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Facebook Profile</label>-->
              <input type="text" class="form-control" id="accountAddress" name="facebook" placeholder="Facebook Profile ID" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Facebook'];  ?>" />
            </div>
            
            <div class="col-12 col-sm-6 mb-1">
                
              <label class="form-label" for="normalMultiSelect">What areas you’d like mentorship? Select Minimum of 3</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* What areas you’d like mentorship? Select Minimum of 3</label>-->
             
              <select id="select2-limited" name="mentorship[]" multiple class="select2 form-control form-select userRequest_activity">
                  <?php  $mentorArray = explode(",",$this->gfa_model->getStartUpDetails($email)[0]['Mentorship']); ?>
                 <?php if(!empty($mentorArray[0])){  ?>
                 <option value="<?php echo $mentorArray[0];  ?>" selected><?php echo $mentorArray[0]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($mentorArray[1])){  ?>
                 <option value="<?php echo $mentorArray[1];  ?>" selected><?php echo $mentorArray[1]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                <?php if(!empty($mentorArray[2])){  ?>
                 <option value="<?php echo $mentorArray[2];  ?>" selected><?php echo $mentorArray[2]  ?></option>     
                      
                <?php  }else{ echo ''; }  ?>
                 
                   <option value="Business development">Business Development</option>
                   <option value="Financial management">Financial Management</option>
                    <option value="Marketing">Marketing</option>
                     <!--<option value="Employee management">Employee management</option>-->
                     <!-- <option value="Business Operations – legal, supply chain etc">Business Operations – legal, supply chain etc</option>-->
                     <!--  <option value="Managing Growth Effectively">Managing Growth Effectively</option>-->
                     <!--  <option value="Executive Coaching for Entrepreneurs">Executive Coaching for Entrepreneurs </option>-->
                       
                
                 </select>  
                 <span class="selectError"></span>
            </div>  
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Tell us a little about your product, services or idea? </label>
               <!--<label class="form-label" for="accountAddress" style="color:#ff0000;">Tell us a little about your product, services or idea? </label>-->
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="About yourself"
                  style="height: 100px"
				  name="about"
                ><?php echo $this->gfa_model->getStartUpDetails($email)[0]['Investment_History'];  ?></textarea>
            </div>
<?php            
            
            	public function startupProfilepro()

	{
		
		
		
		$name = $this->input->post("firstName")." ".$this->input->post("lastName");
		$organization = $this->input->post("organization");
		$phoneNumber = $this->input->post("phoneNumber");
		$address = $this->input->post("address");
		$website = $this->input->post("website");
		$startup_country = $this->input->post("startup_country");
		$industryArray = $this->input->post("industry");
		$current_stage = $this->input->post("current_stage");
		$Implementation_stage = $this->input->post("Implementation_stage");
		$fund_to_raise = $this->input->post("fund_to_raise");
		$about = $this->input->post("about");
		$facebook = $this->input->post("facebook");
		$linkedIn = $this->input->post("linkedIn");
		$country = $this->input->post("country");
		$state = $this->input->post("state");
		$zipCode = $this->input->post("zipCode");
		$year_founded = $this->input->post("year_founded");
		$Revenue = $this->input->post("revenue");
		$NoOfEmployees = $this->input->post("NoOfEmployees");
		$Hear_Us = $this->input->post("Hear_Us");
		$OperatingRegions = $this->input->post("OperatingRegions");
		$time = date("Y-m-d h:i:s A",time());
		$mentorshipArray = $this->input->post("mentorship");
        $mentorship = implode(",",$mentorshipArray);
        $industry = implode(",", $industryArray);
		
		        $data_startup	= 	array(

					'Startup_Company_Name' 	=> $organization,
					'Primary_Contact_Name' 	=> $name,
					'Contact_Email' 	=> $email,
					'Phones' 	=> $phoneNumber,
					'Website' 	=> $website,
					'Address' 	=> $address,
					'CountryHQ' 	=> $startup_country,
					'PrimaryBusinessIndustry' 	=> $industry,
					'CurrentInvestmentStage' 	=> $current_stage,
					'Startup_Implementation_Stage' 	=> $Implementation_stage,
					'Next_Funding_Round_Target_Sought' 	=> $fund_to_raise,
					'Investment_History' 	=> $about,
					'Facebook' 	=> $facebook,
					'LinkedIn' 	=> $linkedIn,
					'Country' 	=> $country,
					'State' 	=> $state,
					'ZipCode' 	=> $zipCode,
					'Date_Founded' 	=> $year_founded,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'OperatingRegions' 	=> $OperatingRegions,
					'Revenue' 	=> $Revenue,
					'Hear_Us' 	=> $Hear_Us,
					'mentorship' 	=> $mentorship
					
				
					);
				$data_startup_update	= 	array(

					'Startup_Company_Name' 	=> $organization,
					'Primary_Contact_Name' 	=> $name,
					'Phones' 	=> $phoneNumber,
					'Website' 	=> $website,
					'Address' 	=> $address,
					'CountryHQ' 	=> $startup_country,
					'PrimaryBusinessIndustry' 	=> $industry,
					'CurrentInvestmentStage' 	=> $current_stage,
					'Startup_Implementation_Stage' 	=> $Implementation_stage,
					'Next_Funding_Round_Target_Sought' 	=> $fund_to_raise,
					'Investment_History' 	=> $about,
					'Facebook' 	=> $facebook,
					'LinkedIn' 	=> $linkedIn,
					'Country' 	=> $country,
					'State' 	=> $state,
					'ZipCode' 	=> $zipCode,
					'Date_Founded' 	=> $year_founded,
					'NoOfEmployees' 	=> $NoOfEmployees,
					'OperatingRegions' 	=> $OperatingRegions,
					'Revenue' 	=> $Revenue,
					'Hear_Us' 	=> $Hear_Us,
					'mentorship' 	=> $mentorship
				
					);
				
				if($this->gfa_model->getStartUpDetails($email)[0]['Contact_Email']==""){
				   $this->gfa_model->insertStartupProfile($data_startup); 
				}else{
				   $this->gfa_model->saveStartupProfile($email,$data_startup_update); 
				}
				
				
				
			
  
	
	}
	
	?>