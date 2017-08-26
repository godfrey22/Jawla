<?php
/**
  * @var \App\View\AppView $this
  */
?>
<div class="information form large-9 medium-8 columns content">
    <?= $this->Form->create($information) ?>
    <fieldset>
        <legend><?= __('Edit Information') ?></legend>
        <?php
            echo $this->Form->control('field');
            echo $this->Form->control('value');
        ?>
    </fieldset>
    <?php
        if ($information->id == 7 || $information->id == 8) {
            echo $this->Form->button(__('Choose'));
        }

    ?>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
