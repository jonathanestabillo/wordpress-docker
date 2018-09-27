<?php

require get_template_directory() . '/inc/customizer/class-theme-kirki.php';

Blogeasy_Kirki::add_config( 'blogeasy_theme', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

Blogeasy_Kirki::add_panel( 'theme_options', array(
    'priority'    => 31,
    'title'       => esc_html__( 'Theme Options', 'blogeasy' ),
) );

Blogeasy_Kirki::add_field( 'blogeasy_theme', array(
	'settings' => 'logo_height',
	'label'    => esc_html__( 'Logo Height (in px)', 'blogeasy' ),
	'section'  => 'title_tagline',
	'type'     => 'number',
	'priority' => 8,
	'default'  => 60,
    'tooltip'  => esc_html__( 'Minimum height 25px & maximum height 200px. Width will be adjusted automatically.', 'blogeasy' ),
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

include( get_template_directory() . '/inc/customizer/theme-colors.php' );
