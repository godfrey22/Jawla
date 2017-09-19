
<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 15/09/2017
 * Time: 12:41 PM
 */



$this->layout = false; ?>






<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form Template</title>




    <?= $this->Html->css('Password/bootstrap.min') ?>
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css') ?>
    <?= $this->Html->css('Password/form-elements') ?>
    <?= $this->Html->css('Password/style') ?>


    <?= $this->Html->script('jquery-1.11.1.min') ?>
    <?= $this->Html->script('bootstrap.min') ?>
    <?= $this->Html->script('jquery.backstretch.min') ?>
    <?= $this->Html->script('scripts') ?>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>

<body background="https://ak8.picdn.net/shutterstock/videos/18933008/thumb/1.jpg?i10c=img.resize(height:160)" >


<div class="top-content">
    <div class="inner-bg">
        <div class="container">
            <div class="row">

            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Reset Password</h3>
                            <p>Please enter a new password:</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-lock"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                       <?= $this->assign('title', 'Reset Password'); ?>
                        <?php echo $this->Form->create($user) ?>
                        <form role="form" action="" method="post" class="login-form">
                            <div class="form-group">
                                <?= $this->Form->input('password', ['required' => true, 'autofocus' => true,'class' => 'form-control', 'Placeholder' => 'Password']) ?>
                            </div>
                            <div class="form-group">
                                <?= $this->Form->input('confirm_password', ['type' => 'password', 'required' => true,'class' => 'form-control', 'Placeholder' => 'Confirm Password']) ?>
                            </div>
                            <?php echo $this->Form->button('Submit', ['class' => 'btn']) ?>
                            <?= $this->Flash->render();?>

                            <?php echo $this->Form->end(); ?>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



</body>



</html>
