 <?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
 
 <div class="container-xxl flex-grow-1 container-p-y">
            
   <!--<span class="app-email-viewY"></span>         -->
<div class="app-email card">
  <div class="row g-0">
      
    <!-- Email Sidebar -->
    <?php $getNotificationSummary = $this->gfa_model->getNotificationSummary($email) ?>
    
    <div class="col app-email-sidebar border-end flex-grow-0" id="app-email-sidebar">
      <div class="btn-compost-wrapper d-grid">
        <button class="btn btn-primary btn-compose" data-bs-toggle="modal" data-bs-target="#emailComposeSidebar" id="emailComposeSidebarLabel"><?php echo lang('translation.Compose') ?></button>
      </div>
      <!-- Email Filters -->
      <div class="email-filters py-2">
        <!-- Email Filters: Folder -->
        <ul class="email-filter-folders list-unstyled mb-4">
          <li class="active d-flex justify-content-between clickAll" data-target="inbox">
            <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
              <i class="ti ti-mail ti-sm"></i>
              <span class="align-middle ms-2"><?php echo lang('translation.All') ?></span>
            </a>
            <div class="badge bg-label-primary rounded-pill badge-center"><?php echo $getNotificationSummary[0]['total_notifications'] ?></div> 
          </li>
          <li class="d-flex align-items-center justify-content-between clickInbox" data-target="trash">
            <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center ">
              <i class="ti ti-mail ti-sm"></i>
              <span class="align-middle ms-2"><?php echo lang('translation.Inbox') ?></span> 
            </a>
            <div class="badge bg-label-warning rounded-pill badge-center"><?php echo $getNotificationSummary[0]['notifications_by_status'] ?></div>
          </li>
          <li class="d-flex justify-content-between" data-target="sent">
            <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center">
              <i class="ti ti-send ti-sm"></i>
              <span class="align-middle ms-2"><?php echo lang('translation.Sent') ?></span>
            </a>
            <div class="badge bg-label-success rounded-pill badge-center"><?php echo $getNotificationSummary[0]['sent_notifications_active'] ?></div>
          </li>
          <li class="d-flex justify-content-between" data-target="draft">
            <a href="javascript:void(0);" class="d-flex flex-wrap align-items-center clickSave">
              <i class="ti ti-file ti-sm"></i>
              <span class="align-middle ms-2"><?php echo lang('translation.Draft') ?></span>
            </a>
            <div class="badge bg-label-dark rounded-pill badge-center"><?php echo $getNotificationSummary[0]['sent_notifications_saved'] ?></div>
          </li>
          
          
        </ul>
        <!-- Email Filters: Labels -->
        <div class="email-filter-labels">
          <small class="fw-normal text-uppercase text-muted m-4"><?php echo lang('translation.Labels') ?></small>
          <ul class="list-unstyled mb-0 mt-2">
            <li data-target="business">
              <a href="javascript:void(0);">
                <span class="badge badge-dot bg-success"></span>
                <span class="align-middle ms-2"><?php echo lang('translation.Business') ?></span>
              </a>
            </li>
            <li data-target="mentoring">
              <a href="javascript:void(0);">
                <span class="badge badge-dot bg-primary"></span>
                <span class="align-middle ms-2"><?php echo lang('translation.Mentoring') ?></span>
              </a>
            </li>
            <li data-target="work">
              <a href="javascript:void(0);">
                <span class="badge badge-dot bg-info"></span>
                <span class="align-middle ms-2"><?php echo lang('translation.Work') ?></span>
              </a>
            </li>
            <li data-target="information">
              <a href="javascript:void(0);">
                <span class="badge badge-dot bg-danger"></span>
                <span class="align-middle ms-2"><?php echo lang('translation.Information') ?></span>
              </a>
            </li>
          </ul>
        </div>
        <!--/ Email Filters -->
      </div>
    </div>
    <!--/ Email Sidebar -->

    <!-- Emails List -->
    <div class="col app-emails-list">
      <div class="shadow-none border-0">
        <div class="emails-list-header p-3 py-lg-3 py-2">
          <!-- Email List: Search -->
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center w-100">
              <i class="ti ti-menu-2 ti-sm cursor-pointer d-block d-lg-none me-3" data-bs-toggle="sidebar" data-target="#app-email-sidebar" data-overlay></i>
              <div class="mb-0 mb-lg-2 w-100">
                <div class="input-group input-group-merge shadow-none">
                  <span class="input-group-text border-0 ps-0" id="email-search">
                    <i class="ti ti-search"></i>
                  </span>
                  <input type="text" class="form-control email-search-input border-0" placeholder="<?php echo lang('translation.Search mail') ?>" aria-label="Search mail" aria-describedby="email-search">
                </div>
              </div>
            </div>
            
          </div>
          <hr class="mx-n3 emails-list-header-hr">
          <!-- Email List: Actions -->
          <div class="d-flex justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <div class="form-check mb-0 me-2">
                <input class="form-check-input" type="checkbox" id="email-select-all">
                <label class="form-check-label" for="email-select-all"></label>
              </div>
              <i class="ti ti-trash ti-sm email-list-delete cursor-pointer me-2"></i>
              <i class="ti ti-mail-opened ti-sm email-list-read cursor-pointer me-2"></i>
              
            </div>
            <!--<div class="email-pagination d-sm-flex d-none align-items-center flex-wrap justify-content-between justify-sm-content-end"> -->
            <!--  <span class="d-sm-block d-none mx-3 text-muted">1-10 of 653</span>-->
            <!--  <i class="email-prev ti ti-chevron-left ti-sm scaleX-n1-rtl cursor-pointer text-muted me-2"></i>-->
            <!--  <i class="email-next ti ti-chevron-right ti-sm scaleX-n1-rtl cursor-pointer"></i>-->
            <!--</div>-->
          </div>
        </div>
        <hr class="container-m-nx m-0">
        <!-- Email List: Items -->
        <?php //$notifyDataInbox = $this->gfa_model->getNotificationBox($email,"inbox");  ?>
        
        <div class="email-list pt-0">
            <?php //if(!empty($notifyDataInbox)){  ?>
          <ul class="list-unstyled m-0">
             <?php $notifyDataInbox = $this->gfa_model->getNotificationBox($email,"inbox"); foreach($notifyDataInbox as $notifyInbox){ ?>
            <li class="email-list-item" data-starred="true" data-bs-toggle="sidebar" data-target="#app-email-view" lms="<?php echo $notifyInbox['ref_id'] ?>">
              <div class="d-flex align-items-center">
                <div class="form-check mb-0">
                  <input class="email-list-item-input form-check-input" type="checkbox" id="email-1">
                  <label class="form-check-label" for="email-1"></label>
                </div>
                <!--<i class="email-list-item-bookmark ti ti-star ti-sm d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>-->
                <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-3 me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary">I</span>
                </div>
                <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                  <span class="h6 email-list-item-username me-2"><?php  echo ucwords($this->gfa_model->getAllRegisteredName($account_type,$email)); ?></span>
                  <span class="email-list-item-subject d-xl-inline-block d-block"> <?php echo lang("translation.{$notifyInbox['subject']}"); ?></span>
                </div>
                <div class="email-list-item-meta ms-auto d-flex align-items-center">
                  <span class="email-list-item-label badge badge-dot bg-danger d-none d-md-inline-block me-2" data-label="Information"></span>
                  <small class="email-list-item-time text-muted"><?php echo $this->gfa_model->timeAgo(strtotime($notifyInbox['time_submit'])) ?></small>
                  <!--<ul class="list-inline email-list-item-actions text-nowrap">-->
                  <!--  <li class="list-inline-item email-read"> <i class='ti ti-mail-opened ti-sm'></i> </li>-->
                  <!--  <li class="list-inline-item email-delete"> <i class='ti ti-trash ti-sm'></i></li>-->
                  <!--  <li class="list-inline-item"> <i class="ti ti-archive ti-sm"></i> </li>-->
                  <!--</ul>-->
                </div>
              </div>
            </li>
            <?php } ?>
            <?php $notifyDataSent = $this->gfa_model->getNotifySentByYou($email); foreach($notifyDataSent as $notifySent){ ?>
            <li class="email-list-item email-marked-read" data-sent="true" data-bs-toggle="sidebar" data-target="#app-email-view" lms="<?php echo $notifySent['ref_id'] ?>">
              <div class="d-flex align-items-center">
                <div class="form-check mb-0">
                  <input class="email-list-item-input form-check-input" type="checkbox" id="email-2">
                  <label class="form-check-label" for="email-2"></label>
                </div>
                <!--<i class="email-list-item-bookmark ti ti-star ti-sm d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>-->
                <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-3 me-2">
                  <span class="avatar-initial rounded-circle bg-label-success">S</span>
                </div>
                <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                  <span class="h6 email-list-item-username me-2"><?php  echo ucwords($this->gfa_model->getContactNameByEmail($email)[0]['contact_name']); ?></span>
                  <span class="email-list-item-subject d-xl-inline-block d-block"> <?php echo lang("translation.{$notifySent['subject']}"); ?></span>
                </div>
                <div class="email-list-item-meta ms-auto d-flex align-items-center">
                  <span class="email-list-item-label badge badge-dot bg-info d-none d-md-inline-block me-2" data-label="important"></span>
                  <small class="email-list-item-time text-muted"><?php echo $this->gfa_model->timeAgo(strtotime($notifySent['time_submit'])) ?></small>
                  <ul class="list-inline email-list-item-actions text-nowrap">
                    <li class="list-inline-item email-unread"> <i class='ti ti-mail ti-sm'></i> </li>
                    <li class="list-inline-item email-delete"> <i class='ti ti-trash ti-sm'></i></li>
                    <li class="list-inline-item"> <i class="ti ti-archive ti-sm"></i> </li>
                  </ul>
                </div>
              </div>
            </li>
            <?php } ?>
            <?php $notifyDataDraft = $this->gfa_model->getNotificationBoxSave($email,"save"); foreach($notifyDataDraft as $notifyDraft){ ?>
            <li class="email-list-item" data-draft="true" data-bs-toggle="sidebar" data-target="#app-email-view" lms="<?php echo $notifyDraft['ref_id'] ?>">
              <div class="d-flex align-items-center">
                <div class="form-check mb-0">
                  <input class="email-list-item-input form-check-input" type="checkbox" id="email-3">
                  <label class="form-check-label" for="email-3"></label>
                </div>
                
                <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-3 me-2">
                  <span class="avatar-initial rounded-circle bg-label-dark">D</span>
                </div>
                <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                  <span class="h6 email-list-item-username me-2"><?php  echo ucwords($this->gfa_model->getContactNameByEmail($email)[0]['contact_name']); ?></span>
                  <span class="email-list-item-subject d-xl-inline-block d-block"> <?php echo lang("translation.{$notifyDraft['subject']}"); ?></span>
                </div>
                <div class="email-list-item-meta ms-auto d-flex align-items-center">
                  <span class="email-list-item-attachment ti ti-paperclip ti-xs cursor-pointer me-2 float-end float-sm-none"></span>
                  <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                  <small class="email-list-item-time text-muted"><?php echo $this->gfa_model->timeAgo(strtotime($notifyDraft['time_submit'])) ?></small>
                  <ul class="list-inline email-list-item-actions text-nowrap">
                    <li class="list-inline-item email-read"> <i class='ti ti-mail-opened ti-sm'></i> </li>
                    <li class="list-inline-item email-delete"> <i class='ti ti-trash ti-sm'></i></li>
                    <li class="list-inline-item"> <i class="ti ti-archive ti-sm"></i> </li>
                  </ul>
                </div>
              </div>
            </li>
            <?php }  ?>
            <?php $notifyDataTrash = $this->gfa_model->getNotificationBox($email,"inbox"); foreach($notifyDataTrash as $notifyTrash){ ?>
            <li class="email-list-item email-marked-read showInbox" data-trash="true" data-bs-toggle="sidebar" data-target="#app-email-view" style="display:none" lms="<?php echo $notifyTrash['ref_id'] ?>">
              <div class="d-flex align-items-center">
                <div class="form-check mb-0">
                  <input class="email-list-item-input form-check-input" type="checkbox" id="email-10">
                  <label class="form-check-label" for="email-10"></label>
                </div>
                <!--<i class="email-list-item-bookmark ti ti-star ti-sm d-sm-inline-block d-none cursor-pointer ms-2 me-3"></i>-->
                <div class="avatar avatar-sm d-block flex-shrink-0 me-sm-3 me-2">
                  <span class="avatar-initial rounded-circle bg-label-primary">I</span>
                </div>
                <div class="email-list-item-content ms-2 ms-sm-0 me-2">
                  <span class="h6 email-list-item-username me-2"><?php  echo ucwords($this->gfa_model->getContactNameByEmail($notifyTrash['sender'])[0]['contact_name']); ?></span>
                  <span class="email-list-item-subject d-xl-inline-block d-block"> <?php echo lang("translation.{$notifyTrash['subject']}"); ?></span>
                </div>
                <div class="email-list-item-meta ms-auto d-flex align-items-center">
                  <span class="email-list-item-label badge badge-dot bg-primary d-none d-md-inline-block me-2" data-label="company"></span>
                  <small class="email-list-item-time text-muted"><?php echo $this->gfa_model->timeAgo(strtotime($notifyTrash['time_submit'])) ?></small>
                  <ul class="list-inline email-list-item-actions text-nowrap">
                    <li class="list-inline-item email-unread"> <i class='ti ti-mail ti-sm'></i> </li>
                    <li class="list-inline-item email-delete"> <i class='ti ti-trash ti-sm'></i></li>
                    <li class="list-inline-item"> <i class="ti ti-archive ti-sm"></i> </li>
                  </ul>
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
          <?php //}else{ ?>
          <!--<ul class="list-unstyled m-0">-->
          <!--  <li class="email-list-empty text-center d-none">No items found.</li>-->
          <!--</ul>-->
          <?php //}  ?>
        </div>
      </div>
      <div class="app-overlay"></div>
    </div>
    
    <!-- /Emails List -->

    <!-- Email View -->
    <div class="col app-email-view flex-grow-0 bg-body" id="app-email-view">
      <div class="card shadow-none border-0 rounded-0 app-email-view-header p-3 py-md-3 py-2">
        <!-- Email View : Title  bar-->
        <div class="d-flex justify-content-between align-items-center py-2">
          <div class="d-flex align-items-center overflow-hidden">
            <i class="ti ti-chevron-left ti-sm cursor-pointer me-2" data-bs-toggle="sidebar" data-target="#app-email-view"></i>
            <h6 class="text-truncate mb-0 me-2 app-email-viewX titleMsg">Focused impactful open issues1</h6>
            <!--<span class="badge bg-label-danger rounded-pill">Private</span>-->
          </div>
          <!-- Email View : Action  bar-->
          
        </div>
        <hr class="app-email-view-hr mx-n3 mb-2">
        <div class="d-flex justify-content-between align-items-center">
          
          <!--<div class="d-flex align-items-center flex-wrap justify-content-end">-->
          <!--  <span class="d-sm-block d-none mx-3 text-muted">1-10 of 653</span>-->
          <!--  <i class="ti ti-chevron-left ti-sm scaleX-n1-rtl cursor-pointer text-muted me-2"></i>-->
          <!--  <i class="ti ti-chevron-right ti-sm scaleX-n1-rtl cursor-pointer"></i>-->
          <!--</div>-->
        </div>
      </div>
      <hr class="m-0">
      <!-- Email View : Content-->
      <div class="app-email-view-content py-4">
        <!--<p class="email-earlier-msgs text-center text-muted cursor-pointer mb-5">1 Earlier Message</p>-->
        <!-- Email View : Previous mails-->
        <div class="card email-card-prev mx-sm-4 mx-3">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center mb-sm-0 mb-3">
              <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="user-avatar" class="flex-shrink-0 rounded-circle me-3" height="40" width="40" />
              <div class="flex-grow-1 ms-1">
                <h6 class="m-0 nameMsg">Ross Geller</h6>
                <small class="text-muted emailMsg">rossGeller@email.com</small>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <p class="mb-0 me-3 text-muted dateMsg">June 20th 2020, 08:30 AM</p>
              <i class="ti ti-paperclip cursor-pointer me-2"></i>
              <i class="email-list-item-bookmark ti ti-star ti-sm cursor-pointer me-2"></i>
              <!--<div class="dropdown me-3 d-flex align-self-center">-->
              <!--  <button class="btn p-0" type="button" id="dropdownEmailOne" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--> 
              <!--    <i class="ti ti-dots-vertical"></i>-->
              <!--  </button>-->
                <!--<div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownEmailOne">-->
                <!--  <a class="dropdown-item scroll-to-reply" href="javascript:void(0)">-->
                <!--    <i class="ti ti-corner-up-left me-1"></i>-->
                <!--    <span class="align-middle">Reply</span>-->
                <!--  </a>-->
                <!--  <a class="dropdown-item" href="javascript:void(0)">-->
                <!--    <i class="ti ti-corner-up-right me-1"></i>-->
                <!--    <span class="align-middle">Forward</span>-->
                <!--  </a>-->
                <!--  <a class="dropdown-item" href="javascript:void(0)">-->
                <!--    <i class="ti ti-alert-octagon me-1"></i>-->
                <!--    <span class="align-middle">Report</span>-->
                <!--  </a>-->
                <!--</div>-->
              <!--</div>-->
            </div>
          </div>
          <div class="card-body contentMsg">
            <p class="fw-medium">Greetings!</p>
            <p>
              It is a long established fact that a reader will be distracted by the readable content
              of a
              page when looking at its layout.The point of using Lorem Ipsum is that it has a
              more-or-less
              normal distribution of letters, as opposed to using 'Content here, content here',making
              it
              look like readable English.
            </p>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have
              suffered alteration in some form, by injected humour, or randomised words which don't
              look
              even slightly believable.
            </p>
            <p class="mb-0">Sincerely yours,</p>
            <p class="fw-medium mb-0">Envato Design Team</p>
            <hr>
           
          </div>
        </div>
        <!-- Email View : Last mail Check Mail-->
        <div class="card email-card-last mx-sm-4 mx-3 mt-4">
          <div class="card-header d-flex justify-content-between align-items-center flex-wrap">
            <div class="d-flex align-items-center mb-sm-0 mb-3">
              <img src="<?php echo base_url('public/assets-new/img/avatars/default-img.jpg'); ?>" alt="user-avatar" class="flex-shrink-0 rounded-circle me-3" height="40" width="40" />
              <div class="flex-grow-1 ms-1">
                <h6 class="m-0 nameMsgSender"></h6>
                <small class="text-muted emailMsg"></small>
              </div>
            </div>
            <div class="d-flex align-items-center">
              <p class="mb-0 me-3 text-muted dateMsg"></p>
              <!--<i class="ti ti-paperclip cursor-pointer me-2"></i>-->
              <!--<i class="email-list-item-bookmark ti ti-star ti-sm cursor-pointer me-2"></i>-->
              
            </div>
          </div>
          <div class="card-body contentMsg">
           
          </div>
        </div>
        <!-- Email View : Reply mail-->
        <div class="email-reply card mt-4 mx-sm-4 mx-3">
          <h6 class="card-header border-0">Reply to <span class="nameMsgSender"></span></h6>
          <div class="card-body pt-0 px-3">
            <div class="d-flex justify-content-start">
              <div class="email-reply-toolbar border-0 w-100 ps-0">
                <span class="ql-formats me-0">
                  <button class="ql-bold"></button>
                  <button class="ql-italic"></button>
                  <button class="ql-underline"></button>
                  <button class="ql-list" value="ordered"></button>
                  <button class="ql-list" value="bullet"></button>
                  <button class="ql-link"></button>
                  <button class="ql-image"></button>
                </span>
              </div>
            </div>
            <div class="email-reply-editor replyContent" style="overflow-x: auto; overflow-y: auto; height: 200px;"></div>
            <div class="d-flex justify-content-end align-items-center">
              <!--<div class="me-3">-->
              <!--  <label class="cursor-pointer" for="attach-file-1"><i class="ti ti-paperclip me-2"></i><span class="align-middle">Attachments</span></label>-->
              <!--  <input type="file" name="file-input" class="d-none" id="attach-file-1">-->

              <!--</div>-->
              <button class="btn btn-primary replyButton">
                <i class="ti ti-send ti-xs me-1"></i>
                <span class="align-middle"><?php echo lang('translation.Send') ?></span>
              </button><span class="resultReplyData"></span>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <input type="hidden" class="refIdMsg" name="ref_id_msg"  />
    
    <!-- Email View -->
  </div>

  <!-- Compose Email -->
  <div class="app-email-compose modal" id="emailComposeSidebar" tabindex="-1" aria-labelledby="emailComposeSidebarLabel" aria-hidden="true">
    <div class="modal-dialog m-0 me-md-4 mb-4 modal-lg">
      <div class="modal-content p-0">
        <div class="modal-header py-3 bg-body">
          <h5 class="modal-title fs-5"><?php echo lang('translation.Compose Message') ?></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body flex-grow-1 pb-sm-0 p-4 py-2">
          <form class="email-compose-form composeSaver" id="composeSender"  method="post" action="" enctype="multipart/form-data">
            <div class="email-compose-to d-flex justify-content-between align-items-center">
              <label class="form-label mb-0" for="emailContacts"><?php echo lang('translation.To') ?>:</label>
              <div class="select2-primary border-0 shadow-none flex-grow-1 mx-2">
                <select class="select2 select-email-contacts form-select" id="emailContacts" name="emailContacts[]" required multiple>
            <?php foreach($startupDataLimit as $startData){  ?>
                  <option data-avatar="default-img.jpg" value="<?php echo $startData['Contact_Email'] ?>"><?php echo $startData['Contact_Email'] ?></option> 
                  <?php }   ?>
                </select>
              </div>
              
            </div>

            
            <hr class="container-m-nx my-2">
            <div class="email-compose-subject d-flex align-items-center mb-2">
              <label for="email-subject" class="form-label mb-0"><?php echo lang('translation.Subject') ?>:</label>
              <input type="text" class="form-control border-0 shadow-none flex-grow-1 mx-2" id="email-subject" required name="subject" placeholder="">
            </div>
            <div class="email-compose-message container-m-nx">
              <div class="d-flex justify-content-end">
                <div class="email-editor-toolbar border-0 w-100 border-top">
                  <span class="ql-formats me-0">
                    <button class="ql-bold"></button>
                    <button class="ql-italic"></button>
                    <button class="ql-underline"></button>
                    <button class="ql-list" value="ordered"></button>
                    <button class="ql-list" value="bullet"></button>
                    <button class="ql-link"></button>
                    <button class="ql-image"></button>
                  </span>
                </div>
              </div>
              <div class="email-editor border-0 border-top composeEditor" style="overflow-x: auto; overflow-y: auto; height: 200px;"></div>
               
            </div>
            <hr class="container-m-nx mt-0 mb-2">
            <div class="email-compose-actions d-flex justify-content-between align-items-center mt-3 mb-3">
                
              <div class="d-flex align-items-center">
                  <button type="submit" class="btn btn-success btnSend me-2 displayActionCompose"><i class="ti ti-send ti-xs me-1"></i><?php echo lang('translation.Send') ?></button> 
                  <button type="submit" class="btn btn-primary btnSave me-2 displayActionComposeSave"><i class="ti ti-file ti-xs me-1"></i> <?php echo lang('translation.Save to draft') ?></button>
                  
                
                <!--<label for="attach-file"><i class="ti ti-paperclip cursor-pointer ms-2"></i></label>--> 
                <!--<input type="file" name="file-input" class="d-none" id="attach-file">-->
                <!--data-bs-dismiss="modal" aria-label="Close"-->
                <span class="resultData"></span>
              </div>
              
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /Compose Email -->
</div>
          </div>
          
          