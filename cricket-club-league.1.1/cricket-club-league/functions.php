<?php
/**
 * Cricket Club League functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cricket-club-league
 * @since cricket-club-league 1.0
 */

if ( ! function_exists( 'cricket_club_league_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since cricket-club-league 1.0
	 *
	 * @return void
	 */
	function cricket_club_league_support() {

		load_theme_textdomain( 'cricket-club-league', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

		add_theme_support( 'responsive-embeds' );
		
		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );
	}

endif;

add_action( 'after_setup_theme', 'cricket_club_league_support' );

if ( ! function_exists( 'cricket_club_league_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since cricket-club-league 1.0
	 *
	 * @return void
	 */
	function cricket_club_league_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'cricket-club-league-style',
			get_template_directory_uri() . '/style.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'cricket-club-league-style' );

		wp_enqueue_style( 'dashicons' );

		wp_style_add_data( 'cricket-club-league-style', 'rtl', 'replace' );
	}

endif;

add_action( 'wp_enqueue_scripts', 'cricket_club_league_styles' );

/* Enqueue Custom Js */
function cricket_club_league_scripts() {

	wp_enqueue_script( 
		'cricket-club-league-custom', esc_url(get_template_directory_uri()) . '/assets/js/custom.js',
		array('jquery') 
	);

	wp_enqueue_script(
        'cricket-club-league-scroll-to-top', 
        esc_url(get_template_directory_uri()) . '/assets/js/scroll-to-top.js', 
        array(), 
        null, 
        true // Load in footer
    );
}
add_action( 'wp_enqueue_scripts', 'cricket_club_league_scripts' );

// Add block patterns
require get_template_directory() . '/inc/block-pattern.php';

// Add block Style
require get_template_directory() . '/inc/block-style.php';

// TGM
require get_template_directory() . '/inc/tgm/plugin-activation.php';

// Add Customizer
require get_template_directory() . '/inc/customizer.php';

// Get Started
require get_template_directory() . '/get-started/getstart.php';

// Notice
require get_template_directory() . '/get-started/notice.php';