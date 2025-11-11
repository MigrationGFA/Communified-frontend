<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $mentor_type = isset($_POST['mentor_type']) ? $_POST['mentor_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($mentor_type == 'gfa1agov6' || $mentor_type == 'gfa1bgov6' || $mentor_type == 'gfa1cgov6' || $mentor_type == 'gfa1dgov6' || $mentor_type == 'gfa1egov6'){
?>

<div class="col-md-12 col-12 gfa1aigov6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['mentor']['form-1']['head']; ?>
            </h4>
        </div>

        <div class="card-body">
            <form class="form form-vertical gfa1aigov6-funding" name="gfa1bi" onsubmit="gfa_reg_mentor('gfa1aigov6'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['mentor']['form-1']['name']['head']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-fname"
                                    placeholder="<?php echo $translations['mentor']['form-1']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1aigov6-lname"
                                    placeholder="<?php echo $translations['mentor']['form-1']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['gendar']['head']; ?><span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-gender" class="form-select" id="basicSelect" required>
                                <?php foreach($translations['mentor']['form-1']['gendar']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['mentor']['form-1']['email']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1aigov6-checkEmail"
                                    name="gfa1aigov6-email" placeholder="Email" onkeydown="checkEmail('gfa1aigov6', '18')" required />
                            </div>
                        </div>
                        <span class="gfa1aigov6-showData"></span>
                    </div>

                    <input type="hidden" name="gfa1aigov6-organisation-type" class="gfa1aigov6-organisation-type"
                        value="mentorship" />
                    <input type="hidden" name="gfa1aigov6-interest" class="gfa1aigov6-interest" />
                    <input type="hidden" name="gfa1aigov6-current-stage" class="gfa1aigov6-current-stage" />

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['mentor']['form-1']['mobile']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control"
                                    name="gfa1aigov6-mobile" placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['mentor']['form-1']['location']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1aigov6-country" class="form-select" id="basicSelect" required>
                                    <option>Select country</option>
                                    <option value="Afghanistan">
                                        Afghanistan
                                    </option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">
                                        American Samoa
                                    </option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antartica">
                                        Antarctica
                                    </option>
                                    <option value="Antigua and Barbuda">
                                        Antigua and Barbuda
                                    </option>
                                    <option value="Argentina">
                                        Argentina
                                    </option>
                                    <option value="Armenia">Armenia</option>
                                    <option value="Aruba">Aruba</option>
                                    <option value="Australia">
                                        Australia
                                    </option>
                                    <option value="Austria">Austria</option>
                                    <option value="Azerbaijan">
                                        Azerbaijan
                                    </option>
                                    <option value="Bahamas">Bahamas</option>
                                    <option value="Bahrain">Bahrain</option>
                                    <option value="Bangladesh">
                                        Bangladesh
                                    </option>
                                    <option value="Barbados">Barbados</option>
                                    <option value="Belarus">Belarus</option>
                                    <option value="Belgium">Belgium</option>
                                    <option value="Belize">Belize</option>
                                    <option value="Benin">Benin</option>
                                    <option value="Bermuda">Bermuda</option>
                                    <option value="Bhutan">Bhutan</option>
                                    <option value="Bolivia">Bolivia</option>
                                    <option value="Bosnia and Herzegowina">
                                        Bosnia and Herzegowina
                                    </option>
                                    <option value="Botswana">Botswana</option>
                                    <option value="Bouvet Island">
                                        Bouvet Island
                                    </option>
                                    <option value="Brazil">Brazil</option>
                                    <option value="British Indian Ocean Territory">
                                        British Indian Ocean Territory
                                    </option>
                                    <option value="Brunei Darussalam">
                                        Brunei Darussalam
                                    </option>
                                    <option value="Bulgaria">Bulgaria</option>
                                    <option value="Burkina Faso">
                                        Burkina Faso
                                    </option>
                                    <option value="Burundi">Burundi</option>
                                    <option value="Cambodia">Cambodia</option>
                                    <option value="Cameroon">Cameroon</option>
                                    <option value="Canada">Canada</option>
                                    <option value="Cape Verde">
                                        Cape Verde
                                    </option>
                                    <option value="Cayman Islands">
                                        Cayman Islands
                                    </option>
                                    <option value="Central African Republic">
                                        Central African Republic
                                    </option>
                                    <option value="Chad">Chad</option>
                                    <option value="Chile">Chile</option>
                                    <option value="China">China</option>
                                    <option value="Christmas Island">
                                        Christmas Island
                                    </option>
                                    <option value="Cocos Islands">
                                        Cocos (Keeling) Islands
                                    </option>
                                    <option value="Colombia">Colombia</option>
                                    <option value="Comoros">Comoros</option>
                                    <option value="Congo">Congo</option>
                                    <option value="Congo">
                                        Congo, the Democratic Republic of the
                                    </option>
                                    <option value="Cook Islands">
                                        Cook Islands
                                    </option>
                                    <option value="Costa Rica">
                                        Costa Rica
                                    </option>
                                    <option value="Cote D'Ivoire" selected>
                                        Cote d'Ivoire
                                    </option>
                                    <option value="Croatia">
                                        Croatia (Hrvatska)
                                    </option>
                                    <option value="Cuba">Cuba</option>
                                    <option value="Cyprus">Cyprus</option>
                                    <option value="Czech Republic">
                                        Czech Republic
                                    </option>
                                    <option value="Denmark">Denmark</option>
                                    <option value="Djibouti">Djibouti</option>
                                    <option value="Dominica">Dominica</option>
                                    <option value="Dominican Republic">
                                        Dominican Republic
                                    </option>
                                    <option value="East Timor">
                                        East Timor
                                    </option>
                                    <option value="Ecuador">Ecuador</option>
                                    <option value="Egypt">Egypt</option>
                                    <option value="El Salvador">
                                        El Salvador
                                    </option>
                                    <option value="Equatorial Guinea">
                                        Equatorial Guinea
                                    </option>
                                    <option value="Eritrea">Eritrea</option>
                                    <option value="Estonia">Estonia</option>
                                    <option value="Ethiopia">Ethiopia</option>
                                    <option value="Falkland Islands">
                                        Falkland Islands (Malvinas)
                                    </option>
                                    <option value="Faroe Islands">
                                        Faroe Islands
                                    </option>
                                    <option value="Fiji">Fiji</option>
                                    <option value="Finland">Finland</option>
                                    <option value="France">France</option>
                                    <option value="France Metropolitan">
                                        France, Metropolitan
                                    </option>
                                    <option value="French Guiana">
                                        French Guiana
                                    </option>
                                    <option value="French Polynesia">
                                        French Polynesia
                                    </option>
                                    <option value="French Southern Territories">
                                        French Southern Territories
                                    </option>
                                    <option value="Gabon">Gabon</option>
                                    <option value="Gambia">Gambia</option>
                                    <option value="Georgia">Georgia</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Ghana">Ghana</option>
                                    <option value="Gibraltar">
                                        Gibraltar
                                    </option>
                                    <option value="Greece">Greece</option>
                                    <option value="Greenland">
                                        Greenland
                                    </option>
                                    <option value="Grenada">Grenada</option>
                                    <option value="Guadeloupe">
                                        Guadeloupe
                                    </option>
                                    <option value="Guam">Guam</option>
                                    <option value="Guatemala">
                                        Guatemala
                                    </option>
                                    <option value="Guinea">Guinea</option>
                                    <option value="Guinea-Bissau">
                                        Guinea-Bissau
                                    </option>
                                    <option value="Guyana">Guyana</option>
                                    <option value="Haiti">Haiti</option>
                                    <option value="Heard and McDonald Islands">
                                        Heard and Mc Donald Islands
                                    </option>
                                    <option value="Holy See">
                                        Holy See (Vatican City State)
                                    </option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">
                                        Hong Kong
                                    </option>
                                    <option value="Hungary">Hungary</option>
                                    <option value="Iceland">Iceland</option>
                                    <option value="India">India</option>
                                    <option value="Indonesia">
                                        Indonesia
                                    </option>
                                    <option value="Iran">
                                        Iran (Islamic Republic of)
                                    </option>
                                    <option value="Iraq">Iraq</option>
                                    <option value="Ireland">Ireland</option>
                                    <option value="Israel">Israel</option>
                                    <option value="Italy">Italy</option>
                                    <option value="Jamaica">Jamaica</option>
                                    <option value="Japan">Japan</option>
                                    <option value="Jordan">Jordan</option>
                                    <option value="Kazakhstan">
                                        Kazakhstan
                                    </option>
                                    <option value="Kenya">Kenya</option>
                                    <option value="Kiribati">Kiribati</option>
                                    <option value="Democratic People's Republic of Korea">
                                        Korea, Democratic People's Republic of
                                    </option>
                                    <option value="Korea">
                                        Korea, Republic of
                                    </option>
                                    <option value="Kuwait">Kuwait</option>
                                    <option value="Kyrgyzstan">
                                        Kyrgyzstan
                                    </option>
                                    <option value="Lao">
                                        Lao People's Democratic Republic
                                    </option>
                                    <option value="Latvia">Latvia</option>
                                    <option value="Lebanon">Lebanon</option>
                                    <option value="Lesotho">Lesotho</option>
                                    <option value="Liberia">Liberia</option>
                                    <option value="Libyan Arab Jamahiriya">
                                        Libyan Arab Jamahiriya
                                    </option>
                                    <option value="Liechtenstein">
                                        Liechtenstein
                                    </option>
                                    <option value="Lithuania">
                                        Lithuania
                                    </option>
                                    <option value="Luxembourg">
                                        Luxembourg
                                    </option>
                                    <option value="Macau">Macau</option>
                                    <option value="Macedonia">
                                        Macedonia, The Former Yugoslav Republic
                                        of
                                    </option>
                                    <option value="Madagascar">
                                        Madagascar
                                    </option>
                                    <option value="Malawi">Malawi</option>
                                    <option value="Malaysia">Malaysia</option>
                                    <option value="Maldives">Maldives</option>
                                    <option value="Mali">Mali</option>
                                    <option value="Malta">Malta</option>
                                    <option value="Marshall Islands">
                                        Marshall Islands
                                    </option>
                                    <option value="Martinique">
                                        Martinique
                                    </option>
                                    <option value="Mauritania">
                                        Mauritania
                                    </option>
                                    <option value="Mauritius">
                                        Mauritius
                                    </option>
                                    <option value="Mayotte">Mayotte</option>
                                    <option value="Mexico">Mexico</option>
                                    <option value="Micronesia">
                                        Micronesia, Federated States of
                                    </option>
                                    <option value="Moldova">
                                        Moldova, Republic of
                                    </option>
                                    <option value="Monaco">Monaco</option>
                                    <option value="Mongolia">Mongolia</option>
                                    <option value="Montserrat">
                                        Montserrat
                                    </option>
                                    <option value="Morocco">Morocco</option>
                                    <option value="Mozambique">
                                        Mozambique
                                    </option>
                                    <option value="Myanmar">Myanmar</option>
                                    <option value="Namibia">Namibia</option>
                                    <option value="Nauru">Nauru</option>
                                    <option value="Nepal">Nepal</option>
                                    <option value="Netherlands">
                                        Netherlands
                                    </option>
                                    <option value="Netherlands Antilles">
                                        Netherlands Antilles
                                    </option>
                                    <option value="New Caledonia">
                                        New Caledonia
                                    </option>
                                    <option value="New Zealand">
                                        New Zealand
                                    </option>
                                    <option value="Nicaragua">
                                        Nicaragua
                                    </option>
                                    <option value="Niger">Niger</option>
                                    <option value="Nigeria">
                                        Nigeria
                                    </option>
                                    <option value="Niue">Niue</option>
                                    <option value="Norfolk Island">
                                        Norfolk Island
                                    </option>
                                    <option value="Northern Mariana Islands">
                                        Northern Mariana Islands
                                    </option>
                                    <option value="Norway">Norway</option>
                                    <option value="Oman">Oman</option>
                                    <option value="Pakistan">Pakistan</option>
                                    <option value="Palau">Palau</option>
                                    <option value="Panama">Panama</option>
                                    <option value="Papua New Guinea">
                                        Papua New Guinea
                                    </option>
                                    <option value="Paraguay">Paraguay</option>
                                    <option value="Peru">Peru</option>
                                    <option value="Philippines">
                                        Philippines
                                    </option>
                                    <option value="Pitcairn">Pitcairn</option>
                                    <option value="Poland">Poland</option>
                                    <option value="Portugal">Portugal</option>
                                    <option value="Puerto Rico">
                                        Puerto Rico
                                    </option>
                                    <option value="Qatar">Qatar</option>
                                    <option value="Reunion">Reunion</option>
                                    <option value="Romania">Romania</option>
                                    <option value="Russia">
                                        Russian Federation
                                    </option>
                                    <option value="Rwanda">Rwanda</option>
                                    <option value="Saint Kitts and Nevis">
                                        Saint Kitts and Nevis
                                    </option>
                                    <option value="Saint LUCIA">
                                        Saint LUCIA
                                    </option>
                                    <option value="Saint Vincent">
                                        Saint Vincent and the Grenadines
                                    </option>
                                    <option value="Samoa">Samoa</option>
                                    <option value="San Marino">
                                        San Marino
                                    </option>
                                    <option value="Sao Tome and Principe">
                                        Sao Tome and Principe
                                    </option>
                                    <option value="Saudi Arabia">
                                        Saudi Arabia
                                    </option>
                                    <option value="Senegal">Senegal</option>
                                    <option value="Seychelles">
                                        Seychelles
                                    </option>
                                    <option value="Sierra">
                                        Sierra Leone
                                    </option>
                                    <option value="Singapore">
                                        Singapore
                                    </option>
                                    <option value="Slovakia">
                                        Slovakia (Slovak Republic)
                                    </option>
                                    <option value="Slovenia">Slovenia</option>
                                    <option value="Solomon Islands">
                                        Solomon Islands
                                    </option>
                                    <option value="Somalia">Somalia</option>
                                    <option value="South Africa">
                                        South Africa
                                    </option>
                                    <option value="South Georgia">
                                        South Georgia and the South Sandwich
                                        Islands
                                    </option>
                                    <option value="Span">Spain</option>
                                    <option value="SriLanka">
                                        Sri Lanka
                                    </option>
                                    <option value="St. Helena">
                                        St. Helena
                                    </option>
                                    <option value="St. Pierre and Miguelon">
                                        St. Pierre and Miquelon
                                    </option>
                                    <option value="Sudan">Sudan</option>
                                    <option value="Suriname">Suriname</option>
                                    <option value="Svalbard">
                                        Svalbard and Jan Mayen Islands
                                    </option>
                                    <option value="Swaziland">
                                        Swaziland
                                    </option>
                                    <option value="Sweden">Sweden</option>
                                    <option value="Switzerland">
                                        Switzerland
                                    </option>
                                    <option value="Syria">
                                        Syrian Arab Republic
                                    </option>
                                    <option value="Taiwan">
                                        Taiwan, Province of China
                                    </option>
                                    <option value="Tajikistan">
                                        Tajikistan
                                    </option>
                                    <option value="Tanzania">
                                        Tanzania, United Republic of
                                    </option>
                                    <option value="Thailand">Thailand</option>
                                    <option value="Togo">Togo</option>
                                    <option value="Tokelau">Tokelau</option>
                                    <option value="Tonga">Tonga</option>
                                    <option value="Trinidad and Tobago">
                                        Trinidad and Tobago
                                    </option>
                                    <option value="Tunisia">Tunisia</option>
                                    <option value="Turkey">Turkey</option>
                                    <option value="Turkmenistan">
                                        Turkmenistan
                                    </option>
                                    <option value="Turks and Caicos">
                                        Turks and Caicos Islands
                                    </option>
                                    <option value="Tuvalu">Tuvalu</option>
                                    <option value="Uganda">Uganda</option>
                                    <option value="Ukraine">Ukraine</option>
                                    <option value="United Arab Emirates">
                                        United Arab Emirates
                                    </option>
                                    <option value="United Kingdom">
                                        United Kingdom
                                    </option>
                                    <option value="United States">
                                        United States
                                    </option>
                                    <option value="United States Minor Outlying Islands">
                                        United States Minor Outlying Islands
                                    </option>
                                    <option value="Uruguay">Uruguay</option>
                                    <option value="Uzbekistan">
                                        Uzbekistan
                                    </option>
                                    <option value="Vanuatu">Vanuatu</option>
                                    <option value="Venezuela">
                                        Venezuela
                                    </option>
                                    <option value="Vietnam">Viet Nam</option>
                                    <option value="Virgin Islands (British)">
                                        Virgin Islands (British)
                                    </option>
                                    <option value="Virgin Islands (U.S)">
                                        Virgin Islands (U.S.)
                                    </option>
                                    <option value="Wallis and Futana Islands">
                                        Wallis and Futuna Islands
                                    </option>
                                    <option value="Western Sahara">
                                        Western Sahara
                                    </option>
                                    <option value="Yemen">Yemen</option>
                                    <option value="Serbia">Serbia</option>
                                    <option value="Zambia">Zambia</option>
                                    <option value="Zimbabwe">Zimbabwe</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['mentor']['form-1']['city']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1aigov6-city"
                                    placeholder="City/Province" required />
                            </div>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['category']['head']; ?><span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-cat" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['category']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['category']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['company']['head']; ?><span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-company"
                                placeholder="Nom de l’entreprise" required />
                        </div>
                    </div>

                    <!--<div class="mb-1">-->
                    <!--             <label class="form-label" for="password-icon">Your Current Employer</label>-->
                    <!--             <div class="input-group input-group-merge">-->
                    <!--               <span class="input-group-text"><i data-feather="lock"></i></span>-->
                    <!--               <input-->
                    <!--                 type="text"-->
                    <!--                 id="first-name-icon"-->
                    <!--                 class="form-control"-->
                    <!--                 name="gfa1aigov6-employeer"-->
                    <!--                 placeholder="Your Current Employer"-->
                    <!--               />-->

                    <!--             </div>-->
                    <!--           </div>-->

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['industry-mentor']['head']; ?><span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-industry" class="form-select" id="basicSelect" required>
                               <option value="Agriculture, Forestry, Fishing, and Livestock">Agriculture, sylviculture, pêche et élevage</option>
                                <option value="Extractive and Oil Industries">Industries extractives et pétrolières</option>
                                <option value="Agri-food Industries">Industries agroalimentaires</option>
                                <option value="Energy and Water">Énergie et eau</option>
                                <option value="Construction and Public Works">Bâtiments et travaux publics</option>
                                <option value="Trade">Commerce</option>
                                <option value="Transport and Storage">Transport et entreposage</option>
                                <option value="Information and Communication">Information et communication</option>
                                <option value="Technology">Technologie</option>
                                <option value="Banks and Insurance">Banques et Assurances</option>
                                 <option value="Other Industries">Autres industries</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">
                              Autres secteurs d’activité 
                            </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="others_industry"
                                    placeholder="Autres secteurs d’activité "  />
                            </div>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['experience']['head']; ?><span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-exp" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['experience']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['experience']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['mentor-hours']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-hours" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['mentor-hours']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['mentor-hours']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['mentor']['form-1']['mentor-interest']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="african_mentor" class="form-select" id="basicSelect" required>
                                    <option><?php echo $translations['mentor']['form-1']['mentor-interest']['blank']; ?></option>
                                    <?php foreach($translations['mentor']['form-1']['mentor-interest']['options'] as $option): ?>
                                        <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['venture-raise']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-capital" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['venture-raise']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['venture-raise']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['mentor-invest']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-inv-range" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['mentor-invest']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['mentor-invest']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1" style="display: none;">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['chat']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-whatsapp"
                                placeholder="WhatsApp or WeChat ID" />
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['linkedin']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-linkedin"
                                placeholder="LinkedIn Page URL"/>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon">Tranche d'âge<?php //echo $translations['mentor']['form-1']['age']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-age-range" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['age']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['age']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['mentor-qualification']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-qualification"
                                placeholder="Qualification la plus élevée" required />
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['founder-num']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <select name="gfa1aigov6-handle" class="form-select" id="basicSelect" required>
                                <option><?php echo $translations['mentor']['form-1']['founder-num']['blank']; ?></option>
                                <?php foreach($translations['mentor']['form-1']['founder-num']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['founder-skill']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-skill"
                                placeholder="Compétence spécifique" required />
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="password-icon"><?php echo $translations['mentor']['form-1']['mentor-goals']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="lock"></i></span>
                            <input type="text" id="first-name-icon" class="form-control" name="gfa1aigov6-goals"
                                placeholder="Objectifs spécifiques" required />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-0">
                            <textarea data-length="250" class="form-control char-textarea" id="textarea-counter"
                                rows="3" name="gfa1aigov6-tech" placeholder="Counter" required
                                style="height: 100px"></textarea>
                            <label for="textarea-counter"><?php echo $translations['mentor']['form-1']['mentor-experience']; ?> <span style="color:red;"> *</span></label>
                        </div>
                        <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 250
                        </small>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-0">
                            <textarea data-length="250" class="form-control char-textarea" id="textarea-counter"
                                rows="3" name="gfa1aigov6-bio" placeholder="Counter" required
                                style="height: 100px"> </textarea>
                            <label for="textarea-counter"><?php echo $translations['mentor']['form-1']['bio']; ?> <span style="color:red;"> *</span></label>
                        </div>
                        <small class="textarea-counter-value float-end"><span class="char-count">0</span> / 250
                        </small>
                    </div>
                    <div class="col-12">
    

                            <div class="mb-1">
                                <!-- Checkbox for privacy policy -->
                                <div class="input-group input-group-merge">
                                    <input 
                                        class="form-check" 
                                        type="checkbox" 
                                        id="accept_privacy" 
                                        name="accept_privacy" 
                                        required 
                                    />
                                    <label class="form-label" for="accept_privacy">
                                         Je suis d'accord avec la  <a href="https://nora.cipme.ci/privacy-policy.html" target="_blank">Politique de confidentialité</a>.
                                    </label>
                                </div>
                            </div>
                    </div>

                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1aigov6-subscribeBtn">
                        <?php echo $translations['mentor']['form-1']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>