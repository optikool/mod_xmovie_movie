<object classid='clsid:d27cdb6e-ae6d-11cf-96b8-444553540000' codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0' width='<?php echo $movieinfo->size['width']; ?>' height='<?php echo $movieinfo->size['height']; ?>' align='middle'>";
    <param name='allowScriptAccess' value='sameDomain' />
    <param name='allowFullScreen' value='true' />
    <param name='movie' value='<?php echo $movieinfo->videoLink; ?>' />
    <param name='quality' value='high' />
    <param name='wmode' value='transparent' />
    <param name='bgcolor' value='#ffffff' />
    <?php
        $flashvars = '';
        if ($movieinfo->flashvars != '') {
    ?>
    <param name='flashVars' value='<?php echo $movieinfo->flashvars; ?>' />
    <?php
            $flashvars = "flashvars='{$movieinfo->flashvars}' ";
        }
    ?>
    <embed 
        src='<?php echo $movieinfo->videoLink; ?>' 
        quality='high' 
        wmode='transparent' 
        bgcolor='#ffffff' 
        <?php echo $flashvars; ?> 
        width='<?php echo $movieinfo->size['width']; ?>' 
        height='<?php echo $movieinfo->size['height']; ?>' 
        align='middle' 
        allowScriptAccess='sameDomain' 
        allowFullScreen='false' 
        type='application/x-shockwave-flash' 
        pluginspage='http://www.macromedia.com/go/getflashplayer'>
    </embed>
</object>";