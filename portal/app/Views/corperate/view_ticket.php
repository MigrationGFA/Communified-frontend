<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $getOneTicket = $this->gfa_model->getOneTicket($id);
  $getViewTickets = $this->gfa_model->getViewTickets($getOneTicket[0]['ticket_id']);
?>
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">View All Tickets</h2>
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
        </div>
        <div class="content-body">
          <div class="d-flex justify-content-between align-items-center">
            <h4 class="py-4">#<?= $getOneTicket[0]['ticket_id']?> - <?= $getOneTicket[0]['subject']?></h4>
            <a href="<?= base_url('gfa/all_tickets')?>" class="btn btn-primary">View All Tickets</a>
          </div>
  <div class="row">
    <div class="col-12">
    <div class="col-12"> 
            <?php if ($getOneTicket[0]['status']) { ?>
            <div class="alert alert-danger text-center p-1" role="alert">
            This ticket is closed. You may reply to this ticket to reopen it.
            </div>
            <?php } ?>

            <div class="accordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed bg-secondary text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Reply
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <form action="#" id="#EventForm" class="form EventForm">
                                <div class="row">
                                    <div class="col-12 mt-2">
                                        <div class="mb-2">
                                        <label>Message </label>
                                        <textarea name="message" class="form-control" rows="2" required></textarea>
                                        </div>
                                        <input type="hidden" name="ticket_id" value="<?= $getOneTicket[0]['ticket_id']?>">
                                        <input type="hidden" name="role" value="<?=$account_type?>">
                                    </div>
                                    <div class="col-12 mt-2">
                                        <button type="submit" class="btn btn-success EventBtn mb-2">Submit</button><span class="displayAction"></span>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php foreach ($getViewTickets as $rowArray) { ?>
                <div class="card mt-4 ">
                    <div class="card-header py-1 <?= $rowArray['role'] == 'Admin' ? 'bg-info' : 'bg-success' ?> text-white">
                      <h6 class="py-0 my-0 text-white"><i data-feather="user"></i>  <?= $rowArray['role'] == "Admin" ? "Admin" : "User" ?></h6>
                      
                      <?= $rowArray['date_updated']?>
                    </div>
                    <!-- <hr> -->
                    <div class="card-body pt-2 pb-1">
                        <pre class="bg-white"><?= $rowArray['message']?></pre>
                    </div>
                </div>
            <?php } ?>
        </div>
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
                url: "<?php echo base_url("gfa/add_reply_ticket"); ?>",
                error:function() {$(".displayAction").html('Error')},
                beforeSend:function() {$(".displayAction").html('Sending Ticket...'); $(".EventBtn").prop('disabled', false);},
                processData: false,
                contentType: false,
                success: function(data) {       
                    $(".displayAction").html(data);
                    $(".EventBtn").prop('disabled', false);
                    window.location.reload();
                }
            });

            return false;

        });
         
    });  
</script>

