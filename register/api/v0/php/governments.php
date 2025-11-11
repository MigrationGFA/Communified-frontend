<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $government_type = isset($_POST['government_type']) ? $_POST['government_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($government_type == 'gfa5az' || $government_type == 'gfa5bz' || $government_type == 'gfa5cz' || $government_type == 'gfa5dz' || $government_type == 'gfa5ez'){
?>

<div class="card myFormbgov" id="myFormbgov" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['corporate']['wrapper-2']['head']; ?>
        </h4>
    </div>
    <div class="card-body" >
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormbgov('gfa1agov')">
                <input class="custom-option-item-check" type="radio" name="radio1gov"
                    id="customOptionsCheckableRadiosWithIcongfa1agov" value="gfa1agov" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['corporate']['wrapper-2']['block-1']['sub']; ?></small><br /><br />
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbgov('gfa1bgov')">
                <input class="custom-option-item-check" type="radio" name="radio1gov"
                    id="customOptionsCheckableRadiosWithIcongfa1agov2" value="gfa1bgov" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['corporate']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbgov('gfa1cgov')">
                <input class="custom-option-item-check" type="radio" name="radio1gov"
                    id="customOptionsCheckableRadiosWithIcongfa1agov3" value="gfa1cgov" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['corporate']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbgov('gfa1dgov')">
                <input class="custom-option-item-check" type="radio" name="radio1gov"
                    id="customOptionsCheckableRadiosWithIcongfa1agov4" value="gfa1dgov" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['corporate']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbgov('gfa1egov')">
                <input class="custom-option-item-check" type="radio" name="radio1gov"
                    id="customOptionsCheckableRadiosWithIcongfa1agov5" value="gfa1egov" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1agov5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['corporate']['wrapper-2']['block-5']['sub']; ?>s</small>
                </label>
            </div>
        </div>
        <input class="engage" type="hidden">
    </div>
</div>

<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->