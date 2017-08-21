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
    <?= $this->fetch('script') ?>

    <style>
        /* this is an internal css, because the css is in this file, not linked from other files */
        body{
            background-image: url("img/jalwa_bg.jpg");
        }
        .bg-primary {
            background-color: #d8a72b !important;
        }
        .card.bg-primary {
            border-color: #d8a925;
        }
        .btn-primary:active, .btn-primary.active, .show > .btn-primary.dropdown-toggle {
            background-color: #af8613;
            background-image: none;
            border-color: #af8613;
        }
        .btn-primary {
            color: #fff;
            background-color: #af8613;
            border-color: #af8613;
        }
        .btn-primary:hover {
            color: #fff;
            background-color: #c79915;
            border-color: #c79915;
        }

        .btn-success {
            color: #fff;
            background-color: #af8613;
            border-color: #af8613;
        }
        .btn-success:hover {
            color: #fff;
            background-color: #c79915;
            border-color: #c79915;
        }

    </style>
</head>
<body class="app flex-row align-items-center">
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
