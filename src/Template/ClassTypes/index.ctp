<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClassType[]|\Cake\Collection\CollectionInterface $classTypes
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Class Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="classTypes index large-9 medium-8 columns content">
    <h3><?= __('Class Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classTypes as $classType): ?>
            <tr>
                <td><?= $this->Number->format($classType->id) ?></td>
                <td><?= h($classType->name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $classType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $classType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $classType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classType->id)]) ?>
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
