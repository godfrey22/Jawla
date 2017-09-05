<nav class="large-3 medium-4 columns" id="actions-sidebar">
    ...
    (your sidebar navigation goes here)
    ...
</nav>
</div>
<div class="employees view large-9 medium-8 columns content">
    <?= $this->Form->create($contact); ?>
    <?= $this->Form->input('name'); ?>
    <?= $this->Form->input('email'); ?>
    <?= $this->Form->input('body'); ?>
    <?= $this->Form->button('Submit'); ?>
    <?= $this->Form->end(); ?>
</div>