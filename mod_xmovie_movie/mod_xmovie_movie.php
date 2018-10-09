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

$mcode = MovieHelper::getEmbedCode($movieinfo, $params->get('movie_width'), $params->get('movie_height'), $params->get('pixel_percent'));

if($params->get('show_description')) {
	$movieinfo->description = $movieinfo->fulltext;
} elseif($params->get('show_quicktake')) {
	$movieinfo->description = $movieinfo->introtext;
} else {
	$movieinfo->description = '';
}

if($params->get('show_css')) {
	$document = JFactory::getDocument();
	$document->addStyleSheet(JURI::root(true).'/modules/mod_xmovie_movie/css/default-style.css');
}

if($params->get('load_jquery')) {
	$document->addScript(JURI::root(true).'/components/com_xmovie/js/jquery.min.js');
	$document->addScript(JURI::root(true).'/components/com_xmovie/js/jquery-ui-custom.min.js');	
	//$document->addScript(JURI::root(true).'/components/com_xmovie/js/jquery.tools.min.js');	
}

if($movieinfo->type == '13' || $movieinfo->type == '14' || $movieinfo->type == '23' || $movieinfo->type == '24' || $params->get('load_flowplayer')) {
	$document->addScript(JURI::base(true).'/components/com_xmovie/js/flowplayer.min.js');
	$document->addStyleSheet(JURI::base(true).'/components/com_xmovie/css/skin/all-skins.css');
	$document->addStyleSheet(JURI::base(true).'/components/com_xmovie/css/flowplayer-style.css');
}

require JModuleHelper::getLayoutPath('mod_xmovie_movie', $params->get('layout', 'default'));
?>
