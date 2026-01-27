      <!-- BEGIN: Content-->
      <?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
      ?>
      <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <!--<h2 class="content-header-title float-start mb-0">Account</h2>-->
                <!--<div class="breadcrumb-wrapper">-->
                <!--  <ol class="breadcrumb">-->
                <!--    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/dashboard"); ?>">Home</a>-->
                <!--    </li>-->
                <!--    <li class="breadcrumb-item"><a href="<?php echo base_url("gfa/manage_user"); ?>">Manage Users  </a>-->
                <!--    </li>-->
                    
                <!--  </ol>-->
                <!--</div>-->
              </div>
            </div>
          </div>
          <!--<div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">-->
          <!--  <div class="mb-1 breadcrumb-right">-->
          <!--    <div class="dropdown">-->
          <!--      <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>-->
          <!--      <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="app-todo.html"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="app-chat.html"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="app-email.html"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="app-calendar.html"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>-->
          <!--    </div>-->
          <!--  </div>-->
          <!--</div>-->
        </div>
        <div class="content-body"><div class="row">
  <div class="col-12">
     

    <!-- profile -->
    <div class="card">
      <!--<div class="card-header border-bottom">-->
      <!--  <h4 class="card-title">Add Questions</h4><br>-->
       
      <!--</div>-->
      
     
      
      <div class="card-body py-2 my-25">
       
        
        
        <!-- form -->
       
        
         <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Update Questions</h4>
        </div>
        <div class="card-body">
            <!--invoice-repeater -->
          <form class="founderForm"  method="post" action="#"  enctype="multipart/form-data" >

            
            <div data-repeater-list="invoice">
                <?php
                $answersArray = [
                    "ans_1" => "Answer 1",
                    "ans_2" => "Answer 2",
                    "ans_3" => "Answer 3",
                    "ans_4" => "Answer 4"
                ];
  $getRef =  $getQuizTitle[0]['ref_id'];
  $getQuizQuestionData = $this->gfa_model->getQuizQuestion($getRef);
  foreach($getQuizQuestionData as $getQuizQuestion){
    $getAnsJsonData = json_decode($getQuizQuestion['ans_json'], true);

  ?>
              <div data-repeater-item>
                <div class="row d-flex align-items-end">
                  <div class="col-md-12 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemname">Question</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemname"
                        aria-describedby="itemname"
                        placeholder="Question"
                        name="question[]"
                        value="<?php echo $getQuizQuestion['question'] ?>"
                        
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemcost">Answer 1</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemcost"
                        aria-describedby="itemcost"
                        placeholder="Answer 1"
                        name="ans_1[]"
                        value="<?php echo $getAnsJsonData['ans_1'] ?>"
                      />
                    </div>
                  </div>

                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Answer 2</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Answer 2"
                        name="ans_2[]"
                       value="<?php echo $getAnsJsonData['ans_2'] ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Answer 3</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Answer 3"
                        name="ans_3[]"
                        value="<?php echo $getAnsJsonData['ans_3'] ?>"
                      />
                    </div>
                  </div>
                  <div class="col-md-3 col-12">
                    <div class="mb-1">
                      <label class="form-label" for="itemquantity">Answer 4</label>
                      <input
                        type="text"
                        class="form-control"
                        id="itemquantity"
                        aria-describedby="itemquantity"
                        placeholder="Answer 4"
                        name="ans_4[]"
                        value="<?php echo $getAnsJsonData['ans_4'] ?>"
                      />
                    </div>
                    
                  

                  <!--<div class="col-md-2 col-12 mb-50">-->
                  <!--  <div class="mb-1">-->
                  <!--    <button class="btn btn-outline-danger text-nowrap px-1" data-repeater-delete type="button">-->
                  <!--      <i data-feather="x" class="me-25"></i>-->
                        
                  <!--    </button>-->
                  <!--  </div>-->
                  <!--</div>-->
                </div>
                <div class="col-md-3 col-12">
              <div class="mb-1">
                   <label class="form-label" for="staticprice">Set Answer</label>
              <select id="country" name="ans_id[]" class="form-select">

              <option value="<?php echo $getQuizQuestion['ans_id'] ?>"><?php echo $answersArray[$getQuizQuestion['ans_id']] ?></option>
                 <option value="ans_1">Answer 1</option>
                 <option value="ans_2">Answer 2</option>
                 <option value="ans_3">Answer 3</option>
                 <option value="ans_4">Answer 4</option>
                </select>
                </div>
            </div>
                <hr />
              </div>
            </div>
            <input type="hidden"  name="id[]" value="<?php echo $getQuizQuestion['qid'] ?>">
            
      <?php }  ?>      
             <div class="input_fields_wrap_ot"></div>
            <div class="row">
            <input type="hidden" class="ref_id" name="ref_id" value="<?php echo $getRef; ?>">
              <div class="col-12">
                <button class="btn btn-icon btn-primary mt-1 me-1 add_field_button_ot" type="button">
                  <i data-feather="plus" class="me-25"></i>
                  <span>Add more</span>
                </button>
                <button type="submit" class="btn btn-primary mt-1 me-1 saveFounders">Update</button>
              <!--<button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>-->
              <span class="displayActionF"></span>
              
              
              </div>
               <div class="col-12">
              
              
            </div>
            </div>
          </form>
        </div>
    
      </div>
    </div>
   
    
    
    <script>
            function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
    
      
}
$(function(){
    
    
$(".founderForm").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
        var ref_id = $('.ref_id').val();
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/editquesquizpro"); ?>",
	 error:function() {$(".displayActionF").html('Error')},
	 beforeSend:function() {$(".displayActionF").html('Saving profile...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".displayActionF").html(data);
    window.open("<?php echo base_url(); ?>gfa/manage_quiz/", "_self");
		
	
		//}
      }
    });
    return false;

 });
    
