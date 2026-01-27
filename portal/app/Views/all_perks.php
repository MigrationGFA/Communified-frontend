<br><br><br><br>
    <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
        <div class="content-detached" >
          <div class="content-body"><!-- E-commerce Content Section Starts -->
          

    <!-- BEGIN: Content-->
    <div class="app-content content ecommerce-application" <?php if(!empty($email)){ echo ''; }else{ ?>style="margin-left: 0px !important; padding-top: 10px !important;" <?php }  ?>>
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
  
        <div class="content-detached content-right">
          <div class="content-body"><!-- E-commerce Content Section Starts -->


<!-- E-commerce Products Starts -->
  <!-- Checkout Place order starts -->
    <div id="step-cart" class="content-" role="tabpanel" aria-labelledby="step-cart-trigger">
        
      <div id="place-order" class="list-view product-checkout-">
          
        <!-- Checkout Place Order Left starts -->
        
        <div class="checkout-items">
        <?php $row = $this->gfa_model->getAllPerks(); foreach($row as $rowArray){  ?> 

<div class="card ecommerce-card">
            
            <div class="item-img">
              <a href="app-ecommerce-details.html">
                
                <img src="<?php echo base_url("uploads/files/{$rowArray['logo']}"); ?>" alt="img-placeholder" />
              </a>
            </div>
            <div class="card-body">
              <div class="item-name">
                <h6 class="mb-0"><a href="#" class="text-body"><?php echo $rowArray['title'] ?></a></h6>
                <span class="item-company">By <a href="#" class="company-name"><?php echo $rowArray['company_name'] ?></a></span>
                <div class="item-rating">
                  <ul class="unstyled-list list-inline">
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="filled-star"></i></li>
                    <li class="ratings-list-item"><i data-feather="star" class="unfilled-star"></i></li>
                  </ul>
                </div>
              </div>
              <span class="text-success mb-1"><?php echo $rowArray['tags'] ?></span>
              <div class="item-quantity">
                <span class="quantity-title">Qty:</span>
                <div class="quantity-counter-wrapper">
                  <div class="input-group">
                    <input type="text" class="quantity-counter" name="quantity" value="1" />
                  </div>
                </div>
              </div>
              <span class="delivery-date text-muted"><?php echo $rowArray['note'] ?></span>
              <span class="text-success">1 offers per startup</span>
            </div>
            <div class="item-options text-center">
              <div class="item-wrapper">
                <div class="item-cost">
                  <h4 class="item-price"><?php if($rowArray['value_1'] !=''){echo $rowArray['value_1']; }else{ echo '$'.$rowArray['value_2']; } ?></h4>
                  <p class="card-text shipping">
                    <span class="badge rounded-pill badge-light-success">Avaliable</span>
                  </p>
                </div>
              </div>
              <button type="button" class="btn btn-light mt-1 detailsBtn"  data-bs-toggle="modal" data-bs-target="#gfa700">
                <!-- <i data-feather="x" class="align-middle me-25"></i> -->
                <span>Details</span><p style="display: none;"><?php echo $rowArray['id'] ?></p>
              </button>
              <?php if(!empty($this->gfa_model->getCurrentSub($email,'Business Funding','active')) && ($rowArray['sub_type'] == 'Free' || $rowArray['sub_type'] == 'Monthly' || $rowArray['sub_type'] == 'Annual' )){ ?>
                
                    <a <?php if($rowArray['perks_type'] == 'gfa'){ ?> 
                href="#"
                class="btn btn-primary btn-cart requestBtn"
                <?php }else{ ?>
                href="<?php echo $rowArray['aff_link']; ?>"
                class="btn btn-primary btn-cart requestBtn"
               <?php }  ?>
               type="button">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate">Redeem</span><p style="display: none;"><?php echo $rowArray['id'] ?></p>
              </a>

                <?php }else{
                  if(!empty($this->gfa_model->getCurrentSub($email,'Premium Funding','active')) && ($rowArray['sub_type'] == 'Free' || $rowArray['sub_type'] == 'Monthly' )){  ?>

                  <a <?php if($rowArray['perks_type'] == 'gfa'){ ?> 
                href="#"
                class="btn btn-primary btn-cart requestBtn"
                <?php }else{ ?>
                href="<?php echo $rowArray['aff_link']; ?>"
                class="btn btn-primary btn-cart requestBtn"
               <?php }  ?>
               type="button">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate"> Redeem</span><p style="display: none;"><?php echo $rowArray['id'] ?></p>
              </a>
                <?php }else{ if($rowArray['sub_type'] == 'Free'){ ?>
              <a <?php if($rowArray['perks_type'] == 'gfa'){ ?> 
                href="#"
                class="btn btn-primary btn-cart requestBtn"
                <?php }else{ ?>
                href="<?php echo $rowArray['aff_link']; ?>"
                class="btn btn-primary btn-cart requestBtn"
               <?php }  ?>
               type="button">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate"> Redeem</span><p style="display: none;"><?php echo $rowArray['id'] ?></p>
              </a>
              <?php }else{ ?>
              <a href="<?php echo base_url(); ?>gfa/subscribe"  type="button" class="btn btn-primary btn-cart ">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate">Subscribe to Redeem</span>
              </a>
              
              <?php }}} ?>
              
            </div>

          </div>
  <?php } ?>  
  <input type="hidden" class="getCounter" value="1" />
  <!-- <input type="hidden" class="getId" value="" />       -->
  <script>
      $(function(){

        $(".input-group").click(function(){ 
          
          var valueCounter = $(this).find("input[type='text']").val();
          //var valueCounter = $(".quantity-counter").val();
          $('.getCounter').val(valueCounter);
        });

        $(".requestBtn").click(function(e){
         e.preventDefault();
         var getClicked = $(this);
        //.closest('.getBtnClicked');
         var  getCounter = $('.getCounter').val();
         var id = $(this).find('p').text();
          // var  getId = $('.getId').val(id);
          $.ajax({
     data:{getCounter:getCounter,id:id},
     type: "POST",
     url: "<?php echo base_url('gfa/perksRedeem'); ?>",
     error:function() {getClicked.html('Error Request');},
	 beforeSend:function() {getClicked.html('Requesting...');getClicked.prop("disabled", true );},
      success: function(data) {
       
        getClicked.prop("disabled", true );
        if(data != 1){
        window.open(data, "_self");
        }else{
          getClicked.html('Enquiry Pending'); 
        }
	
       }
      
    });
         
       }); 

        $(".detailsBtn").click(function(){
                // Select the input element with the string
                var id = $(this).find('p').text();
            $(".displayId").text(id);
            $.ajax({
                                
                          
                                data:{id:id},
                                type : 'POST',
                                url : '<?php echo base_url('gfa/loadperksbyid'); ?>',
                                error:function() {$(".modal-body").html('Error loading data');},
                                        beforeSend:function() {$(".modal-body").html('loading data...');},
                                      success: function(result) {
                                   //
                                  //$(".displayAction").html("Successfully Saved!"); 
                                    $(".modal-body").html(result);  
                                      
                                 
                                }                      
                              });

        });
      });
      </script>

        </div>
        <!-- Checkout Place Order Left ends -->

      </div>
      <!-- Checkout Place order Ends -->
    </div>

