<object width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>" classid='clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B' codebase='http://www.apple.com/qtactivex/qtplugin.cab'>
    <param name='src' value='<?php echo $movieinfo->videoLink; ?>'>
    <param name='controller' value='true'>
    <embed 
        src='<?php echo $movieinfo->videoLink; ?>' 
        width="<?php echo $movieinfo->size['width']; ?>" 
        height="<?php echo $movieinfo->size['height']; ?>" 
        controller='true' 
        pluginspage='http://www.apple.com/quicktime/download/'>
    </embed>
</object>