<?php
/**
 * @var \App\View\AppView $this
 */
?>

<?= $this->Html->script('vendors/jquery-ui.min.js') ?>
<?= $this->Html->css('vendors/jquery-ui.min.css') ?>

<script>
    $( function() {
        var dateFormat = "mm/dd/yy",
            from = $( "#from" )
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3
                })
                .on( "change", function() {
                    to.datepicker( "option", "minDate", getDate( this ) );
                }),
            to = $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
                .on( "change", function() {
                    from.datepicker( "option", "maxDate", getDate( this ) );
                });

        function getDate( element ) {
            var date;
            try {
                date = $.datepicker.parseDate( dateFormat, element.value );
            } catch( error ) {
                date = null;
            }

            return date;
        }
    } );
</script>



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
                                        'placeholder' => 'Start Date',
                                        'id' => 'from'
                                    ]) ?>
                                </div>
                            </div>

<!--                            --><?//= $this->Form->control('start_date', ); ?>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    End Date:
                                    <?= $this->Form->text('end_date',
                                        [
                                            'class' => 'form-control col-md-5',
                                            'placeholder' => 'End Date',
                                            'id' => 'to'
                                        ]) ?>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    Start Time:
<!--                                    --><?//= $this->Form->text('start_time',
//                                        [
//                                            'class' => 'form-control col-md-5',
//                                            'placeholder' => 'Start Time'
//                                        ]) ?>
                                </div>
                            </div>
                            <?= $this->Form->control('start_time'); ?>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    End Time:
<!--                                    --><?//= $this->Form->text('end_time',
//                                        [
//                                            'class' => 'form-control col-md-5',
//                                            'placeholder' => 'End Time'
//                                        ]) ?>
                                </div>
                            </div>
                            <?= $this->Form->control('end_time'); ?>

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

