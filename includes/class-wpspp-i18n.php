<?php
  /*
    Internationalization functionality
    Loads and defines the internationalization files for this plugin making it ready for translation
  */

  class wpsp_i18n{

    public function load_plugin_textdomain(){
      load_plugin_textdomain(
        'wpsp_section_protect',
        false,
        dirname(dirname(plugin_basename(__FILE__))).'/languages'
      );
    }

  }

 ?>
