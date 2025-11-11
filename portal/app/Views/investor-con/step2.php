        <div class="row step-box">

            <div class="col-md-5 h-100">
                <div style="text-align: center; height: 100%;">
                    <iframe width="100%" height="315" src="https://screencast-o-matic.com/player/crXhiiVl5wZ?ff=1&amp;title=0&amp;width=1280&amp;height=720" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    <br>
                    <a <?php $learning_sso = "https://remsana.getfundedafrica.com/sso.php?key=".$loginkey[0][LoginKey]; ?> onclick="saveSSOAction('learning', '<?php echo $learning_sso; ?>')"  class="btn btn-primary float-end mt-3 w-100" >
                        <span class="me-50">Go to Remsana</span>
                        <i data-feather="arrow-right"></i>
                    </a>
                </div>
    
                
            </div>

            <div class="col-md-7 h-100">

                <h3 class="head-text">What makes a successfull investor connection?</h3>
                <p class="subhead-text">First impression matters! Create a profile that will stand out from the rest of the crowd.</p>


                <div class="row my-4 step2 cover-text">
                    <div class="col-sm-6  col-md-4">
                        <div class="d-flex flex-column ">
                            <img src="<?php echo base_url(); ?>assets/images/information.png" class="idcard" alt="">
                            <p>Take your time in to update your profile so it’s exactly as you want it to be.</p>
                        </div>
                    </div>
                    <div class="col-sm-6  col-md-4">
                        <div class="d-flex flex-column ">
                            <img src="<?php echo base_url(); ?>assets/images/account.png" class="idcard" alt="">
                            <p>Add credibility by linking to your website, linkedin or any other social media.</p>
                        </div>
                    </div>
                    <div class="col-sm-6  col-md-4">
                        <div class="d-flex flex-column ">
                            <img src="<?php echo base_url(); ?>assets/images/portfolio.png" class="idcard" alt="">
                            <p>Accurately enter your figures like valuation, MRR, ARR etc.</p>
                        </div>
                    </div>
                    <div class="col-sm-6  col-md-4">
                        <div class="d-flex flex-column ">
                            <img src="<?php echo base_url(); ?>assets/images/piggy-bank.png" class="idcard" alt="">
                            <p>Put a face to your name upload a company logo that clearly shows your brand.</p>
                        </div>
                    </div>
                    <div class="col-sm-6  col-md-4">
                        <div class="d-flex flex-column ">
                            <img src="<?php echo base_url(); ?>assets/images/man.png" class="idcard" alt="">
                            <p>Upload your complete company profile, Short Introduction Video about what your startup and other documents ready for the investors.</p>
                        </div>
                    </div>
                    
                </div>
                <br>
    
                <a onclick="loadInvestOnb('step3')"  class="btn btn-primary float-end mt-3" style="margin-left: 5px;">
                    <span class="me-50">Next</span>
                    <i class="fa fa-arrow-right" aria-hidden="true"></i>
                </a>

                <a onclick="loadInvestOnb('step1')"  class="btn btn-primary float-end mt-3">
                    <span class="me-50">Back</span>
                    <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </a>

            </div>

            


        </div>

