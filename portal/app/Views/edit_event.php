<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Update Event</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/all_events'); ?>">All Events</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/manage_event'); ?>">Manage Events</a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
 <?php   
            $updateEvent =  $this->gfa_model->getEventById($email,$id);   ?>
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="event_type" placeholder="Free">
                  <option value="<?php echo $updateEvent[0]['event_type'];?>"><?php echo $updateEvent[0]['event_type']; ?></option>    
                 <option value="Online">Online</option>
                  <option value="Physical">Physical</option> 
                  <option value="Hybrid">Hybrid</option> 
                    </select>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select selectPay" name="ticket" placeholder="Free">
                  <option value="<?php echo $updateEvent[0]['ticket'];?>"><?php echo $updateEvent[0]['ticket']; ?></option>    
                 <option value="Free">Free</option>
                  <!-- <option value="Paid">Paid</option>  -->
                    </select>
                </div>
              </div>
              <hr class="mb-2" />
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="Title" value="<?php echo $updateEvent[0]['title']; ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="venue" placeholder="Venue" value="<?php echo $updateEvent[0]['venue']; ?>" />
                </div>
              </div>
               <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time">Start Date</label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="start_date"
            placeholder="YYYY-MM-DD HH:MM"
            value="<?php echo $updateEvent[0]['start_date']; ?>"
          />
        </div>
         <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time">End Date</label>
          <input
            type="text"
            id="fp-date-time"
            name="end_date"
            class="form-control flatpickr-date-time"
            placeholder="YYYY-MM-DD HH:MM"
            value="<?php echo $updateEvent[0]['end_date']; ?>"
          />
          
          
        </div>
         
               
               <div class="col-sm-6 col-12" style="display:none;">
                <div class="mb-2">
                  <input type="text" class="form-control" name="amount" placeholder="Amount" value="<?php echo $updateEvent[0]['amount']; ?>"/>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                  <label>Event Cover Picture </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control"  placeholder="Event Cover Picture" />
                  <input type="hidden" class="form-control" name='getfile[]' value="<?php echo $updateEvent[0]['picture'] ?>"  />
                  <input type="hidden" class="form-control" name='id' value="<?php echo $id ?>"  />
                </div>
              </div>
              <div class="col-sm-6 col-12">
              <label>Event Meeting Link </label>
                <div class="mb-2">
                  <input type="text" class="form-control" name="meeting_link" placeholder="Zoom, Microsoft Teams,Google Meet etc." value="<?php echo $updateEvent[0]['meeting_link']; ?>" />
                </div>
              </div>
              <!-- <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="currency" placeholder="Currency" >
                  <option value="<?php echo $updateEvent[0]['currency']; ?>" selected="selected" ><?php echo $updateEvent[0]['currency']; ?></option>
                  <option value=""  >CURRENCY</option>    
                <option value="USD">USD</option>
    <option value="EUR" label="Euro">EUR</option>
    <option value="JPY" label="Japanese yen">JPY</option>
    <option value="GBP" label="Pound sterling">GBP</option>
    <option value="NGN" label="Nigerian naira">NGN</option> -->
    <!-- <option disabled>──────────</option>
    <option value="AED" label="United Arab Emirates dirham">AED</option>
    <option value="AFN" label="Afghan afghani">AFN</option>
    <option value="ALL" label="Albanian lek">ALL</option>
    <option value="AMD" label="Armenian dram">AMD</option>
    <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
    <option value="AOA" label="Angolan kwanza">AOA</option>
    <option value="ARS" label="Argentine peso">ARS</option>
    <option value="AUD" label="Australian dollar">AUD</option>
    <option value="AWG" label="Aruban florin">AWG</option>
    <option value="AZN" label="Azerbaijani manat">AZN</option>
    <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
    <option value="BBD" label="Barbadian dollar">BBD</option>
    <option value="BDT" label="Bangladeshi taka">BDT</option>
    <option value="BGN" label="Bulgarian lev">BGN</option>
    <option value="BHD" label="Bahraini dinar">BHD</option>
    <option value="BIF" label="Burundian franc">BIF</option>
    <option value="BMD" label="Bermudian dollar">BMD</option>
    <option value="BND" label="Brunei dollar">BND</option>
    <option value="BOB" label="Bolivian boliviano">BOB</option>
    <option value="BRL" label="Brazilian real">BRL</option>
    <option value="BSD" label="Bahamian dollar">BSD</option>
    <option value="BTN" label="Bhutanese ngultrum">BTN</option>
    <option value="BWP" label="Botswana pula">BWP</option>
    <option value="BYN" label="Belarusian ruble">BYN</option>
    <option value="BZD" label="Belize dollar">BZD</option>
    <option value="CAD" label="Canadian dollar">CAD</option>
    <option value="CDF" label="Congolese franc">CDF</option>
    <option value="CHF" label="Swiss franc">CHF</option>
    <option value="CLP" label="Chilean peso">CLP</option>
    <option value="CNY" label="Chinese yuan">CNY</option>
    <option value="COP" label="Colombian peso">COP</option>
    <option value="CRC" label="Costa Rican colón">CRC</option>
    <option value="CUC" label="Cuban convertible peso">CUC</option>
    <option value="CUP" label="Cuban peso">CUP</option>
    <option value="CVE" label="Cape Verdean escudo">CVE</option>
    <option value="CZK" label="Czech koruna">CZK</option>
    <option value="DJF" label="Djiboutian franc">DJF</option>
    <option value="DKK" label="Danish krone">DKK</option>
    <option value="DOP" label="Dominican peso">DOP</option>
    <option value="DZD" label="Algerian dinar">DZD</option>
    <option value="EGP" label="Egyptian pound">EGP</option>
    <option value="ERN" label="Eritrean nakfa">ERN</option>
    <option value="ETB" label="Ethiopian birr">ETB</option>
    <option value="EUR" label="EURO">EUR</option>
    <option value="FJD" label="Fijian dollar">FJD</option>
    <option value="FKP" label="Falkland Islands pound">FKP</option>
    <option value="GBP" label="British pound">GBP</option>
    <option value="GEL" label="Georgian lari">GEL</option>
    <option value="GGP" label="Guernsey pound">GGP</option>
    <option value="GHS" label="Ghanaian cedi">GHS</option>
    <option value="GIP" label="Gibraltar pound">GIP</option>
    <option value="GMD" label="Gambian dalasi">GMD</option>
    <option value="GNF" label="Guinean franc">GNF</option>
    <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
    <option value="GYD" label="Guyanese dollar">GYD</option>
    <option value="HKD" label="Hong Kong dollar">HKD</option>
    <option value="HNL" label="Honduran lempira">HNL</option>
    <option value="HRK" label="Croatian kuna">HRK</option>
    <option value="HTG" label="Haitian gourde">HTG</option>
    <option value="HUF" label="Hungarian forint">HUF</option>
    <option value="IDR" label="Indonesian rupiah">IDR</option>
    <option value="ILS" label="Israeli new shekel">ILS</option>
    <option value="IMP" label="Manx pound">IMP</option>
    <option value="INR" label="Indian rupee">INR</option>
    <option value="IQD" label="Iraqi dinar">IQD</option>
    <option value="IRR" label="Iranian rial">IRR</option>
    <option value="ISK" label="Icelandic króna">ISK</option>
    <option value="JEP" label="Jersey pound">JEP</option>
    <option value="JMD" label="Jamaican dollar">JMD</option>
    <option value="JOD" label="Jordanian dinar">JOD</option>
    <option value="JPY" label="Japanese yen">JPY</option>
    <option value="KES" label="Kenyan shilling">KES</option>
    <option value="KGS" label="Kyrgyzstani som">KGS</option>
    <option value="KHR" label="Cambodian riel">KHR</option>
    <option value="KID" label="Kiribati dollar">KID</option>
    <option value="KMF" label="Comorian franc">KMF</option>
    <option value="KPW" label="North Korean won">KPW</option>
    <option value="KRW" label="South Korean won">KRW</option>
    <option value="KWD" label="Kuwaiti dinar">KWD</option>
    <option value="KYD" label="Cayman Islands dollar">KYD</option>
    <option value="KZT" label="Kazakhstani tenge">KZT</option>
    <option value="LAK" label="Lao kip">LAK</option>
    <option value="LBP" label="Lebanese pound">LBP</option>
    <option value="LKR" label="Sri Lankan rupee">LKR</option>
    <option value="LRD" label="Liberian dollar">LRD</option>
    <option value="LSL" label="Lesotho loti">LSL</option>
    <option value="LYD" label="Libyan dinar">LYD</option>
    <option value="MAD" label="Moroccan dirham">MAD</option>
    <option value="MDL" label="Moldovan leu">MDL</option>
    <option value="MGA" label="Malagasy ariary">MGA</option>
    <option value="MKD" label="Macedonian denar">MKD</option>
    <option value="MMK" label="Burmese kyat">MMK</option>
    <option value="MNT" label="Mongolian tögrög">MNT</option>
    <option value="MOP" label="Macanese pataca">MOP</option>
    <option value="MRU" label="Mauritanian ouguiya">MRU</option>
    <option value="MUR" label="Mauritian rupee">MUR</option>
    <option value="MVR" label="Maldivian rufiyaa">MVR</option>
    <option value="MWK" label="Malawian kwacha">MWK</option>
    <option value="MXN" label="Mexican peso">MXN</option>
    <option value="MYR" label="Malaysian ringgit">MYR</option>
    <option value="MZN" label="Mozambican metical">MZN</option>
    <option value="NAD" label="Namibian dollar">NAD</option>
    
    <option value="NIO" label="Nicaraguan córdoba">NIO</option>
    <option value="NOK" label="Norwegian krone">NOK</option>
    <option value="NPR" label="Nepalese rupee">NPR</option>
    <option value="NZD" label="New Zealand dollar">NZD</option>
    <option value="OMR" label="Omani rial">OMR</option>
    <option value="PAB" label="Panamanian balboa">PAB</option>
    <option value="PEN" label="Peruvian sol">PEN</option>
    <option value="PGK" label="Papua New Guinean kina">PGK</option>
    <option value="PHP" label="Philippine peso">PHP</option>
    <option value="PKR" label="Pakistani rupee">PKR</option>
    <option value="PLN" label="Polish złoty">PLN</option>
    <option value="PRB" label="Transnistrian ruble">PRB</option>
    <option value="PYG" label="Paraguayan guaraní">PYG</option>
    <option value="QAR" label="Qatari riyal">QAR</option>
    <option value="RON" label="Romanian leu">RON</option>
    <option value="RSD" label="Serbian dinar">RSD</option>
    <option value="RUB" label="Russian ruble">RUB</option>
    <option value="RWF" label="Rwandan franc">RWF</option>
    <option value="SAR" label="Saudi riyal">SAR</option>
    <option value="SEK" label="Swedish krona">SEK</option>
    <option value="SGD" label="Singapore dollar">SGD</option>
    <option value="SHP" label="Saint Helena pound">SHP</option>
    <option value="SLL" label="Sierra Leonean leone">SLL</option>
    <option value="SLS" label="Somaliland shilling">SLS</option>
    <option value="SOS" label="Somali shilling">SOS</option>
    <option value="SRD" label="Surinamese dollar">SRD</option>
    <option value="SSP" label="South Sudanese pound">SSP</option>
    <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
    <option value="SYP" label="Syrian pound">SYP</option>
    <option value="SZL" label="Swazi lilangeni">SZL</option>
    <option value="THB" label="Thai baht">THB</option>
    <option value="TJS" label="Tajikistani somoni">TJS</option>
    <option value="TMT" label="Turkmenistan manat">TMT</option>
    <option value="TND" label="Tunisian dinar">TND</option>
    <option value="TOP" label="Tongan paʻanga">TOP</option>
    <option value="TRY" label="Turkish lira">TRY</option>
    <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
    <option value="TVD" label="Tuvaluan dollar">TVD</option>
    <option value="TWD" label="New Taiwan dollar">TWD</option>
    <option value="TZS" label="Tanzanian shilling">TZS</option>
    <option value="UAH" label="Ukrainian hryvnia">UAH</option>
    <option value="UGX" label="Ugandan shilling">UGX</option>
    <option value="USD" label="United States dollar">USD</option>
    <option value="UYU" label="Uruguayan peso">UYU</option>
    <option value="UZS" label="Uzbekistani soʻm">UZS</option>
    <option value="VES" label="Venezuelan bolívar soberano">VES</option>
    <option value="VND" label="Vietnamese đồng">VND</option>
    <option value="VUV" label="Vanuatu vatu">VUV</option>
    <option value="WST" label="Samoan tālā">WST</option>
    <option value="XAF" label="Central African CFA franc">XAF</option>
    <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
    <option value="XOF" label="West African CFA franc">XOF</option>
    <option value="XPF" label="CFP franc">XPF</option>
    <option value="ZAR" label="South African rand">ZAR</option>
    <option value="ZMW" label="Zambian kwacha">ZMW</option>
    <option value="ZWB" label="Zimbabwean bonds">ZWB</option> -->
                    <!-- </select>
                </div>
              </div> -->
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <div class="editor eventDoc textData" style="height:100px;">
             <?php  echo   $this->gfa_model->getEventByRef($updateEvent[0]['ref_id'])[0]['textdata']; ?>
                  </div>
                </div>
              </div>
              <div class="col-12 showPay" style="display:none">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Pass Categories(Payment)</h4>
        </div>
       
           
        <div class="card-body">
            <!--invoice-repeater -->
     <?php     $getPaymentJson =  $this->gfa_model->getEventPass($id)[0]['payment_cat'];
            $getPaymentJsonArray = json_decode($getPaymentJson,true);      
      foreach($getPaymentJsonArray as $getPayment){   ?>
            
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                 <div class="col-md-4 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Payment Categories</label>
              <select id="country" name="paymentCat[]" class="form-select" value="<?php  echo $getPayment['paymentCat'] ?>" >
                
                 <option value="Regular">Regular</option>
                  <option value="VIP">VIP</option>
                  <option value="VVIP">VVIP</option>
                </select>
                </div>
            </div>
            <div class="col-md-4 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Payment Tag</label>
              <select id="country" name="paymentTag[]" class="form-select">
                    <option value="<?php  echo $getPayment['paymentTag'] ?>"><?php  echo $getPayment['paymentTag'] ?></option>
                 <option value="">None</option>
                  <option value="Best">Best</option>
                  <option value="Recommended">Recommended</option>
                </select>
                </div>
            </div>
                  <div class="col-md-4 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Amount</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder=""
                        name="amount[]"
                        value="<?php  echo $getPayment['amount'] ?>"
                      />
                    </div>
                  </div>
                  
                  <div class="col-md-4 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Description</label>
             
              <textarea
                  
                  class="form-control"
                  id="textarea-counter"
                  rows="4"
                  placeholder=""
                  style="height: 100px"
				  name="paymentInfo[]"

                ><?php  echo $getPayment['paymentInfo'] ?>
              </textarea>
            </div>
            </div>
                  </div>
                 
                  

                  <!--<div class="col-md-2 col-12 mb-50">-->
                  <!--  <div class="mb-1">-->
                  <!--    <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">-->
                  <!--      <i data-feather="x" class="me-25"></i>-->
                        
                  <!--    </button>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
                <hr />
              </div>
               <?php } ?>
            </div>
           
             <div class="input_fields_wrap_otx"></div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-success mt-1 me-1 add_field_button_otx" type="button">
                  <i data-feather="plus" class="me-25"></i>
                  <span>Add more pass</span>
                </button>
                <!-- <button type="submit" class="btn btn-primary mt-1 me-1 saveFounders">Send Invite</button> -->
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayActionF"></span>
              
              
              </div>
               <div class="col-12">
              
              
            </div>
            </div>
          
        </div>
      </div>
    </div>
              <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Speakers/Host Profile</h4>
        </div>
        <div class="card-body">
            <!--invoice-repeater -->
         
        <?php 
            $getSpeakerJson =  $this->gfa_model->getEventPass($id)[0]['speakers'];
            $getSpeakerJsonArray = json_decode($getSpeakerJson,true);
            foreach($getSpeakerJsonArray as $getSpeaker){
        ?>
            <div data-repeater-list="invoice">
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Name</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder="Speaker Name"
                        name="speakerName[]"
                        value="<?php echo $getSpeaker['speakerName']; ?>"
                      />
                    </div>
                  </div>

                  

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Designation</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="CEO"
                        name="speakerDesignation[]"
                        value="<?php echo $getSpeaker['speakerDesignation']; ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Linkedin</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="url"
                        name="speakerLinkedin[]"
                        value="<?php echo $getSpeaker['speakerLinkedin']; ?>"
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="staticprice">Picture</label>
                       <input
                        type="file"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Picture"
                        name="file[]"
                        
                      />
                      <input type="hidden" class="form-control" name='getfile[]' value="<?php echo $getSpeaker['speakerPhoto'] ?>"  />
                    </div>
                  </div>
                   

               <div class="col-12 col-sm-6 mb-1">
             
              <textarea
                  
                  class="form-control"
                  id="textarea-counter"
                  rows="4"
                  placeholder="Brief about this Speaker/Co-speaker"
                  style="height: 100px"
				    name="speakerAbout[]"

                ><?php echo $getSpeaker['speakerAbout']; ?>
              </textarea>
            </div>

                  <!--<div class="col-md-2 col-12 mb-50">-->
                  <!--  <div class="mb-1">-->
                  <!--    <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">-->
                  <!--      <i data-feather="x" class="me-25"></i>-->
                        
                  <!--    </button>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
                <hr />
              </div>
            </div>
            
            <?php }  ?>
             <div class="input_fields_wrap_ot"></div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-secondary mt-1 me-1 add_field_button_ot" type="button">
                  <i data-feather="plus" class="me-25"></i>
                  <span>Add more speaker</span>
                </button>
                <!-- <button type="submit" class="btn btn-primary mt-1 me-1 savespeakers">Save Speakers Profile</button> -->
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayActionF"></span>
              
              
              </div>
               <div class="col-12">
              
              
            </div>
            </div>
         
        </div>
      </div>
    </div>
    <input type="hidden" class="ref_id" name="ref_id" value="<?php echo $updateEvent[0]['ref_id']; ?>">
            <div class="col-12">
                <button type="submit" class="btn btn-primary storyBtn">Update Event</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    <script>  
         (function( $ ) {
             
      $('.selectPay').change(function(){
          var selectPay = $(this).val();

          if(selectPay =='Paid'){
            $('.showPay').show();
          }else{
            $('.showPay').hide();
         
          }
      });       
           //Load table 

	var max_fieldsx      = 10; //maximum input boxes allowed

    
	
	var wrapperxx         = $(".input_fields_wrap_otx"); //Fields wrapper

  
    var x = 1; //initlal text box count	  
	 var add_button_otx      = $(".add_field_button_otx"); //Add button Class
 	$(add_button_otx).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fieldsx){ //max input box allowed

            x++; //text box increment

$(wrapperxx).append('<div class="removeMoreotx"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-4 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Payment Categories</label><select id="country" name="paymentCat[]" class="form-select"><option value="Regular">Regular</option><option value="VIP">VIP</option<option value="VVIP">VVIP</option></select></div></div><div class="col-md-4 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Payment Tag</label><select id="country" name="paymentTag[]" class="form-select"><option value=""></option><option value="Best">Best</option><option value="Recommended">Recommended</option></select></div></div><div class="col-md-4 col-12"><div class="mb-1"><label class="form-label" for="itemname">Amount</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="" name="amount[]"/></div></div><div class="col-md-4 col-12"><div class="mb-1"><label class="form-label" for="itemname">Description</label><textarea class="form-control" id="textarea-counter" rows="4" placeholder="" style="height: 100px" name="paymentInfo[]"></textarea></div></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldotx" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperxx).on("click",".removeFieldotx", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreotx').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
   
    <script>  
         (function( $ ) {
             
             
           //Load table 

	var max_fields      = 10; //maximum input boxes allowed

    
	
	var wrapperx         = $(".input_fields_wrap_ot"); //Fields wrapper

  
    var x = 1; //initlal text box count	  
	 var add_button_ot      = $(".add_field_button_ot"); //Add button Class
 	$(add_button_ot).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

$(wrapperx).append('<div class="removeMoreot"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemname">Name</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Speaker Name" name="speakerName[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Designation</label><input type="text" class="form-control" id="itemquantity" placeholder="CEO" name="speakerDesignation[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Linkedin</label><input type="text" class="form-control" placeholder="url" name="speakerLinkedin[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Picture</label><input type="file" class="form-control" placeholder="Picture" name="file[]" /></div></div><div class="col-12 col-sm-6 mb-1"><textarea class="form-control" rows="4" placeholder="Brief about this Speaker/Cospeaker" style="height: 100px" name="speakerAbout[]" ></textarea></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldot" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    
    <script>
      $(function(){
          
          
          
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
        var textData = $('.textData').html();
        var ref_id = $('.ref_id').val();
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url('gfa/updateEventpostpro'); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Updating Event...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', true);
     window.open("<?php echo base_url("gfa/event/{$updateEvent[0]['ref_id']}"); ?>", "_self");



      }
    });

    $.ajax({
     data:{textData:textData,ref_id:ref_id},
     type: "POST",
     url: "<?php echo base_url('gfa/updateEventpostpro_ext'); ?>",
      success: function(data) {
        
	  $(".displayActionx").html(data);  
	  
      }
    });
    return false;

  });
         
          
          
      });  
    </script>

    <!-- Blog Comment -->
   
    <!--/ Blog Comment -->

    <!-- Leave a Blog Comment -->
   
    <!--/ Leave a Blog Comment -->
  </div>
</div>
<!--/ Blog Detail -->

          </div>
        
        
      </div>
    </div>
