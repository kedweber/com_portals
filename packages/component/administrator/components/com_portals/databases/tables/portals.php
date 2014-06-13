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

class ComPortalsDatabaseTablePortals extends KDatabaseTableDefault
{
    protected function _initialize(KConfig $config)
    {
        $config->append(array(
            'behaviors' => array(
				'identifiable',
				'com://admin/moyo.database.behavior.sluggable',
				'orderable',
				'com://admin/moyo.database.behavior.creatable',
				'modifiable',
				'lockable',
                'com://admin/cck.database.behavior.elementable',
                'com://admin/taxonomy.database.behavior.relationable',
                'com://admin/translations.database.behavior.translatable',
                'com://admin/kutafuta.database.behavior.searchable',
            ),
            'filters' => array(
                'fields' => array('html')
            )
        ));

        parent::_initialize($config);
    }
}