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

    <?= $this->Html->script('admin/jquery/dist/jquery.min.js') ?>

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
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button"
               aria-haspopup="true" aria-expanded="false">
                <img src="<?= $this->Url->image('admin/avatars/6.jpg'); ?>" class="img-avatar"
                     alt="admin@bootstrapmaster.com">
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
                <a class="dropdown-item"
                   href="<?= $this->Url->build(["controller" => "users", "action" => "logout"]); ?>"><i
                            class="fa fa-lock"></i> Logout</a>

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
                    <?= $this->Url->build([
                        "controller" => "dashboard"
                    ]);
                    ?>"><i class="icon-speedometer"></i> Dashboard </a>
                </li>

                <li class="nav-title">
                    Content Management
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="
                    <?= $this->Url->build([
                        "controller" => "dashboard",
                        "action" => "details"
                    ]);
                    ?>"><i class="icon-info"></i> Website Info
                        <span class="badge badge-primary">NEW</span>
                    </a>
                </li>
                <li class="divider"></li>

                <li class="nav-title">
                    Administration
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user-plus"></i> Account</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "users", "action" => "index"]); ?>"
                               target="_top"><i class="fa fa-user"></i> Individual</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "users", "action" => "index2"]); ?>"
                               target="_top"><i class="fa fa-users"></i>
                                Family<span class="badge badge-primary">NEW</span></a>
                        </li>

                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle"><i
                                class="fa fa-calendar-o"></i> Classes</a>
                    <ul class="nav-dropdown-items">

                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "events", "action" => "index"]); ?>"><i
                                        class="fa fa-calendar-plus-o"></i> All Classes</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "studios", "action" => "index"]); ?>"
                               target="_top"><i class="fa fa-calendar"></i> Class Timetable</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "teachers", "action" => "index"]); ?>"
                               target="_top"><i class="fa fa-graduation-cap"></i>
                                Teacher<span class="badge badge-primary">NEW</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "classTypes", "action" => "index"]); ?>"
                               target="_top"><i class="fa fa-tasks"></i>
                                Class Type<span class="badge badge-primary">NEW</span></a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-user-plus"></i> Enrollment</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "users1", "action" => "index1"]); ?>"
                               target="_top"><i class="fa fa-user"></i> Individual</a>

                        </li>
                        <li class="nav-item">
                            <a class="nav-link"
                               href="<?= $this->Url->build(["controller" => "users1", "action" => "index21"]); ?>"
                               target="_top"><i class="fa fa-users"></i>
                                Family<span class="badge badge-primary">NEW</span></a>
                        </li>

                    </ul>
                </li>


            </ul>
        </nav>
    </div>

    <main class="main">

        <!-- Breadcrumb -->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="
                <?= $this->Url->build([
                    "controller" => "dashboard"
                ]);
                ?>">Admin</a>
            </li>
            <li class="breadcrumb-item active">Dashboard</li>

            <!-- Breadcrumb Menu-->
            <li class="breadcrumb-menu d-md-down-none">
                <div class="btn-group" role="group" aria-label="Button group">
                    <a class="btn" href="#"><i class="icon-speech"></i></a>
                    <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
                    <a class="btn" href="#"><i class="icon-settings"></i> &nbsp;Settings</a>
                </div>
            </li>
        </ol>


        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </main>

    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i class="icon-list"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i class="icon-speech"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i class="icon-settings"></i></a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                    <small><b>Today</b>
                    </small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout callout-warning m-0 py-3">
                    <div class="avatar float-right">
                        <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                             alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Meeting with
                        <strong>Lucas</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-info m-0 py-3">
                    <div class="avatar float-right">
                        <img src="<?= $this->Url->image('admin/avatars/4.jpg'); ?>" class="img-avatar"
                             alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Skype with
                        <strong>Megan</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                    <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout m-0 py-2 text-muted text-center bg-light text-uppercase">
                    <small><b>Tomorrow</b>
                    </small>
                </div>
                <hr class="transparent mx-3 my-0">
                <div class="callout callout-danger m-0 py-3">
                    <div>New UI Project -
                        <strong>deadline</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/2.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/3.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/4.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/5.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/6.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-success m-0 py-3">
                    <div>
                        <strong>#10 Startups.Garden</strong>Meetup
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                </div>
                <hr class="mx-3 my-0">
                <div class="callout callout-primary m-0 py-3">
                    <div>
                        <strong>Team meeting</strong>
                    </div>
                    <small class="text-muted mr-3"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                    <div class="avatars-stack mt-2">
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/2.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/3.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/4.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/5.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/6.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="<?= $this->Url->image('admin/avatars/8.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="mx-3 my-0">
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...
                    </small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...
                    </small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...
                    </small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...
                    </small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="avatar">
                            <img src="<?= $this->Url->image('admin/avatars/7.jpg'); ?>" class="img-avatar"
                                 alt="admin@bootstrapmaster.com">
                            <span class="avatar-status badge-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted float-right mt-1">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...
                    </small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>

                <div class="aside-options">
                    <div class="clearfix mt-4">
                        <small><b>Option 1</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input" checked="">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </small>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 2</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </small>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 3</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <div class="aside-options">
                    <div class="clearfix mt-3">
                        <small><b>Option 4</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm float-right">
                            <input type="checkbox" class="switch-input" checked="">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>

                <hr>
                <h6>System Utilization</h6>

                <div class="text-uppercase mb-1 mt-4">
                    <small><b>CPU Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>Memory Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>SSD 1 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>

                <div class="text-uppercase mb-1 mt-2">
                    <small><b>SSD 2 Usage</b>
                    </small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 10%" aria-valuenow="10"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>
</div>
<footer class="app-footer">
    <a href="http://coreui.io">CoreUI</a> © 2017 creativeLabs.
    <span class="float-right">Powered by <a href="http://coreui.io">CoreUI</a>
        </span>
</footer>

<?= $this->Html->script('admin/popper.js/dist/umd/popper.js') ?>

<?= $this->Html->script('admin/bootstrap/dist/js/bootstrap.min.js') ?>
<?= $this->Html->script('admin/pace/pace.min.js') ?>
<?= $this->Html->script('admin/chart.js/dist/Chart.min.js') ?>
<?= $this->Html->script('admin/app.js') ?>
<?= $this->Html->script('admin/views/main.js') ?>
<?= $this->fetch('script') ?>

</html>
