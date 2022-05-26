<?php

wp_bootstrap_5_Kirki::add_section( 'wp_bp_footer_text', array(
    'title'          => esc_html__( 'Footer Text', 'wp-bootstrap-5' ),
    'panel'          => 'theme_options',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );


wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings'          => 'footer_text',
	'label'             => esc_html__( 'Footer Text', 'wp-bootstrap-5' ),
	'section'           => 'wp_bp_footer_text',
	'type'              => 'text',
    'default'           => wp_kses_post( __( '<a href="https://bootstrap-wp.com/">Bootstrap 4 WordPress Theme</a> <span class="sep"> | </span> Theme Name: WP Bootstrap 4.', 'wp-bootstrap-5' ) ),
    'sanitize_callback' => 'wp_kses_post',
) );
