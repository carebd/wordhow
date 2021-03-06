<?php
/**
 * Customizer settings: Header > Search
 *
 * @package Suki
 **/

// Prevent direct access.
if ( ! defined( 'ABSPATH' ) ) exit;

$section = 'suki_section_header_search';

/**
 * ====================================================
 * Search Bar
 * ====================================================
 */

// Heading: Search Bar
$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_header_search_bar', array(
	'section'     => $section,
	'settings'    => array(),
	'label'       => esc_html__( 'Search Bar', 'suki' ),
	'priority'    => 10,
) ) );

// Search bar width
$id = 'header_search_bar_width';
$wp_customize->add_setting( $id, array(
	'default'     => suki_array_value( $defaults, $id ),
	'transport'   => 'postMessage',
	'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'slider' ),
) );
$wp_customize->add_control( new Suki_Customize_Control_Slider( $wp_customize, $id, array(
	'section'     => $section,
	'label'       => esc_html__( 'Bar width', 'suki' ),
	'units'       => array(
		'px' => array(
			'min'   => 100,
			'max'   => 1600,
			'step'  => 1,
		),
	),
	'priority'    => 10,
) ) );

/**
 * ====================================================
 * Search Dropdown
 * ====================================================
 */

// Heading: Search Dropdown
$wp_customize->add_control( new Suki_Customize_Control_Heading( $wp_customize, 'heading_header_search_dropdown', array(
	'section'     => $section,
	'settings'    => array(),
	'label'       => esc_html__( 'Search Dropdown', 'suki' ),
	'priority'    => 20,
) ) );

// Search bar width
$id = 'header_search_dropdown_width';
$wp_customize->add_setting( $id, array(
	'default'     => suki_array_value( $defaults, $id ),
	'transport'   => 'postMessage',
	'sanitize_callback' => array( 'Suki_Customizer_Sanitization', 'slider' ),
) );
$wp_customize->add_control( new Suki_Customize_Control_Slider( $wp_customize, $id, array(
	'section'     => $section,
	'label'       => esc_html__( 'Dropdown width', 'suki' ),
	'units'       => array(
		'px' => array(
			'min'   => 100,
			'max'   => 1600,
			'step'  => 1,
		),
	),
	'priority'    => 20,
) ) );