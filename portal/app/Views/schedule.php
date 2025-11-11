<!-- BEGIN: Content-->
<div style="margin-left:0px;" class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Full calendar start -->
        <?php 
            $event_users = $this->gfa_model->get_all_event_users();
        ?>
        <section>
        <div class="app-calendar overflow-hidden border">
            <div class="row g-0">
            <!-- Sidebar -->
            <div class="col app-calendar-sidebar flex-grow-0 overflow-hidden d-flex flex-column" id="app-calendar-sidebar">
                <div class="sidebar-wrapper">
                    <div style="text-align:center; margin-top:20px;">
                        <img style="height:50px; width:auto;" src="https://getfundedafrica.com/microsoft/wp-content/uploads/2021/10/h5-logo-dark.png">
                    </div>
                <div class="card-body d-flex justify-content-center">
                    <button
                    class="btn btn-primary btn-toggle-sidebar w-100"
                    data-bs-toggle="modal"
                    data-bs-target="#add-new-sidebar"
                    >
                    <span class="align-middle">Schedule Meeting</span>
                    </button>
                </div>
                <div class="card-body pb-0">
                    <h5 class="section-label mb-1">
                    <span class="align-middle">Filter</span>
                    </h5>
                    <div class="form-check mb-1">
                    <input type="checkbox" class="form-check-input select-all" id="select-all" checked />
                    <label class="form-check-label" for="select-all">View All</label>
                    </div>
                    <div class="calendar-events-filter">
                    <div class="form-check form-check-primary mb-1">
                        <input
                        type="checkbox"
                        class="form-check-input input-filter"
                        id="business"
                        data-value="business"
                        checked
                        />
                        <label class="form-check-label" for="business">Business</label>
                    </div>
                    </div>
                </div>
                </div>
                <div class="mt-auto">
                </div>
            </div>
            <!-- /Sidebar -->

            <!-- Calendar -->
            <div class="col position-relative">
                <div class="card shadow-none border-0 mb-0 rounded-0">
                <div class="card-body pb-0">
                    <div id="calendar"></div>
                </div>
                </div>
            </div>
            <!-- /Calendar -->
            <div class="body-content-overlay"></div>
            </div>
        </div>
        <!-- Calendar Add/Update/Delete event modal-->
        <div class="modal modal-slide-in event-sidebar fade" id="add-new-sidebar">
            <div class="modal-dialog sidebar-lg">
            <div class="modal-content p-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                <div class="modal-header mb-1">
                <h5 class="modal-title">Schedule Meeting</h5>
                </div>
                <div class="modal-body flex-grow-1 pb-sm-0 pb-3">
                <form class="event-form needs-validation" data-ajax="false" onsubmit="create_event_calender()" novalidate>
                    <input type="hidden" id="guests" value="<?php echo $user_email; ?>" />
                    <input type="hidden" id="user_email" value="<?php echo $user_email; ?>" />
                    <input type="hidden" id="total_event" />
                    <div class="mb-1">
                    <label for="title" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Meeting Subject" required />
                    </div>
                    <div class="mb-1 position-relative">
                    <label for="start-date" class="form-label">Date and Time</label>
                    <input type="text" class="form-control" id="start-date" name="start-date" placeholder="Select Date and Time" />
                    </div>
                    <div class="mb-1 position-relative" style="display:none;">
                    <label for="end-date" class="form-label">End Date</label>
                    <input type="text" class="form-control" id="end-date" name="end-date" placeholder="End Date" />
                    </div>
                    <div class="mb-1">
                    <div class="form-check form-switch">
                        <input type="checkbox" class="form-check-input allDay-switch" id="customSwitch3" />
                        <label class="form-check-label" for="customSwitch3">All Day</label>
                    </div>
                    </div>

                    
                    
                        <div class="mb-1">
                            <label for="host" class="form-label">Select Your Company</label>
                            <select id="host" name="event-guests" class="select2 form-select" onclick="" required>
                                <option value="">Select Your Company</option>
                                <?php foreach($event_users as $users) { ?>
                                    <option value="<?php echo $users['Email']; ?>"><?php echo $users['Name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="mb-1">
                        <label for="event-location" class="form-label">Location</label>
                        <input type="text" class="form-control" id="event-location" placeholder="Enter Location" value="Microsoft Garage, Lagos, Nigeria"/>
                        </div>
                        <div class="mb-1">
                        <label class="form-label">Message</label>
                        <textarea name="event-description-editor" id="event-description-editor" class="form-control"></textarea>
                        </div>
                        <div class="mb-1 d-flex">
                        <button type="submit" class="btn btn-primary add-event-btn me-1">Schedule</button>
                        <button type="button" class="btn btn-outline-secondary btn-cancel" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Calendar Add/Update/Delete event modal-->
        </section>
    </div>
    </div>
</div>

    <!-- END: Content-->