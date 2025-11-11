<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $government_type = isset($_POST['government_type']) ? $_POST['government_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($government_type == 'gfa1agov' || $government_type == 'gfa1bgov' || $government_type == 'gfa1cgov' || $government_type == 'gfa1dgov' || $government_type == 'gfa1egov' || $government_type == 'gfa7'){
?>

<div class="col-md-12 col-12 gfa1aigov">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['corporate']['form-1']['head']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical organisation" name="gfa1bi" onsubmit="organisation(); return false;" action="#">
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['name-contact']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="name"
                                    placeholder="Nom du contact principal" required />
                            </div>
                        </div>
                    </div>

                    <input type="hidden" name="engagement" class="engagement" />
                    <input type="hidden" name="org-interest" class="org-interest" />

<div class="formify-forms__quiz-single mb-2">
    <h3 class="form-label">Quels secteurs d'activité financez-vous ?</h3>
    <p class="form-label" style="margin-bottom: 1rem; color: orange;">
        Veuillez sélectionner un ou plusieurs secteurs.
    </p>
    <div class="formify-forms__quiz-form formify-mg-top-10">
        <div class="formify-forms__quiz-form formify-forms__quiz-form--checkbox">
            <ul class="formify-forms__cdefault formify-forms__cdefault-multiple">
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Agriculture" id="agriculture_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="agriculture_">Agriculture (Agriculture, ressources animales et halieutiques, sylviculture…)</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="AgriFood" id="agrifood_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="agrifood_">Agroalimentaire</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="AgroIndustry" id="agroindustry_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="agroindustry_">Agro-industrie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Cultural and Creative Industries" id="creative_industries_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="creative_industries_">Industries Culturelles & Créatives</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Transport and Logistics" id="transport_logistics_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="transport_logistics_">Transport & logistique</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Chemicals and Plastics" id="chemicals_plastics_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="chemicals_plastics_">Chimie et plasturgie</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Extractive Activities" id="extractive_activities_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="extractive_activities_">Activités extractives</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Construction Materials and Equipment" id="construction_materials_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="construction_materials_">Matériaux de construction, d’ameublement et d’équipement</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Pharmaceutical Industry" id="pharmaceutical_industry_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="pharmaceutical_industry_">Industrie pharmaceutique</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Textiles and Accessories" id="textiles_accessories_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="textiles_accessories_">Textile et accessoires</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Real Estate Activities" id="real_estate_activities_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="real_estate_activities_">Activités immobilières</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Construction" id="construction_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="construction_">BTP</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Digital Economy" id="digital_economy_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="digital_economy_">Economie numérique</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Tourism and Leisure" id="tourism_leisure_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="tourism_leisure_">Tourisme & loisirs</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Accommodation and Catering" id="accommodation_catering_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="accommodation_catering_">Hébergement et restauration</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Packaging" id="packaging_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="packaging_">Emballages & packages</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Commerce" id="commerce_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="commerce_">Commerce</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Electricity and Gas" id="electricity_gas_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="electricity_gas_">Production et distribution d'électricité et de gaz</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Spare Parts Manufacturing" id="spare_parts_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="spare_parts_">Fabrication de pièces détachées, assemblage de véhicules de spécialité</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Finance and Insurance" id="finance_insurance_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="finance_insurance_">Activités financières et d'assurance</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Water Production and Distribution" id="water_distribution_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="water_distribution_">Production et distribution d'eau, assainissement ; traitement des déchets et dépollutions</label>
                </li>
                <li>
                    <input class="formify-forms__input d-none" type="checkbox" value="Services" id="services_" name="industry[]">
                    <label class="formify-forms__cdefault-label" for="services_">Services</label>
                </li>
            </ul>
        </div>
    </div>
</div>
                 
                    <div class="col-12" style="display: none;">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['startup-model']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="model" class="form-select" id="basicSelect">
                                    <option value=''><?php echo $translations['corporate']['form-1']['startup-model']['blank']; ?></option>
                                    <option value="B2B">B2B</option>
                                    <option value="B2B2C">B2B2C</option>
                                    <option value="B2C">B2C</option>
                                    <option value="B2C/B2B">B2C/B2B</option>
                                    <option value="D2C">D2C</option>
                                    <option value="D2C/B2B">D2C/B2B</option>
                                    <option value="D2C/B2C">D2C/B2C</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-12" style="display: none;">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['solutions']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="solution" class="form-select" id="basicSelect" >
                                    <option><?php echo $translations['corporate']['form-1']['solutions']['blank']; ?></option>
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
                    </div>
                    <div class="col-12" style="display: none;">
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
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['corporate']['form-1']['core-solution']['head']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="core-solution" class="form-select" id="basicSelect" required>
                                    <option><?php echo $translations['corporate']['form-1']['core-solution']['blank']; ?></option>
                                    <option value="Increasing revenue">Augmentation des revenus</option>
                                    <option value="Reducing company costs">Réduction des coûts de lentreprise</option>
                                    <option value="Enhance operational excellence, capabilities or performance management">Amélioration de lexcellence opérationnelle, des capacités ou de la gestion des performances</option>
                                    <option value="Accessing new markets/customers">Accès à de nouveaux marchés/clients</option>
                                    <option value="Increasing sales in existing markets">Augmentation des ventes dans les marchés existants</option>
                                    <option value="Improving your access to technology and other resources">Amélioration de votre accès à la technologie et à dautres ressources</option>
                                    <option value="Improving your product offering for your customers">Amélioration de votre offre de produits pour vos clients</option>
                                    <option value="Diversifying your product offerings">Diversification de vos offres de produits</option>
                                    <option value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">Transformation numérique pour les processus commerciaux, la culture et les expériences client dune entreprise afin de répondre aux exigences commerciales et du marché en évolution</option>
                                    <option value="Aggregation of data and gaining new insights">Agrégation de données et acquisition de nouveaux insights</option>
                                    <option value="Solutions to enable a smart workforce across multiple internal functions">Solutions pour permettre une main-dœuvre intelligente à travers plusieurs fonctions internes</option>
                                    
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                   


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['corporate']['form-1']['org-description']; ?> <span style="color:red;"> *</span></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="description"
                                    placeholder="<?php echo $translations['corporate']['form-1']['org-description']; ?>" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['corporate']['form-1']['org-website']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="website"
                                    placeholder="<?php echo $translations['corporate']['form-1']['org-website']; ?>" />
                            </div>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['corporate']['form-1']['event-organize']['head']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="co-organise" class="form-select" id="basicSelect" >
                                <option><?php echo $translations['corporate']['form-1']['event-organize']['blank']; ?></option>
                                    <?php foreach($translations['corporate']['form-1']['event-organize']['options'] as $option): ?>
                                        <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                    <?php endforeach; ?>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['corporate']['form-1']['media-featured']['head']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="feature" class="form-select" id="basicSelect">
                                <option><?php echo $translations['corporate']['form-1']['media-featured']['blank']; ?></option>
                                <?php foreach($translations['corporate']['form-1']['media-featured']['options'] as $option): ?>
                                    <option value="<?php echo $option; ?>"><?php echo $option; ?></option>
                                <?php endforeach; ?>
                            </select>
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
                                    placeholder="<?php echo $translations['corporate']['form-1']['contact-linkedin']; ?>" />
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