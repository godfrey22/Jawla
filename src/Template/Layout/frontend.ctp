<?php
/**
 * Created by PhpStorm.
 * User: David
 * Date: 17/10/2017
 * Time: 4:39 PM
 */    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?= $this->element('head') ?>
</head>

<body  class="homepage">
<header id="header">

    <?= $this->element('header') ?>
</header>

<section id="main-slider" class="no-margin">

    <?= $this->element('homeslider') ?>
</section>


<section id="recent-works">
        <?= $this->element('homesec2') ?>
        </section>


<?= $this->fetch('content') ?>

        <?= $this->element('footer') ?>


</body>

</html>
