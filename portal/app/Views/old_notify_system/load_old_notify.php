<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
              <li class="dropdown-menu-header">
                <div class="dropdown-header d-flex">
                  <h4 class="notification-title mb-0 me-auto">Notifications</h4>
                  <div class="badge rounded-pill badge-light-primary"><?php echo $this->gfa_model->countNotifyByEmail($email,'new'); ?></div>
                </div>
              </li>
              <li class="scrollable-container media-list">
                  <?php $notifyData = $this->gfa_model->getNotification($email); 
                        foreach($notifyData as $notifyDetails){
                  ?>
                  <a class="d-flex userClickedNotify" href="#" ls="<?php echo $notifyDetails['ref_id'] ?>">
                  <div class="list-item d-flex align-items-start">
                    <div class="me-1">
                       <div class="avatar-content">N</div>
                    </div>
                    <div class="list-item-body flex-grow-1">
                      <p class="media-heading"><span class="fw-bolder"><?php echo $notifyDetails['subject'] ?></span></p>
                      <small class="notification-text"><?php echo $this->gfa_model->timeAgo(strtotime($notifyDetails['time_submit'])) ?></small>
                    </div>
                  </div>
                  </a>
                  
                  <?php }  ?>
                 
              </li>
              <li class="dropdown-menu-footer"><a class="btn btn-primary w-100 userClickedNotify1" href="<?php echo base_url('gfa/notify_inbox'); ?>">Read all notifications</a></li>
          
<script>
    
    $(function(){
        
       $('.userClickedNotify').click(function(){
                var getRef =  $(this).attr("ls");
                //var showValue = $(".getValue").val(getValue);
                
                 // Perform an AJAX request after the page has loaded 1
    $.ajax({
        url: '<?php echo base_url("gfa/userClickedNotify") ?>',
        method: 'POST',
        data:{getRef:getRef},
        success: function(response) {
            window.open("<?php echo base_url('gfa/notify_inbox'); ?>/"+getRef, "_self");
            //(".userClickedNotify1").html(response);
        }
       
    });
            });  
    });
        
      
    
</script>