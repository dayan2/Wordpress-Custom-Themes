<?php

function load_css() {
    wp_register_style('app', get_template_directory_uri() . '/dist/app.css', array(), false, 'all' );
    wp_enqueue_style('app');

    wp_register_style('carousel', get_template_directory_uri() . '/carousel/owl.carousel.min.css', array(), false, 'all' );
    wp_enqueue_style('carousel');

    wp_register_style('carousel-theme', get_template_directory_uri() . '/carousel/owl.theme.default.css', array(), false, 'all' );
    wp_enqueue_style('carousel-theme');

    wp_register_style('aos', get_template_directory_uri() . '/aos/aos.css', array(), false, 'all' );
    wp_enqueue_style('aos');
}
add_action( 'wp_enqueue_scripts', 'load_css' );

function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('main', get_template_directory_uri() . '/dist/app.js', array( 'jquery' ), false, true);
    wp_enqueue_script('main');

    wp_register_script('carousel-js', get_template_directory_uri() . '/carousel/owl.carousel.min.js', array( 'jquery' ), false, true);
    wp_enqueue_script('carousel-js');

    wp_register_script('aos-js', get_template_directory_uri() . '/aos/aos.js', array(), false, true);
    wp_enqueue_script('aos-js');
}
add_action('wp_enqueue_scripts', 'load_js');



add_theme_support('menus');
add_theme_support('post-thumbnails');