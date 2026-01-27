<?php 
  $this->gfa_model = model('App\Models\GfaModel');
   ?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 mb-4">
  <span class="text-muted fw-light">Group </span>Members 
</h4>

<!-- Header -->
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="user-profile-header-banner">

      <?php
        $stateRd = $StartupArray[0]['State'];
        $thisSkill = $skillArray[0]['profile_extra'];
        // echo $this->gfa_model->displayTotalCourseMember($thisSkill,$stateRd);
        $EmailByCourse = $this->gfa_model->getEmailByCourse($thisSkill);
        $verifyGroupHead = $this->gfa_model->verifyGroupHead("Yes",$stateRd,$thisSkill);
        
        $groupHeadDetails = $this->gfa_model->getStartUpDetails($verifyGroupHead[0]['email']); 
        $groupHeadName = $groupHeadDetails[0]['Primary_Contact_Name'];
        $groupHeadEmail = $verifyGroupHead[0]['email'];
        $groupHeadPhone = $groupHeadDetails[0]['Phones'];
        $getPhoto  =  $this->gfa_model->getPhotoUploaded($groupHeadEmail);
		$checkGroupHead = $this->gfa_model->checkGroupHead("Yes",$stateRd,$thisSkill,$email);
        // $sumMembers = 0;
        // foreach($EmailByCourse as $courseArray){
        //  $sumMembers += $this->gfa_model->displayTotalCourseMember($courseArray['email'],$stateRd);   
        // }
      
     ?>          <?php 
     if(empty($getPhoto)){
          $showPhoto = "public/assets-new/img/avatars/default-img.jpg";
      }else{
         
         $showPhoto = "uploads/onboarding/".$getPhoto[0]['Photo_name']; 
          
      } ?>
        <img src="" alt="" class="rounded-top">
      </div>
      <div class="user-profile-header d-flex flex-column flex-sm-row text-sm-start text-center mb-4">
        <div class="flex-shrink-0 mt-n2 mx-sm-0 mx-auto">
          <img src="<?php echo base_url("{$showPhoto}") ?>" alt="user image" class="d-block h-auto ms-0 ms-sm-4 rounded user-profile-img">
        </div>
        <div class="flex-grow-1 mt-3 mt-sm-5">
          <div class="d-flex align-items-md-end align-items-sm-start align-items-center justify-content-md-between justify-content-start mx-4 flex-md-row flex-column gap-4">
            <div class="user-profile-info">
              <h4><?=  $groupHeadName  ?></h4>
              <ul class="list-inline mb-0 d-flex align-items-center flex-wrap justify-content-sm-start justify-content-center gap-2">
              <li class="list-inline-item d-flex gap-1">
                  <i class='ti ti-users'></i> <?= "Group Head"  ?>
                </li>
              <li class="list-inline-item d-flex gap-1">
                  <i class='ti ti-color-swatch'></i> <?= $groupHeadEmail ?>
                </li>
               
                <li class="list-inline-item d-flex gap-1">
                  <i class='ti ti-user'></i> <?= $thisSkill ?> 
                </li>
                 <li class="list-inline-item d-flex gap-1">
                  <i class='ti ti-map-pin'></i> <?= $stateRd  ?>
                </li>
                
              </ul>
            </div>
            <a href="<?php echo base_url("gfa/profile_details/{$groupHeadDetails[0]['STUP_ID']}") ?>" class="btn btn-primary">
              <i class='ti ti-check me-1'></i>View Profile
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/ Header -->

<!-- Navbar pills -->
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-pills flex-column flex-sm-row mb-4">
      <li class="nav-item"><a class="nav-link active" href="#"><i class='ti ti-user-check ti-xs me-1'></i> Profile</a></li>
      <!--<li class="nav-item"><a class="nav-link" href="pages-profile-teams.html"><i class='ti ti-users ti-xs me-1'></i> Teams</a></li>-->
      <!--<li class="nav-item"><a class="nav-link" href="pages-profile-projects.html"><i class='ti ti-layout-grid ti-xs me-1'></i> Projects</a></li>-->
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url("chat") ?>"><i class='ti ti-link ti-xs me-1'></i> Chat</a></li>
    </ul>
  </div>
</div>
<!--/ Navbar pills -->
<input type="hidden" value="<?php echo $checkGroupHead[0]['email']; ?>" class="checkHead" />
<!-- Connection Cards -->
<div class="row g-4 loadingParse" id="item-container">
    
</div>
<!--/ Connection Cards -->
<script>
$(document).ready(function() {
    var offset = 0; // Initial offset for the database query
    var limit = 6;  // Number of items to load in each request
    var loading = false; // Flag to prevent multiple simultaneous requests
     var checkHead = $('.checkHead').val();

    // Function to load more items
    function loadMoreItems() {
        if (!loading) {
            loading = true;

            $.ajax({
                url: '<?php echo base_url("gfa/load_group_members") ?>', // PHP script to handle the server-side logic
                method: 'POST',
                data: { offset: offset, limit: limit, checkHead: checkHead},
                success: function(data) {
                    // Append the new items to the container
                    $('#item-container').append(data);

                    // Update the offset for the next request
                    offset += limit;

                    // If there are no more items, hide the "Load More" button
                    if (data.trim() === '') {
                        $('#load-more').hide();
                    }

                    loading = false;
                },
                error: function(xhr, status, error) {
                    //console.error('Error:', status, error);
                    $(".loadingParse").html("Error loading page");
                    loading = false;
                }
            });
        }
    }

    // Function to check if the user has scrolled to the bottom of the page
    function isBottomOfPage() {
        return $(window).scrollTop() + $(window).height() >= $(document).height();
    }

    // Event listener for the scroll event
    $(window).on('scroll', function() {
        if (isBottomOfPage()) {
            loadMoreItems();
        }
    });

    // Initial load on page load
    loadMoreItems();
});
</script>
          </div>