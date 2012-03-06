<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Benjamin Wöster. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

$facebookLikePlugin = modFacebookLikeHelper::getPluginMarkup( $params );
$moduleclass_sfx = htmlspecialchars( $params->get('moduleclass_sfx') );

require JModuleHelper::getLayoutPath( 'mod_facebook_like', $params->get('layout','default') );
