<OBJECT id='rvocx' classid='clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA' width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>">
    <param name='src' value='<?php echo $movieinfo->videoLink; ?>'>
    <param name='controls' value='imagewindow'>
    <param name='console' value='video'>
    <param name='loop' value='false'>
    <EMBED 
        src='<?php echo $movieinfo->videoLink; ?>' 
        width="<?php echo $movieinfo->size['width']; ?>" 
        height="<?php echo $movieinfo->size['height']; ?>" 
        loop='false' 
        type='audio/x-pn-realaudio-plugin' 
        controls='imagewindow' 
        console='video'>
    </EMBED>
</OBJECT>