 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
  <div class="row match-height">
  <div class="pricing-faq">
    <h3 class="text-center">Deal Room</h3>
    <p class="text-center">Share with Investors[]  </p>
    
    
    
    
    
    
    
    <div class="row my-2">
      <div class="col-12 col-lg-10 col-lg-offset-2 mx-auto">
        <!-- faq collapse -->
         <!--<form class="sendToInvestor" method="post" action="#" enctype="multipart/form-data">-->
        <div class="accordion accordion-margin" id="accordionExample">
          <div class="card accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button collapsed"
                data-bs-toggle="collapse"
                role="button"
                data-bs-target="#collapseOne"
                aria-expanded="false"
                aria-controls="collapseOne"
              >
                Startup Info
              </button>
            </h2>

            <div
              id="collapseOne"
              class="accordion-collapse collapse"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
               <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Title</th>
                  <th>Description</th>
                  
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                  <!--format, title, description, file, date -->
                <?php
                
                $row = $this->gfa_model->getFileUploaded($email,"Profile");
				foreach($row as $rowArray){  
                
                ?> 
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      
                        
                          <input type="checkbox" name="checkFile[]" class="" value="<?php echo $rowArray['File_Id']; ?>" />
                        
                      <div>
                       
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="file" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['Title']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['File_Desc']; ?></span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['Max_Cheque']; ?></span>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                  <?php echo $rowArray['Time_Submit']; ?>
                    </div>
                  </td>
                </tr>
                <?php }  ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
              </div>
            </div>
          </div>
          <div class="card accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                data-bs-toggle="collapse"
                role="button"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
               Pitch Deck 
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                 <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Title</th>
                  <th>Description</th>
                  
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                 
                <?php
              
                $rowPitch = $this->gfa_model->getFileUploaded($email,"Pitch_Deck");
				foreach($rowPitch as $rowArray){  
                
                ?> 
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      
                        
                          <input type="checkbox" name="checkFile[]" class="" value="<?php echo $rowArray['File_Id']; ?>" />
                        
                      <div>
                       
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="file" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['Title']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['File_Desc']; ?></span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['Max_Cheque']; ?></span>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                  <?php echo $rowArray['Time_Submit']; ?>
                    </div>
                  </td>
                </tr>
                <?php }  ?>
                
              </tbody>
            </table>
          </div>
        </div>
      </div>
              </div>
            </div>
          </div>
          <div class="card accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                data-bs-toggle="collapse"
                role="button"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                Legal
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                 <div class="card card-company-table">
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Title</th>
                  <th>Description</th>
                  
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
                 
                <?php
              
                $rowLegal = $this->gfa_model->getFileUploaded($email,"Legal_Doc");
				foreach($rowLegal as $rowArray){  
                
                ?> 
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      
                        
                          <input type="checkbox" name="checkFile[]" class="" value="<?php echo $rowArray['File_Id']; ?>" />
                        
                      <div>
                       
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      <div class="avatar bg-light-primary me-1">
                        <div class="avatar-content">
                          <i data-feather="file" class="font-medium-3"></i>
                        </div>
                      </div>
                      <span><?php echo $rowArray['Title']; ?></span>
                    </div>
                  </td>
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                      <span class="fw-bolder mb-25"><?php echo $rowArray['File_Desc']; ?></span>
                      <span class="font-small-2 text-muted"><?php //echo $rowArray['Max_Cheque']; ?></span>
                    </div>
                  </td>
                  
                  <td>
                    <div class="d-flex align-items-center">
                  <?php echo $rowArray['Time_Submit']; ?>
                    </div>
                  </td>
                </tr>
                <?php }  ?>
                
              </tbody>
            </table>
          </div>
        </div>
        
      </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-10">
             
             <button  class="btn btn-outline-secondary mt-1 addFile">+ Add File</button>
             <a  class="btn btn-primary mt-1 me-1 refreshBtn">Refresh Page</a>
              <button type="submit" class="btn btn-primary mt-1 me-1 sendBtn" style="display: none">Send to investor</button>
              
              <span class="sendAction"></span>
              
            </div>
          <!--</form>  -->
            
      </div>
       
    </div>
   
  </div> 
  
   
  </div>

  <div class="row match-height">

    <div class="col-lg-12 col-12 displayForm" style="display: none">
      <form class="validate-form mt-2 pt-50 startUpForm" method="post" action="" enctype="multipart/form-data">
            <div class="row">
                
             <div class="col-12 col-sm-12 mb-1">
              <label class="form-label" for="country">File Type</label>
              <select name="File_Type" id="country" class="select2 form-select">
                
<option value="Profile">Profile</option>
<option value="Pitch_Deck">Pitch Deck</option>
<option value="Legal_Doc">Legal Document</option>
              </select>
            </div>    
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountFirstName">Title of File</label>
              <input
                type="text"
                class="form-control"
                id="accountFirstName"
                name="Title"
                placeholder=""
                value=""
                data-msg="Please enter first name"
              />
            </div>
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountLastName">File</label>
              <input
                type="file"
                class="form-control"
                id="accountLastName"
                name="file[]"
                placeholder="File"
               
                
              />
            </div>
            
            
            <div class="col-12 col-sm-6 mb-1">
              <label class="form-label" for="accountAddress">Description of File Uploaded  </label>
              <textarea
                  
                  class="form-control char-textarea"
                  id="textarea-counter"
                  rows="3"
                  placeholder="Counter"
                  style="height: 100px"
				  name="File_Desc"
                ></textarea>
            </div>
           
         
            <div class="col-12">
              <button type="submit" class="btn btn-primary mt-1 me-1 saveBtn">Upload</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayAction"></span>
              
            </div>
          </div>
        </form>
    </div>
    
   
  </div>
  
  <script>
      
      $(function(){
          
          $('input[type="checkbox"]').click(function() {
                            //  e.preventDefault();
                            
                             
      if($(this).prop("checked") == true) {                       
    
         $(".sendBtn").show();
    
      }
    
    	
                             
        });
        
        
         $(".refreshBtn").click(function(e) {
             window.open("https://getfundedafrica.com/portal/gfa/dealroom", "_self");
         });
         
         
         $(".sendBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
	
     var  id = $('input[name="checkFile[]"]').serialize();
      
   $.ajax({
       
 
     data:id,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/sendToInvestor",
	 error:function() {$(".sendBtn").html('Error loading Data');},
	 beforeSend:function() {$(".sendBtn").html('Sending data...');},
     success: function(data) {
        
		$(".sendBtn").html('Message Sent');
		$(".sendAction").html(data);
	    
		}
		

      
    });

 }); 
                         
                         
          $(".addFile").click(function(){
            $(".displayForm").toggle();
              
          });
          
        
          $(".startUpForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/dealroom_file_upload",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Uploading...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayAction").html(data);
		
	
		//}
      }
    });
    return false;

 }); 
          
      });
  </script>

  

 

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>