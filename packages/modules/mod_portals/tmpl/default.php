<div class="portals">
    <h3><?= $module->title; ?></h3>
    <div class="row">
        <div class="col-sm-11 col-xs-12">
        <? foreach($portals as $portal) : ?>
            <a class="btn btn-default portal" href="<?= substr($portal->url, 0 , 7) === 'http://' ? $portal->url : 'http://' . $portal->url; ?>" target="_blank"><?= $portal->title; ?></a>
        <? endforeach; ?>
        </div>
        <div class="col-xs-1">
            <a href="http://ec.europa.eu/europeaid/index_en.htm" target="_blank" rel="nofollow">
                <?= @service('com://admin/cloudinary.controller.image')->path('/media/mod_portals/images/eu.gif')->height(32)->crop('fit')->attribs(array('class' => 'portal portal-img', 'alt' => 'eu'))->display(); ?>
            </a>
            <a href="http://www.acp.int/" target="_blank" rel="nofollow">
                <?= @service('com://admin/cloudinary.controller.image')->path('/media/mod_portals/images/acp-logo.gif')->height(32)->crop('fit')->attribs(array('class' => 'portal portal-img', 'alt' => 'acp'))->display(); ?>
            </a>
        </div>
    </div>
</div>