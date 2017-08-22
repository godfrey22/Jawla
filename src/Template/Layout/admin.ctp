<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'Test Admin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('admin/font-awesome.min.css') ?>
    <?= $this->Html->css('admin/simple-line-icons.css') ?>
    <?= $this->Html->css('admin/style.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>

    <style>
        /* this is an internal css, because the css is in this file, not linked from other files */
        body{
            background-image: url(<?php echo $this->Url->image('jalwa_bg.jpg'); ?>);
        }
    </style>
</head>
    <?= $this->fetch('content') ?>

    <?= $this->Html->script('admin/jquery/dist/jquery.min.js') ?>
    <?= $this->Html->script('admin/popper.js/dist/umd/popper.js') ?>

    <?= $this->Html->script('admin/bootstrap/dist/js/bootstrap.min.js') ?>
    <?= $this->Html->script('admin/pace/pace.min.js') ?>
    <?= $this->Html->script('admin/chart.js/dist/Chart.min.js') ?>
    <?= $this->Html->script('admin/app.js') ?>
    <?= $this->Html->script('admin/views/main.js') ?>
    <?= $this->fetch('script') ?>

</html>
