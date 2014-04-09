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

class ComPortalsModelPortals extends ComPortalsModelDefault
{
    /**
     * @param KConfig $config
     */
    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('featured', 'int')
            ->insert('portals_category_id', 'int');
    }

    /**
     * @param KDatabaseQuery $query
     */
    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        $state = $this->_state;

        parent::_buildQueryWhere($query);

		if($state->featured) {
			$query->where('tbl.featured', '=', $state->featured);
		}

        if($state->portals_category_id) {
            $query->where('tbl.portals_category_id', '=', $state->portals_category_id);

        }
    }
}