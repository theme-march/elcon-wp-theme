<?php

if ( class_exists( 'Kirki' ) ) {
    new \Kirki\Panel(
        'footer_panel_id',
        [
            'priority'    => 10,
            'title'       => esc_html__( 'Fooder', 'kirki' ),
            'description' => esc_html__( 'My Panel Fooder.', 'kirki' ),
        ]
    );
    //Footer Left
    new \Kirki\Section(
        'footer_left_id',
        [
            'title'       => esc_html__( 'Fooder Left', 'kirki' ),
            'description' => esc_html__( 'Fooder Left Section', 'kirki' ),
            'panel'       => 'footer_panel_id',
            'priority'    => 160,
        ]
    );
    new \Kirki\Field\Text(
        [
            'settings' => 'footer_header_text_setting',
            'label'    => esc_html__( 'Header Text', 'kirki' ),
            'section'  => 'footer_left_id',
            'default'  => esc_html__( 'ABOUT US', 'kirki' ),
            'priority' => 10,
        ]
    );
    new \Kirki\Field\Image(
        [
            'settings'    => 'footer_image_setting_url',
            'label'       => esc_html__( 'Image Control (URL)', 'kirki' ),
            'description' => esc_html__( 'The saved value will be the URL.', 'kirki' ),
            'section'     => 'footer_left_id',
            'default'     => '',
        ]
    );

    new \Kirki\Field\Text(
        [
            'settings' => 'footer_desp_text_setting',
            'label'    => esc_html__( 'Desp Text', 'kirki' ),
            'section'  => 'footer_left_id',
            'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut labore et dolore magna aliqua', 'kirki' ),
            'priority' => 12,
        ]
    );


     //Footer Right
     new \Kirki\Section(
        'footer_right_id',
        [
            'title'       => esc_html__( 'Fooder Right', 'kirki' ),
            'description' => esc_html__( 'Fooder Right Section', 'kirki' ),
            'panel'       => 'footer_panel_id',
            'priority'    => 160,
        ]
    );

    new \Kirki\Field\Editor(
        [
            'settings' => 'footer_right_text_setting',
            'label'    => esc_html__( 'Desp Text', 'kirki' ),
            'section'  => 'footer_right_id',
            'default'  => esc_html__( '', 'kirki' ),
            'priority' => 12,
        ]
    );


}


?>