<OBJECT id='mediaPlayer' width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>" classid='CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95' codebase='http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701' standby='Loading Microsoft Windows Media Player components...' type='application/x-oleobject'>
    <param name='fileName' value='<?php echo $movieinfo->videoLink; ?>'>
    <param name='animationatStart' value='true'>
    <param name='transparentatStart' value='true'>
    <param name='showControls' value='true'>
    <param name='loop' value='false'>
    <EMBED 
        type='application/x-mplayer2' 
        pluginspage='http://microsoft.com/windows/mediaplayer/en/download/' 
        id='mediaPlayer' 
        name='mediaPlayer' 
        displaysize='4' 
        autosize='-1' 
        bgcolor='darkblue' 
        showcontrols='true' 
        showtracker='-1' 
        showdisplay='0' 
        showstatusbar='-1' 
        videoborder3d='-1' 
        width="<?php echo $movieinfo->size['width']; ?>"
        height="<?php echo $movieinfo->size['height']; ?>" 
        src='<?php echo $movieinfo->videoLink; ?>' 
        designtimesp='5311' 
        loop='false'>
    </EMBED>
</OBJECT>