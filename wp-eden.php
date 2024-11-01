<?php

/**
 *
Plugin Name: WP-Eden
Plugin URI: http://autoloadmanager.shawnsandy.com.com
Description: A Simple WordPress pluhin of Eden -  Eden simply a set of reusable components, that works with any PHP framework and CMS. Eden makes code logical and readable with dead simple syntax.
Author URI: http://shawnsandy.com
Version: 1.2
 *
 *
*/

/**
 * include the eden
 */

include_once trailingslashit( plugin_dir_path( __FILE__ ) ).'/eden.php';

function init_wp_eden(){
 //Features in future versions
}

add_action('init', 'init_wp_eden');