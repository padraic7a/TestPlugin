<?php

class TestPluginPlugin extends Omeka_Plugin_AbstractPlugin
{
protected $_hooks = array('initialize');

public function hookInitialize()
{
add_shortcode('test_plugin', array($this, 'shortcode'));
}


public function shortcode($args, $view)
{
return 'This is a very simple shortcode.';
}
}

 
?>

