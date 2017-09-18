<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\ClassType[]|\Cake\Collection\CollectionInterface $classTypes
  */
?>

<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> Company Information
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm table-responsive">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($classTypes as $classType): ?>
            <tr>
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
