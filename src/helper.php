<?php
/*
 * @package Joomla 2.5
 * @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
 *
 * @component XMovie Component
 * @copyright Copyright (C) Dana Harris optikool.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
 */
defined('_JEXEC') or die('Restricted access');

class modXMovieMovieHelper {
		
	public static function getMovie(&$params) {
		$db = JFactory::getDBO();		
		$query = $db->getQuery(true);
		$cid = implode(',', $params->get('cid', array()));
		$id = $params->get('id', 0);
		
		$query->select('*');
		$query->from('#__xmovie_movies');
		
		if(!$params->get('show_protected')) {
			$user	= JFactory::getUser();
			$groups	= implode(',', $user->getAuthorisedViewLevels());
			$query->where('access IN ('.$groups.')');
		}
			
		if($id == 0) {
			if(count($cid) > 0) {				
				$query->where('catid IN ('.$cid.')');
			}
		} else {
			$query->where("id = {$id}");
		}
		
		$query->where("published = 1");
		
		switch($params->get('view_mode')) {
			case "viewed":
				$sort_method = "hits DESC";				
				break;
			case "random":
				$sort_method= "RAND()";				
				break;
			case "oldest":
				$sort_method= "creation_date ASC";			
				break;
			case "latest":
			default:
				$sort_method= "creation_date DESC";					
				break;				
		}
		
		$query->order($sort_method);
	
		$db->setQuery($query, 0 , 1);
		$mList = $db->loadObjectList();
		
		return $mList[0];
	}
	
	public function loadYoutubeTracking() {
		$document = JFactory::getDocument();
		$document->addScript(JURI::base().'/components/com_xmovie/js/video.tracking.youtube.min.js');
	}
}	
?>