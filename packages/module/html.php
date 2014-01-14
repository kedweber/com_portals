<?php

class ModPortalsHtml extends ModDefaultHtml
{
	public function display()
	{
		$portals = $this->getService('com://admin/portals.model.portals')->getList();

		$this->assign('portals', $portals);

		return parent::display();
	}
}