<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $investor_type = isset($_POST['investor_type']) ? $_POST['investor_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($investor_type == 'gfa3ax' || $investor_type == 'gfa3bx' || $investor_type == 'gfa3cx' || $investor_type == 'gfa3dx' || $investor_type == 'gfa3ex'){
?>

<div class="card myFormbinv" id="myFormbinv" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['investor']['wrapper-2']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormbinv('gfa1ainv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1ainv11" value="gfa1ainv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1ainv11">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-1']; ?></span>
                    <small></small><br /><br />
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbinv('gfa1binv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1ainv22" value="gfa1binv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1ainv22">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-2']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormbinv('gfa1cinv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIconradio1inv33" value="gfa1cinv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIconradio1inv33">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-3']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbinv('gfa1dinv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1cinv44" value="gfa1dinv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1cinv44">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-4']; ?>
                    </span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbinv('gfa1einv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1einv55" value="gfa1einv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1einv55">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-5']; ?></span>
                    <small></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbinv('gfa1finv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1finv55" value="gfa1finv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1finv55">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-6']; ?></span>
                    <small></small>
                </label>
            </div>
            <div class="col-md-6" onclick="myFormbinv('gfa1ginv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1ginv55" value="gfa1ginv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1ginv55">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-7']; ?></span>
                    <small></small>
                </label>
            </div>
            <div class="col-md-6" onclick="myFormbinv('gfa1hinv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1hinv55" value="gfa1hinv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1hinv55">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-8']; ?></span>
                    <small></small>
                </label>
            </div>
            <div class="col-md-6" onclick="myFormbinv('gfa1iinv')">
                <input class="custom-option-item-check" type="radio" name="radio1inv"
                    id="customOptionsCheckableRadiosWithIcongfa1iinv55" value="gfa1iinv" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1iinv55">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-2']['sub-9']; ?></span>
                    <small></small>
                </label>
            </div>
        </div>
    </div>
    <input type="hidden" class="how-to-inv-1" />
</div>

<?php 
    }
?>

<?php 
    if($investor_type == 'gfa3ex6'){
?>

<?php 
    }
?>


<!-- <script src="api/v0/js/core.js"></script> -->