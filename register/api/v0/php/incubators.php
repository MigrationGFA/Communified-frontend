<?php
    // include 'connectx.php';

    $incubator_type = isset($_POST['incubator_type']) ? $_POST['incubator_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($incubator_type == 'gfa4ay' || $incubator_type == 'gfa4by' || $incubator_type == 'gfa4cy' || $incubator_type == 'gfa4dy' || $incubator_type == 'gfa4ey'){
?>

<div class="card myFormbacc" id="myFormbacc" >
    <div class="card-header">
        <h4 class="card-title">
            Combien de startups prévoyez-vous d'incuber/accélérer au cours des 12 prochains mois ?
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormbacc('gfa1aacc')">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc" value="gfa1aacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">De une à quatre</span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbacc('gfa1bacc')">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc2" value="gfa1bacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">De cinq à huit</span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbacc('gfa1cacc')">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc3" value="gfa1cacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">De neuf à douze</span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbacc('gfa1dacc')">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc4" value="gfa1dacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">De douze à quinze
                    </span>
                    <small>Startups</small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbacc('gfa1eacc')">
                <input class="custom-option-item-check" type="radio" name="radio1acc"
                    id="customOptionsCheckableRadiosWithIcongfa1aacc5" value="gfa1eacc" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1aacc5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Plus de quinze</span>
                    <small>Startups</small>
                </label>
            </div>
        </div>
        <input type="hidden" class="acctype">
    </div>
</div>

<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->