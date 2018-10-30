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

jimport('joomla.form.formfield');

class JFormFieldMovie extends JFormField {
	protected $type = 'Movie';
	
	protected function getInput() {
		$db = JFactory::getDBO();
		
		$query = 'SELECT id, title AS name FROM #__xmovie_movies WHERE published=1 ORDER BY name';
		$db->setQuery($query);
		$options = $db->loadObjectList();
		$first[] = new stdClass;
		$first[0]->id = 0;
		$first[0]->name = JTEXT::_('MOD_XMOVIE_MOVIE_SELECT_ALL');
		
		$moptions = array_merge($first, $options);
		
		return JHtmlSelect::genericlist($moptions, $this->name, 'class="inputbox" style="width: 220px;"', 'id', 'name', $this->value);
	}
}