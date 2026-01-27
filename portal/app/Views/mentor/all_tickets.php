<?php 
  $this->gfa_model = model('App\Models\GfaModel');
?>
 <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0"><?php echo lang('translation.All Tickets') ?></h2>
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
        <h4 class="py-3 mb-4">
            <!-- <span class="text-muted fw-light">All </span>Tickets  -->
        </h4>        
        <a href="<?= base_url('gfa/support_ticket')?>" class="btn btn-primary"><?php echo lang('translation.Open A Ticket') ?></a>
    </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body text-center">
          <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr class="fw-bold">
                        <th></th>
                        <th><?php echo lang('translation.New Ticket') ?></th>
                        <th><?php echo lang('translation.Subject') ?></th>
                        <th><?php echo lang('translation.Status') ?></th>
                        <th><?php echo lang('translation.Submitted') ?></th>
                        <th><?php echo lang('translation.Last Updated') ?></th>
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
                        <td colspan="6" class="text-center">
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
      </div>
    </div>