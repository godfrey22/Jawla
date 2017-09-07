<div class="wrapper">

    <div class="navbar" id="navbar">
        <a href="#" class="nav-toggle" id="nav-toggle"><i class="fa fa-bars" data-swap="fa fa-times"></i> Menu</a>
        <ul class="nav pull-left">
            <li class="current"><a href="http://www.jalwadancecompany.com/">Home</a></li>
            <li><a href="http://www.jalwadancecompany.com/genres/">Genres</a></li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/classes/">Dance Classes</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/classes/">Studio</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/school-incursions/">School Incursions</a></li>
                    <li><a href="http://www.jalwadancecompany.com/team-bonding/">Team Bonding</a></li>
                    <li><a href="http://www.jalwadancecompany.com/hens-nights/">Hen’s Nights</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                </ul>
            </li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/live-entertainment/">Live Entertainment</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/functions-festivals-events/">Functions, Festivals
                            &amp; Events</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                    <li><a href="http://www.jalwadancecompany.com/hens-nights/">Hen’s Nights</a></li>
                </ul>
            </li>
            <li class="parent"><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kids</a>
                <ul class="sub-menu">
                    <li><a href="http://www.jalwadancecompany.com/classes/">Dance Classes</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/kids-parties/">Kid’s Parties</a></li>
                    <li><a href="http://www.jalwadancecompany.com/kids/school-incursions/">School Incursions</a></li>
                </ul>
            </li>
            <li><a href="http://www.jalwadancecompany.com/studio-hire/">Studio Hire</a></li>
            <li><a href="http://www.jalwadancecompany.com/contact/">Contact</a></li>
        </ul>
        <ul class="social pull-right">
            <li><a href="tel:0423652338"><i class="fa fa-phone"></i><span>
                        <?= h($information[0]->value) ?>
                    </span></a></li>
            <li>
                <?= $this->Html->link("Login / Register",
                    array('controller' => 'Users', 'action' => 'login'));
                ?>
            </li>
        </ul>
        <div class="clear"></div>
    </div>



<body class="app flex-row align-items-center">
<style>
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

<div class="employees view large-9 medium-8 columns content">
    <?= $this->Form->create($contact); ?>
    <?= $this->Form->input('name'); ?>
    <?= $this->Form->input('email'); ?>
    <?= $this->Form->input('body'); ?>
    <?= $this->Form->button('Submit'); ?>
    <?= $this->Form->end(); ?>
</div>

<div class="footer">

    <div class="container">
        <div class="clear"></div>

        <div class="attribution">

            <p class="pull-left">A passion for cultures, irresistibly contagious </p>

            <p class="pull-right">Copyright © <?= h($information[1]->value) ?> | ABN <?= h($information[2]->value) ?>
                | <?= h($information[3]->value) ?>
                O<?= h($information[4]->value) ?></p>
            <div class="clear"></div>
        </div>

    </div>