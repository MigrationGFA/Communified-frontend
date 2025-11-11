<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Full calendar start -->
        <?php 
            $user_email = $this->encrypt->decode($this->session->userdata('email'));
            $event_id = $_GET['q'];
            if($event_id == ''){
                header("Location: calender");
            }
            $single_event = $this->gfa_model->get_event_id($event_id)[0];
        ?>
        <section>
        <div class="app-calendar overflow-hidden border">
            <div class="row g-0">

            <!-- Calendar -->
            <div class="col position-relative">
                <div class="card shadow-none border-0 mb-0 rounded-0">
                <div class="card-body pb-0">
                    <div style="height: 400px;">
                        <div>
                            <h4>Meeting Subject</h4>
                            <p><?php echo $single_event['Title'];?></p>
                            <hr>
                            <p><b>Date and Time</b></p>
                            <p><?php echo $single_event['StartTime'];?></p>
                        </div>
                        <?php if($this->gfa_model->check_event_calender($user_email, $event_id)) { ?>
                            <?php if($single_event['Status'] == 'Pending') { ?>
                                <div class="status-btn" id="status-btn">
                                    <div id="status-pend">
                                        <button class="btn btn-primary" onclick="setEventStatus('Approved', '<?php echo $single_event['ID'];?>')">Approve</button>
                                        <button class="btn btn-outline-danger" onclick="setEventStatus('Declined', '<?php echo $single_event['ID'];?>')">Decline</button>
                                    </div>
                                    <div id="status-final" style="display: none;">
                                        <button class="btn btn-primary" id="set-status" disabled></button>
                                    </div>
                                </div>
                                <div class="status-btn" id="status-btn-load" style="display: none;">
                                    <button class="btn btn-primary" disabled>Loading.....</button>
                                </div>
                                
                                
                            <?php } else { ?>
                                <button class="btn btn-primary" disabled><?php echo $single_event['Status']; ?></button>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
                </div>
            </div>
            <!-- /Calendar -->
            <div class="body-content-overlay"></div>
            </div>
        </div>
        </section>
    </div>
    </div>
</div>
    <!-- END: Content-->