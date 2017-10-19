<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Attendance $attendance
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Attendance'), ['action' => 'edit', $attendance->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Attendance'), ['action' => 'delete', $attendance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $attendance->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Attendances'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Attendance'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="attendances view large-9 medium-8 columns content">
    <h3><?= h($attendance->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Studio') ?></th>
            <td><?= $attendance->has('studio') ? $this->Html->link($attendance->studio->id, ['controller' => 'Studios', 'action' => 'view', $attendance->studio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $attendance->has('user') ? $this->Html->link($attendance->user->id, ['controller' => 'Users', 'action' => 'view', $attendance->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($attendance->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Attended') ?></th>
            <td><?= $this->Number->format($attendance->attended) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Class Remain') ?></th>
            <td><?= $this->Number->format($attendance->class_remain) ?></td>
        </tr>
    </table>
</div>
