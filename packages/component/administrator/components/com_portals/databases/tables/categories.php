<?php

class ComPortalsDatabaseTableCategories extends KDatabaseTableDefault
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
                'com://admin/taxonomy.database.behavior.relationable',
                'com://admin/translations.database.behavior.translatable',
            )
        ));

        parent::_initialize($config);
    }
}