<!-- E-commerce Products Ends -->

<!-- E-commerce Pagination Starts -->
<!-- <section id="ecommerce-pagination">
  <div class="row">
    <div class="col-sm-12">
      <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-2">
          <li class="page-item prev-item"><a class="page-link" href="#"></a></li>
          <li class="page-item active"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item" aria-current="page"><a class="page-link" href="#">4</a></li>
          <li class="page-item"><a class="page-link" href="#">5</a></li>
          <li class="page-item"><a class="page-link" href="#">6</a></li>
          <li class="page-item"><a class="page-link" href="#">7</a></li>
          <li class="page-item next-item"><a class="page-link" href="#"></a></li>
        </ul>
      </nav>
    </div>
  </div>
</section> -->
<!-- E-commerce Pagination Ends -->

          </div>
        </div>
        <div class="sidebar-detached sidebar-left">
          <div class="sidebar"><!-- Ecommerce Sidebar Starts -->
<div class="sidebar-shop">
 
  <div class="card">
    <div class="card-body">


      <!-- Brands starts -->
      <div class="brands">
        <h6 class="filter-title">Categories</h6>
        <ul class="list-unstyled brand-list formPerks">
        <form class="formPerksValue"  method="post" action="#"  enctype="multipart/form-data" >
    <?php $row = $this->gfa_model->getAllPerksCategoryInOrder(); foreach($row as $rowArray){ ?>
          <li>
            <div class="form-check">
            <input type="checkbox" class="form-check-input" name="category[]" id="productBrand1" value="<?php echo $rowArray['category'] ?>" />
              <label class="form-check-label" for="productBrand1"><?php echo $rowArray['category'] ?></label>
            </div>
            <span><?php echo $this->gfa_model->countPerksPostedByCategory($rowArray['category']); ?></span>
          </li>
     <?php }  ?>    
    </form>
        </ul>
      </div>
      <!-- Brand ends -->


      <!-- Clear Filters Starts -->
      <div id="clear-filters">
      <form class="founderForm"  method="post" action="#"  enctype="multipart/form-data" >
        <button type="submit" class="btn w-100 btn-primary loadAllPerks">All Perks</button>
        <span class="displayAction"></span>
