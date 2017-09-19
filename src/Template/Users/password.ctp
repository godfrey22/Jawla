<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 15/09/2017
 * Time: 12:41 PM
 */




$this->layout="f-password";
echo $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css');
$this->assign('title', 'Request Password Reset'); ?><div class="users content">
    <h3><?php echo __('Forgot Password'); ?></h3>
    <?php
    echo $this->Form->create();
    echo $this->Form->input('email', ['autofocus' => true, 'label' => 'Email address', 'required' => true]);
    echo $this->Form->button('Request reset email');
    echo $this->Form->end();
    ?>
</div>