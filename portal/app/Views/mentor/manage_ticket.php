    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Tickets</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                    <!-- <li class="breadcrumb-item">
                      <a href="<?php // echo base_url(); ?>gfa/add_slider"> Add Ticket </a>
                    </li> -->
                  </ol>
                </div>
              </div>
            </div>
          </div>
        <div class="content-body">
<section id="dashboard-analytics">


  <div class="row match-height">
    <div class="col-lg-12 col-12 ">
        
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
          <table class="table">
                            <thead>
                                <tr class="fw-bold">
                                    <th></th>
                                    <th>Ticket</th>
                                    <th>Opened By</th>
                                    <th>Subject</th>
                                    <th>Status</th>
                                    <th>Submitted</th>
                                    <th>Last Updated</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $row = $this->gfa_model->getAllTickets();
                                $n = 1;
                                if ($row) {
                                  foreach($row as $rowArray) {
                                ?>                
                                <tr>
                                    <td>
                                        <div><a href="<?php echo base_url()?>gfa/admin_view_ticket/<?php echo $rowArray['id']; ?>" class="btn btn-primary btn-sm">View</a></div>
                                    </td>    
                                    <td>
                                        <div>#<?php echo $rowArray['ticket_id']  ?></div>
                                    </td>
                                    <td>
                                        <div><?php echo $rowArray['created_by']  ?></div>
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
      <!-- </div><span class="showDataDel"></span> -->
    </div>
    <!--/ Company Table Card -->
   
  </div>
<script>
    
    $(function(){

      $("tr").on('click','.deletebtn',function() {
        var id = $(this).find('span').text();
        //$(".showDataDel").val(id);
        var choice = confirm('Do you really want to delete this record?');
        if(choice === true) {
            $(this).closest('tr').remove();
            //$('tr.myTable').remove();
          
          $.ajax({
          data:{id:id},
          type: "POST",
          url: "<?php echo base_url(); ?>gfa/deleteSlider",
          //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
          //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
            success: function(data) {
          // $(".showDataDel").html(data);
          }
            
          });
        }
        return false;
      }); 
    });
</script>

</section>
<!-- Dashboard Analytics end -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

   