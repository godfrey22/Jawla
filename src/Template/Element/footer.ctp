<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/10/2017
 * Time: 4:51 PM
 */ ?>

<footer id="footer" class="midnight-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
               <!-- <p class="pull-left-">A passion for cultures, irresistibly contagious </p>-->
            </div>
            <p class="pull-left-">A passion for cultures, irresistibly contagious </p>
            <p class="pull-right">Copyright © <?= h($information[1]->value) ?> | ABN <?= h($information[2]->value) ?>
                | <?= h($information[3]->value) ?>
                |<?= h($information[4]->value) ?></p>


        </div>
        <div class="clear"></div>
    </div>
</footer><!--/#footer-->
