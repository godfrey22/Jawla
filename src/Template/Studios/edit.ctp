<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Html->script('vendors/jquery-ui.min.js') ?>
<?= $this->Html->css('vendors/jquery-ui.min.css') ?>
<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Studio Information
                    </div>
                    <div class="card-body">
                        <div class="studios form large-9 medium-8 columns content">
                            <?= $this->Form->create($studio) ?>
                            <fieldset>
                                <legend><?= __('Edit Studio') ?></legend>

                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group">
                                            <?= $this->Form->control('event_id', ['options' => $events, 'empty' =>
                                                true, 'class' => 'form-control col-md-5']); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group">
                                            <?= $this->Form->control('teacher_id', ['options' => $teachers,
                                                'class' => 'form-control col-md-5']); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group">
                                            <?= $this->Form->control('class_type_id', ['options' =>
                                                $classTypes, 'class' => 'form-control col-md-5']); ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12 mb-12">
                                        <div class="form-group">
                                            Date:
                                            <?= $this->Form->text('date',
                                                [
                                                    'class' => 'form-control col-md-5',
                                                    'placeholder' => 'Date',
                                                    'id' => 'datepicker'
                                                ])

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <?= $this->Form->button(__('Submit'),['class' => 'btn btn-primary']) ?>
                            <?= $this->Form->end() ?>
                        </div>
