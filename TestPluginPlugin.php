<?php

class TestPluginPlugin extends Omeka_Plugin_AbstractPlugin


 {
 protected $_hooks = array('initialize');
 
 public function hookInitialize()
 {
 add_shortcode('test_plugin', array($this, 'shortcode'));
 }
 
 public function shortcode($sql, $view)
{
$sql = Omeka_Db_Select()
             ->from('omeka_element_texts',array('DISTINCT(text)'))
             ->where('element_id =37','element_id =39');

return $sql;
return 'Hello shortcode!';

}

}

?>
