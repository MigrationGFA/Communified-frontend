<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.Add CSR') ?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/corporate_dashboard"); ?>"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#"><?php echo lang('translation.Corporate Social Responsibility') ?></a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>
        <div class="content-detached content-left">
          <div class="content-body"><!-- Blog Detail -->
<div class="blog-detail-wrapper">
  <div class="row">
    <!-- Blog -->
      <div class="col-12 mt-1">
      <h6 class="section-label mt-25"></h6>
      <div class="card">
        <div class="card-body">
          <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" name="title" class="form-control" required placeholder="<?php echo lang('translation.Title') ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="venue" placeholder="<?php echo lang('translation.City/State/Country') ?>" />
                </div>
              </div>
        <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time"><?php echo lang('translation.Start Date') ?></label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="start_date"
            placeholder="JJ-MM-AAAA HH:MM"
          />
        </div>
         <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time"><?php echo lang('translation.End Date') ?></label>
          <input
            type="text"
            id="fp-date-time2"
            name="end_date"
            class="form-control flatpickr-date-time"
            placeholder="JJ-MM-AAAA HH:MM"
          />
          
          
        </div>
         <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-control" name="ticket" placeholder="Free">
                     
                 <option value="Free"><?php echo lang('translation.Free') ?></option>
                  <option value="Paid"><?php echo lang('translation.Paids') ?></option> 
                    </select>
                </div>
              </div>
             
               <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-control" name="startup_view" placeholder="Availabilty">
                     
                 <option value="all"><?php echo lang('translation.All') ?></option>
                  <option value="<?php echo $this->gfa_model->getCorperateDetails($email)[0]['Event']; ?>"><?php echo lang('translation.Organisation') ?>(<?php echo strtoupper($this->gfa_model->getCorperateDetails($email)[0]['Event']) ?>)</option> 
                    </select>
                </div>
              </div>
              <!-- <div class="col-sm-6 col-12" >-->
              <!--  <div class="mb-2">-->
              <!--    <input type="hidden" class="form-control" name="amount" placeholder="Amount" />-->
              <!--  </div>-->
              <!--</div>-->
              <div class="col-sm-6 col-12">
                  <label><?php echo lang('translation.CSR Cover Picture') ?> </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="<?php echo lang('translation.Event Cover') ?> Picture" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="videourl" placeholder="<?php echo lang("translation.Video url (youtube, vimeo e.t.c)") ?>" />
                </div>
              </div>
              
              
              <div class="col-12">
                <textarea class="form-control mb-2" name="event" required rows="4" placeholder="<?php echo lang("translation.Startup Event") ?>"></textarea>
              </div>
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn"><?php echo lang("translation.Posted CSR") ?></button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    
    <script>      
      $(function(){
        
      flatpickr(".flatpickr-date-time", {
        enableTime: true,
        dateFormat: "d-m-Y H:i", // French format: day-month-year hour:minute
        locale: "fr", // Set locale to French
      });
          
    $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/Csrpostpro"); ?>",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html("Soumission de l'événement..."); $(".EventBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".EventBtn").prop('disabled', true);

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
        <div class="sidebar-detached sidebar-right">
          <div class="sidebar"><div class="blog-sidebar my-2 my-lg-0">
  <!-- Search bar -->
  <div class="blog-search">
    <div class="input-group input-group-merge">
      <input type="text" class="form-control" placeholder="<?php echo lang("translation.Search here") ?>" />
      <span class="input-group-text cursor-pointer">
        <i data-feather="search"></i>
      </span>
    </div>
  </div>
  <!--/ Search bar -->

  <!-- Recent Posts -->
  <div class="blog-recent-posts mt-3">
    <h6 class="section-label"><?php echo lang("translation.Posted CSR") ?></h6>
    <div class="mt-75">
<?php 

$row =  $this->gfa_model->getCsr($email); foreach($row as $rowStoryArray){ ?>
      <div class="d-flex mb-2">
        <a href="<?php echo base_url("gfa/csr/")?><?php echo $rowStoryArray['title']; ?>" class="me-2">
          <img
            class="rounded"
            src="<?php echo base_url("uploads/files/")?><?php echo $rowStoryArray['picture'] ?>"
            width="100"
            height="70"
            alt="Add CSR Picture "
          />
        </a>
        <div class="blog-info">
          <h6 class="blog-recent-post-title">
            <a href="<?php echo base_url("gfa/csr/")?><?php echo $rowStoryArray['title']; ?>" class="text-body-heading"><?php echo $rowStoryArray['title'] ?></a>
          </h6>
          <div class="text-muted mb-0"><?php echo date('M d Y', strtotime($rowStoryArray['time_submit'])) ?> | <?php echo $rowStoryArray['status']; ?> </div>
          <div class="text-muted mb-0"><a href="<?php echo base_url("gfa/csr/")?><?php echo $rowStoryArray['title']; ?>">View</a> | <a href="<?php echo base_url("gfa/edit_csr/")?><?php echo $rowStoryArray['csr_id']; ?>">Edit</a> | <a href="">Delete</a>  </div>
        </div>
      </div>
      
      <?php  }   ?>
      
    </div>
  </div>
  <!--/ Recent Posts -->

  <!-- Categories -->
  
  <!--/ Categories -->
</div>

          </div>
        </div>
      </div>
    </div>