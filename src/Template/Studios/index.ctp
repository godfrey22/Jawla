<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Studio[]|\Cake\Collection\CollectionInterface $studios
  */
?>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Company Information
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm table-responsive">
        <thead>
            <tr>
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
