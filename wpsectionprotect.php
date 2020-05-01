<?php
/**
 * The main plugin file of WP Section Protect
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           WP_Section_protect
 *
 * @wordpress-plugin
 * Plugin Name:       WP Section protect
 * Plugin URI:        https://pixelmediapress.com/
 * Description:       A plugin that can create protected sections based on given parameters.
 * Version:           1.0.0
 * Author:            Sachin Sukumaran
 * Author URI:        https://wireplugged.com/home/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wpsp_section_protect
 * Domain Path:       /languages
 */

 // If this file is called directly, abort.
 if ( ! defined( 'WPINC' ) ) {
 	die;
 }

 define('WPSPP_VERSION', '1.0.0');

 /*
    The code that runs during plugin activation
 */
 function activate_wpsp_protect() {
 	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpspp-activator.php';
 	wpsp_plugin_activator::activate();
 }

 /*
    The code that runs during plugin deactivation
 */
 function deactivate_wpsp_protect() {
  require_once plugin_dir_path( __FILE__ ) . 'includes/class-wpspp-deactivator.php';
  wpsp_plugin_deactivator::deactivate();
 }

 register_activation_hook(__FILE__, 'activate_wpsp_protect');
 register_deactivation_hook(__FILE__, 'deactivate_wpsp_protect');

 /**
  * The core plugin class that is used to define internationalization,
  * admin-specific hooks, and public-facing site hooks.
  */

  require plugin_dir_path(__FILE__).'includes/class-wpsectionprotect.php';

  /**
   * Begins execution of the plugin.
   *
   * Since everything within the plugin is registered via hooks,
   * then kicking off the plugin from this point in the file does
   * not affect the page life cycle.
   *
   * @since    1.0.0
   */

   function run_wpspprotect(){
     $plugin = new WPSPProtect();
     $plugin->run();
   }

   run_wpspprotect();
 ?>
