<?php

defined('_JEXEC') or die;

class ComPortalsRouter
{
    public static function getInstance()
    {
        static $instance;

        if (!$instance) {
            $instance = new ComPortalsRouter();
        }

        return $instance;
    }

	public function build(&$query)
	{
		$segments	= array();

		if($query['id'] && !$query['slug']) {
			if($query['view'] == 'portal') {
				$portal = KService::get('com://site/portals.model.portals')->id($query['id'])->getItem();

				$segments['slug'] = $portal->slug;
			}
		}

		return $segments;
	}

	public function parse($segments)
	{
		$vars = array();

		if($segments[0]) {
			return JError::raiseError(404, JText::_('COM_ARTICLES_NOT_FOUND'));
		}

		return $vars;
	}
}

function PortalsBuildRoute(&$query)
{
	return ComPortalsRouter::getInstance()->build($query);
}

function PortalsParseRoute($segments)
{
	return ComPortalsRouter::getInstance()->parse($segments);
}
