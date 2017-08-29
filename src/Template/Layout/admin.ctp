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
        body {
            background-image: url(<?= $this->Url->image('jalwa_bg.jpg'); ?>);
        }

        .app-header.navbar .navbar-brand {
            background-image: url(<?= $this->Url->image('admin/logo.png'); ?>);
        }
    </style>
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
<header class="app-header navbar">
    <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler sidebar-minimizer d-md-down-none" type="button">☰</button>

    <ul class="nav navbar-nav d-md-down-none">
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Dashboard</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Users</a>
        </li>
        <li class="nav-item px-3">
            <a class="nav-link" href="#">Settings</a>
        </li>
    </ul>
    <ul class="nav navbar-nav ml-auto">
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-bell"></i><span
                        class="badge badge-pill badge-danger">5</span></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-list"></i></a>
        </li>
        <li class="nav-item d-md-down-none">
            <a class="nav-link" href="#"><i class="icon-location-pin"></i></a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                <span class="d-md-down-none">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header text-center">
                    <strong>Account</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-bell-o"></i> Updates<span
                            class="badge badge-info">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-envelope-o"></i> Messages<span
                            class="badge badge-success">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-tasks"></i> Tasks<span
                            class="badge badge-danger">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-comments"></i> Comments<span
                            class="badge badge-warning">42</span></a>
                <div class="dropdown-header text-center">
                    <strong>Settings</strong>
                </div>
                <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                <a class="dropdown-item" href="#"><i class="fa fa-wrench"></i> Settings</a>
                <a class="dropdown-item" href="#"><i class="fa fa-usd"></i> Payments<span
                            class="badge badge-default">42</span></a>
                <a class="dropdown-item" href="#"><i class="fa fa-file"></i> Projects<span class="badge badge-primary">42</span></a>
                <div class="divider"></div>
                <a class="dropdown-item" href="#"><i class="fa fa-shield"></i> Lock Account</a>
                <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
            </div>
        </li>
    </ul>
    <button class="navbar-toggler aside-menu-toggler" type="button">☰</button>
</header>

<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="
                    <?=  $this->Url->build([
                        "controller" => "admin",
                        "action" => "home",
                    ]);
                    ?>"><i class="icon-speedometer"></i> Dashboard </a>
                </li>

                <li class="nav-title">
                    Content Management
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    <?=  $this->Url->build([
                        "controller" => "admin",
                        "action" => "details",
                    ]);
                    ?>"><i class="icon-puzzle"></i> Website Info
                        <span class="badge badge-primary">NEW</span>
                    </a>
                </li>
                <li class="divider"></li>


            </ul>
        </nav>
    </div>
    <?= $this->fetch('content') ?>

</div>
<footer class="app-footer">
    <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
    <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
</footer>
<?= $this->Html->script('admin/jquery/dist/jquery.min.js') ?>
<?= $this->Html->script('admin/popper.js/dist/umd/popper.js') ?>

<?= $this->Html->script('admin/bootstrap/dist/js/bootstrap.min.js') ?>
<?= $this->Html->script('admin/pace/pace.min.js') ?>
<?= $this->Html->script('admin/chart.js/dist/Chart.min.js') ?>
<?= $this->Html->script('admin/app.js') ?>
<?= $this->Html->script('admin/views/main.js') ?>
<?= $this->fetch('script') ?>

</html>
