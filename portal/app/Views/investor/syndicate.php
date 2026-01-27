
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Syndicate Form</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/syndicate_info">Syndicate Information</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#<?php echo base_url(); ?>gfa/syndicate_manage">Manage Syndicate</a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">

  <div class="row match-height">
<!--   The investor name & title -->

<!-- <i data-feather="list" class="user-timeline-title-icon"></i> -->
            <!-- <h4 class="card-title">Syndicate a deal</h4> -->

<!--The investment stage -->
<?php    ?>
<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12">

  
    <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Lead Information</h4>
        </div>
        <div class="card-body">
          <form class="founderForm" action="" method="post" enctype="multipart/form-data"> 
          <div class="row">
          
            
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="basicInput">Accredited Investor Status </label>
                <select id="country" name="accredited_investor" class="form-select current_stage">
                <option value="I am an accredited investor">I am an accredited investor</option>  
                <option value="I am not an accredited investor">I am not an accredited investor</option>
                  
                  </select>
              </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">Expected Dealflow</label>
                <select id="country" name="expected_deal" class="form-select Implementation_stage">
                <option value="More than 20 deals per year">More than 20 deals per year</option>  
                <option value="Between 5 and 20 deals per year">Between 5 and 20 deals per year</option> 
                <option value="Fewer than 5 deals per year">Fewer than 5 deals per year</option> 
                <option value="I only want to run 1 deal now">I only want to run 1 deal now</option> 
             
                 </select>  
              </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">Fundraising Experience: <br>How much have you previously raised from LPs? </label>
                <select id="country" name="fund_exp" class="form-select Implementation_stage">
                <option value="I raised more than $1M">I raised more than $1M</option>  
                <option value="I raised between $100k and $1M">I raised between $100k and $1M</option> 
                <option value="I raised less than $100k">I raised less than $100k</option> 
                <option value="I haven't raised money from LPs">I haven't raised money from LPs</option> 
             
                 </select>  
              </div>
            </div>
             
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="disabledInput">Existing LP Network<br>How many LPs do you have to invest in your deals?</label>
                <select id="country" name="lp_network" class="form-select Implementation_stage">
                <option value="I have enough LPs to fill my deals">I have enough LPs to fill my deals</option>  
                <option value="I have some LPs, not enough to fill my deals">I have some LPs, not enough to fill my deals</option> 
                <option value="I don't have any LPs">I don't have any LPs</option> 
                
             
                 </select>  
              </div>
            </div>
            <div class="col-xl-6 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="basicInput">Syndicate Type</label>
                <select id="country" name="syn_type" class="form-select current_stage">
                <option value="deals">Syndicate Deals</option>  
                <option value="fund">Syndicate Fund</option>
                  
                  </select>
              </div>
            </div>
            <!-- <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Investment size (USD)</label>
                <input type="number" class="form-control fund_to_raise" id="accountAddress" name="fund_to_raise" placeholder="Name" value="<?php echo $this->gfa_model->getStartUpDetails($email)[0]['Next_Funding_Round_Target_Sought'];  ?>" />

                
              </div>
            </div> -->
            
             <span class="display"></span>
          </div>
          
        </div>
             
      </div>
    </div>
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Syndicate Profile</h4>
        </div>
        <div class="card-body">
         
          <div class="row">
          
            
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Syndicate Name  </label>
                <input type="text" class="form-control fund_to_raise" id="accountAddress" name="syn_name" placeholder="Syndicate Name" value="" />
                <input type="hidden" class=""  name="startup_id"  value="<?php echo $startup_id ?>" />

                
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Syndicate Tagline </label>
                <input type="text" class="form-control fund_to_raise" id="accountAddress" name="syn_tag" placeholder="Syndicate Tagline" value="" />

                
              </div>
            </div>
            <div class="col-xl-4 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Syndicate Logo</label>
                <input type="file" class="form-control fund_to_raise" id="accountAddress" name="file[]" placeholder="Syndicate Logo" value="" />

                
              </div>
            </div> 
          </div>
          
        </div>
             
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Add Team Members</h4>
        </div>
        <div class="card-body">
        
        <?php $getCoFoundersJson =  $this->gfa_model->getStartUpDetails($email)[0]['Co_Founder_Info'];
            $getCoFoundersArray = json_decode($getCoFoundersJson,true); ?>
            
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
                        placeholder="Name"
                        name="founderName[]"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Email</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="Email"
                        name="founderGender[]"
                        
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
                        placeholder="Designation"
                        name="founderDesignation[]"
                       
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Phone</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Phone"
                        name="founderLinkedin[]"
                        
                      />
                    </div>
                  </div>
                  
                  


                </div>
                <hr />
              </div>
            </div>
             <div class="input_fields_wrap_ot"></div>
            <div class="row">
              <div class="col-12">
                <button class="btn btn-icon btn-primary mt-1 me-1 add_field_button_ot" type="button">
                  <i data-feather="plus" class="me-25"></i>
                  <span>+ Add more</span>
                </button>
                
              
              
              </div>
               <div class="col-12">
              
              
            </div>
            </div>
          
        </div>
             
      </div>
    </div>

    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Privacy </h4>
        </div>
        <div class="card-body">
          
          <div class="row">
          
            
            <div class="col-xl-12 col-md-6 col-12">
            <div class="form-check form-check-inline mb-1">
              <input
                class="form-check-input"
                type="radio"
                name="set_access"
                id="inlineRadio1"
                value="Public: Investors on our platform can discover and apply to back your syndicate 
"
                
              />
              <label class="form-check-label" for="inlineRadio1">Public: Investors on our platform can discover and apply to back your syndicate 

<br>Choose this if you want to grow your LP network  </label>
            </div>
            <div class="form-check form-check-inline mb-1">
              <input
                class="form-check-input"
                type="radio"
                name="set_access"
                id="inlineRadio2"
                value="Only people with a link can view your syndicate profile"
              />
              <label class="form-check-label" for="inlineRadio2">Only people with a link can view your syndicate profile 

<br>Choose this if you want to limit your LP network to people you know </label>
            </div>
            </div>
            <div class="col-xl-12 col-md-6 col-12">
              <div class="mb-1">
                <label class="form-label" for="helperText">Syndicate Description <br> Explain to LPs what kind of deals you have and why they should back your syndicate </label>
                <textarea
                  class="form-control"
                  id="exampleFormControlTextarea1"
                  rows="3"
                  name="syn_desc"
                  placeholder="Textarea"
                ></textarea>
              </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-icon btn-primary mt-1 me-1 saveBtn">
                  
                  <span>Submit</span>
                </button>
                
              <div class="displayActionF"></div>
              
              </div>
          </div>
          </form>
        </div>
             
      </div>
    </div>
  </div>
  



    

    
    <!--/ Company Table Card -->
   
  </div>
  
  


</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <script>
            function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    
      
}
$(function(){
    
    
$(".founderForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/invitelpspro",
	 error:function() {$(".displayActionF").html('Error')},
	 beforeSend:function() {$(".displayActionF").html('Saving form...'); $(".saveBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayActionF").html('Form Submitted!');
        $(".saveBtn").prop('disabled', true);
        window.open("<?php echo base_url(); ?>gfa/syndicate_info", "_self");
	
		//}
      }
    });
    return false;

 });
    
$(".fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/profile_photo",
	 error:function() {$(".savePhoto").html('Error')},
	 beforeSend:function() {$(".savePhoto").html('Saving Photo...')},
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

$(wrapperx).append('<div class="removeMoreot"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemname">Name</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Name" name="founderName[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemcost">Email</label><input type="text" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="F" name="founderGender[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Designation</label><input type="text" class="form-control" id="itemquantity" placeholder="Designation" name="founderDesignation[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Phone</label><input type="text" class="form-control" placeholder="Phone" name="founderLinkedin[]" /></div></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldot" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
    <script>
     