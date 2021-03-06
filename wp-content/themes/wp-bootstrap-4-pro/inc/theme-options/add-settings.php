<?php

require get_template_directory() . '/inc/theme-options/class-theme-kirki.php';

wp_bootstrap_5_Kirki::add_config( 'wp_bootstrap_5_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

wp_bootstrap_5_Kirki::add_panel( 'theme_options', array(
    'priority'    => 31,
    'title'       => esc_html__( 'Theme Options', 'wp-bootstrap-5' ),
) );

wp_bootstrap_5_Kirki::add_field( 'wp_bootstrap_5_theme', array(
	'settings' => 'logo_height',
	'label'    => esc_html__( 'Logo Height (in px)', 'wp-bootstrap-5' ),
	'section'  => 'title_tagline',
	'type'     => 'number',
	'priority' => 8,
	'default'  => 60,
    'tooltip'  => esc_html__( 'Minimum height 25px & maximum height 200px. Width will be adjusted automatically.', 'wp-bootstrap-5' ),
    'choices'  => array(
		'min'  => 25,
		'max'  => 200,
		'step' => 1,
	),
    'output'   => array(
        array(
			'element'  => '.custom-logo',
			'property' => 'height',
			'units'    => 'px',
		),
        array(
			'element'       => '.custom-logo',
			'property'      => 'width',
            'value_pattern' => 'auto',
		)
    )
) );

// Add settings
include( get_template_directory() . '/inc/theme-options/theme-colors.php' );
include( get_template_directory() . '/inc/theme-options/typography.php' );
include( get_template_directory() . '/inc/theme-options/layout.php' );
include( get_template_directory() . '/inc/theme-options/static-frontpage.php' );
include( get_template_directory() . '/inc/theme-options/static-frontpage-slider.php' );
include( get_template_directory() . '/inc/theme-options/blog-home.php' );
include( get_template_directory() . '/inc/theme-options/footer-text.php' );


/**
* Styling Customizer
*/
function wp_bootstrap_5_customizer_css()
{
	if( class_exists( 'Kirki' ) ) {
		wp_enqueue_style( 'wp-bootstrap-5-customizer-css', get_template_directory_uri() . '/inc/theme-options/customizer.css' );
	}
}
add_action( 'customize_controls_print_styles', 'wp_bootstrap_5_customizer_css' );
