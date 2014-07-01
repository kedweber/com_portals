<?php

defined('KOOWA') or die('Protected resource');

class ComPortalsViewPortalHtml extends ComDefaultViewHtml
{
	/**
	 * @param KConfig $config
	 */
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

		header('X-Portal-ID: '.$portal->id);

		$doc =& JFactory::getDocument();
		if($portal->title) {
			$doc->setTitle($portal->title);
		}

		if($portal->meta_keywords) {
			$doc->setMetaData('Keywords', $portal->meta_keywords);
		}

		if($portal->meta_description) {
			$doc->setMetaData('Description', $portal->meta_description);
		}

		//TODO: Check if itemId
		$pathway = JFactory::getApplication()->getPathway();

		if(!JApplication::getInstance('site')->getMenu()->getItems('link', 'index.php?option=com_portals&view=portal&id='.$portal->id, true)) {
			$category = $this->getService('com://site/portals.model.categories')->id($portal->portals_category_id)->getItem();

			if($category->id) {
				$item = JApplication::getInstance('site')->getMenu()->getItems('link', 'index.php?option=com_portals&view=category&id='.$category->id, true);

				if($item) {
					$i = 0;
					foreach(explode('/', $item->route) as $part) {
						$pathway->addItem(ucfirst($part), 'index.php?Itemid='.$item->tree[$i]);
						$i++;
					}
				}

				$pathway->addItem($portal->title);
			}
		}

		return parent::display();
	}
}