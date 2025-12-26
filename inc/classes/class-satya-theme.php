<?php 

/**
 * 
 * Bootstrap the theme
 * 
 * @package Satyacustom2026
 */
 namespace SATYA_THEME\Inc;

 use SATYA_THEME\Inc\Traits\Singleton;

 class SATYA_THEME{
    use Singleton;
     protected function __construct(){
      // load class

      Assets::get_instance();
      $this->setup_hooks();

     }

     protected function setup_hooks(){
      // action and filter hooks
      add_action( 'after_setup_theme', [ $this, 'theme_setup']);
     }
     public function theme_setup(){
      // theme setup code
       add_theme_support('title-tag');
       add_theme_support('custom-logo', array(
        'header-text'=> [ 'site-title', 'site-description'],
        'height'=> 100,
        'width'=> 400,
        'flex-height'=> true,
        'flex-width'=> true,
       ));
      add_theme_support( 'custom-background', array(
        'default-color' => 'fdfdfd',
        'default-image' => get_template_directory_uri() . '/assets/images/wapuu.png',
        'default-position-x' => 'center',
    'default-position-y' => 'center',
    'default-repeat'     => 'no-repeat',
    'default-size'=> 'cover'
      ) );

     }

 }