<?php
/*
class file
includes functions to process the shortcode
*/

if(!class_exists('wpsp_processShortcode')){

  class wpsp_processShortcode{

    public static function init(){
      register_setting('wpsp_testSetting', 'wpsp_option_testSetting');
    }

    public static function getTestSetting(){
      return get_option('wpsp_option_testSetting');
    }

  }
  wpsp_processShortcode::init();
  wpsp_processShortcode::getTestSetting();
}

?>
