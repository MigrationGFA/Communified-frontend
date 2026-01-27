<div class="content-wrapper">

 <!-- Content Header (Page header) -->
    <!--<section class="content-header">-->
    <!--  <h1>-->
    <!--    Startup-Investor-->
    <!--  </h1>-->
    <!--  <ol class="breadcrumb">-->
    <!--    <li><button type="submit" class="btn btn-default pull-left closeBtnX" style="display:none;">X Close Form Displayed</button></li>-->
       
    <!--    <li class="active"></li>-->
    <!--  </ol>-->
    <!--</section>-->

    <!-- Main content -->
    <section class="content">
     <div class="row displayForm">
        <div class="col-md-12">

          <div class="box box-danger">
            <!--<div class="box-header">-->
            <!--  <h3 class="box-title">Start Ups CSV Upload</h3>-->
            <!--</div>-->
            <!--<div class="box-body">-->
              <!-- Date dd/mm/yyyy -->
            <!--  <form id="startUpsFile" action="" method="post" enctype="multipart/form-data">-->
            <!--  <div class="input-group input-group-sm">-->
            <!--    <input type="file" class="form-control" name="file[]">-->
            <!--        <span class="input-group-btn">-->
            <!--          <button type="submit" class="btn btn-info btn-flat">Upload</button>-->
            <!--        </span>-->
            <!--  </div>-->
            <!--  <span class="saveFile"></span>-->
            <!--  </form>-->
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
             
              <!-- /.form group -->

            <!--</div>-->
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Investor Agreement </h3>
            </div>
            <?php $rowArray =   $this->admin_model->getInvestorsConnectionById($id) ?>
            <div class="box-body">
              <!-- Color Picker -->
              <form role="form" id="sendCreditForm" action="" method="post" accept-encoding="utf-8">
              <div class="box-body">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" disabled value="<?php echo $this->gfa_model->getInvestorDetails($rowArray[0]['email'])[0]['Contact_Name'] ?>">
                </div>
                <div class="form-group">
                  <input type="text" name="Short_Desc" class="form-control" disabled value="<?php echo $this->admin_model->getAllStartUpNByEmail($rowArray[0]['email_startup'])[0]['Startup_Company_Name'] ?>">
                </div>
                
               
                <div class="form-group">
                  <input type="text" name="Cohort_Program" class="form-control" disabled value="<?php echo $rowArray[0]['invest_type'] ; ?>">
                </div>
                    <input type="hidden" name="connect_id"  value="<?php echo $id ; ?>">
                     <input type="hidden" name="edit_id"  value="<?php echo $this->admin_model->getInvestorsAgreementById($id)[0]['id']; ?>">
                    <input type="hidden" name="email"  value="<?php echo $rowArray[0]['email'] ; ?>">
                    <input type="hidden" name="admin"  value="<?php echo $this->encrypt->decode($this->session->userdata('email')) ; ?>">
              
                <div class="form-group">
                  <label for="inputPassword3" class="control-label">Agreement Info</label>

                  <div class="col-sm-12">
                     <textarea id="editor12" name="content" rows="10" cols="147">
                      <?php echo $this->admin_model->getInvestorsAgreementById($id)[0]['content']; ?>                 
                    </textarea>
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary creditBtn">Submit</button>
              </div>
             <span class="saveCohortForm"></span>
            </form>
              <!-- /.form group -->

              <!-- Color Picker -->
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
<script>
                     $(function(){
                         
                         //Investors Form Upload

 $("#sendCreditForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
    var CreditForm = $('#sendCreditForm').serialize();
      
    $.ajax({
     data:CreditForm,
     type: "POST",
     url: "<?php echo base_url(); ?>admin/sendinvagreementpro",
	 error:function() {$(".saveCohortForm").html('Error')},
	 beforeSend:function() {$(".saveCohortForm").html('Sending agreement...')},
      success: function(data) {
        
		//if(data==1){
		$(".saveCohortForm").html('Investment Agreement Sent');
         $('.creditBtn').prop("disabled", true );
      }
    });
    //return false;

  });
                         
                         //Fetch County by Region 
                         
                         
 
                       
                         
                         
          
                         
                         
                         
                        	
	
	//Initialize Select2 Elements
    $(".select2").select2();

                     });
                     
                  </script>
        </div>
        <!-- /.col (left) -->
      
        <!-- /.col (right) -->
      </div>
      <div class="row">
        <div class="col-md-3">
		<?php 
				// 	$getSub = $this->admin_model->getSub($id);
				// 	$ref_request = $this->admin_model->getStartUp($getSub[0]['email']); 
				// 	$profile_request = $this->admin_model->getProfile($getSub[0]['email']);  
				// 	$getFile = $this->admin_model->getFile($getSub[0]['email']);
				// 	$getFund = $this->admin_model->getFund($getSub[0]['email']);
				// 	$getBusiness = $this->admin_model->getBusiness($getSub[0]['email']);
		
		?>
          <!-- Profile Image -->
          
          <!-- /.box -->

          <!-- About Me Box -->
          
          <!-- /.box -->
        </div>
        <!-- /.col -->
       
       
      
     
      <!-- /.row -->

    </section>
    <!-- /.content -->













