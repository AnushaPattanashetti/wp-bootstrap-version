<?php

wp_bootstrap_5_Kirki::add_section( 'wp_bp_layout', array(
    'title'          => esc_html__( 'Layout Settings', 'wp-bootstrap-5' ),
    'panel'          => 'theme_options',
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'container_width',
	'label'    => esc_html__( 'Container Max Width (in px)', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'slider',
    'default'  => 1140,
	'choices'  => array(
		'min'  => '1080',
		'max'  => '1400',
		'step' => '10',
	),
    'output' => array(
		array(
			'element'  => '.container',
			'property' => 'max-width',
			'units'    => 'px',
		),
        array(
			'element'  => '.elementor-section.elementor-section-boxed>.elementor-container',
			'property' => 'max-width',
			'units'    => 'px',
		),
	),
) );

// Header Content Width
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'header_within_container',
	'label'    => esc_html__( 'Header Content Within Container', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 0,
) );

// Transparent header
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'trans_header',
	'label'    => esc_html__( 'Transparent Header on Static Frontpage', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 1,
) );

// Sticky header
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'sticky_header',
	'label'    => esc_html__( 'Sticky Header', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 0,
    'tooltip'  => esc_html__( 'Some browsers may be outdated to support this feature.', 'wp-bootstrap-5' ),
) );

// Full Width Page Title
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'full_page_header',
	'label'    => esc_html__( 'Full Width Page Title with Background', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'checkbox',
    'default'  => 1,
    'tooltip'  => esc_html__( 'This setting is not for static frontpage.', 'wp-bootstrap-5' ),
) );

// Default Sidebar Position
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'default_sidebar_position',
	'label'    => esc_html__( 'Default Sidebar Position', 'wp-bootstrap-5' ),
    'tooltip'  => esc_html__( 'This can be overwritten on the particular page by using a page template.', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'radio',
    'default'  => 'right',
    'choices'  => array(
        'right' => esc_html__( 'Right', 'wp-bootstrap-5' ),
        'left'  => esc_html__( 'Left', 'wp-bootstrap-5' ),
        'no'    => esc_html__( 'No Sidebar', 'wp-bootstrap-5' ),
    )
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'hide_sidebar_on_mobile',
	'label'    => esc_html__( 'Hide Sidebar On Mobile', 'wp-bootstrap-5' ),
	'section'  => 'wp_bp_layout',
	'type'     => 'radio',
    'default'  => 'no',
    'choices' => array(
        'no'  => esc_html__( 'No.', 'wp-bootstrap-5' ),
        'yes'  => esc_html__( 'Yes, hide sidebar on small devices.', 'wp-bootstrap-5' ),
    ),
    'active_callback' => array(
        array(
            'setting'  => 'default_sidebar_position',
            'operator' => '!==',
            'value'    => 'no',
        ),
    ),
) );

// Blog Display
wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings'    => 'default_blog_display',
	'label'       => esc_html__( 'Blog Display', 'wp-bootstrap-5' ),
    'description' => esc_html__( 'Choose between a full post or an excerpt for the blog and archive pages.', 'wp-bootstrap-5' ),
	'section'     => 'wp_bp_layout',
	'type'        => 'radio',
    'default'     => 'excerpt',
    'choices'     => array(
        'excerpt' => esc_html__( 'Post excerpt', 'wp-bootstrap-5' ),
        'full'    => esc_html__( 'Full Post', 'wp-bootstrap-5' ),
    )
) );
