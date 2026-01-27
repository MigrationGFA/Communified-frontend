<?php 
  $this->gfa_model = model('App\Models\GfaModel');
  $getOneTicket = $this->gfa_model->getOneTicket($id);
  $getViewTickets = $this->gfa_model->getViewTickets($getOneTicket[0]['ticket_id']);
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center">
    <h4 class="py-4">#<?= $getOneTicket[0]['ticket_id']?> - <?= $getOneTicket[0]['subject']?></h4>
    <a href="<?= base_url('gfa/all_tickets')?>" class="btn btn-primary">View All Tickets</a>
    </div>
    <div class="row">        
        <div class="col-12"> 
            <?php if ($getOneTicket[0]['status']) { ?>
            <div class="alert alert-success text-center p-2" role="alert">
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
                                        <input type="hidden" name="role" value="User">
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
                    <div class="card-header pt-1 pb-0 <?= $rowArray['role'] == 'User' ? 'bg-primary' : 'bg-info' ?> text-white">
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <h6 class="py-0 my-0 text-white"><i class='ti ti-user'></i> <?= $rowArray['role']?></h6>
                            <?= $rowArray['date_updated']?>
                        </div>
                    </div>
                    <!-- <hr> -->
                    <div class="card-body pt-2 pb-1">
                        <pre><?= $rowArray['message']?></pre>
                    </div>
                </div>
            <?php } ?>
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