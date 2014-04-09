<?php

/**
 * ComPortals
 *
 * @author 		Joep van der Heijden <joep.van.der.heijden@moyoweb.nl>
 */
 
defined('KOOWA') or die('Restricted Access');

class JFormFieldCategorylist extends JFormField {
    protected $type = 'Categorylist';

    protected function getInput() {
        // Get all the content categories.
        //$categories = JHtml::_('category.options', 'com_content');

        return KService::get('com://admin/portals.template.helper.listbox')->categories(array(
            'name' => $this->name,
            'selected' => $this->value
        ));
    }
}