<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Perks Redeem more Info</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/perks">All Perks</a>
                    </li>
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_perks">Manage Perks</a>
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
            <?php   
                    $perks_redeem = $this->gfa_model->getPerksByRedeemId($id);
                    $updatePerks =  $this->gfa_model->getPerksById($email,$perks_redeem[0]['id']);   ?>
             
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" readonly name="title" placeholder="Title of Perks" value="<?php echo $updatePerks[0]['title']; ?>" />
                </div>
              </div>
              
               <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" readonly name="email" placeholder="Email" value="<?php echo $perks_redeem[0]['email']; ?>" />
                </div>
              </div>
               
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="text" class="form-control" readonly name="value_1" placeholder="Value" value="<?php echo $updatePerks[0]['value_1']; ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <input type="number" class="form-control" readonly name="value_2" placeholder="Value in number(Amount in USD($)" value="<?php echo $updatePerks[0]['value_2']; ?>" />
                </div>
              </div>
               <div class="col-sm-6 col-12">
              
                <div class="mb-2">
                  <input type="text" class="form-control" readonly name="qty" placeholder="Quantity" value="<?php echo $perks_redeem[0]['perks_no']; ?>" />
                </div>
              </div>
              <div class="col-sm-6 col-12">
                <div class="mb-2">
                  <select  class="form-select status" name="status" placeholder="Status">
                      
                 <option value="Pending">Pending</option>
                 <option value="Active">Active</option>
                  <option value="Expired">Expired</option>
                  
                    </select>
                </div>
              </div>
               
              <div id="full-wrapper col-12">
                <div id="full-container" class="mb-2">
                  <div class="editor eventDoc textData" style="height:100px;">
                  More Info
                  </div>
                </div>
              </div>       
              
    </div>
              
    <input type="hidden" class="id" name="id" value="<?php echo $perks_redeem[0]['id']; ?>">
              <div class="col-12">
                <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
              </div>
            </div>
          </form>
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
          
          
          
          
           $(".EventForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	
    
        var textData = $('.textData').html();
        var id = $('.id').val();
        var status = $('.status').val();
    $.ajax({
    data:{textData:textData,id:id,status:status},
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/updatePerksRedeempro",
	 error:function() {$(".displayAction").html('Error')},
	 beforeSend:function() {$(".displayAction").html('Sending Perks...'); $(".EventBtn").prop('disabled', true);},
     success: function(data) {
        
	 $(".displayAction").html(data);  
	   //$(".saveBtn").html(data); 
		//  $(".EventBtn").prop('disabled', true);
    



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