$(".fileInfox").submit(function(e) {
    //---------------^---------------
    e.preventDefault();
	//$(".saveFile3").html('Finish Uploading');
    var form = $(this)[0];
        var formData = new FormData(form);
      
    $.ajax({
     data:formData,
     type: "POST",
     url: "<?php echo base_url("gfa/profile_photo"); ?>",
	 error:function() {$(".savePhoto").html('Error')},
	 beforeSend:function() {$(".savePhoto").html('Saving Photo...')},
	 processData: false,
    contentType: false,
      success: function(data) {
        
		//if(data==1){
		$(".savePhoto").html(data);
		
	
		//}
      }
    });
    return false;

 });
 
 
});    
        </script>
       <script>  
         (function( $ ) {
             
             
           //Load table 

	var max_fields      = 10; //maximum input boxes allowed

    
	
	var wrapperx         = $(".input_fields_wrap_ot"); //Fields wrapper

  
    var x = 1; //initlal text box count	  
	 var add_button_ot      = $(".add_field_button_ot"); //Add button Class
 	$(add_button_ot).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

$(wrapperx).append('<div class="removeMoreot"><div data-repeater-item><div class="row d-flex align-items-end"><div class="col-md-12 col-12"><div class="mb-1"><label class="form-label" for="itemname">Question</label><input type="text" class="form-control" id="itemname" aria-describedby="itemname" placeholder="Question" name="question[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemcost">Answer 1</label><input type="text" class="form-control" id="itemcost" aria-describedby="itemcost" placeholder="Answer 1" name="ans_1[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Answer 2</label><input type="text" class="form-control" id="itemquantity" placeholder="Answer 2" name="ans_2[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Answer 3</label><input type="text" class="form-control" placeholder="Answer 3" name="ans_3[]" /></div></div><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="itemquantity">Answer 4</label><input type="text" class="form-control" placeholder="Answer 4" name="ans_4[]" /></div></div><input type="hidden"  name="id[]"><div class="col-md-3 col-12"><div class="mb-1"><label class="form-label" for="staticprice">Set Answer</label><select id="country" name="ans_id[]" class="form-select"><option value="ans_1">Answer 1</option><option value="ans_2">Answer 2</option><option value="ans_3">Answer 3</option><option value="ans_4">Answer 4</option></select></div></div><div class="col-md-2 col-12 mb-50"><div class="mb-1"><button class="btn btn-outline-danger text-nowrap px-1 removeFieldot" data-repeater-delete type="button"><i data-feather="x" class="me-25"></i>x</button></div></div></div><hr /></div></div>');
        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });  
             
             
         }).apply( this, [ jQuery ]);

		</script>
    <hr class="invoice-spacing" />
        
        <!--/ form -->
      </div>
    </div>
    
    
    
    <script>
      $(function(){
          
          $('inputXY').keyup(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileErrorExtDemo"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          $('select').change(function(){
              
           var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/checkProfileError"); ?>",
     error:function() {$(".showProfileError").html('Error');},
	 beforeSend:function() {$(".showProfileError").html('');},
      success: function(data) {
       //
		  
	   $(".showProfileError").html(data);  
	   
	  
	
       }
      
    });  
          });
          
          var last_valid_selection = null;

          $('.userRequest_activity').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);
              	$(".selectError").html('You can not select more 3 options');
            } else {
              last_valid_selection = $(this).val();
              $(".selectError").html('');
            }
          });
          
          	$(".saveBtn").click(function(e) {
    //---------------^---------------
    e.preventDefault();
    
	
	 var startupInfo = $('.startUpForm').serialize();
	 $.ajax({
     data:startupInfo,
     type: "POST",
     url: "<?php echo base_url("gfa/startupProfileproExt"); ?>",
     error:function() {$(".displayAction").html('Error saving data');},
	 beforeSend:function() {$(".saveBtn").html('Saving Profile...');},
      success: function(data) {
       //
		  $(".displayAction").html("Successfully Saved!");  
	   $(".saveBtn").html('Saved'); 
	   //$(".displayDataRoom").show();
	   
	  
	
       }
      
    });
	 
  
  });
          
      });  
    </script>

  </div>
</div>

        </div>
      </div>
      

  <!-- Add New Customer Sidebar -->
  
  <!-- /Add New Customer Sidebar -->
</section>

        </div>
      </div>
    </div>
    <!-- END: Content-->



   
  
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

  