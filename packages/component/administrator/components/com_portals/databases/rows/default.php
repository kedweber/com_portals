<?php
/**
 * ComPortals
 *
 * @author      Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 * @category    Nooku
 * @package
 * @subpackage  ...
 * @uses        com_cck, com_taxonomy
 */
 
defined('KOOWA') or die('Protected resource');

class ComPortalsDatabaseRowDefault extends KDatabaseRowDefault
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