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
                <h2 class="content-header-title float-start mb-0">Add Contact</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                   
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>email/add_contact">Upload Contacts</a>
                    </li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>email/">Send Message</a>
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
          <form action="javascript:void(0)" id="EventForm" class="form EventForm" enctype="multipart/form-data">

<div class="row">

  <div class="col-sm-6 col-12">
    <label>Contact List Name</label>
    <input type="text" name="contact_list_name" class="form-control" required placeholder="Campaign / Contact List Name">
  </div>

  <div class="col-sm-6 col-12">
    <label>Upload Contact (CSV / Excel)</label>
    <input type="file" name="file" id="contactFile" class="form-control"
           accept=".csv,.xlsx,.xls" required><small>Upload in this format: Email,Firstname,Lastname</small>
  </div>

  <div class="col-12 mt-3">
    <label>Preview Uploaded List</label>
    <div class="preview border p-2" style="max-height:200px; overflow:auto;"></div>
  </div>

</div>

<input type="hidden" name="ref_id" value="<?= time(); ?>">

<button type="submit" class="btn btn-primary mt-3 EventBtn">
  Upload Contacts
</button>

<span class="displayAction"></span>

</form>

            </div>
          
        </div>
      </div>
    </div>
    <!--/ Blog --> 
    <script>  
         (function( $ ) {

          $("#contactFile").on("change", function(e) {

    let file = e.target.files[0];
    let reader = new FileReader();

    reader.onload = function(e) {
        let data = new Uint8Array(e.target.result);
        let workbook = XLSX.read(data, {type: 'array'});
        let sheet = workbook.Sheets[workbook.SheetNames[0]];
        let rows = XLSX.utils.sheet_to_json(sheet, {header:1});

        let html = `<table class="table table-sm table-bordered">
                      <thead>
                        <tr>${rows[0].map(h => `<th>${h}</th>`).join("")}</tr>
                      </thead><tbody>`;

        rows.slice(1, 10).forEach(row => {
            html += `<tr>${row.map(col => `<td>${col || ''}</td>`).join("")}</tr>`;
        });

        html += "</tbody></table>";

        $(".preview").html(html);
    };

    reader.readAsArrayBuffer(file);
});

             
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
          
          
          $(".fetchSection").change(function(){
              var thisVal = $(this).val();
              $.ajax({
     data:{thisVal:thisVal},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/fetchSection",
      success: function(data) {
        
    $(".getSection").html(data);  
    
      }
    });
              
          }).change();
          
        //   $(".getSection").change(function(){
              
        //   });
          
          
          
           $("#EventForm").on("submit", function(e){
        e.preventDefault();

        let form = this;
        let formData = new FormData(form);

        $.ajax({
            url: "<?= base_url('gfa/uploadContacts') ?>",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            cache: false,

            beforeSend: function(){
                $(".EventBtn").prop("disabled", true);
                $(".displayAction").html(
                    "<span class='text-info'>Uploading contacts, please wait...</span>"
                );
            },

            success: function(res){

                if(res.status === "success"){
                    $(".displayAction").html(
                        "<span class='text-success'>" + res.message + "</span>"
                    );

                    // Reset form
                    form.reset();
                    $(".preview").html("");

                } else {
                    $(".displayAction").html(
                        "<span class='text-danger'>" + res.message + "</span>"
                    );
                }

                $(".EventBtn").prop("disabled", false);
            },

            error: function(xhr, status, error){
                console.error(xhr.responseText);

                $(".displayAction").html(
                    "<span class='text-danger'>Server error: " + error + "</span>"
                );

                $(".EventBtn").prop("disabled", false);
            }
        });
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