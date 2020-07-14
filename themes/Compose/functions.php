<?php

function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');

    wp_register_style('app', get_template_directory_uri() . '/dist/app.css', array(), false, 'all' );
    wp_enqueue_style('app');
}
add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrapJS', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), false, true);
    wp_enqueue_script('bootstrapJS');
    wp_register_script('main', get_template_directory_uri() . '/dist/app.js', array( 'jquery' ), false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');



add_theme_support('menus');
add_theme_support('post-thumbnails');


add_image_size('image-large', 1750, 825, true);

//Actvate Nav menu
function register_menu() {
    register_nav_menu('primary', 'Header nav menu');
}
add_action( 'after_setup_theme', 'register_menu');
/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );