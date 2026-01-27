<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Add Perks</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/perks'); ?>gfa/perks">All Perks</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/manage_perks'); ?>">Manage Perks</a>
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
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
<!--      <div class="alert alert-info" role="alert">-->
<!--              <h4 class="alert-heading">Note</h4>-->
<!--              <div class="alert-body">-->
                  
               
<!--<p>Criteria for approving submitted events below:</p>-->
<!--<ul>-->
<!--<li>You must not promote tribal, ethnic or religious divisiveness at any level</li>-->
<!--<li>You must not be seen to contravene applicable laws of the country of origin</li>-->
<!--<li>You must have updated your GFA profile to at least 50% completion.</li>-->
<!--</ul>-->
<!--              </div>-->
<!--            </div>-->
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="sub_type" placeholder="Subscription Type">
                     
                 <option value="Free">Free</option>
                  <option value="Monthly">Monthly</option>
                  <option value="Annual">Annual</option>
                  
                    </select>
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="perks_type" placeholder="Perks Type">
                     
                 <option value="gfa">GFA Perks</option>
                  <option value="third-party">Third Party</option>
                  
                  
                    </select>
                </div>
              </div>
              <hr class="mb-2" />
              <div class="col-sm-6 col-12">
              <label>Company Name</label>
                <div class="mb-2">
                  <input type="text" name="company_name" class="form-control" required placeholder="Company Name" />
                </div>
              </div>
              <div class="col-12 col-sm-6 mb-1">

              <label class="form-label" for="normalMultiSelect">Category</label>
              <!-- <label class="form-label" for="accountFirstName" style="color:#ff0000;">* Industry</label>-->
              
               <select class="select2 form-select" name="category[]" id="select2-multiple" multiple>
              
               
                  <?php $row = $this->gfa_model->getAllPerksCategoryInOrder(); foreach($row as $rowArray){ ?>
                    <option><?php echo $rowArray['category'] ?></option>
                  <?php }   ?>
              </select>
            </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="title" placeholder="Title of Perks" />
                </div>
              </div>
              
         
               
               <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="tags" placeholder="Tags" />
                </div>
              </div>
               <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="note" placeholder="Note" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="value_1" placeholder="Value in text" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" class="form-control" name="value_2" placeholder="Value in number(Amount in USD($)" />
                </div>
              </div>
               <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="qty" placeholder="Quantity" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select" name="status" placeholder="Status">
                     
                 <option value="Pending">Pending</option>
                  <option value="Active">Active</option>
                  <option value="Expired">Expired</option>
                  
                    </select>
                </div>
              </div>
               <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" class="form-control" name="rating" placeholder="Rating" />
                </div>
              </div>
               <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" name="aff_link" placeholder="Affliate link" />
                </div>
              </div>
               <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time">Date</label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="start_date"
            placeholder="YYYY-MM-DD HH:MM"
          />
        
          
          
        </div>
              <div class="col-sm-6 col-12">
                  <label>Company Logo</label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control"  placeholder="Event Cover Picture" />
                </div>
              </div>
             
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <div class="editor eventDoc textData" style="height:100px;">
                Description 
                  </div>
                </div>
              </div>       
              
    </div>
              
    <input type="hidden" class="ref_id" name="ref_id" value="<?php echo time(); ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
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
     url: "<?php echo base_url(); ?>gfa/Perkspostpro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Uploading Perks...'); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);
     window.open("<?php echo base_url(); ?>gfa/manage_perks", "_self");



      }
    });

    $.ajax({
     data:{textData:textData,ref_id:ref_id},
     type: "POST",
     url: "<?php echo base_url('gfa/Perkspostpro_ext'); ?>",
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
