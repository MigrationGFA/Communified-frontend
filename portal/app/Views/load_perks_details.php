<?php 
                $this->gfa_model = model('App\Models\GfaModel');
                $this->admin_model = model('App\Models\AdminModel');
           ?>
<?php $getPerks =  $this->gfa_model->getPerksByIdDetails($id);  ?>
<div class="container">

                      <div>

                      <div style="" >
                      <h5 class="text-center"><b class="mr-2" ><?php echo $getPerks[0]['title']  ?></b></h5>
                        <img style="width:100px;border-radius:10px;border-radius: 10px;margin-right: auto;margin-left: auto;display: block;" src="<?php echo base_url()?>uploads/files/<?php echo $getPerks[0]['logo'] ?>" />
                      </div>
                      <!-- height:100px; -->
                      <?php 
                        $searchData = array('<div class="ql-editor" data-gramm="false" contenteditable="true">', '<input type="text" data-formula="e=mc^2" data-link="https://quilljs.com" data-video="Embed URL">');
                        $replaceData = array("<div>", "<br/>");
                         echo html_entity_decode(str_replace($searchData,$replaceData,stripslashes($this->gfa_model->getPerksByRef($getPerks[0]['ref_id'])[0]['textdata'])), ENT_QUOTES); 
                         ?>
                      </div>



                    </div>