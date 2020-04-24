<?php
/*
  The public-facing functionality of the plugin.

    @since      1.0.0

  Defines the plugin name, version and display section
*/

if(!class_exists('wpsp_publicFunctions')){
  class wpsp_publicFunctions{
    private $plugin_name;
    private $version;

    /* Initializing the class */
    public function __construct($plugin_name, $version){
      $this->plugin_name = $plugin_name;
      $this->version = $version;
    }

    /* Registering scripts and styles */
    public function enqueue_styles(){
      wp_enqueue_style($this->plugin_name, plugin_dir_url(__FILE__), 'css/wpsp_protect_public.css', array(), $this->version, 'all');
    }
    public function enqueue_scripts(){
      wp_enqueue_script($this->plugin_name, plugin_dir_url(__FILE__), 'js/wpsp_protect_public.js', array('jquery'),$this->version, false);
    }

  }
}



 ?>
