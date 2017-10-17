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
                            <?php
                            //echo $this->Form->control('user_id', ['options' => $users]);
                            echo $this->Form->control('participant_id', ['options' => $participants]);
                            //echo $this->Form->control('studio_id', ['options' => $studios]);
                            //echo $this->Form->control('payment_id', ['options' => $payments, 'empty' => true]);
                            //echo $this->Form->control('paid_amount');
                            ?>
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
