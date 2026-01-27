
                <!-- BEGIN: Content-->
                <div class="app-content content" style="margin-left: 0px;">
                    <?php 
                        $webinar_details = $this->gfa_model->get_webinar_details($event_slug)[0]; 
                        $event_date = strtotime($webinar_details['Date']);
                        $event_date = date('l jS F Y', $event_date);
                    ?>
                    <div class="content-overlay"></div>
                    <div class="header-navbar-shadow"></div>
                    <div class="content-wrapper container-xxl p-0">
                        <div class="content-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card"></div>
                                    <center><br>
                                        <img style="max-width: 700px; height: auto;" src="<?php echo $webinar_details['Banner']; ?>">
                                        <br><br>
                                    </center>
                                    <!-- profile -->
                                    <div class="card">
                                        <div class="card-header border-bottom">

                                            <h4 class="card-title">Webinar Registration:</h4><br>

                                            <p><?php echo $webinar_details['Theme']; ?></p>

                                        </div>

                                        <div class="card-header border-bottom">

                                            <p style="white-space: pre-line"><strong>Topic: </strong> <?php echo $webinar_details['Topic']; ?></p>

                                            <p style="white-space: pre-line"><strong>Description: </strong> <?php echo $webinar_details['Description']; ?> </p>

                                            <p style="white-space: pre-line"><strong>Time: </strong> <?php echo $event_date; ?>, <?php echo $webinar_details['Time']; ?>
                                                in <?php echo $webinar_details['TimeZone']; ?></p>

                                            <!--   <p style="white-space: pre-line">-->
                                            <!--   <pre>-->
                                            <!--Roundtable talk with Funke Bucknor-Obruthe: Business Sustainability in a High-Inflation Economy-->
                                            <!--   </pre>-->
                                            <!--   </p>-->
                                            <!--   <p style="white-space: pre-line"><strong>Description</strong></p>-->

                                            <!--<p style="white-space: pre-line"> See you there!</p>-->



                                        </div>


                                        <div class="card-body py-2 my-25">

                                            <!--/ header section -->

                                            <script>
                                            function preview() {
                                                frame.src = URL.createObjectURL(event.target.files[0]);


                                            }
                                            $(function() {

                                                $(".fileInfox").submit(function(e) {
                                                    //---------------^---------------
                                                    e.preventDefault();
                                                    //$(".saveFile3").html('Finish Uploading');
                                                    var form = $(this)[0];
                                                    var formData = new FormData(form);

                                                    $.ajax({
                                                        data: formData,
                                                        type: "POST",
                                                        url: "<?php echo base_url(); ?>gfa/profile_photo",
                                                        error: function() {
                                                            $(".savePhoto").html('Error')
                                                        },
                                                        beforeSend: function() {
                                                            $(".savePhoto").html(
                                                                'Saving Photo...')
                                                        },
                                                        processData: false,
                                                        contentType: false,
                                                        success: function(data) {

                                                            //if(data==1){
                                                            $(".savePhoto").html(data);


                                                            //}
                                                        }
                                                    });
                                                    return false;

                                                });
                                            });
                                            </script>
                                            <!--        <form>-->
                                            <!--  <input type="file" onchange="preview()">-->
                                            <!--  <img id="frame" src="" width="100px" height="100px"/>-->
                                            <!--</form>-->

                                            <!-- form -->
                                            <form class="validate-form mt-2 pt-50 startUpForm" method="post" action=""
                                                enctype="multipart/form-data">
                                                <div class="row">


                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountFirstName">First
                                                            Name <span style="color:red;">*</span></label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* First Name</label>-->
                                                        <input type="text" class="form-control" id="accountFirstName"
                                                            name="firstName" placeholder="John" value=""
                                                            data-msg="Please enter first name" required/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountLastName">Last
                                                            Name <span style="color:red;">*</span></label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Last Name</label>-->
                                                        <input type="text" class="form-control" id="accountLastName"
                                                            name="lastName" placeholder="Bamako" value=""
                                                            data-msg="Please enter last name" required/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountAddress">Gender <span style="color:red;">*</span></label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->

                                                        <select name="gender" class="form-control form-select" id="accountGender" required>

                                                            <option value="">- Select -</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>

                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountEmail">Email <span style="color:red;">*</span></label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Email</label>-->

                                                        <input type="email" class="form-control" id="accountEmail"
                                                            name="email" placeholder="Email" value="" required/>
                                                    </div>

                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountPhoneNumber">Phone
                                                            Number <span style="color:red;">*</span></label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Phone Number</label>-->
                                                        <input type="text" class="form-control account-number-mask"
                                                            id="accountPhoneNumber" name="phoneNumber"
                                                            placeholder="Phone Number" value="" required/>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="country">Your Country <span style="color:red;">*</span></label>
                                                        <select id="country" name="country" class="select form-select" required>

                                                            <option value="Afghanistan">Afghanistan</option>
                                                            <option value="Albania">Albania</option>
                                                            <option value="Algeria">Algeria</option>
                                                            <option value="American Samoa">American Samoa</option>
                                                            <option value="Andorra">Andorra</option>
                                                            <option value="Angola">Angola</option>
                                                            <option value="Anguilla">Anguilla</option>
                                                            <option value="Antartica">Antarctica</option>
                                                            <option value="Antigua and Barbuda">Antigua and Barbuda
                                                            </option>
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
                                                            <option value="Bosnia and Herzegowina">Bosnia and
                                                                Herzegowina</option>
                                                            <option value="Botswana">Botswana</option>
                                                            <option value="Bouvet Island">Bouvet Island</option>
                                                            <option value="Brazil">Brazil</option>
                                                            <option value="British Indian Ocean Territory">British
                                                                Indian Ocean Territory</option>
                                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                            <option value="Bulgaria">Bulgaria</option>
                                                            <option value="Burkina Faso">Burkina Faso</option>
                                                            <option value="Burundi">Burundi</option>
                                                            <option value="Cambodia">Cambodia</option>
                                                            <option value="Cameroon">Cameroon</option>
                                                            <option value="Canada">Canada</option>
                                                            <option value="Cape Verde">Cape Verde</option>
                                                            <option value="Cayman Islands">Cayman Islands</option>
                                                            <option value="Central African Republic">Central African
                                                                Republic</option>
                                                            <option value="Chad">Chad</option>
                                                            <option value="Chile">Chile</option>
                                                            <option value="China">China</option>
                                                            <option value="Christmas Island">Christmas Island</option>
                                                            <option value="Cocos Islands">Cocos (Keeling) Islands
                                                            </option>
                                                            <option value="Colombia">Colombia</option>
                                                            <option value="Comoros">Comoros</option>
                                                            <option value="Congo">Congo</option>
                                                            <option value="Congo">Congo, the Democratic Republic of the
                                                            </option>
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
                                                            <option value="Dominican Republic">Dominican Republic
                                                            </option>
                                                            <option value="East Timor">East Timor</option>
                                                            <option value="Ecuador">Ecuador</option>
                                                            <option value="Egypt">Egypt</option>
                                                            <option value="El Salvador">El Salvador</option>
                                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                            <option value="Eritrea">Eritrea</option>
                                                            <option value="Estonia">Estonia</option>
                                                            <option value="Ethiopia">Ethiopia</option>
                                                            <option value="Falkland Islands">Falkland Islands (Malvinas)
                                                            </option>
                                                            <option value="Faroe Islands">Faroe Islands</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finland">Finland</option>
                                                            <option value="France">France</option>
                                                            <option value="France Metropolitan">France, Metropolitan
                                                            </option>
                                                            <option value="French Guiana">French Guiana</option>
                                                            <option value="French Polynesia">French Polynesia</option>
                                                            <option value="French Southern Territories">French Southern
                                                                Territories</option>
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
                                                            <option value="Heard and McDonald Islands">Heard and Mc
                                                                Donald Islands</option>
                                                            <option value="Holy See">Holy See (Vatican City State)
                                                            </option>
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
                                                            <option value="Democratic People's Republic of Korea">Korea,
                                                                Democratic People's Republic of</option>
                                                            <option value="Korea">Korea, Republic of</option>
                                                            <option value="Kuwait">Kuwait</option>
                                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                            <option value="Lao">Lao People's Democratic Republic
                                                            </option>
                                                            <option value="Latvia">Latvia</option>
                                                            <option value="Lebanon">Lebanon</option>
                                                            <option value="Lesotho">Lesotho</option>
                                                            <option value="Liberia">Liberia</option>
                                                            <option value="Libyan Arab Jamahiriya">Libyan Arab
                                                                Jamahiriya</option>
                                                            <option value="Liechtenstein">Liechtenstein</option>
                                                            <option value="Lithuania">Lithuania</option>
                                                            <option value="Luxembourg">Luxembourg</option>
                                                            <option value="Macau">Macau</option>
                                                            <option value="Macedonia">Macedonia, The Former Yugoslav
                                                                Republic of</option>
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
                                                            <option value="Micronesia">Micronesia, Federated States of
                                                            </option>
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
                                                            <option value="Netherlands Antilles">Netherlands Antilles
                                                            </option>
                                                            <option value="New Caledonia">New Caledonia</option>
                                                            <option value="New Zealand">New Zealand</option>
                                                            <option value="Nicaragua">Nicaragua</option>
                                                            <option value="Niger">Niger</option>
                                                            <option value="Nigeria" selected>Nigeria</option>
                                                            <option value="Niue">Niue</option>
                                                            <option value="Norfolk Island">Norfolk Island</option>
                                                            <option value="Northern Mariana Islands">Northern Mariana
                                                                Islands</option>
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
                                                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                            </option>
                                                            <option value="Saint LUCIA">Saint LUCIA</option>
                                                            <option value="Saint Vincent">Saint Vincent and the
                                                                Grenadines</option>
                                                            <option value="Samoa">Samoa</option>
                                                            <option value="San Marino">San Marino</option>
                                                            <option value="Sao Tome and Principe">Sao Tome and Principe
                                                            </option>
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
                                                            <option value="South Georgia">South Georgia and the South
                                                                Sandwich Islands</option>
                                                            <option value="Span">Spain</option>
                                                            <option value="SriLanka">Sri Lanka</option>
                                                            <option value="St. Helena">St. Helena</option>
                                                            <option value="St. Pierre and Miguelon">St. Pierre and
                                                                Miquelon</option>
                                                            <option value="Sudan">Sudan</option>
                                                            <option value="Suriname">Suriname</option>
                                                            <option value="Svalbard">Svalbard and Jan Mayen Islands
                                                            </option>
                                                            <option value="Swaziland">Swaziland</option>
                                                            <option value="Sweden">Sweden</option>
                                                            <option value="Switzerland">Switzerland</option>
                                                            <option value="Syria">Syrian Arab Republic</option>
                                                            <option value="Taiwan">Taiwan, Province of China</option>
                                                            <option value="Tajikistan">Tajikistan</option>
                                                            <option value="Tanzania">Tanzania, United Republic of
                                                            </option>
                                                            <option value="Thailand">Thailand</option>
                                                            <option value="Togo">Togo</option>
                                                            <option value="Tokelau">Tokelau</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Trinidad and Tobago">Trinidad and Tobago
                                                            </option>
                                                            <option value="Tunisia">Tunisia</option>
                                                            <option value="Turkey">Turkey</option>
                                                            <option value="Turkmenistan">Turkmenistan</option>
                                                            <option value="Turks and Caicos">Turks and Caicos Islands
                                                            </option>
                                                            <option value="Tuvalu">Tuvalu</option>
                                                            <option value="Uganda">Uganda</option>
                                                            <option value="Ukraine">Ukraine</option>
                                                            <option value="United Arab Emirates">United Arab Emirates
                                                            </option>
                                                            <option value="United Kingdom">United Kingdom</option>
                                                            <option value="United States">United States</option>
                                                            <option value="United States Minor Outlying Islands">United
                                                                States Minor Outlying Islands</option>
                                                            <option value="Uruguay">Uruguay</option>
                                                            <option value="Uzbekistan">Uzbekistan</option>
                                                            <option value="Vanuatu">Vanuatu</option>
                                                            <option value="Venezuela">Venezuela</option>
                                                            <option value="Vietnam">Viet Nam</option>
                                                            <option value="Virgin Islands (British)">Virgin Islands
                                                                (British)</option>
                                                            <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)
                                                            </option>
                                                            <option value="Wallis and Futana Islands">Wallis and Futuna
                                                                Islands</option>
                                                            <option value="Western Sahara">Western Sahara</option>
                                                            <option value="Yemen">Yemen</option>
                                                            <option value="Serbia">Serbia</option>
                                                            <option value="Zambia">Zambia</option>
                                                            <option value="Zimbabwe">Zimbabwe</option>
                                                        </select>
                                                    </div>


                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountZipCode">Website</label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Zip Code</label>-->
                                                        <input type="text" class="form-control account-zip-code"
                                                            id="accountZipCode" name="Website" placeholder="Website"
                                                            value="" />
                                                    </div>



                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountAddress">LinkedIn
                                                            Profile</label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
                                                        <input type="text" class="form-control" id="accountAddress"
                                                            name="LinkedIn" placeholder="LinkedIn Profile ID"
                                                            value="" />
                                                    </div>


                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountAddress">How many people
                                                            will attend with you?</label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* How did you hear about us?</label>-->

                                                        <select id="country" name="Hear_Us"
                                                            class=" form-control form-select">
                                                            <option value="0">None</option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountAddress">Company
                                                            Name</label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Linkedin Profile</label>-->
                                                        <input type="text" class="form-control" id="accountAddress"
                                                            name="Corporate_Name" placeholder="Company Name"
                                                            value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Corporate_Name'];  ?>" />
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label"
                                                            for="normalMultiSelect">Industry</label>
                                                        <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Industry</label>-->

                                                        <select class="select2 form-select" name="industry[]"
                                                            id="select2-multiple" multiple>


                                                            <?php	$rowIndustry = $this->admin_model->getAllIndustry();  foreach($rowIndustry as $rowArrayIndustry){  ?>
                                                            <option><?php echo $rowArrayIndustry["industry"] ?></option>
                                                            <?php }  ?>
                                                        </select>
                                                    </div>
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountReadiness">Corporate
                                                            Solutions</label>
                                                        <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->

                                                        <select id="Readiness" name="Solution_Corperate"
                                                            class=" form-control form-select">

                                                            <option value="Digital Banks">Digital Banks</option>
                                                            <option value="Energy">Energy</option>
                                                            <option value="Engineering/ESG">Engineering/ESG</option>
                                                            <option value="Financial Services">Financial Services
                                                            </option>
                                                            <option value="FMCG/CPG">FMCG/CPG</option>
                                                            <option value="ICT Technology Products & Solutions">ICT
                                                                Technology Products & Solutions</option>
                                                            <option value="Manufacturing">Manufacturing</option>
                                                            <option value="Payment Platform">Payment Platform</option>
                                                            <option value="Renewable Energy Software">Renewable Energy
                                                                Software</option>
                                                            <option value="Telecommunication">Telecommunication</option>

                                                            <option value="Agnostic">Agnostic</option>
                                                            <option value="Others">Others</option>
                                                        </select>
                                                    </div>
                                                    <!--        <div class="col-12 col-sm-6 mb-1">-->
                                                    <!--          <label class="form-label" for="accountReadiness">How would you like to engage with startups in Event</label>-->
                                                    <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->

                                                    <!--          <select id="Readiness" name="Engage_Startup" class=" form-control form-select">-->



                                                    <!--<option value="As a sponsor of an Accelerator Program">As a sponsor of an Accelerator Program</option>-->
                                                    <!--<option value="As an Investor in Startups">As an Investor in Startups</option>-->
                                                    <!--<option value="Solutions on Efficiency and cost saving">Solutions on Efficiency and cost saving</option>-->
                                                    <!--<option value="Customised Partnership">Customised Partnership</option>-->
                                                    <!--<option value="Others">Others</option>-->

                                                    <!--           </select>  -->
                                                    <!--             </div>-->


                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountModel">Whats your business
                                                            model</label>
                                                        <!-- <label class="form-label" for="accountInvolvement" style="color:#ff0000;">* Whats your business model</label>-->

                                                        <select id="Model" name="Startup_Model"
                                                            class=" form-control form-select">



                                                            <option value="B2B">B2B</option>
                                                            <option value="B2B2C">B2B2C</option>
                                                            <option value="B2C">B2C</option>
                                                            <option value="B2C/B2B">B2C/B2B</option>
                                                            <option value="D2C">D2C</option>
                                                            <option value="D2C/B2B">D2C/B2B</option>
                                                            <option value="D2C/B2C">D2C/B2C</option>
                                                        </select>
                                                    </div>



                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountReadiness">Core solutions
                                                            to corporate</label>
                                                        <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->

                                                        <select id="Readiness" name="Core_Interest_Corporate"
                                                            class=" form-control form-select">



                                                            <option value="Increasing revenue">Increasing revenue
                                                            </option>
                                                            <option value="Reducing company costs">Reducing company
                                                                costs</option>
                                                            <option
                                                                value="Enhance operational excellence, capabilities or performance management">
                                                                Enhance operational excellence, capabilities or
                                                                performance management</option>
                                                            <option value="Accessing new markets/customers">Accessing
                                                                new markets/customers</option>
                                                            <option value="Increasing sales in existing markets">
                                                                Increasing sales in existing markets</option>
                                                            <option
                                                                value="Improving your access to technology and other resources">
                                                                Improving your access to technology and other resources
                                                            </option>
                                                            <option
                                                                value="Improving your product offering for your customers">
                                                                Improving your product offering for your customers
                                                            </option>
                                                            <option value="Diversifying your product offerings">
                                                                Diversifying your product offerings</option>
                                                            <option
                                                                value="Digital Transformation digital transformation for a company's business process, culture, and customer experiences to meet changing business and market requirements">
                                                                Digital Transformation digital transformation for a
                                                                company's business process, culture and customer
                                                                experiences to meet changing business and market
                                                                requirements</option>
                                                            <option
                                                                value="Aggregation of data and gaining new insights">
                                                                Aggregation of data and gaining new insights</option>
                                                            <option
                                                                value="Solutions to enable a smart workforce across multiple internal functions">
                                                                Solutions to enable a smart workforce across multiple
                                                                internal functions</option>
                                                        </select>
                                                    </div>
                                                    <!-- <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountReadiness">Corporate Solution Proximity to Company's Core</label>
              <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>
              
              <select id="Readiness" name="Corporate_Solution_Prox" class=" form-control form-select">
              
                       
    <option value="Adjacent">Adjacent</option>
    <option value="Close">Close</option>
    <option value="Radical">Radical</option>
    
               </select>  
                 </div>-->
                                                    <div class="col-12 col-sm-6 mb-1">
                                                        <label class="form-label" for="accountReadiness">Solution
                                                            Ownership/Relationship Style</label>
                                                        <!-- <label class="form-label" for="accountReadines" style="color:#ff0000;">* Product / Tech Readines?</label>-->

                                                        <select id="Readiness" name="Solution_Ownership"
                                                            class=" form-control form-select">

                                                            Solution_Ownership
                                                            <option value="Built In-house">Built In-house</option>
                                                            <option value="Investment Opportunity">Investment
                                                                Opportunity</option>
                                                            <option value="Partnership/Joint Venture">Partnership/Joint
                                                                Venture</option>
                                                            <option value="Acquisition">Acquisition</option>

                                                        </select>
                                                    </div>
                                                    <input type="hidden" name="slug" value="<?php echo $event_slug; ?>">
                                                    <div class="col-12">
                                                        <button type="submit"
                                                            class="btn btn-primary mt-1 me-1 saveBtn">Register</button>
                                                        <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
                                                        <span class="displayAction"></span>



                                                    </div>
                                                </div>
                                            </form>
                                            <!--/ form -->
                                        </div>
                                    </div>

                                    <script>
                                    $(function() {

                                        $('inputX').keyup(function() {

                                            var startupInfo = $('.startUpForm').serialize();
                                            $.ajax({
                                                data: startupInfo,
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>gfa/checkProfileErrorDemo",
                                                error: function() {
                                                    $(".showProfileError").html('Error');
                                                },
                                                beforeSend: function() {
                                                    $(".showProfileError").html('');
                                                },
                                                success: function(data) {
                                                    //

                                                    $(".showProfileError").html(data);



                                                }

                                            });
                                        });

                                        $('selectX').change(function() {

                                            var startupInfo = $('.startUpForm').serialize();
                                            $.ajax({
                                                data: startupInfo,
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>gfa/checkProfileErrorDemo",
                                                error: function() {
                                                    $(".showProfileError").html('Error');
                                                },
                                                beforeSend: function() {
                                                    $(".showProfileError").html('');
                                                },
                                                success: function(data) {
                                                    //

                                                    $(".showProfileError").html(data);



                                                }

                                            });
                                        });

                                        var last_valid_selection = null;

                                        $('.userRequest_activity').change(function(event) {

                                            if ($(this).val().length > 3) {

                                                $(this).val(last_valid_selection);
                                                $(".selectError").html(
                                                    'You can not select more 3 options');
                                            } else {
                                                last_valid_selection = $(this).val();
                                                $(".selectError").html('');
                                            }
                                        });

                                        $(".saveBtn").click(function(e) {
                                            //---------------^---------------
                                            e.preventDefault();

                                            var accountFirstName = document.getElementById('accountFirstName').value;
                                            var accountLastName = document.getElementById('accountLastName').value;
                                            var accountEmail = document.getElementById('accountEmail').value;
                                            var accountGender = document.getElementById('accountGender').value;
                                            var accountPhone = document.getElementById('accountPhoneNumber').value;
                                            var country = document.getElementById('country').value;


                                            if(accountFirstName == '' || accountLastName == '' || accountEmail == '' || accountGender == '' || accountPhone == '' || country == ''){
                                                //alert('Kindly fill all required fields');
                                                swal("Error", "Kindly fill all required fields", "error");
                                                return false;
                                            }


                                            var startupInfo = $('.startUpForm').serialize();
                                            $.ajax({
                                                data: startupInfo,
                                                type: "POST",
                                                url: "<?php echo base_url(); ?>gfa/register_event",
                                                error: function() {
                                                    $(".displayAction").html(
                                                        'Error saving data');
                                                },
                                                beforeSend: function() {
                                                    $(".saveBtn").html('Saving Profile...');
                                                    $(".saveBtn").prop('disabled', true);
                                                },
                                                success: function(data) {
                                                    //
                                                    // $(".displayAction").html(
                                                    //     "Successful Registration! Please check your email for event details"
                                                    //     );

                                                    swal("Success", "Successful Registration! Please check your email for event details", "success");
                                                    $(".saveBtn").html('Saved');
                                                    $(".saveBtn").prop('disabled', true);

                                                    setTimeout(function(){
                                                        window.location.reload(1);
                                                    }, 5000);


                                                }

                                            });


                                        });

                                    });
                                    </script>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- END: Content-->





                <div class="sidenav-overlay"></div>
                <div class="drag-target"></div>


