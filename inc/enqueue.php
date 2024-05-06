<?php
/**
 *  Enqueue styles
 */

if(! function_exists('elcon_custom_styles')):
function elcon_custom_styles(){
    wp_enqueue_style('bootstrap',
    get_stylesheet_directory_uri().'/plugins/bootstrap/bootstrap.min.css',array(),'5.0','all');
    wp_enqueue_style('all-min', get_stylesheet_directory_uri().'/plugins/fontawesome/css/all.min.css',array(),'1.0','all');
    wp_enqueue_style('animate', get_stylesheet_directory_uri().'/plugins/animate-css/animate.css',array(),'1.0','all');
    wp_enqueue_style('slick', get_stylesheet_directory_uri().'/plugins/slick/slick.css',array(),'1.0','all');
    wp_enqueue_style('slick-theme', get_stylesheet_directory_uri().'/plugins/slick/slick-theme.css',array(),'1.0','all');
    wp_enqueue_style('colorbox', get_stylesheet_directory_uri().'/plugins/colorbox/colorbox.css',array(),'1.0','all');
    wp_enqueue_style('style', get_stylesheet_directory_uri().'/css/style.css',array(),'1.0','all');
    wp_enqueue_style('wp-all-style', get_stylesheet_uri());
}
endif;
add_action("wp_enqueue_scripts","elcon_custom_styles");



/**
 *  Enqueue scripts 
 */

if(!function_exists('elcon_custom_js')):
function elcon_custom_js(){
    wp_enqueue_script('jquery-min',get_template_directory_uri().'/plugins/jQuery/jquery.min.js',array(),'1.2',true);
    wp_enqueue_script('bootstrap-min',get_template_directory_uri().'/plugins/bootstrap/bootstrap.min.js',array(),'1.2',true);
    wp_enqueue_script('slick-min',get_template_directory_uri().'/plugins/slick/slick.min.js',array(),'1.2',true);
    wp_enqueue_script('slick-animation',get_template_directory_uri().'/plugins/slick/slick-animation.min.js',array(),'1.2',true);
    wp_enqueue_script('jquery-colorbox',get_template_directory_uri().'/plugins/colorbox/jquery.colorbox.js',array(),'1.2',true);
    wp_enqueue_script('shuffle-min',get_template_directory_uri().'/plugins/shuffle/shuffle.min.js',array(),'1.2',true);
    wp_enqueue_script('map',get_template_directory_uri().'/plugins/google-map/map.js',array(),'1.2',true);
    wp_enqueue_script('maps-api',get_template_directory_uri().'https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU',array(),'1.2',true);
    wp_enqueue_script('script',get_template_directory_uri().'/js/script.js',array(),'1.2',true);
}
endif;
add_action("wp_enqueue_scripts","elcon_custom_js");