<?php
    include 'connectx.php';

    $incubator_type = isset($_POST['incubator_type']) ? $_POST['incubator_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($incubator_type == 'gfa4ay' || $incubator_type == 'gfa4by' || $incubator_type == 'gfa4cy' || $incubator_type == 'gfa4dy' || $incubator_type == 'gfa4ey'){
?>

<div class="card myFormbacc" id="myFormbacc" onclick="myFormbacc()">
    <div class="card-header">
        <h4 class="card-title">
            Number of Startups you plan to incubate / accelerate
            over the next 12 months?
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc" value="gfa1aacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">One to
                        Four</span>
                    <small>Startups</small><br /><br />
                </label>
            </div>

            <div class="col-md-4">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc2" value="gfa1bacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Five to
                        Eight</span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-4">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc3" value="gfa1cacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Nine to
                        Tweleve</span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-6">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc4" value="gfa1dacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Tweleve to
                        Fifteen
                    </span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-6">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc5" value="gfa1eacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Over
                        Fifteen</span>
                    <small>Startups</small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->