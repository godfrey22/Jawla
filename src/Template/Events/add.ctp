<?php
/**
 * @var \App\View\AppView $this
 */
?>

<?= $this->Html->script('vendors/jquery-ui.min.js') ?>
<?= $this->Html->css('vendors/jquery-ui.min.css') ?>

<script>
    $(function () {
        var dateFormat = "mm/dd/yy",
            from = $("#from")
                .datepicker({
                    defaultDate: "+1w",
                    changeMonth: true,
                    numberOfMonths: 3
                })
                .on("change", function () {
                    to.datepicker("option", "minDate", getDate(this));
                }),
            to = $("#to").datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 3
            })
                .on("change", function () {
                    from.datepicker("option", "maxDate", getDate(this));
                });

        function getDate(element) {
            var date;
            try {
                date = $.datepicker.parseDate(dateFormat, element.value);
            } catch (error) {
                date = null;
            }

            return date;
        }
    });
</script>


<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        Add Class Term
                    </div>
                    <div class="card-block information form-group">

                        <?= $this->Form->create($event) ?>
                        <fieldset>
                            <legend><?= __('Add Class Term') ?></legend>


                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        Name:
                                        <?= $this->Form->text('name',
                                            [
                                                'class' => 'form-control col-md-5',
                                                'placeholder' => 'Name'
                                            ]) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        Price:
                                        <?= $this->Form->text('price',
                                            [
                                                'class' => 'form-control col-md-5',
                                                'placeholder' => 'Price',
                                                'type' => 'number',
                                                'min' => '0'
                                            ]) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        Start Date:
                                        <?= $this->Form->text('start_date',
                                            [
                                                'class' => 'form-control col-md-5',
                                                'placeholder' => 'Start Date',
                                                'id' => 'from'
                                            ]) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        End Date:
                                        <?= $this->Form->text('end_date',
                                            [
                                                'class' => 'form-control col-md-5',
                                                'placeholder' => 'End Date',
                                                'id' => 'to'
                                            ]) ?>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 mb-12">
                                    <div class="form-group">
                                        Interval:
                                        <?=
                                        $this->Form->select('class_interval', ['7' => 'Weekly', '14' => 'Fortnightly'],
                                            [
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ]
                                        )
                                        ;
                                        ?>
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="form-group col-md-12 mb-12">
                                    Start Time:
                                    <?= $this->Form->time('start_time',
                                        [
                                            'interval' => 15,
                                            'empty' => [
                                                'hour' => 'hh',
                                                'minute' => 'mm'
                                            ],
                                            'hour' => [
                                                'start' => 7,
                                                'end' => 22,
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ],
                                            'minute' => [
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ],
                                        ]); ?>
                                </div>
                                <div class="form-group col-md-12 mb-12">
                                    End Time:
                                    <?= $this->Form->time('end_time',
                                        [
                                            'interval' => 15,
                                            'empty' => [
                                                'hour' => 'hh',
                                                'minute' => 'mm'
                                            ],
                                            'hour' => [
                                                'start' => 7,
                                                'end' => 22,
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ],
                                            'minute' => [
                                                'class' => 'custom-select',
                                                'style' => 'width:100px;'
                                            ],
                                        ]); ?>
                                </div>
                            </div>

                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="form-group">
                                Capacity:
                                <?= $this->Form->text('num_people',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Capacity',
                                        'value' => 20
                                    ]) ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-12">
                            <div class="form-group">
                                Notes:
                                <?= $this->Form->textarea('notes',
                                    [
                                        'class' => 'form-control col-md-5',
                                        'placeholder' => 'Notes'
                                    ]) ?>
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

