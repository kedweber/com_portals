<div class="row">
    <? foreach($portals as $portal) : ?>
    <div class="col-xs-12">
        <header><h1><?= $portal->title; ?></h1></header>
    </div>
    <? endforeach; ?>
</div>