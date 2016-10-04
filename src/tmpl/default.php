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

$contId = $params->get('container_id', '');
$contIdInner = '';
if($contId != '') {
	$contIdInner = ' '.$contId.'-inner';
	$contId = 'id="'.$contId.'"';
}
?>

<div <?php echo $contId; ?> class="<?php echo $moduleclass_sfx; ?>">
	<div class="movie-container<?php echo $contIdInner; ?>">
		<?php echo $mcode; ?>
	</div>
	<div>
		<?php if($params->get('show_title')) {?>
		<h3><?php echo $movieinfo->title; ?></h3>
		<?php } ?>
				
		<?php if($params->get('show_date') || $params->get('show_hits') || $params->get('show_submitter')) {?>
		<ul class="list inline">
			<?php if($params->get('show_date')) {?>
			<li class="movie-date"><strong><?php echo JTEXT::_('MOD_XMOVIE_MOVIE_DATE_ADDED'); ?>:</strong> <span class="xmm-date"><?php echo JHTML::Date($movieinfo->creation_date, 'm-d-Y'); ?></span></li>
			<?php } ?>
			<?php if($params->get('show_hits')) {?>
			<li class="movie-hits"><strong><?php echo JTEXT::_('MOD_XMOVIE_MOVIE_HITS'); ?>:</strong> <span class="xmm-hits"><?php echo $movieinfo->hits; ?></span></li>
			<?php } ?>
			<?php if($params->get('show_submitter')) {?>
			<li class="movie-sumbitter"><strong><?php echo JTEXT::_('MOD_XMOVIE_MOVIE_SUBMITTER'); ?>:</strong> <span class="xmm-submitter"><?php echo $movieinfo->submitter; ?></span></li>
			<?php } ?>
		</ul>
		<?php } ?>
		
		<?php if($params->get('show_description') || $params->get('show_quicktake')) {?>
		<caption><?php echo $movieinfo->description; ?></caption>
		<?php } ?>
	</div>
</div>
