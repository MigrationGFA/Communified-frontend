    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
      <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-start mb-0">Manage Course Section</h2>
                <div class="breadcrumb-wrapper">
                  <ol class="breadcrumb">
                  
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>gfa/add_course_section">+ Add Course Section </a>
                    </li>
                    
                    
                  </ol>
                </div>
              </div>
            </div>
          </div>
        <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">


  <div class="row match-height">
<!--   The investor name & title -->

<!--The industries the investor invests in -->

<!--The size of cheques the investor writes -->

<!--The investment stage -->

<!--Options to reach out -->
 <!-- Company Table Card -->
    <div class="col-lg-12 col-12 ">
        
      <div class="card card-company-table">
        <div class="card-body p-0">
            
          <div class="table-responsive">
              
               
            <table class="table tablemanager">
              <thead>
                   <tr>
                      <td>
            
              </td>
              <td>
            
              </td>
               <td>
            
              </td>
               <td>
                <div class="col-xl-6 col-md-6 col-12">
              <!--<div class="mb-1">-->
              <!--  <label class="form-label" for="basicInput">Search Jobs</label>-->
              <!--  <input type="text" name="searchJobs" class="form-control searchJobs" id="basicInput" placeholder="Enter search">-->
              <!--</div>-->
            </div>
              </td>
              </tr>
                <tr>
                     <th></th>
                <th>Course</th>
                 <th>Section Title</th>
                  <th>Total Lessons</th>
                  <th>Total QUiz</th>
                  <th>Date Posted</th>
                  
                 
                </tr>
              </thead>
              <tbody class="loadCorperate">
                 
              
                <?php
                
                
                
                $row = $this->gfa_model->getAllCourseSection();
                $n = 1;
				foreach($row as $rowArray){
				   
                ?> 
             
                <tr>
                    <td>
                    <div class="d-flex align-items-center">
                
               
               <a href="<?php echo base_url()?>gfa/edit_course_section/<?php echo $rowArray['id']; ?>" ><i data-feather="edit" class="text-success font-medium-1"></i>Edit</a> |
               <a href="<?php echo base_url()?>gfa/add_lesson_extra/<?php echo $rowArray['course_id']; ?>/<?php echo $rowArray['id']; ?>"><i data-feather="plus" class="text-success font-medium-1"></i>Add Lesson</a> | 
               <a href="<?php echo base_url()?>gfa/add_quiz_extra/<?php echo $rowArray['course_id']; ?>/<?php echo $rowArray['id']; ?>"><i data-feather="plus" class="text-success font-medium-1"></i>Add Quiz</a> | 
               <a href="#" alt="delete Course Category" class="deletebtn"><i data-feather="trash" class="text-success font-medium-1"></i>Delete<span style="display: none;"><?php echo $rowArray['id'] ?></span></a>  
              
                    </div>
                    </td>
                    <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $this->gfa_model->getCourseById($rowArray['course_id'])[0]['coursetitle'] ?></div>
                      </div>
                    </div>
                  </td>
                  </td>
                    <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <div class="fw-bolder"><?php echo $rowArray['title'] ?></div>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <span>Lesson[<?php echo $this->gfa_model->countLessonBySection($rowArray['id']) ?>]</span>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex align-items-center">
                      
                      <div>
                        <span>Quiz[<?php echo $this->gfa_model->countQuizBySection($rowArray['id']) ?>]</span>
                      </div>
                    </div>
                  </td>
                
                  <td class="text-nowrap">
                    <div class="d-flex flex-column">
                       <?php echo $rowArray['date']; ?>
                      
                    </div>
                  </td>
                   
     
                  
                </tr>

                
                <?php   }  ?>
               
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

              $(".copyLink").click(function(){
                // Select the input element with the string
                $(this).find('span').html('Copied');
var stringInput = $(this).find('p'); //$('.string-input');

// Get the value of the string
var stringToCopy = stringInput.text();

// Create a temporary input element to copy the string
var tempInput = $('<input>');

// Append the input element to the body
$('body').append(tempInput);

// Set the value of the input element to the string
tempInput.val(stringToCopy);

// Select the input element
tempInput.select();

// Copy the selected text to the clipboard
document.execCommand("copy");

// Remove the temporary input element
tempInput.remove();


              });

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
     url: "<?php echo base_url(); ?>gfa/deleteCourseSection",
   //error:function() {$(".saveAdminLogin").html('<i class="material-icons left">close</i>Error');},
   //beforeSend:function() {$(".saveAdminLogin").html('<i class="material-icons left">sync</i>Sending...');},
      success: function(data) {
        
    
    // $(".showDataDel").html(data);
    
    
    
    
    }
      
    });
    }
  
    
  return false;
}); 
                
                $(".searchJobs").keyup(function(){
                    // $(".locationChange").html("Need Location");
                      var industry = $('.searchJobs').serialize();
                             
                             $.ajax({
     data:industry,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/searchJobs",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
            });
            
             $(".service").change(function(){
                //  $(".locationChange").html("Service Location");
                      var service = $('.service').serialize();
                             
                             $.ajax({
     data:service,
     type: "POST",
     url: "<?php echo base_url(); ?>gfa/industry_corp_service",
	 error:function() {$(".loadCorperate").html('Error loading Data');},
	 beforeSend:function() {$(".loadCorperate").html('loading data...');},
     success: function(data) {
        
		
		$(".loadCorperate").html(data);
	
		}
                    
                });
                
               
               
                
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

   