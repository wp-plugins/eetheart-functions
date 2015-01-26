<?php
/**
 * Plugin Name: Eetheart Functions
 * Plugin URI: http://eetheart.com
 * Description: Used for coding. Don't remove or deactivate, unless you know what you're doing.
 * Version: 1.0
 * Author: Robert Eetheart
 * Author URI: http://facebook.com/Eetheart
 * License: GPL2 http://www.gnu.org/licenses/gpl-2.0.html
 */

//SCRIPTS
function eetheart_scripts(){
    wp_register_script('eetheart_script', plugin_dir_url( __FILE__ ).'js/eetheart.js');
    wp_enqueue_script('eetheart_script');
}
//add_filter('the_content', 'r4f_process');
add_action('wp_enqueue_scripts','eetheart_scripts');