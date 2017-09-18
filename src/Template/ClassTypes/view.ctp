<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClassType $classType
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Class Type'), ['action' => 'edit', $classType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Class Type'), ['action' => 'delete', $classType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Class Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Class Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Studios'), ['controller' => 'Studios', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Studio'), ['controller' => 'Studios', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classTypes view large-9 medium-8 columns content">
    <h3><?= h($classType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($classType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($classType->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Studios') ?></h4>
        <?php if (!empty($classType->studios)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('Teacher Id') ?></th>
                <th scope="col"><?= __('Class Type Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($classType->studios as $studios): ?>
            <tr>
                <td><?= h($studios->id) ?></td>
                <td><?= h($studios->event_id) ?></td>
                <td><?= h($studios->teacher_id) ?></td>
                <td><?= h($studios->class_type_id) ?></td>
                <td><?= h($studios->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Studios', 'action' => 'view', $studios->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Studios', 'action' => 'edit', $studios->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Studios', 'action' => 'delete', $studios->id], ['confirm' => __('Are you sure you want to delete # {0}?', $studios->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
