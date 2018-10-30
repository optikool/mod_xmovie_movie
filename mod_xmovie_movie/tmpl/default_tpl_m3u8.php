<?php
$document->addStyleSheet(JURI::base(true).'/components/com_xmovie/css/video-js.css');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/video.js');
$document->addScript(JURI::base().'/components/com_xmovie/js/vjs/videojs-contrib-hls.min.js');
?>
<video id="my-video" class="video-js vjs-default-skin vjs-big-play-centered" controls preload="auto" width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>" poster="<?php echo $movieinfo->posterLink; ?>" data-setup="{}">
    <source src="<?php echo $movieinfo->videoLink; ?>" type="application/x-mpegURL">
    <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that<a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
</video>