<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $this->admin_model = model('App\Models\AdminModel');
   ?>
<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">View Ticket</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/manage_ticket">All Ticket</a>
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
         
        </div>

          <div class="content-body">
            <!-- Blog Detail -->
    <div class="blog-detail-wrapper">
        <?php 
            $this->gfa_model = model('App\Models\GfaModel');
            $getOneTicket = $this->gfa_model->getOneTicket($id);
            $t_id = $getOneTicket[0]['ticket_id'];
            $getViewTickets = $this->gfa_model->getViewTickets($t_id);
        ?>

        <div class="d-flex justify-content-between align-items-center">
            <h4 class="py-4">#<?= $t_id?> - <?= $getOneTicket[0]['subject']?></h4>

            <input type="hidden" id="t_column" value="<?= $t_id?>">
            <?php if ($getOneTicket[0]['status'] == 0) { ?>
            <a href="#" type="submit" class="btn btn-danger" id="closeTicketBtn">Close Ticket</a>
            <?php } ?>
        </div>

        <?php if ($getOneTicket[0]['status'] == 1) { ?>
        <div class="alert alert-secondary text-center p-1" role="alert">
        This ticket is closed.
        </div>
        <?php } ?>

        <?php if ($getOneTicket[0]['status'] == 0) { ?>
        <div class="accordion">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed bg-success text-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                                    <input type="hidden" name="ticket_id" value="<?= $t_id?>">
                                    <input type="hidden" name="role" value="Admin">
                                </div>
                                <div class="col-12 mt-2">
                                    <button type="submit" class="btn btn-success EventBtn mb-2">Send</button><span class="displayAction"></span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>

        <?php foreach ($getViewTickets as $rowArray) { ?>
        <div class="card border-secondary mt-3">
            <div class="card-header py-1 <?= $rowArray['role'] == 'User' ? 'bg-primary' : 'bg-info' ?> text-white">
                <h6 class="py-0 my-0 text-white"><i data-feather="user"></i> <?= $rowArray['role']?></h6>

                <?= $rowArray['date_updated']?>
            </div>
            <div class="card-body py-1">
                <pre class="bg-white"><?= $rowArray['message']?></pre>
            </div>
        </div>
        <?php } ?>
        <!--/ Blog -->
        <hr class="invoice-spacing" />
            
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
         

        $("#closeTicketBtn").click(function(e) {
            e.preventDefault();
            var ticketId = $("#t_column").val();
            
            $.ajax({
                type: "POST",
                url: "<?= base_url('gfa/updateTicketStatus') ?>",
                data: { column: 'status', value: 1, ticketId: ticketId },
                success: function(response) {
                    if (response) {
                        alert('Ticket closed successfully');
                    } else {
                        alert('Failed to close ticket. Please try again later.');
                    }
                    window.location.reload();
                },
                error: function() {
                    alert('An error occurred while processing your request. Please try again later.');
                }
            });
        });
    });  
</script>