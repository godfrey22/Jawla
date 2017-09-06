<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Studio[]|\Cake\Collection\CollectionInterface $studios
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Studio'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Teachers'), ['controller' => 'Teachers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Teacher'), ['controller' => 'Teachers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Class Types'), ['controller' => 'ClassTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Class Type'), ['controller' => 'ClassTypes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="studios index large-9 medium-8 columns content">
    <h3><?= __('Studios') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('teacher_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('class_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($studios as $studio): ?>
            <tr>
                <td><?= $this->Number->format($studio->id) ?></td>
                <td><?= $studio->has('event') ? $this->Html->link($studio->event->name, ['controller' => 'Events', 'action' => 'view', $studio->event->id]) : '' ?></td>
                <td><?= $studio->has('teacher') ? $this->Html->link($studio->teacher->name, ['controller' => 'Teachers', 'action' => 'view', $studio->teacher->id]) : '' ?></td>
                <td><?= $studio->has('class_type') ? $this->Html->link($studio->class_type->name, ['controller' => 'ClassTypes', 'action' => 'view', $studio->class_type->id]) : '' ?></td>
                <td><?= h($studio->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $studio->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $studio->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $studio->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studio->id)]) ?>
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
