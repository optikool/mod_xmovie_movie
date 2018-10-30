<?php
$name = 'xmovie-veoh';
$attrs = "width='{$movieinfo->size['width']}' height='{$movieinfo->size['height']}' scrolling='no' frameborder='0' webkitallowfullscreen mozallowfullscreen allowfullscreen";
$embed = JHtml::iframe($movieinfo->videoLink, $name, $attrs);
echo $embed;
?>