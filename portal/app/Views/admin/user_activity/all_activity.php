<?php $admin_model = new \App\Models\AdminModel(); ?>
<?php $gfa_model = new \App\Models\GfaModel(); ?>

<div class="content-wrapper">

<section class="content">
      <div class="row">
        <div class="col-xs-12">
            
          <div class="box">
              
            <div class="box-header">
              <h3 class="box-title">ACTIONS</h3>
            </div>


            <form class="pull-right" method="POST" action="<?php echo base_url(); ?>download/export/user_activity/UserEmail">
                <input type="hidden" name="column_value" value="<?= $_GET['email'] ?>" >
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
                  <th>Action</th>
                  <th>IP</th>
                  <th>Date</th>
                 
                </tr>
                </thead>
				<tbody>
                    <?php 
                        $n = 1;
                        $active_user = $_GET['email'];
                        $activities = $admin_model->getSingleUserActivity($active_user);  
                        foreach($activities as $activity){
					?>
                        <tr>
                            <td><?php echo $n++; ?></td>
                            <td><?php echo $activity['UserAction'] ?></td>
                            <td><?php echo $activity['UserIp'] ?></td>
                            <td><?php echo $activity['DateCreated'] ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
                
                <tfoot>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>