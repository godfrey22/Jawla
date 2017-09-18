<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Studio $studio
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Studio'), ['action' => 'edit', $studio->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Studio'), ['action' => 'delete', $studio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studio->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Studios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Studio'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Class Types'), ['controller' => 'ClassTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class Type'), ['controller' => 'ClassTypes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="studios view large-9 medium-8 columns content">
    <h3><?= h($studio->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $studio->has('event') ? $this->Html->link($studio->event->name, ['controller' => 'Events', 'action' => 'view', $studio->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teacher') ?></th>
            <td><?= $studio->has('teacher') ? $this->Html->link($studio->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $studio->teacher->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class Type') ?></th>
            <td><?= $studio->has('class_type') ? $this->Html->link($studio->class_type->name, ['controller' => 'ClassTypes', 'action' => 'view', $studio->class_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($studio->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($studio->date) ?></td>
        </tr>
    </table>
</div>
