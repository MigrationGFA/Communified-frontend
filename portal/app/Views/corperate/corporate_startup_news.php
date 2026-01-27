 <!-- BEGIN: Content-->
 <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
 <div class="app-content content " onmouseover='getallsearchedposts(<?php echo json_encode($this->gfa_model->sort_dcdt_name($cor_info)); ?>); getallposts(6);'>
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body" ><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">
  <div class="row match-height">
    <!-- Medal Card -->
    <?php 
		        
		        $loginkey = $this->gfa_model->getWpCred($email);
		        $corperateRow_Event = $this->gfa_model->getCorperateDetails($email);
		        $corperateRow = $this->gfa_model->getCorperateStartupReg($cor_info);
		        $getAllCorporate = $this->admin_model->getAllCorperateByEmail($email); 
		   ?>

    <!--/ Medal Card -->


  </div>



  <div class="row match-height">




    <!-- Mentor Card -->
    <div class="col-lg-12 col-12">
      <div class="card card-user-timeline">
        <div class="card-header">
          <div class="d-flex align-items-center">
            <h4 class="card-title">Latest News</h4>
          </div>
        </div>
        <div class="card-body">
            
          <ul class="timeline ms-50" id="startup_news">
            <h6>Loading.....</h6>
          </ul>
          <ul class="timeline ms-50" id="startup_news_rand">
          </ul>
          
        </div>
<!--        <hr class="mb-2" />-->
<!--          <div class="d-grid">         -->
<!--<a href="<?php echo base_url(); ?>gfa/add_story" class="btn btn-primary" >+ Add Story</a> -->
<!--         </div>-->
      </div>
    </div>
    <!--/ Transaction Card --> 

   


  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->