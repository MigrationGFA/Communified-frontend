<?php 
  $this->gfa_model = model('App\Models\GfaModel');
//   $this->admin_model = model('App\Models\AdminModel');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center">        
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">New </span>Ticket 
        </h4>
        <a href="<?= base_url('gfa/all_tickets')?>" class="btn btn-primary">View All Tickets</a>
    </div>
    <div class="row">
        <div class="col-12 mt-1">
            <div class="card">
                <div class="card-body">
                    
                <form action="#" id="#EventForm" class="form EventForm" enctype="multipart/form-data">
                    <div class="row">
                        
                    <div class="col-md-6 col-12 my-2">
                        <label>Name </label>
                        <input type="text" value="<?=$StartupArray[0]['Primary_Contact_Name']?>" class="form-control" readonly />
                    </div>
                
                    <div class="col-md-6 col-12 my-2">
                        <label>Email </label>
                        <input type="text" value="<?=$email?>" class="form-control" readonly />
                    </div>
                    
                    <div class="col-md-6 col-12 my-2">
                        <label>Subject </label>
                        <!-- <input type="text" name="subject" class="form-control" required /> -->
                        <select name="subject" class="form-select" required>
                            <option value="Application Issues">Application Issues</option>
                            <option value="Assessment Issues">Assessment Issues</option>
                            <option value="Chat Issues">Chat Issues</option>
                            <option value="Certificate">Certificate</option>
                            <option value="Community Issues">Community Issues</option>
                            <option value="General Question">General Question</option>
                            <option value="Login Issues">Login Issues</option>
                            <option value="Page load error">Page load error</option>
                            <option value="Profile Update">Profile Update</option>
                            <option value="Referral issues">Referral issues</option>
                            <option value="Website not Opening">Website not Opening</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    
                    <div class="col-md-6 col-12 my-2">
                        <label>Urgency </label>
                        <select name="urgency" class="form-select" required>
                            <option value="Low">Low</option>
                            <option value="Medium">Medium</option>
                            <option value="High">High</option>
                        </select>
                    </div>
                    
                    <div class="col-12 my-2">
                        <label>Message </label>
                        <textarea name="message" class="form-control" rows="2" required></textarea>
                    </div>
                    
                    <div class="col-12 mt-2">
                        <button type="submit" class="btn btn-primary EventBtn mb-2">Submit</button><span class="displayAction"></span>
                    </div>
                    
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(function(){
        $(".EventForm").submit(function(e) {
            e.preventDefault();
            var form = $(this)[0];
            var formData = new FormData(form);
            $.ajax({
                data:formData,
                type: "POST",
                url: "<?php echo base_url("gfa/add_support_ticket"); ?>",
                error:function() {$(".displayAction").html('Error')},
                beforeSend:function() {$(".displayAction").html('Sending Ticket...'); $(".EventBtn").prop('disabled', false);},
                processData: false,
                contentType: false,
                success: function(data) {       
                    $(".displayAction").html(data);
                    $(".EventBtn").prop('disabled', false);
                    window.open("<?php echo base_url(); ?>gfa/all_tickets", "_self");
                }
            });

            return false;

        });
         
    });  
</script>
