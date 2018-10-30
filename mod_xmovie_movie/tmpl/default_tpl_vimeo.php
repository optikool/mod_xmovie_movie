<?php
$document->addStyleSheet(JURI::base(true).'/components/com_xmovie/css/video-js.css');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/video.js');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/videojs-vimeo.js');
?>
<video
  id="xmovie-youtube"
  class="video-js vjs-default-skin vjs-big-play-centered"
  controls
  width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>"
  data-setup='{ "techOrder": ["vimeo"], "sources": [{ "type": "video/vimeo", "src": "<?php echo $movieinfo->videoLink; ?>"}], "vimeo": { "color": "#000000"} }'
>
</video>