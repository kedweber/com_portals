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
    /**
     * @param $column
     * @return string
     */
    public function __get($column)
    {
        $result = parent::__get($column);

        if(!array_key_exists($column, $this->_data)) {
            if($this->isElementable()) {
                $result = $this->getElement($column)->value;
            }
        }

        return $result;
    }
}