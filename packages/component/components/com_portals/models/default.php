<?php
/**
 * ComPortals
 *
 * @author      Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */

class ComPortalsModelDefault extends ComDefaultModelDefault
{
    /**
     * @param KDatabaseQuery $query
     */
    protected function _buildQueryWhere(KDatabaseQuery $query)
    {
        parent::_buildQueryWhere($query);

        $query->where('tbl.enabled', '=', 1);
    }
}