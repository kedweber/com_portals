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

    public function display()
    {
        $portal = $this->getModel()->getItem();

        //TODO: Check if itemId
        $pathway = JFactory::getApplication()->getPathway();

        if(!JApplication::getInstance('site')->getMenu()->getItems('link', 'index.php?option=com_portals&view=portal&id='.$portal->id, true)) {
            if($portal->portals_category_id) {
                $category = $this->getService('com://site/portals.model.categories')->id($portal->portals_category_id)->getItem();

                $item = JApplication::getInstance('site')->getMenu()->getItems('link', 'index.php?option=com_portals&view=category&id='.$category->id, true);

                if($item) {
                    $i = 0;
                    foreach(explode('/', $item->route) as $part) {
                        $pathway->addItem(ucfirst($part), 'index.php?Itemid='.$item->tree[$i]);
                        $i++;
                    }
                } else {
                    if(!JSite::getMenu()->getActive()->id) {
                        $pathway->addItem($category->title, JRoute::_('index.php?option=com_portals&view=category&slug=' . $category->slug));
                    }
                }

                $pathway->addItem($portal->title);
            }
        }

        return parent::display();
    }
}
