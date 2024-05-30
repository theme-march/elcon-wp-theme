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


    //widgets
    add_theme_support( 'widgets' );
    remove_theme_support( 'widgets-block-editor' );

    //customzation logo
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    
    

}
add_action('after_setup_theme', 'elcon_theme_setup');


function mytheme_customize_register($wp_customize) {
    // Add a new section
    $wp_customize->add_section('mytheme_new_section', array(
        'title'      => __('Header location Add', 'mytheme'),
        'priority'   => 30,
    ));

    // Add a new setting
    $wp_customize->add_setting('mytheme_text_setting', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    // Add a control for the setting
    $wp_customize->add_control('mytheme_text_control', array(
        'label'    => __('Location Adress', 'mytheme'),
        'section'  => 'mytheme_new_section',
        'settings' => 'mytheme_text_setting',
        'type'     => 'text',
    ));
}
add_action('customize_register', 'mytheme_customize_register');
