<?php
$document->addStyleSheet(JURI::base(true).'/components/com_xmovie/css/video-js.css');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/video.js');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/Youtube.min.js');
$document->addStyleDeclaration('
  .vjs-control-bar {
    display: none !important;
  }
');
?>
<video
  id="xmovie-youtube"
  class="video-js vjs-default-skin vjs-big-play-centered"
  controls
  width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>"
  data-setup='{ "techOrder": ["youtube"], "sources": [{ "type": "video/youtube", "src": "<?php echo $movieinfo->videoLink; ?>"}], "youtube": { "iv_load_policy": 1,  "ytControls": 1 } }'
>
</video>