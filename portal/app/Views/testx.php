
		<section class="body">

<div  class="submitcvb editClass"></div>

			<!-- start: header -->

			

            <?php include("include/abs_header.php")?>

			<!-- end: header -->



			<div class="inner-wrapper">

				<!-- start: sidebar -->

				

                

                 <?php include("include/abs_sidebar.php")?>

				<!-- end: sidebar -->



				<section role="main" class="content-body">

					<header class="page-header">

						<h2><i class="fa fa-pencil"></i>

                        <?php if(isset($_GET['msg']) && ($_GET['msg']==3 || $_GET['msg']==4) && isset($_GET['ref'])){ 

                            echo 'Travel Expenses Request';

							

						}else{

						 echo 'Travel Request';	

						}

                            ?>

                            </h2>

					

						<div class="right-wrapper pull-right">

							<ol class="breadcrumbs">

								<li>

									<a href="index.php">

										<i class="fa fa-home"></i>

									</a>

								</li>

								

							</ol>

					

							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>

						</div>

					</header>



					<!-- start: page -->

						 <?php 

						

						if(isset($_GET['msg']) && $_GET['msg']==4){ ?>

                        <div class="alert alert-success">

										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

										<strong>Success!</strong> Your Travel Advance expenses request submitted.<a href="#" class="alert-link">  Wait for approval</a>.

									</div>

                                     <?php } ?>

                        <?php 

						

						if(isset($_GET['msg']) && $_GET['msg']==3){ ?>

                        <div class="alert alert-success">

										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

										<strong>Success!</strong> Your Travel request submitted.<a href="#" class="alert-link">  Wait for approval</a>.

									</div>

                                     <?php } ?>

                                    <?php if(isset($_GET['msg']) && $_GET['msg']==1){ ?>

                                    <div class="alert alert-warning">

										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

										<strong>Error!</strong> Departure and arrival option(Airport)<a href="#" class="alert-link"> can not be same</a>.

									</div>

                                    <?php } ?>
                                    <?php if(isset($_GET['msg']) && $_GET['msg']==2){ ?>

                                    <div class="alert alert-warning">

										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

										<strong>Error!</strong> Date selected<a href="#" class="alert-link"> is in the past or not current month</a>.

									</div>

                                    <?php } ?>
                                    <?php if(isset($_GET['msg']) && $_GET['msg']==5){ ?>

                                    <div class="alert alert-warning">

										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

										<strong>Error!</strong> Server<a href="#" class="alert-link">  or database problem</a>.

									</div>

                                    <?php } ?>

						<div class="row">

							<div class="col-xs-12">

                            
								
								<section class="panel">

									<header class="panel-heading">
                                    
											<?php if(isset($_GET['ref'])){echo "<strong> TRAVEL ID : ".$_GET['ref']."</strong>";}else{ echo ''; } ?>
										<div class="panel-actions">
											
											<a href="#" class="fa fa-caret-down"></a>

											<a href="#" class="fa fa-times"></a>

										</div>

						

										

									</header>

                                    <?php if(isset($_GET['msg']) && ($_GET['msg']==3 || $_GET['msg']==9)  && isset($_GET['ref'])){
										
										$ref = $_GET['ref'];

                                         $travel_sql = mysql_query("select * from travel where ref='$ref'");

											$count_travel = mysql_num_rows($travel_sql); 

														
									
											$array_travel = mysql_fetch_assoc($travel_sql);
										
										
										 ?>

                                    <div class="panel-body">

										
										
                                        

                                        

											<form method="post" action="exec/travelamount.php" class="form-horizontal form-bordered">

                                             <input type="hidden" name="userID" value="<?php echo $_SESSION['userID'];?>">

                                         <input type="hidden" name="logintype" value="<?php echo $_SESSION['logintype'];?>">

                                            <input type="hidden" name="ref" value="<?php echo $_GET['ref'];?>">

	                                     <!--  <h3>Departure</h3> -->

                                          	<div class="form-group">

													<label class="col-md-3 control-label" for="profileAddress">Currency Type</label>
													<?php if($array_travel['mission_cat'] =='local mission'){   ?>
													 
													<div class="col-md-1">

														<div class="radio">

														<label>

															<input name="currency" id="optionsRadios1x" value="&#8358;" checked   type="radio">

															Naira

														</label>

													</div>

                                                    </div>
                                                    
                                                    <?php  }else{   ?>

													<div class="col-md-1">

														<div class="radio">

														<label>

															<input name="currency" id="optionsRadios1x" value="&dollar;" <?php if($array_travel['mission_cat']!='international mission'){ echo 'disabled';}else{ echo ''; } ?>  type="radio">

															Dollars

														</label>

													</div>

                                                    </div>

													<div class="col-md-1">

														<div class="radio">

														<label>

															<input name="currency" id="optionsRadios1x" value="&euro;" <?php if($array_travel['mission_cat']!='international mission'){ echo 'disabled';}else{ echo ''; } ?>  type="radio">

															Euros

														</label>

													</div>

                                                    </div>
                                                    
                                                    <div class="col-md-1">

														<div class="radio">

														<label>

															<input name="currency" id="optionsRadios1x" value="&pound;" <?php if($array_travel['mission_cat']!='international mission'){ echo 'disabled';}else{ echo ''; } ?> type="radio">

															Pounds

														</label>

													</div>

                                                    </div>
                                                    
                                                    <?php }   ?>

												</div>
													
                                          <?php

										 

										  				

														$json_departure = $array_travel['departure'];

														$decoded_departure = json_decode($json_departure, true);

														$count_deparure=  count($decoded_departure);

														//Arrival

														$json_arrival = $array_travel['arrival'];

														$decoded_arrival = json_decode($json_arrival, true);

														$count_arrival=  count($decoded_arrival);

														for($i=0; $i<$count_deparure; $i++){

															

														?>

                                    

                              						 <div class="form-group" style="display:none">

													<label class="col-md-3 control-label" for="profileFirstName">From</label>

													<div class="col-md-2">

														<?php echo $decoded_departure[$i]['place'] ?>

                                                        

													</div>

                                                    <div class="col-md-1">

														<?php echo $decoded_departure[$i]['means']; ?>

													</div>

												

												

                                                <div class="col-md-2">

														<?php echo date("d-m-Y",strtotime($decoded_departure[$i]['date']))." ".$decoded_departure[$i]['time']; ?>

													</div>

                                                    <div class="col-md-2">

														<?php if($decoded_departure[$i]['apprv']=='accomodation'){echo "Accomodation[Yes]"; }else{echo "Accomodation[No]";}?>

													</div>

                                                    

                                                    <div class="col-md-2">

														<!--<input type="text" class="form-control amount" name="location" required id="amount" autocomplete="off" placeholder="Amount" onKeyPress="return isNumber(event)">-->

														

													</div>

												</div>

                                                <?php }  ?>

                                                <!--<h3>Arrival</h3>-->

                                          

                                          <?php

										 

										  

														//Arrival

														$json_arrival = $array_travel['arrival'];

														$decoded_arrival = json_decode($json_arrival, true);

														$count_arrival=  count($decoded_arrival);

														//for($i=0; $i<$count_arrival; $i++){

															

														?>

                                    

                              						 <div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName">Total Amount</label>
 
													

                                                    

                                                    <div class="col-md-6">

														<input type="text" class="form-control input-lg mb-md amount amountF"  name="total"  required id="amount" autocomplete="off"  placeholder="Amount" onKeyPress="return isNumber(event)"> 

														

													</div>

												</div>

                                                <?php //}  ?>

                                                <div class="form-group" style="display:none">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													
												

                                                    <div class="col-md-2">

														

														<h4>Total Amount</h4>	

														

													</div>

                                                    <div class="col-md-2">

														<input type="text" class="form-control" readonly name="totalF" required id="totalAmount" placeholder="Total Amount" >
                                                        

														

													</div>

												</div>
                                                                                                        

                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Company </label>
													<div class="col-md-6">
														<select class="form-control input-lg mb-md finType" id="ftype" name="ftype" required>
														<option>Option</option>
                                                        
													<?php	$absence_sql = mysql_query("select * from finanancial_authority group by ftype asc");
		while($arry_absence = mysql_fetch_assoc($absence_sql)){
					
	?>
    
		<option value="<?php echo $arry_absence['ftype']; ?>"><?php echo ucfirst($arry_absence['ftype']); ?></option>	
        
        <?php } ?>										
        
        
        
        </select>
													</div>
												</div>
                                                
                                                	
                                                
                                                	<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Commitment Approval </label>
													<div class="col-md-6">
														<select class="form-control input-lg mb-md" id="manager" name="manager" required>
														<option>Option</option>
                                                        
													
        
                </select>
													</div>
												</div>

                                                <div class="center">

												<button type="submit" id="shadow-success" name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default">Apply For Fund</button>

                                                </div>

												</form>

												

                                                



                                                

											

										

									</div>

                                    

                                    <?php  }else {  ?>

									<div class="panel-body">

										

                                        <div class="form-body">

                                        

											<form method="post" action="exec/travel.php" class="form-horizontal form-bordered">

	                                      <input type="hidden" name="userID" value="<?php echo $_SESSION['userID'];?>">

                                         <input type="hidden" name="logintype" value="<?php echo $_SESSION['logintype'];?>">

                                         <input type="hidden" name="ref" value="<?php echo time();?>">
                                         
												 <div class="form-group">

													<label class="col-md-3 control-label" for="profileAddress"></label>
                                                    
                                                    <div class="col-md-4">

														<div class="radio">

														<label>

															<!--<input name="optionsRadios" id="optionsRadios1" value="option2"  type="radio">-->

                                                            <a   class="mb-xs mt-xs mr-xs btn btn-default bookStaff">For Someone</a>

															<a   class="mb-xs mt-xs mr-xs btn btn-default closeStaff" style="display:none">x</a>

														</label>

													</div>

                                                    </div>

													<div class="col-md-4">

														<div class="radio">

														<label>

															<!--<input name="optionsRadios" id="optionsRadios1" value="option1" checked type="radio">-->

															

														</label>

													</div>

                                                    </div>

													

													

												</div>

                                                <div class="forAStaff" style="display:none;">

												<div class="form-group">

													<label class="col-md-3 control-label" for="profileAddress">Department</label>

													<div class="col-md-6">

														<select class="form-control input-lg mb-md" id="dept" name="dept">

														<option>Option</option>

													<?php	$dept_sql = mysql_query("select * from department group by name asc");

		while($arry_dept = mysql_fetch_assoc($dept_sql)){

	?>

		<option value="<?php echo $arry_dept['name']; ?>"><?php echo ucfirst($arry_dept['name']); ?></option>	

        <?php } ?>										
	
    <?php  $person_sql = mysql_query("select * from personal_info where userID='$pendingleave_userID'");
														//$count_pendingleave = mysql_num_rows($pendingLeave_sql);
														
														 $array_person = mysql_fetch_assoc($person_sql);
														// echo  ucfirst($arry_person['surname']).' '.ucfirst($arry_person['othername']);
														if($array_person['designation']=='secretary' || $array_person['designation']=='SECRETARY'){
														  ?>
        <option value="MD"><?php echo "MD" ?></option>	
        
        <?php }  ?>

        </select>

													</div>

												</div>
                                                

												<div class="form-group">

													<label class="col-md-3 control-label" for="profileCompany">Name</label>

													<div class="col-md-6">

														<select class="form-control input-lg mb-md" name="nameoftraveler" id="name">

														<option>Option</option>

														

													</select>

													</div>

												</div>

                                                </div>
                                                
                                                <script>

                $(function(){

					 
					 

					 $("form .bookStaff").click(function(){

						

						$(".forAStaff").show();

						 $(".closeStaff").show();

					 });

					 $("form .closeStaff").click(function(){

						

						$(".forAStaff").hide();

						$(this).hide();

						 

					 });

					  });

                </script>
                                                <div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Travel Type</label>
													<div class="col-md-6">
<select class="form-control input-lg mb-md" id="travel_type" name="absence_type" required>
														<option>Option</option>
<option>Training</option>
<option>Conference</option>
<option>Mission</option>
<option>Others</option>
         
        </select>
													</div>
												</div>
                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileBio">Purpose of Travel</label>

													<div class="col-md-6">

														<textarea class="form-control summernote details" name="details"  data-plugin-summernote data-plugin-options='{ "height": 120, "codemirror": { "theme": "ambiance" } }' rows="3"></textarea>

                                                        <!--<textarea class="form-control" name="details"  rows="3"></textarea>-->

                                                        

													</div>

												</div>


                                          <div class="form-group">

													<label class="col-md-3 control-label" for="profileAddress">Mission Requestor </label>

													<div class="col-md-4">

														<div class="radio">

														<label>

															<input name="mission_req" id="optionsRadios1" value="staff" checked type="radio">

															Staff

														</label>

													</div>

                                                    </div>

													<div class="col-md-4">

														<div class="radio">

														<label>

															<input name="mission_req" id="optionsRadios1" value="sponsored traveler"  type="radio">

															Sponsored Traveler

														</label>

													</div>

                                                    </div>

													

												</div>

                                                

                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileAddress">Mission Category</label>

													<div class="col-md-4">

														<div class="radio">

														<label>

															<input name="mission_cat" id="optionsRadios1234" value="local mission" checked type="radio">

															Local Mission

														</label>

													</div>

                                                    </div>

													<div class="col-md-4">

														<div class="radio">

														<label>

															<input name="mission_cat" id="optionsRadios1234" value="international mission"  type="radio">

															International Mission

														</label>

													</div>

                                                    </div>

													

												</div>

                                                <?php  $person_sql = mysql_query("select * from personal_info where userID='".$_SESSION['userID']."'");

														

														 $arry_person = mysql_fetch_assoc($person_sql);

														 

														  ?>

                                           		<div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													<div class="col-md-4">

														<input type="text" class="form-control" name="nameofrequestor" required id="profileFirstName" value="<?php echo  ucfirst($arry_person['surname']).' '.ucfirst($arry_person['othername']); ?>" placeholder="Name of Requestor">

                                                        

													</div>

                                                    <div class="col-md-4">

														<input type="text" class="form-control" name="accountno" required id="profileLastName" placeholder="Cost Account" value="3453256" onKeyPress="return isNumber2(event)" >

													</div>

												</div>

                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													<div class="col-md-4">

														<input type="text" class="form-control" name="department" required id="profileFirstName" placeholder="Department" value="<?php echo  $arry_person['department']; ?>">

                                                        

													</div>

                                                    <div class="col-md-4">

														<input type="text" class="form-control" name="location"  id="profileLastName" placeholder="Phone No">

													</div>

												</div>

                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName">Other Travelers</label>

													<div class="col-md-4">

														<input type="text" class="form-control" name="name[]"  id="profileFirstName" placeholder="Name">

                                                        

													</div>

                                                    <div class="col-md-2">

														<input type="text" class="form-control" name="phoneno[]" id="profileLastName" value="" placeholder="Phone Number" onKeyPress="return isNumber(event)">

													</div>
                                                    
                                                    <div class="col-md-2">

														<input type="text" class="form-control" name="email[]"  id="profileLastName" value="" placeholder="Email Address">

													</div>

												</div>

                                                <div class="input_fields_wrap_ot"></div>
												<div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													<div class="col-md-2">

														

                                                        

													</div>

                                                    <div class="col-md-2">

														

													</div>

												

												

                                                <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

															

														

													</div>

                                                    <div class="col-md-1">

														<button type="button"  name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default add_field_button_ot">Add More</button>

														

													</div>

												</div>
                                    
												<div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													<div class="col-md-3">

														<input type="checkbox" name="return"  id="returnTicket" value="return" > Return flight Schedule

														

													</div>
                                                    
                                                    <div class="col-md-1">

														
													</div>

                                                    <div class="col-md-1">

														

													</div>

												

												

                                                <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

															

														

													</div>

                                                    

												</div>
                                                
	
                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName">One Way</label>

													<div class="col-md-2">

														<!--<input type="text" class="form-control" name="place[]" required id="profileFirstName" placeholder="Place">-->

                                                        <select class="form-control populate getpopulate" name="place[]">
					
                                                     

													

														

													</select>

                                                        

													</div>
                                                    <div class="col-md-2">

														<!--<input type="text" class="form-control" name="aplace[]" required id="profileFirstName" placeholder="Place"> -->

                                                        <select class="form-control populate1 getpopulate1" name="aplace[]">
													
                                                     	
													

														

													</select>

													</div>

                                                    <div class="col-md-1">

														<input type="text" class="form-control" name="means[]" required id="profileLastName" placeholder="Airline">

													</div>

												

												

                                                <div class="col-md-1">

														<input type="text" class="form-control" name="date[]"  data-plugin-datepicker="" data-date-format="dd-mm-yyyy" required id="datepickerF1" placeholder="Date">

													</div>

                                                    <div class="col-md-1">

														<input type="text" class="form-control" style="width:5em;max-width:5em; padding:5px" name="time[]" data-plugin-timepicker  required id="profileLastName" value="7:15 AM" placeholder="Time">

													</div>

                                                    <div class="col-md-1">

														

															<input type="checkbox" name="apprv[]" id="optionsRadios1" value="accomodation" ><br>Accommodation

														

													</div>

                                                    

												</div>

                                                

                                                
                                                <!-- Return travel  -->
                                                <div id='showReturn' style="display:none">
                                                
												<div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName">Return</label>

													<div class="col-md-2">

														<input type="text" class="form-control loadpopulate1"  name="place[]"  id="profileFirstName" placeholder="Place">

                                                        
                                                        

													</div>
                                                    <div class="col-md-2">

														<input type="text" class="form-control loadpopulate"  name="aplace[]"  id="profileFirstName" placeholder="Place"> 

                                                        
													</div>

                                                    <div class="col-md-1">

														<input type="text" class="form-control" name="means[]"  id="profileLastName" placeholder="Airline">

													</div>

												

												

                                                <div class="col-md-1">

														<input type="text" class="form-control" name="date[]"  data-plugin-datepicker="" data-date-format="dd-mm-yyyy"  id="datepickerF1" placeholder="Date">

													</div>

                                                    <div class="col-md-1">

														<input type="text" class="form-control" style="width:5em;max-width:5em; padding:5px" name="time[]" data-plugin-timepicker   id="profileLastName" value="7:15 AM" placeholder="Time">

													</div>

                                                    <div class="col-md-1">

														

															<input type="checkbox" name="apprv[]" id="optionsRadios1" value="accomodation" ><br>Accommodation

														

													</div>

                                                    

												</div>
                                                
											
                                            	</div>
                                                
                                                 <!-- End return travel -->

                                              <div class="input_fields_wrap" ></div>
                                               

                                                
												
                                                <div class="form-group">

													<label class="col-md-3 control-label" for="profileFirstName"></label>

													<div class="col-md-2">

														

                                                        

													</div>

                                                    <div class="col-md-2">

														

													</div>

												

												

                                                <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

													</div>

                                                    <div class="col-md-1">

														

															

														

													</div>

                                                    <div class="col-md-1">

														<button type="button"  name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default add_field_button">Add More</button>

														

													</div>

												</div>
                                                
                                                <div class="center">

												<button type="submit" id="shadow-success" name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default">Apply</button>

                                                </div>

												</form>

												

                                                



                                                

											</div>

										

									</div>

                                    

                                    <?php  }  ?>

								</section>

							</div>

						</div>

                        



						

							<div class="row">

						

						<div class="col-md-">

							<div class="tabs tabs-dark">

								<ul class="nav nav-tabs">

									<li class="active">

										<a href="#popular6" data-toggle="tab"><i class="fa fa-star"></i> Pending</a>

									</li>

									<li>

										<a href="#recent6" data-toggle="tab">Approved</a>

									</li>

                                    

								</ul>

								<div class="tab-content">

									<div id="popular6" class="tab-pane active">

										<table class="table table-no-more table-bordered table-striped mb-none" id="datatable-default">

									<thead>

										<tr>

                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                           	Applied date

                                                        </th>
                                                        
                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                           	Booked by

                                                        </th>
                                                        
                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                           	Other travelers

                                                        </th>


                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                            Departure



                                                        </th>

                                                        <th class="highlight" colspan=3>

                                                            <span class="success"></span>

                                                         Arrival



                                                        </th>

                                                        

                                                       


                                                        

                                                    </tr>       

									</thead>

									<tbody>

										<?php

                                                    	$travel_sql = mysql_query("select * from travel where 

														userID='".$_SESSION['userID']."' and (applystatus=0 or applystatus=2) and delstatus=1");

														$count_travel = mysql_num_rows($travel_sql);

														

														while($array_travel = mysql_fetch_assoc($travel_sql)){

															$travel_id = $array_travel['id'];

															$travel_userID = $array_travel['userID'];

															$travel_ref = $array_travel['ref'];
															$travel_book_by = $array_travel['book_by'];

															//Departure 

															$json_departure = $array_travel['departure'];

															$decoded_departure = json_decode($json_departure, true);

															$count_deparure=  count($decoded_departure);														

															//Arrival

														$json_arrival = $array_travel['arrival'];

														$decoded_arrival = json_decode($json_arrival, true);

														$count_arrival=  count($decoded_arrival);

														//Other travelers
														$json_other_traveler = $array_travel['other_travelers'];

														$decoded_other_traveler = json_decode($json_other_traveler, true);

														$count_other_traveler =  count($decoded_other_traveler);


														//}

													?>      



													<tr>

                                                        <td>

                                                            <span class="success"></span>

                                                          	TRAVEL ID: <?php echo "<strong>".$array_travel['ref']."</strong>".'<br>'.date("jS F, Y", strtotime($array_travel['time']));?>

                                                        </td>
                                                        
                                                        <td>

                                                            <span class="success"></span>
															<?php  $person_sql = mysql_query("select * from personal_info where userID='$travel_book_by'");

														
														 $arry_person = mysql_fetch_assoc($person_sql);

														 echo  ucfirst($arry_person['surname']).' '.ucfirst($arry_person['othername']);

														  ?>
                                                          	

                                                        </td>
                                                        
                                                        <td>

                                                            <span class="success"></span>

                                                            

                                                            <?php for($i=0; $i<$count_other_traveler; $i++){ ;?>

																<span class="cm-strong">Name: </span><?php echo $decoded_other_traveler[$i]['name'] ?><br>

                                                                <span class="cm-strong">Phone No: </span><?php echo $decoded_other_traveler[$i]['phoneno'] ?><br>

                                                                

                                                                <span class="cm-strong">Email: </span><?php echo $decoded_other_traveler[$i]['email']?><br>

                                                             <hr>

                                                                <?php }  ?>

                                                        </td>

                                                        <td>

                                                            <span class="success"></span>

                                                            

                                                            <?php for($i=0; $i<$count_deparure; $i++){ ;?>

																<span class="cm-strong">Place: </span><?php echo $decoded_departure[$i]['place'] ?><br>

                                                                <span class="cm-strong">Means: </span><?php echo $decoded_departure[$i]['means'] ?><br>

                                                                <span class="cm-strong">Date/Time: </span><?php echo date("d-m-Y",strtotime($decoded_departure[$i]['date']))." ".$decoded_departure[$i]['time']; ?><br>

                                                                <span class="cm-strong">Accomodation: </span><?php if($decoded_departure[$i]['apprv']=='accomodation'){echo "YES"; }else{echo "NO";}?><br>

                                                             

                                                                <?php }  ?>

                                                        </td>

                                                        <td>

                                                            <span class="success"></span>

                                                          <?php for($i=0; $i<$count_arrival; $i++){ ;?>

																<span class="cm-strong">Place: </span><?php echo $decoded_arrival[$i]['place'] ?><br>

                                                                <span class="cm-strong">Means: </span><?php echo $decoded_arrival[$i]['means'] ?><br>

                                                                <span class="cm-strong">Date/Time: </span><?php echo date("d-m-Y",strtotime($decoded_arrival[$i]['date']))." ".$decoded_arrival[$i]['time']; ?><br>

                                                                <span class="cm-strong">Accomodation: </span><?php if($decoded_arrival[$i]['apprv']=='accomodation'){echo "YES"; }else{echo "NO";}?><br>

                                                             

                                                                <?php }  ?>

                                                        </td>

                                                        

                                                       

                                                       

<td>

<a class="delete" data-toggle="tooltip" data-placement="top" title="View Full Details" href="print/advtravel.php?msg=3&ref=<?php echo $travel_ref;?>"><i class="fa fa-search"></i></a> 

<a class="delete" data-toggle="tooltip" data-placement="top" title="Delete" href="delete/del-travel-x.php?lEaviD=<?php echo"$travel_id";?>"><i class="fa fa-trash-o text-danger"></i></a>

</td>

                                                        

                                                    </tr>                                                  

                                                   	<?php }?>

									</tbody>

								</table>

										

									</div>

									<div id="recent6" class="tab-pane">

										<table class="table table-no-more table-bordered table-striped mb-none" id="datatable-default">

									<thead>

										<tr>		
                                        
                                        
                                       			 


                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                           	ID/Applied date

                                                        </th>

                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                            Departure



                                                        </th>

                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                         Arrival



                                                        </th>

                                                        <th class="highlight">

                                                            <span class="success"></span>

                                                            Amount



                                                        </th>

                                                       

                                                      

<th class="highlight">

                                                          Fund

                                                        </th>
                                                        <th class="highlight">
															View
                                                          <!--Claim/Refund -->

                                                        </th>

                                                        

                                                    </tr>       

									</thead>

									<tbody>

										<?php

                                                    	$travel_sql = mysql_query("select * from travel where 

														userID='".$_SESSION['userID']."' and applystatus=1  and delstatus=1 order by id desc");

														$count_travel = mysql_num_rows($travel_sql);

														

														while($array_travel = mysql_fetch_assoc($travel_sql)){

															$travel_id = $array_travel['id'];

															$travel_userID = $array_travel['userID'];

															$travel_ref = $array_travel['ref'];

															//Departure 

															$json_departure = $array_travel['departure'];

															$decoded_departure = json_decode($json_departure, true);

															$count_deparure=  count($decoded_departure);														

															//Arrival

														$json_arrival = $array_travel['arrival'];

														$decoded_arrival = json_decode($json_arrival, true);

														$count_arrival=  count($decoded_arrival);

														

														//}

													?>      



													<tr>

                                                        <td>

                                                            <span class="success"></span>

                                                          	TRAVEL ID: <?php echo "<strong>".$array_travel['ref']."</strong>".'<br>'.date("jS F, Y", strtotime($array_travel['time']));?>

                                                        </td>

                                                        <td>

                                                            <span class="success"></span>

                                                            

                                                            <?php for($i=0; $i<$count_deparure; $i++){ ;?>

																<span class="cm-strong">Place: </span><?php echo $decoded_departure[$i]['place'] ?><br>

                                                                <span class="cm-strong">Means: </span><?php echo $decoded_departure[$i]['means'] ?><br>

                                                                <span class="cm-strong">Date/Time: </span><?php echo date("d-m-Y",strtotime($decoded_departure[$i]['date']))." ".$decoded_departure[$i]['time']; ?><br>

                                                                <span class="cm-strong">Accomodation: </span><?php if($decoded_departure[$i]['apprv']=='accomodation'){echo "YES"; }else{echo "NO";}?><br>

                                                             

                                                                <?php }  ?>

                                                        </td>

                                                        <td>

                                                            <span class="success"></span>

                                                          <?php for($i=0; $i<$count_arrival; $i++){ ;?>

																<span class="cm-strong">Place: </span><?php echo $decoded_arrival[$i]['place'] ?><br>

                                                                <span class="cm-strong">Means: </span><?php echo $decoded_arrival[$i]['means'] ?><br>

                                                                <span class="cm-strong">Date/Time: </span><?php echo date("d-m-Y",strtotime($decoded_arrival[$i]['date']))." ".$decoded_arrival[$i]['time']; ?><br>

                                                                <span class="cm-strong">Accomodation: </span><?php if($decoded_arrival[$i]['apprv']=='accomodation'){echo "YES"; }else{echo "NO";}?><br>

                                                             

                                                                <?php }  ?>

                                                        </td>

                                                        <td>

                                                            <span class="success"></span>

                                                            <?php

															$travel_amount_sql = mysql_query("select SUM(amount) from travel_amount where ref='$travel_ref'");

																											

														$array_travel_amount = mysql_fetch_assoc($travel_amount_sql);

														echo '&#8358'.' '.$array_travel_amount['SUM(amount)'];

															?>
															<a class="delete" data-toggle="tooltip" data-placement="top" title="Add Amount" href="addtravel.php?msg=3&ref=<?php echo $travel_ref;?>">(+)</a>
                                                        </td>

                                                       

 <td>

<?php
															$user = $_SESSION['userID'];
															$travel_claim = mysql_query("select * from payment_process where ref='$travel_ref'");
															$array_claim = mysql_fetch_assoc($travel_claim);
															
															if($array_claim['pay_manager_id']==0 && $array_claim['com_manager_id'] !=0){
														?>
                                                      
<a href="addtravelp.php?msg=3&ref=<?php echo $travel_ref;?>" id="shadow-success" class="mb-xs mt-xs mr-xs btn btn-default">Apply for fund</a>

<?php }else{  ?>
																
																<span class="cm-strong"><b>Approved</b> </span>
                                                       <?php }  ?>



</td>                                                      

<td>

<?php if($array_travel_amount['SUM(amount)']==''){ ?>

<!--<a class="delete" data-toggle="tooltip" data-placement="top" title="Add Amount" href="addtravel.php?msg=3&ref=<?php echo $travel_ref;?>"><i class="fa fa-money text-dark"></i></a>-->

<?php }else{  ?>
<?php
															$user = $_SESSION['userID'];
															$travel_claim = mysql_query("select * from travel_claim where ref='$travel_ref'");
															$array_claim = mysql_fetch_assoc($travel_claim);
															
															if($array_claim['applystatus']==0){
														?>
<!--<a href="addclaim.php?adva=<?php echo $travel_ref;?>" id="shadow-success" class="mb-xs mt-xs mr-xs btn btn-default">Apply for Refund</a>-->

<?php }else{  ?>
																<span class="cm-strong"><b>Status:</b> </span>Approved<br>
																<span class="cm-strong"><b>Total Amount:</b> </span><?php echo '&#8358'.' '.$array_claim['amount']; ?><br>

                                                                <span class="cm-strong"><b>Amount Claim:</b> </span><?php echo '&#8358'.' '.$array_claim['amount_claim'] ?><br>

                                                       <span class="cm-strong"><b>Balance:</b> </span><?php echo '&#8358'.' '.$array_claim['balance']; ?><br>
                                                       <?php } } ?> 
                                                       
                                                       <a class="delete" data-toggle="tooltip" data-placement="top" title="View Full Details" href="print/advtravel.php?msg=3&ref=<?php echo $travel_ref;?>"><i class="fa fa-search"></i></a>        
</td>

                                                        

                                                    </tr>                                                  

                                                   	<?php }?>

									</tbody>

								</table>

										

									</div>

                                    

								</div>

							</div>

						</div>

					</div>

			<aside id="sidebar-right" class="sidebar-right">

				<div class="nano">

					<div class="nano-content">

						<a href="#" class="mobile-close visible-xs">

							Collapse <i class="fa fa-chevron-right"></i>

						</a>

			

						<div class="sidebar-right-wrapper">

			

							<div class="sidebar-widget widget-calendar">

								<h6>Upcoming Tasks</h6>

								<div data-plugin-datepicker data-plugin-skin="dark" ></div>

			

								
   
							</div>

			

							

			

						</div>

					</div>

				</div>

			</aside>

		</section>

					</div>

		<!-- Vendor -->

        <script>

		function isNumber(evt) {

    evt = (evt) ? evt : window.event;

    var charCode = (evt.which) ? evt.which : evt.keyCode;

    if (charCode > 31 && (charCode < 48 || charCode > 57)) {

        return false;

    }

    return true;

} 

        (function( $ ) {



	'use strict';
	
	$("#returnTicket").click(function(){
	if(this.checked){
	
    $("#showReturn").fadeIn(1000);
	}else {
	$("#showReturn" ).fadeOut(1000);
	$(".loadpopulate").val("");
	$(".loadpopulate1").val("");
	}	
	});
	//Find the department by name 
	$('#dept').change(function(e) {

	var value = $(this).val();

		e.preventDefault();

		$.ajax({

                data:{dept:value},

                type: "POST",

                url: "exec/getname.php",

				error: function(data) {

					    new PNotify({

			title: 'Error',

			text: 'Error in getting name from department.',

			type: 'error',

			shadow: true

		});



				},

                success: function(data) {

					$('#name').html(data);

				}

            });



		

	});

	$("form #optionsRadios1234").change(function(){

						

						var valuePay =  $('input[name=mission_cat]:checked').val();//each(function() {

 
						if(valuePay=="local mission"){

	var value = $(this).val();
	
		$.ajax({

                data:{dept:'Nigeria'},

                type: "POST",

                url: "exec/getairport.php",

				error: function(data) {

					    new PNotify({

			title: 'Error',

			text: 'Error in getting name from department.',

			type: 'error',

			shadow: true

		});



				},

                success: function(data) {

					$('.populate').html(data);

				}

            });
			
		$.ajax({

                data:{dept:'Nigeria'},

                type: "POST",

                url: "exec/getairport1.php",

				error: function(data) {

					    new PNotify({

			title: 'Error',

			text: 'Error in getting name from department.',

			type: 'error',

			shadow: true

		});



				},

                success: function(data) {

					$('.populate1').html(data);

				}

            });


						}else{

						$.ajax({

                data:{dept:'Nigeria'},

                type: "POST",

                url: "exec/getinter.php",

				error: function(data) {

					    new PNotify({

			title: 'Error',

			text: 'Error in getting name from department.',

			type: 'error',

			shadow: true

		});



				},

                success: function(data) {

					$('.populate').html(data);

				}

            });	
							
$.ajax({

                data:{dept:'Nigeria'},

                type: "POST",

                url: "exec/getinter1.php",

				error: function(data) {

					    new PNotify({

			title: 'Error',

			text: 'Error in getting name from department.',

			type: 'error',

			shadow: true

		});



				},

                success: function(data) {

					$('.populate1').html(data);

				}

            });	
						}

					 }).change();
					 
					 //Load Airport
	$('.getpopulate').change(function(e) {

	var amountF = $(this).val();
	var value = $(".loadpopulate").val(amountF);

	
	}).change();
	$('.getpopulate1').change(function(e) {

	var amountF = $(this).val();
	var value = $(".loadpopulate1").val(amountF);

	
	}).change();
	//Fetch Financial Approval Manager 
	$('.amountF').keyup(function(e) {

	var amountF = $(this).val();
	var value = $(".finType").val();

		e.preventDefault();

		$.ajax({

                data:{dept:value,amount:amountF},

                type: "POST",

                url: "exec/getfintc.php",
            
				 success: function(data) {

					$('#manager').html(data);

				}

            });



		

	}).keyup();
				 
	$('.finType').change(function(e) {

	var value = $(this).val();
	var amountF = $(".amountF").val();

		e.preventDefault();

		$.ajax({

                data:{dept:value,amount:amountF},

                type: "POST",

                url: "exec/getfintc.php",
            
				 success: function(data) {

					$('#manager').html(data);

				}

            });



		

	});

			  

	$(".amount").keyup(function(){

		//var amount = parseInt($(this).val())||0;

		

		var total = 0;

    $(".amount").each(function (index, element) {

        total += parseInt($(this).val())||0;

    });

	$("#totalAmount").val( total);	

	}).keyup();

	

	//Load table 

	var max_fields      = 10; //maximum input boxes allowed

    var wrapper         = $(".input_fields_wrap"); //Fields wrapper
	
	var wrapperx         = $(".input_fields_wrap_ot"); //Fields wrapper

    var add_button      = $(".add_field_button"); //Add button Class
	  
	 var add_button_ot      = $(".add_field_button_ot"); //Add button Class

   

    var x = 1; //initlal text box count

    $(add_button).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

          $(wrapper).append('<div class="removeMore"><div class="form-group"><label class="col-md-3 control-label" for="profileFirstName">One Way</label><div class="col-md-2"><select  class="form-control populate" name="place[]"><?php $airport_sql = mysql_query("select * from airport group by airport_name asc");

													  while($array_airport = mysql_fetch_assoc($airport_sql)){   echo "<option  value=".$array_airport['airport_name'].">".str_replace("â€","",$array_airport['airport_name'])."</option>";

														  }  ?></select></div><div class="col-md-2"><select  class="form-control populate" name="aplace[]"><?php $airport_sql = mysql_query("select * from airport group by airport_name asc");

													  while($array_airport = mysql_fetch_assoc($airport_sql)){   echo "<option  value=".$array_airport['airport_name'].">".str_replace("â€","",$array_airport['airport_name'])."</option>";

														  }  ?></select></div><div class="col-md-1"><input type="text" class="form-control" name="means[]" required id="profileLastName" placeholder="means"></div><div class="col-md-1"><input type="text" class="form-control" name="date[]"  required id="datepickerA'+x+'" placeholder="Date"></div><div class="col-md-1"><input type="text" class="form-control" name="time[]"  required id="timepickerA'+x+'" placeholder="Time" value="7:15 AM"></div><div class="col-md-1"><input name="apprv[]" id="optionsRadios1" value="accomodation" type="checkbox">Accommodation</div><div class="col-md-1"><button type="button"  name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default removeField">-</button></div></div></div>');

			$('#datepickerA'+x+',#datepickerB'+x+'').datepicker({

				dateFormat: "dd-mm-yy",

				onSelect: function(dateText, inst) {

					var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, dateText, inst.settings);

					var dateText1 = $.datepicker.formatDate("D, d M yy", date, inst.settings);

					date.setDate(date.getDate() + 7);

					var dateText2 = $.datepicker.formatDate("D, d M yy", date, inst.settings);

					$("#dateoutput").html("Chosen date is <b>" + dateText1 + "</b>; chosen date + 7 days yields <b>" + dateText2 + "</b>");

				}

			}); 

			

			$('#timepickerA'+x+',#timepickerB'+x+'').timepicker();

	                        

        }

    });

	$(wrapper).on("click",".removeField", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMore').remove(); x--;

    });

	//Add other travelers 
	
	$(add_button_ot).click(function(e){ //on add input button click

        e.preventDefault();

	//$("add_button"+x)	

        if(x < max_fields){ //max input box allowed

            x++; //text box increment

            $(wrapperx).append('<div class="removeMoreot"><div class="form-group"><label class="col-md-3 control-label" for="profileFirstName"></label><div class="col-md-4"><input type="text" class="form-control" name="name[]"  id="profileFirstName" placeholder="Name"></div><div class="col-md-2"><input type="text" class="form-control" name="phoneno[]" required id="profileLastName" value="" placeholder="Phone Number"></div><div class="col-md-2"><input type="text" class="form-control" name="email[]" required id="profileLastName" value="" placeholder="Email Address"></div><div class="col-md-1"><button type="button"  name="absentbtn" class="mb-xs mt-xs mr-xs btn btn-default removeFieldot">-</button></div></div></div>');

        }

    });

	$(wrapperx).on("click",".removeFieldot", function(e){ //user click on remove text

        e.preventDefault(); $(this).parents('.removeMoreot').remove(); x--;

    });
	//End of others travelers

	$("#shadow-success").click(function(){

	$(".submit").attr("id","preloader");	

	});



		}).apply( this, [ jQuery ]);

		</script>

        <?php for($x=1; $x<=10; $x++){ ?>

						<script>

						

$(function() {



$("#datepickerAF<?php echo $x ?>,#datepickerDF<?php echo $x ?>").datepicker({

				dateFormat: "dd-mm-yy",

				onSelect: function(datehidden, inst) {

					var date = $.datepicker.parseDate(inst.settings.dateFormat || $.datepicker._defaults.dateFormat, datehidden, inst.settings);

					var datehidden1 = $.datepicker.formatDate("D, d M yy", date, inst.settings);

					date.setDate(date.getDate() + 7);

					var datehidden2 = $.datepicker.formatDate("D, d M yy", date, inst.settings);

					$("#dateoutput").html("Chosen date is <b>" + datehidden1 + "</b>; chosen date + 7 days yields <b>" + datehidden2 + "</b>");

				}

			});

});

</script>

<?php }  ?>

			
