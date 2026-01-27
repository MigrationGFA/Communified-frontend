<ul class="chat-users-list contact-list media-list">
  <?php 
      $mysession = session()->get('email');
      $contacts = $data;
      
      foreach($contacts as $contact){ 
  ?>

  <?php
    $getContactPhoto = $gfa_model->getPhotoUploaded($contact);
    $showContactPhoto = empty($getContactPhoto) ? "public/assets/images/uploads/default-avatar.jpg" : "uploads/onboarding/".$getContactPhoto[0]['Photo_name'];
  ?>

  <li onclick="get_message('<?php echo $contact; ?>')">
    <span class="avatar"><img src="<?php echo base_url($showContactPhoto); ?>" height="42"
        width="42" alt="User Photo" />
      <span class="avatar-status-offline"></span>
    </span>
    <div class="chat-info flex-grow-1">
      <h5 class="mb-0"><?php echo !empty($gfa_model->getStartUpDetails($contact)[0]['Primary_Contact_Name']) ? strtoupper($gfa_model->getStartUpDetails($contact)[0]['Primary_Contact_Name']) : strtoupper($gfa_model->getStartUpDetails($contact)[0]['Startup_Company_Name']); ?></h5>
      <p class="card-text text-truncate">
        
      </p>
    </div>
  </li>
  <?php } ?>

  <li class="no-results">
    <h6 class="mb-0">No Contacts Found</h6>
  </li>
</ul>