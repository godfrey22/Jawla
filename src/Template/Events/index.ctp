<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>


<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div>
                        <i class="fa fa-align-justify"></i> Company Information
                        </div>
                        <div class="pull-right btn btn-primary">
                            <a class="nav-link" href="<?= $this->Url->build(["controller" => "events", "action" => "add"]); ?>" style="color:#FFFFFF">Add</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped table-sm table-responsive">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('end_date') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('class_interval') ?></th>

                                <th scope="col"><?= $this->Paginator->sort('start_time') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('end_time') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('num_people') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php foreach ($events as $event): ?>
                                <tr>
                                    <td><?= h($event->name) ?></td>
                                    <td><?= $this->Number->currency($event->price) ?></td>
                                    <td><?php if($event->type=='C'){echo 'Class'; }else {echo 'Party';} ?></td>
                                    <td><?= h($event->start_date->nice()) ?></td>
                                    <td><?= h($event->end_date->nice()) ?></td>
                                    <td><?php if($event->class_interval=='7'){echo 'Weekly'; }else {echo 'Fortnightly';} ?></td>
                                    <td><?= h($event->start_time->format('h:i A')) ?></td>
                                    <td><?= h($event->end_time->format('h:i A')) ?></td>
                                    <td><?= $this->Number->format($event->num_people) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
