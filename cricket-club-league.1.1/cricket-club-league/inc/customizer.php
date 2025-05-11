<?php
/**
 * Customizer
 * 
 * @package WordPress
 * @subpackage cricket-club-league
 * @since cricket-club-league 1.0
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function cricket_club_league_customize_register( $wp_customize ) {
	$wp_customize->add_section( new Cricket_Club_League_Upsell_Section($wp_customize,'upsell_section',array(
		'title'            => __( 'Cricket Club League Pro', 'cricket-club-league' ),
		'button_text'      => __( 'Upgrade Pro', 'cricket-club-league' ),
		'url'              => 'https://www.wpradiant.net/products/cricket-club-wordpress-theme',
		'priority'         => 0,
	)));
}
add_action( 'customize_register', 'cricket_club_league_customize_register' );

/**
 * Enqueue script for custom customize control.
 */
function cricket_club_league_custom_control_scripts() {
	wp_enqueue_script( 'cricket-club-league-custom-controls-js', get_template_directory_uri() . '/assets/js/custom-controls.js', array( 'jquery', 'jquery-ui-core', 'jquery-ui-sortable' ), '1.0', true );
	wp_enqueue_style( 'cricket-club-league-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
}
add_action( 'customize_controls_enqueue_scripts', 'cricket_club_league_custom_control_scripts' );