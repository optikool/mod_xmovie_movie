<?php
/*
 * @package Joomla 3.0
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component XMovie Component
 * @copyright Copyright (C) Dana Harris optikool.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');

jimport('joomla.application.component.helper');

if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

// Include the syndicate functions only once
require_once dirname(__FILE__).'/helper.php';

require_once (JPATH_SITE.DS.'components'.DS.'com_xmovie'.DS.'router.php');
require_once (JPATH_SITE.DS.'components'.DS.'com_xmovie'.DS.'helpers'.DS.'movie.php');

MovieHelper::setCookieParams();	

$document = JFactory::getDocument();

$movieinfo = modXMovieMovieHelper::getMovie($params);

$layout = $params->get('display_layout');

$user = JFactory::getUser($movieinfo->user_id);
$movieinfo->submitter = $user->username;

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

if($params->get('show_description')) {
	$movieinfo->description = $movieinfo->fulltext;
} elseif($params->get('show_quicktake')) {
	$movieinfo->description = $movieinfo->introtext;
} else {
	$movieinfo->description = '';
}

if($params->get('show_css')) {
	$document->addStyleSheet(JURI::root(true).'/modules/mod_xmovie_movie/css/style.css');
}

require JModuleHelper::getLayoutPath('mod_xmovie_movie', $params->get('layout', 'default'));
?>
