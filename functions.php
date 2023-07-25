<?php
/**
 * Theme Functions
 */

// Enqueue styles and scripts
function theme_enqueue_scripts() {
    // Enqueue your custom styles
    wp_enqueue_style('theme-style', get_stylesheet_uri());

    // Enqueue your custom JavaScript files
    wp_enqueue_script('theme-main', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// Add theme support
function theme_setup() {
    // Add support for post thumbnails/featured images
    add_theme_support('post-thumbnails');

    // Add support for custom logos
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
    ));

    // Add support for custom navigation menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'theme-textdomain'),
    ));
}
add_action('after_setup_theme', 'theme_setup');
