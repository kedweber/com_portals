<?php

class ComPortalsViewPortalHtml extends ComDefaultViewHtml
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'template_filters' => array('module'),
        ));

        parent::_initialize($config);
    }
}
