<?php

/**
 * Com
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */
 
 defined('KOOWA') or die('Restricted Access'); ?>

<div class="row">
    <div class="col-xs-12"><header><h1><?= $category->title; ?></h1></header></div>
</div>
<div class="row">
    <? foreach($portals as $portal): ?>
    <div class="col-xs-12">
        <header><h2><?= $portal->title; ?></h2></header>
    </div>
    <? endforeach; ?>
</div>