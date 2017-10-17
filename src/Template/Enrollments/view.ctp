<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Enrollment $enrollment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Enrollment'), ['action' => 'edit', $enrollment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Enrollment'), ['action' => 'delete', $enrollment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="enrollments view large-9 medium-8 columns content">
    <h3><?= h($enrollment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $enrollment->has('user') ? $this->Html->link($enrollment->user->id, ['controller' => 'Users', 'action' => 'view', $enrollment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Participant') ?></th>
            <td><?= $enrollment->has('participant') ? $this->Html->link($enrollment->participant->id, ['controller' => 'Users', 'action' => 'view', $enrollment->participant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Studio') ?></th>
            <td><?= $enrollment->has('studio') ? $this->Html->link($enrollment->studio->id, ['controller' => 'Studios', 'action' => 'view', $enrollment->studio->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment') ?></th>
            <td><?= $enrollment->has('payment') ? $this->Html->link($enrollment->payment->id, ['controller' => 'Payments', 'action' => 'view', $enrollment->payment->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($enrollment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Paid Amount') ?></th>
            <td><?= $this->Number->format($enrollment->paid_amount) ?></td>
        </tr>
    </table>
</div>
