<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/10/2017
 * Time: 4:01 PM
 */ ?>


    <nav class="navbar navbar-inverse" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--<a class="navbar-brand" href="index.html"> <?/*= $this->Html->image('jalwa_logo_home.png',['alt'=>"logo",'height' => '80','width'=> '80']);*/?> </a>-->
            </div>

            <div class="collapse navbar-collapse navbar-left">
                <ul class="nav navbar-nav">
                    <li class="active"> <?php echo $this->Html->link('Home','/')?>
                    <li><?php echo $this->Html->link('Genres','/pages/construction')?></a></li>
                    <li><?php echo $this->Html->link('Dance Classes','/pages/construction')?></li>
                    <li> <?php echo $this->Html->link('Live Entertainment','/pages/construction')?></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hiring <i class="fa fa-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li> <?php echo $this->Html->link('Studio','/pages/construction')?></li>
                            <li><?php echo $this->Html->link('School Incursions','/pages/construction')?></li>
                            <li><?php echo $this->Html->link('Team Bonding','/pages/construction')?></li>
                            <li><?php echo $this->Html->link('Hen’s Nights','/pages/construction')?></li>
                          <li> <?php echo $this->Html->link('Kid’s Parties','/pages/construction')?></li>
                        </ul>
                    </li>
                    <!--<li><a href="blog.html">Blog</a></li>-->
                    <li><?php echo $this->Html->link('Contact Us','/contact/index')?></li>
                    <li></li>

                    <a class="collapse navbar-collapse navbar-left" href="payments/cart"> <?= $this->Html->image('cart.png',['alt'=>"logo",'height' => '35','width'=> '35']);?> </a>


                    <li>
                        <?= $this->Html->link("Login / Register",
                            array('controller' => 'Users', 'action' => 'login'));
                        ?>
                    </li>
                </ul>


            </div>
        </div><!--/.container-->
    </nav><!--/nav-->

