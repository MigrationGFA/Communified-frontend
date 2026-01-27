<?php 
  $this->gfa_model = model('App\Models\GfaModel');
?>

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="d-flex justify-content-between align-items-center">
        <h4 class="py-3 mb-4">
            <span class="text-muted fw-light">All </span>Tickets 
        </h4>        
        <a href="<?= base_url('gfa/support_ticket')?>" class="btn btn-primary">Open Ticket</a>
    </div>
    <div class="row">        
        <div class="col-12">            
            <div class="card">
                <div class="card-body">                
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr class="fw-bold">
                                    <th></th>
                                    <th>Ticket</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Submitted</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $row = $this->gfa_model->getAllUserTickets($email);
                                $n = 1;
                                if (count($row) > 0) {
                                    foreach($row as $rowArray) {
                                ?>                
                                <tr>
                                    <td>
                                        <div><a href="<?php echo base_url()?>gfa/view_ticket/<?php echo $rowArray['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                                    </td>    
                                    <td>
                                        <div>#<?php echo $rowArray['ticket_id']  ?></div>
                                    </td>
                                    <td>
                                        <div><?php echo $rowArray['subject']  ?></div>
                                    </td>
                                    <td>
                                        <div><?php if ($rowArray['status'] == 0) { ?>
                                            <button class="btn btn-success btn-sm">Opened</button>
                                            <?php } else { ?>
                                            <button class="btn btn-danger btn-sm">Closed</button>
                                            <?php }  ?>
                                        </div>
                                    </td>                    
                                    <td>
                                        <div><?php echo $rowArray['date_created']; ?></div>
                                    </td>                    
                                    <td>        
                                        <div><?=($this->gfa_model->getTicketLastUpdate($rowArray['ticket_id'])) ?></div>
                                    </td>                    
                                </tr>
                                <?php } } else { ?>
                                <tr> 
                                    <td colspan="6" class="text-center text-light">
                                        No Record
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  