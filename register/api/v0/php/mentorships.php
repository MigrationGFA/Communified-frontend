<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $mentor_type = isset($_POST['mentor_type']) ? $_POST['mentor_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($mentor_type == 'gfa6az' || $mentor_type == 'gfa6bz' || $mentor_type == 'gfa6cz' || $mentor_type == 'gfa6dz' || $mentor_type == 'gfa6ez' || $mentor_type == 'gfa6ezz' ){
?>

<div class="card myFormbgov6" id="myFormbgov6" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['mentor']['wrapper-2']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormbgov6('gfa1agov6')">
                <input class="custom-option-item-check" type="radio" name="radio1gov6"
                    id="customOptionsCheckableRadiosWithIcongfa1agov66" value="gfa1agov6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov66">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-2']['block-1']['head']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbgov6('gfa1bgov6')">
                <input class="custom-option-item-check" type="radio" name="radio1gov6"
                    id="customOptionsCheckableRadiosWithIcongfa1agov266" value="gfa1bgov6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov266">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-2']['block-2']['head']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbgov6('gfa1cgov6')">
                <input class="custom-option-item-check" type="radio" name="radio1gov6"
                    id="customOptionsCheckableRadiosWithIcongfa1agov366" value="gfa1cgov6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov366">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-2']['block-3']['head']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbgov6('gfa1dgov6')">
                <input class="custom-option-item-check" type="radio" name="radio1gov6"
                    id="customOptionsCheckableRadiosWithIcongfa1agov466" value="gfa1dgov6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov466">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-2']['block-4']['head']; ?>
                    </span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbgov6('gfa1dgov6')">
                <input class="custom-option-item-check" type="radio" name="radio1gov6"
                    id="customOptionsCheckableRadiosWithIcongfa1agov466" value="gfa1egov6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov466">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Deux mois
                    </span>
                    <small></small>
                </label>
            </div>
        </div>
        <input class="current-stage" type="hidden">
    </div>
</div>

<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->