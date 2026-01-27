<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  // $this->admin_model = model('App\Models\AdminModel');
?>
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.New Ticket') ?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/dashboard'); ?>"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Contact Admin') ?></a>
                    </li>
                    <li class="breadcrumb-item active"> <?php echo lang('translation.New Ticket') ?>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
     
    <!-- profile -->
    <div class="card">
      <div class="card-header border-bottom">
        <h4 class="card-title"><?php echo lang('translation.New Ticket') ?></h4><br>
       
      </div>
      
      <div class="card-body py-2 my-25">
        <!-- form -->
        <form class="validate-form mt-2 pt-50 EventForm" action="" enctype="multipart/form-data">
        <div class="row">
              
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="Name"><?php echo lang('translation.Industry Name') ?></label>
              
              <input type="text" value="<?=$UserName?>" class="form-control" readonly />
            </div>
          
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="Email"><?php echo lang('translation.Email') ?></label>
              
              <input type="text" value="<?=$email?>" class="form-control" readonly />
            </div>
          
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="subject"><?php echo lang('translation.Subject') ?></label>

              <select id="subject" name="subject" class=" form-control form-select" required>
                <option value="Application Issues"><?php echo lang('translation.Application Issues') ?></option>
                <option value="Chat Issues"><?php echo lang('translation.Chat Issues') ?></option>
                <option value="Community Issues"><?php echo lang('translation.Community Issues') ?></option>
                <option value="General Question"><?php echo lang('translation.General Question') ?></option>
                <option value="Login Issues"><?php echo lang('translation.Login Issues') ?></option>
                <option value="Page load error"><?php echo lang('translation.Page load error') ?></option>
                <option value="Profile Update"><?php echo lang('translation.Profile Update') ?></option>
                <option value="Website not Opening"><?php echo lang('translation.Website not Opening') ?></option>
                <option value="Others"><?php echo lang('translation.Others') ?></option>
              </select>  
            </div>
           
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="urgency"><?php echo lang('translation.Urgency') ?></label>

              <select id="urgency" name="urgency" class=" form-control form-select" required>
                <option value="Low"><?php echo lang('translation.Low'); ?></option>
                <option value="Medium"><?php echo lang('translation.Medium'); ?></option>
                <option value="High"><?php echo lang('translation.High'); ?></option>
              </select>  
            </div>

            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="message"><?php echo lang('translation.Message') ?></label>
               
              <textarea
                class="form-control char-textarea"
                id="textarea-counter"
                rows="3"
                style="height: 100px"
                name="message"
                required
              ></textarea>
            </div>
            <input type="hidden" name="role" value="<?=$account_type?>">
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 EventBtn"><?php echo lang('translation.Submit') ?></button>
              <span class="displayAction"></span>
              
              
            </div>
          </div>
        </form>
        <!--/ form -->
      </div>
    </div>
    
    

  </div>
</div>

        </div>
      </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  
    <script>
    $(function(){
        $(".EventForm").submit(function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                data:formData,
                type: "POST",
                url: "<?php echo base_url("gfa/add_support_ticket"); ?>",
                error:function() {$(".displayAction").html('Error')},
                beforeSend:function() {$(".displayAction").html("<?php echo lang('translation.Sending Ticket') ?>"...); $(".EventBtn").prop('disabled', false);},
                processData: false,
                contentType: false,
                success: function(data) {       
                    $(".displayAction").html(data);
                    $(".EventBtn").prop('disabled', false);
                    window.open("<?php echo base_url(); ?>gfa/all_tickets", "_self");
                }
            });

            return false;

        });
         
    });  
</script>

