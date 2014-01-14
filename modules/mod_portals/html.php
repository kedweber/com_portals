<?php

class ModPortalsHtml extends ModDefaultHtml
{
	public function display()
	{
		$portals = $this->getService('com://site/portals.model.portals')->getList();

		$this->assign('portals', $portals);

		return parent::display();
	}
}