<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Class Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="classTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($classType) ?>
    <fieldset>
        <legend><?= __('Add Class Type') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
