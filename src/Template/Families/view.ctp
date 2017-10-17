<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Family $family
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Family'), ['action' => 'edit', $family->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Family'), ['action' => 'delete', $family->id], ['confirm' => __('Are you sure you want to delete # {0}?', $family->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="families view large-9 medium-8 columns content">
    <h3><?= h($family->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($family->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Users') ?></h4>
        <?php if (!empty($family->users)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Email') ?></th>
                <th scope="col"><?= __('Password') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('First Name') ?></th>
                <th scope="col"><?= __('Last Name') ?></th>
                <th scope="col"><?= __('Mobile') ?></th>
                <th scope="col"><?= __('School') ?></th>
                <th scope="col"><?= __('Dob') ?></th>
                <th scope="col"><?= __('House No') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('Suburb') ?></th>
                <th scope="col"><?= __('Postcode') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col"><?= __('G Fname') ?></th>
                <th scope="col"><?= __('G Lname') ?></th>
                <th scope="col"><?= __('G Email') ?></th>
                <th scope="col"><?= __('G Mobile') ?></th>
                <th scope="col"><?= __('P Consent') ?></th>
                <th scope="col"><?= __('Medical') ?></th>
                <th scope="col"><?= __('Passkey') ?></th>
                <th scope="col"><?= __('Timeout') ?></th>
                <th scope="col"><?= __('Family Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($family->users as $users): ?>
            <tr>
                <td><?= h($users->id) ?></td>
                <td><?= h($users->email) ?></td>
                <td><?= h($users->password) ?></td>
                <td><?= h($users->created) ?></td>
                <td><?= h($users->modified) ?></td>
                <td><?= h($users->first_name) ?></td>
                <td><?= h($users->last_name) ?></td>
                <td><?= h($users->mobile) ?></td>
                <td><?= h($users->school) ?></td>
                <td><?= h($users->dob) ?></td>
                <td><?= h($users->house_no) ?></td>
                <td><?= h($users->street) ?></td>
                <td><?= h($users->suburb) ?></td>
                <td><?= h($users->postcode) ?></td>
                <td><?= h($users->state) ?></td>
                <td><?= h($users->country) ?></td>
                <td><?= h($users->g_fname) ?></td>
                <td><?= h($users->g_lname) ?></td>
                <td><?= h($users->g_email) ?></td>
                <td><?= h($users->g_mobile) ?></td>
                <td><?= h($users->p_consent) ?></td>
                <td><?= h($users->medical) ?></td>
                <td><?= h($users->passkey) ?></td>
                <td><?= h($users->timeout) ?></td>
                <td><?= h($users->family_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
