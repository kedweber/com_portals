<?php

class ComPortalsViewCategoryHtml extends ComDefaultViewHtml
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
        $category = $this->getModel()->getItem();

        $portals = $this->getService('com://site/portals.model.portals')->portals_category_id($category->id)->getList();

        $this->assign('category', $category);
        $this->assign('portals', $portals);

        return parent::display();
    }
}
