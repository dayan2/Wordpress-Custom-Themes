<?php

function load_css() {
    wp_register_style('app', get_template_directory_uri() . '/dist/app.css', array(), false, 'all' );
    wp_enqueue_style('app');
}
add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('main', get_template_directory_uri() . '/dist/app.js', array( 'jquery' ), false, true);
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_js');



add_theme_support('menus');
add_theme_support('post-thumbnails');