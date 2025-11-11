<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $investor_type = isset($_POST['investor_type']) ? $_POST['investor_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($investor_type == 'gfa1ainv' || $investor_type == 'gfa1binv' || $investor_type == 'gfa1cinv' || $investor_type == 'gfa1dinv' || $investor_type == 'gfa1einv' || $investor_type == 'gfa1finv' || $investor_type == 'gfa1ginv' || $investor_type == 'gfa1hinv' || $investor_type == 'gfa1iinv'){
?>

<div class="col-md-12 col-12 gfa1aiinv">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['investor']['form-1']['head']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical investorForm" name="gfa1bi" onsubmit="investorForm(); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['investor']['form-1']['name']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="fname"
                                    placeholder="<?php echo $translations['investor']['form-1']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="lname"
                                    placeholder="<?php echo $translations['investor']['form-1']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['investor']['form-1']['firm']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="firm-name"
                                    placeholder="<?php echo $translations['investor']['form-1']['firm']['sub-1']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['investor']['form-1']['angel-network']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="angel-network"
                                    placeholder="<?php echo $translations['investor']['form-1']['angel-network']['sub-1']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['startup-invest']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="no-startup" class="form-select" id="basicSelect" required>
                                    <option value="0">
                                        <?php echo $translations['investor']['form-1']['num-startup']; ?>
                                    </option>
                                    <option value="1-4">1-4 Startups</option>
                                    <option value="5-8">5-8 Startups</option>
                                    <option value="9-12">
                                        9-12 Startups
                                    </option>
                                    <option value="13-more">
                                        More than 12 Startups
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['pitchdeck-view']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="pd-review-fr" class="form-select" id="basicSelect" required>
                                    <option value=""><?php echo $translations['investor']['form-1']['pitchdeck-view']['blank']; ?></option>
                                    <?php foreach($translations['investor']['form-1']['pitchdeck-view']['options'] as $option): ?>
                                        <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['pitchdeck-num']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="pd-review-no" class="form-select" id="basicSelect" required>
                                    <option value="">
                                        - Select -
                                    </option>
                                    <option value="1-5">1-5</option>
                                    <option value="6-10">6-10</option>
                                    <option value="11-15">11-15</option>
                                    <option value="16-20">16-20</option>
                                    <option value="20 & Above">Plus de 20 </option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['investor-acred']['head']; ?> </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="ared-investor" class="form-select" id="basicSelect">
                                    <option value=""><?php echo $translations['investor']['form-1']['investor-acred']['blank']; ?></option>
                                    <?php foreach($translations['investor']['form-1']['investor-acred']['options'] as $option): ?>
                                        <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['investor']['form-1']['industry']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select onchange="others_industry()" name="industry" class="form-select" id="inv_industry" required>
                                 <option value="">Sélectionnez une option</option>
            <option value="Agriculture">Agriculture (Agriculture, ressources animales et halieutiques, sylviculture…)</option>
                        <option value="AgriFood">Agroalimentaire</option>
                        <option value="AgroIndustry">Agro-industrie</option>
                        <option value="Cultural and Creative Industries">Industries Culturelles & Créatives</option>
                        <option value="Transport and Logistics">Transport & logistique</option>
                        <option value="Chemicals and Plastics">Chimie et plasturgie</option>
                        <option value="Extractive Activities">Activités extractives</option>
                        <option value="Construction Materials and Equipment">Matériaux de construction, d’ameublement et d’équipement</option>
                        <option value="Pharmaceutical Industry">Industrie pharmaceutique</option>
                        <option value="Textiles and Accessories">Textile et accessoires</option>
                        <option value="Real Estate Activities">Activités immobilières</option>
                        <option value="Construction">BTP</option>
                        <option value="Digital Economy">Economie numérique</option>
                        <option value="Tourism and Leisure">Tourisme & loisirs</option>
                        <option value="Accommodation and Catering">Hébergement et restauration</option>
                        <option value="Packaging">Emballages & packages</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Electricity and Gas">Production et distribution d'électricité et de gaz</option>
                        <option value="Spare Parts Manufacturing">Fabrication de pièces détachées, assemblage de véhicules de spécialité</option>
                        <option value="Finance and Insurance">Activités financières et d'assurance</option>
                        <option value="Water Production and Distribution">Production et distribution d'eau, assainissement ; traitement des déchets et dépollutions</option>
                        <option value="Services">Services</option>
                                 
                            </select>
                        </div>
                    </div>

                    <div class="col-12" id="custom_industry" style="display:none;">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['other-industry']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="anchor"></i></span>
                                <input type="text" id="email-id-icon" class="form-control" onkeyup="checkEmailInv()" name="custom_industry"
                                    placeholder="<?php echo $translations['investor']['form-1']['other-industry']; ?>" />
                            </div>
                        </div>
                        <span class="showDataInv"></span>
                    </div>

                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['investor']['form-1']['annual-revenue']['head']; ?> <span style="color:red;"> *</span></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="networth" class="form-select" id="basicSelect" required>
                                <option value=""><?php echo $translations['investor']['form-1']['annual-revenue']['blank']; ?></option>
                                <option value="1-1000000">1 FCFA - 1 000 000 FCFA</option>
                                <option value="1000001-5000000">1 000 001 FCFA - 5 000 000 FCFA</option>
                                <option value="5000001-10000000">5 000 001 FCFA - 10 000 000 FCFA</option>
                                <option value="10000001-20000000">10 000 001 FCFA - 20 000 000 FCFA</option>
                                <option value="20000001-35000000">20 000 001 FCFA - 35 000 000 FCFA</option>
                                <option value="35000001-50000000">35 000 001 FCFA - 50 000 000 FCFA</option>
                                <option value="50000001-75000000">50 000 001 FCFA - 75 000 000 FCFA</option>
                                <option value="75000001-100000000">75 000 001 FCFA - 100 000 000 FCFA</option>
                                <option value="100000001-1000000000">Plus de 100 000 000 FCFA</option>
                                                            </select>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Email <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control checkEmailInv" onkeyup="checkEmailInv()" name="email"
                                    placeholder="Email" required />
                            </div>
                        </div>
                        <span class="showDataInv"></span>
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
                    <!--        name="confirm-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Mobile <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['investor']['form-1']['linkedin']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="linkedin"
                                    placeholder="LinkedIn ID"  />
                            </div>
                        </div>
                    </div>

                    <div class="col-12" style="display: none;">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['investor']['form-1']['chat']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="whatsapp"
                                    placeholder="WhatsApp or Wechat ID"  />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['investor']['form-1']['country-residence']; ?> <span style="color:red;"> *</span></label>
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
                            <label class="form-label" for="contact-info-icon">Ville <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="city"
                                    placeholder="Ville" required />
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


                    <!-- <div class="mb-1 col-md-12">
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
                    <!--<input type="text" class="organisation-type-inv" />-->
                    <input type="hidden" name="hearus" class="how-to-inv" />
                    <input type="hidden" name="how-to-inv" class="how-to-inv" />
                    <input type="hidden" name="amount-inv" class="amount-inv" />
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success investorBtn">
                        <?php echo $translations['investor']['form-1']['submit']; ?>
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