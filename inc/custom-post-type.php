<?php
// Add custom post type function to your theme's functions.php file or a custom plugin

function create_custom_post_type() {
    // Labels for the custom post type
    $labels = array(
        'name'               => _x( 'Blog Posts', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Blog Posts', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Blog Posts', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Blog Posts', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'custom post', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Custom Post', 'your-text-domain' ),
        'new_item'           => __( 'New Custom Post', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Custom Post', 'your-text-domain' ),
        'view_item'          => __( 'View Custom Post', 'your-text-domain' ),
        'all_items'          => __( 'Blog Posts List', 'your-text-domain' ),
        'search_items'       => __( 'Search Custom Posts', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Custom Posts:', 'your-text-domain' ),
        'not_found'          => __( 'No custom posts found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No custom posts found in Trash.', 'your-text-domain' )
    );

    // Arguments to define the custom post type
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-text-domain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'blog-post' ), // Change 'custom-post' to your desired slug url
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'show_in_rest'       => true,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ,'elementor') // Add or remove features as needed
    );

    // Registering your custom post type
    register_post_type( 'Blog_Post', $args );
}
add_action( 'init', 'create_custom_post_type' );
