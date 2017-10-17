<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Payment $payment
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Payment'), ['action' => 'edit', $payment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Payment'), ['action' => 'delete', $payment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Enrollments'), ['controller' => 'Enrollments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Enrollment'), ['controller' => 'Enrollments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="payments view large-9 medium-8 columns content">
    <h3><?= h($payment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($payment->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Enrollments') ?></h4>
        <?php if (!empty($payment->enrollments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Participant Id') ?></th>
                <th scope="col"><?= __('Studio Id') ?></th>
                <th scope="col"><?= __('Payment Id') ?></th>
                <th scope="col"><?= __('Paid Amount') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($payment->enrollments as $enrollments): ?>
            <tr>
                <td><?= h($enrollments->id) ?></td>
                <td><?= h($enrollments->user_id) ?></td>
                <td><?= h($enrollments->participant_id) ?></td>
                <td><?= h($enrollments->studio_id) ?></td>
                <td><?= h($enrollments->payment_id) ?></td>
                <td><?= h($enrollments->paid_amount) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Enrollments', 'action' => 'view', $enrollments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Enrollments', 'action' => 'edit', $enrollments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Enrollments', 'action' => 'delete', $enrollments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $enrollments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
