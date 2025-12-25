<?php
/**
 * Theme functions and definitions\
 * 
 * @Package Satyacustom2026
 */


function satya_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support('site-icon');
    add_theme_support('custom-logo', array(
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

add_action( 'after_setup_theme', 'satya_theme_setup' );

// echo '<pre>';
// print_r(get_stylesheet_uri());
// print_r( filemtime(get_template_directory() . '/style.css'));
// wp_die();

function satya_enqueue_scripts(){
  // wp_enqueue_style('main', get_template_directory_uri() . '/main.css', array(), '1.0', 'all', ['stylesheet']);


// Register style 

  // wp_enqueue_style('style-css', get_template_directory_uri() . '/style.css', [], filemtime(get_template_directory() . '/style.css'), 'all');

  wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(get_template_directory() . '/style.css'), 'all');
  wp_register_style('bootstrap-css', get_template_directory_uri() . '/assets/library/css/bootstrap.min.css', [] , false,  'all');



  // Register scripts 

  // wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

  wp_register_script('main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime(get_template_directory() . '/assets/main.js'), true);

  
  wp_register_script('bootstrap-js', get_template_directory_uri() . '/assets/library/js/bootstrap.min.js', ['jquery'] , false, true);


  // Enqueue style and script 

  wp_enqueue_style('style-css');
  wp_enqueue_style('bootstrap-css');
  wp_enqueue_script('main-js');
  wp_enqueue_script('bootstrap-js');


}
add_action('wp_enqueue_scripts', 'satya_enqueue_scripts');
?>