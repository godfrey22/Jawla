<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Studios'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Class Types'), ['controller' => 'ClassTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class Type'), ['controller' => 'ClassTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studios form large-9 medium-8 columns content">
    <?= $this->Form->create($studio) ?>
    <fieldset>
        <legend><?= __('Add Studio') ?></legend>
        <?php
            echo $this->Form->control('event_id', ['options' => $events, 'empty' => true]);
            echo $this->Form->control('teacher_id', ['options' => $teachers]);
            echo $this->Form->control('class_type_id', ['options' => $classTypes]);
            echo $this->Form->control('date', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
