<?php
  /*
  Plugin Name: WP Section protect
  Plugin URI: https://pixelmediapress.com/
  Description: A plugin that can create protected sections based on given parameters.
  Version: 1.0
  Author: Sachin Sukumaran
  Author URI: https://wireplugged.com/home/
  License: GPL2
  */

/*
  This function is courtesy of WPShout... this creates a test function to output the current variables that the plugin is currently holding. This would only output if there is a query string of the form 'wpsp='.

  This function will not make it to production

*/
  add_action('init', 'wpsp_do_something');
  function wpsp_do_something(){
    if(!isset($_GET['wpsp'])) :
      return;
    endif;
    // Add troubleshooting code here
    var_dump("Here");
    die;
  }

?>
