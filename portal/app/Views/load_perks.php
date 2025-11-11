<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
<?php $row = $this->gfa_model->getAllPerks(); foreach($row as $rowArray){  ?>

<div class="card ecommerce-card">
            
            <div class="item-img">
              <a href="app-ecommerce-details.html">
                
                <img src="<?php echo base_url("uploads/files/{$rowArray['logo']}") ?>" alt="img-placeholder" />
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
              <?php if(!empty($this->gfa_model->getCurrentSub($email,'Business Funding','active'))){ ?>
                
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
              <a href="<?php echo base_url('gfa/subscribe'); ?>"  type="button" class="btn btn-primary btn-cart ">
                <i data-feather="heart" class="align-middle me-25"></i>
                <span class="text-truncate">Subscribe to Redeem</span>
              </a>
              
              <?php }}} ?>
            </div>

          </div>
  <?php } ?>  
  <input type="hidden" class="getCounter" value="1" />      
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