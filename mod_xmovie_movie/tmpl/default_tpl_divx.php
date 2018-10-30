<object classid='clsid:67DABFBF-D0AB-41fa-9C46-CC0F21721616' width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>" codebase='http://go.divx.com/plugin/DivXBrowserPlugin.cab'>
    <param name='custommode' value='none' />
    <param name='src' value='<?php echo $movieinfo->videoLink; ?>' />
    <embed type='video/divx' src="<?php echo $movieinfo->videoLink; ?>" custommode='none' width="<?php echo $movieinfo->size['width']; ?>" height="<?php echo $movieinfo->size['height']; ?>" pluginspage='http://go.divx.com/plugin/download/'></embed>
</object>