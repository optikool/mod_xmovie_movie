<?php
$name = 'xmovie-dailymotion';
$attrs = "width='{$movieinfo->size['width']}' height='{$movieinfo->size['height']}' frameborder='0' allowfullscreen";
$embed = JHtml::iframe($movieinfo->videoLink, $name, $attrs);
echo $embed;
?>
