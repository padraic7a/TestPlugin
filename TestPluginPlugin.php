<?php

// The FooPlugin.php file must contain a PHP class with the same name (without the .php). Generally, this class will be a subclass of Omeka_Plugin_AbstractPlugin. See http://omeka.readthedocs.org/en/latest/Tutorials/understandingOmeka_Plugin_AbstractPlugin.html for details

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

