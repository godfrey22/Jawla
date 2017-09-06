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
                        Website Content Management
                    </div>
                    <div class="card-block information form-group">

                        <?= $this->Form->create($event) ?>
                        <fieldset>
                            <legend><?= __('Add Event') ?></legend>
                            <div class="row">
                                <div class="col-md-12 mb-12">
                                Price:
                                <?= $this->Form->text('price',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Price'
                                    ]) ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 mb-12">
                                Type:
                                <?= $this->Form->text('type',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Type'
                                    ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                Name:
                                <?= $this->Form->text('name',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Name'
                                    ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                Start Date:
                                <?= $this->Form->text('start_date',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Start Date'
                                    ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    End Date:
                                    <?= $this->Form->text('end_date',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'End Date'
                                        ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    Start Time:
                                    <?= $this->Form->text('start_time',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'Start Time'
                                        ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    End Time:
                                    <?= $this->Form->text('end_time',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'End Time'
                                        ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    Capacity:
                                    <?= $this->Form->text('num_people',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'Capacity'
                                        ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    Notes:
                                    <?= $this->Form->textarea('notes',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'Notes'
                                        ]) ?>
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