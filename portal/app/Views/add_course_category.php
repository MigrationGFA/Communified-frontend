<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Add Course Category</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/Course Category">All Course Category</a>-->
                    <!--</li>-->
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_course_category">Manage Course Category</a>
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
              <!--<label>Course Category Title </label>-->
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="Course Category Title" />
                </div>
              </div>
                    
              
    </div>
              
    <input type="hidden" class="ref_id" name="ref_id" value="<?php //echo time(); ?>">
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
     url: "<?php echo base_url("gfa/coursecategorypostpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Uploading Course Category...'); $(".EventBtn").prop('disabled', false);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', false);
     //window.open("<?php echo base_url(); ?>gfa/manage_Course Category", "_self");



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