<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
  */
?>
<div class="container-fluid">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <i class="fa fa-align-justify"></i> User Information
                    </div>
                    <div class="card-body">
                        <table class ="table table-bordered table-striped table-sm table-responsive" cellpadding="0" cellspacing="0">
                            <thead>
                            <tr>
                                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                                <th scope="col" class="actions"><?= __('Actions') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <td><?= h($user->password) ?></td>
                                    <td><?= h($user->created) ?></td>
                                    <td><?= h($user->modified) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.conainer-fluid -->


