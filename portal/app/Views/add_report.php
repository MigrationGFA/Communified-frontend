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
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.Add Report') ?></h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" onclick="event.preventDefault(); window.history.back();"><?php echo lang('translation.Home') ?></a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/report"><?php echo lang('translation.Weekly Report') ?>  <?php 
                    
                    // 
                    // echo $this->gfa_model->getStartupWeeklyRefByEmail($email)[0]['ref']; 
                    
                    ?>
                    
                    </a>
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
          <form action="#" id="postJobs" class="form storyForm" enctype="multipart/form-data">
            <div class="row">
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="total_sale" step="0.001" class="form-control" required placeholder="<?php echo lang('translation.Total Sales') ?>" />
                </div>
              </div>
             
              
            
            
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="total_exp" step="0.001" class="form-control" required  placeholder="<?php echo lang('translation.Total Expenses') ?>" />
                </div>
              </div>
             
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" class="form-control" id="newHiringInput" name="new_hiring" placeholder="<?php echo lang('translation.New Hired Employee this week') ?>" />
                </div>
              </div>
              
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" name="employ_term" class="form-control"  placeholder="<?php echo lang('translation.Employee Exits this week') ?>" />
                </div>
              </div>
             <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
            
              <select id="country" name="tax_paid" class="form-select">
                    <option><?php echo lang('translation.Do you pay Tax') ?>?</option>
                    <option value="Yes"><?php echo lang('translation.Yes') ?></option>
                    <option value="No"><?php echo lang('translation.No') ?></option>
                    
                  
                  </select>
            </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" step="0.001" class="form-control" name="tax" placeholder="<?php echo lang('translation.Tax Paid') ?>" />
                </div>
              </div>
              
              <!--<div class="col-sm-6 col-12">-->
              <!--  <div class="mb-2">-->
              <!--    <input type="file" name="file[]" class="form-control" required placeholder="Company Logo" />-->
              <!--  </div>-->
              <!--</div>-->
               
             <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time"><?php echo lang('translation.Weekly Report Start Date') ?></label>
          <input
            type="text"
            id="fp-date-time"
            class="form-control flatpickr-date-time"
            name="start_date"
            placeholder="JJ-MM-AAAA HH:MM"
          />
        </div>
         <div class="col-md-6 mb-1">
          <label class="form-label" for="fp-date-time"><?php echo lang('translation.Weekly Report End Date') ?></label>
          <input
            type="text"
            id="fp-date-time"
            name="end_date"
            class="form-control flatpickr-date-time"
            placeholder="JJ-MM-AAAA HH:MM"
          />
          
          
        </div>
        <div class="col-sm-6 col-12">
              <!--<label class="form-label" for="accountAddress">category</label>-->
             
              
              <select id="country" name="csr_active" class="form-select">
                    <option value=''><?php echo lang('translation.Select the CRS you participated') ?> ?</option>
                    <option value='PA Ps Gouv'>PA Ps Gouv</option>
                    <option value='Tomorrow Fab'>Tomorrow Fab</option>
                    <option value='PEJEDEC'>PEJEDEC</option>
                    
                <?php    $row =  $this->gfa_model->getAllCsr(); foreach($row as $rowStoryArray){  ?>
                    <option value="<?php echo $rowStoryArray['csr_id']  ?>"><?php echo $rowStoryArray['title']  ?></option>
                 <?php }  ?>   
                    
                  
                  </select>
            </div>
             
              
             <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="amount" placeholder="<?php echo lang('translation.Amount Spent for Participating') ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                  <label><?php echo lang('translation.Picture') ?> </label>
                <div class="mb-2">
                  <input type="file" name="file[]" class="form-control" required placeholder="<?php echo lang('translation.Picture') ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" name="videourl" placeholder="<?php echo lang("translation.Video Url (youtube, vimeo e.t.c)") ?>" />
                </div>
              </div>
         <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="<?php echo lang('translation.Community Social Responsibility Participation Details') ?>"
                  style="height: 100px"
				  name="csr_active_details"
                ></textarea>
             </div>   
            </div>
             <div class="col-sm-6 col-12">
             <div class="mb-2">
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="<?php echo lang('translation.Other weekly information') ?>"
                  style="height: 100px"
				  name="other_info"
                ></textarea>
             </div>   
            </div>
            
            
             
              <div class="col-12">
                <button type="submit" class="btn btn-primary storyBtn"><?php echo lang('translation.Post Report') ?></button><span class="displayAction"></span>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!--/ Blog -->
    
    <script>
      $(function(){
          
          $('#newHiringInput').keyup(function() {
    var inputValue = $(this).val();
    
    // Check if the input value is negative
    if (inputValue < 0) {
      // If negative, set input value to 0
      $(this).val(0);
    }
  });
          
          
          
           $(".storyForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/postreport",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Soumettre le rapport...'); $(".storyBtn").prop('disabled', true);},
	 processData: false,
    contentType: false,
      success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		 $(".storyBtn").prop('disabled', true);

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
    </div>