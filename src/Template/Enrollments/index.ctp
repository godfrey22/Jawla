<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Enrollment[]|\Cake\Collection\CollectionInterface $enrollments
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Enrollment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="enrollments index large-9 medium-8 columns content">
    <h3><?= __('Enrollments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('participant_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('studio_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('paid_amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($enrollments as $enrollment): ?>
            <tr>
                <td><?= $this->Number->format($enrollment->id) ?></td>
                <td><?= $enrollment->has('user') ? $this->Html->link($enrollment->user->id, ['controller' => 'Users', 'action' => 'view', $enrollment->user->id]) : '' ?></td>
                <td><?= $this->Number->format($enrollment->participant_id) ?></td>
                <td><?= $enrollment->has('studio') ? $this->Html->link($enrollment->studio->id, ['controller' => 'Studios', 'action' => 'view', $enrollment->studio->id]) : '' ?></td>
                <td><?= $enrollment->has('payment') ? $this->Html->link($enrollment->payment->id, ['controller' => 'Payments', 'action' => 'view', $enrollment->payment->id]) : '' ?></td>
                <td><?= $this->Number->format($enrollment->paid_amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $enrollment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $enrollment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $enrollment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollment->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
