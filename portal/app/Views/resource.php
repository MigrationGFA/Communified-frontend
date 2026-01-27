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
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.Resource Centre') ?> </h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url('gfa/'); ?>"><?php echo lang('translation.Dashboard') ?></a>
                    </li>
                    <li class="breadcrumb-item active">
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="mb-1 breadcrumb-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-body">
          <section id="modal-examples">
<?php  $row = $this->admin_model->getAllResourceCategory();  foreach($row as $rowArray){   ?>
  <div class="row">
  
    <h4 class="content-header-title float-start mb-0"><?php echo strtoupper($rowArray['title']) ?></h4>
    <hr>
    <?php  $resourceData =  $this->gfa_model->getResouceByCategoryId($rowArray['id']); foreach($resourceData as $resourceDetails){ ?>
    <div class="col-md-4">
      <div class="card">
        <div class="card-body text-center">
          <i data-feather="file-text" class="font-large-2 mb-1"></i>
          <h5 class="card-title"><?php echo ucwords($resourceDetails['title']) ?></h5>
          <p class="card-text"><?php echo ucwords($resourceDetails['caption']) ?></p>

          <!-- modal trigger button -->
          <a href="<?php echo base_url("gfa/resource_details/{$resourceDetails['id']}/{$resourceDetails['title']}"); ?>" class="btn btn-primary" >
            <?php echo lang('translation.Details') ?>
          </a>
        </div>
      </div>
    </div>
    <!-- / share project card -->
<?php }  ?>
    
  </div>
  <?php }   ?>
</section>
          

        </div>
      </div>
    </div>