<?php

/**
 * Com
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 * @category	
 * @package 	
 * @subpackage	
 */
 
 defined('KOOWA') or die('Restricted Access');

class ComPortalsDatabaseRowPortal extends KDatabaseRowDefault
{
    public function getCategory()
    {
        if (!$this->portals_category_id) {
            // Return empty category
            return $this->getService('com://site/portals.model.categories')->getItem();
        }

        return $this->getService('com://site/portals.model.categories')->id($this->portals_category_id)->getItem();
    }
}