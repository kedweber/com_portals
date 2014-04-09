<?php

class ModPortalsHtml extends ModDefaultHtml
{
	public function display()
	{
        $portalsModel = $this->getService('com://admin/portals.model.portals');

        if ($this->module->params->featured) {
            $portalsModel->featuted(1);
        }
		$portals = $portalsModel->getList();

		$this->assign('portals', $portals);

		return parent::display();
	}
}