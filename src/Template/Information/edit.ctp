<?php
/**
 * @var \App\View\AppView $this
 */

use Cake\Filesystem\Folder;
use Cake\Filesystem\File;

?>



    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            Website Content Management
                        </div>
                        <div class="card-block information form-group">

                            <?= $this->Form->create($information) ?>
                            <?php
                            if ($information->id == 7 || $information->id == 8) {
                            $dir = new Folder(WWW_ROOT . 'img/home');
                            $files = $dir->find('.*\.png|jpg', true);
                            ?>
                            <fieldset class="form-control">
                                <legend><?= "Edit Information" ?></legend>
                                <?php
                                echo $this->Form->control('value',
                                    [
                                        'label' => $information->field,
                                        'class' => "form-control",
                                        'readonly' => true
                                    ]);
                                ?>
                            </fieldset>
                            <img src="<?= $this->Url->image('home/' . $information['value']) ?>" alt=""
                                 class="img-thumbnail form-control" id="thumbnail"
                                 width="300" height="200">

                        </div>

                        <div class="card-footer">
                            <!-- Button trigger modal -->

                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#myModal">
                                Choose
                            </button>

                            <?php
                            } else {
                            ?>

                            <fieldset>
                                <legend><?= "Edit Information" ?></legend>
                                <?php
                                echo $this->Form->control('value',
                                    [
                                        'label' => $information->field,
                                        'class' => "form-control"
                                    ]);
                                ?>
                            </fieldset>
                        </div>
                        <div class="card-footer">
                            <?php
                            }
                            ?>

                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>


                </div>

            </div>

        </div>
        <!-- /.conainer-fluid -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Available Images</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php foreach ($files as $file) {
                            echo '<a href="#" onclick=selectFile("' . $file . '") data-dismiss="modal" >' .
                                $file .
                                '</a>
                                        </br>';
                        } ?>
                    </div>
                    <script language="JavaScript" type="text/javascript">
                        function selectFile(fileName) {
                            $("#value").val(fileName);
                            var imgDir = "<?= $this->Url->image('home/')?>";
                            $("#thumbnail").attr("src", imgDir + fileName);
                        }
                    </script>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>