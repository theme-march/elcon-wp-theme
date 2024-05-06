<?php

/**
 *  Theme Setup
 */

 function elcon_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    // Add custom image sizes
    add_image_size('custom-thumbnail', 300, 200, true);
    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my_theme'),
        'footer' => __('Footer Menu', 'my_theme')
    ));
}
add_action('after_setup_theme', 'elcon_theme_setup');