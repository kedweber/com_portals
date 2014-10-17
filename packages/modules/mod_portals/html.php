<?php

class ModPortalsHtml extends ModDefaultHtml
{
	/**
	 * @return ModDefaultHtml
	 */
	public function display()
	{
        $model = $this->getService('com://site/portals.model.portals');

        if ($this->module->params->featured) {
            $model->featuted(1);
        }

		$portals = $model->getList();

		$this->assign('portals', $portals);

		return parent::display();
	}
}