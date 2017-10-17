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
                        Enroll Class
                    </div>
                    <div class="card-block information form-group">

                        <?= $this->Form->create($enrollment) ?>
                        <fieldset>
                            <legend><?= __('Add Enrollment') ?></legend>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        Participant:
                                        <?=
                                        $this->Form->control('participant_id',
                                            [
                                                'options' => $participants,
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ]);
                                        ?>
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
