<?php

function left_sidebar_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Left Sidebar Widget ', 'mytheme' ),
        'id'            => 'left-sidebar-widget',
        'before_widget' => '<div class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'left_sidebar_widgets_init' );
?>