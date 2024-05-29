<?php

function footer_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Footer Widget ', 'mytheme' ),
        'id'            => 'footer-widget',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'footer_widgets_init' );
?>