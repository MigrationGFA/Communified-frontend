<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $startup_type = isset($_POST['startup_type']) ? $_POST['startup_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($startup_type == 'gfa2aw'){
?>

<div class="card myFormb2" id="myFormb2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-1']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormb2('gfa1a2')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio12"
                    id="customOptionsCheckableRadiosWithIcongfa1a2" value="gfa1a2" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormb2('gfa1b2')">
                <input class="custom-option-item-check" type="radio" name="radio12"
                    id="customOptionsCheckableRadiosWithIcongfa1b2" value="gfa1b2" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormb2('gfa1c2')">
                <input class="custom-option-item-check" type="radio" name="radio12"
                    id="customOptionsCheckableRadiosWithIcongfa1c2" value="gfa1c2" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormb2('gfa1d2')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio12"
                    id="customOptionsCheckableRadiosWithIcongfa1d2" value="gfa1d2" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormb2('gfa1e2')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio12"
                    id="customOptionsCheckableRadiosWithIcongfa1e2" value="gfa1e2" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e2">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

            
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($startup_type == 'gfa2bw'){
?>

<div class="card myFormc2 myFormc2Idea" id="myFormc2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-2']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormc2('gfa1a3')" style="display:none">
                <input class="custom-option-item-check" type="radio" name="radio1c2"
                    id="customOptionsCheckableRadiosWithIcongfa1a3" value="gfa1a3" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormc2('gfa1b3')">
                <input class="custom-option-item-check" type="radio" name="radio1c2"
                    id="customOptionsCheckableRadiosWithIcongfa1b3" value="gfa1b3" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormc2('gfa1c3')">
                <input class="custom-option-item-check" type="radio" name="radio1c2"
                    id="customOptionsCheckableRadiosWithIcongfa1c3" value="gfa1c3" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormc2('gfa1d3')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1c2"
                    id="customOptionsCheckableRadiosWithIcongfa1d3" value="gfa1d3" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormc2('gfa1e3')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1c2"
                    id="customOptionsCheckableRadiosWithIcongfa1e3" value="gfa1e3" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e3">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

            
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($startup_type == 'gfa2cw'){
?>

<div class="card myFormd2Dev" id="myFormd2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-3']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormd2('gfa1a4')" style="display:none">
                <input class="custom-option-item-check" type="radio" name="radio1d2"
                    id="customOptionsCheckableRadiosWithIcongfa1a4" value="gfa1a4" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormd2('gfa1b4')">
                <input class="custom-option-item-check" type="radio" name="radio1d2"
                    id="customOptionsCheckableRadiosWithIcongfa1b4" value="gfa1b4" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormd2('gfa1c4')">
                <input class="custom-option-item-check" type="radio" name="radio1d2"
                    id="customOptionsCheckableRadiosWithIcongfa1c4" value="gfa1c4" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormd2('gfa1d4')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1d2"
                    id="customOptionsCheckableRadiosWithIcongfa1d4" value="gfa1d4" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormd2('gfa1e4')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1d2"
                    id="customOptionsCheckableRadiosWithIcongfa1e4" value="gfa1e4" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e4">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

           
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($startup_type == 'gfa2dw'){
?>

<div class="card myForme2 myForme2Pre_launch" id="myForme2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-4']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myForme2('gfa1a5')" style="display:none">
                <input class="custom-option-item-check" type="radio" name="radio1e2"
                    id="customOptionsCheckableRadiosWithIcongfa1a5" value="gfa1a5" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myForme2('gfa1b5')">
                <input class="custom-option-item-check" type="radio" name="radio1e2"
                    id="customOptionsCheckableRadiosWithIcongfa1b5" value="gfa1b5" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myForme2('gfa1c5')">
                <input class="custom-option-item-check" type="radio" name="radio1e2"
                    id="customOptionsCheckableRadiosWithIcongfa1c5" value="gfa1c5" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myForme2('gfa1d5')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1e2"
                    id="customOptionsCheckableRadiosWithIcongfa1d5" value="gfa1d5" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myForme2('gfa1e5')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1e2"
                    id="customOptionsCheckableRadiosWithIcongfa1e5" value="gfa1e5" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e5">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

            
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($startup_type == 'gfa2ew'){
?>

<div class="card myFormf2 myFormf2Post_launch" id="myFormf2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-5']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormf2('gfa1a6')" style="display:none">
                <input class="custom-option-item-check" type="radio" name="radio1f2"
                    id="customOptionsCheckableRadiosWithIcongfa1a6" value="gfa1a6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a6">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormf2('gfa1b6')">
                <input class="custom-option-item-check" type="radio" name="radio1f2"
                    id="customOptionsCheckableRadiosWithIcongfa1b6" value="gfa1b6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b6">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormf2('gfa1c6')">
                <input class="custom-option-item-check" type="radio" name="radio1f2"
                    id="customOptionsCheckableRadiosWithIcongfa1c6" value="gfa1c6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c6">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormf2('gfa1d6')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1f2"
                    id="customOptionsCheckableRadiosWithIcongfa1d6" value="gfa1d6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d6">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormf2('gfa1e6')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1f2"
                    id="customOptionsCheckableRadiosWithIcongfa1e6" value="gfa1e6" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e6">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

            
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($startup_type == 'gfa2fw'){
?>

<div class="card myFormgX myFormg2Growth" id="myFormg2" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-2']['head-6']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormg2('gfa1a7')" style="display:none">
                <input class="custom-option-item-check" type="radio" name="radio1g2"
                    id="customOptionsCheckableRadiosWithIcongfa1a7" value="gfa1a7" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1a7">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormg2('gfa1b7')" >
                <input class="custom-option-item-check" type="radio" name="radio1g2"
                    id="customOptionsCheckableRadiosWithIcongfa1b7" value="gfa1b7" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1b7">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-2']['head']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormg2('gfa1c7')">
                <input class="custom-option-item-check" type="radio" name="radio1g2"
                    id="customOptionsCheckableRadiosWithIcongfa1c7" value="gfa1c7" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1c7">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-3']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormg2('gfa1d7')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1g2"
                    id="customOptionsCheckableRadiosWithIcongfa1d7" value="gfa1d7" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1d7">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormg2('gfa1e7')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1g2"
                    id="customOptionsCheckableRadiosWithIcongfa1e7" value="gfa1e7" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1e7">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-2']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-2']['block-5']['sub']; ?></small>
                </label>
            </div>

            
        </div>
    </div>
</div>

<?php
    }
?>
<!-- <script src="api/v0/js/core.js"></script> -->