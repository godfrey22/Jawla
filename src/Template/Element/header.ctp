<?php ?>

<div class="wrapper">

    <div class="navbar" id="navbar">
        <a href="#" class="nav-toggle" id="nav-toggle"><i class="fa fa-bars" data-swap="fa fa-times"></i> Menu</a>
        <ul class="nav pull-left">
            <li class="current">
                <?php echo $this->Html->link('Home','/')?>
            </li>
            <li>
                <?php echo $this->Html->link('Genres','/pages/construction')?>
            </li>
            <li class="parent">
                <?php echo $this->Html->link('Dance Classes','/pages/construction')?>
                <ul class="sub-menu">
                    <?php echo $this->Html->link('Studio','/pages/construction')?>
                    <?php echo $this->Html->link('School Incursions','/pages/construction')?>
                    <?php echo $this->Html->link('Team Bonding','/pages/construction')?>
                    <?php echo $this->Html->link('Hen’s Nights','/pages/construction')?>
                    <?php echo $this->Html->link('Kid’s Parties','/pages/construction')?>

                </ul>
            </li>
            <li class="parent">
                <?php echo $this->Html->link('Live Entertainment','/pages/construction')?>
                <ul class="sub-menu">
                    <?php echo $this->Html->link('Functions, Festivals & Events','/pages/construction')?>
                    <?php echo $this->Html->link('School Incursions','/pages/construction')?>
                    <?php echo $this->Html->link('Kid’s Parties','/pages/construction')?>
                    <?php echo $this->Html->link('Hen’s Nights','/pages/construction')?>
                </ul>
            </li>
            <li class="parent">
                <?php echo $this->Html->link('Kids','/pages/construction')?>
                <ul class="sub-menu">
                    <?php echo $this->Html->link('Dance Classes','/pages/construction')?>
                    <?php echo $this->Html->link('School Incursions','/pages/construction')?>
                    <?php echo $this->Html->link('Kid’s Parties','/pages/construction')?>
                </ul>
            </li>
            <li>
                <?php echo $this->Html->link('Studio Hire','/pages/construction')?>
            </li><li>
                <?php echo $this->Html->link('Contact','/pages/construction')?>
            </li>
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

