<?php
/**
  * @var \App\View\AppView $this
  */
use Cake\Filesystem\Folder;
use Cake\Filesystem\File;
?>

<div class="information form-group container">
    <?= $this->Form->create($information) ?>
    <fieldset>
        <legend><?= __('Edit Information') ?></legend>
        <?php
            echo $this->Form->control('field');
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?php
        if ($information->id == 7 || $information->id == 8) {
            $dir = new Folder(WWW_ROOT . 'img/home');
            $files = $dir->find('.*\.png|jpg', true);
    ?>
            <img src="<?= $this->Url->image('home/'.$information['value'])?>" alt="" class="img-thumbnail">
            <!-- Button trigger modal -->

            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                Choose
            </button>

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Available Images</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php foreach ($files as $file){
                                echo '<a href="#" onclick=selectFile("'.$file.'") data-dismiss="modal" >'.
                                        $file.
                                        '</a>
                                        </br>';
                            } ?>
                        </div>
                        <script language="JavaScript" type="text/javascript">
                            function selectFile(fileName){
                                $("#value").val(fileName);
                            }
                        </script>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>

