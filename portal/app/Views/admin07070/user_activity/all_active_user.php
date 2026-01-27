<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">RECENT ACTIVITIES</h3>
            </div>

            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/user_activity">
                <input type="hidden" name="column_value" value="" >
                  <button type="submit" name="submit" class="btn btn-primary" class="btn btn-info ">Export</button>
                </form>
                <br><br>

            <!-- /.box-header -->
            
            <div class="box-body">
                
                <br><br>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S/no</th>
                  <th>Company</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Last Activity</th>
                  <th>IP</th>
                  <th></th>
                 
                </tr>
                </thead>
				        <tbody>
                  <?php 
                      $n = 1;
                      $active_emails = $this->admin_model->getActiveUsers();  
                      foreach($active_emails as $active_email){
					        ?>
                  <tr>
                    <td><?php echo $n++; ?></td>
                    
                    <td><?php echo $this->gfa_model->getSortedUserData($active_email)['Name']; ?></td>
                    <td><?php echo $this->gfa_model->getSortedUserData($active_email)['PersonalName']; ?></td>
                    <td><?php echo $active_email; ?></td>
                    <td><?php echo $this->admin_model->getRecentActivity($active_email)['UserAction']; ?></td>
                    <td><?php echo $this->admin_model->getRecentActivity($active_email)['UserIp']; ?></td>
                    <td><a href="<?php echo base_url(); ?>admin/all_activity?email=<?php echo $active_email; ?>" class="btn btn-info pull-right">View All</a></td>
                  </tr>
                  

                  <?php } ?>
                </tbody>
                
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>