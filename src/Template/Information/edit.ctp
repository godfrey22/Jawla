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