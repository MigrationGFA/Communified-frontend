<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $financial_type = isset($_POST['financial_type']) ? $_POST['financial_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($financial_type == 'gfa7'){
?>

<div class="col-md-12 col-12 gfa1aigov">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical financial" name="gfa1bi" onsubmit="financial(); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['corporate']['form-1']['org-name']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge"> 
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="name-of-org"
                                    placeholder="<?php echo $translations['corporate']['form-1']['org-name']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['name-contact']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="name"
                                    placeholder="Nom du contact principal" required />
                            </div>
                        </div>
                    </div>

                    

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['contact-email']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control checkEmailOrg" name="email"
                                    placeholder="<?php echo $translations['corporate']['form-1']['contact-email']; ?>" onkeyup="checkEmail_org()" required />
                            </div>
                        </div>
                        <span class="showDataOrg"></span>
                    </div>

                    <!--<div class="col-12">-->
                    <!--  <div class="mb-1">-->
                    <!--    <label class="form-label" for="password-icon">Password</label>-->
                    <!--    <div class="input-group input-group-merge">-->
                    <!--      <span class="input-group-text"><i data-feather="lock"></i></span>-->
                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="password"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1aigov-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['corporate']['form-1']['contact-mobile']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['corporate']['form-1']['contact-linkedin']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="linkedin"
                                    placeholder="<?php echo $translations['corporate']['form-1']['contact-linkedin']; ?>"  />
                            </div>
                        </div>
                    </div>

                    <div class="col-12" style="display: none;">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['corporate']['form-1']['whatsapp']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="whatsapp"
                                    placeholder="WhatsApp ou ID WeChat"  />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['country']; ?>?<span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="country" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['corporate']['form-1']['city']; ?><span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="city"
                                    placeholder="<?php echo $translations['corporate']['form-1']['city']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Adresse professionnelle de l'institution financière<span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="home"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="Business_address"
                                    placeholder="Adresse" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['corporate']['form-1']['org-website']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="globe"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="website"
                                    placeholder="<?php echo $translations['corporate']['form-1']['org-website']; ?>" />
                            </div>
                        </div>
                    </div>
                    

<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">Quels secteurs d'activité financez-vous ?</h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
    Veuillez sélectionner un ou plusieurs secteurs.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
            <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Agriculture, Forestry, Fishing, and Livestock" id="agriculture_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="agriculture_">Agriculture, sylviculture, pêche et élevage</label>
                </li>
            <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Extractive and Oil Industries" id="extractive-industries_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="extractive-industries_">Industries extractives et pétrolières</label>
                </li>
                
                
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Agri-food Industries" id="agri-food-industries_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="agri-food-industries_">Industries agroalimentaires</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Energy and Water" id="energy-water_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="energy-water_">Énergie et eau</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Construction and Public Works" id="construction-public-works" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="construction-public-works">Bâtiments et travaux publics</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Trade" id="trade_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="trade_">Commerce</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Transport and Storage" id="transport_storage" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="transport_storage">Transport et entreposage</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Information and Communication" id="information-communication" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="information-communication">Information et communication</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Technology" id="technology_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="technology_">Technologie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Banks and Insurance" id="banks-insurance_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="banks_insurance">Banques et Assurances</label>
                </li>
            </ul>
        </div>
    </div>
</div>


                  
                    
<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label ">Quelles catégories financez-vous? <span style="color:red; margin-bottom: 1rem;"> *</span></h3>
    <p class=" form-label" style="margin-bottom: 1rem; color: orange">
    Veuillez sélectionner une ou plusieurs options.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Medium-sized enterprise" id="medium-sized-enterprise" name="Finance_Cat[]" required>
                    <label class="formify-forms__cdefault-label" for="medium-sized-enterprise">Entreprise ETI</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Small business" id="small-business" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="small-business">Entreprise PME</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Project holder" id="project-holder" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="project-holder">Porteur de projets (non formalisé)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Entrepreneur" id="entrepreneur" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="entrepreneur">Entreprenant (statut)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Startup" id="startup" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="startup">Startup</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Group" id="group" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="group">Groupement (OPA, ONG, etc.)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Employee" id="employee" name="Finance_Cat[]">
                    <label class="formify-forms__cdefault-label" for="employee">Salarié</label>
                </li>
            </ul>
        </div>
    </div>
</div>

                    
                    <!-- Quelles besoins financez-vous? -->
<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">Quels besoins financez-vous? <span style="color:red; margin-bottom: 1rem;">*</span></h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
    Veuillez sélectionner une ou plusieurs options.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Cash flow needs" id="cash-flow-needs" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="cash-flow-needs">Besoin de trésorerie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Working capital needs (BFR)" id="working-capital-needs" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="working-capital-needs">Besoins en Fonds de Roulement (BFR)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Execution of purchase order, contract" id="execution-order" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="execution-order">Exécution de Bon, Marché, Contrat</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Acquisition of equipment, construction, etc." id="acquisition-equipment" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="acquisition-equipment">Acquisition d’équipement, construction, etc.</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Trade financing (coffee, cocoa, rubber, etc.)" id="trade-financing" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="trade-financing">Financement de négoce (café, cacao, hévéa, etc.)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Real estate" id="real-estate" name="Finance_Need[]">
                    <label class="formify-forms__cdefault-label" for="real-estate">Immobilier</label>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Quels sont vos secteurs d’appétence? -->
<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">Quels sont vos secteurs d’appétence? <span style="color:red; margin-bottom: 1rem;">*</span></h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
    Veuillez sélectionner une ou plusieurs options.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Agriculture, Forestry, Fishing, and Livestock" id="agriculture" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="agriculture">Agriculture, sylviculture, pêche et élevage</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Extractive and Oil Industries" id="extractive-industries" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="extractive-industries">Industries extractives et pétrolières</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Agri-food Industries" id="agri-food-industries" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="agri-food-industries">Industries agroalimentaires</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Energy and Water" id="energy-water" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="energy-water">Énergie et eau</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Construction and Public Works" id="construction-works" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="construction-works">Bâtiments et travaux publics</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Trade" id="trade" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="trade">Commerce</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Transport and Storage" id="transport-storage" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="transport-storage">Transport et entreposage</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Information and Communication" id="info-communication" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="info-communication">Information et communication</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Technology" id="technology" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="technology">Technologie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Banks and Insurance" id="banks-insurance" name="core_solution[]">
                    <label class="formify-forms__cdefault-label" for="banks-insurance">Banques et Assurances</label>
                </li>
            </ul>
        </div>
    </div>
</div>



                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon">Quel est le minimum d’années d’expérience requis pour bénéficier de vos financements ?</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="Year_Benefit"
                                    placeholder="année(s)"/>
                            </div>
                        </div>
                    </div>

                    



                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-country">À quelle fréquence souhaitez-vous examiner les documents de présentation des entreprises ?<span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="engagement" class="form-select" id="basicSelect" required>
                                <option value="Daily">Quotidien</option>
                              <option value="Weekly">Hebdomadaire</option>
                              <option value="Biweekly">Bimensuel</option>
                              <option value="Monthly">Mensuel</option>
                            </select>
                        </div>
                    </div>

                   <!-- Phase de l’évolution -->
<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">A quelle phase de l’évolution de l’entreprise la financez-vous ? 
        <span style="color:red; margin-bottom: 1rem;">*</span>
    </h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
    Veuillez sélectionner une ou plusieurs phases.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Startup" id="startup_" name="startup_stage[]">
                    <label class="formify-forms__cdefault-label" for="startup_">Démarrage (Idéation / Gestion / Création / Constitution)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Launch" id="launch" name="startup_stage[]">
                    <label class="formify-forms__cdefault-label" for="launch">Lancement</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Growth" id="growth" name="startup_stage[]">
                    <label class="formify-forms__cdefault-label" for="growth">Développement (Croissance / Expansion)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Maturity" id="maturity" name="startup_stage[]">
                    <label class="formify-forms__cdefault-label" for="maturity">Maturité / Stabilisation</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Transition" id="transition" name="startup_stage[]">
                    <label class="formify-forms__cdefault-label" for="transition">Transmission / Transition / Restructuration</label>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Produits Financiers -->
<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">Quels sont les produits financiers que vous proposez ? 
        <span style="color:red; margin-bottom: 1rem;">*</span>
    </h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
    Veuillez sélectionner un ou plusieurs produits.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <!-- Crédits d’exploitation -->
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Cash Credit" id="cash-credit" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="cash-credit">Crédit de trésorerie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Operating Credit" id="operating-credit" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="operating-credit">Crédit d'exploitation</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Investment Credit" id="investment-credit" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="investment-credit">Crédit d'investissement</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Specialized SME Credit" id="sme-credit" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="sme-credit">Crédit spécialisé pour les PME</label>
                </li>

                <!-- Crédits de mobilisation de créances -->
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Invoice Advance" id="invoice-advance" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="invoice-advance">Avance sur facture</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Factoring" id="factoring" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="factoring">Affacturage</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Commercial Discount" id="commercial-discount" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="commercial-discount">Escompte commercial</label>
                </li>

                <!-- Financements sur marché -->
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Market Advance" id="market-advance" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="market-advance">Avance sur marché</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Purchase Order Advance" id="purchase-order-advance" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="purchase-order-advance">Avance sur bon de commande</label>
                </li>

                <!-- Crédits d’investissement -->
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Classic Investment Credit" id="classic-investment-credit" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="classic-investment-credit">Crédit classique d’investissement (moyen ou long terme)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Equipment Leasing" id="equipment-leasing" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="equipment-leasing">Crédit-bail mobilier</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Real Estate Leasing" id="real-estate-leasing" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="real-estate-leasing">Crédit-bail immobilier</label>
                </li>

                <!-- Engagements par signature -->
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Guarantees" id="guarantees" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="guarantees">Cautions</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Endorsements" id="endorsements" name="feature[]">
                    <label class="formify-forms__cdefault-label" for="endorsements">Avals</label>
                </li>
            </ul>
        </div>
    </div>
</div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Autres produits de financement </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="globe"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="other_financing_products"
                                    placeholder="Autres produits de financement"  />
                            </div>
                        </div>
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


                    <!-- <div class="mb-1 col-md-12" stye>
                        <label class="form-label" for="vertical-modern-country">How
                            did you hear about us?</label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="hearus" class="form-select" id="basicSelect" required>
                                <option value="0">Select an option</option>
                                <option value="News & Blogs">
                                    News & Blogs
                                </option>
                                <option value="Friends & Family">
                                    Friends & Family
                                </option>
                                <option value="Twitter">Twitter</option>
                                <option value="LinkedIn">LinkedIn</option>
                                <option value="Instagram">Instagram</option>
                                <option value="GetFundedAfrica website">
                                    GetFundedAfrica website
                                </option>
                                <option value="Others">Others</option>
                            </select>
                        </div>
                    </div> -->
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success orgBtn">
                    <?php echo $translations['corporate']['form-1']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>



<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->
