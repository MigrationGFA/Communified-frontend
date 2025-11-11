<?php
    // include 'connectx.php';
    include '../../../translation/french/main.php';

    $organisation_type = isset($_POST['organisation_type']) ? $_POST['organisation_type'] : '';

    echo('200<||::>');    
?>
<?php 
    if($organisation_type == 'gfa1'){
?>

<div class="card myFormbu" id="myFormbu" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['individual']['wrapper-1']['head']; ?> 
        </h4>
    </div>
    <div class="card-body" >
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormbu('gfa1au')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1u"
                    id="customOptionsCheckableRadiosWithIcongfa1au" value="gfa1au" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1au">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['individual']['wrapper-1']['block-1']['head']; ?></span>
                    <small><?php echo $translations['individual']['wrapper-1']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbu('gfa1bu')">
                <input class="custom-option-item-check" type="radio" name="radio1u"
                    id="customOptionsCheckableRadiosWithIcongfa1bu" value="gfa1bu" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1bu">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['individual']['wrapper-1']['block-2']['head']; ?></span>
                    <small><?php echo $translations['individual']['wrapper-1']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbu('gfa1cu')" >
                <input class="custom-option-item-check" type="radio" name="radio1u"
                    id="customOptionsCheckableRadiosWithIcongfa1cu" value="gfa1cu" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1cu">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['individual']['wrapper-1']['block-3']['head']; ?></span>
                    <small><?php echo $translations['individual']['wrapper-1']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbu('gfa1du')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1u"
                    id="customOptionsCheckableRadiosWithIcongfa1du" value="gfa1du" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1du">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['individual']['wrapper-1']['block-4']['head']; ?></span>
                    <small><?php echo $translations['individual']['wrapper-1']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormbu('gfa1eu')" style="display:none;">
                <input class="custom-option-item-check" type="radio" name="radio1u"
                    id="customOptionsCheckableRadiosWithIcongfa1eu" value="gfa1eu" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa1eu">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['individual']['wrapper-1']['block-5']['head']; ?></span>
                    <small><?php echo $translations['individual']['wrapper-1']['block-5']['sub']; ?></small>
                </label>
            </div>

           
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($organisation_type == 'gfa2'){
?>

<div class="card myFormcw" id="myFormcw" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['startup']['wrapper-1']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormcw('gfa2aw')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2aw" value="gfa2aw" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2aw">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-1']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-1']['block-1']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormcw('gfa2bw')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2bw" value="gfa2bw" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2bw">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-2']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-1']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormcw('gfa2cw')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2cw" value="gfa2cw" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2cw">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-3']['head']; ?></span>
                    <small>Valider et transformer vos idées en un produit ou service.</small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormcw('gfa2dw')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2dw" value="gfa2dw" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2dw">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-4']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-1']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormcw('gfa2ew')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2ew" value="gfa2ew" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2ew">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-5']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-1']['block-5']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormcw('gfa2fw')">
                <input class="custom-option-item-check" type="radio" name="radio2w"
                    id="customOptionsCheckableRadiosWithIcongfa2fw" value="gfa2fw" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa2fw">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['startup']['wrapper-1']['block-6']['head']; ?></span>
                    <small><?php echo $translations['startup']['wrapper-1']['block-6']['sub']; ?></small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($organisation_type == 'gfa3'){
?>

<div class="card myFormdx" id="myFormdx" >
    <div class="card-header">
        <h4 class="card-title"><?php echo $translations['investor']['wrapper-1']['head']; ?></h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormdx('gfa3ax')">
                <input class="custom-option-item-check" type="radio" name="radio3x"
                    id="customOptionsCheckableRadiosWithIcongfa3ax" value="gfa3ax" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3ax">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-1']['block-1']['head']; ?></span>
                    <small><?php echo $translations['investor']['wrapper-1']['block-1']['sub']; ?></small><br /><br />
                </label>
            </div>

            <div class="col-md-4" onclick="myFormdx('gfa3bx')">
                <input class="custom-option-item-check" type="radio" name="radio3x"
                    id="customOptionsCheckableRadiosWithIcongfa3bx" value="gfa3bx" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3bx">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-1']['block-2']['head']; ?></span>
                    <small><?php echo $translations['investor']['wrapper-1']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormdx('gfa3cx')">
                <input class="custom-option-item-check" type="radio" name="radio3x"
                    id="customOptionsCheckableRadiosWithIcongfa3cx" value="gfa3cx" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3cx">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-1']['block-3']['head']; ?></span>
                    <small><?php echo $translations['investor']['wrapper-1']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormdx('gfa3dx')">
                <input class="custom-option-item-check" type="radio" name="radio3x"
                    id="customOptionsCheckableRadiosWithIcongfa3dx" value="gfa3dx" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3dx">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-1']['block-4']['head']; ?></span>
                    <small><?php echo $translations['investor']['wrapper-1']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormdx('gfa3ex')">
                <input class="custom-option-item-check" type="radio" name="radio3x"
                    id="customOptionsCheckableRadiosWithIcongfa3ex" value="gfa3ex" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3ex">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['investor']['wrapper-1']['block-5']['head']; ?></span>
                    <small><?php echo $translations['investor']['wrapper-1']['block-5']['sub']; ?></small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($organisation_type == 'gfa4'){
?>

<div class="card myFormey" id="myFormey" >
    <div class="card-header">
        <h4 class="card-title">
            Quel type de startups incubez-vous/accélérez-vous ?
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormey('gfa4ay')">
                <input class="custom-option-item-check" type="radio" name="radio4y"
                    id="customOptionsCheckableRadiosWithIcongfa4ay" value="gfa4ay" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa4ay">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">De stade précoce à stade avancé</span>
                    <small>Petites entreprises</small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormey('gfa4by')">
                <input class="custom-option-item-check" type="radio" name="radio4y"
                    id="customOptionsCheckableRadiosWithIcongfa4by" value="gfa4by" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa4by">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Stade précoce</span>
                    <small>Entreprise financable en capital-risque</small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormey('gfa4cy')">
                <input class="custom-option-item-check" type="radio" name="radio4y"
                    id="customOptionsCheckableRadiosWithIcongfa4cy" value="gfa4cy" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa3cx">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Stade avancé</span>
                    <small>Entreprise financable par du capital-risque</small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormey('gfa4dy')">
                <input class="custom-option-item-check" type="radio" name="radio4y"
                    id="customOptionsCheckableRadiosWithIcongfa4dy" value="gfa4dy" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa4dy">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Tous les stades
                    </span>
                    <small>Petites entreprises et entreprises financables par du capital-risque</small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormey('gfa4ey')">
                <input class="custom-option-item-check" type="radio" name="radio4y"
                    id="customOptionsCheckableRadiosWithIcongfa4ey" value="gfa4ey" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa4ey">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block">Stade spécifique</span>
                    <small>Autres entreprises</small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($organisation_type == 'gfa5'){
?>

<div class="card myFormfz" id="myFormfz" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['corporate']['wrapper-1']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            <div class="col-md-4" onclick="myFormfz('gfa5az')">
                <input class="custom-option-item-check" type="radio" name="radio5z"
                    id="customOptionsCheckableRadiosWithIcongfa5az" value="gfa5az" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa5az">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-1']['block-1']['head']; ?></span>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormfz('gfa5bz')">
                <input class="custom-option-item-check" type="radio" name="radio5z"
                    id="customOptionsCheckableRadiosWithIcongfa5bz" value="gfa5bz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa5bz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-1']['block-2']['head']; ?></span>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormfz('gfa5cz')">
                <input class="custom-option-item-check" type="radio" name="radio5z"
                    id="customOptionsCheckableRadiosWithIcongfa5cz" value="gfa5cz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa5cz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-1']['block-3']['head']; ?></span>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormfz('gfa5dz')">
                <input class="custom-option-item-check" type="radio" name="radio5z"
                    id="customOptionsCheckableRadiosWithIcongfa5dz" value="gfa5dz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa5dz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-1']['block-4']['head']; ?>
                    </span>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormfz('gfa5ez')">
                <input class="custom-option-item-check" type="radio" name="radio5z"
                    id="customOptionsCheckableRadiosWithIcongfa5ey" value="gfa5ez" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa5ey">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['corporate']['wrapper-1']['block-5']['head']; ?></span>
                </label>
            </div>
        </div>
    </div>
</div>

<?php 
    }
?>

<?php
    if($organisation_type == 'gfa6'){
?>

<div class="card myFormgz myFormgzMentor" id="myFormgz" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['mentor']['wrapper-1']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            

            <div class="col-md-4" onclick="myFormgz('gfa6bz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6bz" value="gfa6bz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6bz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-2']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormgz('gfa6cz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6cz" value="gfa6cz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6cz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-3']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormgz('gfa6dz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6dz" value="gfa6dz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6dz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-4']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormgz('gfa6ez')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6ez" value="gfa6ez" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6ez">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-5']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-5']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormgz('gfa6ezz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6ezz" value="gfa6ezz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6ezz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-6']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-6']['sub']; ?></small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>

<?php
    if($organisation_type == 'gfa7'){
?>

<div class="card myFormgz myFormgzMentor" id="myFormgz" >
    <div class="card-header">
        <h4 class="card-title">
            <?php echo $translations['mentor']['wrapper-1']['head']; ?>
        </h4>
    </div>
    <div class="card-body">
        <div class="row custom-options-checkable g-1">
            

            <div class="col-md-4" onclick="myFormgz('gfa6bz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6bz" value="gfa6bz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6bz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-2']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-2']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormgz('gfa6cz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6cz" value="gfa6cz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6cz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-3']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-3']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-4" onclick="myFormgz('gfa6dz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6dz" value="gfa6dz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6dz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-4']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-4']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormgz('gfa6ez')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6ez" value="gfa6ez" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6ez">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-5']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-5']['sub']; ?></small>
                </label>
            </div>

            <div class="col-md-6" onclick="myFormgz('gfa6ezz')">
                <input class="custom-option-item-check" type="radio" name="radio6z"
                    id="customOptionsCheckableRadiosWithIcongfa6ezz" value="gfa6ezz" />
                <label class="custom-option-item text-center p-1" for="customOptionsCheckableRadiosWithIcongfa6ezz">
                    <i data-feather="lock" class="font-large-1 mb-75"></i>
                    <span class="custom-option-item-title h4 d-block"><?php echo $translations['mentor']['wrapper-1']['block-6']['head']; ?></span>
                    <small><?php echo $translations['mentor']['wrapper-1']['block-6']['sub']; ?></small>
                </label>
            </div>
        </div>
    </div>
</div>

<?php
    }
?>
<!-- <script src="api/v0/js/core.js"></script> -->