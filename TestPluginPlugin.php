<?php

class TestPluginPlugin extends Omeka_Plugin_AbstractPlugin


 {
 protected $_hooks = array('initialize');
 
 public function hookInitialize()
 {
 add_shortcode('test_plugin', array($this, 'shortcode'));
 }
 
 public function shortcode($select, $view)
{
	
$select = get_db()->getTable('ElementText')->getSelect()
	-> distinct()
	-> where('element_id=?', 37) 
	-> ORwhere('element_id=?', 39);

return $select;

return 'Hello shortcode!';

}

}

?>
