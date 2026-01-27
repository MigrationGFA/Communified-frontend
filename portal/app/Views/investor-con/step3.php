<div class="row step-box">

<?php $loginkey = $this->gfa_model->getWpCred($email); ?>

<div class="col-md-5 h-100">
    <div style="text-align: center; height: 100%;">
        <iframe width="100%" height="315" src="https://screencast-o-matic.com/player/criXXjVihwm?ff=1&amp;title=0&amp;controls=1&amp;width=1280&amp;height=720" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        <br>
        <a <?php $learning_sso = "https://remsana.getfundedafrica.com/sso.php?key=".$loginkey[0][LoginKey]; ?> onclick="saveSSOAction('learning', '<?php echo $learning_sso; ?>')"  class="btn btn-primary float-end mt-3 w-100" >
            <span class="me-50">Go to Remsana</span>
            <i data-feather="arrow-right"></i>
        </a>
    </div>

    
</div>

<div class="col-md-7 h-100">

    <h3 class="head-text">Now lets talk about the information investors need from you</h3>


    <div class="row my-4 step2 cover-text">
        <div class="col-sm-12  col-md-12">
            <div class="d-flex flex-column ">
                <p>First update your personal profile <a href="https://getfundedafrica.com/portal/gfa/profile">here</a> </p>
            </div>
        </div>
        <div class="col-sm-12  col-md-12">
            <div class="d-flex flex-column ">
                <p>Secondary update your statup profile <a href="https://getfundedafrica.com/portal/gfa/profile">here</a> </p>
            </div>
        </div>
        <div class="col-sm-12  col-md-12">
            <div class="d-flex flex-column ">
                <p>Lastly upload your document in the dealroom here to share with investors <a href="https://getfundedafrica.com/portal/gfa/dealroom_folder/Profile">here</a> </p>
            </div>
        </div>
        
    </div>
    <br>

    <a onclick="saveInvConOnb()"  class="btn btn-primary float-end mt-3" style="margin-left: 5px;">
        <span class="me-50">Continue</span>
        <i class="fa fa-arrow-right" aria-hidden="true"></i>
    </a>

    <a onclick="loadInvestOnb('step2')"  class="btn btn-primary float-end mt-3" >
        <span class="me-50">Back</span>
        <i class="fa fa-arrow-left" aria-hidden="true"></i>
    </a>

</div>




</div>

