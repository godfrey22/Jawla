<?php
/**
 * @var \App\View\AppView $this
 */
?>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Add Class Term - Classes Information
                    </div>
                    <div class="card-block information form-group">

                        <?= $this->Form->create($studio) ?>
                        <fieldset>
                            <legend><?= __('Setting up the class') ?></legend>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <?= $this->Form->control('teacher_id', ['options' => $teachers, 'class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        <?= $this->Form->control('class_type_id', ['options' => $classTypes, 'class' => 'form-control']); ?>
                                    </div>
                                </div>
                            </div>


                        </fieldset>

                    </div>
                    <div class="card-footer">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>


            </div>

        </div>

    </div>