</form>
      </div>
      <!-- Clear Filters Ends -->
    </div>
  </div>
</div>
<!-- Ecommerce Sidebar Ends -->
<script>
      $(function(){

        $(".detailsBtn").click(function(){
                // Select the input element with the string
            //     var id = $(this).find('p').text();
            // $(".displayId").text(id);
            $(this).hide();

        });

        $('.formPerks input[type="checkbox"]').click(function() {
                            //  e.preventDefault();
                             var getVal = $(this).val();
    var formPerksValue = $('.formPerksValue').serialize();
      if($(this).prop("checked") == true) {                       
    


        $.ajax({
                                
                          
                                data:formPerksValue,
                                type : 'POST',
                                url : '<?php echo base_url('gfa/loadperkscategory'); ?>',
                                error:function() {$(".displayAction").html('Error loading data');},
                                        beforeSend:function() {$(".loadAllPerks").html('loading data...');},
                                      success: function(result) {
                                   //
                                  //$(".displayAction").html("Successfully Saved!"); 
                                    $(".checkout-items").html(result);  
                                    $(".loadAllPerks").html('All Perks');  
                                 
                                }                      
                              });

      }else{
          
         $.ajax({
                                
                          
    data:formPerksValue,
    type : 'POST',
    url : '<?php echo base_url('gfa/loadperkscategory'); ?>',
    error:function() {$(".displayAction").html('Error loading data');},
	          beforeSend:function() {$(".loadAllPerks").html('loading data...');},
          success: function(result) {
       //
		  //$(".displayAction").html("Successfully Saved!"); 
        $(".checkout-items").html(result);  
	      $(".loadAllPerks").html('All Perks');  
	   
    }                      
  });
 
  
      }
    

                         });
          
          	$(".founderForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
       // var form_data = new FormData();
        ///form_data.append("organisation_type", value);
    var getData = 1;
	 //var startupInfo = $('.startUpForm').serialize();
	
        var form_data = new FormData();
        //form_data.append("organisation_type", value)
        $.ajax({
            url: "<?php echo base_url('gfa/loadperks'); ?>",
            method: 'POST',
            data: form_data,
            processData: false,
            cache: false,
            contentType: false,
            error:function() {$(".displayAction").html('Error loading data');},
	          beforeSend:function() {$(".loadAllPerks").html('loading data...');},
          success: function(result) {
       //
		  //$(".displayAction").html("Successfully Saved!"); 
        $(".checkout-items").html(result);  
	      $(".loadAllPerks").html('All Perks');  
	   
	  
	
       }
                
        });

	 
  
  });

        
          
      });  
    </script>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Content-->

          </div>
        </div>
    <!-- END: Content-->

    <!-- Start gfa700 -->

    <div class="modal " id="gfa700"  aria-labelledby="zydiiLabel" aria-hidden="true">

              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-center" style="text-align:center;" id="zydiiLabel">Perks Details</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    
                    

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <!-- <a href="<?php //echo base_url(); ?>gfa/subscribe" target="_self" type="button" class="btn btn-primary">Subscribe to Redeem</a> -->
                  </div>
                </div>
              </div>
            </div>

<!-- End modal GFA700 -->




<!-- End modal Boubid -->