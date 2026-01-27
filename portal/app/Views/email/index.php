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
                <h2 class="content-header-title float-start mb-0">Send Campaign</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                   
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>email/">Message</a>
                    </li>
                     <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>email/add_contact">+ Add Contact</a>
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
          <form action="#" id="EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
            
              <div class="col-sm-12 col-12">
                  <label>Email Campaign</label>
                <div class="mb-2">
                  <select  class="form-select fetchSection" name="campaign_name" placeholder="Email Campaign">
                     
                <?php $getContactListData = $this->gfa_model->getContactList(); foreach($getContactListData as $getContactList){  ?>
                  <option value="<?php echo $getContactList['ref_id'] ?>"><?php echo ucwords($getContactList['contact_name']) ?></option>
                  <?php }  ?>
                    </select>
                </div>
              </div>
              <div class="col-sm-12 col-12"> 
                <label>Emails</label>
                <div class="mb-2">
                  <select class="form-select getSection select2" name="email[]" id="select2-multiple" multiple="multiple" placeholder="Add emails manually or select from list">
                    <!-- Existing options loaded via AJAX -->
                  </select>
                  <small class="text-muted">Type an email and press Enter to add it.</small>
                </div>
                <div class="mb-2">
                  <input type="text" id="manualEmail" class="form-control" placeholder="Enter email and press Add">
                  <button type="button" id="addEmailBtn" class="btn btn-sm btn-primary mt-1">Add</button>
                </div>
              </div>
              <div class="col-sm-6 col-12">
              <!--<label>Lesson Title </label>-->
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="Subject" />
                </div>
              </div>

              <div class="col-sm-6 col-12">
                  <!-- <label>Course</label> -->
                <div class="mb-2">
                  <select  class="form-select" name="salute" placeholder="Salutation">
                     
             
                  <option value="Dear">Dear</option>
                 <option value="Hello">Hello</option>
                 <option value="Hi">Hi</option>
                
                    </select>
                </div>
              </div>
              
              <hr class="mb-2" />
              
            
              <div class="col-sm-6 col-12">
              <!--<label>Lesson Title </label>-->
                <div class="mb-2">
                  <input type="text" name="from_company_name" class="form-control" required placeholder="From :Company Name" />
                </div>
              </div>
              
               
              
              
             
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <div class="editor eventDoc textData" style="height:250px;">
                Message Contents  
                  </div>
                </div>
              </div>       
              
    </div>
              
    <input type="hidden" class="ref_id" name="ref_id" value="<?php echo time(); ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
              </form>
            </div>
          
        </div>
      </div>
    </div>
    <!--/ Blog --> 
   
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    <script>
      $(function(){
          
function isValidEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
} 

    // Add manual email to select2
    $("#addEmailBtn").click(function() { 
    var email = $("#manualEmail").val().trim();
    if(email === "") return;

    if(!isValidEmail(email)) {
        alert("Invalid email address");
        return;
    }

    var newOption = new Option(email, email, true, true);
    $('#select2-multiple').append(newOption).trigger('change');
    $("#manualEmail").val('');
}); 

    // Allow pressing Enter to add email
    $("#manualEmail").keypress(function(e) {
        if(e.which == 13) { 
            e.preventDefault();
            $("#addEmailBtn").click();
        }
    });
 

          $(".fetchSection").change(function(){
    var thisVal = $(this).val();

    $.ajax({
        data:{thisVal:thisVal},
        type: "POST",
        url: "<?php echo base_url(); ?>gfa/fetchSectionPro",
        success: function(data) {
            $(".getSection").html(data);

            // Auto-select all returned options
            $(".getSection option").prop("selected", true);

            // Required if Select2 is used
            $(".getSection").trigger("change");
        }
    });

    }).change();

          
          
          
           // Submit mail compose form via AJAX
    $("#EventForm").submit(function(e){
        e.preventDefault();

        var formData = new FormData(this);

        // Append div content manually
        let messageContent = $(".editor.eventDoc").html(); // or .text() if plain text
        formData.append("message", messageContent);

        $.ajax({
            url: "<?= base_url('gfa/sendMailPro') ?>",
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            beforeSend: function(){
                $(".EventBtn").prop("disabled", true);
                $(".displayAction").html("<span class='text-info'>Sending...</span>");
            },
            success: function(res){
                if(res.status === "success"){
                    $(".displayAction").html("<span class='text-success'>" + res.message + "</span>");
                    $("#EventForm")[0].reset();
                    $(".getSection").val(null).trigger("change");
                } else {
                    $(".displayAction").html("<span class='text-danger'>" + res.message + "</span>");
                }
                $(".EventBtn").prop("disabled", false);
            },
            error: function(xhr){
                $(".displayAction").html("<span class='text-danger'>Server error occurred</span>");
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