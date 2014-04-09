-- ----------------------------
--  Table structure for `#__portals_portals`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `#__portals_portals` (
  `portals_portal_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) NOT NULL,
  `portals_category_id` int(11) unsigned,
  `cck_fieldset_id` int(11) NOT NULL DEFAULT '1300',
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'portal',
  `ordering` bigint(20) unsigned NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`portals_portal_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
--  Table structure for `#__portals_categories`
-- ----------------------------
CREATE TABLE IF NOT EXISTS `#__portals_categories` (
  `portals_category_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `ordering` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1',
  `created_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) NOT NULL DEFAULT '0',
  `modified_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified_by` int(11) NOT NULL DEFAULT '0',
  `locked_on` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `locked_by` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`portals_category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
--  Insert for `#__cck_fieldsets`
-- ----------------------------
INSERT IGNORE INTO `#__cck_fieldsets` (`cck_fieldset_id`, `title`, `slug`, `enabled`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`)
VALUES
  (1300,'Portal','portal',1,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,'2013-10-16 14:48:46',349);

-- ----------------------------
--  Insert for `#__cck_fieldsets_elements`
-- ----------------------------
INSERT IGNORE INTO `#__cck_fieldsets_elements` (`cck_fieldset_id`, `cck_element_id`, `placeholder`, `default`, `validator`, `required`, `ordering`, `enabled`, `created_on`, `created_by`, `modified_on`, `modified_by`, `locked_on`, `locked_by`)
VALUES
	(1300,6,'','','',0,3,1,'2013-10-16 14:48:46',349,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0);