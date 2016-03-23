<?php

/*CUSTOM THEME CODES ADDED BY LIZ*/

//Enqueue Multiple CSS Files For Child Theme 


//Register Header Off Canvas Menu

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );


//Javascript Sidebar Navigation 

function register_my_scripts() {
  wp_deregister_script('jquery');  
  wp_register_script('jquery', "http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js", array(),'2.1.0',true);
  wp_register_script('modernizer', get_template_directory_uri()."/js/modernizr.js",array(),'2.7.1', true);
  wp_register_script('foundation', get_template_directory_uri()."/js/foundation.min.js", array('jquery'),'5.1.1',true);
  


  wp_enqueue_script(array('jquery','modernizer','foundation'));
}

function register_my_styles(){
  wp_register_style('reset', get_template_directory_uri()."/css/normalize.css",array(),'5.1.1','screen');
  wp_register_style('main', get_template_directory_uri()."/style.css",array(),'2.7','all');  
    wp_register_style('foundation', get_template_directory_uri()."/css/foundation.min.css",array('main'),'5.1.1','screen');

  wp_enqueue_style(array('reset','main','foundation'));
}

add_action('wp_print_scripts','register_my_scripts');
add_action('wp_print_styles', 'register_my_styles');

?>




