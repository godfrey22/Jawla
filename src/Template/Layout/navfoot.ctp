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
<?= $this->Flash->render() ?>

    <?= $this->fetch('content') ?>



</body>
<?= $this->element('footer') ?>
</html>
