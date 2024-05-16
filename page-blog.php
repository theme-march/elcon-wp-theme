<?php
/*
Template Name: Custom Post Type Page
*/

get_header();

// Custom query to retrieve custom post type posts
$args = array(
    'post_type' => 'custom_post', // Replace 'custom_post' with your custom post type slug
    'posts_per_page' => -1 // Display all posts
);
$custom_query = new WP_Query( $args );

if ( $custom_query->have_posts() ) :
    while ( $custom_query->have_posts() ) : $custom_query->the_post();
        // Display post title and content
        the_title('<h2>', '</h2>');
        the_content();
    endwhile;
    wp_reset_postdata(); // Reset the post data
else :
    echo '<p>No custom posts found.</p>';
endif;

get_footer();
?>
