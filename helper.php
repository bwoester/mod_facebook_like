<?php
/**
 * @copyright	Copyright (C) 2005 - 2011 Benjamin Wöster. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;



abstract class modFacebookLikeHelper
{
  public static function getPluginMarkup( $params )
  {
    return '<fb:like send="false" width="450" show_faces="true"></fb:like>';
  }
}
