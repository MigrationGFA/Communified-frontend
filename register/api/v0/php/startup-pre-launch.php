<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $discovery_type = isset($_POST['discovery_type']) ? $_POST['discovery_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($discovery_type == 'gfa1a5'){
?>

<div class="col-md-12 col-12 gfa1ai5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                Subscribe for our newsletter
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ai5-subscribe" name="gfa1ai5" onsubmit="gfa_subscribe('gfa1ai5'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-1']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ai5-fname"
                                    placeholder="<?php echo $translations['startup']['form-1']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ai5-lname"
                                    placeholder="<?php echo $translations['startup']['form-1']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1ai5-organisation-type" class="gfa1ai5-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1ai5-interest" class="gfa1ai5-interest" value="Get Update" />
                    <input type="hidden" name="gfa1ai5-current-stage" class="gfa1ai5-current-stage" value="Pre-Launch" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-1']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ai5-checkEmail"
                                    name="gfa1ai5-email" placeholder="Email" onkeydown="checkEmail('gfa1ai5', '4')" required />
                            </div>
                        </div>
                        <span class="gfa1ai5-showData"></span>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1ai5-subscribeBtn">
                        <?php echo $translations['startup']['form-1']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1b5'){
?>

<div class="col-md-12 col-12 gfa1bi5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-1']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ai5-prelaunch" name="gfa1ai5" onsubmit="gfa_prelaunch('gfa1ai5'); return false;" action="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-first-name"><?php echo $translations['startup']['form-2']['startup-name']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="users"></i></span>
                            <input type="text" id="vertical-modern-first-name" class="form-control" name="gfa1ai5-sname"
                                placeholder="<?php echo $translations['startup']['form-2']['startup-name']; ?>" required />
                        </div>
                    </div>

                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['startup']['form-2']['industry']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="anchor"></i></span>
                            <select name="gfa1ai5-industry" class="form-select" id="basicSelect" >
                                <option><?php echo $translations['startup']['form-2']['industry']['blank']; ?></option>
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
                            </select>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['year-founded']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="gfa1ai5-year-founded"></i></span>

                                <input type="text" id="fp-default" class="form-control flatpickr-basic"
                                    placeholder="JJ-MM-AA" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1ai5-organisation-type" class="gfa1ai5-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1ai5-interest" class="gfa1ai5-interest" value="Fund Raising" />
                    <input type="hidden" name="gfa1ai5-current-stage" class="gfa1ai5-current-stage" value="Pre-Launch" />

                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['startup']['form-2']['fund-raise']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="dollar-sign"></i></span>
                            <select class="form-select" id="basicSelect" required name="gfa1ai5-fundraise">
                                <option value="0"><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                <!--<option>None/Bootstrapped</option>-->
                                <option value="1-100000">1 XOF - 100k XOF</option>
                                <option value="100000-250000">101k XOF - 250k XOF</option>
                                <option value="250001-500000">251k XOF - 500k XOF</option>
                                <option value="500000-1000000">501k XOF - 1m XOF</option>
                                <option value="1000000-5000000">1m XOF - 5m XOF</option>
                                <option value="5000000-10000000">5m XOF - 10m XOF</option>
                                <option value="10000000-25000000">10m XOF - 25m XOF</option>
                                <option value="25000000-1000000000">Over 25m XOF</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1 col-md-6">
                        <label class="form-label" for="vertical-modern-country"><?php echo $translations['startup']['form-2']['annual-revenue']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="dollar-sign"></i></span>
                            <select name="gfa1ai5-revenue" class="form-select" id="basicSelect" required>
                                <option value="0"><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                <option value="0-100000">0 XOF - 100k XOF</option>
                                <option value="100000-250000">101k XOF - 250k XOF</option>
                                <option value="250001-500000">251k XOF - 500k XOF</option>
                                <option value="500000-1000000">501k XOF - 1m XOF</option>
                                <option value="1000000-5000000">1m XOF - 5m XOF</option>
                                <option value="5000000-10000000">5m XOF - 10m XOF</option>
                                <option value="above-10000000">Plus de 10m XOF</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1 col-md-12">
                        <label class="form-label" for="vertical-modern-language"><?php echo $translations['startup']['form-2']['website']; ?></label>
                        <div class="input-group input-group-merge">
                            <span class="input-group-text"><i data-feather="globe"></i></span>
                            <input type="text" id="vertical-modern-first-name" class="form-control URL-input"
                                name="gfa1ai5-website" placeholder="<?php echo $translations['startup']['form-2']['website']; ?>"
                                 />
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ai5-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ai5-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ai5-checkEmail"
                                    name="gfa1ai5-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail('gfa1ai5', '4')" required />
                            </div>
                        </div>
                        <span class="gfa1ai5-showData"></span>
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
                    <!--        name="gfa1ai5-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1ai5-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ai5-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ai5-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1ai5-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ai5-model" class="form-select" id="basicSelect" required>
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
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ai5-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
                                    <option value="Energy">Énergie</option>
                                    <option value="Engineering/ESG">Ingénierie/ESG</option>
                                    <option value="Financial Services">Services financiers</option>
                                    <option value="FMCG/CPG">Biens de consommation courante/PGC</option>
                                    <option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
                                    <option value="Manufacturing">Fabrication</option>
                                    <option value="Payment Platform">Plateforme de paiement</option>
                                    <option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
                                    <option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ai5-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['core-solution']['blank']; ?></option>
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ai5-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                  
                                    <option value="Built In-house">Développé en interne</option>
                                    <option value="Investment Opportunity">Possibilité dinvestissement</option>
                                    <option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
                                    <option value="Acquisition">Acquisition</option>       
                                                                    
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ai5-country" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ai5-city"
                                    placeholder="City/Province" required /><br />
                                <br />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro du registre de commerce (*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ai5-trade" pattern=".{10,30}" minlength="10" maxlength="30"
    title="Le numéro de registre de commerce doit comprendre un minimum de 10 caractères et un maximum de 30 caractères" required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie du registre de commerce(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ai5-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro de Compte Contribuable(*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ai5-tax" pattern=".{10,30}" minlength="10" maxlength="30"
    title="e numéro fiscal doit comprendre un minimum de 10 caractères et un maximum de 30 caractères." required />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration Fiscale D'Existence(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ai5-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro CNPS</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ai5-cnps" pattern="\d{12}" title="Le numéro CNPS doit être composé de 12 chiffres." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration CNPS </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ai5-file[]"  multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-floating mb-0">
                            <textarea data-length="250" class="form-control char-textarea" id="textarea-counter"
                                rows="3" placeholder="Counter" required style="height: 100px"
                                name="gfa1ai5-about"></textarea>
                            <label for="textarea-counter"><?php echo $translations['startup']['form-2']['idea']; ?></label>
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
                    <button type="submit" class="btn btn-success gfa1ai5-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1c5'){
?>

<div class="col-md-12 col-12 gfa1ci5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-2']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ci5-venture" name="gfa2ci" onsubmit="gfa_venture('gfa1ci5'); return false;" action="#" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ci5-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ci5-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1ci5-organisation-type" class="gfa1ci5-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1ci5-interest" class="gfa1ci5-interest" value="Business Growth" />
                    <input type="hidden" name="gfa1ci5-current-stage" class="gfa1ci5-current-stage" value="Pre-Launch" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ci5-checkEmail"
                                    name="gfa1ci5-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail('gfa1ci5', '11')" required />
                            </div>
                        </div>
                        <span class="gfa1ci5-showData"></span>
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
                    <!--        name="gfa1ci5-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1ci5-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ci5-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci5-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1ci5-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ci5-model" class="form-select" id="basicSelect" required>
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
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ci5-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
                                    <option value="Energy">Énergie</option>
                                    <option value="Engineering/ESG">Ingénierie/ESG</option>
                                    <option value="Financial Services">Services financiers</option>
                                    <option value="FMCG/CPG">Biens de consommation courante/PGC</option>
                                    <option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
                                    <option value="Manufacturing">Fabrication</option>
                                    <option value="Payment Platform">Plateforme de paiement</option>
                                    <option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
                                    <option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ci5-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['core-solution']['blank']; ?></option>
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ci5-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                    <option value="Built In-house">Développé en interne</option>
                                    <option value="Investment Opportunity">Possibilité dinvestissement</option>
                                    <option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
                                    <option value="Acquisition">Acquisition</option>                                                                    
                                        
                                                                     
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ci5-country" class="form-select" id="basicSelect" >
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci5-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro du registre de commerce (*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci5-trade" required pattern=".{10,30}" minlength="10" maxlength="30"
    title="Le numéro de registre de commerce doit comprendre un minimum de 10 caractères et un maximum de 30 caractères" />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie du registre de commerce(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci5-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro de Compte Contribuable(*)</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci5-tax" required pattern=".{10,30}" minlength="10" maxlength="30"
    title="e numéro fiscal doit comprendre un minimum de 10 caractères et un maximum de 30 caractères." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration Fiscale D'Existence(*) </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci5-file[]" required multiple />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Numéro CNPS</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="book"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ci5-cnps" pattern="\d{12}" title="Le numéro CNPS doit être composé de 12 chiffres." />
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon">Charger une copie de la Déclaration CNPS </label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <input type="file" id="contact-info-icon" class="form-control" name="gfa1ci5-file[]"  multiple />
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
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1ci5-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1d5'){
?>

<div class="col-md-12 col-12 gfa1di5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-3']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1di5-report" name="gfa2di" onsubmit="startup_report('gfa1di5'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1di5-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1di5-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1di5-organisation-type" class="gfa1di5-organisation-type" value="startup" />
                    <input type="hidden" name="gfa1di5-interest" class="gfa1di5-interest" value="Insight Report" />
                    <input type="hidden" name="gfa1di5-current-stage" class="gfa1di5-current-stage" value="Pre-Launch" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1di5-checkEmail"
                                    name="gfa1di5-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail('gfa1di5', '16')" required />
                            </div>
                        </div>
                        <span class="gfa1di5-showData"></span>
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
                    <!--        name="gfa1di5-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1di5-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1di5-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1di5-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1di5-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1di5-model" class="form-select" id="basicSelect" required>
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
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1di5-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
<option value="Digital Banks">Banques numériques</option>
                                    <option value="Energy">Énergie</option>
                                    <option value="Engineering/ESG">Ingénierie/ESG</option>
                                    <option value="Financial Services">Services financiers</option>
                                    <option value="FMCG/CPG">Biens de consommation courante/PGC</option>
                                    <option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
                                    <option value="Manufacturing">Fabrication</option>
                                    <option value="Payment Platform">Plateforme de paiement</option>
                                    <option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
                                    <option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1di5-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1di5-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                    <option value="Built In-house">Développé en interne</option>
                                    <option value="Investment Opportunity">Possibilité dinvestissement</option>
                                    <option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
                                    <option value="Acquisition">Acquisition</option>  
                                                                    
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1di5-country" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1di5-city"
                                    placeholder="<?php echo $translations['startup']['form-2']['city']; ?>" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1di5-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1e5'){
?>

<div class="col-md-12 col-12 gfa1ei5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-4']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1ei5-learning" name="gfa2ei" onsubmit="gfa_learning('gfa1ei5'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1ei5-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1ei5-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1ei5-organisation-type" class="gfa1ei5-organisation-type"
                        value="startup" />
                    <input type="hidden" name="gfa1ei5-interest" class="gfa1ei5-interest" value="Learning" />
                    <input type="hidden" name="gfa1ei5-current-stage" class="gfa1ei5-current-stage" value="Pre-Launch" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1ei5-checkEmail"
                                    name="gfa1ei5-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail('gfa1ei5', '22')" required />
                            </div>
                        </div>
                        <span class="gfa1ei5-showData"></span>
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
                    <!--        name="gfa1ei5-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1ei5-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei5-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ei5-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1ei5-worker"
                                    placeholder="<?php echo $translations['startup']['form-2']['staff-num']; ?>" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ei5-model" class="form-select" id="basicSelect" required>
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
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ei5-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                    <option value="Digital Banks">Banques numériques</option>
                                    <option value="Energy">Énergie</option>
                                    <option value="Engineering/ESG">Ingénierie/ESG</option>
                                    <option value="Financial Services">Services financiers</option>
                                    <option value="FMCG/CPG">Biens de consommation courante/PGC</option>
                                    <option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
                                    <option value="Manufacturing">Fabrication</option>
                                    <option value="Payment Platform">Plateforme de paiement</option>
                                    <option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
                                    <option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1ei5-core-solution" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1ei5-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                   <option value="Built In-house">Développé en interne</option>
                                    <option value="Investment Opportunity">Possibilité dinvestissement</option>
                                    <option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
                                    <option value="Acquisition">Acquisition</option>  
                                                                    
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1ei5-country" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1ei5-city"
                                    placeholder="City/Province" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1ei5-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($discovery_type == 'gfa1f5'){
?>

<div class="col-md-12 col-12 gfa1fi5">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">
                <?php echo $translations['startup']['form-2']['head-5']; ?>
            </h4>
        </div>
        <div class="card-body">
            <form class="form form-vertical gfa1fi5-streaming" name="gfa2fi" onsubmit="gfa_streaming('gfa1fi5'); return false;" action="#">
                <div class="row">
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="first-name-icon"><?php echo $translations['startup']['form-2']['name']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="text" id="first-name-icon" class="form-control" name="gfa1fi5-fname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-1']; ?>" required />

                                <input type="text" id="last-name-icon" class="form-control" name="gfa1fi5-lname"
                                    placeholder="<?php echo $translations['startup']['form-2']['name']['sub-2']; ?>" required />
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="gfa1fi5-organisation-type" class="gfa1fi5-organisation-type"
                        value="startup" />
                    <input type="hidden" name="gfa1fi5-interest" class="gfa1fi5-interest" value="GFMax" />
                    <input type="hidden" name="gfa1fi5-current-stage" class="gfa1fi5-current-stage" value="Pre-Launch" />
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['email']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="mail"></i></span>
                                <input type="email" id="email-id-icon" class="form-control gfa1fi5-checkEmail"
                                    name="gfa1fi5-email" placeholder="<?php echo $translations['startup']['form-2']['email']; ?>" onkeydown="checkEmail('gfa1fi5', '27')" required />
                            </div>
                        </div>
                        <span class="gfa1fi5-showData"></span>
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
                    <!--        name="gfa1fi5-pass"-->
                    <!--        placeholder="Password"-->
                    <!--      />-->

                    <!--      <input-->
                    <!--        type="password"-->
                    <!--        id="password-icon"-->
                    <!--        class="form-control"-->
                    <!--        name="gfa1fi5-password"-->
                    <!--        placeholder="Confirm Password"-->
                    <!--      />-->
                    <!--    </div>-->
                    <!--  </div>-->

                    <!--</div>-->
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon">Sexe</label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1fi5-gender" class="form-select" id="basicSelect" required>
                                    
                                   
                                    <option value="Male">Homme</option>
                                    <option value="Female">Femme</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['mobile']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="smartphone"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1fi5-mobile"
                                    placeholder="Entrez un numéro à 10 chiffres" pattern="\d{10}" title="Veuillez entrer exactement 10 chiffres" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['staff-num']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="user"></i></span>
                                <input type="number" id="contact-info-icon" class="form-control" name="gfa1fi5-worker"
                                    placeholder="Number of team members/staffs (including founder)" required />
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['model']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1fi5-model" class="form-select" id="basicSelect" required>
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
                    
                     <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?><small style="color: red; font-weight: bold; ">: assurez-vous que ces informations sont exactes ; elles seront utilisées pour vos recommandations.</small></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1fi5-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
                                                                        <option value="Digital Banks">Banques numériques</option>
                                    <option value="Energy">Énergie</option>
                                    <option value="Engineering/ESG">Ingénierie/ESG</option>
                                    <option value="Financial Services">Services financiers</option>
                                    <option value="FMCG/CPG">Biens de consommation courante/PGC</option>
                                    <option value="ICT Technology Products & Solutions">Produits et solutions technologiques ICT</option>
                                    <option value="Manufacturing">Fabrication</option>
                                    <option value="Payment Platform">Plateforme de paiement</option>
                                    <option value="Renewable Energy Software">Logiciel dénergie renouvelable</option>
                                    <option value="Telecommunication">Télécommunication</option>
                                    
                                </select>
                            </div>
                        </div>
                    </div>
                  
                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['core-solution']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="users"></i></span>
                                <select name="gfa1fi5-core-solution" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution']['blank']; ?></option>
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
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['solution-own']['head']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="file"></i></span>
                                <select name="gfa1fi5-own" class="form-select" id="basicSelect" >
                                    <option value=""><?php echo $translations['startup']['form-2']['solution-own']['blank']; ?></option>
                                   <option value="Built In-house">Développé en interne</option>
                                    <option value="Investment Opportunity">Possibilité dinvestissement</option>
                                    <option value="Partnership/Joint Venture">Partenariat / Coentreprise</option>
                                    <option value="Acquisition">Acquisition</option> 
                                                                    
                                </select>
                            </div>
                        </div>
                    </div>


                    <div class="col-12">
                        <div class="mb-1">
                            <label class="form-label" for="email-id-icon"><?php echo $translations['startup']['form-2']['location']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <select name="gfa1fi5-country" class="form-select" id="basicSelect" required>
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
                            <label class="form-label" for="contact-info-icon"><?php echo $translations['startup']['form-2']['city']; ?></label>
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i data-feather="map-pin"></i></span>
                                <input type="text" id="contact-info-icon" class="form-control" name="gfa1fi5-city"
                                    placeholder="City/Province" required />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between">
                    <button class="btn btn-success gfa1fi5-subscribeBtn">
                        <?php echo $translations['startup']['form-2']['submit']; ?>
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