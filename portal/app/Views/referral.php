<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
$nonce_value = bin2hex(random_bytes(16));
   ?>
<div class="container-xxl flex-grow-1 container-p-y">
            
            

<div class="row">
  <!-- Website Analytics -->
  
  <!--/ Website Analytics -->

  <!-- Sales Overview -->
  <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-credit-card ti-sm'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2"><?php echo $this->gfa_model->countMyReferral($skillArray[0]['ref']) ?></h5>
        <small>Total</small>
      </div>
      <div id="revenueGenerated"></div>
   
    </div>
  </div>
    <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-check ti-sm'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2"><?php echo $this->gfa_model->countUsersWithEmailAndLastLogin($skillArray[0]['ref']) ?></h5>
        <small>Verified</small>
      </div>
      <div id="revenueGenerated"></div>
    </div>
  </div>
  <!--/ Sales Overview -->
   <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="<?php echo $nonce_value; ?>"></script>
  <!-- Revenue Generated -->
  <div class="col-lg-4 col-md-6 col-sm-6 mb-4">
    <div class="card">
      <div class="card-body pb-0">
        <div class="card-icon">
          <span class="badge bg-label-success rounded-pill p-2">
            <i class='ti ti-credit-card ti-sm'></i>
          </span>
        </div>
        <h5 class="card-title mb-0 mt-2">0</h5>
        <small>Total Earned</small>
      </div>
      <div id="revenueGenerated"></div>
    </div>
  </div>
  
  <div class="col-lg-12 mb-4">
    <div class="input-group">
        <input type="text" class="form-control" value="<?php echo 'https://gfa-tech.com/register-gateway/?ref='.$skillArray[0]['ref']; ?>"  readonly="readonly" id="inputField" placeholder="" aria-label="Recipient's username" aria-describedby="button-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-primary" type="button" id="copyButton">Copy Referral Link</button>
        </div>
    </div>
    <div id="revenueGenerated" class="mb-2 mt-2"><a class="btn btn-outline-primary" href="whatsapp://send?text=<?php echo 'https://gfa-tech.com/register-gateway/?ref='.$skillArray[0]['ref']; ?>" data-action="share/whatsapp/share">Share via WhatsApp</a> 
   <div class="fb-share-button btn btn-outline-primary" data-href="<?php echo 'https://gfa-tech.com/register-gateway/?ref='.$skillArray[0]['ref']; ?>" data-layout="button"></div>
   <a href="https://twitter.com/intent/tweet?url=<?php echo 'https://gfa-tech.com/register-gateway/?ref='.$skillArray[0]['ref']; ?>" class="btn btn-outline-primary" target="_blank" rel="noopener noreferrer">Share on Twitter</a>
   </div>
  </div>
  <!--/ Revenue Generated -->

  <!-- Earning Reports -->
  <div class="col-lg-12 mb-4">
    <div class="card h-100">
      <div class="card-header pb-0 d-flex justify-content-between mb-lg-n4">
        <div class="card-title mb-0">
          <h5 class="mb-4">Your Referrals</h5>
          <small class="text-muted"></small>
        </div>
        
        <!-- </div> -->
      </div>
      <div class="card-body">
       <div class="card-datatable text-nowrap">
     <table class="table-responsive table">
  <thead>
    <tr>
      <th>Full name</th>
      <th>Email</th>
      <th>State</th>
      <th>LGA</th>
      <th>Reg Date</th>
      <th>Status</th>
    </tr>
  </thead>
  <tbody>
    <!-- Add your table data rows here -->
    <?php foreach($referralArray as $referralDetails){ 
    $studentDetails = $this->gfa_model->getStartupsInvWithEmail($referralDetails['email']); 
    ?>
    <tr>
      <td><?php echo ucwords($studentDetails[0]['Primary_Contact_Name']) ?></td>
      <td><?php echo $referralDetails['email'] ?></td>
      <td><?php echo $studentDetails[0]['State'] ?></td>
      <td><?php echo $studentDetails[0]['State'] ?></td>
      <td><?php echo date("d-m-Y H:i:s",strtotime($referralDetails['time_submit'])) ?></td>
      <td><?php if($studentDetails[0]['last_login'] ==''){ echo "<span class='bg-label-warning'>not logged in</span>"; }else{ echo "<span class='bg-label-success'>logged in</span>"; } ?></td>
    </tr>
    <?php }  ?>
    <!-- Add more rows as needed -->
  </tbody>
</table>
  </div> 
        
      </div>
    </div>
  </div>
  <!--/ Earning Reports -->

  
</div>
<script>
        document.getElementById('copyButton').addEventListener('click', function() {
            // Get the value of the input field
            var inputValue = document.getElementById('inputField').value;
            
            // Create a temporary textarea element
            var tempTextarea = document.createElement('textarea');
            tempTextarea.value = inputValue;
            
            // Append the textarea to the document
            document.body.appendChild(tempTextarea);
            
            // Select the text inside the textarea
            tempTextarea.select();
            
            // Copy the selected text to the clipboard
            document.execCommand('copy');
            
            // Remove the temporary textarea from the document
            document.body.removeChild(tempTextarea);
            
            // Alert the user that the text has been copied (optional)
            alert('Text copied to clipboard: ' + inputValue);
        });
    </script>

          </div>