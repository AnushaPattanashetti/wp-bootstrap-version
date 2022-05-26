<?php

wp_bootstrap_5_Kirki::add_section( 'wp_bp_frontpage', array(
    'title'          => esc_html__( 'Static Frontpage', 'wp-bootstrap-5' ),
    'panel'          => 'theme_options',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

if( class_exists( 'Kirki' ) ) {
    function wp_bootstrap_5_move_header_bg_image( $wp_customize ) {
        $wp_customize->get_control( 'header_image' )->section = 'wp_bp_frontpage';
    }
    add_action( 'customize_register', 'wp_bootstrap_5_move_header_bg_image' );
}


wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'front_cover_title',
	'label'    => esc_html__( 'Cover Title', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => get_bloginfo( 'name' ),
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'front_cover_lead',
	'label'    => esc_html__( 'Cover Lead', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => get_bloginfo( 'description' ),
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'front_cover_btn_text',
	'label'    => esc_html__( 'Cover Button Text', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => '',
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'front_cover_btn_link',
	'label'    => esc_html__( 'Cover Button Link', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'text',
    'default'  => '',
) );


wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'featured_page_1',
	'label'    => esc_html__( '1st Featured Page', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'featured_page_2',
	'label'    => esc_html__( '2nd Featured Page', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'featured_page_3',
	'label'    => esc_html__( '3rd Featured Page', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'dropdown-pages',
) );


wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'show_main_content',
	'label'    => esc_html__( 'Show Main Content', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_frontpage',
	'type'     => 'checkbox',
    'default'  => 1
) );
