<?php
/*
This is the settings page. This should be made available only if you're the admin.

Used to give general info on how to use this plugin.
*/

if(!class_exists('wpsp_pluginSettings')){

  class wpsp_pluginSettings{

    public static function init(){
      register_setting('wpsp_testSetting', 'wpsp_option_testSetting');
    }

    public static function getTestSetting(){
      return get_option('wpsp_option_testSetting');
    }

  }
  wpsp_pluginSettings::init();
  wpsp_pluginSettings::getTestSetting();

}

 ?>
