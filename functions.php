<?php
/**
 * Theme functions and definitions
 * 
 * @Package Satyacustom2026
 */



if( ! defined('SATYA_DIR_PATH')){
  define('SATYA_DIR_PATH', untrailingslashit( get_template_directory()));
}

if ( ! defined('SATYA_DIR_URI')){
  define('SATYA_DIR_URI', untrailingslashit( get_template_directory_uri()));
}
// echo '<pre>';
// print_r( SATYA_DIR_URI);
// wp_die();

require_once SATYA_DIR_PATH . '/inc/helpers/autoloader.php';

function satya_get_theme_instance(){
  \SATYA_THEME\Inc\SATYA_THEME::get_instance();
}
satya_get_theme_instance();

?>