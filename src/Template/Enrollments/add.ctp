<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="enrollments form large-9 medium-8 columns content">
    <?= $this->Form->create($enrollment) ?>
    <fieldset>
        <legend><?= __('Add Enrollment') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('participant_id', ['options' => $participants]);
            echo $this->Form->control('studio_id', ['options' => $studios]);
            echo $this->Form->control('payment_id', ['options' => $payments, 'empty' => true]);
            echo $this->Form->control('paid_amount');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
