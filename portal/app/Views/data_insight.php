<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
          <div class="col-12">
            <h2 class="content-header-title float-start mb-0">
              Data and Insight
            </h2>
            <div class="breadcrumb-wrapper">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="<?php echo base_url(); ?>gfa/dashboard">Home</a>
                </li>
                <li class="breadcrumb-item"><a href="#">Startup</a></li>
                <li class="breadcrumb-item">
                  <a href="#">Data and Insight</a>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php $checkYourStory = $this->gfa_model->getTellYourStoryByTitle($story_title);?>

    <div class="content-detached">
      <div class="content-body">
        <!-- Blog Detail -->
        <div
          class="blog-detail-wrapper"
        >
          <div
            class="row"
            id="embed-container"
            style="width: 100%; height: 70vh;"
          ></div>
        </div>
        <!--/ Blog Detail -->
      </div>
    </div>
  </div>
  <script src="https://getfundedafrica.com/portal/assets/dist/js/data_insights.js"></script>
</div>
